@extends('layouts.panel')
@section('title' , 'Input Pembelian Barang')
@section('content')

<div class="col-6 ">
        <form action="pembelian" method="post">
            @csrf
                <div class="card-body">
                  <div class="form-group">
                    <label for="nama">Nama Barang</label>
                    <input type="text" class="form-control" name="nama"id="nama" placeholder="Masukkan Nama Barang" required>
                  </div>
                  <div class="form-group">
                    <label for="merk">Merk</label>
                    <input type="text" class="form-control" name="merk"id="merk" placeholder="Masukkan Nama Barang" required>
                  </div>
                  <div class="form-group">
                    <label for="">Deskripsi</label>
                              <textarea name="deskripsi" id="mySummernote"></textarea>
                  </div>
                      <div class="form-group">
                    <label for="tanggal">Tanggal</label>
                    <input type="date" id="tanggal" class="form-control" name="tanggal" placeholder="masukkan tanggal" required>
                  </div>
                  <div class="form-group">
                    <label for="harga">Harga</label>
                    <input type="text" class="form-control" name="harga" id="harga" placeholder=" Masukkan Harga" required>
                  </div>
                  <div class="form-group">
                    <label for="jumlah">Jumlah</label>
                    <input type="text" class="form-control" name="jumlah" id="jumlah" placeholder=" Masukkan jumlah Barang" required>
                  </div>
                 <div class="mb-3">
                <label for="formFileMultiple" class="form-label">Multiple files input example</label>
                <input class="form-control" type="file" id="foto" multiple>
                </div>
                  <button type="submit" class="btn btn-success">Save</button>
                </div>
            </div>
            @endsection

