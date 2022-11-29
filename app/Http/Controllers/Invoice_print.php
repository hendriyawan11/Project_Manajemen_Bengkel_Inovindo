<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Invoice_print extends Controller
{
    public function input_print(){
        return view('input_print');
}
}