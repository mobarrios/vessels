<?php
namespace App\Entities\Configs;


use App\Entities\Entity;

class Municipios extends Entity
{

    protected $table = 'municipios';

    protected $fillable = ['name','provincia_id'];

    protected $section = 'municipios';

    public function Provincias()
    {
        return $this->belongsTo(Provincias::class, 'provincia_id');
    }

}
