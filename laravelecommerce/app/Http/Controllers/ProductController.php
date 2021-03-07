<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use App\Brand;

class ProductController extends Controller
{
    public function index(){

    	$products = Product::all();
		return view('Backend.pages.product.index', compact('products'));
	}

}
