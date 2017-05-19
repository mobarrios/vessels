<?php
namespace App\Entities\Configs;


use App\Entities\Entity;

class Provincias extends Entity
{

    protected $table = 'provincias';

    protected $fillable = ['name'];

    protected $section = 'provincias';



}
