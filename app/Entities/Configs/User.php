<?php

namespace App\Entities\Configs;

use App\Entities\Entity;
use Bican\Roles\Models\Role;
use Illuminate\Auth\Authenticatable;
use Illuminate\Auth\Passwords\CanResetPassword;
use Illuminate\Contracts\Auth\Authenticatable as AuthenticatableContract;
use Illuminate\Contracts\Auth\CanResetPassword as CanResetPasswordContract;

use Bican\Roles\Traits\HasRoleAndPermission;
use Bican\Roles\Contracts\HasRoleAndPermission as HasRoleAndPermissionContract;
use Illuminate\Support\Facades\Hash;

class User extends Entity implements AuthenticatableContract,  CanResetPasswordContract, HasRoleAndPermissionContract
{
    use Authenticatable, CanResetPassword, HasRoleAndPermission;

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'users';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['name', 'last_name','email', 'password'];

    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */
    protected $hidden = ['password', 'remember_token'];


    public function getFullNameAttribute()
    {
        return $this->attributes['last_name'] .' '.$this->attributes['name'] ;
    }

    public function Roles()
    {
        return $this->belongsToMany(Role::class,'role_user');
    }


    public function setPasswordAttribute($pass){

        if(!empty($pass))
            $this->attributes['password'] = Hash::make($pass);
        else
            $this->attributes['password']  = $this->attributes['password'] ;
    }

    

}
