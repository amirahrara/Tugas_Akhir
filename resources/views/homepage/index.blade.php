@extends('layouts.main')

@section('content')
<style>

    /* .hero__slider {
    display: flex;
    overflow: hidden;
    position: relative;
    width: 100%;
    }

.hero__items {
    flex: 1 0 100%;
    opacity: 0;
    transition: opacity 1s ease-in-out;
}



.hero__slider:hover .hero__items {
    animation-play-state: paused;
}

.hero__items:nth-child(1) {
    animation: slide 6s infinite;
}

.hero__items:nth-child(2) {
    animation: slide 6s infinite 3s;
}

    @keyframes slide {
        0% {
            opacity: 0;
            transform: translateX(100%);
        }
        15% {
            opacity: 1;
            transform: translateX(0%);
        }
        60% {
            opacity: 1;
            transform: translateX(0%);
        }
        75% {
            opacity: 0;
            transform: translateX(-50%);
        }
        100% {
            opacity: 0;
            transform: translateX(-100%);
        }
    } */

    /* .hero__text {
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        text-align: center;
        color: white;
    } */

    /* tambahkan gaya lainnya sesuai kebutuhan Anda */

.custom-cursor {
  width: 100vw; /* Lebar sama dengan viewport */
  height: 100vh; /* Tinggi sama dengan viewport */
  position: fixed;
  top: 0;
  left: 0;
  pointer-events: none;
  z-index: 9999;
  background: linear-gradient(rgba(0, 0, 0, 0.7), rgba(0, 0, 0, 0.7));
}

.carousel-caption {
    position: absolute;
    top: 55%;
    left: 50%;
    transform: translate(-50%, -50%);
    width: 80%;
    text-align: center;
}



    

    @media only screen and(max-width: 768px) {
    .carousel-caption{
        position: absolute;
    top: 45%;
    left: 50%;
    transform: translate(-50%, -50%);
    width: 80%;
    text-align: center;
    }
    .carousel-caption h6.caption-title {
        font-size: 15px;

    }

    .carousel-caption h2.caption-main-title {
        font-size: 28px;
    }

    .carousel-caption p.caption-text {
        font-size: 13px;
    }

}

@media only screen and (max-width: 576px) {
    .carousel-caption h6.caption-title {
        font-size: 13px;
    }

    .carousel-caption h2.caption-main-title {
        font-size: 8px;
    }

    .carousel-caption p.caption-text {
        font-size: 10px;
    }

}

