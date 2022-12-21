@extends('layouts.panel')
@section('title' , 'Update Pembelian')
@section('content')

<div class="col-6 ">
        <form action="/pembelian/{{ $pembelian->id }}" method="POST">
            @method('PUT')
            @csrf
                <div class="card-body">
                  <div class="form-group">
                    <label for="merk">Nama barang</label>
                    <input type="text" class="form-control" name="nama" id="shops" placeholder="Masukkan Merk"  value="{{ $pembelian->nama }}" required>
                  </div>

                  <div class="form-group">
                    <label for="merk">Merk</label>
                    <input type="text" class="form-control" name="merk" id="shops" placeholder="Masukkan Merk"  value="{{ $pembelian->merk }}" required>
                  </div>
                  <div class="form-group">
                    <label for="deskripsi">Deskripsi</label>
                     <textarea name="deskripsi" id="mySummernote">{{ $pembelian->deskripsi }}</textarea>
                  </div>
                  <div class="form-group">
                    <label for="deskripsi">Tanggal</label>
                 <input type="date" class="form-control" name="tanggal" id="shops" placeholder=" Masukkan Tanggal"  value="{{ $pembelian->tanggal }}" required>
                  </div>
                  <div class="form-group">
                    <label for="harga">Harga</label>
                    <input type="text" class="form-control" name="harga" id="harga" placeholder=" Masukkan Harga"  value="{{ $pembelian->harga }}" required>
                  </div>
                  <div class="form-group">
                    <label for="jumlah">Jumlah</label>
                    <input type="text" class="form-control" name="jumlah" id="jumlah" placeholder=" Masukkan Jumlah"  value="{{ $pembelian->jumlah }}" required>
                  </div>
                  <button type="submit" class="btn btn-success">Update</button>
                </div>
              </form>
</div>
  @endsection


