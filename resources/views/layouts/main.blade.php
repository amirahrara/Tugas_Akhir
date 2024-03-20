<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="Male_Fashion Template">
    <meta name="keywords" content="Male_Fashion, unica, creative, html">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Butik Orlin Fashion</title>

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito+Sans:wght@300;400;600;700;800;900&display=swap"
        rel="stylesheet">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <!-- Css Styles -->
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('assets/css/font-awesome.min.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('assets/css/elegant-icons.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('assets/css/magnific-popup.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('assets/css/nice-select.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('assets/css/owl.carousel.min.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('assets/css/slicknav.min.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}" type="text/css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.0/css/all.css"
        integrity="sha384-lKuwvrZot6UHsBSfcMvOkWwlCMgc0TaWr+30HWe3a4ltaBwTZhyTEggF5tJv8tbt" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('assets/css/aksesbilitas.css') }}" type="text/css">
    {{-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"> --}}


    <style>
        .modal-dialog {
            position: fixed;
            margin: auto;
            width: 320px;
            height: 100%;
            right: 0px;
        }

        .modal-content {
            height: 100%;
        }

        .wrapper {
            width: 100%;
            height: 100vh;
            background-color: #ffffff;
            /* display: flex; */
            align-items: center;
            justify-content: center;
            user-select: none;
            /* cursor: none; */
        }

        .wrapper::before {
            content: "";
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            /* background-color: rgba(0, 0, 0, 0.733); */
        }

        .wrapper h1 {
            font-size: 110px;
            color: #fff;
            z-index: 10;
        }

        .mask {
             /* position: absolute; */
            /* top: 0; */
            /* left: 0; */
            z-index: 9999;
            width: 1700px;
            height: 190px;
            background-color: #0e0c0c42;
            overflow: hidden;
        }



        /* .mask {
            position: absolute;
            width: 1700px;
            height: 190px;
            background-image: url(img/Bg.jpg);
            background-position: center;
            border-radius: 50%;
            background-attachment: fixed;
            overflow: hidden;
        } */

        /* CSS untuk kursor dengan latar belakang persegi */
        /* .cursorSquare {
            cursor: none;

            position: fixed;
            width: 20px;
            height: 20px;
            border: 2px solid #000;
            border-radius: 4px;
            pointer-events: none;
            z-index: 9999;
        }

        .disable-interaction {
            pointer-events: none;
        }

        .masked-area {
            pointer-events: none;
        } */
    </style>

</head>

<body>


    <div class="wrapper">
        {{-- <h1>Test</h1> --}}

        <div id="maskContainer">
            <div id="preloder">
                <div class="loader"></div>
            </div>

            <div class="offcanvas-menu-overlay"></div>
            <div class="offcanvas-menu-wrapper">
                <div class="offcanvas__option">
                    <div class="offcanvas__links">
                        <a href="{{ route('login') }}">Masuk</a>
                    </div>
                </div>
                <div class="offcanvas__nav__option">
                    <a href="#" class="search-switch"><img src="/assets/img/icon/search.png" alt=""></a>
                    <a href="{{ route('favorit') }}"><img src="/assets/img/icon/heart.png" alt=""></a>
                    <a href="{{ route('keranjang') }}"><img src="/assets/img/icon/cart.png" alt="">
                        <span>0</span></a>
                    <div class="price">$0.00</div>
                </div>
                <div id="mobile-menu-wrap"></div>
                <div class="offcanvas__text">
                    <p>Free shipping, 30-day return or refund guarantee.</p>
                </div>
            </div>

            <header class="header">
                @include('components.navbar')

            </header>

            @yield('content')

            <button class="btn-floating aksesbilitas" id="buttonAcs">
                <img src="/assets/img/icon/accessibility2.png" alt="aksesbilitas">
                <span>Fitur Aksesibilitas</span>
            </button>

            <div id="modal_aside_right" class="modal fixed-right fade" tabindex="-1" role="dialog">
                <div class="modal-dialog modal-dialog-aside" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title">Right fixed sample</h5>
                        </div>
                        <div class="modal-body">
                            <button class="btn btn-outline-dark" id="btnreading" data-dismiss="modal">Reading
                                Mask</button>
                                <button class="btn btn-outline-dark" id="btnstopanimasi" data-dismiss="modal">Stop Animasi</button>
                                <button class="btn btn-outline-dark" id="btnfont" data-dismiss="modal">Adjust Ukuran Font</button>
                          </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal"
                                id="closeBtn">Close</button>
                            <button type="button" class="btn btn-primary">Save changes</button>
                        </div>
                    </div>
                </div>
            </div>

            <footer class="footer">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-3 col-md-6 col-sm-6">
                            <div class="footer__about">
                                <div class="footer__logo">
                                    <a href="#"><img src="/assets/img/logo-butik.png" alt=""></a>
                                </div>
                                <h5 style="color: white">Temukan Kami</h5><br>
                                <a href="#"><img src="/assets/img/payment.png" alt=""></a>
                            </div>
                        </div>
                        <div class="col-lg-2 offset-lg-1 col-md-3 col-sm-6">
                            <div class="footer__widget">
                                <h6>Info</h6>
                                <ul>
                                    <li><a href="#">Tentang Kami</a></li>
                                    <li><a href="#">Kontak</a></li>
                                    <li><a href="#">Lokasi</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-lg-2 col-md-3 col-sm-6">
                            <div class="footer__widget">
                                <h6>Bantuan</h6>
                                <ul>
                                    <li><a href="#">Pusat Bantuan</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-lg-3 offset-lg-1 col-md-6 col-sm-6">
                            <div class="footer__widget">
                                <h6>NewLetter</h6>
                                <div class="footer__newslatter">
                                    <p>Jadilah orang pertama untuk mengetahui produk terbaru kami dan berbagai
                                        promo!
                                    </p>
                                    <form action="#">
                                        <input type="text" placeholder="Email anda">
                                        <button type="submit"><span class="icon_mail_alt"></span></button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-12 text-center">
                            <div class="footer__copyright__text">
                                <p>Copyright ©
                                    <script>
                                        document.write(new Date().getFullYear());
                                        </script>2020
                                    All rights reserved | This template is made with <i class="fa fa-heart-o"
                                    aria-hidden="true"></i> by <a href="https://colorlib.com"
                                    target="_blank">Colorlib</a>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </footer>
        </div>
        <div class="mask"></div>
    </div>


    <!-- Js Plugins -->
    <script src="{{ asset('assets/js/jquery-3.3.1.min.js') }}"></script>
    <script src="{{ asset('assets/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('assets/js/jquery.nice-select.min.js') }}"></script>
    <script src="{{ asset('assets/js/jquery.nicescroll.min.js') }}"></script>
    <script src="{{ asset('assets/js/jquery.magnific-popup.min.js') }}"></script>
    <script src="{{ asset('assets/js/jquery.countdown.min.js') }}"></script>
    <script src="{{ asset('assets/js/jquery.slicknav.js') }}"></script>
    <script src="{{ asset('assets/js/mixitup.min.js') }}"></script>
    <script src="{{ asset('assets/js/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('assets/js/main.js') }}"></script>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
        integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js"
        integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous">
    </script>
    <script src="/js/hidenpsw.js"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"
    integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
    <script src='https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js'></script>
    <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>
    <script type="text/javascript" src="https://code.jquery.com/jquery-3.5.1.js"></script>


    <script type="text/javascript">
        $(document).ready(function() {

            const Mask = document.querySelector(".mask");
            const MaskHalfWidth = Mask.offsetWidth / 2;
            const MaskHalfHeight = Mask.offsetHeight / 2;

            window.addEventListener("mousemove", (e) => {
                const mouseX = e.pageX;
                const mouseY = e.pageY;

                let maskX = mouseX - MaskHalfWidth;
                let maskY = mouseY - MaskHalfHeight;

                if (maskX < 0) {
                    maskX = 0;
                } else if (maskX > window.innerWidth - Mask.offsetWidth) {
                    maskX = window.innerWidth - Mask.offsetWidth;
                }

                if (maskY < 0) {
                    maskY = 0;
                } else if (maskY > window.innerHeight - Mask.offsetHeight) {
                    maskY = window.innerHeight - Mask.offsetHeight;
                }

                Mask.style.top = maskY + "px";
                Mask.style.left = maskX + "px";
            });


            localStorage.setItem('flag_mask', 'false');


            $("#buttonAcs").click(function() {
                $('#buttonAcs').hide();
                $('#modal_aside_right').modal('show')
            });

            $("#closeBtn").click(function() {
                $('#buttonAcs').show();
                $('#modal_aside_right').modal('hide')
            });

            $("#btnreading").click(function() {
                $('#buttonAcs').show();
                $('#modal_aside_right').modal('hide')

                $('#maskContainer').css('display', 'block')

                localStorage.setItem('flag_mask', 'true');
                // Membuat elemen div dengan kelas 'mask'
                // var newMaskDiv = $('<div></div>').addClass('mask');

                // Menambahkan elemen div baru ke dalam elemen dengan ID 'flagcontainer'
                // $('#cntainer').append(newMaskDiv);



                // alert('aa');
                // const Mask = document.querySelector(".mask");
                // const MaskHalfWidth = Mask.offsetWidth / 2;
                // // console.log(MaskHalfWidth)
                // const MaskHalfHeight = Mask.offsetHeight / 2;
                // // let MaskHalfWidth = Mask.offsetWidth/2;

                // window.addEventListener("mousemove", (e) => {
                //     // alert('ss')
                //     const mouseX = e.pageX;
                //     const mouseY = e.pageY;

                //     // Mengatur posisi elemen .mask dengan mempertimbangkan batasan area layar
                //     let maskX = mouseX - MaskHalfWidth;
                //     let maskY = mouseY - MaskHalfHeight;

                //     // Memastikan elemen .mask tetap di dalam area layar
                //     if (maskX < 0) {
                //         maskX = 0;
                //     } else if (maskX > window.innerWidth - Mask.offsetWidth) {
                //         maskX = window.innerWidth - Mask.offsetWidth;
                //     }

                //     if (maskY < 0) {
                //         maskY = 0;
                //     } else if (maskY > window.innerHeight - Mask.offsetHeight) {
                //         maskY = window.innerHeight - Mask.offsetHeight;
                //     }

                //     // Mengatur posisi elemen .mask
                //     Mask.style.top = maskY + "px";
                //     Mask.style.left = maskX + "px";
                // });
                // $('#buttonAcs').show();
                // alert("button");
            });

            var flag_mask = localStorage.getItem('flag_mask');

            $('#modal_aside_right').on('hidden.bs.modal', function() {
                $('#buttonAcs').show();

                var flag_mask = localStorage.getItem('flag_mask');

                if (flag_mask == 'true') {

                    // const Mask = document.querySelector(".mask");
                    // const MaskHalfWidth = Mask.offsetWidth / 2;
                    // const MaskHalfHeight = Mask.offsetHeight / 2;

                    // window.addEventListener("mousemove", (e) => {
                    //     const mouseX = e.pageX;
                    //     const mouseY = e.pageY;

                    //     let maskX = mouseX - MaskHalfWidth;
                    //     let maskY = mouseY - MaskHalfHeight;

                    //     if (maskX < 0) {
                    //         maskX = 0;
                    //     } else if (maskX > window.innerWidth - Mask.offsetWidth) {
                    //         maskX = window.innerWidth - Mask.offsetWidth;
                    //     }

                    //     if (maskY < 0) {
                    //         maskY = 0;
                    //     } else if (maskY > window.innerHeight - Mask.offsetHeight) {
                    //         maskY = window.innerHeight - Mask.offsetHeight;
                    //     }

                    //     Mask.style.top = maskY + "px";
                    //     Mask.style.left = maskX + "px";
                    // });
                    // Buat elemen mask
                    // var cursorSquare = $('<div></div>').addClass('cursorSquare');

                    // // Tambahkan elemen mask ke dalam container
                    // $('#maskContainer').append(cursorSquare);

                    // // Atur perilaku elemen mask mengikuti pergerakan kursor
                    // $(document).on("mousemove", function(e) {
                    //     // Dapatkan posisi kursor
                    //     const mouseX = e.pageX;
                    //     const mouseY = e.pageY;

                    //     // Atur posisi elemen mask sesuai dengan posisi kursor
                    //     cursorSquare.css({
                    //         left: mouseX - cursorSquare.width() / 2,
                    //         top: mouseY - cursorSquare.height() / 2
                    //     });
                    // });
                } else {
                    // Hapus elemen mask jika flag_mask tidak aktif
                    // $('.cursorSquare').remove();
                }







            });

            // function addMaskedAreaClass() {
            //     $('div').addClass('masked-area');
            // }

            // // Fungsi untuk memperbarui posisi elemen mask
            // function updateMaskPosition(e) {
            //     // Dapatkan posisi kursor
            //     const mouseX = e.pageX;
            //     const mouseY = e.pageY;

            //     // Atur posisi elemen mask sesuai dengan posisi kursor
            //     cursorSquare.css({
            //         left: mouseX - cursorSquare.width() / 2,
            //         top: mouseY - cursorSquare.height() / 2
            //     });
            // }

            // // Tambahkan event listener untuk mengikuti pergerakan kursor
            // $(document).on("mousemove", function(e) {
            //     if (flag_mask == 'true') {
            //         updateMaskPosition(e);
            //     }
            // });

            // // Tambahkan event listener untuk mengikuti perubahan scroll
            // $(window).on("scroll", function(e) {
            //     if (flag_mask == 'true') {
            //         updateMaskPosition(e);
            //     }
            // });





        });
    </script>
</body>

</html>
