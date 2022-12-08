@extends('layouts.panel')
@section('title' , 'Update Servis')
@section('content')

<div class="col-6 ">
        <form action="/servis/{{ $servis->id }}" method="POST">
            @method('PUT')
            @csrf
                <div class="card-body">
                  <div class="form-group">
                    <label for="servis">Jenis Servis</label>
                    <input type="text" class="form-control" name="jenis_servis" id="servis" placeholder="Masukkan Jenis Servis"  value="{{ $servis->jenis_servis }}" required>
                  </div>
                  <div class="form-group">
                    <label for="deskripsi">Deskripsi</label>
                    <input type="text" class="form-control" name="deskripsi" id="deskripsi" placeholder="Masukkan Deskripsi" value="{{ $servis->deskripsi }}">
                  </div>
                  <div class="form-group">
                    <label for="harga">Harga</label>
                    <input type="text" class="form-control" name="harga" id="harga" placeholder=" Masukkan Harga"  value="{{ $servis->harga }}" required>
                  </div>
                  <button type="submit" class="btn btn-success">Update</button>
                </div>
              </form>
</div>
  @endsection


