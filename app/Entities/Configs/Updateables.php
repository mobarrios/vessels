<?php
namespace App\Entities\Configs;

use App\Entities\Entity;
use Illuminate\Database\Eloquent\Model;
use App\Entities\Tecnica\Orders;
use App\Entities\Configs\User;

 class Updateables extends Entity
 {


     protected $fillable    = ['updateable_type','updateable_id', 'column', 'data_old', 'users_id'];

     protected $section = 'updateables';


     public function updateables(){

         return $this->morphTo();
     }

    public function Orders()
    {
        return $this->belongsTo(Orders::class, 'updateable_id');
    }

    public function User()
    {
        return $this->belongsTo(User::class, 'users_id');
    }

 }


