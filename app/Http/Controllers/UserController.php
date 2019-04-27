<?php

namespace App\Http\Controllers;

use App\HouseImage;
use App\LandingHouse;
use App\User;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
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

    public function addHouseLanding(){
        return view('user.pages.add-house-landing');
    }
    public function storeHouseLanding(Request $request){
        $house=new LandingHouse();

        $house->user_id=Session::get('id');
        $house->street=$request->street;
        $house->city=$request->city;
        $house->state=$request->state;
        $house->zip=$request->zip;
        $house->price=$request->price;
        $house->bed=$request->bed;
        $house->bath=$request->bath;
        $house->description=$request->description;
        $house->status=$request->status;
        $h_status=$house->save();

        if ($request->hasFile('image')) {
            foreach ($request->image as $image){
                $house_img=new HouseImage();
                $file = $image;
                $extension = $file->getClientOriginalExtension();
                $file_name_e=$file->getClientOriginalName();
                $file_name = pathinfo($file_name_e, PATHINFO_FILENAME);
                $filename =$file_name.time().'.'.$extension;
                $file->move('user/images/house/', $filename);
                $file_path='user/images/house/'.$filename;
                $house_img->image=$file_path;
                $house_img->house_id=$house->id;
                $i_status=$house_img->save();
            }
        }

        if (isset($h_status) && isset($i_status)){
            return redirect('users/house-landed-list')->with('success','House added successfully.');
        }
        else{
            return redirect('users/add-house-landing')->with('error','Something went wrong. house is not added. try again.');
        }
    }
    public function houseLandendList(){

        $data=LandingHouse::all()->where('status','active');
        $i=0;
        foreach ($data as $house){
            $img=HouseImage::where('house_id',$house->id)->first();
            if (isset($img)){
                $data[$i]['image']=$img->image;
                $i++;
            }
        }
        return view('user.pages.house-landed-list',compact('data'));
    }

    public function editHouseLanding($id){
        $houses=DB::table('landing_houses')
            ->where('landing_houses.id',$id)
            ->Leftjoin('house_images','landing_houses.id','=','house_images.house_id')
            ->get();
        return view('user.pages.edit-house-landing',compact(['houses','id']));
    }

    public function updateHouseLanding(Request $request){
        $house_id=$request->house_id;
        $status=LandingHouse::where('id', '=', $house_id)
            ->update([
                "user_id" => $request->user_id,
                "street" => $request->street,
                "city" => $request->city,
                "state" => $request->state,
                "zip" => $request->zip,
                "price" => $request->price,
                "bed" => $request->bed,
                "bath" => $request->bath,
                "status" => $request->status,
                "description" => $request->description
            ]);
        if ($request->hasFile('image')) {
            HouseImage::where('house_id',$house_id)->delete();
            foreach ($request->image as $image){
                $house_img=new HouseImage();
                $file = $image;
                $extension = $file->getClientOriginalExtension();
                $file_name_e=$file->getClientOriginalName();
                $file_name = pathinfo($file_name_e, PATHINFO_FILENAME);
                $filename =$file_name.time().'.'.$extension;
                $file->move('user/images/house/', $filename);
                $file_path='user/images/house/'.$filename;
                $house_img->image=$file_path;
                $house_img->house_id=$house_id;
                $i_status=$house_img->save();
            }
        }
        if (isset($status)){
            return redirect('users/house-landed-list')->with('success','House new info added successfully.');
        }
        elseif (isset($i_status)){
            return redirect('users/house-landed-list')->with('success','House new info added successfully.');
        }
        else{
            return redirect('users/house-landed-list')->with('error','House new info not added successfully.');
        }
    }
    public function destroy($id){
        $delete_hosue=DB::table('landing_houses')->where('id', '=', $id)->delete();
        $delete_img=DB::table('house_images')->where('house_id', '=', $id)->delete();

        if (isset($delete_hosue) && isset($delete_img)){
            return redirect('users/house-landed-list')->with('success','Deleted that record.');
        }
        else{
            return redirect('users/house-landed-list')->with('error','Not deleted try again.');
        }
    }

}
