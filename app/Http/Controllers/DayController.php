<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DayController extends Controller
{

  public function index(Request $request)
  {
  	$products = $request->user()->favouriteProducts()->get();

  	return view('day', compact('products'));

  }
}
