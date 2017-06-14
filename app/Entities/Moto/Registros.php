<?php
namespace App\Entities\Moto;


use App\Entities\Configs\Brancheables;
use App\Entities\Configs\Localidades;
use App\Entities\Entity;

class Registros extends Entity
{

    protected $table = 'registros';
    protected $fillable = ['localidades_id','name','alta_patente_importe','larga_distancia_importe','address','phone'];
    protected $section = 'registros';

    public function Localidades()
    {
        return $this->belongsTo(Localidades::class);
    }

}


