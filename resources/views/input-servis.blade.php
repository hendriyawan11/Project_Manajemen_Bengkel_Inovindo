@extends('layouts.panel')
@section('title' , 'Input Servis')
@section('content')
<div class="col-6 ">
        <form action="servis" method="post">
            @csrf
                <div class="card-body">
                  <div class="form-group">
                    <label for="servis">Jenis Servis</label>
                    <input type="text" class="form-control" name="jenis_servis"id="servis" placeholder="Masukkan Jenis Servis" required>
                  </div>
                  <div class="form-group">
                    <label for="deskripsi">Deskripsi</label>
                    <input type="text" class="form-control" name="deskripsi"  id="editor" placeholder="Masukkan Deskripsi">
                  </div>
                  <div class="form-group">
                    <label for="harga">Harga</label>
                    <input type="text" class="form-control" name="harga" id="harga" placeholder=" Masukkan Harga" required>
                  </div>
                  <button type="submit" class="btn btn-success">Save</button>
                </div>
              </form>
              <script src="https://cdn.ckeditor.com/ckeditor5/35.3.2/classic/ckeditor.js"></script>
              <script>
                ClassicEditor
                    .create( document.querySelector( '#editor' ) )
                    .catch( error => {
                        console.error( error );
                    } );
            </script>
            
            </div>
  @endsection


