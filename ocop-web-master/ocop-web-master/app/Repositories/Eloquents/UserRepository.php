<?php

namespace App\Repositories\Eloquents;

use App\Repositories\Contracts\UserRepositoryInterface;
use App\Models\User;
use DB;

class UserRepository implements UserRepositoryInterface
{
    public function all($order)
    {
        if(!IsNullOrEmptyString($order)){
            return User::orderBy('id', 'DESC')->get();
        }else{
            return User::all();
        }

    }

    public function paginate($limit){
        return User::orderBy('id', 'DESC')->paginate($limit);
    }

    public function find($id)
    {
        return User::find($id);
    }

    public function createEntity(User $user){
        $user->save();
        $user->roles()->attach(1);
    }

    public function getMemberByLevel(User $user){
        if($user->level == 3){
            //Cấp huyện
            $districtId = $user->address->district_id;
            $results = DB::select("SELECT u.id, u.name,u.avatar,u.email,u.phone, (SELECT r.name FROM role_user ru JOIN roles r ON ru.role_id = r.id WHERE ru.user_id = u.id LIMIT 1 ) as role FROM users u JOIN user_addresses ua ON u.id = ua.user_id  WHERE u.level = $user->level AND ua.district_id = $districtId");
            return $results;
        }else if($user->level == 2){
            //cấp tỉnh
            $provinceId = $user->address->province_id;
            $results = DB::select("SELECT u.id, u.name,u.avatar,u.email,u.phone, (SELECT r.name FROM role_user ru JOIN roles r ON ru.role_id = r.id WHERE ru.user_id = u.id LIMIT 1 ) as role FROM users u JOIN user_addresses ua ON u.id = ua.user_id  WHERE u.level = $user->level AND ua.province_id = $provinceId");
            return $results;
        }else{
            //Cấp TW
            $results = DB::select("SELECT u.id, u.name,u.avatar,u.email,u.phone, (SELECT r.name FROM role_user ru JOIN roles r ON ru.role_id = r.id WHERE ru.user_id = u.id LIMIT 1 ) as role FROM users u JOIN user_addresses ua ON u.id = ua.user_id  WHERE u.level = $user->level");
            return $results;
        }

    }

    public function getSearchMemberByLevel(User $user, $keyWord){
        $keyWord = $keyWord.'%';
        if($user->level == 3){
            //Cấp huyện
            $districtId = $user->address->district_id;
            $results = DB::select("SELECT u.id, u.name,u.avatar,u.email,u.phone, (SELECT r.name FROM role_user ru JOIN roles r ON ru.role_id = r.id WHERE ru.user_id = u.id LIMIT 1 ) as role FROM users u JOIN user_addresses ua ON u.id = ua.user_id  WHERE u.level = $user->level AND ua.district_id = $districtId AND u.email LIKE ?",[$keyWord]);
            return $results;
        }else if($user->level == 2){
            //cấp tỉnh
            $provinceId = $user->address->province_id;
            $results = DB::select("SELECT u.id, u.name,u.avatar,u.email,u.phone, (SELECT r.name FROM role_user ru JOIN roles r ON ru.role_id = r.id WHERE ru.user_id = u.id LIMIT 1 ) as role FROM users u JOIN user_addresses ua ON u.id = ua.user_id  WHERE u.level = $user->level AND ua.province_id = $provinceId AND u.email LIKE ?",[$keyWord]);
            return $results;
        }else{
            //Cấp TW
            $results = DB::select("SELECT u.id, u.name,u.avatar,u.email,u.phone, (SELECT r.name FROM role_user ru JOIN roles r ON ru.role_id = r.id WHERE ru.user_id = u.id LIMIT 1 ) as role FROM users u JOIN user_addresses ua ON u.id = ua.user_id  WHERE u.level = $user->level AND u.email LIKE ?",[$keyWord]);
            return $results;
        }
    }

