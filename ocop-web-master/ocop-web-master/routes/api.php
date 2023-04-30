<?php

use App\Http\Controllers\api\AuthApiController;
use App\Http\Controllers\api\ProductController;
use App\Http\Controllers\api\SubjectController;
use App\Http\Controllers\api\ProofController;
use App\Http\Controllers\api\CouncilController;
use App\Http\Controllers\api\QuestionAnswerController;
use App\Http\Controllers\api\QuestionCommentController;
use App\Http\Controllers\UploadController;
use App\Http\Controllers\api\LocationController;
use App\Http\Controllers\api\EntityController;
use App\Http\Controllers\api\AccountController;
use App\Http\Controllers\api\EvaluationResultController;
use App\Http\Controllers\api\EvaluationController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
Route::group(['prefix'=>'/v1'],function(){
    Route::post('/login', [AuthApiController::class, 'login'])->name('api.user.login');
    Route::post('/register', [AuthApiController::class, 'register'])->name('api.user.register');
    Route::post('/refresh', [AuthApiController::class, 'refresh2'])->name('api.user.refresh');
    Route::get('/provinces', [LocationController::class, 'getProvinces'])->name('api.provinces');
    Route::get('/districts/{id}', [LocationController::class, 'getDistricts'])->name('api.districts');
    Route::get('/wards/{id}', [LocationController::class, 'getWards'])->name('api.wards');
    Route::post('/forgotpassword', [AuthApiController::class, 'forgotPassword'])->name('api.user.forgotpassword');
    Route::middleware(['auth.api'])->group(function () {
        Route::get('/profile', [AuthApiController::class, 'userProfile'])->name('api.user.profile');
        Route::get('/logout', [AuthApiController::class, 'logout'])->name('api.user.logout');
        Route::post('/devicetoken', [AuthApiController::class, 'deviceToken'])->name('api.user.devicetoken');
        Route::get('/entities', [EntityController::class, 'getEntities'])->name('api.entities');
        Route::post('/entity', [EntityController::class, 'createEntity'])->name('api.entity');
        Route::get('/upload', [UploadController::class, 'generatePreignedurl'])->name('api.upload');
        Route::get('/product/{id}/entity', [ProductController::class, 'getProducts'])->name('api.product.entity');
        Route::post('/product', [ProductController::class, 'createProduct'])->name('api.product.create');
        Route::put('/updateproduct/{id}', [ProductController::class, 'updateProduct'])->name('api.product.update');
        Route::get('/producttypes', [ProductController::class, 'getProductType'])->name('api.product.productypes');
        Route::get('/proofs', [ProofController::class, 'getProofs'])->name('api.proofs');
        Route::post('/submitproof', [ProofController::class, 'postProofInformation'])->name('api.submitproof');
        Route::post('/changestatusproof', [ProofController::class, 'postProofStatus'])->name('api.changestatusproof');
        Route::post('/prooffiles', [ProofController::class, 'getProofFiles'])->name('api.prooffiles');
        Route::post('/updateproofinformation', [ProofController::class, 'updateProofInformation'])->name('api.updateproofinformation');
        Route::get('/deletefileproof/{id}', [ProofController::class, 'deleteFileProof'])->name('api.deletefileproof');
        Route::post('/updatemark', [ProofController::class, 'updateMark'])->name('api.updatemark');
        Route::get('/unittypes', [EntityController::class, 'getUnitTypes'])->name('api.unittypes');
        Route::get('/productsbylevel', [CouncilController::class, 'getProductsByLevel'])->name('api.productsbylevel');
        Route::get('/questionanswer', [QuestionAnswerController::class, 'getQuestionAnswer'])->name('api.getQuestionAnswer');
        Route::post('/savetotalmark', [ProofController::class, 'saveTotalmark'])->name('api.savetotalmark');
        Route::get('/councilsbylevel', [CouncilController::class, 'getCouncilsByLevel'])->name('api.councilsbylevel');
        Route::get('/council/{id}', [CouncilController::class, 'getCouncilById'])->name('api.councilbyid');
        Route::get('/memberscouncil/{id}', [CouncilController::class, 'getMembersByCouncil'])->name('api.memberscouncil');
        Route::get('/productscouncil/{id}', [CouncilController::class, 'getProductsByCouncil'])->name('api.productscouncil');
        Route::get('/membersbylevel', [CouncilController::class, 'getMemberByLevel'])->name('api.membersbylevel');
        Route::get('/examinersbylevel', [CouncilController::class, 'getExaminerByLevel'])->name('api.examinersbylevel');
        Route::get('/searchexaminersbylevel', [CouncilController::class, 'getSearchExaminerByLevel'])->name('api.searchexaminersbylevel');
        Route::post('/createcouncil', [CouncilController::class, 'saveCounCil'])->name('api.createcouncil');
        Route::post('/addmembercouncil', [CouncilController::class, 'addMemberCouncil'])->name('api.addmembercouncil');
        Route::post('/addmemberhelpteam', [CouncilController::class, 'addMemberHelpteam'])->name('api.addmemberhelpteam');
        Route::get('/membershelpteam', [CouncilController::class, 'getMembersHelpTeam'])->name('api.membershelpteam');
        Route::post('/addproductcouncil', [CouncilController::class, 'addProductToCouncil'])->name('api.addproductcouncil');
        Route::put('/updatemembercouncil', [CouncilController::class, 'updateMemberCouncil'])->name('api.updatemembercouncil');
        Route::delete('/deletemembercouncil', [CouncilController::class, 'deleteMemberCouncil'])->name('api.deletemembercouncil');
        Route::delete('/deletefilecouncil', [CouncilController::class, 'deleteFileOfCouncil'])->name('api.deletefilecouncil');
        Route::put('/updatememberhelpteam', [CouncilController::class, 'updateMemberHelpTeam'])->name('api.updatememberhelpteam');
        Route::delete('/deletememberhelpteam', [CouncilController::class, 'deleteMemberHelpTeam'])->name('api.deletememberhelpteam');
        Route::put('/updateaccount', [AccountController::class, 'updateAccount'])->name('api.updateaccount');
        Route::get('/accountinfo', [AccountController::class, 'getAccountInfo'])->name('api.accountinfo');
        Route::put('/changepassword', [AccountController::class, 'changePassword'])->name('api.changepassword');
        Route::put('/updatememberstatus', [AccountController::class, 'updateMemberStatus'])->name('api.updatememberstatus');
        Route::get('/getquestioncomment', [QuestionCommentController::class, 'getCommentByQuestionIdAndProductId'])->name('api.getquestioncomment');
        Route::post('/savecomment',[QuestionCommentController::class,'saveComment'])->name('api.savecomment');
        Route::get('/members', [AccountController::class, 'getMembersPaging'])->name('api.getMembers');
        Route::post('/setproductrank',[EvaluationResultController::class,'setProductRank'])->name('api.setproductrank');
        Route::get('/getfilemarked',[EvaluationResultController::class,'getFileMarked'])->name('api.getfilemarked');
        Route::get('/getmembersmarked',[EvaluationResultController::class,'getMembersMarkedApi'])->name('api.getmembersmarked');
        Route::get('/getproductshelpteam',[EvaluationController::class,'getPendingEvaluateProductsHelpTeam'])->name('api.getproducthelpteampending');
        Route::get('/getproductsexaminer',[EvaluationController::class,'getPendingEvaluateProducts'])->name('api.getproductsexaminer');
    });
});
