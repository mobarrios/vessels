<?php
 namespace App\Entities\Configs;


 use App\Entities\Entity;

 class Profiles extends Entity
 {
     protected $table = 'users';
     protected $fillable = ['user_name','name', 'last_name','email', 'password','branches_active_id'];

     protected $section = 'profiles';

 }


