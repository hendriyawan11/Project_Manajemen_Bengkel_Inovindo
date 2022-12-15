@extends('layouts.panel')
@section('title' , 'Input Pembelian')
@section('content')

            <div class="col-6 ">
                    <form action="pembelian" method="post">
                        @csrf
                            <div class="card-body">
                              <div class="form-group">
                                <label for="merk">Merk</label>
                                <input type="text" class="form-control" name="merk" id="pembelian" placeholder="Masukkan Merk">
                              </div>
                              <div class="form-group">
                                <label for="">Deskripsi</label>
                                          <textarea name="deskripsi" id="mySummernote"></textarea>
                              </div>                              <div class="form-group">
                                <label for="harga">Harga</label>
                                <input type="text" class="form-control" name="harga" id="harga" placeholder=" Masukkan Harga">
                              </div>
                              <div class="form-group">
                                <label for="jumlah">Jumlah</label>
                                <input type="text" class="form-control" name="jumlah" id="jumlah" placeholder=" Masukkan Jumlah">
                              </div>
                              <div class="form-group">
                                <label for="foto">Foto</label>
                                <input type="file" class="form-control" name="foto" id="foto" aria-describedby="inputGroupFileAddon04" aria-label="Upload" placeholder=" Masukkan Foto">
                              </div>
                              <button type="submit" class="btn btn-success">Save</button>
                            </div>
                          </div>
                         
            
       

  @endsection


