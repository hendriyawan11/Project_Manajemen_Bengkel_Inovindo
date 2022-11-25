
@extends('layouts.panel')

@section('content')
 <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Laporan Transaksi</h1>
            <select class="form-select" aria-label="Default select example">
              <option selected>Open this select menu</option>
              <option value="1">One</option>
              <option value="2">Two</option>
              <option value="3">Three</option>
            </select>
            <select class="form-select" aria-label="Default select example">
              <option selected>Open this select menu</option>
              <option value="1">One</option>
              <option value="2">Two</option>
              <option value="3">Three</option>
            </select>
            <a class="btn btn-primary" href="#" role="button">Link</a>
            <button class="btn btn-primary" type="submit">Button</button>
            <div class="col-12">
              <div class="bg-secondary rounded h-100 p-4">
                  <h6 class="mb-4">Responsive Table</h6>
                  <div class="table-responsive">
                      <table class="table">
                          <thead>
                              <tr>
                                  <th scope="col">#</th>
                                  <th scope="col">First Name</th>
                                  <th scope="col">Last Name</th>
                                  <th scope="col">Email</th>
                                  <th scope="col">Country</th>
                                  <th scope="col">ZIP</th>
                                  <th scope="col">Status</th>
                              </tr>
                          </thead>
                          <tbody>
                              <tr>
                                  <th scope="row">1</th>
                                  <td>John</td>
                                  <td>Doe</td>
                                  <td>jhon@email.com</td>
                                  <td>USA</td>
                                  <td>123</td>
                                  <td>Member</td>
                              </tr>
                              <tr>
                                  <th scope="row">2</th>
                                  <td>Mark</td>
                                  <td>Otto</td>
                                  <td>mark@email.com</td>
                                  <td>UK</td>
                                  <td>456</td>
                                  <td>Member</td>
                              </tr>
                              <tr>
                                  <th scope="row">3</th>
                                  <td>Jacob</td>
                                  <td>Thornton</td>
                                  <td>jacob@email.com</td>
                                  <td>AU</td>
                                  <td>789</td>
                                  <td>Member</td>
                              </tr>
                          </tbody>
                      </table>
                  </div>
              </div>
          </div>
      </div>
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