<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;

class CategoryController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }



    public function index()
    {
        $categories = Category::all();

        return view('category.index', compact('categories'));
    }





    public function create()
    {
        return view('category.create');
    }




    public function store(Request $request)
    {
        $category = new Category;
        $category->title = $request->get('title');
        $category->user()->associate($request->user());

        $category->save();

        // return 'Success';
        return redirect('categories');
    }
}
