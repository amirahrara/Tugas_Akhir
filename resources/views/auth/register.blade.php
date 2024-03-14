@extends('layouts.main')

@section('content')

<style>
    .card-body{
        background-color: rgba(116, 80, 36, 0.832);
        border-radius: 15px;
        color: rgb(255, 255, 255);
        max-width: 600px;
    }
</style>
<section class="login spad">
    <div class="container">
        <div class="login__form">
            <div class="d-flex justify-content-center align-items-center h-100" >
                <div class="card-body">
                <h4 class="fw-bold mb-4 text-center" style="color: white">Masuk</h4>
               <form class="row g-3" action="/register" method="post">
                   @csrf
                   <div class="col-12">
                       <label class="form-label form-dark" for="email">Email</label>
                   <input type="email" name="email" id="email" class="form-control @error ('email') is-invalid @enderror" placeholder="contoh: email@gmail.com" autofocus required value="{{ old('email') }}"/>
                   @error('email')
                            <div class="invalid-feedback">
                            {{ $message }}
                           </div>
                           @enderror
                   </div>
                   <div class="col-md-6">
                    <label class="form-label form-dark" for="nama_depan">Nama Depan</label>
                    <input type="nama_depan" name="nama_depan" id="nama_depan" class="form-control @error ('nama_depan') is-invalid @enderror" placeholder="Nama Depan" autofocus required value="{{ old('nama_depan') }}"/>
                    @error('nama_depan')
                         <div class="invalid-feedback">
                         {{ $message }}
                        </div>
                        @enderror
                    </div>
                    <div class="col-md-6">
                        <label class="form-label form-dark" for="nama_belakang">Nama Belakang</label>
                        <input type="nama_belakang" name="nama_belakang" id="nama_belakang" class="form-control @error ('nama_belakang') is-invalid @enderror" placeholder="Nama Belakang" autofocus required value="{{ old('nama_belakang') }}"/>
                        @error('nama_belakang')
                             <div class="invalid-feedback">
                             {{ $message }}
                            </div>
                            @enderror
                    </div>
                    <div class="col-12">
                        <label class="form-label form-dark" for="password">Kata Sandi</label>
                        <div class="input-group">
                            <input type="password" name="password" id="password" data-toogle="password" class="form-control" required/>
                            <div class="input-group-append">
                                <span class="input-group-text" onclick="password_show_hide();">
                                    <i class="fas fa-eye-slash d-none" id="hide_eye"></i>
                                    <i class="fas fa-eye" id="show_eye"></i>
                                </span>
                            </div>
                        </div>
                    </div>
                    <div class="col-12">
                        <label class="form-label form-dark" for="no_telp">No.Telepon</label>
                        <input type="no_telp" name="no_telp" id="no_telp" class="form-control @error ('no_telp') is-invalid @enderror" placeholder="contoh: 082246299001" autofocus required value="{{ old('no_telp') }}"/>
                        @error('no_telp')
                             <div class="invalid-feedback">
                             {{ $message }}
                            </div>
                            @enderror
                    </div>
                    <div class="col-12">
                        <label class="form-label form-dark" for="tgl_lahir">Tanggal Lahir</label>
                        <input type="tgl_lahir" name="tgl_lahir" id="tgl_lahir" class="form-control @error ('tgl_lahir') is-invalid @enderror" placeholder="contoh: hh/bb/tttt" autofocus required value="{{ old('tgl_lahir') }}"/>
                        @error('tgl_lahir')
                             <div class="invalid-feedback">
                             {{ $message }}
                            </div>
                            @enderror
                    </div>
                   {{-- <p class="col-12"><a href="#" class="text-white-50">Lupa kata sandi? / </a><a href="{{route('register')}}" class="text-white-50">Buat akun</a></p> --}}


                   <center>
                       <button type="submit" class="btn btn-light">Daftar</button>
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
<script src="/js/hidenpsw.js"></script>
{{-- <script>
    // prevent deleting +62
    document.getElementById("no_telp").addEventListener("keydown", function(event) {
        // allow numbers and backspace
        if ((event.keyCode >= 48 && event.keyCode <= 57) || event.keyCode === 8) {
            // allow backspace if not deleting +62
            if (event.keyCode === 8 && this.value.length === 3) {
                event.preventDefault();
            }
        } else {
            event.preventDefault();
        }
    });
</script> --}}
@endsection
