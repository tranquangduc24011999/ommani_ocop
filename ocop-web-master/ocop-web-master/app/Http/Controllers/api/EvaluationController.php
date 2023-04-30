<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Repositories\Contracts\EvaluationRepositoryInterface;
use App\Repositories\Eloquents\EvaluationRepository;
use App\Repositories\Contracts\ProofRepositoryInterface;
use App\Repositories\Eloquents\ProofRepository;
use App\Repositories\Contracts\ProductRepositoryInterface;
use App\Repositories\Eloquents\ProductRepository;
use App\Repositories\Contracts\QARepositoryInterface;
use App\Repositories\Eloquents\QARepository;

class EvaluationController extends Controller
{
    private $evaluationRepository;
	private $proofRepository;
	private $productRepository;
	private $qaRepository;

    public function __construct(
		EvaluationRepositoryInterface $evaluationRepository,
		ProofRepositoryInterface $proofRepository, 
		ProductRepositoryInterface $productRepository,
		QARepositoryInterface $qaRepository
		)
    {
        $this->evaluationRepository = $evaluationRepository;
		$this->proofRepository = $proofRepository;
		$this->productRepository = $productRepository;
		$this->qaRepository = $qaRepository;
    }

    public function getPendingEvaluateProductsHelpTeam(Request $request){
        $user = auth('api')->user();
        $products = $this->evaluationRepository->getProductHelpTeam($user, $request->size, $request->page);
        $response = (object)[
			"data" => $products,
		];
        return response()->json($response);
	}

    public function getPendingEvaluateProducts(Request $request){
        $user = auth('api')->user();
        $products = $this->evaluationRepository->getProductsEvaluation($user);
        $response = (object)[
			"data" => $products,
		];
        return response()->json($response);
    }
}
