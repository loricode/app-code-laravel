<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class ProductController extends Controller
{
    // dump(json_encode(["nombre"=>"angel campillo"])); 

    public function getProducts()
    {
       $result = Product::all();
       return $result;         
    }
}
