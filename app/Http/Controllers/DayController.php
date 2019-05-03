<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DayController extends Controller
{

  public function index(Request $request)
  {
  	$products = $request->user()->favoriteProducts()->get();

  	return view('day', compact('products'));

  }
}
