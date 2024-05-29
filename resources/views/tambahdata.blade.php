@extends('layouts.main')

@section('content')
<style>
    .tambah__alamat h4{
        margin-bottom: 20px;
    }
    .tambah_alamat_user{
        margin-bottom: 6px;
    }
    .tambah_alamat_user label{
        color: #111111;
        margin-bottom: 12px;
    }
    .tambah_alamat_user input{
        height: 50px;
        width: 100%;
        border: 1px solid #000000;
        font-size: 15px;
        color: #b7b7b7;
        padding-left: 20px;
        margin-bottom: 10px;
        border-radius: 10px;

    }
</style>
<div class="col-lg-6">
    {{-- <div class="card-body"> --}}
        <div class="tambah__alamat">
            <div class="card" style="padding: 20px; border-radius:15px; border-color: rgb(114, 108, 108);">
            <h4><b>Tambah Produk</b></h4>
            <div class="tambah_alamat_user">
                    <form class="row g-3" action="/tambah-data" method="post" enctype="multipart/form-data">
                        @csrf
                            <div class=" col-12">
                                <label class="form-label form-dark" for="nama_produk">Nama Produk</label>
                                <input type="nama_produk" name="nama_produk" id="nama_produk" class="form-control @error ('nama_produk') is-invalid @enderror" style="color: black" required value="{{old('nama_produk')}}"/>
                                @error('nama_produk')
                                <div class="invalid-feedback">
                                {{ $message }}
                                </div>
                                @enderror
                                </div>
                            <div class="col-12">
                                <label class="form-label form-dark" for="caption">Caption</label>
                                <input type="caption" name="caption" id="caption" class="form-control @error ('caption') is-invalid @enderror" style="color: black" required value="{{old('caption')}}"/>
                                @error('caption')
                                <div class="invalid-feedback">
                                {{ $message }}
                                </div>
                                @enderror
                            </div>

                            <div class="col-12">
                                <label class="form-label form-dark" for="cover_produk">Cover Produk</label>
                                <input type="file" name="cover_produk" id="cover_produk" class="form-control @error ('cover_produk') is-invalid @enderror" style="color: black" required value="{{old('cover_produk')}}"/>
                                @error('cover_produk')
                                <div class="invalid-feedback">
                                {{ $message }}
                                </div>
                                @enderror
                            </div>
                            <div class="col-12">
                                <label class="form-label form-dark" for="gambar1">Gambar 1</label>
                                <input type="file" name="gambar1" id="gambar1" class="form-control @error ('gambar1') is-invalid @enderror" style="color: black" required value="{{old('gambar1')}}"/>
                                @error('gambar1')
                                <div class="invalid-feedback">
                                {{ $message }}
                                </div>
                                @enderror
                            </div>
                            <div class="col-12">
                                <label class="form-label form-dark" for="gambar2">Gambar 2</label>
                                <input type="file" name="gambar2" id="gambar2" class="form-control @error ('gambar2') is-invalid @enderror" style="color: black" required value="{{old ('gambar2')}}"/>
                                @error('gambar2')
                                <div class="invalid-feedback">
                                {{ $message }}
                                </div>
                                @enderror
                            </div>
                            <div class="col-12">
                                <label class="form-label form-dark" for="gambar3">Gambar 3</label>
                                <input type="file" name="gambar3" id="gambar3" class="form-control @error ('gambar3') is-invalid @enderror" style="color: black" required value="{{old ('gambar3')}}"/>
                                @error('gambar3')
                                <div class="invalid-feedback">
                                {{ $message }}
                                </div>
                                @enderror
                            </div>
                            <div class="col-12">
                                <label class="form-label form-dark" for="harga">Harga</label>
                                <input type="harga" name="harga" id="harga" class="form-control @error ('harga') is-invalid @enderror" style="color: black" required value="{{old ('harga')}}"/>
                                @error('harga')
                                <div class="invalid-feedback">
                                {{ $message }}
                                </div>
                                @enderror
                            </div>
                            <div class="col-12">
                                <label class="form-label form-dark" for="sale">Sale</label>
                                <input type="sale" name="sale" id="sale" class="form-control" style="color: black" value="{{old ('sale')}}"/>

                            </div><div class="col-12">
                                <label class="form-label form-dark" for="deskripsi">Deskripsi</label>
                                {{-- <input type="deskripsi" name="deskripsi" id="deskripsi" class="form-control @error ('deskripsi') is-invalid @enderror" style="color: black" required value="{{old ('deskripsi')}}"/> --}}
                                <textarea class="form-control @error ('deskripsi') is-invalid @enderror" name="deskripsi" rows="3" id="deskripsi" style="color: black" required value="{{old ('deskripsi')}}"></textarea>
                                @error('deskripsi')
                                <div class="invalid-feedback">
                                {{ $message }}
                                </div>
                                @enderror
                            </div>
                            <div class="col-12">
                                <label class="form-label form-dark" for="spesifikasi">Spesifikasi</label>
                                <textarea class="form-control @error ('spesifikasi') is-invalid @enderror" name="spesifikasi" rows="3" id="spesifikasi" style="color: black" required value="{{old ('spesifikasi')}}"></textarea>
                                {{-- <input type="spesifikasi" name="spesifikasi" id="spesifikasi" class="form-control @error ('spesifikasi') is-invalid @enderror" style="color: black" required value="{{old ('spesifikasi')}}"/> --}}
                                @error('spesifikasi')
                                <div class="invalid-feedback">
                                {{ $message }}
                                </div>
                                @enderror
                            </div>
                            <div class="col-12">
                                <label class="form-label form-dark" for="ukuran">ukuran</label>
                                <input type="ukuran" name="ukuran" id="ukuran" class="form-control @error ('ukuran') is-invalid @enderror" style="color: black" required value="{{old ('ukuran')}}"/>
                                @error('ukuran')
                                <div class="invalid-feedback">
                                {{ $message }}
                                </div>
                                @enderror
                            </div>
                            <div class="col-12">
                                <label class="form-label form-dark" for="warna">Warna</label>
                                <input type="warna" name="warna" id="warna" class="form-control @error ('warna') is-invalid @enderror" style="color: black" required value="{{old ('warna')}}"/>
                                @error('warna')
                                <div class="invalid-feedback">
                                {{ $message }}
                                </div>
                                @enderror
                            </div>
                            <div class="col-12">
                                <label class="form-label form-dark" for="jumlah_produk">Jumlah Produk</label>
                                <input type="jumlah_produk" name="jumlah_produk" id="jumlah_produk" class="form-control @error ('jumlah_produk') is-invalid @enderror" style="color: black" required value="{{old ('jumlah_produk')}}"/>
                                @error('jumlah_produk')
                                <div class="invalid-feedback">
                                {{ $message }}
                                </div>
                                @enderror
                            </div>
                            <div class="col-12">
                                <label for="kategori" class="form-label">Kategori</label>
                                <select class="form-select" type="kategori" name="kategori_id" id="kategori" required>
                                    <option>PILIH</option>
                                    @foreach ($kategori as $item)
                                    <option value="{{$item->id}}">{{$item->kategori}}</option>
                                    @endforeach


                                  </select>

                            </div>
                            <div class="col-md-4">
                                <button type="submit" class="site-btn">Simpan</button>
                            </div>
                    </form>
                </div>
            </div>

        </div>
        @include('sweetalert::alert')
        Lorem ipsum dolor sit amet consectetur adipisicing elit. Vel porro voluptas a officiis nobis qui voluptates accusantium. Sit nostrum rem commodi doloremque placeat ipsum expedita, dolorem quo fugiat assumenda esse? Quidem ad praesentium amet tempora eaque odit beatae reprehenderit maxime. Omnis officia explicabo excepturi eligendi delectus voluptates tenetur quidem labore?

        </div>
</div>

@endsection
