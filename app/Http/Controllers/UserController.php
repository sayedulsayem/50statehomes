<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;

class UserController extends Controller
{
    public function index(){
        return view('user.index');
    }
    public function showLogin(){
        return view('front.login');
    }
    public function showRegister(){
        return view('front.register');
    }
    public function registration(Request $request){
        $userExist=User::where('email',$request->email)->count();
        $user=new User();

        if ($userExist > 0){
            return redirect('/register')->with('error','user already exist.');
        }
        else{
            if ($request->hasFile('image')) {
                $file = $request->file('image');
                $extension = $file->getClientOriginalExtension();
                $filename =time().'.'.$extension;
                $file->move('user/images/', $filename);
                $file_path='user/images/'.$filename;
                $user->image=$file_path;
            }

            $user->name=$request->name;
            $user->email=$request->email;
            $user->password=Hash::make($request->password);
            $user->phone=$request->phone;
            $user->phone=$request->phone;
            $status=$user->save();
            if ($status){
                return redirect('login')->with('success','successfully registered.');
            }
            else{
                return redirect('/register')->with('error','something wen\'t wrong. try again.');
            }
        }
    }
    public function verifyLogin(Request $request){
        //return $request;
        $getUserById=User::where('email',$request->email)->first();
        if ($getUserById){
            if (Hash::check($request->password,$getUserById->password)){
                if ($getUserById->status == 'active'){
                    Session::put('id',$getUserById->id);
                    Session::put('name',$getUserById->name);
                    Session::put('email',$getUserById->email);
                    Session::put('phone',$getUserById->phone);
                    Session::put('image',$getUserById->image);
                    Session::put('type',$getUserById->type);
                    Session::put('status',$getUserById->status);
                    Session::put('join_date',date_format($getUserById->created_at,'d-M-Y'));

                    return redirect('/')->with('success','you have successfully logged in');
                }
                else{
                    return redirect('/login')->with('error','you are not active user. please contact with admin for approving');
                }

            }
            else{
                return redirect('/login')->with('error','email and password don\'t match. ');
            }
        }
        else{
            return redirect('/login')->with('error','user don\'t exits. ');
        }
    }

}
