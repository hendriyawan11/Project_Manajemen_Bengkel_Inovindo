@extends('layouts.panel')
@section('title' , 'Input Servis')
@section('content')
            <div class="row mb-3">
                <label for="harga beli" class="col-sm-2 col-form-label">Harga Beli</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" placeholder="Harga Beli">
                </div>
              </div>
              <div class="row mb-3">
                <label for="merk" class="col-sm-2 col-form-label">Merk</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" placeholder="Merk">
                </div>
              </div>
              <div class="row mb-3">
                <label for="deskripsi" class="col-sm-2 col-form-label">Deskripsi</label>
                <div id="editor">
                    <a> ini text editor </a>
                </div>
              </div>
              <div class="row mb-3">
                <label for="image" class="col-sm-2 col-form-label">Gambar</label>
              <div class="col-sm-10">
                <input type="file" class="form-control" id="inputGroupFile04" aria-describedby="inputGroupFileAddon04" aria-label="Upload">
              </div>
              </div>
              <button type="submit" class="btn btn-primary">Save</button>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>  
  </div>
  <script src="https://cdn.ckeditor.com/ckeditor5/35.3.2/classic/ckeditor.js"></script>
  <script>
    ClassicEditor
        .create( document.querySelector( '#editor' ) )
        .catch( error => {
            console.error( error );
        } );
  </script>
  @endsection


