<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\product;

class ProductsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products = product::all();
  
        return view('products.index', compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('products.product_entry');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
            $this->validate($request, [  
            'product_name'=>'required|max:25|min:3',
            'product_code'=>'required|max:8|min:3', 
            'quantity'=>'required',  
            'price'=>'required',
        ]);


        $product = new product;
        $product->product_name = $request->product_name;  
        $product->product_code = $request->product_code;  
        $product->quantity = $request->quantity;  
        $product->price = $request->price;
        $product->save();

        return redirect('/products')->with('massage2','Successfully Inserted');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $product = product::find($id);
        return view('products.edit', compact('product'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
            $this->validate($request, [  
            'product_name'=>'required|max:25|min:3',
            'product_code'=>'required|max:8|min:3', 
            'quantity'=>'required',  
            'price'=>'required',
        ]);

        
        $product = product::find($id);
        $product->product_name = $request->product_name;  
        $product->product_code = $request->product_code;  
        $product->quantity = $request->quantity;  
        $product->price = $request->price;
        $product->save();  

        return redirect('/products');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $products = product::find($id);
        $products->delete();

        return redirect('/products');
    }
}
