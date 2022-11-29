@extends('layouts.panel')
@section('title' , 'Input Pembelian')
@section('content')
 <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-md-12">
            <h1 class="m-0">Input Pembelian</h1>
            <div class="row mb-3">
                <label for="harga beli" class="col-sm-2 col-form-label">ID Barang</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" placeholder="Harga Beli">
                </div>
              </div>
              <div class="row mb-3">
                <label for="merk" class="col-sm-2 col-form-label">Harga Barang</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" placeholder="Merk">
                </div>
              </div>
              <div class="row mb-3">
                <label for="merk" class="col-sm-2 col-form-label">Tgl.Beli</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" placeholder="Merk">
                </div>
              </div>
              <div class="row mb-3">
                <label for="merk" class="col-sm-2 col-form-label">Jumlah</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" placeholder="Merk">
                </div>
              </div>
              <div class="row mb-3">
                <label for="merk" class="col-sm-2 col-form-label">Harga</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" placeholder="Merk">
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
                <div class="col-sm-10">
                    <textarea class="form-control" rows="5" id="comment" name="text"></textarea>
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
    <!-- /.content-header -->

    <!-- Main content -->
   

              <!-- /.card-header -->
              <div class="card-body pt-0">
                <!--The calendar -->
                <div id="calendar" style="width: 100%"></div>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </section>
          <!-- right col -->
        </div>
        <!-- /.row (main row) -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
=======
>>>>>>> dd113545025993daf53828109a67fbb160d44711
  @endsection


