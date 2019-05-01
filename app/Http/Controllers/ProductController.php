<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

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

    $categories = $products->get();
    $brand = $products->get();
    $products = $products->get();
    $imageLink = $query->get();


    return view('product', [
    'products' => $products,
    'imageLink' => $imageLink,
    'categories' => $categories,
    'ingredients' => $ingredients,
    'brand' => $brand
]);

}
}
