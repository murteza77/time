<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Todolist extends Model
{

    protected $fillable =['name', 'description'];

    public function tasks(){

        return $this->hasMany('App\Task','list_id');
    }

    public function Category(){
        $this->hasOne('App\Category');
    }
}
