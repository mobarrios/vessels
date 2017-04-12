<?php
 namespace App\Entities\Configs;


 use App\Entities\Entity;

 class Company extends Entity
 {

     protected $table = 'company';

     protected $fillable = ['rs1_razon_social', 'r1_nombre_fantasia','r1_direccion', 'r1_telefono','r1_cuit','r1_condicion_iva','r1_inicio_actividad'];

     protected $section = 'company';

 }


