@extends('layouts.main')

@section('content')
<section class="breadcrumb-option">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="breadcrumb__text">
                    <h4>Favorit</h4>
                    <div class="breadcrumb__links">
                        <a href="{{route('index')}}">Beranda</a>
                        <a href="{{route('produk')}}">Produk</a>
                        <span>Favorit</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Breadcrumb Section End -->

<!-- Shopping Cart Section Begin -->
<section class="shopping-cart spad">
    <div class="container">
        <div class="row">
            <div class="col-lg-8">
                <div class="shopping__cart__table">
                    <table style="width: 1150px">
                        {{-- <thead>
                            <tr>
                                <th>Produk</th>


                            </tr>
                        </thead> --}}
                        <tbody>
                            <tr>
                                <td class="product__cart__item" colspan="3">
                                    <a href="/detailfavorit">
                                        <div class="product__cart__item__pic">
                                            <img src="assets/img/shopping-cart/rok1.png" alt="">
                                        </div>
                                        <div class="product__cart__item__text">
                                            <h6>T-shirt Contrast Pocket</h6>
                                            <h5>Rp. 150.000</h5>
                                        </div>

                                    </a>
                                </td>

                                <td class="cart__close"><i class="fa fa-close"></i></td>
                            </tr>
                            <tr>
                                <td class="product__cart__item" colspan="3">
                                    <a href="/detailfavorit">

                                        <div class="product__cart__item__pic">
                                            <img src="assets/img/shopping-cart/dress1.png" alt="">
                                        </div>
                                        <div class="product__cart__item__text" >
                                            <h6>Diagonal Textured Cap</h6>
                                            <h5>Rp. 98.000</h5>
                                        </div>
                                    </a>
                                </td>

                                <td class="cart__close"><i class="fa fa-close"></i></td>
                            </tr>

                        </tbody>
                    </table>
                </div>

            </div>

        </div>
    </div>
</section>
@endsection
