<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Permission extends Model
{
    protected $fillable = ['name', 'id'];
	
    public function roles()
    {
        return $this->belongsToMany(Role::class);
    }
    public function users()
    {
        return $this->hasManyThrough(User::class, Role::class);
    }
}