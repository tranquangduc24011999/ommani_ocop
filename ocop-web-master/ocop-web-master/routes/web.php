<?php

use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
//insert dữ liệu tạm
Route::get('/insert',['as'=>'getSubmitProof','uses'=>'SubmitProofController@insertDB']);
Route::get('/insert_json',['as'=>'getSubmitProof','uses'=>'SubmitProofController@insert_json']);


Route::get('/',['as'=>'home','uses'=>'HomeController@index']);
Route::get('/entities',['as'=>'entities','uses'=>'EntityController@index']);
Route::get('/createentity',['as'=>'getCreateEntity','uses'=>'EntityController@getCreateEntity']);
Route::post('/createentity',['as'=>'postCreateEntity','uses'=>'EntityController@postCreateEntity']);
Route::get('/joinentity',['as'=>'getJoinEntity','uses'=>'EntityController@getJoinEntity']);
Route::get('/createproduct',['as'=>'getCreateProduct','uses'=>'ProductController@getCreateProduct']);
Route::post('/createproduct',['as'=>'postCreateProduct','uses'=>'ProductController@postCreateProduct']);
Route::get('/editproduct',['as'=>'getEditProduct','uses'=>'ProductController@getEditProduct']);
Route::post('/editproduct',['as'=>'postEditProduct','uses'=>'ProductController@postEditProduct']);
Route::get('/getproductbyid',['as'=>'getProductById','uses'=>'ProductController@getProductById']);
Route::get('/getproductsbyentityid',['as'=>'getProductsByEntityId','uses'=>'ProductController@getProductsByEntityId']);
Route::get('/login',['as'=>'getlogin','uses'=>'AuthController@getLogin']);
Route::post('/login',['as'=>'postlogin','uses'=>'AuthController@postlogin']);
Route::get('/logout',['as'=>'getlogout','uses'=>'AuthController@logout']);
Route::get('/register',['as'=>'getRegister','uses'=>'AuthController@register']);
Route::post('/register',['as'=>'user.register.create','uses'=>'AuthController@registerAccount']);
Route::get('/account',['as'=>'getaccount','uses'=>'UserController@index']);
Route::get('/getaccountinfo',['as'=>'getaccountinfo','uses'=>'AccountController@getAccountInfo']);
Route::get('/invitemember',['as'=>'getinvitemember','uses'=>'InviteMemberController@index']);
Route::get('/submitproof',['as'=>'getSubmitProof','uses'=>'SubmitProofController@index']);
Route::post('/submitproof',['as'=>'postSubmitProof','uses'=>'SubmitProofController@postProofInformation']);
Route::post('/getSupDoc', ['as'=>'getSupDoc','uses'=>'SubmitProofController@getSupDoc']);
Route::post('/proofdone',['as'=>'postProofDone','uses'=>'SubmitProofController@postProofDone']);
Route::post('/getprooffile',['as'=>'getProofFile','uses'=>'SubmitProofController@getProofFile']);
Route::post('/updateproofinformation',['as'=>'postProofFile','uses'=>'SubmitProofController@updateProofInformation']);
Route::post('/updateproofile',['as'=>'updateProofFile','uses'=>'SubmitProofController@updateProofFile']);
Route::post('/deleteprooffile',['as'=>'postDeleteProofFile','uses'=>'SubmitProofController@deleteFileProof']);
Route::post('/updatemark',['as'=>'postUpdateMarrk','uses'=>'SubmitProofController@updateMark']);
Route::get('/getguidequestion',['as'=>'getGuideQuestion','uses'=>'SubmitProofController@getGuideQuestion']);

