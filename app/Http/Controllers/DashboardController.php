<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index() {
   		if(session()->exists('user')){
   			return view('CPanel.dashboard');
   		}

   		return redirect()->route('login');
    }

}
