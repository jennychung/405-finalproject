<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class ExploreController extends Controller
{
    public function index(Request $request)
    {
        $query = DB::table('products');
        // $products = $query->get();
        // return view('explore');



        // $filters = ['productTypeSimple', 'brand'];
        // foreach ($filters as $filter) {
        //     if (!empty($request->$filter)) {
        //         $query->where($filter, '=', $request->$filter);
        //     }
        // }
        // // Search based on category
         if ($request->has('category')) {
             $query->where('productTypeSimple', '=', $request->category);
         }

        // Search based on brand
        if ($request->has('brand')) {
            $query->where('brand', '=', $request->brand);
        }

        if ($request->query('search')) {
            $query->where('productName', 'LIKE', '%' .$request->query('search'). '%');
        }

        // // Search based on ingredient
        // if ($request->has('ingredient')) {
        //     $query->where('ingredients', $request->query('ingredient'));
        // }



        $categories = $query->get();
        $brand = $query->get();
        $products = $query->simplePaginate(18);
        // $ingredients = $query->get();
        $imageLink = $query->get();

        return view('explore', [
        'products' => $products,
        'imageLink' => $imageLink,
        'categories' => $categories,
        'brand' => $brand,
        // 'ingredient' => $ingredients,
        'search' => $request->query('search')
        // 'categoryFilter' => $request->has('category'),
        // 'brandFilter' => $request->has('brand')
    ]);
    }

    // public function filter() {
  //   return view('explore');
  // }
}