    public function getMemberExaminerByLevel(User $user){
        if($user->level == 3){
            //Cấp huyện
            $districtId = $user->address->district_id;
            $results = DB::select("SELECT u.id, u.name,u.avatar,u.email,u.phone, (SELECT r.name FROM role_user ru JOIN roles r ON ru.role_id = r.id WHERE ru.user_id = u.id LIMIT 1 ) as role FROM users u JOIN user_addresses ua ON u.id = ua.user_id JOIN role_user ru ON u.id = ru.user_id  WHERE u.level = $user->level AND ua.district_id = $districtId AND (ru.role_id = 4 OR ru.role_id = 2)");
            return $results;
        }else if($user->level == 2){
            //cấp tỉnh
            $provinceId = $user->address->province_id;
            $results = DB::select("SELECT u.id, u.name,u.avatar,u.email,u.phone, (SELECT r.name FROM role_user ru JOIN roles r ON ru.role_id = r.id WHERE ru.user_id = u.id LIMIT 1 ) as role FROM users u JOIN user_addresses ua ON u.id = ua.user_id JOIN role_user ru ON u.id = ru.user_id  WHERE u.level = $user->level AND ua.province_id = $provinceId AND (ru.role_id = 4 OR ru.role_id = 2)");
            return $results;
        }else{
            //Cấp TW
            $results = DB::select("SELECT u.id, u.name,u.avatar,u.email,u.phone, (SELECT r.name FROM role_user ru JOIN roles r ON ru.role_id = r.id WHERE ru.user_id = u.id LIMIT 1 ) as role FROM users u JOIN user_addresses ua ON u.id = ua.user_id JOIN role_user ru ON u.id = ru.user_id  WHERE u.level = $user->level AND (ru.role_id = 4 OR ru.role_id = 2)");
            return $results;
        }
    }

