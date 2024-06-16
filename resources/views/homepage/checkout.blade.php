@extends('layouts.main')

@section('content')
    <section class="breadcrumb-option">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb__text">
                        <h4>Pembelian</h4>
                        <div class="breadcrumb__links">
                            <a href="{{ route('index') }}">Beranda</a>
                            <a href="{{ route('produk') }}">Produk</a>
                            <span>Pembelian</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Breadcrumb Section End -->
    <link rel="stylesheet" href=
"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.css">
    </link>
    <style>
        .btn-check:checked+.btn,
        .btn.active,
        .btn.show,
        .btn:first-child:active,
        :not(.btn-check)+.btn:active {
            color: black var(--bs-btn-active-color);
            background-color: #21252929;
            border-color: #2125299c;
        }
    </style>
    <!-- Checkout Section Begin -->
    <section class="checkout spad">
        <div class="container">
            <div class="checkout__form">
                <div class="col-lg-12 col-md-6">
                    <div class="checkout__order">
                        <h5 class="order__title">Alamat Pengiriman</h5>

                        <div class="checkout__order__products">
                            @if ($alamat->where('user_id', auth()->user()->id)->isEmpty())
                            <script>
                                document.addEventListener('DOMContentLoaded', function() {
                                    var myModal = new bootstrap.Modal(document.getElementById('noAddressModal'));
                                    myModal.show();
                                });
                            </script>
                            @else
                                <b>{{ $al->nama_penerima }} | {{ $al->no_penerima }} </b> <br>{{ $al->alamat }},
                            {{ $al->kelurahan }}, {{ $al->kecamatan }}, {{ $al->provinsi }}
                            {{ $al->kode_pos }}
                            <span><a class="nav-link dropdown-toggle" href="#" role="button"
                                    data-bs-toggle="dropdown" aria-expanded="false">Ubah</a>
                                <ul class="dropdown-menu">
                                    @foreach ($alamat as $item)
                                        <li><button class="dropdown-item" type="button"
                                                value="{{ $item->id }}"><b>{{ $item->nama_penerima }} |
                                                    {{ $item->no_penerima }} </b><br>{{ $item->alamat }},
                                                {{ $item->kelurahan }}, {{ $item->kecamatan }}, {{ $item->provinsi }}
                                                {{ $item->kode_pos }}</button></li>
                                    @endforeach
                                </ul>
                                </span>
                            @endif

                        </div>
                    </div>
                </div>

                <!-- Modal -->
                <div class="modal fade" id="noAddressModal" tabindex="-1" aria-labelledby="noAddressModalLabel"
                    aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered" >
                        <div class="modal-content" style="border-radius: 15px;">

                            <div class="modal-body" style="color:black; font-size: 17px">
                                Anda belum menambahkan alamat. Silakan tambahkan alamat baru.
                            </div>
                            <div class="modal-footer">
                                {{-- <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Tutup</button> --}}
                                <a href="{{ route('tambahAlamat') }}" class="btn btn-dark">Tambah Alamat</a>
                            </div>
                        </div>
                    </div>
                </div>


                <div class="col-lg-12 col-md-6">
                    <div class="checkout__order" style="margin-top:20px;">
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
                            <div class="checkout__voucher__products"
                                style="font-size: 16px; color: #111111; overflow: hidden;">
                                <b>Voucher Diskon:</b>
                                <span id="selected-voucher"></span>
                                <span style="float: right; margin-right: 10px;">
                                    <a href="#" data-bs-toggle="modal" data-bs-target="#voucherModal">Pilih</a>
                                </span>
                            </div>
                            <div class="modal fade" id="voucherModal" tabindex="-1" aria-labelledby="voucherModalLabel"
                                aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="voucherModalLabel">Voucher Diskon</h5>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body">
                                            <form>
                                                <div class="col-12 mb-3">
                                                    <label for="recipient-name" class="col-form-label">Kode Voucher:</label>
                                                    <input type="text" class="form-control" id="recipient-name">
                                                </div>
                                                <div class="d-grid col-12">
                                                    <input type="checkbox" class="btn-check" name="options-outlined"
                                                        id="success-outlined" value="Gratis Ongkir 15k" autocomplete="off">
                                                    <label class="btn btn-outline-dark" for="success-outlined"
                                                        style="text-align: left">
                                                        <i class='fas fa-truck-fast'></i>&nbsp;<b>Gratis Ongkir 15k</b>
                                                        &nbsp;Min. belanja 150k
                                                    </label>

                                                    <input type="checkbox" class="btn-check" name="options-outlined"
                                                        id="danger-outlined" value="Diskon 5% s/d Rp. 20k"
                                                        autocomplete="off">
                                                    <label class="btn btn-outline-dark" for="danger-outlined"
                                                        style="text-align: left">
                                                        <i class='fas fa-shirt'></i>&nbsp;<b>Diskon 5% s/d Rp. 20k</b>
                                                        &nbsp;Min. belanja 200k
                                                    </label>
                                                </div>
                                            </form>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary"
                                                data-bs-dismiss="modal">Ok</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
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
                            <li><b>Ongkos Kirim</b><span style="color: black"><b
                                        style="color: gray; text-decoration: line-through">Rp. 15.000</b> <b>Rp.
                                        0</b></span></li>
                            <li><b>Diskon</b><span style="color: black"><b>Rp. 17.150</b></span></li>
                            <li><b>Total</b><span style="color: black"><b>Rp. 325.000</b></span></li>
                        </ul>
                        <a href="{{ route('pembayaran') }}" type="button" class="site-btn">
                            <center>Bayar</center>
                        </a>
                        {{-- <button type="submit" class="site-btn">PLACE ORDER</button> --}}
                    </div>
                </div>
            </div>
        </div>
    </section>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const voucherOptions = document.querySelectorAll('input[name="options-outlined"]');
            const voucherCodeField = document.getElementById('recipient-name');
            const selectedVoucherDisplay = document.getElementById('selected-voucher');

            // Array to hold selected voucher values
            let selectedVouchers = [];

            // Function to update the display
            function updateVoucherDisplay() {
                if (selectedVouchers.length > 0) {
                    selectedVoucherDisplay.textContent = selectedVouchers.join(', ');
                } else {
                    selectedVoucherDisplay.textContent = 'Tidak ada';
                }
            }

            // Event listener for radio buttons
            voucherOptions.forEach(function(option) {
                option.addEventListener('change', function() {
                    const value = this.value;
                    if (this.checked && !selectedVouchers.includes(value)) {
                        selectedVouchers.push(value);
                    } else if (!this.checked && selectedVouchers.includes(value)) {
                        const index = selectedVouchers.indexOf(value);
                        if (index !== -1) {
                            selectedVouchers.splice(index, 1);
                        }
                    }
                    updateVoucherDisplay();
                });
            });


        });
    </script>
@endsection
