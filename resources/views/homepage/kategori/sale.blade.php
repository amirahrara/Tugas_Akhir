@extends('layouts.main')

@section('content')

<section class="breadcrumb-option">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="breadcrumb__text">
                    <h4>Produk</h4>
                    <div class="breadcrumb__links">
                        <a href="{{route('index')}}">Beranda</a>
                        <a href="{{route('produk')}}">Produk</a>
                        <span>Sale</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
{{-- <style>
    ul li.active > a{
        color: black;
    }
</style> --}}
<section class="shop spad">
    <div class="container">
        <div class="row">
            <div class="col-lg-3">
                <div class="shop__sidebar">
                    {{-- <div class="shop__sidebar__search">
                        <form action="#">
                            <input type="text" placeholder="Search...">
                            <button type="submit"><span class="icon_search"></span></button>
                        </form>
                    </div> --}}
                    <div class="shop__sidebar__accordion">
                        <div class="accordion" id="accordionExample">
                            <div class="card">
                                <div class="card-heading">
                                    <a data-toggle="collapse" data-target="#collapseOne">Categories</a>
                                </div>
                                <div id="collapseOne" class="collapse show" data-parent="#accordionExample">
                                    <div class="card-body">
                                        <div class="shop__sidebar__categories">
                                            <ul class="nice-scroll">
                                                <li><a href="{{route('sale')}}" style="color: red">Sale </a></li>
                                                <li><a href="{{route('kemeja')}}">Kemeja (20)</a></li>
                                                <li><a href="{{route('outer')}}">Outer (20)</a></li>
                                                <li><a href="{{route('tunik')}}">Tunik (20)</a></li>
                                                <li><a href="{{route('dress')}}">Dress (20)</a></li>
                                                <li><a href="{{route('blouse')}}">Blouse (20)</a></li>
                                                <li><a href="{{route('celana')}}">Celana (20)</a></li>
                                                <li><a href="{{route('rok')}}">Rok (20)</a></li>
                                                {{-- <li><a href="#">Kids (20)</a></li> --}}
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-heading">
                                    <a data-toggle="collapse" data-target="#collapseTwo">Branding</a>
                                </div>
                                <div id="collapseTwo" class="collapse show" data-parent="#accordionExample">
                                    <div class="card-body">
                                        <div class="shop__sidebar__brand">
                                            <ul>
                                                <li><a href="#">Uniqlo</a></li>
                                                <li><a href="#">Zara</a></li>
                                                <li><a href="#">H&M</a></li>
                                                {{-- <li><a href="#">Gucci</a></li> --}}
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-9">
                <div class="shop__product__option">
                    <div class="row">
                        <div class="col-lg-6 col-md-6 col-sm-6">
                            <div class="shop__product__option__left">
                                <p>Tampilkan 1–12 dari 126 produk</p>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-6">
                            <div class="shop__product__option__right">
                                <p>Sortir Harga:</p>
                                <select id="priceSort" onchange="sortProducts()">
                                    <option value="none">Tidak ada</option>
                                    <option value="low-to-high">Rendah ke Tinggi</option>
                                    <option value="high-to-low">Tinggi ke Rendah</option>
                                </select>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row" id="productList">
                    @foreach ($data as $item)

                    <div class="col-lg-4 col-md-6 col-sm-6">
                        <div class="product__item sale">
                            <a href="/{{ $item->id }}/detail-barang">
                                <div class="product__item__pic set-bg" data-setbg="/storage/{{$item->cover_produk}}">
                                <span class="label">Sale</span>
                                </div>
                            </a>

                            <div class="product__item__text">
                                <h6>{{$item->nama_produk}}</h6>
                                <a href="#" class="add-cart">+ Tambah ke keranjang</a>
                                <div class="rating">
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                </div>
                                <h5 class="dynamic-font" id="harga">Rp. {{$item->sale}}</h5>
                                {{-- <div class="product__color__select">
                                    <label for="pc-25">
                                        <input type="radio" id="pc-25">
                                    </label>
                                    <label class="active black" for="pc-26">
                                        <input type="radio" id="pc-26">
                                    </label>
                                    <label class="grey" for="pc-27">
                                        <input type="radio" id="pc-27">
                                    </label>
                                </div> --}}
                            </div>
                        </div>
                    </div>
                    @endforeach
                    </div>

                </div>
                <div class="row">
                    <div class="col-lg-12">
                        <div class="product__pagination">
                            <a class="active" href="#">1</a>
                            <a href="#">2</a>
                            <a href="#">3</a>
                            <span>...</span>
                            <a href="#">20</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<script>

    // Variable buat nyimpen urutan awal produk
    var originalProducts = Array.from(document.querySelectorAll("#productList .col-lg-4"));

    function sortProducts() {
        var selectBox = document.getElementById("priceSort");
        var selectedValue = selectBox.options[selectBox.selectedIndex].value;

        // Nge-copy element produk biar styling gak ilang
        var products = Array.from(document.querySelectorAll("#productList .col-lg-4"));

        if (selectedValue === "none") {
            // Balikin urutan produk ke posisi awal
            products = originalProducts;
        } else {
            products.sort(function(a, b) {
                var priceA = extractPrice(a);
                var priceB = extractPrice(b);

                if (selectedValue === "low-to-high") {
                    return priceA - priceB;
                } else if (selectedValue === "high-to-low") {
                    return priceB - priceA;
                }
            });
        }

        var productList = document.getElementById("productList");
        productList.innerHTML = "";
        products.forEach(function(product) {
            productList.appendChild(product);
        });
    }

    function extractPrice(productElement) {
        var priceText = productElement.querySelector("#harga").innerText;
        return parseInt(priceText.replace(/[^0-9]/g, ''));
    }

    </script>
@endsection
