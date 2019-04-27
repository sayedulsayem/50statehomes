<?php

namespace App\Http\Controllers;

use App\HouseImage;
use App\LandingHouse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;
use function PHPSTORM_META\elementType;

class LandingHouseController extends Controller
{
    public function addHouseLanding(){
        return view('admin-panel.pages.add-house-landing');
    }
    public function storeHouseLanding(Request $request){

        $house=new LandingHouse();

        $house->admin_id=Session::get('id');
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
                $file->move('panel/images/house/', $filename);
                $file_path='panel/images/house/'.$filename;
                $house_img->image=$file_path;
                $house_img->house_id=$house->id;
                $i_status=$house_img->save();
            }
        }

        if (isset($h_status) && isset($i_status)){
            return redirect('admin/house-landed-list')->with('success','House added successfully.');
        }
        else{
            return redirect('admin/add-house-landing')->with('error','Something went wrong. house is not added. try again.');
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
        return view('admin-panel.pages.house-landed-list',compact('data'));
    }
    public function editHouseLanding($id){
        $houses=DB::table('landing_houses')
            ->where('landing_houses.id',$id)
            ->Leftjoin('house_images','landing_houses.id','=','house_images.house_id')
            ->get();
        return view('admin-panel.pages.edit-house-landing',compact(['houses','id']));
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
                $file->move('panel/images/house/', $filename);
                $file_path='panel/images/house/'.$filename;
                $house_img->image=$file_path;
                $house_img->house_id=$house_id;
                $i_status=$house_img->save();
            }
        }
        if (isset($status) && isset($i_status)){
            return redirect('admin/house-landed-list')->with('success','House new info added successfully.');
        }
        else{
            return redirect('admin/house-landed-list')->with('error','House new info not added successfully.');
        }
    }
    public function destroy($id){
        $delete_hosue=DB::table('landing_houses')->where('id', '=', $id)->delete();
        $delete_img=DB::table('house_images')->where('house_id', '=', $id)->delete();

        if (isset($delete_hosue) && isset($delete_img)){
            return redirect('admin/house-landed-list')->with('success','Deleted that record.');
        }
        else{
            return redirect('admin/house-landed-list')->with('error','Not deleted try again.');
        }
    }
}
