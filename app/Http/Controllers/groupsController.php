<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class groupsController extends Controller
{
    public function index() {
    	
    	return view('CPanel.groups');
    }
}
