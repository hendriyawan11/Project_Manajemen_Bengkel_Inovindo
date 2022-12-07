@extends('layouts.panel')
@section('title' , 'Input Servis')
@section('content')
<div class="col-6 ">
        <form action="servis" method="post">
            @csrf
                <div class="card-body">
                  <div class="form-group">
                    <label for="servis">Jenis Servis</label>
                    <input type="text" class="form-control" name="jenis_servis" id="servis" placeholder="Jenis Servis">
                  </div>
                  <div class="form-group">
                    <label for="harga">Harga</label>
                    <input type="text" class="form-control" name="harga" id="harga" placeholder="Harga">
                  </div>
                  <button type="submit" class="btn btn-success">Save</button>
                </div>
              </form>
</div>
  @endsection


