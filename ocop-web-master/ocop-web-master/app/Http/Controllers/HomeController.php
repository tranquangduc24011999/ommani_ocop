<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;

class HomeController extends Controller
{
    public function index(){
		if(Auth()->guard('web')->check()){
            $user = Auth::user();
            //dump($user->hasRole('MANAGER'));
			return view('home.index');
		}else{
			return redirect()->route('getlogin');
		}

	}
}
