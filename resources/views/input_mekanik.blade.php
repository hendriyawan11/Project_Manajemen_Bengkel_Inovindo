@extends('layouts.panel')
@section('title' , 'Input Mekanik')
@section('content')
 <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-md-12">
            <h1 class="m-0">Input Data Mekanik</h1>
            <p>
            <div class="row mb-3">
                <label for="harga beli" class="col-sm-2 col-form-label">ID Mekanik</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" placeholder="ID Mekanik">
                </div>
              </div>
              <div class="row mb-3">
                <label for="merk" class="col-sm-2 col-form-label">Nama Mekanik</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" placeholder="Nama Mekanik">
                </div>
              </div>
              <div class="row mb-3">
                <label for="merk" class="col-sm-2 col-form-label">Jenis Kelamin</label>
                <div class="form-check">
                  <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                  <label class="form-check-label" for="flexRadioDefault1">
                    Laki-laki
                  </label>
                </div>
                <div class="form-check">
                  <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2" checked>
                  <label class="form-check-label" for="flexRadioDefault2">
                    Perempuan
                  </label>
                </div>
               </div>
              <div class="row mb-3">
                <label for="merk" class="col-sm-2 col-form-label">Level Mekanik</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" placeholder="Level">
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
</p>
=======
>>>>>>> dd113545025993daf53828109a67fbb160d44711
  @endsection
