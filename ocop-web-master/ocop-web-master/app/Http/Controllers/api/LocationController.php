<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
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

    public function getProvinces()
    {
        $provinces = $this->locationRepository->all('');
        $response = (object)[
			"data" => $provinces,
		];
        return response()->json($response);
    }

    public function getDistricts(Request $request,$id)
    {
        $districts = $this->locationRepository->getDistrictByProvince($id);
        $response = (object)[
			"data" => $districts,
		];
        return response()->json($response);
    }
	
    public function getWards(Request $request, $id)
    {
		$wards = $this->locationRepository->getWardByDistrict($id);
        $response = (object)[
			"data" => $wards,
		];
        return response()->json($response);
    }
}
