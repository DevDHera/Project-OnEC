<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CorrectAnswers extends Model
{
    protected $primaryKey = ('exampprid');
    
    public function students(){        
        return $this->hasMany('App\StudentAnswer', 'exampprid');
    }
}
