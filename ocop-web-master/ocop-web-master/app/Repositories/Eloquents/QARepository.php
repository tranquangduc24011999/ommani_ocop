<?php

namespace App\Repositories\Eloquents;

use App\Repositories\Contracts\QARepositoryInterface;
use App\Models\Group;
use App\Models\Section;
use App\Models\Question;
use App\Models\Answer;
use App\Models\GuideQuestion;
use DB;

class QARepository implements QARepositoryInterface
{
    public function all($order)
    {
        if(!IsNullOrEmptyString($order)){
            return Group::orderBy('id', 'DESC')->get();
        }else{
            return Group::all();
        }

    }

    public function paginate($limit){
        return Group::orderBy('id', 'DESC')->paginate($limit);
    }

    public function find($id)
    {
        return Group::find($id);
    }

    public function getQuestionAnswers($productType, $userId, $productId){
        $results = DB::select("SELECT g.id as groupId, g.code as groupCode, g.name as groupName,
        s.id as sectionId, s.index as sectionIndex, s.name as sectionName, s.note as sectionNote,
        q.id as questionId, q.question as question, q.parent_id as parentId,
        (CASE
                WHEN q.parent_id > 0 THEN (SELECT question FROM questions where id = q.parent_id)
                ELSE null
             END) AS questionParent,

        CAST(IFNULL((SELECT answer_id FROM marks where answer_id = a.id AND user_mark_id = ? AND product_id = ? LIMIT 1), 0) AS UNSIGNED) as answer,
        q.type as questionType, q.note as questionNote,
        a.id as answerId,a.title as title,a.rank as rank,a.note_after as note_after, a.content as content, a.point as point,
        (SELECT COUNT(*) FROM question_comments WHERE product_id = ? AND question_id = q.id) as count_note
        FROM groups g
            JOIN sections s ON g.id = s.group_id
            JOIN questions q ON s.id = q.section_id
            JOIN answers a ON q.id = a.question_id
        WHERE s.product_type=?",[$userId,$productId,$productId,$productType]);
        $qacustoms = array();
        $resultquestion = getGroupQuestion($results);
        $questionGroupA = array();
        $questionGroupB = array();
        $questionGroupC = array();
        foreach($resultquestion as $questions){
            if($questions[0]->groupId == 1){
                array_push($questionGroupA,$questions);
            }
            if($questions[0]->groupId == 2){
                array_push($questionGroupB,$questions);
            }
            if($questions[0]->groupId == 3){
                array_push($questionGroupC,$questions);
            }
        }
        $totalA = 0;
        $totalB = 0;
        $totalC = 0;
        foreach($questionGroupA as $question){
            $max = max_attribute_in_array($question, 'point');
            $totalA += $max;
        }
        foreach($questionGroupB as $question){
            $max = max_attribute_in_array($question, 'point');
            $totalB += $max;
        }
        foreach($questionGroupC as $question){
            $max = max_attribute_in_array($question, 'point');
            $totalC += $max;
        }

        foreach($resultquestion as $answers){
            if($answers[0]->parentId > 0){

                $data = (object) [
                    "groupId" => $answers[0]->groupId,
                    "groupCode" => $answers[0]->groupCode,
                    "groupName" => $answers[0]->groupName,
                    "sectionId" => $answers[0]->sectionId,
                    "sectionName" => $answers[0]->sectionName,
                    "sectionNote" => $answers[0]->sectionNote,
                    "questionId" => $answers[0]->questionId,
                    "question" => $answers[0]->questionParent,
                    "questionType" => $answers[0]->questionType,
                    "questionParentId" => $answers[0]->parentId,
                    //"questionParent" => $answers[0]->questionParent,
                    "questionNote" => $answers[0]->questionNote,
                    "count_note" => $answers[0]->count_note,
                    "answers" => null,
                    "question2" => $this->getQuestionLv2($resultquestion,$answers[0]->parentId)
                ];
                array_push($qacustoms,$data);
            }else{
                $data = (object) [
                    "groupId" => $answers[0]->groupId,
                    "groupCode" => $answers[0]->groupCode,
                    "groupName" => $answers[0]->groupName,
                    "sectionId" => $answers[0]->sectionId,
                    "sectionName" => $answers[0]->sectionName,
                    "sectionNote" => $answers[0]->sectionNote,
                    "questionId" => $answers[0]->questionId,
                    "question" => $answers[0]->question,
                    "questionType" => $answers[0]->questionType,
                    "questionParentId" => $answers[0]->parentId,
                    //"questionParent" => $answers[0]->questionParent,
                    "questionNote" => $answers[0]->questionNote,
                    "count_note" => $answers[0]->count_note,
                    "answers" => $answers
                    // "answers" => $answers = array_map(function ($answer) {
                    //     return item = (object)[
                    //         "answerId" => $answer->answerId,
                    //         "content" => $answer->content,
                    //         "point" => $answer->point,

                    //     ]
                    // }, $answers);
                ];
                array_push($qacustoms,$data);
            }

        }
        $new = array();
        foreach($qacustoms as $item){
            if(!$this->checkDuplicate($new, $item->questionParentId)){
                array_push($new, $item);
            }
        }
        return array(getQASection($new), $totalA, $totalB, $totalC);
        //return $new;
    }

    function getQuestionLv2($resultquestion, $parentId){
        $questions = array();
        foreach($resultquestion as $answers){
            if($answers[0]->parentId == $parentId){
                array_push($questions, $answers);
            }
        }
        $qacustoms = array();
        foreach($questions  as $answers){
            $data = (object) [
                "groupId" => $answers[0]->groupId,
                "groupCode" => $answers[0]->groupCode,
                "groupName" => $answers[0]->groupName,
                "sectionId" => $answers[0]->sectionId,
                "sectionName" => $answers[0]->sectionName,
                "sectionNote" => $answers[0]->sectionNote,
                "questionId" => $answers[0]->questionId,
                "question" => $answers[0]->question,
                "questionType" => $answers[0]->questionType,
                "questionParentId" => $answers[0]->parentId,
                //"questionParent" => $answers[0]->questionParent,
                "questionNote" => $answers[0]->questionNote,
                "count_note" => $answers[0]->count_note,
                "answers" => $answers
                // "answers" => $answers = array_map(function ($answer) {
                //     return item = (object)[
                //         "answerId" => $answer->answerId,
                //         "content" => $answer->content,
                //         "point" => $answer->point,

                //     ]
                // }, $answers);
            ];
            array_push($qacustoms,$data);
        }
        return $qacustoms;
    }

    function checkDuplicate($array, $parentId){
        if($parentId > 0){
            $result = false;
            foreach($array as $item){
                if($item->questionParentId == $parentId){
                    $result = true;
                    break;
                }
            }
            return $result;
        }else{
            return false;
        }
    }

    public function getGuideQuestions($productType){
        $result = GuideQuestion::where('product_type_id', $productType)->get();
        $groups = getGroupGuideQuestion($result);
        $guidecustoms = array();
        foreach($groups as $group){
            $data = (object) [
                "question_id" => $group[0]->question_id,
                "contents" => $group
            ];
            array_push($guidecustoms, $data);
        }
        return $guidecustoms;
    }

    public function getQuestions2($productType){
        //$result = Question::where('product_type_id', $productType)->get();
        $result = DB::select("select q.id, q.section_id,
        (CASE
        WHEN (question ='' or question is null) THEN (SELECT name FROM sections where id = q.section_id limit 1)
        ELSE q.question
     END) AS question,
        q.parent_id, q.type, q.note, q.product_type_id from questions q where product_type_id =".$productType." ORDER BY section_id ASC");
        return $result;
    }
    public function getUserMark($product_type_id){
        $rankList=DB::table('questions')->select('rank')->where('product_type_id',$product_type_id)->pluck('rank')->toArray();
//        $rankList=DB::SELECT("SELECT rank FROM questions where product_type_id=?",[$product_type_id]);
        return $rankList;
    }

    public function getQuestions($productType){
        $result = Question::where('product_type_id', $productType)->get();
        return $result;
    }
}
