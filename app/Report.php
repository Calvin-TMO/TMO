<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Report extends Model
{
    public function assignment() {
        return $this->belongsTo('App\Assignment');
    }

    public function additional_comments() {
        return $this->hasMany('App\Comment');
    }
}
