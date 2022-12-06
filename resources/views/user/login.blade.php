@extends('layouts.panel-log')
 
<section class="vh-100" style="background-color: #508bfc;">
    <div class="container py-5 h-100">
      <div class="row d-flex justify-content-center align-items-center h-100">
        <div class="col-12 col-md-8 col-lg-6 col-xl-5">
          <div class="card shadow-2-strong" style="border-radius: 1rem;">

            <div class="card-body p-5 text-center">
              <form method="POST" action="{{route('loginauth')}}" role="form" class="">
                @csrf
                <h3 class="mb-5">Masuk</h3>
    
                <div class="form-outline mb-4">
                  <label class="form-label" for="typeEmailX-2">Email</label>
                  <input type="email" name="email" id="typeEmailX-2" class="form-control form-control-lg" />
                </div> 
    
                <div class="form-outline mb-4">
                  <label class="form-label" for="typePasswordX-2">Password</label>
                  <input type="password" name="password" id="typePasswordX-2" class="form-control form-control-lg" />
                </div>
    
                <!-- Checkbox -->
                <div class="form-check d-flex justify-content-start mb-4">
                  <input class="form-check-input" type="checkbox" value="" id="form1Example3" />
                  <label class="form-check-label" for="form1Example3"> Lupa password </label>
                </div>
    
                <button class="btn btn-primary form-control" role="button" data-bs-toggle="button" type="submit">Login</button>
                {{-- <div class="text-center">
                  <p>Not a member? <a href="/register">Daftar</a></p>
                </div> --}}
    
                <hr class="my-4">
              </form>  
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>