Route::get('/dashboard',['as'=>'getDashboard','uses'=>'DashboardController@index']);
Route::get('/filemanagement',['as'=>'getFileManagement','uses'=>'FileController@index']);
Route::get('/fillteFile',['as'=>'getFilterFileManagement','uses'=>'FileController@getFilterData']);
Route::get('/proofmanagement',['as'=>'getProofManagement','uses'=>'FileController@getProofManagement']);
Route::get('/detailfile',['as'=>'getDetailFile','uses'=>'FileController@detailFile']);
Route::get('/viewevaluatefileresult',['as'=>'viewevaluatefileresult','uses'=>'FileController@viewEvaluateFileResult']);
Route::get('/getproductbylevelpaging',['as'=>'getProductsBylevelPaging','uses'=>'FileController@getProductsByLevelPaging']);
Route::get('/councils',['as'=>'getCouncils','uses'=>'CouncilsController@index']);
Route::get('/detailcouncils',['as'=>'getDetailCouncils','uses'=>'CouncilsController@detail']);
Route::get('/getmemberbylevel',['as'=>'getMembersByLevel','uses'=>'CouncilsController@getMemberByLevel']);
Route::get('/getsearchmemberbylevel',['as'=>'getSearchMembersByLevel','uses'=>'CouncilsController@getSearchMemberByLevel']);
Route::get('/getexaminerbylevel',['as'=>'getExaminerByLevel','uses'=>'CouncilsController@getExaminerByLevel']);
Route::get('/getsearchexaminerbylevel',['as'=>'getsearchexaminerbylevel','uses'=>'CouncilsController@getSearchExaminerByLevel']);
Route::get('/getexaminerotherbylevel',['as'=>'getexaminerotherbylevel','uses'=>'CouncilsController@getExaminerOtherByLevel']);
Route::get('/getsearchexaminerotherbylevel',['as'=>'getsearchexaminerotherbylevel','uses'=>'CouncilsController@getSearchExaminerOtherByLevel']);
Route::get('/getproductsbylevel',['as'=>'getProductsByLevel','uses'=>'CouncilsController@getProductsByLevel']);
Route::post('/savecouncil',['as'=>'postSaveCouncil','uses'=>'CouncilsController@saveCounCil']);
Route::get('/getcouncils',['as'=>'getCouncilsByLevel','uses'=>'CouncilsController@getCouncilsByLevel']);
Route::get('/getmembersbycouncil',['as'=>'getmembersbycouncil','uses'=>'CouncilsController@getMembersByCouncil']);
Route::get('/getproductsbycouncil',['as'=>'getProducts','uses'=>'CouncilsController@getProductsByCouncil']);
Route::get('/getcouncilbyid',['as'=>'getCouncil','uses'=>'CouncilsController@getCouncilById']);
Route::get('/getcouncilbyidv2',['as'=>'getCouncilbyId','uses'=>'CouncilsController@getCouncilByIdV2']);
Route::post('/addmembercouncil',['as'=>'postAddMemberCouncil','uses'=>'CouncilsController@addMemberCouncil']);
Route::post('/updatemembercouncil',['as'=>'postUpdateMemberCouncil','uses'=>'CouncilsController@updateMemberCouncil']);
Route::post('/deletemembercouncil',['as'=>'deleteMemberCouncil','uses'=>'CouncilsController@deleteMemberCouncil']);
Route::post('/updatememberhelpteam',['as'=>'postUpdateMemberHelpTeam','uses'=>'CouncilsController@updateMemberHelpTeam']);
Route::post('/deletememberhelpteam',['as'=>'deleteMemberHelpTeam','uses'=>'CouncilsController@deleteMemberHelpTeam']);
Route::get('/getproductsotherbycouncil',['as'=>'getOtherProducts','uses'=>'CouncilsController@getProductsOtherByCouncil']);
Route::get('/searchproductsotherbycouncil',['as'=>'searchOtherProducts','uses'=>'CouncilsController@searchProductsOtherByCouncil']);
Route::post('/updateproductcouncil',['as'=>'postUpdateProductCouncil','uses'=>'CouncilsController@updateProductCouncil']);
Route::get('/deleteproductcouncil',['as'=>'getDeleteProductCouncil','uses'=>'CouncilsController@deleteProductCouncil']);
Route::get('/helpteam',['as'=>'getHelpTeam','uses'=>'CouncilsController@getHelpTeam']);
Route::get('/getmembershelpteam',['as'=>'getMembersHelpteam','uses'=>'CouncilsController@getMembersHelpTeam']);
Route::post('/addmemberhelpteam',['as'=>'postAddMemberHelpTeam','uses'=>'CouncilsController@addMemberHelpTeam']);
Route::get('/getmembershelpteamotherbylevel',['as'=>'getmembershelpteamotherbylevel','uses'=>'CouncilsController@getMemberHelpTeamOtherByLevel']);

