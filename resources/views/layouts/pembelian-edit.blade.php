@extends('layouts.panel')
@section('title' , 'Update Pembelian')
@section('content')

<div class="col-6 ">
        <form action="/pembelian/{{ $shops->id }}" method="POST">
            @method('PUT')
            @csrf
                <div class="card-body">
                  <div class="form-group">
                    <label for="shops">Merk</label>
                    <input type="text" class="form-control" name="merk" id="shops" placeholder="Masukkan Merk"  value="{{ $shops->merk }}" required>
                  </div>
                  <div class="form-group">
                    <label for="deskripsi">Deskripsi</label>
                     <textarea name="deskripsi" id="mySummernote">{{ $shops->deskripsi }}</textarea>
                  </div>
                  <div class="form-group">
                    <label for="harga">Harga</label>
                    <input type="text" class="form-control" name="harga" id="harga" placeholder=" Masukkan Harga"  value="{{ $shops->harga }}" required>
                  </div>
                  <div class="form-group">
                    <label for="jumlah">Jumlah</label>
                    <input type="text" class="form-control" name="jumlah" id="jumlah" placeholder=" Masukkan Jumlah"  value="{{ $shops->jumlah }}" required>
                  </div>
                  <button type="submit" class="btn btn-success">Update</button>
                </div>
              </form>
</div>
  @endsection


