<?php
namespace App\Repositories\Contracts;

interface QARepositoryInterface extends BaseRepositoryInterface
{
    public function getQuestionAnswers($productType, $userId, $productId);
    public function getGuideQuestions($productType);
    public function getQuestions($productType);
    public function getQuestions2($productType);
}
