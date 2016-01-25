<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    protected $fillable = ['name','description','priority','list_id'];


    public function Todolist()
    {
       return $this->belongsTo('App\Todolist');
    }


}
