<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index(){
		if(Auth()->guard('web')->check()){
			return view('dashboard.index');
		}else{
			return redirect()->route('getlogin');
		}

	}
}
