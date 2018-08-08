<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class StudentAnswer extends Model
{
    protected $primaryKey = ('user_id');

    public function corrects(){
        return $this->belongsTo('App\CorrectAnswers');
    }

    public function results(){
        return $this->hasMany('App\StudentResults');
    }
}
