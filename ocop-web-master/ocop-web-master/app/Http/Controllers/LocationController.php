<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Repositories\Contracts\LocationRepositoryInterface;
use App\Repositories\Eloquents\LocationRepository;

class LocationController extends Controller
{
	private $locationRepository;


    public function __construct(
	    LocationRepositoryInterface $locationRepository
	)
    {
		$this->locationRepository = $locationRepository;
    }

    public function getProvince()
    {
        $provinces = $this->locationRepository->all('');
        return response()->json($provinces);
    }

    public function getDistrict(Request $request)
    {
        $districts = $this->locationRepository->getDistrictByProvince($request->province_id);
        return response()->json($districts);
    }
	
    public function getWard(Request $request)
    {
		$wards = $this->locationRepository->getWardByDistrict($request->district_id);
        return response()->json($wards);
    }
}
