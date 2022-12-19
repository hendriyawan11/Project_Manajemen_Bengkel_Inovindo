<?php

namespace App\Http\Controllers;

use App\Models\Mechanic;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class MechanicController extends Controller
{
        public function mekanik(){
                $mekanik = Mechanic::all();
                return view('mekanik',['itemList' => $mekanik]);
        }
            public function create(){
            $mekanik = Mechanic::select('id', 'nama')->get();
            return view ('input-mekanik',['mekanik'=>$mekanik]);
        
            }
            public function store (Request $request){
                $mekanik = Mechanic::create([
                    'nama' => request('nama'),
                    'jenis_kelamin' => request('jenis_kelamin'),
                    'level' => request('level'),
                ]);
                if ($mekanik){
                    Session::flash('status','success');
                    Session::flash('message','berhasil menambahkan data baru !');
                }
                return redirect('/mekanik');
        }
            public function edit (Request $request, $id){
                $mekanik = Mechanic::findOrFail($id);
                return view('layouts.mekanik-edit',['mekanik'=>$mekanik]);
        }
            public function update (Request $request, $id){
          $mekanik =Mechanic::findOrFail($id);
          $mekanik -> update($request->all());
           if ($mekanik){
                    Session::flash('status','success');
                    Session::flash('message','berhasil update data !');
                }
          return redirect('/mekanik');
        }
        
        public function destroy($id)
            {
                $mekanik = Mechanic::find($id);
                $mekanik->delete();
                return response()->json(['status' => 'Mekanik Berhasil di hapus!']);
            }
}




