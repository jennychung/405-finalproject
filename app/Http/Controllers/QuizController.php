<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\User;
use Hash;
use Auth;
use Validator;

class QuizController extends Controller
{
  public function index() {
    return view('quiz');
  }

public function signup(){

    $input['email'] = request('email');
    $rules = array('email' => 'unique:users,email');
    $validator = Validator::make($input, $rules);

    if ($validator->fails()) {
        return redirect('/quiz')
        ->withInput()
        ->withErrors($validator);
    }

    $user = new User();
    $user->email = request('email'); // instead of passing request through parameters
    $user->password = Hash::make(request('password')); //bcrypt
    $user->save();

    Auth::login($user);
    return redirect('/day');
}
}
