<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\{Product, User};
use DB;
use Validator;


class ExploreController extends Controller
{
    public function index(Request $request)
    {
        $query = DB::table('products');

         $categories = $query->get();
         $brand = $query->get();

         if(($request->query('category') == 'all') || !($request->category)){
           $query->get();
           // $query->where('productTypeSimple', '=', $request->category);
         } else {
           // $query->get();
            $query->where('productTypeSimple', '=', $request->category);
         }

        // Search based on brand
        // if ($request->has('brand')) {
            //if (($request->brand)) {


                if (($request->query('brand')  == 'all') || !($request->brand)){
                  // $query->where('brand', '=', $request->brand);
                    $query->get();
          }
          else  {
            // $query->get();
            $query->where('brand', '=', $request->brand);
          }


        //}
        // else {
        //   $query->get();
        // }


        if ($request->query('search') != '') {
           $query->where('productName', 'LIKE', '%' .$request->query('search'). '%');
       } else {
         $query->get();
       }




        // $categories = $query->get();
        // $brand = $query->get();
        $products = $query->simplePaginate(18);
        // $ingredients = $query->get();
        $imageLink = $query->get();

        return view('explore', [
        'products' => $products,
        'imageLink' => $imageLink,
        'categories' => $categories,
        'brand' => $brand,
        'search' => $request->query('search')
    ]);
    }

    public function product($productId = null) {

      $query = DB::table('products')->where('productId',$productId);

      if($productId) {
        $products = DB::table('products')
        ->where('productId',$productId)
        ->first();
        }else{
          $products=[];
        }

      $categories = $query->get();
      $brand = $query->get();
      $products = $query->get();
      $imageLink = $query->get();
      $ingredients = $query->get();

      return view('product', [
      'products' => $products,
      'imageLink' => $imageLink,
      'categories' => $categories,
      'ingredients' => $ingredients,
      'brand' => $brand
  ]);

  }

// public function __construct()
// {
//   $this->middleware(['auth']);
// }
public function productindex(Request $request)
{
  $products = $request->user()->favouriteProducts()->get();
  return view('fav', compact('products'));
}
public function show(Product $product)
{
  return view('show', compact('product'));
}
  // public function store(Request $request, Product $product)
  // {
  //   $request->user()->favouriteProducts()->syncWithoutDetaching([$product->id]);
  //   return back();
  // }

  public function store(Request $request)
  {
    $request->user()->favouriteProducts()->syncWithoutDetaching([$request->product]);
    return back();
  }


  public function destroy(Request $request, Product $product)
  {
    $request->user()->favouriteProducts()->detach($product);
    return back();
  }

}
