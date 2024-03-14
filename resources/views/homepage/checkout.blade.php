@extends('layouts.main')

@section('content')
<section class="breadcrumb-option">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="breadcrumb__text">
                    <h4>Pembelian</h4>
                    <div class="breadcrumb__links">
                        <a href="{{route('index')}}">Beranda</a>
                        <a href="{{route('produk')}}">Produk</a>
                        <span>Pembelian</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Breadcrumb Section End -->

<!-- Checkout Section Begin -->
<section class="checkout spad">
    <div class="container">
        <div class="checkout__form">
            <form action="#">
                {{-- <div class="row"> --}}
                    {{-- <div class="col-lg-8 col-md-6">
                        <h6 class="coupon__code"><span class="icon_tag_alt"></span> Have a coupon? <a href="#">Click
                        here</a> to enter your code</h6>
                        <h6 class="checkout__title">Billing Details</h6>
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="checkout__input">
                                    <p>Fist Name<span>*</span></p>
                                    <input type="text">
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="checkout__input">
                                    <p>Last Name<span>*</span></p>
                                    <input type="text">
                                </div>
                            </div>
                        </div>
                        <div class="checkout__input">
                            <p>Country<span>*</span></p>
                            <input type="text">
                        </div>
                        <div class="checkout__input">
                            <p>Address<span>*</span></p>
                            <input type="text" placeholder="Street Address" class="checkout__input__add">
                            <input type="text" placeholder="Apartment, suite, unite ect (optinal)">
                        </div>
                        <div class="checkout__input">
                            <p>Town/City<span>*</span></p>
                            <input type="text">
                        </div>
                        <div class="checkout__input">
                            <p>Country/State<span>*</span></p>
                            <input type="text">
                        </div>
                        <div class="checkout__input">
                            <p>Postcode / ZIP<span>*</span></p>
                            <input type="text">
                        </div>
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="checkout__input">
                                    <p>Phone<span>*</span></p>
                                    <input type="text">
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="checkout__input">
                                    <p>Email<span>*</span></p>
                                    <input type="text">
                                </div>
                            </div>
                        </div>
                        <div class="checkout__input__checkbox">
                            <label for="acc">
                                Create an account?
                                <input type="checkbox" id="acc">
                                <span class="checkmark"></span>
                            </label>
                            <p>Create an account by entering the information below. If you are a returning customer
                            please login at the top of the page</p>
                        </div>
                        <div class="checkout__input">
                            <p>Account Password<span>*</span></p>
                            <input type="text">
                        </div>
                        <div class="checkout__input__checkbox">
                            <label for="diff-acc">
                                Note about your order, e.g, special noe for delivery
                                <input type="checkbox" id="diff-acc">
                                <span class="checkmark"></span>
                            </label>
                        </div>
                        <div class="checkout__input">
                            <p>Order notes<span>*</span></p>
                            <input type="text"
                            placeholder="Notes about your order, e.g. special notes for delivery.">
                        </div>
                    </div> --}}
                    <div class="col-lg-12 col-md-6">
                        <div class="checkout__order">
                            <h5 class="order__title">Alamat Pengiriman</h5>
                            <div class="checkout__order__products"><b>Nama | No.Telpon</b>  Alamat lengkap <span><a href="#">Ubah</a></span></div>
                        </div>
                    </div>
                    <div class="col-lg-12 col-md-6">
                        <div class="checkout__order" style="margin-top:20px">
                            <h5 class="order__title">Pesanan</h5>
                            <div class="checkout__order__products"><b>Produk</b> <span>Total</span></div>
                            <ul class="checkout__total__products">
                                <li>01. Vanilla salted caramel <span>Rp. 173.000</span></li>
                                <li>02. German chocolate <span>Rp. 170.000</span></li>
                            </ul>
                            <ul class="checkout__total__all">
                                <li>Total Produk<span>2</span></li>
                                <li>Subtotal <span>Rp. 343.000</span></li>
                            </ul>
                            <div class="checkout__voucher" style="background: white; border-radius:10px; padding:8px;">
                                <div class="checkout__voucher__products" style="font-size: 16px; color: #111111;
                                overflow: hidden;"><b>Voucher Diskon</b><span style="float: right;"><a href="#">Pilih</a></span></div>
                            </div><br>
                            <h6><b>Metode Pembayaran</b></h6><br>
                            <div class="checkout__input__checkbox">
                                <label for="bca">
                                    <img src="assets/img/checkout/LOGO-BCA.png" style="height:20px" alt="">
                                    BANK BCA
                                    <input type="checkbox" id="bca">
                                    <span class="checkmark"></span>
                                </label>
                            </div>
                            <div class="checkout__input__checkbox">
                                <label for="bri">
                                    <img src="assets/img/checkout/LOGO-BRI.png" style="height:25px" alt="">
                                    BANK BRI
                                    <input type="checkbox" id="bri">
                                    <span class="checkmark"></span>
                                </label>
                            </div>
                            <div class="checkout__input__checkbox">
                                <label for="bni">
                                    <img src="assets/img/checkout/LOGO-BNI.png" style="height:20px" alt="">
                                    BANK BNI
                                    <input type="checkbox" id="bni">
                                    <span class="checkmark"></span>
                                </label>
                            </div>
                            <div class="checkout__input__checkbox">
                                <label for="mandiri">
                                    <img src="assets/img/checkout/LOGO-MANDIRI.png" style="height:25px" alt="">
                                    BANK Mandiri
                                    <input type="checkbox" id="mandiri">
                                    <span class="checkmark"></span>
                                </label>
                            </div>
                            <ul class="checkout__total__all">
                                <li><b>Ongkos Kirim</b><span style="color: black"><b>Rp. 0</b></span></li>
                                <li><b>Total</b><span style="color: black"><b>Rp. 343.000</b></span></li>
                            </ul>
                            <button type="submit" class="site-btn">PLACE ORDER</button>
                        </div>
                    </div>
                {{-- </div> --}}
            </form>
        </div>
    </div>
</section>
@endsection
