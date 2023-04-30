<?php
namespace App\Repositories\Contracts;

interface QuestionCommentRepositoryInterface extends BaseRepositoryInterface
{
    public function getNoteByQuestionIdAndProductId($productId, $questionId);
    public function getUserIdsByQuestionIdAndProductId($productId, $questionId,$userId);
}