Route::get('/evaluationresult',['as'=>'getEvaluationresult','uses'=>'EvaluationresultController@index']);
Route::get('/accountmanagement',['as'=>'getAccountManagement','uses'=>'AccountController@index']);
Route::get('/approvemember',['as'=>'getApproveMember','uses'=>'AccountController@approveMember']);
Route::get('/getmemberspaging',['as'=>'getMembersPaging','uses'=>'AccountController@getMembersPaging']);
Route::get('/getFilterMember', ['as' => 'getFilterMember', 'uses' => 'AccountController@getMemberFilter']);
Route::post('/updatememberstatus',['as'=>'updateMemberStatus','uses'=>'AccountController@updateMemberStatus']);
Route::get('provinces', ['as'=>'provinces','uses'=>'LocationController@getProvince']);
Route::post('getprovinces', ['as'=>'getProvinces','uses'=>'LocationController@getProvince']);
Route::post('getdistrictbyprovince', ['as'=>'postDistrict','uses'=>'LocationController@getDistrict']);
Route::get('getdistrictbyprovince', ['as'=>'getDistrict','uses'=>'LocationController@getDistrict']);
Route::post('getwardbydistrict', ['as'=>'postWards','uses'=>'LocationController@getWard']);
Route::get('getwardbydistrict', ['as'=>'getWards','uses'=>'LocationController@getWard']);
Route::get('getentitiesbyuserid', ['as'=>'getEntities','uses'=>'EntityController@getEntitiesByUserId']);
Route::get('generatepresignedurl', ['as'=>'generatePresignedurl','uses'=>'UploadController@generatePreignedurl']);

Route::get('/evaluation',['as'=>'getEvaluation','uses'=>'EvaluationController@index']);
Route::get('/getproductsevaluation',['as'=>'getProductsEvaluation','uses'=>'EvaluationController@getPendingEvaluateProducts']);
Route::get('/getproductsevaluationhelpteam',['as'=>'getProductsEvaluationHelpTeam','uses'=>'EvaluationController@getPendingEvaluateProductsHelpTeam']);
Route::get('/evaluationset',['as'=>'getEvaluationSet','uses'=>'EvaluationController@evaluationset']);
Route::get('/evaluationsethelpteam',['as'=>'getEvaluationSetHelpTeam','uses'=>'EvaluationController@evaluationsetHelpTeam']);
Route::get('/evaluationhelpteam',['as'=>'getEvaluationHelpTeam','uses'=>'EvaluationController@evaluationHelpTeam']);

Route::post('savetotalmark', ['as'=>'postTotalMark','uses'=>'MarkController@saveTotalMarkByUser']);
Route::get('/getproductbystatus',['as'=>'getProductByStatus','uses'=>'EvaluationresultController@getProductByStatus']);
Route::get('/evaluatefileresult',['as'=>'getEvaluateFileResult','uses'=>'EvaluationresultController@evaluateFileResult']);
Route::post('/setproductrank',['as'=>'setProductRank','uses'=>'EvaluationresultController@setProductRank']);

Route::get('/getmembersmarked',['as'=>'getMembersMarked','uses'=>'EvaluationresultController@getMembersMarked']);

Route::get('/getuserbyid',['as'=>'getUserbyId','uses'=>'EvaluationresultController@getMembersMarked']);

Route::get('/getquestioncomment',['as'=>'getQuestionComment','uses'=>'QuestionCommentController@getNoteByQuestionIdAndProductId']);
Route::post('/savenote',['as'=>'postSaveNote','uses'=>'QuestionCommentController@saveNote']);
Route::put('/updateaccount',['as'=>'updateaccount','uses'=>'UserController@updateAccount']);
Route::put('/changepassword',['as'=>'changePassword','uses'=>'UserController@changePassword']);

Route::get('/searchmemberentity',['as'=>'searchMemberEntity','uses'=>'ProductController@searchMemberEntity']);
Route::get('/forgotpassword',['as'=>'getForgotPassword','uses'=>'ForgotPasswordController@getForgotPassword']);
Route::post('forgotpassword', ['as'=>'postForgotPassword','uses'=>'ForgotPasswordController@submitForgetPasswordForm']);
Route::get('resetpassword/{token}', 'ForgotPasswordController@showResetPasswordForm')->name('reset.password.get');
Route::post('resetpassword', 'ForgotPasswordController@submitResetPasswordForm')->name('reset.password.post');

Route::get('getfilebyid', ['as'=>'getFileById','uses'=>'SubmitProofController@getProofFileById']);
Route::get('getqa', ['as'=>'getQA','uses'=>'SubmitProofController@getQA']);
Route::get('getprooffilebyquestionid', ['as'=>'getprooffilebyquestionid','uses'=>'SubmitProofController@getProofFilesByQuestionIdAndProductId']);
Route::post('/copymark',['as'=>'copyMark','uses'=>'CouncilsController@copyMark']);

Route::get('/filterevaluationresult',['as'=>'filterevaluationresult','uses'=>'EvaluationresultController@getFilterData']);
Route::get('/filterevaluation',['as'=>'filterevaluation','uses'=>'EvaluationController@filterProductsEvaluation']);

Route::get('/viewmarkedbyuser',['as'=>'viewMarkedbyUser','uses'=>'EvaluationController@viewMarkedByUser']);



