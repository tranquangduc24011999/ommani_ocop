<?php
namespace App\Repositories\Contracts;
use App\Models\User;

interface UserRepositoryInterface extends BaseRepositoryInterface
{
    public function createEntity(User $user);

    public function getMemberByLevel(User $user);

    public function getSearchMemberByLevel(User $user, $keyWord);

    public function getMemberExaminerByLevel(User $user);

    public function getSearchMemberExaminerByLevel(User $user, $keyWord);

    public function getMemberExaminerOtherByLevel(User $user, $councilId);

    public function getSearchMemberExaminerOtherByLevel(User $user, $keyWord, $councilId);

    public function getMembers($user, $limit, $offset);

    public function getFilterMember($user,$data);

    public function searchAccountEntity($keyWord);

    public function getMemberHelpTeamOtherByLevel(User $user, $teamId);

}
