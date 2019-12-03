<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index() {
   		if(session()->exists('user')){
		
		   $users = session()->get("user");
   			return view('cpanel.dashboard');
   		}
   		return redirect()->route('login');
    }

}
