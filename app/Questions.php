<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Questions extends Model
{
    public function examPaper(){
        return $this->belongsTo('App\ExamPaper');
    }

    public function answers(){
        return $this->hasMany('App\Answers', 'questionid');
    }
}
