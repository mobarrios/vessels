<?php
 namespace App\Entities\Moto;


 use App\Entities\Entity;

 class ProvidersPayments extends Entity
 {

     protected $table = 'providers_payments';

     protected $fillable = ['name'];

     protected $section = 'providersPayments';


 }


