<?php

namespace App\Repositories\Eloquents;

use App\Repositories\Contracts\QuestionCommentRepositoryInterface;
use App\Models\QuestionComment;
use DB;

class QuestionCommentRepository implements QuestionCommentRepositoryInterface
{
    public function all($order)
    {
        if(!IsNullOrEmptyString($order)){
            return QuestionComment::orderBy('id', 'DESC')->get();
        }else{
            return QuestionComment::all();
        }
        
    }

    public function paginate($limit){
        return QuestionComment::orderBy('id', 'DESC')->paginate($limit);
    }

    public function find($id)
    {
        return QuestionComment::find($id);
    }

    public function getNoteByQuestionIdAndProductId($productId, $questionId){
        return DB::select("SELECT qc.id, qc.product_id, qc.question_id, qc.user_id, qc.note, qc.created_at, u.name as user_name, u.avatar 
        FROM question_comments qc JOIN users u ON qc.user_id = u.id WHERE qc.product_id = ? AND qc.question_id = ?",[$productId,$questionId]);
    }

    public function getUserIdsByQuestionIdAndProductId($productId, $questionId,$userId){
        $results = QuestionComment::where(['product_id' => $productId, 'question_id' =>$questionId])->pluck('user_id')->toArray();
        return $results;
    }
}