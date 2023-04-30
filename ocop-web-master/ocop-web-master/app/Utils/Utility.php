<?php

    function IsNullOrEmptyString($question){
        return (!isset($question) || trim($question)==='');
    }

    function getQAGroup($array){
        $newArray = array();
        foreach($array as $entity)
        {
            if(!isset($newArray[$entity->groupId]))
            {
                $newArray[$entity->groupId] = array();
            }

            $newArray[$entity->groupId][] = $entity;
        }
        return $newArray;
    }

    function getQASection($array){
        $newArray = array();
        foreach($array as $entity)
        {
            if(!isset($newArray[$entity->sectionId]))
            {
                $newArray[$entity->sectionId] = array();
            }

            $newArray[$entity->sectionId][] = $entity;
        }
        return $newArray;
    }

    function getGroupQuestion($array){
        $newArray = array();
        foreach($array as $entity)
        {
            if(!isset($newArray[$entity->questionId]))
            {
                $newArray[$entity->questionId] = array();
            }

            $newArray[$entity->questionId][] = $entity;
        }
        return $newArray;
    }

    function getGroupGuideQuestion($array){
        $newArray = array();
        foreach($array as $guide)
        {
            if(!isset($newArray[$guide->question_id]))
            {
                $newArray[$guide->question_id] = array();
            }

            $newArray[$guide->question_id][] = $guide;
        }
        return $newArray;
    }

    function returnUniqueProperty($array, $property){
        $tempArray = array_unique(array_column($array, $property));
        $moreUniqueArray = array_values(array_intersect_key($array, $tempArray));
        return $moreUniqueArray;
    }

    function max_attribute_in_array($data_points, $value='point'){
        $max=0;
        foreach($data_points as $point){
            if($max < (float)$point->{$value}){
                $max = $point->{$value};
            }
        }
        return $max;
    }

    function compareMembers($objA, $objB) {
        return $objA["id"] <=> $objB["id"];
    }

    function convertRoleToString($user){
        $returnResult = 'Không rõ';
        $level = '';
        if($user->level == 3){
            $level = 'cấp huyện';
        }else if($user->level == 2){
            $level = 'cấp tỉnh';
        }else if($user->level == 1){
            $level = 'cấp trung ương';
        }
        foreach($user->roles as $role){
            if($role->name === 'MEMBER'){
                $returnResult = 'Chủ thể';
                break;
            }else if($role->name === 'HELPTEAM'){
                $returnResult = 'Tổ tư vấn '.$level;
                break;
            }else if($role->name === 'EXAMINER'){
                $returnResult = 'Người chấm '.$level;
                break;
            }else if($role->name === 'MANAGER'){
                $returnResult = 'Quản lý '.$level;
                break;
            }
        }
        return $returnResult;
    }

    function getProductStatus($product)
    {
        if($product->status === 'FAIL'){
            return 'Không đạt';
        }else if($product->status === 'DONE'){
            return 'Hoàn thành';
        }else if($product->status === 'SUBMITTING'){
            return 'Đang nộp';
        }else if($product->status === 'PREPARING'){
            return 'Chưa nộp';
        }else if($product->status === 'WAITTING'){
            return 'Chờ chấm';
        }else if($product->status === 'DISTRICTRANKED'){
            return 'Cấp huyện đã xếp hạng';
        }else if($product->status === 'PROVINCERANKED'){
            return 'Cấp tỉnh đã xếp hạng';
        }else if($product->status === 'TWRANKED'){
            return 'Trung ương đã xếp hạng';
        }else{
            return 'Chưa nộp';
        }
    }

    function getColorStatus($product){
        if($product->status === 'FAIL'){
            return 'danger';
        }else if($product->status === 'DONE'){
            return 'info';
        }else if($product->status === 'SUBMITTING'){
            return 'primary';
        }else if($product->status === 'PREPARING'){
            return 'inverse';
        }else if($product->status === 'WAITTING'){
            return 'inverse';
        }else if($product->status === 'DISTRICTRANKED'){
            return 'success';
        }else if($product->status === 'PROVINCERANKED'){
            return 'success';
        }else if($product->status === 'TWRANKED'){
            return 'success';
        }else{
            return 'inverse';
        }
    }

    function genMultipleData($data){
        $res = [];
        if(isset($data)){
            foreach ($data as $val){
                array_push($res, $val);
            }
        }

        return $res;
    }
?>