<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
	protected $fillable = array('name','teacher_id');
	public $timestamps = false;
    //
    public function teachers(){
        return $this->belongsToMany(Teacher::class);
    }
}
