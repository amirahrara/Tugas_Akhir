<header class="header">
    <div class="header__top">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-7">
                    <div class="header__top__left">
                        <p>Free shipping, 30-day return or refund guarantee.</p>
                    </div>
                </div>
                <div class="col-lg-6 col-md-5">
                    {{-- <ul class="navbar-nav ms-auto"> --}}
                    @auth
                    <div class="header__top__right">
                        <div class="header__top__links">
                            <div class="header__top__hover">
                                <span>Selamat Datang, {{ auth()->user()->nama_depan}} <i class="arrow_carrot-down"></i></span>
                                <ul>
                                    <center><li><a href="{{route('informasi')}}" style="color: black">Profil</a></li></center>

                                    {{-- <li><hr class="dropdown-divider"></li> --}}
                                    <form action="/logout" method="post">
                                    @csrf
                                    <button type="submit" class="dropdown-item" style="font-size: 13px; letter-spacing: 2px; text-transform: uppercase;">Keluar</button>
                                </form>
                                </ul>
                            </div>
                            {{-- <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                    Selamat Datang, {{ auth()->user()->nama_depan}}
                                </a>
                                <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="#" style="color: black">Profil</a></li>
                                <li><hr class="dropdown-divider"></li>
                                <form action="/logout" method="post">
                                    @csrf
                                    <button type="submit" class="dropdown-item"><i class="bi bi-box-arrow-right"></i>Keluar</button>
                                </form>
                                </ul>
                            </li> --}}

                            {{-- </ul> --}}

                        </div>
                    </div>
                    @else
                    <div class="header__top__right">
                        <div class="header__top__links">
                            <a href="{{route('login')}}">Masuk</a>
                        </div>
                    </div>
                    @endauth
                    {{-- <button type="button" class="btn" style="color:white" data-bs-toggle="modal" data-bs-target="#exampleModal">
                        Masuk
                    </button>
                    <!-- Modal -->
                    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h1 class="modal-title fs-5" id="exampleModalLabel">Modal title</h1>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    ...
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                    <button type="button" class="btn btn-primary">Save changes</button>
                                </div>
                            </div>
                        </div>
                    </div> --}}
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-lg-3 col-md-3">
                <div style="margin-top: 20px;">
                    <a href="./index.html"><img src="/assets/img/logo-butik.png" style="width: 65%;" alt=""></a>
                </div>
                {{-- <div class="header__logo">
                </div> --}}
            </div>
            <div class="col-lg-6 col-md-6">
                <nav class="header__menu mobile-menu">
                    <ul>
                        <li class="active"><a href="{{route('index')}}">Beranda</a></li>
                        <li><a href="{{ route('produk')}}">Produk</a></li>
                        <li><a href="{{route('tentangkami')}}">Tentang Kami</a></li>
                        <li><a href="{{route('kontak')}}">Kontak</a></li>
                    </ul>
                </nav>
            </div>
            <div class="col-lg-3 col-md-3">
                <div class="header__nav__option">
                    <a href="#" class="search-switch"><img src="/assets/img/icon/search.png" alt=""></a>
                    <a href="{{route('favorit')}}"><img src="/assets/img/icon/heart.png" alt=""></a>
                    <a href="{{route('keranjang')}}"><img src="/assets/img/icon/cart.png" alt=""> <span>0</span></a>
                    <div class="price">Rp. 0.00</div>
                </div>
            </div>
        </div>
        <div class="canvas__open"><i class="fa fa-bars"></i></div>
    </div>
</header>
