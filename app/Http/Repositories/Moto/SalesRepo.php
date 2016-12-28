<?php
namespace App\Http\Repositories\Moto;

use App\Entities\Moto\Sales;
use App\Http\Repositories\BaseRepo;


class SalesRepo extends BaseRepo
{

    public function getModel()
    {
        return new Sales();
    }

    public function create($data)
    {
        $sales = parent::create($data); // TODO: Change the autogenerated stub


        if (!is_null($data->budgets_id))
        {
            $budgetsItemsRepo = new BudgetsItemsRepo();
            $salesItemsRepo = new SalesItemsRepo();
            $itemsRepo = new ItemsRepo();

            $budgetsItems = $budgetsItemsRepo->getModel()->where('budgets_id', $data->budgets_id)->get();

        

            foreach ($budgetsItems as $budgetIttem) {

                $item = $itemsRepo->asignItem($budgetIttem->models_id, $this->request->branches_confirm_id, $this->request->sales_id);

                $salesItemsRepo->create([
                    'sales_id' => $sales->id,
                    'iteme_id' => $item->items_id,
                    'price_actual' => $item->price_actual,
                ]);
            }

        }


        return $sales;
    }


}