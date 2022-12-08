<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;


class AuthController extends Controller
{
   public function proseslogin()
   {
    return view('user.login');
   }

   public function authentication (Request $request)
   {
    // dd($request->all());
    if(Auth::attempt(['email' => $request->email, 'password' => $request->password])){
        return redirect(route('user.dashboard'));
    }
    return back()->with('Error','Username dan password salah!');

   }
}