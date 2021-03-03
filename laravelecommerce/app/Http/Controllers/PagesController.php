<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{

	public function index(){
		return view('pages.index');
	}
	public function contact(){
		return view('pages.contact');
	}

	public function about(){
		return view('pages.about');
	}

	public function blog(){
		return view('pages.blog');
	}




	public function myaccount(){
		return view('pages.myinfo.myaccount');
	}


	public function checkout(){
		return view('pages.myinfo.checkout');
	}


	public function login(){
		return view('pages.myinfo.login');
	}

	public function register(){
		return view('pages.myinfo.register');
	}




	public function cart(){
		return view('pages.product_pages.cart');
	}

	public function compare(){
		return view('pages.product_pages.compare');
	}


	public function wishlist(){
		return view('pages.product_pages.wishlist');
	}



}
