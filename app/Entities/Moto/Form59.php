<?php
namespace App\Entities\Moto;


use App\Entities\Configs\Brancheables;
use App\Entities\Configs\Vouchers;
use App\Entities\Entity;
use Symfony\Component\DomCrawler\Form;

class Form59 extends Entity
{

    protected $table = 'form_59';

    protected $fillable = ['cod_inscripcion','dominio1','tramite1','solicitud_tipo1','n_control1','dominio2','tramite2','solicitud_tipo2','n_control2','dominio3','tramite3','solicitud_tipo3','n_control3','dominio4','tramite4','solicitud_tipo4','n_control4','dominio5','tramite5','solicitud_tipo5','n_control5','observaciones','files_id','observaciones','forms_id'];


    protected $section = 'form59';


    public function files(){
        return $this->belongsTo(Files::getClass());
    }

    public function Forms(){
        return $this->hasOne(Forms::getClass());
    }

}


