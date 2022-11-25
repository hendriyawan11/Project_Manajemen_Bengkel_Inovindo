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
            <a href="/input_mekanik" class="btn btn-primary" role="button" data-bs-toggle="button">Input Data Mekanik</a>
            <table class="table table-bordered">
              <thead>
                <tr>
                  <th>ID Mekanik</th>
                  <th>Nama Mekanik</th>
                  <th>Jenis Kelamin</th>
                  <th>Level</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td>123</td>
                  <td>Udin</td>
                  <td>Lakilaki</td>
                  <td>PMT-3</td>
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
