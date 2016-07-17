<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Foodys;
class COntrollerFoody extends Controller
{
    public function getFoody(){
        $foodys=  Foodys::all();
        return view('admin.foody.list');
    }
}
