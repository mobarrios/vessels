<?php

namespace App\Http\Controllers;


use App\Http\Controllers\Controller;
use App\Http\Repositories\Configs\UsersRepo;
use Illuminate\Routing\Route;


class HomeController extends Controller
{
    public function index(){

        return view('home');
    }
    
    
}
