<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;

class ProductController extends Controller
{
    public function shop(){

    	$products = Product::all();
		return view('frontend.pages.shop.shop', compact('products'));
	}
}
