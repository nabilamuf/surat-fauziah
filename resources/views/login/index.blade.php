@extends('layouts.main')

@section('container')

<div class="row justify-content-center">
    <div class="col-lg-6">

      @if(session()->has('sukses'))
      <div class="alert alert-success alert-dismissible fade show" role="alert">
        {{ session('sukses') }}
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
      </div>
    @endif

        <main class="form-signin w-100 m-auto">
            
            <h1 class="h3 mb-3 fw-normal text-center judul">LOGIN SIMPEG FAUZIAH</h1>

            <form>
              <img class="mb-4" id="logo" src="image/logo_fauziah.png" alt="" width="100" height="100">
              <div class="form-floating">
                <input type="email" class="form-control" id="floatingInput" placeholder="name@example.com">
                <label for="floatingInput">Email address</label>
              </div>
              <div class="form-floating">
                <input type="password" class="form-control" id="floatingPassword" placeholder="Password">
                <label for="floatingPassword">Password</label>
              </div>
          
              <button class="btn pink tulisan-putih w-100 py-2" type="submit" >LOGIN</button>
             
            </form>
            <small class="d-block text-center mt-3" >Belum Punya Akun? <a href="/register"> Registrasi Akun Staff </a></small> <br>

            <p class="mt-5 mb-3 text-body-secondary right">&copy; nmuf-2023</p>
          </main> 
    </div>
</div>


    
@endsection