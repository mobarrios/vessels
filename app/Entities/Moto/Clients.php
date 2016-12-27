<?php
 namespace App\Entities\Moto;


 use App\Entities\Entity;

 class Clients extends Entity
 {

     protected $table = 'clients';

     protected $fillable = ['name','last_name','email','dni','sexo','marital_status','dob','nacionality','phone1','phone2','address', 'city','location','province','obs'];


     public function Budgets()
     {
         return $this->hasMany(Budgets::class);
     }

     public function getFullNameAttribute(){
         return $this->attributes['name'].' '.$this->attributes['last_name'];
     }

     public function getLocalidadAttribute(){
         return ucfirst(strtolower($this->attributes['city'])).', '.ucfirst(strtolower($this->attributes['location'])).', '.ucfirst(strtolower($this->attributes['province']));
     }
 }


