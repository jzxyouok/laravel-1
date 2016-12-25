<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Teacher extends Model
{
	protected $fillable = array('name');
	public $timestamps = false;
    //
    public function students(){
        return $this->belongsToMany(Student::class);
    }
}
