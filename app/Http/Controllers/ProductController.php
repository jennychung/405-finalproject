<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Validator;

class ProductController extends Controller
{
  public function index($productId = null) {

    $query = DB::table('products');
    $imageLink = $query->get();

    if($productId) {
      $products = DB::table('products') //pulling from genres table
      ->where('productId',$productId)
      ->first();
      }else{
        $products=[];
      }

    $categories = $query->get();
    $brand = $query->get();
    $products = $query->get();
    $imageLink = $query->get();


    return view('product', [
    'products' => $products,
    'imageLink' => $imageLink,
    'categories' => $categories,
    'ingredients' => $ingredients,
    'brand' => $brand
]);

}

public function create()
{
  $products = DB::table('products'); //taking from table named albums and putting it in a variable
  $product = $products->get(); //storing albumquery from table into a new variable we're calling albums

  return view('explore.create', [ //takes general template and puts it in the main spot
    'products' => $products //accessing playlists in controller
    // 'productType' => $category
  ]);
}

public function store(Request $request)
{
// validate name
//getting input:
$input = $request->all();
$validation = Validator::make($input, [
  // 'productId' =>'required',
  'name'=>'required|unique:products, name',
  'category'=>'required',
  'brand'=>'required',
  'ingredient'=>'required',
  'pH'=>'numeric',
  'imageLink'=>'required'
]);

// if validation fails, redirect back to form with error messages.
if ($validation->fails()){
  return redirect('/explore/new')
  ->withInput() //can also print out errors with input.
  ->withErrors($validation); //prints out errors compared with validation.
}
else {
  //return redirect('/explore'); //test
}
// otherwise, insert playlist into the database
DB::table('products')->insert([
  'brand' => $request->brand,
  'productName' => $request->name,
  'productType' => $request->category,
  'productTypeSimple' => $request->category,
  'ingredients' => $request->ingredient,
  'volume' => $request->volume,
  'pH' => $request->ph,
  'directLink' => $request->directLink,
  'imageLink' => $request->imageLink,
]);

return redirect('/explore');
}
}
