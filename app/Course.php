<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    public function tutors() {
        return $this->belongsToMany('App\User', 'available_tutors', 'course_id', 'user_id');
    }

    public function professors() {
        return $this->belongsToMany('App\User', 'current_professors', 'course_id', 'user_id');
    }

    public function assignments() {
        return $this->hasMany('App\Assignment');
    }
}
