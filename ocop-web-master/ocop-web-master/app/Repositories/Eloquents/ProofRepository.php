<?php

namespace App\Repositories\Eloquents;

use App\Repositories\Contracts\ProofRepositoryInterface;
use App\Models\Proof;
use App\Models\ProofInformation;
use App\Models\ProofFile;
use App\Models\Mark;
use App\Models\ProofLink;
use DB;

class ProofRepository implements ProofRepositoryInterface
{
    public function all($order)
    {
        if(!IsNullOrEmptyString($order)){
            return Proof::orderBy('id', 'DESC')->get();
        }else{
            return Proof::all();
        }

    }

    public function paginate($limit){
        return Proof::orderBy('id', 'DESC')->paginate($limit);
    }

    public function find($id)
    {
        return Proof::find($id);
    }

    public function getProofsByType($type){
        return Proof::where('type', $type)->get();
    }

    // public function getProofInformationsByProductIdAndProofId($productId,$proofId){
    //     return ProofInformation::where(['proof_information.product_id'=>$productId, 'proof_information.proof_id'=>$proofId])
    //     ->leftJoin('proof_files','proof_information.id','=','proof_files.prinformation_id')
    //     ->select(DB::raw('count(*) as count'))->groupBy('proof_files.prinformation_id')->count();
    //     ;
    // }

    public function getProofInformationsByProductIdAndProofId($productId,$proofId){
        return ProofInformation::where(['proof_information.product_id'=>$productId, 'proof_information.proof_id'=>$proofId])->first();
    }

    public function getProofInformationById($id){
        return ProofInformation::find($id);
    }

    public function getProofsByProductId($productId){
        return $proofs = DB::select("
            SELECT
            p.id, p.title,p.type,p.stt,
            IFNULL((SELECT count(pf.id) as count from proof_information pi LEFT JOIN proof_files pf ON pi.id = pf.prinformation_id WHERE pi.product_id = ? AND pi.proof_id = p.id GROUP BY pf.prinformation_id limit 1), 0) 
            as count_file, sp.id as sup_id, sp.explain
            FROM proofs p JOIN support_infomations sp ON sp.proof_id = p.id ORDER BY p.stt;
        ",[$productId]);
    }

    public function getSupProof($supId){
        return $proofs = DB::select("SELECT * FROM support_documents doc WHERE doc.support_id = ?;",[$supId]);
    }

    public function checkProductProofDone($productId){
        $proofs = DB::select("
            SELECT
            p.id, p.title,p.type,
            IFNULL((SELECT count(pf.id) as count from proof_information pi LEFT JOIN proof_files pf ON pi.id = pf.prinformation_id WHERE pi.product_id = ? AND pi.proof_id = p.id GROUP BY pf.prinformation_id), 0) 
            as count_file
            FROM proofs p WHERE p.type = 1;
        ",[$productId]);
        $result = true;
        foreach($proofs as $item){
            if($item->count_file == 0){
                $result = false;
                break;
            }
        }
        return $result;
    }

    public function getProofFilesByProductIdAndUserId($productId,$proofId, $userId){
        return ProofInformation::leftJoin('proof_files','proof_information.id','=','proof_files.prinformation_id')
        ->select('proof_information.id as proof_information_id','proof_files.id as proof_file_id','proof_files.data','proof_files.name_file', 'proof_information.description')
        ->where(['proof_information.product_id'=>$productId, 'proof_information.proof_id'=>$proofId,'proof_information.user_id'=>$userId])
        ->get();
    }

    public function getProofFile($id){
        return ProofFile::find($id);
    }

    public function getMarkByUserIdAndQuestionId($productId,$userId, $questionId, $councilId){
        return Mark::where(['product_id'=>$productId,'marks.user_mark_id'=>$userId, 'marks.question_id'=>$questionId, 'marks.council_id'=>$councilId])->get();
    }

    public function checkProofLinkExist($proofId, $proofInformation){
        $result = ProofLink::where(['proof_id'=>$proofId,'prinformation_id'=>$proofInformation]);
        $result = false;
        if(isset($result)){
            $result = true;
        }
        return $result;
    }

    public function getLinksByProofFileId($proofFileId){
        return ProofLink::where('proof_file_id',$proofFileId)->get();
    }

    public function getProofFilesByQuestionIdAndProductId($questionId, $productId){
        $proofFiles = DB::select("select pf.id, pf.data, pf.name_file, pf.description from proof_links pl LEFT JOIN proof_files pf ON pl.proof_file_id = pf.id WHERE pf.id > 0 AND pl.question_id = ? AND pl.product_id = ?",[$questionId,$productId]);
        return $proofFiles;
    }
}
