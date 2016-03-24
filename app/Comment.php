<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    public function report() {
        return $this->belongsTo('App\Report');
    }

    public function author() {
        return $this->belongsTo('App\User', 'author_id');
    }
}
