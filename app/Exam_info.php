<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Department;
use App\User;

class Exam_info extends Model
{
    protected $table = 'exam_infos';

    public function department()
    {
       return $this->belongsTo('App\Department','department_id');
    }
    public function user()
    {
       return $this->belongsTo('App\User','teacher_id');
    }
}  
                                   
