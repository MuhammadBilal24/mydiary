<?php

namespace App\Http\Controllers;
use DB;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function loginpage()
    {
         return view ('login');
    }
    public function index()
    {
        $myworkdata = DB::table('myworks')->get();
        $remainworkdata = DB::table('remainwork')->get();
        // return $myworkdata;
        return view('dashboard',  ['myworkdata' => $myworkdata,'remainworkdata'=>$remainworkdata]);
    }
    public function getworks()
    {
        $myworkdata = DB::table('myworks')->get();
        // return $myworkdata;
        return view('works',  ['myworkdata' => $myworkdata]);
    } 
    public function insertwork(Request $request) 
    {
        $data=[
            'title'=>$request->input('title'),
            'subject'=>$request->input('subject'),
            'desc'=>$request->input('desc'),
            'status'=>$request->input('status'),
            ];
           DB::table('myworks')->insert($data);
           return redirect('/works');
    }
    // Get Edit using Api
    public function getworkdata(request $request)
    {
        $data= DB::table('myworks')->where(['id_work'=>$request->id_work])->get();   
        return $data;
    }
    // Update Works
    public function updatework(Request $request)
    {
        $data=[
            'id_work'=> $request->input('id_work'),
            'title'=>$request->input('title'),
            'subject'=>$request->input('subject'),
            'desc'=>$request->input('desc'),
            'status'=>$request->input('status'),
        ];
        DB::table('myworks')->where(['id_work'=>$request->id_work])->update($data);
        return redirect('/works');
    }
    // Delete Works using Api
    public function deleteworkdata(request $request)
    {
        $data= DB::table('myworks')->where(['id_work'=>$request->id_work])->delete();   
        return $data;
    }
    // RemainWorks
    public function remainworks(request $request)
    {   
        $workdata= DB::table('myworks')->where(['id_work'=>$request->workID])->get();
        $remainworkdata = DB::table('myworks')
        ->join('remainwork', 'remainwork.id_work', '=', 'myworks.id_work')
        ->where(['myworks.id_work'=>$request->workID])
        ->get();
        // return $workdata;
        return view('remainworks',['remainworkdata'=>$remainworkdata, 'workdata'=>$workdata]);
    }
    // Insert Remain Works
    public function insertremainworks(request $request)
    {
        $data=[
            'id_work'=> $request->input('id_work'),
            'task'=> $request->input('task'),
            'reason'=> $request->input('reason'),
            'status_remain'=> $request->input('status_remain'),
        ];
        DB::table('remainwork')->insert($data);
        return back();
    } 
    // get data for edit RemainWorks
    public function getremainworkdata(request $request)
    {
        $data= DB::table('remainwork')->where(['id_remain'=>$request->id_remain])->get();
        return $data;
    }
    // Update RemainWorks
    public function updateremainworks(request $request)
    {
        $data=[
            'id_work'=>$request->input('id_work'),
            'id_remain'=>$request->input('id_remain'),
            'task'=>$request->input('task'),
            'reason'=>$request->input('reason'),
            'status_remain'=>$request->input('status_remain'),
        ];
        DB::table('remainwork')->where(['id_remain'=>$request->id_remain])->update($data);
        return back();
    } 
    // Delete RemainWorks using Api
    public function deleteremainwork(request $request)
    {
        $data= DB::table('remainwork')->where(['id_remain'=>$request->id_remain])->delete();
        return $data;
    }
}