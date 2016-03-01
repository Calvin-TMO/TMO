<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Assignment extends Model
{
    public function course() {
        return $this->belongsTo('App\Course');
    }

    public function professor() {
        return $this->belongsTo('App\User', 'professor_id');
    }

    public function tutor() {
        return $this->belongsTo('App\User', 'tutor_id');
    }

    public function student() {
        return $this->belongsTo('App\User', 'student_id');
    }

    public function reports() {
        return $this->hasMany('App\Report');
    }
}
