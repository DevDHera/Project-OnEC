<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Answers extends Model
{
    public function anquestions(){
        return $this->belongsTo('App\Questions');
    }
}
