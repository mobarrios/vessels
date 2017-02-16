<?php
namespace App\Entities\Moto;


use App\Entities\Configs\Brancheables;
use App\Entities\Entity;

class Models extends Entity
{

    protected $table = 'models';

    protected $fillable = ['name', 'status', 'brands_id', 'patentamiento', 'pack_service', 'min_stock'];


    public function Items()
    {
        return $this->hasMany(Items::class)->with('Colors');
    }

    public function Brands()
    {
        return $this->belongsTo(Brands::class);
    }

    public function Categories()
    {
        return $this->belongsToMany(Categories::class, 'models_categories');
    }

    public function Providers()
    {
        return $this->belongsToMany(Providers::class);
    }

    public function getProvidersByModelsAttribute()
    {
        return $this->Providers->lists("name","id");
    }

    public function getCategoriesIdAttribute()
    {
        return $this->Categories()->lists('categories_id')->toArray();
    }

    public function activeListPrice()
    {
        return $this->hasOne(ModelsListsPricesItems::class)->with('ModelsListsPrices')->orderBy('updated_at', 'DESC');
    }

    public function activeCostPrice()
    {
        return $this->hasOne(PurchasesListsPricesItems::class)->with('PurchasesListsPrices')->orderBy('updated_at', 'DESC');
    }

    public function getBrandName(){
        return $this->belongsTo(Brands::class)->get()->name;
    }

    public function getStatusNameAttribute()
    {
        return config('status.models.' . $this->attributes['status']);
    }

    public function getStockAttribute()
    {
        $id = $this->attributes['id'];
        $q = Items::where('models_id', $id)->count();

        return $q;
    }

    public function getStockByBranchesAttribute()
    {
        $id = $this->attributes['id'];
        $items = Items::where('models_id', $id)->get()->lists('id');
        $q = Brancheables::where('entities_type', 'App\Entities\Moto\Items')->whereIn('entities_id', $items)->get()->groupBy('branches_id');

        return $q;
    }

    public function getStockByColorsAttribute()
    {
        return $this->Items->groupBy('colors_id');
    }

    public function getModelsByColorsAttribute()
    {
        $colores = $this->Items->groupBy('colors_id');

        $data = [];

        foreach ($colores as $id => $color) {
            $data[$id] = [
                        'cantidad' => count($color),
                        'color' => $color[0]['colors']['name']
                      ];

        }

        return $data;
    }

}


