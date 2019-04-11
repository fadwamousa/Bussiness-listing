<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\User;
class DashboardController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        /* return Auth::user();
           return auth()->user()->id;
           return Auth::user()->name;
           $user_id = Auth::user()->id;
           $user    = User::findOrFail($user_id);
           return view('dashboard')->with('listings',$user->listings);
           this is function in User Model
        */

        $user_id  = Auth::user()->id;
        $user     = User::findOrFail($user_id);
        return view('dashboard')->with('listings',$user->listings);


    }
}
