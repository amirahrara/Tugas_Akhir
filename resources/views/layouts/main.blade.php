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
        /* .modal-dialog1 {
            height: 70%;
            width:30%;
            position:fixed;
            bottom:0;
            right:0;
            margin:0;
        }

        .modal-content2 {
            height: 100%;
        } */

        /* Background gelap */
        .dark-background {
            width: 100vw;
            height: 100vh;
            position: fixed;
            top: 0;
            left: 0;
            background: linear-gradient(to bottom, rgba(0, 0, 0, 0.7) 0%, rgba(0, 0, 0, 0.7) 33.33%, transparent 33.33%, transparent 66.67%, rgba(0, 0, 0, 0.7) 66.67%, rgba(0, 0, 0, 0.7) 100%);
            pointer-events: none;
            z-index: 9998;
            overflow: hidden;
        }

        #overlay {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            z-index: 999;
            display: none;
        }
    </style>

</head>

<body>


    <div class="wrappers" id="wrappers">
        <div id="wrapper">
            <div id="maskContainer">
                <div id="preloder">
                    <div class="loader"></div>
                </div>
                <div class="offcanvas-menu-overlay"></div>
                <div class="offcanvas-menu-wrapper">
                    @auth

                        <div class="offcanvas__option">
                            <div class="offcanvas__links">
                                <a>Selamat Datang, {{ auth()->user()->nama_depan }}</a>
                                <a href="{{ route('informasi') }}" style="color: black">Profil</a>
                                <form action="/logout" method="post">
                                    @csrf
                                    <button type="submit" class="dropdown-item"
                                        style="font-size: 13px; letter-spacing: 2px; text-transform: uppercase;">Keluar</button>
                                </form>
                            </div>
                        @else
                            <div class="offcanvas__option">
                                <div class="offcanvas__links">
                                    <a href="{{ route('login') }}">Masuk</a>
                                @endauth

                            </div>
                            <div class="offcanvas__nav__option">
                                <a href="#" class="search-switch"><img src="/assets/img/icon/search.png"
                                        alt=""></a>
                                <a href="{{ route('favorit') }}"><img src="/assets/img/icon/heart.png"
                                        alt=""></a>
                                <a href="{{ route('keranjang') }}"><img src="/assets/img/icon/cart.png" alt="">
                                    <span>2</span></a>
                                <div class="price">Rp. 328.000</div>
                            </div>
                            <div id="mobile-menu-wrap"></div>
                            <div class="offcanvas__text">
                                <p><b>Dapatkan Potongan Ongkir Hingga 15.000 dengan min pembelanjaan 150.000</b></p>
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
                            <div class="modal-dialog modal-dialog-aside" role="document"
                                style="height: 70%; width:30%; position:fixed; bottom:0;right:0; margin:0;">
                                <div class="modal-content" style="height: 100%;">
                                    <div class="modal-header" style="margin: 0;padding:0;">
                                        <div class="row mt-3 ml-1">

                                            <div class="col  mb-3">
                                                <h5 class="modal-title">Fitur Ramah ADHD</h5>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="modal-body">
                                        <div class="row">
                                            <label for="form-label">Perkecil Area Membaca</label>
                                            <div class="col">
                                                <button class="btn btn-sm btn-secondary" id="btnreading"
                                                    data-dismiss="modal"> <i class="fas fa-highlighter"></i> &nbsp;
                                                    Reading Mask</button>
                                            </div>
                                        </div>

                                        <br>
                                        <div class="row">
                                            <label for="form-label">Berhentikan Animasi</label>
                                            <div class="col">
                                                <button class="btn btn-sm btn-secondary" id="btnstopanimasi"
                                                    data-dismiss="modal"><i class="fas fa-stop-circle"></i> &nbsp;
                                                    Stop Animasi</button>
                                            </div>
                                        </div>

                                        <br>

                                        <div class="row">
                                            <div class="col">
                                                <label for="form-label">Sesuiakan Ukuran Font</label>
                                                <div class="form-group">
                                                    <button id="decreaseFontSize" class="btn btn-sm btn-primary"><i
                                                            class="fas fa-chevron-down"></i> &nbsp; Turun</button>
                                                    <input type="text" class="ntn btn-sm" name="font-sizes"
                                                        id="font-sizes" style="width:60px">
                                                    <button id="increaseFontSize" class="btn btn-sm btn-primary"><i
                                                            class="fas fa-chevron-up"></i> &nbsp; Naik</button>
                                                </div>
                                            </div>
                                        </div>


                                        {{-- <button class="btn btn-outline-dark" id="btnfont" data-dismiss="modal">Adjust Ukuran Font</button> --}}



                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-dismiss="modal"
                                            id="closeBtn">Close</button>
                                        {{-- <button type="button" class="btn btn-primary">Save changes</button> --}}
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
                                                <a href="{{ route('index') }}">
                                                    <img src="/assets/img/logo-butik-footer.png" alt=""
                                                        width="100%">
                                                </a>
                                                {{-- <img onmouseenter="bigImg(this)" onmouseleave="normalImg(this)" border="0" src="smiley.gif" alt="Smiley" width="32" height="32"> --}}
                                            </div>
                                            <h5 style="color: white" onmouseenter="bigImg(this)"
                                                onmouseleave="normalImg(this)">Temukan Kami</h5><br>

                                            <a href="https://wa.me/6281232355887"><i
                                                    class='fab fa-whatsapp fa-lg'></i></a>
                                            <a href="https://www.instagram.com/butikorlin/?hl=en"><i
                                                    class='fab fa-instagram fa-lg'></i></a>
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
                                                <p>Jadilah orang pertama untuk mengetahui produk terbaru kami dan
                                                    berbagai
                                                    promo!
                                                </p>
                                                <form action="#">
                                                    <input type="text" placeholder="Email anda">
                                                    <button type="submit"><span
                                                            class="icon_mail_alt"></span></button>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <p class="dynamic-font">Ini adalah teks yang akan berubah ukuran fontnya ketika disorot.</p>
                                <p class="dynamic-font">Teks lain yang juga akan berubah ukuran fontnya ketika disorot.</p>


                                <div class="row">
                                    <div class="col-lg-12 text-center">
                                        <div class="footer__copyright__text">
                                            <p>Copyright ©
                                                <script>
                                                    document.write(new Date().getFullYear());
                                                </script>2020
                                                All rights reserved | This template is made with <i
                                                    class="fa fa-heart-o" aria-hidden="true"></i> by <a
                                                    href="https://colorlib.com" target="_blank">Colorlib</a>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </footer>
                    </div>
                </div>
            </div>

            <div class="dark-background" style="display: none;"></div>

            <div id="overlay" style="display: none;"></div>

            <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>

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
            {{-- <script src="/js/hidenpsw.js"></script> --}}
            <script src="https://code.jquery.com/jquery-3.5.1.min.js"
                integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
            <script src='https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js'></script>
            <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>
            <script type="text/javascript" src="https://code.jquery.com/jquery-3.5.1.js"></script>


            <script type="text/javascript">
                function bigImg(x) {
                    x.style.fontSize = '30px';
                    x.style.height = "64px";
                    x.style.width = "100%";
                }

                function normalImg(x) {
                    x.style.fontSize = '17px';
                    x.style.height = "32px";
                    x.style.width = "100%";
                }

                function bigImgs(x) {
                    // alert('a')
                }

                function normalImgs(x) {
                    // alert('aa')
                }



                $(document).ready(function() {

                    localStorage.removeItem('reading_mask');
                    // localStorage.removeItem('stop_animation');

                    $('.dark-background').css('display', 'none');
                    $('#overlay').css('display', 'none');

                    $("#buttonAcs").click(function() {
                        $('#buttonAcs').hide();
                        $('#modal_aside_right').modal('show')
                    });

                    $("#closeBtn").click(function() {
                        $('#buttonAcs').show();
                        $('#modal_aside_right').modal('hide');

                        localStorage.removeItem('reading_mask');
                        localStorage.removeItem('stop_animation');

                    });

                    var flag_stopanimasi = localStorage.getItem('flag_stopanimasi');

                    if (flag_stopanimasi) {
                        $('#carouselExampleAutoplaying').css('display', 'none');
                        $('#carouselExampleNotPlaying').css('display', 'block');
                        $('#buttonAcs').show();
                        $('#overlay').css('display', 'block');

                        var stop_animation = localStorage.getItem('stop_animation');

                        if (stop_animation == 'false' || stop_animation == null) {
                            localStorage.setItem('stop_animation', 'false');
                            $('#overlay').css('display', 'none');
                            $('#btnstopanimasi').removeClass('btn-danger');
                            $('#carouselExampleAutoplaying').css('display', 'block');
                            $('#carouselExampleNotPlaying').css('display', 'none');

                        } else if (stop_animation == 'true') {
                            localStorage.setItem('stop_animation', 'true');
                            $('#btnstopanimasi').addClass('btn-danger');
                            $('#overlay').css('display', 'none');
                            $('#modal_aside_right').modal('hide');

                            $('#carouselExampleAutoplaying').css('display', 'none');
                            $('#carouselExampleNotPlaying').css('display', 'block');
                        }

                    }

                    $('#btnstopanimasi').click(function() {
                        localStorage.setItem('flag_stopanimasi', 'true')
                        var a = localStorage.getItem('flag_stopanimasi')
                        if (a) {
                            localStorage.setItem('flag_stopanimasi', 'false')
                        } else(
                            localStorage.setItem('flag_stopanimasi', 'true')
                        )

                        $('#carouselExampleAutoplaying').css('display', 'none');
                        $('#carouselExampleNotPlaying').css('display', 'block');
                        $('#buttonAcs').show();
                        $('#overlay').css('display', 'block');

                        var stop_animation = localStorage.getItem('stop_animation');

                        if (stop_animation == 'true') {
                            localStorage.setItem('stop_animation', 'false');
                            $('#overlay').css('display', 'none');
                            $('#btnstopanimasi').removeClass('btn-danger');
                            $('#carouselExampleAutoplaying').css('display', 'block');
                            $('#carouselExampleNotPlaying').css('display', 'none');

                        } else if (stop_animation == 'false' || stop_animation == null) {
                            localStorage.setItem('stop_animation', 'true');
                            $('#btnstopanimasi').addClass('btn-danger');
                            $('#overlay').css('display', 'none');
                            $('#modal_aside_right').modal('hide');

                            $('#carouselExampleAutoplaying').css('display', 'none');
                            $('#carouselExampleNotPlaying').css('display', 'block');
                        }

                    })

                    var flag_readingmask = localStorage.getItem('flag_reading_mask');

                    if (flag_readingmask == 'true') {

                        // document.addEventListener("DOMContentLoaded", function() {
                            document.addEventListener("mousemove", function() {
                                // alert('aaa')
                                const dynamicFontElements = document.querySelectorAll('.dynamic-font');

                                dynamicFontElements.forEach(element => {
                                    element.setAttribute('onmouseenter', 'bigImg(this)');
                                    element.setAttribute('onmouseleave', 'normalImg(this)');
                                });

                            });
                        // });

                        $('#buttonAcs').show();
                        $('#btnreading').attr('id', 'btnreading_show')
                        $('.dark-background').css('display', 'block');

                        var reading_mask_status = localStorage.getItem('flag_reading_mask');

                        localStorage.setItem('flag_reading_mask', 'true');

                        var darkBackground = document.querySelector('.dark-background');
                        var mouseY = 0;
                        var transparentPercentage = 50;

                        document.addEventListener("mousemove", function(event) {
                            mouseY = event.clientY;
                            var totalHeight = window.innerHeight;
                            transparentPercentage = (mouseY / totalHeight) * 100;

                            darkBackground.style.background =
                                `
                        linear-gradient(to bottom, rgba(0, 0, 0, 0.7) 0%, rgba(0, 0, 0, 0.7) ${transparentPercentage}%, transparent ${transparentPercentage}%, transparent ${transparentPercentage + 25}%, rgba(0, 0, 0, 0.7) ${transparentPercentage + 2}%, rgba(0, 0, 0, 0.7) 100%)`;

                        });

                    } else if (flag_readingmask == 'false') {
                        // alert('aa')
                        localStorage.setItem('flag_reading_mask', 'false');
                        $('.dark-background').css('display', 'none');

                        document.addEventListener("mousemove", function() {
                                const dynamicFontElements = document.querySelectorAll('.dynamic-fonts');

                                dynamicFontElements.forEach(element => {
                                    element.setAttribute('onmouseenter', 'bigImg(this)');
                                    element.setAttribute('onmouseleave', 'normalImg(this)');
                                });

                            });

                    }

                    $("#btnreading_show").click(function() {
                        var a = localStorage.getItem('flag_reading_mask');
                        if (a == 'true') {
                            localStorage.removeItem('flag_reading_mask');
                            $('.dark-background').css('display', 'none');
                            // alert('11')
                            document.addEventListener("mousemove", function() {
                                const dynamicFontElements = document.querySelectorAll('.dynamic-font');

                                dynamicFontElements.forEach(element => {
                                    element.setAttribute('onmouseenter', 'bigImg(this)');
                                    element.setAttribute('onmouseleave', 'normalImg(this)');
                                });

                            });
                        } else {
                            // alert('a')
                            document.addEventListener("mousemove", function() {
                                const dynamicFontElements = document.querySelectorAll('.dynamic-fonts');

                                dynamicFontElements.forEach(element => {
                                    element.setAttribute('onmouseenter', 'bigImg(this)');
                                    element.setAttribute('onmouseleave', 'normalImg(this)');
                                });

                            });
                        }


                    });

                    $("#btnreading").click(function() {
                        // console.log('a')
                        // alert('masuk')

                        // localStorage.setItem('flag_reading_mask', 'true')
                        $('#buttonAcs').show();

                        // $('#modal_aside_right').modal('hide')
                        // $('#btnreading').removeClass('btn-secondary');
                        // $('#btnreading').addClass('btn-primary');
                        $('.dark-background').css('display', 'block');


                        var reading_mask_status = localStorage.getItem('flag_reading_mask');
                        // alert(reading_mask_status)

                        if (reading_mask_status == null) {

                            // document.addEventListener("DOMContentLoaded", function() {
                                document.addEventListener("mousemove", function() {
                                    const dynamicFontElements = document.querySelectorAll('.dynamic-font');

                                    dynamicFontElements.forEach(element => {
                                        element.setAttribute('onmouseenter', 'bigImg(this)');
                                        element.setAttribute('onmouseleave', 'normalImg(this)');
                                    });

                                });
                            // });

                            localStorage.setItem('flag_reading_mask', 'true');

                            var darkBackground = document.querySelector('.dark-background');
                            var mouseY = 0;
                            var transparentPercentage = 50;

                            document.addEventListener("mousemove", function(event) {
                                mouseY = event.clientY;
                                var totalHeight = window.innerHeight;
                                transparentPercentage = (mouseY / totalHeight) * 100;

                                darkBackground.style.background =
                                    `
                            linear-gradient(to bottom, rgba(0, 0, 0, 0.7) 0%, rgba(0, 0, 0, 0.7) ${transparentPercentage}%, transparent ${transparentPercentage}%, transparent ${transparentPercentage + 25}%, rgba(0, 0, 0, 0.7) ${transparentPercentage + 2}%, rgba(0, 0, 0, 0.7) 100%)`;

                            });
                        } else if (reading_mask_status == 'true') {
                            // alert('aaaaaa')
                            localStorage.setItem('flag_reading_mask', 'false');
                            $('.dark-background').css('display', 'none');
                            // break;

                            // document.addEventListener("DOMContentLoaded", function() {
                            document.addEventListener("mousemove", function() {
                                // break;
                                // alert('aacsafas')
                                const dynamicFontElements = document.querySelectorAll('.dynamic-font');

                                dynamicFontElements.forEach(element => {
                                    element.setAttribute('onmouseenter', 'bigImgs(this)');
                                    element.setAttribute('onmouseleave', 'normalImgs(this)');
                                });

                            });

                        // });

                        } else if (reading_mask_status == 'false') {

                            document.addEventListener("mousemove", function() {
                                // alert('aaaaaavvvvv')
                                const dynamicFontElements = document.querySelectorAll('.dynamic-font');

                                dynamicFontElements.forEach(element => {
                                    element.setAttribute('onmouseenter', 'bigImg(this)');
                                    element.setAttribute('onmouseleave', 'normalImg(this)');
                                });

                            });

                            localStorage.setItem('flag_reading_mask', 'true');

                            var darkBackground = document.querySelector('.dark-background');
                            var mouseY = 0;
                            var transparentPercentage = 50;

                            document.addEventListener("mousemove", function(event) {
                                mouseY = event.clientY;
                                var totalHeight = window.innerHeight;
                                transparentPercentage = (mouseY / totalHeight) * 100;

                                darkBackground.style.background =
                                    `
                        linear-gradient(to bottom, rgba(0, 0, 0, 0.7) 0%, rgba(0, 0, 0, 0.7) ${transparentPercentage}%, transparent ${transparentPercentage}%, transparent ${transparentPercentage + 25}%, rgba(0, 0, 0, 0.7) ${transparentPercentage + 2}%, rgba(0, 0, 0, 0.7) 100%)`;

                            });
                        }

                    });

                    // $("#toggleActiveADHD").click(function(){
                    //     // btn stop animasi
                    //     var a= localStorage.getItem('flag_stopanimasi')
                    // if (a) {
                    //     localStorage.setItem('flag_stopanimasi', 'false')
                    // }
                    // else(
                    //     localStorage.setItem('flag_stopanimasi', 'true')
                    // )

                    //     $('#carouselExampleAutoplaying').css('display', 'none');
                    //     $('#carouselExampleNotPlaying').css('display', 'block');
                    //     $('#buttonAcs').show();
                    //     $('#overlay').css('display', 'block');

                    //     var stop_animation = localStorage.getItem('stop_animation');

                    //     if (stop_animation == 'true') {
                    //         localStorage.setItem('stop_animation', 'false');
                    //         $('#overlay').css('display', 'none');
                    //         $('#btnstopanimasi').removeClass('btn-danger');
                    //         $('#carouselExampleAutoplaying').css('display', 'block');
                    //         $('#carouselExampleNotPlaying').css('display', 'none');

                    //     } else if (stop_animation == 'false' || stop_animation == null) {
                    //         localStorage.setItem('stop_animation', 'true');
                    //         $('#btnstopanimasi').addClass('btn-danger');
                    //         $('#overlay').css('display', 'none');
                    //         $('#modal_aside_right').modal('hide');

                    //         $('#carouselExampleAutoplaying').css('display', 'none');
                    //         $('#carouselExampleNotPlaying').css('display', 'block');
                    //     }
                    //     // btn reading
                    //     localStorage.setItem('flag_readingmask', 'true')
                    //     $('#buttonAcs').show();



                    //     $('.dark-background').css('display', 'block');


                    //     var reading_mask_status = localStorage.getItem('reading_mask');

                    //     if (reading_mask_status == 'true') {
                    //         localStorage.setItem('reading_mask', 'false');
                    //         $('.dark-background').css('display', 'none');

                    //     } else if (reading_mask_status == 'false' || reading_mask_status == null) {
                    //         localStorage.setItem('reading_mask', 'true');

                    //         var darkBackground = document.querySelector('.dark-background');
                    //         var mouseY = 0;
                    //         var transparentPercentage = 50;

                    //         document.addEventListener("mousemove", function(event) {
                    //             mouseY = event.clientY;
                    //             var totalHeight = window.innerHeight;
                    //             transparentPercentage = (mouseY / totalHeight) * 100;

                    //             darkBackground.style.background = `
        //             linear-gradient(to bottom, rgba(0, 0, 0, 0.7) 0%, rgba(0, 0, 0, 0.7) ${transparentPercentage}%, transparent ${transparentPercentage}%, transparent ${transparentPercentage + 25}%, rgba(0, 0, 0, 0.7) ${transparentPercentage + 2}%, rgba(0, 0, 0, 0.7) 100%)`;

                    //         });
                    //     }
                    // })

                    // var adhd_flag_stopanimasi = localStorage.getItem('flag_stopanimasi')
                    // var adhd_flag_readingmask = localStorage.getItem('flag_readingmask')

                    // if(adhd_flag_stopanimasi && adhd_flag_readingmask) {
                    //     $("#toggleActiveADHD").click();
                    // }

                    var flag_mask = localStorage.getItem('flag_mask');

                    $('#modal_aside_right').on('hidden.bs.modal', function() {
                        $('#buttonAcs').show();

                        var flag_mask = localStorage.getItem('flag_mask');

                        if (flag_mask == 'true') {

                        } else {

                        }

                    });
                    // Inisialisasi total penambahan ukuran font dari localStorage
                    var totalIncrease = parseInt(localStorage.getItem('fontSizeIncrease')) || 0;

                    // Fungsi untuk menambah ukuran font sebesar 10%
                    function increaseFontSize() {
                        var elements = document.querySelectorAll('h1, h2, h3, h4, h5, p, a');

                        elements.forEach(function(element) {
                            var currentSize = parseFloat(window.getComputedStyle(element).fontSize);
                            console.log(currentSize);
                            // var currentSize = totalIncrease;
                            var newSize = currentSize * 1.1; // Tambahkan 10%
                            element.style.fontSize = newSize + 'px';
                        });

                        // Tambahkan 10% ke total penambahan ukuran font
                        totalIncrease += 10;
                        localStorage.setItem('fontSizeIncrease', totalIncrease);
                        document.getElementById('font-sizes').value = '+' + totalIncrease + '%';
                    }

                    // Fungsi untuk menurunkan ukuran font sebesar 10%
                    function decreaseFontSize() {
                        var elements = document.querySelectorAll('h1, h2, h3, h4, h5, p, a');

                        elements.forEach(function(element) {
                            var currentSize = parseFloat(window.getComputedStyle(element).fontSize);
                            var newSize = currentSize * 0.9; // Kurangi 10%
                            element.style.fontSize = newSize + 'px';
                        });

                        // Kurangi 10% dari total penambahan ukuran font
                        totalIncrease -= 10;
                        localStorage.setItem('fontSizeIncrease', totalIncrease);
                        document.getElementById('font-sizes').value = '+' + totalIncrease + '%';
                    }

                    // Fungsi untuk mengatur ukuran font berdasarkan nilai totalIncrease
                    function applyFontSizeIncrease() {
                        var elements = document.querySelectorAll('h1, h2, h3, h4, h5, p, a');

                        elements.forEach(function(element) {
                            var originalSize = parseFloat(window.getComputedStyle(element).fontSize) / (Math.pow(
                                1.1, totalIncrease / 10));
                            var newSize = originalSize * Math.pow(1.1, totalIncrease / 10);
                            element.style.fontSize = newSize + 'px';
                        });

                        document.getElementById('font-sizes').value = '+' + totalIncrease + '%';
                    }
                    applyFontSizeIncrease()
                    increaseFontSize()
                    decreaseFontSize()
                    // Event listener untuk tombol increase font size
                    document.getElementById('increaseFontSize').addEventListener('click', function() {
                        increaseFontSize();
                    });

                    // Event listener untuk tombol decrease font size
                    document.getElementById('decreaseFontSize').addEventListener('click', function() {
                        decreaseFontSize();
                    });

                    // Panggil applyFontSizeIncrease saat halaman dimuat
                    document.addEventListener('DOMContentLoaded', function() {
                        applyFontSizeIncrease();
                    });

                    // // Variabel untuk menyimpan total penambahan ukuran font
                    // var totalIncrease = 0;

                    // // Fungsi untuk menaikkan ukuran font sebesar 10%
                    // function increaseFontSize() {
                    //     var elements = document.querySelectorAll('h1, h2, h3, h4, h5, p, a');

                    //     elements.forEach(function(element) {
                    //         var currentSize = parseFloat(window.getComputedStyle(element).fontSize);
                    //         var newSize = currentSize * 1.1; // Tambahkan 10%
                    //         element.style.fontSize = newSize + 'px';
                    //     });

                    //     // Tambahkan 10% ke total penambahan ukuran font
                    //     totalIncrease += 10;
                    //     document.getElementById('font-sizes').value = '+' + totalIncrease + '%';
                    // }

                    // // Fungsi untuk menurunkan ukuran font sebesar 10%
                    // function decreaseFontSize() {
                    //     var elements = document.querySelectorAll('h1, h2, h3, h4, h5, p, a');

                    //     elements.forEach(function(element) {
                    //         var currentSize = parseFloat(window.getComputedStyle(element).fontSize);
                    //         var newSize = currentSize * 0.9; // Kurangi 10%
                    //         element.style.fontSize = newSize + 'px';
                    //     });

                    //     // Kurangi 10% dari total penambahan ukuran font
                    //     totalIncrease -= 10;
                    //     document.getElementById('font-sizes').value = '+' + totalIncrease + '%';
                    // }

                    // // Event listener untuk tombol increase font size
                    // document.getElementById('increaseFontSize').addEventListener('click', function() {
                    //     increaseFontSize();
                    // });

                    // // Event listener untuk tombol decrease font size
                    // document.getElementById('decreaseFontSize').addEventListener('click', function() {
                    //     decreaseFontSize();
                    // });


                });
            </script>


</body>

</html>
