<?php

namespace App\Repositories\Eloquents;

use App\Repositories\Contracts\CouncilRepositoryInterface;
use App\Models\Council;
use App\Models\MemberCouncil;
use App\Models\ProductCouncil;
use App\Models\MemberHelpTeam;
use DB;


class CouncilRepository implements CouncilRepositoryInterface
{
    public function all($order)
    {
        if(!IsNullOrEmptyString($order)){
            return Council::orderBy('id', 'DESC')->get();
        }else{
            return Council::all();
        }

    }

    public function paginate($limit){
        return Council::orderBy('id', 'DESC')->paginate($limit);
    }

    public function find($id)
    {
        return Council::find($id);
    }

    public function getCouncilsByLevel($user){
        if($user->level == 3){
            //Cấp huyện
            $districtId = $user->address->district_id;
            $results = DB::select("SELECT c.id, c.user_id, c.name,c.expired, c.chairman_id, c.chairman_name, c.secretary_id, c.secretary_name,
            IFNULL((SELECT count(pc.id) as count from product_councils pc WHERE pc.council_id = c.id GROUP BY pc.council_id), 0) 
            as product,
            IFNULL((SELECT count(mc.id) as count from member_councils mc WHERE mc.council_id = c.id GROUP BY mc.council_id), 0) 
            as member,
            (SELECT id FROM help_teams WHERE council_id = c.id LIMIT 1) as team_id
             FROM councils c WHERE c.user_id = $user->id OR c.chairman_id = $user->id");
            return $results;
        }else if($user->level == 2){
            //cấp tỉnh
            $provinceId = $user->address->province_id;
            $results = DB::select("SELECT c.id, c.user_id, c.name,c.expired, c.chairman_id, c.chairman_name, c.secretary_id, c.secretary_name,
                         IFNULL((SELECT count(pc.id) as count from product_councils pc WHERE pc.council_id = c.id GROUP BY pc.council_id), 0) 
            as product,
            IFNULL((SELECT count(mc.id) as count from member_councils mc WHERE mc.council_id = c.id GROUP BY mc.council_id), 0) 
            as member,
            (SELECT id FROM help_teams WHERE council_id = c.id LIMIT 1) as team_id
             FROM councils c WHERE c.user_id = $user->id OR c.chairman_id = $user->id");
            return $results;
        }else{
            //Cấp TW
            $results = DB::select("SELECT c.id, c.user_id, c.name,c.expired, c.chairman_id, c.chairman_name, c.secretary_id, c.secretary_name,
            IFNULL((SELECT count(pc.id) as count from product_councils pc WHERE pc.council_id = c.id GROUP BY pc.council_id), 0) 
            as product,
            IFNULL((SELECT count(mc.id) as count from member_councils mc WHERE mc.council_id = c.id GROUP BY mc.council_id), 0) 
            as member,
            (SELECT id FROM help_teams WHERE council_id = c.id LIMIT 1) as team_id
             FROM councils c WHERE c.user_id = $user->id OR c.chairman_id = $user->id");
            return $results;
        }
    }

    public function getMembersByCouncil($id){
        $results = DB::select("SELECT mc.council_id, mc.user_id, mc.type, u.name, u.avatar, u.email, u.phone FROM member_councils mc JOIN users u ON mc.user_id = u.id WHERE mc.council_id = ?",[$id]);
        return $results;
    }

    public function addMemberCouncil($members, $id){
        try {
            DB::beginTransaction();
            foreach($members as $item){
                $memberCouncil = new MemberCouncil;
                $memberCouncil->council_id = $id;
                $memberCouncil->user_id = $item;
                $memberCouncil->type = 'member';
                $memberCouncil->save();
            }
            DB::commit();
            return 'success';
        } catch (\Exception $e) {
            DB::rollback();
            return $e->getMessage();
        }

    }

    public function updateProductCouncil($products, $id, $level){
        try {
            DB::beginTransaction();
            foreach($products as $item){
                $productCouncil = new ProductCouncil;
                $productCouncil->council_id = $id;
                $productCouncil->product_id = $item;
                $productCouncil->level = $level;
                $productCouncil->save();
            }
            DB::commit();
            return 'success';
        } catch (\Exception $e) {
            DB::rollback();
            return $e->getMessage();
        }
    }

    public function getMemberCountOfCouncilByProductIdAndLevel($productId, $level){
        return DB::select("SELECT COUNT(*) as 'count' FROM member_councils WHERE council_id = (SELECT council_id FROM product_councils WHERE product_id = ? AND level = ? limit 1)",[$productId,$level]);
    }

    public function getCouncilById($id){
        $result = DB::select("SELECT 
        (SELECT COUNT(*) FROM member_councils WHERE council_id = ?) as member_count, 
        (SELECT COUNT(mht.id) FROM help_teams ht JOIN member_help_teams mht ON ht.id = mht.team_id WHERE council_id = ?) as help_team_count
        FROM councils WHERE id = ?",[$id,$id,$id]);
        return $result;
    }

    public function deleteProductCouncil($councilId, $productId){
        return DB::select("DELETE FROM product_councils WHERE council_id = ? AND product_id = ?",[$councilId, $productId]);
    }

    public function getMembersHelpTeamById($id){
        $results = DB::select("SELECT u.name, u.email, u.phone, mht.user_id, u.avatar, mht.type FROM member_help_teams mht JOIN users u ON mht.user_id = u.id WHERE mht.team_id = ?", [$id]);
        return $results;
    }

    public function addMemberHelpTeam($members, $id){
        try {
            DB::beginTransaction();
            foreach($members as $item){
                $MemberHelpTeam = new MemberHelpTeam;
                $MemberHelpTeam->team_id = $id;
                $MemberHelpTeam->user_id = $item;
                $MemberHelpTeam->type = 'member';
                $MemberHelpTeam->save();
            }
            DB::commit();
            return 'success';
        } catch (\Exception $e) {
            DB::rollback();
            return $e->getMessage();
        }

    }

    public function getHelpTeamByCouncilId($councilId){
        $result = DB::select("SELECT ht.id FROM help_teams ht WHERE council_id = ? LIMIT 1",[$councilId]);
        if(isset($result)){
            return $result[0]->id;
        }else{
            return 0;
        }
    }

    public function updateMemberCouncilByRole($userId, $role){
        return MemberCouncil::where('type', $role)->update( array('user_id'=>$userId));
    }

    public function getMemberOfCouncilByUserIdAndCouncilId($userId,$councilId){
        $result = DB::select("SELECT * FROM member_councils WHERE user_id = ? AND council_id = ? LIMIT 1",[$userId,$councilId]);
        if(isset($result)){
            return $result[0];
        }else{
            return null;
        }
    }

    public function getFileOfCouncilByProductIdAndCouncilId($productId,$councilId){
        $result = DB::select("SELECT * FROM product_councils WHERE product_id = ? AND council_id = ? LIMIT 1",[$productId,$councilId]);
        if(isset($result)){
            return $result[0];
        }else{
            return null;
        }
    }

    public function getMemberHelpTeamByTeamIdAndUserId($userId,$teamId){
        $result = DB::select("SELECT * FROM member_help_teams WHERE user_id = ? AND team_id = ? LIMIT 1",[$userId,$teamId]);
        if(isset($result)){
            return $result[0];
        }else{
            return null;
        }
    }

    public function updateMemberHelpTeamByRole($userId, $role){
        return MemberHelpTeam::where('type', $role)->update( array('user_id'=>$userId));
    }

    public function updateMemberCouncil($userUpdateId, $userId, $councilId){
        return DB::update('update member_councils set user_id = ? where user_id = ? and council_id = ?', [$userId , $userUpdateId , $councilId]);
    }

    public function updateMemberHelpTeam($userUpdateId, $userId, $teamId){
        return DB::update('update member_help_teams set user_id = ? where user_id = ? and team_id = ?', [$userId , $userUpdateId , $teamId]);
    }
}
