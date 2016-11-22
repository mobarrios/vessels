<?php
 namespace App\Entities\Moto;


 use App\Entities\Entity;

 class Clients extends Entity
 {

     protected $table = 'clients';

     protected $fillable = ['name','last_name','email','dni','sexo','marital_status','dob','nacionality','phone1','phone2','address', 'city','location','province','obs'];


 }


