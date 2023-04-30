<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Repositories\Contracts\QARepositoryInterface;
use App\Repositories\Eloquents\QARepository;
use Illuminate\Support\Facades\Auth;

class QuestionAnswerController extends Controller
{
	private $qaRepository;

    public function __construct(
		QARepositoryInterface $qaRepository
		)
    {
		$this->qaRepository = $qaRepository;
    }

    public function getQuestionAnswer(Request $request){
        $user = auth('api')->user();

        list($qaresults, $totalA, $totalB, $totalC) = $this->qaRepository->getQuestionAnswers($request->product_type,$user->id, 
        $request->product_id);
        $groupA = array();
        $groupB = array();
        $groupC = array();
        //dd($qaresults);
        foreach($qaresults as $items){
            if($items[0]->groupId == 1){
                array_push($groupA, $items);
            }
            if($items[0]->groupId == 2){
                array_push($groupB, $items);
            }
            if($items[0]->groupId == 3){
                array_push($groupC, $items);
            }
        }

        $response = (object)[
			"group_a" => $groupA,
            "group_b" => $groupB,
            "group_c" => $groupC,
		];
        return response()->json($response);

    }

}
