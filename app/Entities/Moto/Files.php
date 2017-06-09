<?php
namespace App\Entities\Moto;


use App\Entities\Configs\Brancheables;
use App\Entities\Configs\Vouchers;
use App\Entities\Entity;

class Files extends Entity
{

    protected $table = 'files';

    protected $fillable = ['estado','ubicacion', 'form_01', 'form_01_file', 'form_12', 'form_12_file', 'form_59', 'form_59_file', 'dni_photocopy', 'dni_photocopy_file', 'proof_of_cuil', 'proof_of_cuil_file','sales_id'];

    protected $section = 'files';


    public function sales(){
        return $this->belongsTo(Sales::getClass());
    }

    public function form12(){
        return $this->hasOne(Form12::getClass());
    }

    public function form59(){
        return $this->hasOne(Form59::getClass());
    }

    public function getFacturaAttribute(){
        return $this->sales->with('vouchers')->first()->vouchers->where('tipo',"Factura");
    }

    public function getRemitoAttribute(){
        return $this->sales->with('vouchers')->first()->vouchers->where('tipo',"Remito");
    }

    public function getEstadoAttribute(){
        return config('models.files.estado')[$this->attributes['estado']];
    }

    public function getUbicacionAttribute(){
        return config('models.files.ubicacion')[$this->attributes['ubicacion']];
    }

    public function getEstadoValueAttribute(){
        return $this->attributes['estado'];
    }

    public function getUbicacionValueAttribute(){
        return $this->attributes['ubicacion'];
    }
    

}


