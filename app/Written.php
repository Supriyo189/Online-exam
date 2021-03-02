<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Written extends Model
{
    protected $table = 'writtens';

    public function department()
    {
       return $this->belongsTo('App\Department','department_id');
    }
    public function user()
    {
       return $this->belongsTo('App\User','teacher_id');
    }
}
