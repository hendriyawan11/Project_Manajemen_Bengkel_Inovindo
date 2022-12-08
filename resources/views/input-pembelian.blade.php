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
                                <label for="deskripsi">Deskripsi</label>
                                <input type="text" class="form-control" name="deskripsi"  id="editor" placeholder="Masukkan Deskripsi">
                              </div>
                              <div class="form-group">
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
                            </div>
                          </form>
              {{-- <div class="row mb-3">
                <label for="image" class="col-sm-2 col-form-label">Gambar</label>
              <div class="col-sm-10">
                <input type="file" class="form-control" id="inputGroupFile04" aria-describedby="inputGroupFileAddon04" aria-label="Upload">
              </div>
              </div> --}}
              <button type="submit" class="btn btn-primary">Save</button>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->
    </section>
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


