<?php

namespace App\Http\Controllers;


use App\Http\Controllers\Controller;

class HomeController extends Controller
{

    public function index()
    {
        $this->data['config'] = (object)['sectionName'=>'Home'];

        return view('home')->with($this->data);
    }

}
