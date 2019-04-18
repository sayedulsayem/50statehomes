<?php

namespace App\Http\Controllers;

use App\HouseImage;
use App\LandingHouse;
use App\Leads;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class LeadsController extends Controller
{
    public function addLeadsHouse(Request $request){
        if (Auth::check()){
            $userId=Auth::user()->id;
            $userEmail=Auth::user()->email;
            $userName=Auth::user()->name;
        }
        $lead=new Leads();
        $lead->house_id=$request->house_id;
        $lead->user_id=$userId;
        $lead->appoint_date=date('Y:m:d', strtotime($request->appoint_date));
        $lead->appoint_time=date('h:m:s', strtotime($request->appoint_time));
        $lead->offer_price=$request->offer_price;
        $lead->buying_plan=$request->buying_plan;
        $lead->toured=$request->toured;
        $lead->comment=$request->comment;
        $status=$lead->save();

        if (isset($status)){
            return redirect('/landing-house/'.$request->street.'/'.$request->house_id)->with('success','Your lead has been added.');
        }
        else{
            return redirect('/landing-house/'.$request->street.'/'.$request->house_id)->with('error','Your lead has not added. Try again later.');
        }
    }
    public function leadsHouses(){
        $data=LandingHouse::all()->where('status','active');
        $i=0;
        foreach ($data as $house){
            $img=HouseImage::all()->where('house_id',$house->id)->first();
            $data[$i]['image']=$img->image;
            $i++;
        }
        //return $data;
        return view('admin-panel.pages.leads',compact('data'));
    }
    public function singleLeadsHouse($street,$id){
        $leads=DB::table('landing_houses')
            ->select('landing_houses.id as house_id','leads.id as lead_id','users.id as user_id','name','email','phone','street','city','state','zip','appoint_date','appoint_time','leads.created_at')
            ->where(['landing_houses.id' => $id, 'landing_houses.street' => $street])
            ->join('leads','landing_houses.id','=','leads.house_id')
            ->join('users','leads.user_id','=','users.id')
            ->get();
        //return $leads;
        return view('admin-panel.pages.leads-by-house',compact('leads'));
    }
    public function editLeadsHouse($id){
        $leadById=DB::table('leads')
            ->select('landing_houses.id as house_id','leads.id as lead_id','users.id as user_id','name','email','phone','street','city','state','zip','appoint_date','appoint_time','offer_price','comment','buying_plan','toured','leads.created_at')
            ->where('leads.id',$id)
            ->join('landing_houses','landing_houses.id','=','leads.house_id')
            ->join('users','leads.user_id','=','users.id')
            ->get();
        //return $leadById;
        return view('admin-panel.pages.edit-leads',compact('leadById'));
    }
    public function updateLeadsHouse(Request $request){
        $leadId=$request->lead_id;
        $status=Leads::where('id',$leadId)
            ->update([
                'offer_price' => $request->offer_price,
                'appoint_date' => $request->appoint_date,
                'appoint_time' => $request->appoint_time,
                'comment' => $request->comment,
                'buying_plan' => $request->buying_plan,
                'toured' => $request->toured
            ]);
        if (isset($status)){
            return redirect('admin/leads-house/'.$request->street.'/'.$request->house_id)->with('success','Lead edited successfully.');
        }
        else{
            return redirect('admin/leads-house/'.$request->street.'/'.$request->house_id)->with('error','Lead edited failed. try again later.');
        }
        //return $request;
    }
    public function destroy($id){
        $leads_house=Leads::where('id',$id)->first();

        $houses=LandingHouse::where('id',$leads_house->house_id)->first();

        $delete_leads=DB::table('leads')->where('id', '=', $id)->delete();

        if (isset($delete_leads)){
            return redirect('admin/leads-house/'.$houses->street.'/'.$houses->id)->with('success','Lead deleted successfully.');
        }
        else{
            return redirect('admin/leads-house/'.$houses->street.'/'.$houses->id)->with('error','Lead deletion failed. try again later.');
        }
    }
}
