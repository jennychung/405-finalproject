<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProfileController extends Controller
{
  public function index() {
    return view('skin');
  }

  public function fileUpload(Request $request) {
    $this->validate($request, [
        'input_img' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
    ]);

    if ($request->hasFile('input_img')) {
        $image = $request->file('input_img');
        $name = time().'.'.$image->getClientOriginalExtension();
        $destinationPath = public_path('/images');
        $image->move($destinationPath, $name);
        $this->save();

        return redirect()->with('success','Image Upload successfully');
    }
}
}
