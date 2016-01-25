<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $fillable = ['name'];

    public function TodoList(){

        $this->belognsToMany('App\Todolist');
    }

}
