<?php
namespace App\Repositories\Contracts;

interface ProofRepositoryInterface extends BaseRepositoryInterface
{
    public function getProofsByType($type);
    public function getProofInformationsByProductIdAndProofId($productId,$proofId);
    public function getProofsByProductId($productId);
    public function getSupProof($supId);
    public function checkProductProofDone($productId);
    public function getProofFilesByProductIdAndUserId($productId, $proofId ,$userId);
    public function getProofInformationById($id);
    public function getProofFile($id);
    public function getMarkByUserIdAndQuestionId($productId,$userId, $answerId, $councilId);
    public function checkProofLinkExist($proofId, $proofInformation);
    public function getLinksByProofFileId($proofFileId);
    public function getProofFilesByQuestionIdAndProductId($questionId, $productId);
}