    public function getMemberExaminerOtherByLevel(User $user, $councilId){
        if($user->level == 3){
            //Cấp huyện
            $districtId = $user->address->district_id;
            $results = DB::select("SELECT u.id, u.name,u.avatar,u.email,u.phone, 
            (SELECT r.name FROM role_user ru JOIN roles r ON ru.role_id = r.id WHERE ru.user_id = u.id LIMIT 1 ) as role 
            FROM users u JOIN user_addresses ua ON u.id = ua.user_id JOIN role_user ru ON u.id = ru.user_id  
            WHERE u.id NOT IN (SELECT user_id FROM member_councils WHERE council_id = ?) AND u.level = $user->level AND ua.district_id = $districtId AND (ru.role_id = 4 OR ru.role_id = 2)",[$councilId]);
            return $results;
        }else if($user->level == 2){
            //cấp tỉnh
            $provinceId = $user->address->province_id;
            $results = DB::select("SELECT u.id, u.name,u.avatar,u.email,u.phone, 
            (SELECT r.name FROM role_user ru JOIN roles r ON ru.role_id = r.id WHERE ru.user_id = u.id LIMIT 1 ) as role 
            FROM users u JOIN user_addresses ua ON u.id = ua.user_id JOIN role_user ru ON u.id = ru.user_id  
            WHERE u.id NOT IN (SELECT user_id FROM member_councils WHERE council_id = ?) AND u.level = $user->level AND ua.province_id = $provinceId AND (ru.role_id = 4 OR ru.role_id = 2)",[$councilId]);
            return $results;
        }else{
            //Cấp TW
            $results = DB::select("SELECT u.id, u.name,u.avatar,u.email,u.phone, 
            (SELECT r.name FROM role_user ru JOIN roles r ON ru.role_id = r.id WHERE ru.user_id = u.id LIMIT 1 ) as role 
            FROM users u JOIN user_addresses ua ON u.id = ua.user_id JOIN role_user ru ON u.id = ru.user_id  
            WHERE u.id NOT IN (SELECT user_id FROM member_councils WHERE council_id = ?) AND u.level = $user->level AND (ru.role_id = 4 OR ru.role_id = 2)",[$councilId]);
            return $results;
        }
    }

    public function getSearchMemberExaminerByLevel(User $user, $keyWord){
        $keyWord = $keyWord.'%';
        if($user->level == 3){
            //Cấp huyện
            $districtId = $user->address->district_id;
            $results = DB::select("SELECT u.id, u.name,u.avatar,u.email,u.phone, (SELECT r.name FROM role_user ru JOIN roles r ON ru.role_id = r.id WHERE ru.user_id = u.id LIMIT 1 ) as role 
            FROM users u JOIN user_addresses ua ON u.id = ua.user_id JOIN role_user ru ON u.id = ru.user_id  
            WHERE u.level = $user->level AND ua.district_id = $districtId AND (ru.role_id = 4 OR ru.role_id = 2) AND u.email LIKE ?", [$keyWord]);
            return $results;
        }else if($user->level == 2){
            //cấp tỉnh
            $provinceId = $user->address->province_id;
            $results = DB::select("SELECT u.id, u.name,u.avatar,u.email,u.phone, 
            (SELECT r.name FROM role_user ru JOIN roles r ON ru.role_id = r.id WHERE ru.user_id = u.id LIMIT 1 ) as role 
            FROM users u JOIN user_addresses ua ON u.id = ua.user_id JOIN role_user ru ON u.id = ru.user_id  
            WHERE u.level = $user->level AND ua.province_id = $provinceId AND (ru.role_id = 4 OR ru.role_id = 2) AND u.email LIKE ?",[$keyWord]);
            return $results;
        }else{
            //Cấp TW
            $results = DB::select("SELECT u.id, u.name,u.avatar,u.email,u.phone, 
            (SELECT r.name FROM role_user ru JOIN roles r ON ru.role_id = r.id WHERE ru.user_id = u.id LIMIT 1 ) as role 
            FROM users u JOIN user_addresses ua ON u.id = ua.user_id JOIN role_user ru ON u.id = ru.user_id  
            WHERE u.level = $user->level AND (ru.role_id = 4 OR ru.role_id = 2) AND u.email LIKE ?",[$keyWord]);
            return $results;
        }
    }

    public function getSearchMemberExaminerOtherByLevel(User $user, $keyWord, $councilId){
        $keyWord = $keyWord.'%';
        if($user->level == 3){
            //Cấp huyện
            $districtId = $user->address->district_id;
            $results = DB::select("SELECT u.id, u.name,u.avatar,u.email,u.phone, 
            (SELECT r.name FROM role_user ru JOIN roles r ON ru.role_id = r.id WHERE ru.user_id = u.id LIMIT 1 ) as role 
            FROM users u JOIN user_addresses ua ON u.id = ua.user_id JOIN role_user ru ON u.id = ru.user_id  
            WHERE u.id NOT IN (SELECT user_id FROM member_councils WHERE council_id = ?) AND u.level = $user->level AND ua.district_id = $districtId AND (ru.role_id = 4 OR ru.role_id = 2) AND u.email LIKE ?", [$councilId,$keyWord]);
            return $results;
        }else if($user->level == 2){
            //cấp tỉnh
            $provinceId = $user->address->province_id;
            $results = DB::select("SELECT u.id, u.name,u.avatar,u.email,u.phone, 
            (SELECT r.name FROM role_user ru JOIN roles r ON ru.role_id = r.id WHERE ru.user_id = u.id LIMIT 1 ) as role 
            FROM users u JOIN user_addresses ua ON u.id = ua.user_id JOIN role_user ru ON u.id = ru.user_id  
            WHERE u.id NOT IN (SELECT user_id FROM member_councils WHERE council_id = ?) AND u.level = $user->level AND ua.province_id = $provinceId AND (ru.role_id = 4 OR ru.role_id = 2) AND u.email LIKE ?",[$councilId,$keyWord]);
            return $results;
        }else{
            //Cấp TW
            $results = DB::select("SELECT u.id, u.name,u.avatar,u.email,u.phone, 
            (SELECT r.name FROM role_user ru JOIN roles r ON ru.role_id = r.id WHERE ru.user_id = u.id LIMIT 1 ) as role 
            FROM users u JOIN user_addresses ua ON u.id = ua.user_id JOIN role_user ru ON u.id = ru.user_id  
            WHERE u.id NOT IN (SELECT user_id FROM member_councils WHERE council_id = ?) AND u.level = $user->level AND (ru.role_id = 4 OR ru.role_id = 2) AND u.email LIKE ?",[$councilId,$keyWord]);
            return $results;
        }
    }

    public function getMembers($user, $limit, $offset){
        if($offset <= 0){
            $offset == 1;
        }
        $start = ($limit * ($offset - 1));

        if($user->level == 3){
            //Cấp huyện
            $districtId = $user->address->district_id;
            $results = DB::select("SELECT u.id, u.name,u.avatar,u.email,u.phone,u.status, (SELECT r.name FROM role_user ru JOIN roles r ON ru.role_id = r.id WHERE ru.user_id = u.id LIMIT 1 ) as role FROM users u JOIN user_addresses ua ON u.id = ua.user_id  WHERE u.level = $user->level AND ua.district_id = $districtId LIMIT ? OFFSET ?",[$limit,$start]);
            return $results;
        }else if($user->level == 2){
            //cấp tỉnh
            $provinceId = $user->address->province_id;
            $results = DB::select("SELECT u.id, u.name,u.avatar,u.email,u.phone,u.status, (SELECT r.name FROM role_user ru JOIN roles r ON ru.role_id = r.id WHERE ru.user_id = u.id LIMIT 1 ) as role FROM users u JOIN user_addresses ua ON u.id = ua.user_id  WHERE u.level = $user->level AND ua.province_id = $provinceId LIMIT ? OFFSET ?",[$limit,$start]);
            return $results;
        }else{
            //Cấp TW
            $results = DB::select("SELECT u.id, u.name,u.avatar,u.email,u.phone,u.status, (SELECT r.name FROM role_user ru JOIN roles r ON ru.role_id = r.id WHERE ru.user_id = u.id LIMIT 1 ) as role FROM users u JOIN user_addresses ua ON u.id = ua.user_id  WHERE u.level = $user->level LIMIT ? OFFSET ?",[$limit,$start]);
            return $results;
        }
    }

    public function getFilterMember($user,$data){
        if($data->offset <= 0){
            $data->offset == 1;
        }
        $start = ($data->limit * ($data->offset - 1));
        if ($data->userType != null){
            $type = $data->userType;
            $query = User::with(['roles'])->whereHas('roles', function($q) use($type) {
                $q->select('name as role_name')->where('name', '=', $type);
            });
        }else{
            $query = User::with(['roles' => function($e){
                $e->select('name as role_name');
            }]);
        }
            $query = $query->join("user_addresses", "users.id", "=", "user_addresses.user_id")
            ->select("users.id", "users.name", "users.avatar", "users.email", "users.phone", "users.status")
            ->where("users.level", $data->user->level);
        if ($data->searchKey != null){
            $query = $query->where("users.name", "like", '%'.$data->searchKey.'%');
        }
        if ($data->provinceId != null){
            $query = $query->where("user_addresses.province_id", $data->provinceId);
        }else{
            $query = $query->where("user_addresses.province_id", $user->address->province_id);
        }
        if ($data->districtId != null){
            $query = $query->where("user_addresses.district_id", $data->districtId);
        }else{
            $query = $query->where("user_addresses.district_id", $user->address->district_id);
        }

        $result = $query->skip($start)->take($data->limit)->get();
        return $result;
    }

    public function searchAccountEntity($keyWord){
        $results = DB::select("SELECT e.id, e.name, ea.province, u.avatar from users u JOIN role_user ru ON u.id = ru.user_id JOIN entities e ON u.id = e.user_id JOIN entity_addresses ea ON e.id = ea.entity_id  WHERE phone = ? OR email = ? AND ru.role_id = 1",[$keyWord, $keyWord]); //1 lad role member chủ thể
        return $results;
    }

    public function getMemberHelpTeamOtherByLevel(User $user, $teamId){
        if($user->level == 3){
            //Cấp huyện
            $districtId = $user->address->district_id;
            $results = DB::select("SELECT u.id, u.name,u.avatar,u.email,u.phone, 
            (SELECT r.name FROM role_user ru JOIN roles r ON ru.role_id = r.id WHERE ru.user_id = u.id LIMIT 1 ) as role 
            FROM users u JOIN user_addresses ua ON u.id = ua.user_id JOIN role_user ru ON u.id = ru.user_id  
            WHERE u.id NOT IN (SELECT user_id FROM member_help_teams WHERE team_id = ?) AND u.level = $user->level AND ua.district_id = $districtId AND ru.role_id = 4",[$teamId]);
            return $results;
        }else if($user->level == 2){
            //cấp tỉnh
            $provinceId = $user->address->province_id;
            $results = DB::select("SELECT u.id, u.name,u.avatar,u.email,u.phone, 
            (SELECT r.name FROM role_user ru JOIN roles r ON ru.role_id = r.id WHERE ru.user_id = u.id LIMIT 1 ) as role 
            FROM users u JOIN user_addresses ua ON u.id = ua.user_id JOIN role_user ru ON u.id = ru.user_id  
            WHERE u.id NOT IN (SELECT user_id FROM member_help_teams WHERE team_id = ?) AND u.level = $user->level AND ua.province_id = $provinceId AND ru.role_id = 4",[$teamId]);
            return $results;
        }else{
            //Cấp TW
            $results = DB::select("SELECT u.id, u.name,u.avatar,u.email,u.phone, 
            (SELECT r.name FROM role_user ru JOIN roles r ON ru.role_id = r.id WHERE ru.user_id = u.id LIMIT 1 ) as role 
            FROM users u JOIN user_addresses ua ON u.id = ua.user_id JOIN role_user ru ON u.id = ru.user_id  
            WHERE u.id NOT IN (SELECT user_id FROM member_help_teams WHERE team_id = ?) AND u.level = $user->level AND ru.role_id = 4",[$teamId]);
            return $results;
        }
    }
}
