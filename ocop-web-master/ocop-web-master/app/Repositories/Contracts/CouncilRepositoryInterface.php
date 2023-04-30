<?php
namespace App\Repositories\Contracts;

interface CouncilRepositoryInterface extends BaseRepositoryInterface
{
    public function getCouncilsByLevel($user);
    public function getMembersByCouncil($id);
    public function addMemberCouncil($members, $id);
    public function updateMemberCouncil($userUpdateId, $userId, $councilId);
    public function updateProductCouncil($products, $id, $level);
    public function getMemberCountOfCouncilByProductIdAndLevel($productId, $level);
    public function getCouncilById($id);
    public function deleteProductCouncil($councilId, $productId);
    public function getMembersHelpTeamById($id);
    public function addMemberHelpTeam($members, $id);
    public function getHelpTeamByCouncilId($councilId);
    public function updateMemberCouncilByRole($userId, $role);
    public function getMemberOfCouncilByUserIdAndCouncilId($userId,$councilId);
    public function getFileOfCouncilByProductIdAndCouncilId($productId,$councilId);
    public function updateMemberHelpTeamByRole($userId, $role);
    public function getMemberHelpTeamByTeamIdAndUserId($userId,$teamId);
    public function updateMemberHelpTeam($userUpdateId, $userId, $teamId);
}