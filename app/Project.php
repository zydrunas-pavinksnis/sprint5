<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    public $fillable = ['name'];

    public function employees(){
        return $this->hasMany('App\Employee');
    }

}
