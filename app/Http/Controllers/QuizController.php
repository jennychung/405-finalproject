<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\User;
use Hash;
use Auth;

class QuizController extends Controller
{
  public function index() {
    return view('quiz');
  }

public function signup(){
  $user = new User();
    $user->email = request('email'); // instead of passing request through parameters
    $user->password = Hash::make(request('password')); //bcrypt
    $user->save();

    Auth::login($user);
    return redirect('/');
}
}
