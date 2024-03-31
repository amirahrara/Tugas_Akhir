@extends('layouts.main')

@section('content')
<style>
    /* .hero__items{
    position: absolute;

    display: flex;
    transition: 1s;
}
 .hero__slider .owl-carousel ul{
    position: absolute;
    bottom: 10px;
    left: 0;
    color: #fff;
    width: 100%;
    margin: 0;
    padding: 0;
    display: flex;
    justify-content: center;
} */
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

        /* Background gelap */
        .dark-background {
            width: 100vw;
            height: 100vh;
            position: fixed;
            top: 0;
            left: 0;
            background: linear-gradient(to bottom, rgba(0, 0, 0, 0.7) 0%, rgba(0, 0, 0, 0.7) 33.33%, transparent 33.33%, transparent 66.67%, rgba(0, 0, 0, 0.7) 66.67%, rgba(0, 0, 0, 0.7) 100%); /* Gradient gelap dengan opacity 0.7 di bagian atas dan bawah */
            pointer-events: none; /* Memungkinkan interaksi dengan elemen di bawahnya */
            z-index: 9999; /* Di bawah transparent-box */
            overflow: hidden; /* Sembunyikan overflow agar elemen ::after tidak terlihat di luar batas */
        }


</style>
    <!-- Header Section End -->

    <!-- Hero Section Begin -->
    {{-- <div id="carouselExampleAutoplaying" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img src="/assets/img/pamflet-4.png" class="d-block w-100" alt="...">

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
      </div> --}}
    <section class="hero">
        <div class="hero__slider owl-carousel">
            <div class="hero__items set-bg" data-setbg="/assets/img/pamflet-4.png" >
                <div class="container">
                    <div class="row">
                        <div class="col-xl-8 col-lg-9 col-md-8">
                            <div class="hero__text">
                                <h6 style="font-size: 25px; color: white;">Fashion Wanita</h6>
                                <h2 style="font-size: 55px; color: white;">BUTIK ORLIN COLLECTION</h2>
                                <p style="font-size: 20px; color: white;">A specialist label creating luxury essentials. Ethically crafted with an unwavering
                                    commitment to exceptional quality.</p>
                                <a href="#" class="primary-btn">Shop now <span class="arrow_right"></span></a>

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

                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>

    </section>
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
                <div class="col-lg-3 col-md-6 col-sm-6 col-md-6 col-sm-6 mix new-arrivals">
                    <div class="product__item">
                        <div class="product__item__pic set-bg" data-setbg="/assets/img/product/product-1.jpg">
                            <span class="label">New</span>
                            <ul class="product__hover">
                                <li><a href="#"><img src="/assets/img/icon/heart.png" alt=""></a></li>
                                <li><a href="#"><img src="/assets/img/icon/compare.png" alt="">
                                        <span>Compare</span></a></li>
                                <li><a href="#"><img src="/assets/img/icon/search.png" alt=""></a></li>
                            </ul>
                        </div>
                        <div class="product__item__text">
                            <h6>Piqué Biker Jacket</h6>
                            <a href="#" class="add-cart">+ Add To Cart</a>
                            <div class="rating">
                                <i class="fa fa-star-o"></i>
                                <i class="fa fa-star-o"></i>
                                <i class="fa fa-star-o"></i>
                                <i class="fa fa-star-o"></i>
                                <i class="fa fa-star-o"></i>
                            </div>
                            <h5>$67.24</h5>
                            <div class="product__color__select">
                                <label for="pc-1">
                                    <input type="radio" id="pc-1">
                                </label>
                                <label class="active black" for="pc-2">
                                    <input type="radio" id="pc-2">
                                </label>
                                <label class="grey" for="pc-3">
                                    <input type="radio" id="pc-3">
                                </label>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6 col-md-6 col-sm-6 mix hot-sales">
                    <div class="product__item">
                        <div class="product__item__pic set-bg" data-setbg="/assets/img/product/product-2.jpg">
                            <ul class="product__hover">
                                <li><a href="#"><img src="/assets/img/icon/heart.png" alt=""></a></li>
                                <li><a href="#"><img src="/assets/img/icon/compare.png" alt="">
                                        <span>Compare</span></a></li>
                                <li><a href="#"><img src="/assets/img/icon/search.png" alt=""></a></li>
                            </ul>
                        </div>
                        <div class="product__item__text">
                            <h6>Piqué Biker Jacket</h6>
                            <a href="#" class="add-cart">+ Add To Cart</a>
                            <div class="rating">
                                <i class="fa fa-star-o"></i>
                                <i class="fa fa-star-o"></i>
                                <i class="fa fa-star-o"></i>
                                <i class="fa fa-star-o"></i>
                                <i class="fa fa-star-o"></i>
                            </div>
                            <h5>$67.24</h5>
                            <div class="product__color__select">
                                <label for="pc-4">
                                    <input type="radio" id="pc-4">
                                </label>
                                <label class="active black" for="pc-5">
                                    <input type="radio" id="pc-5">
                                </label>
                                <label class="grey" for="pc-6">
                                    <input type="radio" id="pc-6">
                                </label>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6 col-md-6 col-sm-6 mix new-arrivals">
                    <div class="product__item sale">
                        <div class="product__item__pic set-bg" data-setbg="/assets/img/product/product-3.jpg">
                            <span class="label">Sale</span>
                            <ul class="product__hover">
                                <li><a href="#"><img src="/assets/img/icon/heart.png" alt=""></a></li>
                                <li><a href="#"><img src="/assets/img/icon/compare.png" alt="">
                                        <span>Compare</span></a></li>
                                <li><a href="#"><img src="/assets/img/icon/search.png" alt=""></a></li>
                            </ul>
                        </div>
                        <div class="product__item__text">
                            <h6>Multi-pocket Chest Bag</h6>
                            <a href="#" class="add-cart">+ Add To Cart</a>
                            <div class="rating">
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star-o"></i>
                            </div>
                            <h5>$43.48</h5>
                            <div class="product__color__select">
                                <label for="pc-7">
                                    <input type="radio" id="pc-7">
                                </label>
                                <label class="active black" for="pc-8">
                                    <input type="radio" id="pc-8">
                                </label>
                                <label class="grey" for="pc-9">
                                    <input type="radio" id="pc-9">
                                </label>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6 col-md-6 col-sm-6 mix hot-sales">
                    <div class="product__item">
                        <div class="product__item__pic set-bg" data-setbg="/assets/img/product/product-4.jpg">
                            <ul class="product__hover">
                                <li><a href="#"><img src="/assets/img/icon/heart.png" alt=""></a></li>
                                <li><a href="#"><img src="/assets/img/icon/compare.png" alt="">
                                        <span>Compare</span></a></li>
                                <li><a href="#"><img src="/assets/img/icon/search.png" alt=""></a></li>
                            </ul>
                        </div>
                        <div class="product__item__text">
                            <h6>Diagonal Textured Cap</h6>
                            <a href="#" class="add-cart">+ Add To Cart</a>
                            <div class="rating">
                                <i class="fa fa-star-o"></i>
                                <i class="fa fa-star-o"></i>
                                <i class="fa fa-star-o"></i>
                                <i class="fa fa-star-o"></i>
                                <i class="fa fa-star-o"></i>
                            </div>
                            <h5>$60.9</h5>
                            <div class="product__color__select">
                                <label for="pc-10">
                                    <input type="radio" id="pc-10">
                                </label>
                                <label class="active black" for="pc-11">
                                    <input type="radio" id="pc-11">
                                </label>
                                <label class="grey" for="pc-12">
                                    <input type="radio" id="pc-12">
                                </label>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6 col-md-6 col-sm-6 mix new-arrivals">
                    <div class="product__item">
                        <div class="product__item__pic set-bg" data-setbg="/assets/img/product/product-5.jpg">
                            <ul class="product__hover">
                                <li><a href="#"><img src="/assets/img/icon/heart.png" alt=""></a></li>
                                <li><a href="#"><img src="/assets/img/icon/compare.png" alt="">
                                        <span>Compare</span></a></li>
                                <li><a href="#"><img src="/assets/img/icon/search.png" alt=""></a></li>
                            </ul>
                        </div>
                        <div class="product__item__text">
                            <h6>Lether Backpack</h6>
                            <a href="#" class="add-cart">+ Add To Cart</a>
                            <div class="rating">
                                <i class="fa fa-star-o"></i>
                                <i class="fa fa-star-o"></i>
                                <i class="fa fa-star-o"></i>
                                <i class="fa fa-star-o"></i>
                                <i class="fa fa-star-o"></i>
                            </div>
                            <h5>$31.37</h5>
                            <div class="product__color__select">
                                <label for="pc-13">
                                    <input type="radio" id="pc-13">
                                </label>
                                <label class="active black" for="pc-14">
                                    <input type="radio" id="pc-14">
                                </label>
                                <label class="grey" for="pc-15">
                                    <input type="radio" id="pc-15">
                                </label>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6 col-md-6 col-sm-6 mix hot-sales">
                    <div class="product__item sale">
                        <div class="product__item__pic set-bg" data-setbg="/assets/img/product/product-6.jpg">
                            <span class="label">Sale</span>
                            <ul class="product__hover">
                                <li><a href="#"><img src="/assets/img/icon/heart.png" alt=""></a></li>
                                <li><a href="#"><img src="/assets/img/icon/compare.png" alt="">
                                        <span>Compare</span></a></li>
                                <li><a href="#"><img src="/assets/img/icon/search.png" alt=""></a></li>
                            </ul>
                        </div>
                        <div class="product__item__text">
                            <h6>Ankle Boots</h6>
                            <a href="#" class="add-cart">+ Add To Cart</a>
                            <div class="rating">
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star-o"></i>
                            </div>
                            <h5>$98.49</h5>
                            <div class="product__color__select">
                                <label for="pc-16">
                                    <input type="radio" id="pc-16">
                                </label>
                                <label class="active black" for="pc-17">
                                    <input type="radio" id="pc-17">
                                </label>
                                <label class="grey" for="pc-18">
                                    <input type="radio" id="pc-18">
                                </label>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6 col-md-6 col-sm-6 mix new-arrivals">
                    <div class="product__item">
                        <div class="product__item__pic set-bg" data-setbg="/assets/img/product/product-7.jpg">
                            <ul class="product__hover">
                                <li><a href="#"><img src="/assets/img/icon/heart.png" alt=""></a></li>
                                <li><a href="#"><img src="/assets/img/icon/compare.png" alt="">
                                        <span>Compare</span></a></li>
                                <li><a href="#"><img src="/assets/img/icon/search.png" alt=""></a></li>
                            </ul>
                        </div>
                        <div class="product__item__text">
                            <h6>T-shirt Contrast Pocket</h6>
                            <a href="#" class="add-cart">+ Add To Cart</a>
                            <div class="rating">
                                <i class="fa fa-star-o"></i>
                                <i class="fa fa-star-o"></i>
                                <i class="fa fa-star-o"></i>
                                <i class="fa fa-star-o"></i>
                                <i class="fa fa-star-o"></i>
                            </div>
                            <h5>$49.66</h5>
                            <div class="product__color__select">
                                <label for="pc-19">
                                    <input type="radio" id="pc-19">
                                </label>
                                <label class="active black" for="pc-20">
                                    <input type="radio" id="pc-20">
                                </label>
                                <label class="grey" for="pc-21">
                                    <input type="radio" id="pc-21">
                                </label>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6 col-md-6 col-sm-6 mix hot-sales">
                    <div class="product__item">
                        <div class="product__item__pic set-bg" data-setbg="/assets/img/product/product-8.jpg">
                            <ul class="product__hover">
                                <li><a href="#"><img src="/assets/img/icon/heart.png" alt=""></a></li>
                                <li><a href="#"><img src="/assets/img/icon/compare.png" alt="">
                                        <span>Compare</span></a></li>
                                <li><a href="#"><img src="/assets/img/icon/search.png" alt=""></a></li>
                            </ul>
                        </div>
                        <div class="product__item__text">
                            <h6>Basic Flowing Scarf</h6>
                            <a href="#" class="add-cart">+ Add To Cart</a>
                            <div class="rating">
                                <i class="fa fa-star-o"></i>
                                <i class="fa fa-star-o"></i>
                                <i class="fa fa-star-o"></i>
                                <i class="fa fa-star-o"></i>
                                <i class="fa fa-star-o"></i>
                            </div>
                            <h5>$26.28</h5>
                            <div class="product__color__select">
                                <label for="pc-22">
                                    <input type="radio" id="pc-22">
                                </label>
                                <label class="active black" for="pc-23">
                                    <input type="radio" id="pc-23">
                                </label>
                                <label class="grey" for="pc-24">
                                    <input type="radio" id="pc-24">
                                </label>
                            </div>
                        </div>
                    </div>
                </div>
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
    {{-- <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script> --}}
    {{-- <script>
        $(document).ready(function(){
            var owl = $('hero__slider').owlCarousel({
                items: 1,
                loop: true,
                autoplay: false,
                autoplayTimeout: 5000,
                autoplayHoverPause: true,
                nav: false,
                dots: false
            });

            $('hero__prev').click(function() {
                owl.trigger('prev.owl.carousel');
            });

            $('hero__next').click(function() {
                owl.trigger('next.owl.carousel');
            });

            $('hero__play').click(function() {
                owl.trigger('play.owl.autoplay', [5000]);
            });

            $('hero__stop').click(function() {
                owl.trigger('stop.owl.autoplay');
            });
        });
    </script> --}}
    @endsection

    {{-- <script>
        $(document).ready(function(){
            $('.hero__items').each(function() {
                $(this).owlCarousel({
                    items: 1,
                    loop: true,
                    autoplay: true,
                    autoplayTimeout: 5000, // 5 seconds
                    autoplayHoverPause: true
                });
            });
        });
    </script> --}}
    {{-- <script>
        let start= 0;
        otomatis();

        function otomatis(){
            const sliders = document.querySelectorAll(".hero__items");
            for (let i= 0; i<sliders.length; i++){
                sliders[i].style.display= "none";

            }
            if(start>=sliders.length){
                start = 0;
            }
            sliders[start],style.display= "block";
            console.log("slide ke" +start);
            start++;
            setTimeout(otomatis, 2000);
        }
    </script> --}}

    {{-- <div class="custom-cursor"></div> --}}
    <div class="dark-background">
        <!-- Div baru untuk strip dinamis -->
        {{-- <div class="dynamic-strip"></div> --}}
    </div>
    {{-- <div class="transparent-box"></div> <!-- Lapisan kotak transparan --> --}}



    <script>
        document.addEventListener("DOMContentLoaded", function() {
            var darkBackground = document.querySelector('.dark-background');
            var mouseY = 0;
            var transparentPercentage = 50;

            document.addEventListener("mousemove", function(event) {
                mouseY = event.clientY;
                var totalHeight = window.innerHeight;
                transparentPercentage = (mouseY / totalHeight) * 100;

                darkBackground.style.background = `
                linear-gradient(to bottom, rgba(0, 0, 0, 0.7) 0%, rgba(0, 0, 0, 0.7) ${transparentPercentage}%, transparent ${transparentPercentage}%, transparent ${transparentPercentage + 25}%, rgba(0, 0, 0, 0.7) ${transparentPercentage + 2}%, rgba(0, 0, 0, 0.7) 100%)`;

            });

        });
    </script>