</style>
    <!-- Header Section End -->

    <!-- Hero Section Begin -->

    {{-- Slider Not Playing --}}
    <div id="carouselExampleNotPlaying" class="carousel slide" style="display: none;">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="/assets/img/pamflet-4.png" class="d-block w-100" alt="...">
                <div class="carousel-caption d-block text-center text-md-block">
                    <h6 class="caption-title" style="font-size: 25px; color: white;">Toko Fashion Wanita</h6>
                    <h2 class="caption-main-title" style="font-size: 55px; color: white;">BUTIK ORLIN COLLECTION</h2>
                    <p class="caption-text" style="font-size: 20px; color: white;">A specialist label creating luxury essentials. Ethically crafted with an unwavering
                        commitment to exceptional quality.</p>
                    <a href="{{route('produk')}}" class="primary-btn">Shop now <span class="arrow_right"></span></a>
                </div>
            </div>
            <div class="carousel-item">
                <img src="/assets/img/hero/hero-2.jpg" class="d-block w-100" alt="...">
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleNotPlaying" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleNotPlaying" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>

    {{-- Slider Playing --}}
    <div id="carouselExampleAutoplaying" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="/assets/img/pamflet-4.png" class="d-block w-100" alt="...">
                <div class="carousel-caption d-block text-center text-md-block">
                    <h6 class="caption-title" style="font-size: 25px; color: white;">Toko Fashion Wanita</h6>
                    <h2 class="caption-main-title" style="font-size: 55px; color: white;">BUTIK ORLIN COLLECTION</h2>
                    <p class="caption-text" style="font-size: 20px; color: white;">A specialist label creating luxury essentials. Ethically crafted with an unwavering
                        commitment to exceptional quality.</p>
                    <a href="{{route('produk')}}" class="primary-btn">Shop now <span class="arrow_right"></span></a>
                </div>
            </div>
            <div class="carousel-item">
                <img src="/assets/img/hero/hero-2.jpg" class="d-block w-100" alt="...">
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>

    {{-- <section class="hero">
        <div class="hero__slider owl-carousel">
            <div class="hero__items set-bg " data-setbg="/assets/img/pamflet-4.png" >
                <div class="container">
                    <div class="row">
                        <div class="col-xl-8 col-lg-9 col-md-8">
                            <div class="hero__text">
                                <h6 style="font-size: 25px; color: white;">Toko Fashion Wanita</h6>
                                <h2 style="font-size: 55px; color: white;">BUTIK ORLIN COLLECTION</h2>
                                <p style="font-size: 20px; color: white;">A specialist label creating luxury essentials. Ethically crafted with an unwavering
                                    commitment to exceptional quality.</p>
                                <a href="#" class="primary-btn">Shop now <span class="arrow_right"></span></a>
                                <div class="hero__social">
                                    <a href="#"><i class="fa fa-facebook"></i></a>
                                    <a href="#"><i class="fa fa-twitter"></i></a>
                                    <a href="#"><i class="fa fa-pinterest"></i></a>
                                    <a href="#"><i class="fa fa-instagram"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="hero__items set-bg" data-setbg="/assets/img/hero/hero-2.jpg">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-5 col-lg-7 col-md-8">
                            <div class="hero__text">
                                <h6>Summer Collection</h6>
                                <h2>Fall - Winter Collections 2030</h2>
                                <p>A specialist label creating luxury essentials. Ethically crafted with an unwavering
                                    commitment to exceptional quality.</p>
                                <a href="#" class="primary-btn">Shop now <span class="arrow_right"></span></a>
                                <div class="hero__social">
                                    <a href="#"><i class="fa fa-facebook"></i></a>
                                    <a href="#"><i class="fa fa-twitter"></i></a>
                                    <a href="#"><i class="fa fa-pinterest"></i></a>
                                    <a href="#"><i class="fa fa-instagram"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>

    </section> --}}
    <!-- Hero Section End -->



    <!-- Product Section Begin -->
    <section class="product spad">
        <div class="container" style="margin-top:30px">
            <div class="row">
                <div class="col-lg-12">
                    <ul class="filter__controls">
                        <li class="active" data-filter="*">Best Sellers</li>
                        <li data-filter=".new-arrivals">New Arrivals</li>
                        <li data-filter=".hot-sales">Hot Sales</li>
                    </ul>
                </div>
            </div>
            <div class="row product__filter">
                @foreach ($data as $d)
                <div class="col-lg-3 col-md-6 col-sm-6 col-md-6 col-sm-6 mix hot-sales">
                    <div class="product__item sale">
                        <a href="/{{ $d->id }}/detail-barang">
                            <div class="product__item__pic set-bg" data-setbg="/storage/{{$d->cover_produk}}">
                                @if (!empty($d->sale))
                                <span class="label">Sale</span>
                                @endif
                            </div>
                        </a>
                        <div class="product__item__text">
                            <h6>{{$d->nama_produk}}</h6>
                            <a href="#" class="add-cart">+ Tambah ke keranjang</a>
                            <div class="rating">
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                            </div>
                            <h5 class="dynamic-font">Rp. {{$d->sale}}</h5>
                        </div>
                    </div>
                </div>
                @endforeach

                @foreach ($item as $item )

                <div class="col-lg-3 col-md-6 col-sm-6 col-md-6 col-sm-6 mix new-arrivals">
                    <div class="product__item ">
                        <a href="/{{ $item->id }}/detail-barang">
                            <div class="product__item__pic set-bg" data-setbg="/storage/{{$item->cover_produk}}">
                                {{-- @if (!empty($item->sale))
                                <span class="label">Sale</span>
                                @endif --}}
                            </div>
                        </a>
                        <div class="product__item__text">
                            <h6 class="dynamic-font">{{$item->nama_produk}}</h6>
                            <a href="#" class="add-cart">+ Tambah ke keranjang</a>
                            <div class="rating">
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                            </div>
                            <h5 class="dynamic-font">Rp. {{$item->harga}}</h5>
                        </div>
                    </div>
                </div>
                @endforeach
                {{-- <div class="col-lg-3 col-md-6 col-sm-6 col-md-6 col-sm-6 mix new-arrivals">
                    <div class="product__item">
                        <div class="product__item__pic set-bg" data-setbg="/assets/img/product/product-5.jpg">

                        </div>
                        <div class="product__item__text">
                            <h6>Lether Backpack</h6>
                            <a href="#" class="add-cart">+ Tambah ke keranjang</a>
                            <div class="rating">
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star-o"></i>
                            </div>
                            <h5>$31.37</h5>

                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6 col-md-6 col-sm-6 mix hot-sales">
                    <div class="product__item sale">
                        <div class="product__item__pic set-bg" data-setbg="/assets/img/product/product-6.jpg">
                            <span class="label">Sale</span>

                        </div>
                        <div class="product__item__text">
                            <h6>Ankle Boots</h6>
                            <a href="#" class="add-cart">+ Tambah ke keranjang</a>
                            <div class="rating">
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star-o"></i>
                            </div>
                            <h5>$98.49</h5>

                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6 col-md-6 col-sm-6 mix new-arrivals">
                    <div class="product__item">
                        <div class="product__item__pic set-bg" data-setbg="/assets/img/product/product-7.jpg">

                        </div>
                        <div class="product__item__text">
                            <h6>T-shirt Contrast Pocket</h6>
                            <a href="#" class="add-cart">+ Tambah ke keranjang</a>
                            <div class="rating">
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star-o"></i>
                                <i class="fa fa-star-o"></i>
                            </div>
                            <h5>$49.66</h5>

                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6 col-md-6 col-sm-6 mix hot-sales">
                    <div class="product__item">
                        <div class="product__item__pic set-bg" data-setbg="/assets/img/product/product-8.jpg">

                        </div>
                        <div class="product__item__text">
                            <h6>Basic Flowing Scarf</h6>
                            <a href="#" class="add-cart">+ Tambah ke keranjang</a>
                            <div class="rating">
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                            </div>
                            <h5>$26.28</h5>

                        </div>
                    </div>
                </div> --}}
            </div>
        </div>
    </section>
    <!-- Product Section End -->




    <!-- Search Begin -->
    <div class="search-model">
        <div class="h-100 d-flex align-items-center justify-content-center">
            <div class="search-close-switch">+</div>
            <form class="search-model-form">
                <input type="text" id="search-input" placeholder="Search here.....">
            </form>
        </div>
    </div>

    @endsection

    {{-- <script type="text/javascript">
        function bigImg(x) {
            x.style.fontSize = '30px';
            x.style.height = "64px";
            x.style.width = "60%";
        }

        function normalImg(x) {
            x.style.fontSize = '17px';
            x.style.height = "32px";
            x.style.width = "60%";
        }

        document.addEventListener("DOMContentLoaded", function() {
            document.addEventListener("mousemove", function() {
                const dynamicFontElements = document.querySelectorAll('.dynamic-font');

                dynamicFontElements.forEach(element => {
                    element.setAttribute('onmouseenter', 'bigImg(this)');
                    element.setAttribute('onmouseleave', 'normalImg(this)');
                });

            });
        }); --}}

        {{-- </script> --}}

{{-- <script>
    var owl = $('.hero__slider');
    owl.owlCarousel({
            items: 1,
            loop: true,
            autoplay: true,
            autoplayTimeout: 1500,
            autoplayHoverPause: true,
            nav: true,
            navText: ["<i class='fa fa-chevron-left'></i>", "<i class='fa fa-chevron-right'></i>"]

        });



</script> --}}
