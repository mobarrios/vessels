<?php
namespace App\Entities\Moto;

use \App\Entities\Entity;

class PayMethods extends Entity{

    protected $table = 'pay_methods';

    protected $fillable = ['name','method'];



    
}
