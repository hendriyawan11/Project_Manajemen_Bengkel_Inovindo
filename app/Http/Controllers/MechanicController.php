<?php

namespace App\Http\Controllers;

use App\Models\Mechanic;
use Illuminate\Http\Request;

class MechanicController extends Controller
{
   public function mechanic(){
        $mekanik = Mechanic::all();
        return view('mekanik',['itemList' => $mekanik]);
}
}
