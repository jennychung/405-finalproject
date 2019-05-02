<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;

class LogInController extends Controller
{
  public function index() {
    return view('/login');
  }

  public function login() {
  $loginWasSuccessful = Auth::attempt([
    'email' => request('email'),
    'password' => request('password')
  ]);

  if ($loginWasSuccessful){
    return redirect('/day');
  } else {
    return Redirect::back()->withErrors(['msg', 'The Message']);
    //return redirect('/login');

  }
}

public function logout() {
  Auth::logout();
  return redirect('/login');
}
}
