@extends('layouts.panel_cust')
@section('content')
@section('title', 'Dashboard Konsumen')


    <a href="/update_profile" class="btn btn-primary" role="button" data-bs-toggle="button">Update Profile</a>
    <div class="container py-5 h-100">
      <div class="row d-flex justify-content-center align-items-center h-100">
        <div class="col-12 col-md-8 col-lg-6 col-xl-5">
          <div class="card shadow-2-strong" style="border-radius: 1rem;">
            <div class="card-body p-5 text-center">
  
              <h3 class="mb-5">Antrian</h3>
  
              <div class="form-outline mb-4">
                <input class="form-control form-control-lg" type="text" placeholder=".form-control-lg" aria-label=".form-control-lg example">
                
              </div>
  
             
            </div>
          </div>
        </div>
      </div>
    </div>
@endsection