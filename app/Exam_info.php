<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Department;

class Exam_info extends Model
{
    protected $table = 'exam_infos';

    public function department()
    {
       return $this->belongsTo('App\Department','department_id');
    }
}  
                                   
