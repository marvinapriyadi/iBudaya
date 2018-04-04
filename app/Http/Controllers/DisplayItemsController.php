<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;

class DisplayItemsController extends Controller
{
    //
    public function DisplayItems(){
        $products = Product::all();
        
        return view('display',compact('products'));
    }
}
