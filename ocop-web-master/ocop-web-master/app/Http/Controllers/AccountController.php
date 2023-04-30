<?php

namespace App\Http\Controllers;

use App\Repositories\Contracts\UserRepositoryInterface;
use App\Repositories\Eloquents\UserRepository;
use Illuminate\Http\Request;
use Auth;
use App\Repositories\Contracts\LocationRepositoryInterface;
use App\Repositories\Eloquents\LocationRepository;

class AccountController extends Controller
{

	private $userRepository;
    private $locationRepository;

    public function __construct(
        UserRepositoryInterface $userRepository,
        LocationRepositoryInterface $locationRepository)
    {
        $this->userRepository = $userRepository;
        $this->locationRepository = $locationRepository;
    }

    public function index(){
		if(Auth()->guard('web')->check()){
			return view('account.management');
		}else{
			return redirect()->route('getlogin');
		}

	}

    public function approveMember(){
		if(Auth()->guard('web')->check()){
            $provinces = $this->locationRepository->all('');
            $user = Auth::user();
			return view('account.approvemember', compact('provinces', 'user'));
		}else{
			return redirect()->route('getlogin');
		}

	}

	public function getMembersPaging(Request $request){
		if(Auth()->guard('web')->check()){
			if($request->ajax()){
				$user = Auth::user();
				$userId = $request->user_id;
				$limit = $request->limit;
				$offset = $request->page;
				$members = $this->userRepository->getMembers($user,$limit,$offset);
				return response()->json($members);
			}

		}else{
			return redirect()->route('getlogin');
		}
	}

	public function getMemberFilter(Request $request){
        if(Auth()->guard('web')->check()){
            if($request->ajax()){
                $data = [
                    'user'       => Auth::user(),
                    'user_id'    => $request->user_id,
                    'searchKey'  => $request->searchKeyword,
                    'userType'   => $request->userType,
                    'provinceId' => $request->provinceId != '' ? $request->provinceId : null,
                    'districtId' => $request->districtId != '' ? $request->districtId : null,
                    'limit'      => $request->limit,
                    'offset'     => $request->page
                ];
                $members = $this->userRepository->getFilterMember(Auth::user(),json_decode(json_encode($data)));
                return response()->json($members);;
            }
        }
        else{
            return redirect()->route('getlogin');
        }
    }

	public function updateMemberStatus(Request $request){
		if(Auth()->guard('web')->check()){
			if($request->ajax()){
				$user = Auth::user();
				$data = $request->all();
				$userId = $data["id"];
				$status = $data["status"];
				$userUpdate = $this->userRepository->find($userId);
				if(isset($userUpdate)){
					$userUpdate->status = $status;
					$userUpdate->save();
					return 'success';
				}
				return 'fail';
			}

		}else{
			return 'fail';
		}
	}

	public function getAccountInfo(){
		if(Auth()->guard('web')->check()){
			$user = Auth::user();
			$user->address;
			$user->roles;
			return response()->json($user);
		}else{
			return redirect()->route('getlogin');
		}
	}

}
