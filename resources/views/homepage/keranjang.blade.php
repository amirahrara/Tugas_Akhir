@extends('layouts.main')

@section('content')
<section class="breadcrumb-option">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="breadcrumb__text">
                    <h4>Keranjang</h4>
                    <div class="breadcrumb__links">
                        <a href="{{route('index')}}">Beranda</a>
                        <a href="{{route('produk')}}">Produk</a>
                        <span>Keranjang</span>
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
                    <table>
                        <thead>
                            <tr>
                                <th>Produk</th>
                                <th>Jumlah</th>
                                <th>Total</th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td class="product__cart__item">
                                    <div class="product__cart__item__pic">
                                        <img src="assets/img/shopping-cart/cart-1.jpg" alt="">
                                    </div>
                                    <div class="product__cart__item__text">
                                        <h6>T-shirt Contrast Pocket</h6>
                                        <h5>$98.49</h5>
                                    </div>
                                </td>
                                <td class="quantity__item">
                                    <div class="quantity">
                                        <div class="pro-qty-2">
                                            <input type="text" value="1">
                                        </div>
                                    </div>
                                </td>
                                <td class="cart__price">$ 30.00</td>
                                <td class="cart__close"><i class="fa fa-close"></i></td>
                            </tr>
                            <tr>
                                <td class="product__cart__item">
                                    <div class="product__cart__item__pic">
                                        <img src="assets/img/shopping-cart/cart-2.jpg" alt="">
                                    </div>
                                    <div class="product__cart__item__text">
                                        <h6>Diagonal Textured Cap</h6>
                                        <h5>$98.49</h5>
                                    </div>
                                </td>
                                <td class="quantity__item">
                                    <div class="quantity">
                                        <div class="pro-qty-2">
                                            <input type="text" value="1">
                                        </div>
                                    </div>
                                </td>
                                <td class="cart__price">$ 32.50</td>
                                <td class="cart__close"><i class="fa fa-close"></i></td>
                            </tr>
                            <tr>
                                <td class="product__cart__item">
                                    <div class="product__cart__item__pic">
                                        <img src="assets/img/shopping-cart/cart-3.jpg" alt="">
                                    </div>
                                    <div class="product__cart__item__text">
                                        <h6>Basic Flowing Scarf</h6>
                                        <h5>$98.49</h5>
                                    </div>
                                </td>
                                <td class="quantity__item">
                                    <div class="quantity">
                                        <div class="pro-qty-2">
                                            <input type="text" value="1">
                                        </div>
                                    </div>
                                </td>
                                <td class="cart__price">$ 47.00</td>
                                <td class="cart__close"><i class="fa fa-close"></i></td>
                            </tr>
                            <tr>
                                <td class="product__cart__item">
                                    <div class="product__cart__item__pic">
                                        <img src="assets/img/shopping-cart/cart-4.jpg" alt="">
                                    </div>
                                    <div class="product__cart__item__text">
                                        <h6>Basic Flowing Scarf</h6>
                                        <h5>$98.49</h5>
                                    </div>
                                </td>
                                <td class="quantity__item">
                                    <div class="quantity">
                                        <div class="pro-qty-2">
                                            <input type="text" value="1">
                                        </div>
                                    </div>
                                </td>
                                <td class="cart__price">$ 30.00</td>
                                <td class="cart__close"><i class="fa fa-close"></i></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                {{-- <div class="row">
                    <div class="col-lg-6 col-md-6 col-sm-6">
                        <div class="continue__btn">
                            <a href="#">Continue Shopping</a>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-6">
                        <div class="continue__btn update__btn">
                            <a href="#"><i class="fa fa-spinner"></i> Update cart</a>
                        </div>
                    </div>
                </div> --}}
            </div>
            <div class="col-lg-4">
                {{-- <div class="cart__discount">
                    <h6>Discount codes</h6>
                    <form action="#">
                        <input type="text" placeholder="Coupon code">
                        <button type="submit">Apply</button>
                    </form>
                </div> --}}
                <div class="cart__total">
                    <h5>Pesanan</h5>
                    <ul>
                        <li>Total Produk <span style="color: black">2</span></li>
                        <li>Subtotal <span>Rp. 215.000</span></li>
                    </ul>
                    <h6 style="font-size: smaller"><b>*Belum termasuk ongkir</b></h6>
                    <br>
                    <a href="{{route('checkout')}}" class="primary-btn">Beli</a>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
