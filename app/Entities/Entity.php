<?php
/**
 * Created by PhpStorm.
 * User: mbarrios
 * Date: 3/7/15
 * Time: 12:36
 */

namespace App\Entities;

use App\Entities\Configs\Branches;
use App\Entities\Configs\Logs;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Config;
use Illuminate\Support\Facades\DB;

class Entity extends Model {

    use SoftDeletes;
    protected $dates        = ['deleted_at'];



    public function __construct()
    {
        parent::__construct();

        /*
        if(Auth::check()){
            DB::setDefaultConnection('mysql');
            Config::set('database.connections.mysql.database', Auth::user()->db);
        }
        */
    }

    public static function getClass()
    {
        return get_class(new static);
    }

    public function getSectionAttribute()
    {
        return $this->section;
    }

    //Polymorph
    public function logs()
    {
        return $this->morphMany('App\Entities\Configs\Logs','logeable');
    }

    public function images()
    {
        return $this->morphMany('App\Entities\Configs\Images','imageable');
    }

    public function brancheables()
    {
        return $this->morphMany('App\Entities\Configs\Brancheables','entities');
    }

    public function updateables()
    {
        return $this->morphMany('App\Entities\Configs\Updateables','updateable')->orderBy('created_at','DESC');
    }

    public function additionables()
    {
        return $this->morphMany('App\Entities\Configs\Additionables','additionable');
    }

    public function getBranchesIdAttribute()
    {
        return $this->Brancheables()->lists('branches_id')->toArray();
    }

    public function getBranchesNameAttribute()
    {
        return $this->Brancheables()->with('Branches')->get()->lists('Branches.name','Branches.id');
    }

    public function getTotalAdditionalsAmountAttribute(){
        $amount = 0;

        foreach($this->additionables as $additionable)
            $amount += $additionable->amount;

        return $amount == 0 ? '0' : $amount;
    }

}