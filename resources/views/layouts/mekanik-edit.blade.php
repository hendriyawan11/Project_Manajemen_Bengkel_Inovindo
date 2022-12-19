@extends('layouts.panel')
@section('title' , 'Update Mekanik')
@section('content')

<div class="col-6 ">
        <form action="/mekanik/{{ $mekanik->id }}" method="POST">
            @method('PUT')
            @csrf
                <div class="card-body">
                  <div class="form-group">
                    <label for="mekanik">Nama</label>
                    <input type="text" class="form-control" name="nama" id="mekanik" placeholder="Masukkan Nama Mekanik"  value="{{ $mekanik->nama }}" required>
                  </div>
                  <div class="form-group">
                    <label for="jenis_kelamin">Jenis Kelamin</label>
                    <select name="jenis_kelamin" class="form-control" id="jenis_kelamin" value="{{ $mekanik->jenis_kelamin }}" required>
                      <option value="">Pilih Satu</option>
                      <option value="Laki-Laki">Laki-Laki</option>
                      <option value="Perempuan">Perempuan</option>
                    </select>
                  </div>
                    <div class="form-group">
                    <label for="level">Level</label>
                    <select name="level" class="form-control" id="level" value="{{ $mekanik->level }}" required>
                      <option value="">-</option>
                      <option value="PMT I">PMT I</option>
                      <option value="PMT II">PMT II</option>
                      <option value="PMT III">PMT III</option>
                    </select>
                  </div>
                  <button type="submit" class="btn btn-success">Update</button>
                </div>
              </form>
</div>
  @endsection


