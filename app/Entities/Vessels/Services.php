<?php
namespace App\Entities\Vessels;
use App\Entities\Entity;

class Services extends Entity
{

    protected $table = 'services';
    protected $fillable = ['start_date','end_date','origin', 'destiny', 'sap','movilisation_cost','status','vessels_id'];
    protected $section = 'services';


        public function ServicesCargo(){
            return $this->hasMany(ServicesCargo::getClass());
        }

        public function Vessels(){
        	return $this->belongsTo(Vessels::getClass());
        }

        public function DepartureReport(){
          return $this->hasOne(DepartureReport::getClass());
        }

        public function DmReport(){
          return $this->hasMany(DmReport::getClass() );
        }

        public function Operations(){
          return $this->hasMany(Operations::getClass());
        }

        public function ServicesCargoByType(){
            return $this->hasMany(ServicesCargo::getClass())->groupBy('cargo_types_id');
        }

        public function bySectors($cargoTypesId , $services_id = null, $date = null)
        {
          // $data['m'] = \DB::table('services')->where('services.id',$this->attributes['id'])
          // ->join('services_cargo','services_cargo.services_id','=','services.id')
          // ->get();

          // $data['m'] = \DB::table('operations')
          // ->join('services','services.id','=','operations.services_id')
          // ->where('services.id',$this->attributes['id'])
          // ->groupBy('operations.sectors_id')
          // ->get();

          if($date == null){
            $date = date('Y-m-d');
          }

          if($services_id != null)
          {
              $id = $services_id;
          }else{
              $id = $this->attributes['id'];
          }

          $data =  \DB::table('operations')
          ->join('services','services.id','=','operations.services_id')
          ->where('operations.services_id',$id)
          ->where('operations.cargo_types_id',$cargoTypesId)
           ->where('operations.start_date','like',$date.'%')
          //->where('operations.start_date','like','2022-05-15%')
           ->select('cargo_types_id',\DB::raw('SUM(case when operations.operations_types_id in (29,27,26) then operations.quantity else 0 end) as sum'),
          \DB::raw('SUM(case when operations.operations_types_id in (2,3,28) then operations.quantity else 0 end) as res'))
          ->groupBy('operations.cargo_types_id')
          ->get();

        return $data;
        }



        public function getRoAttribute()
        {

          $m = [];
          $data['dr'] =  \DB::table('services')->where('services.id',$this->attributes['id'])
          //->join('departure_report','departure_report.services_id','=','services.id')
          //->join('departure_report_cargo','departure_report_cargo.departure_report_id','=','departure_report.id')
          ->join('services_cargo','services_cargo.services_id','=','services.id')
          //->join('cargo_types','cargo_types.id','=','departure_report_cargo.cargo_types_id')
          ->join('cargo_types','cargo_types.id','=','services_cargo.cargo_types_id')
          ->select('cargo_types.name','cargo_types.id as ctid',\DB::raw('sum(services_cargo.quantity) as q'))
          ->groupBy('services_cargo.cargo_types_id')
          ->get();

          // $data['op'] =  \DB::table('operations')
          // ->join('cargo_types','cargo_types.id','=','operations.cargo_types_id')
          // ->join('operations_types','operations_types.id','=','operations.operations_types_id')
          // ->where('operations.services_id',$this->attributes['id'])
          // ->select('cargo_types.name','cargo_types.id as ctid','operations.operations_types_id as otid','operations_types.name as op_name',\DB::raw('sum(operations.quantity) as q'))
          // ->groupBy('operations.cargo_types_id')
          // ->get();


          foreach($data['dr']  as $d)
          {

            $sum =  \DB::table('operations')
            ->join('cargo_types','cargo_types.id','=','operations.cargo_types_id')
            ->join('operations_types','operations_types.id','=','operations.operations_types_id')
            ->where('operations.services_id',$this->attributes['id'])
            ->where('operations.cargo_types_id',$d->ctid)
            ->whereIn('operations_types.id',[29,27,26])
            ->select('cargo_types.id',\DB::raw('sum(operations.quantity) as q'))
            //->select('cargo_types.name','cargo_types.id as ctid','operations.operations_types_id as otid','operations_types.name as op_name',\DB::raw('sum(operations.quantity) as q'))
            ->groupBy('operations.cargo_types_id')
            ->get();

            $res =  \DB::table('operations')
            ->join('cargo_types','cargo_types.id','=','operations.cargo_types_id')
            ->join('operations_types','operations_types.id','=','operations.operations_types_id')
            ->where('operations.services_id',$this->attributes['id'])
            ->where('operations.cargo_types_id',$d->ctid)
            ->whereIn('operations_types.id',[2,3,28])
            ->select('cargo_types.id',\DB::raw('sum(operations.quantity) as q'))
            //->select('cargo_types.name','cargo_types.id as ctid','operations.operations_types_id as otid','operations_types.name as op_name',\DB::raw('sum(operations.quantity) as q'))
            ->groupBy('operations.cargo_types_id')
            ->get();


            $m[$d->name] = [
              'dr'=>$d->q,
              'sum'=>(!empty($sum))? $sum[0]->q : 0,
              'res'=>(!empty($res))? $res[0]->q : 0,
            ];

            //$result[] = ['name'=> $d->name, 'dr'=> $d->q ,'sum'=>( ($sum >= null) ? $sum->q : 0), 'res'=>(isset($res->q)?$res->q:0)] ;
             //$sum = $t->whereIn('operations_types.id',[29,27,26])->get();
             // $res = $t->whereIn('operations_types.id',[2,3,28]);
            // echo (isset($t->q)? $t->q: 0);
            // $op[$d->name] = (isset($t->q)? $t->q: 0);

          }




//           foreach($dr as $d ){
//
//
//               foreach($op as $o)
//               {
//                   if($d->ctid == $o->ctid )
//                   {
//                     //add
//                     if($o->otid == 29 || $o->otid == 27 || $o->26)
//
//
//                     //remove
//                     if($o->otid == 28 || $o->otid == 3 || $o->2)
//
//                   }
//               }
//
//           }
//
// dd('');

          return $m;


        }

}
