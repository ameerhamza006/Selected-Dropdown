<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Screen;
use Illuminate\Http\Request;
use App\Models\user_screen;
use App\Models\User;
use Hash;
use DB;

class UserScreenController extends Controller
{



    
    function fetchh(Request $request)
    {
     $select = $request->get('select');
     $value = $request->get('value');
     $dependent = $request->get('dependent');
     $data = DB::table('user_screens')
      ->leftjoin('screens','screens.id' ,'=' ,'user_screens.screen_id')
       ->where('user_screens.user_id',$select)
       ->select('user_screens.*','screens.screen_location')
       ->get();
     
     return response()->json($data);
    }
    
    

    
    public function create()
    {
        $users = User::all();
        $screen = Screen::all();
        return view('admin.userscreen.add',compact('users','screen'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $userscreen = DB::table('user_screens')->insert([
            'user_id' => $request->user,
            'screen_id' => $request->location,
            'date' => $request->date,
            
            'name' => $request->name,
            'username' => $request->username,
            'password' => Hash::make($request->password),
            ]);
       

        if($userscreen){
            return redirect()->route('userscreen.index')->with('message','Record Added Successfully');
        }else{
            return redirect()->route('userscreen.create')->with('message','Something Went Wrong');
        }
    }



}