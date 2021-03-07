<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;

class ShopController extends Controller
{
    public function shop(){

    	$products = Product::all();
		return view('frontend.pages.shop.shop', compact('products'));
	}

	 public function single_shop_details(){

		return view('frontend.pages.shop.single_product_details');
	}
}
