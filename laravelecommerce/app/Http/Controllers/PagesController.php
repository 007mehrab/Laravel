<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{

	public function index(){
		return view('frontend.pages.index');
	}

	public function shop(){
		return view('frontend.pages.shop.shop');
	}

	public function contact(){
		return view('frontend.pages.contact');
	}

	public function about(){
		return view('frontend.pages.about');
	}




	public function myaccount(){
		return view('frontend.pages.myinfo.myaccount');
	}


	public function checkout(){
		return view('frontend.pages.myinfo.checkout');
	}


	public function login(){
		return view('frontend.pages.myinfo.login');
	}

	public function register(){
		return view('frontend.pages.myinfo.register');
	}




	public function cart(){
		return view('frontend.pages.product_pages.cart');
	}

	public function compare(){
		return view('frontend.pages.product_pages.compare');
	}


	public function wishlist(){
		return view('frontend.pages.product_pages.wishlist');
	}



}
