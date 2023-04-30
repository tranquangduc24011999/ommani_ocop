<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class InviteMemberController extends Controller
{
    public function index(){
		if(Auth()->guard('web')->check()){
			return view('member.invitemember');
		}else{
			return redirect()->route('getlogin');
		}

	}
}
