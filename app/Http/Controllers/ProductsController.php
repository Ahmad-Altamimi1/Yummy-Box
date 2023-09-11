<?php

namespace App\Http\Controllers;

use App\Models\products;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use SebastianBergmann\CodeCoverage\Report\Xml\Project;

class ProductsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products = Products::all();
        
        return view('Admin_Dashboard.products', ['products' => $products]);
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $product=  new products;
        $product->name= $request->name;
        $product->breif= $request->breif;
        $product->description2= $request->description2;
        $product->description3= $request->description3;
        $product->location= $request->location;
        $product->period= $request->period;
        $product->time= $request->time;
        $product->total= $request->total;
        $product->image= $request->image;
        $product->save();
    
    
        return redirect()->route('Admin_Dashboard.Projects');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\products  $products
     * @return \Illuminate\Http\Response
     */
    public function show(products $products)
    {
        $productList= products::all();
        return view('Admin_Dashboard.Projects',['products'=>$productList]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\products  $products
     * @return \Illuminate\Http\Response
     */
    public function edit( $id)
    {
        //
        $product = products::find($id);
        return view('Admin_Dashboard.Projects_Update')->with('product', $product);
  
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\products  $products
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,  $id)
    {
        //
        $product = products::find($id);

        $product->name= $request->name;
        $product->breif= $request->breif;
        $product->description2= $request->description2;
        $product->description3= $request->description3;
        $product->location= $request->location;
        $product->period= $request->period;
        $product->time= $request->time;
        $product->total= $request->total;
        $product->image= $request->image;
        $product->save();

        return redirect()->route('Admin_Dashboard.Projects')->with('success', 'student data dashboard successfully ');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\products  $products
     * @return \Illuminate\Http\Response
     */
    public function destroy( $id)
    {
        $products= Products::find($id);
        $products->delete();
        return redirect()->route('Admin_Dashboard.Projects')->with('success','student data dashboard successfully ');
    } 
}