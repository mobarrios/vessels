<?php
 namespace App\Entities\Moto;


 use App\Entities\Entity;

 class Clients extends Entity
 {

     protected $table = 'clients';

     protected $fillable = ['name','last_name','email','dni','sexo','marital_status','dob','nacionality','phone1','phone2','address', 'city','location','province','obs','prospecto'];


     public function Budgets()
     {
         return $this->hasMany(Budgets::class);
     }

     public function TechnicalServices()
     {
         return $this->hasMany(TechnicalServices::class);
     }

     public function Sales()
     {
         return $this->hasMany(Sales::class)->with('Items');
     }

     public function SalesItems(){
         return $this->hasManyThrough(SalesItems::class,Sales::class)->with('items');
     }

     public function getFullNameAttribute(){
         return $this->attributes['last_name'].' '.$this->attributes['name'];
     }

     public function getLocalidadAttribute(){
         return ucfirst(strtolower($this->attributes['city'])).', '.ucfirst(strtolower($this->attributes['location'])).', '.ucfirst(strtolower($this->attributes['province']));
     }
 }


