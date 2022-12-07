@extends('layouts.panel')
@section('title' , 'Input Mekanik')
@section('content')
<div class="col-6 ">
        <form action="" method="">
                <div class="card-body">
                  <div class="form-group">
                    <label for="exampleInputEmail1">Nama</label>
                    <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Enter Nama">
                  </div>
                  <div class="form-group">
                  <label for="jenis_kelamin">Jenis Kelamin</label>
                  <select name="jenis_kelamin" class="form-control" id="jenis_kelamin" required>
                    <option value="">Pilih Satu</option>
                    <option value="L">Laki-Laki</option>
                    <option value="P">Perempuan</option>
                  </select>
                </div>
                  <div class="form-group">
                  <label for="level">Level</label>
                  <select name="level" class="form-control" id="level" required>
                    <option value="">-</option>
                    <option value="L">PMT I</option>
                    <option value="P">PMT II</option>
                    <option value="P">PMT III</option>
                  </select>
                </div>
                  <button type="submit" class="btn btn-success">Save</button>
                </div>
              </form>
</div>
  @endsection
