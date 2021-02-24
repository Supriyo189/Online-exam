<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Participation extends Model
{
    protected $table = 'participations';

    public function examinfo()
    {
        return $this->belongsTo('App\Exam_info','unique_id');
    }
    public function student()
    {
        return $this->belongsTo('App\User','std_id');
    }
}
