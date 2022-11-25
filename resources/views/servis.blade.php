@extends('layouts.panel')

@section('content')
 <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Data Mekanik</h1>
            <form class="d-flex">
              <input class="form-control me-2" type="text" placeholder="Search">
              <button class="btn btn-primary" type="button">Search</button>
            </form>
            <a href="/input_servis" class="btn btn-primary" role="button" data-bs-toggle="button">Input Data Service</a>
            <table class="table table-bordered">
              <thead>
                <tr>
                  <th>ID Service</th>
                  <th>Tanggal</th>
                  <th>Jenis Service</th>
                  <th>Foto</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td>123</td>
                  <td>25 Nov 2022</td>
                  <td>Operasi Muka</td>
                  <td>
                    <div class="text-center">
                      <img src="lte/dist/img/user2-160x160.jpg" alt="TBSM">
                    </div>
                  </td>
                </tr>
              </tbody>
            </table>
          </div>
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
  @endsection
