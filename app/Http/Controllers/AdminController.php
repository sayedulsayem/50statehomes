<?php

namespace App\Http\Controllers;

use App\Admin;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;

class AdminController extends Controller
{
    //
    public function index(){
        return view('admin-panel.index');
    }
    public function showLoginForm(){
        return view('admin-panel.login');
    }
    public function showRegForm(){
        return view('admin-panel.registration');
    }
    public function addAdminForm(){
        return view('admin-panel.pages.add-admin');
    }
    public function AdminRequestTable(){
        $getInactiveAdmin=Admin::all()->where('status','inactive');
        //return $getInactiveAdmin;
        return view('admin-panel.pages.admin-request',compact('getInactiveAdmin'));
    }
    public function logOut(){
        Session::flush();
        return redirect('/');
    }
    public function profile($id){
        $admin=Admin::where('id',$id)->first();
        return view('admin-panel.pages.edit-admin',compact('admin'));
    }
    public function updateProfile(Request $request){

        $info=Admin::where('id',$request->id)->first();

        if (isset($request->password)){
            if (Hash::check($request->old_pass,$info->password)){
                if ($request->password == $request->c_password){
                    Admin::where('id',$request->id)
                        ->update([
                            'password' => Hash::make($request->password)
                        ]);
                }
                else{
                    return redirect('admin/profile/edit/'.$request->id)->with('error','Confirm Password is not matched.');
                }
            }
            else{
                return redirect('admin/profile/edit/'.$request->id)->with('error','Old Password is not matched.');
            }
        }

        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $extension = $file->getClientOriginalExtension();
            $filename =time().'.'.$extension;
            $file->move('panel/images/', $filename);
            $file_path='panel/images/'.$filename;
            Admin::where('id',$request->id)
                ->update([
                    'image' => $file_path
                ]);
        }

        $status=Admin::where('id',$request->id)
            ->update([
                'name' => $request->name,
                'phone' => $request->phone,
            ]);

