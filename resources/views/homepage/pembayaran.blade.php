@extends('layouts.main')

@section('content')
<section class="breadcrumb-option">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="breadcrumb__text">
                    <h4>Pembayaran</h4>

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

                    <div class="col-lg-12 col-md-6">
                        <div class="checkout__order">
                            <center>
                                <h4><b>Menunggu Pemabayaran</b></h4>
                                <li style="list-style: none; font-size:15px;color:black">Total yang harus dibayar</li>
                                <li style="list-style: none; font-size:15px; color:black"><b>Rp. 215.000</b></li>
                                <li style="list-style: none; font-size:15px; color:black">Jatuh tempo pada 9 Oktober 2024, 15.53</li>
                            </center>
                            <li style="list-style: none; font-size:15px; color:black"> <img src="assets/img/checkout/LOGO-BNI.png" style="height:20px" alt="">&nbsp; BANK BNI</li>
                            <li style="list-style: none; font-size:15px; color:black">No. Virtual Account:</li>
                            <li style="list-style: none; font-size:15px; color:black"><b>XXXX XXXX XXXX XXXX</b></li>

                        </div>
                    </div>
                    <div class="col-lg-12 col-md-6">
                        <div class="checkout__order" style="margin-top:20px">
                            <h5 class="order__title">Petunjuk Transfer</h5>

                            <h6><b>Transfer Mbanking</b></h6>
                            <li style="list-style: none; font-size:15px; color:black">1.&nbsp; Pilih m-Transfer > BCA Virtual Account</li>
                            <li style="list-style: none; font-size:15px; color:black">2.&nbsp; Masukkan nomor Virtual Account 123 1234 1234 1234 dan pilih Send</li>
                            <li style="list-style: none; font-size:15px; color:black">3.&nbsp; Periksa informasi yang tertera pada layar. pastikan Merchant adalah Butik Orlin, Total tagihan sudah benar dan username telah benar. jika benar pilih Ya</li>
                            <li style="list-style: none; font-size:15px; color:black">4.&nbsp; Masukkan PIN m-BCA anda dan pilih OK</li>
                            <li style="list-style: none; font-size:15px; color:black">5.&nbsp; Jika muncul notifikasi “Transaksi Gagal”. Nominal melebihi limit harian”, mohon ulangi transaksi menggunakan klikBCA atau ATM</li>

                            <br>
                            <h6 style=""><b>Transfer ATM</b></h6>
                            <li style="list-style: none; font-size:15px; color:black">1.&nbsp; Masukkan Kartu ATM</li>
                            <li style="list-style: none; font-size:15px; color:black">2.&nbsp; Masukkan PIN ATM BNI</li>
                            <li style="list-style: none; font-size:15px; color:black">3.&nbsp; Pilih menu menu lainnya>transfer</li>
                            <li style="list-style: none; font-size:15px; color:black">4.&nbsp; Pilih jenis rekening yang digunakan, pilih Virtual Account Billing</li>
                            <li style="list-style: none; font-size:15px; color:black">5.&nbsp; Masukkan nomor BNI Virtual Account 1234 1234 1234 1234 dan pilih Benar</li>
                            <li style="list-style: none; font-size:15px; color:black">5.&nbsp; Periksa detail transaksi yang ada pada layar, jika sudah benar pilih Ya</li>
                            <li style="list-style: none; font-size:15px; color:black">5.&nbsp; Transaksi selesai</li>


                        </div>
                    </div>
                {{-- </div> --}}
            </form>
        </div>
    </div>
</section>
@endsection
