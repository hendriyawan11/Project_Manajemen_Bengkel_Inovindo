<?php

namespace App\Http\Controllers;

use view;
use Illuminate\Http\Request;

class Konsumen extends Controller
{
    public function index(){
        return view('konsumen.index');
      }


}
