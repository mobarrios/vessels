<?php
namespace App\Entities\Moto;


use App\Entities\Configs\Brancheables;
use App\Entities\Configs\Vouchers;
use App\Entities\Entity;

class Form12 extends Entity
{

    protected $table = 'form_12';

    protected $fillable = ['observaciones','files_id','municipio','forms_id'];

    protected $section = 'form12';


    public function files(){
        return $this->belongsTo(Files::getClass(),'files_id');
    }

    public function Forms(){
        return $this->hasOne(Forms::getClass());
    }
}


