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
public function create(){
        $servis = Mechanic::select('id', 'nama')->get();
        return view ('input-mekanik',['mekanik'=>$mekanik]);
        }
        public function store (Request $request){
            $servis = Mechanic::create($request->all());
            return redirect('/mekanik');
    }
}
