<?php

namespace App;

use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function roles() {
        return $this->belongsToMany('App\Role', 'user_roles', 'user_id', 'role_id');
    }

    public function courses_taught() {
        return $this->belongsToMany('App\Course', 'current_professors', 'user_id', 'course_id');
    }

    public function courses_tutored() {
        return $this->belongsToMany('App\Course', 'available_tutors', 'user_id', 'course_id');
    }

    public function student_assignments() {
        return $this->hasMany('App\Assignment', 'student_id');
    }

    public function tutor_assignments() {
        return $this->hasMany('App\Assignment', 'tutor_id');
    }

    public function professor_assignments() {
        return $this->hasMany('App\Assignment', 'professor_id');
    }

    public function hasRole($role_name) {
        $roles = $this->roles;
        foreach ($roles as $role) {
            if ($role->name == $role_name) {
                return true;
            }
        }
        return false;
    }
}
