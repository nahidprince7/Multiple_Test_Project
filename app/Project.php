<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    protected $fillable = ['name'];

    public function users(){
        return $this->belongsToMany(User::class,'projects_users',
            'projects_id','users_id')
            ->withTimestamps()
            ->withPivot('is_manager')
            ->as('project_user');
    }
    public function managers(){
        return $this->belongsToMany(User::class,'projects_users',
            'projects_id','users_id')
            ->withTimestamps()
            ->withPivot('is_manager')
            ->wherePivot('is_manager',1);
    }
}
