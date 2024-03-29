@extends('layouts.main')

@section('content')

<style>
    .card-body{
        background-color: rgba(116, 80, 36, 0.832);
        border-radius: 15px;
        color: rgb(255, 255, 255);
        max-width: 450px;
    }
</style>
<section class="login spad">
    <div class="container">
        <div class="login__form">
            @if (session()->has('berhasil'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                {{ session('berhasil') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
              </div>
            @endif

            @if (session()->has('gagal'))
                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                    {{ session('gagal') }}
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            @endif
            <div class="d-flex justify-content-center align-items-center h-100" >
                <div class="card-body">
                <h4 class="fw-bold mb-4 text-center" style="color: white">Lupa Password</h4>
               <form action="/login" method="post">
                   @csrf
                   <div class="form-group">
                       <label class="form-label form-dark" for="email">Email</label>
                   <input type="email" name="email" id="email" class="form-control @error ('email') is-invalid @enderror" placeholder="contoh: email@gmail.com" autofocus required value="{{ old('email') }}"/>
                   @error('email')
                            <div class="invalid-feedback">
                            {{ $message }}
                           </div>
                           @enderror
                   </div>

                   <center>
                       <button type="submit" class="btn btn-light">Kirim</button>
                   </center>

                   {{-- <p class="small"><a class="text-black-50" href="/lupaPassword">Lupa
                           Kata Sandi?</a></p> --}}


               </form>

                </div>
            </div>
        </div>
        </div>
    </div>

</section>
@endsection
