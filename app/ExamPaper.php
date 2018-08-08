<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ExamPaper extends Model
{
    public function questions(){
        //return $this->hasMany('App\Questions', 'exampprid')->paginate(1);
        return $this->hasMany('App\Questions', 'exampprid');
    }
}
