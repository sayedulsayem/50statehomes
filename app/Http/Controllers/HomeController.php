<?php

namespace App\Http\Controllers;

use App\HouseImage;
use App\LandingHouse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('index');
    }

    public function singleHouse($street,$id){
        $house=DB::table('landing_houses')
            ->select('landing_houses.id as house_id','house_images.id as image_id','street','city','state','zip','status','price','bed','bath','image')
            ->where(['landing_houses.id' => $id, 'landing_houses.street' => $street])
            ->join('house_images','landing_houses.id','=','house_images.house_id')
            ->get();
        //return $house;
        return view('front.single-house',compact('house'));
    }

    public function listAllHouses(){
        $data=LandingHouse::all()->where('status','active');
        $i=0;
        foreach ($data as $house){
            $img=HouseImage::all()->where('house_id',$house->id)->first();
            $data[$i]['image']=$img->image;
            $i++;
        }
        return view('index',compact('data'));
    }

}