        if (isset($status)){
            return redirect('admin/admin-list')->with('success','profile updated.');
        }
        else{
            return redirect('admin/admin-list')->with('error','profile not updated. Try again');
        }
    }
    public function registration(Request $request){

        $data=$request;

        $admin=new Admin();

        $this->validate($request, [
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'email' => ['required', 'string', 'email', 'max:255', 'unique:admins'],
        ]);

        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $extension = $file->getClientOriginalExtension();
            $filename =time().'.'.$extension;
            $file->move('panel/images/', $filename);
            $file_path='panel/images/'.$filename;
            $admin->image=$file_path;
        }

        $admin->name=$data->name;
        $admin->email=$data->email;
        $admin->password=Hash::make($data->password);
        $admin->phone=$data->phone;
        $admin->type='admin';
        $admin->status='inactive';

        $status=$admin->save();

        if (isset($status)){
            return redirect('/admin/login')->with('success','you have registered successfully. login after approval by admin');
        }
        else{
            return redirect('/admin/register')->with('error','something went wrong please try again');
        }

    }
    public function login(Request $request){

        $getUserById=Admin::where('email',$request->email)->first();

        if (isset($getUserById)){
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

                    return redirect('/admin')->with('success','you have successfully logged in');
                }
                else{
                    return redirect('/admin/login')->with('error','you are not active user. please contact with admin for approving');
                }

            }
            else{
                return redirect('/admin/login')->with('error','email and password don\'t match. ');
            }
        }
        else{
            return redirect('/admin/login')->with('error','email and password don\'t match. ');
        }

    }

    public function adminList(){
        $getAllAdmin=Admin::all()->where('status','active');
        return view('admin-panel.pages.all-admins',compact('getAllAdmin'));
    }

    public function addAdmin(Request $request){

        $admin=new Admin();

        $this->validate($request, [
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $extension = $file->getClientOriginalExtension();
            $filename =time().'.'.$extension;
            $file->move('panel/images/', $filename);
            $file_path='panel/images/'.$filename;
            $admin->image=$file_path;
        }

        $admin->name=$request->name;
        $admin->email=$request->email;
        $admin->password=Hash::make($request->password);
        $admin->phone=$request->phone;
        $admin->type='admin';
        $admin->status=$request->status;

        $status=$admin->save();

        if (isset($status)){
            return redirect('admin/admin-list')->with('success','admin added successfully.');
        }
        else{
            return redirect('admin/add-admin')->with('error','admin is not added try again.');
        }

    }
    public function changeStatus($id){
        $current_status=Admin::where('id',$id)->first();
        if (isset($current_status)){
            if ($current_status->status == 'active'){
                $status=Admin::where('id',$id)
                    ->update(['status' => 'inactive']);
                if (isset($status)){
                    return redirect('admin/admin-request-list')->with('success','admin disable successfully.');
                }
                else{
                    return redirect('admin/admin-list')->with('error','admin has not disabled. try again later.');
                }
            }
            elseif ($current_status->status == 'inactive'){
                $status=Admin::where('id',$id)
                    ->update(['status' => 'active']);
                if (isset($status)){
                    return redirect('admin/admin-list')->with('success','admin approved successfully.');
                }
                else{
                    return redirect('admin/admin-request-list')->with('error','admin has not approved. try again later.');
                }
            }
        }

    }

    public function destroy($id){
        $current_status=Admin::where('id',$id)->first();

        $delete_leads=DB::table('admins')->where('id', '=', $id)->delete();

        if (isset($current_status)){
            if ($current_status->status == 'active'){
                if (isset($delete_leads)){
                    return redirect('admin/admin-list')->with('success','Admin deleted successfully.');
                }
                else{
                    return redirect('admin/admin-list')->with('error','Admin deletion failed. try again later.');
                }
            }
            elseif ($current_status->status == 'inactive'){
                if (isset($delete_leads)){
                    return redirect('admin/admin-request-list')->with('success','Admin deleted successfully.');
                }
                else{
                    return redirect('admin/admin-request-list')->with('error','Admin deletion failed. try again later.');
                }
            }
        }
    }
    public function userListTable(){
        $users=User::all();
        return view('admin-panel.pages.user-list',compact('users'));
    }

    public function editUser($id){
        $userById=User::where('id',$id)->first();
        return view('admin-panel.pages.edit-user',compact('userById'));
    }
    public function updateUser(Request $request){

        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $extension = $file->getClientOriginalExtension();
            $filename =time().'.'.$extension;
            $file->move('user/images/', $filename);
            $file_path='user/images/'.$filename;
            User::where('id',$request->id)
                ->update(
                    ['image' => $file_path]
                );
        }
        if (isset($request->password)){
            if ($request->password == $request->c_password){
                $status=User::where('id',$request->id)
                    ->update(
                        [
                            'name'=>$request->name,
                            'phone'=>$request->phone,
                            'password'=>Hash::make($request->password),
                            'status'=>$request->status,
                        ]
                    );
            }
            else{
                return redirect('admin/users/profile/edit/'.$request->id)->with('error','confirm password is not matched.');
            }
        }
        if (isset($status)){
            return redirect('admin/user-list')->with('success','user info updated.');
        }
        else{
            return redirect('admin/users/profile/edit/'.$request->id)->with('error','user info is not updated. try again.');
        }
    }
    public function changeStatusUser($id){
        $info=User::where('id',$id)->first();
        if ($info->status == 'active'){
            $check=User::where('id',$id)
                ->update(['status' => 'inactive']);
            if ($check){
                return redirect('admin/user-list')->with('success','user is disabled.');
            }
        }
        elseif ($info->status == 'inactive'){
            $check=User::where('id',$id)
                ->update(['status' => 'active']);
            if ($check){
                return redirect('admin/user-list')->with('success','user is enabled.');
            }
        }
        else{
            return redirect('admin/user-list')->with('error','something went wrong. try again later.');
        }
    }

    public function deleteUser($id){
        $delete_user=DB::table('users')->where('id', '=', $id)->delete();
        if (isset($delete_user)){
            return redirect('admin/user-list')->with('success','user deleted successfully.');
        }
        else{
            return redirect('admin/user-list')->with('error','user deletion failed. try again later.');
        }
    }

}
