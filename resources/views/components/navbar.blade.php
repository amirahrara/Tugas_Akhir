<header class="header">
    <div class="header__top">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-7">
                    <div class="header__top__left">
                        <p>Dapatkan Potongan Ongkir Hingga 15.000 dengan min pembelanjaan 150.000</p>
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
                            <a href="{{route('login')}}"><i class="fas fa-user"></i> Masuk</a>
                        </div>
                    </div>
                    @endauth
                    
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
                        <li class="{{ request()->routeIs('index') ? 'active' : '' }}"><a href="{{ route('index') }}">Beranda</a></li>
                        <li class="{{ request()->routeIs('produk') ? 'active' : '' }}"><a href="{{ route('produk') }}">Produk</a></li>
                        <li class="{{ request()->routeIs('tentangkami') ? 'active' : '' }}"><a href="{{ route('tentangkami') }}">Tentang Kami</a></li>
                        <li class="{{ request()->routeIs('kontak') ? 'active' : '' }}"><a href="{{ route('kontak') }}">Kontak</a></li>
                    </ul>

                    {{-- <ul>
                        <li class="active"><a href="{{route('index')}}">Beranda</a></li>
                        <li><a href="{{ route('produk')}}">Produk</a></li>
                        <li><a href="{{route('tentangkami')}}">Tentang Kami</a></li>
                        <li><a href="{{route('kontak')}}">Kontak</a></li>
                    </ul> --}}
                </nav>
            </div>
            <div class="col-lg-3 col-md-3">
                <div class="header__nav__option">
                    <a href="#" class="search-switch"><img src="/assets/img/icon/search.png" alt=""></a>
                    <a href="{{route('favorit')}}"><img src="/assets/img/icon/heart.png" alt=""></a>
                    <a href="{{route('keranjang')}}"><img src="/assets/img/icon/cart.png" alt=""> <span>2</span></a>
                    <div class="price">Rp. 328.000</div>
                </div>
            </div>
        </div>
        <div class="canvas__open"><i class="fa fa-bars"></i></div>
    </div>
</header>
