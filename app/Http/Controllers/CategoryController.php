<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Http\Requests\StoreCategoryRequest;
use App\Http\Requests\UpdateCategoryRequest;
use Illuminate\Support\Facades\DB;
use App\Models\products;
use Illuminate\Support\Carbon;
class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categories = DB::table('categories')->get();
        $products = DB::table('products')->get();
        $users = DB::table('users')->get();
        $volanters= DB::table('paypals')->get();
        // dd($categories);
        return view('pages/index',compact('categories','products', 'users', 'volanters'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function find($id)
    {
      
        $products = products::findOrFail($id);
        $startDate = Carbon::parse($products->created_at);
        $endDate = Carbon::now();
        $diffInMinutes = $endDate->diffInMinutes($startDate);
        $diffInHours = $endDate->diffInHours($startDate);
        $diffInDays = $endDate->diffInDays($startDate);
        $diffInMonths = $endDate->diffInMonths($startDate);
        
// dd($currentDateTime);
      return  view("pages.single", compact('products', 'diffInMinutes','diffInHours','diffInDays','diffInMonths'));
        // ['products' => $products]
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreCategoryRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreCategoryRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function show(Category $category)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function edit(Category $category)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateCategoryRequest  $request
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateCategoryRequest $request, Category $category)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function destroy(Category $category)
    {
        //
    }
}
