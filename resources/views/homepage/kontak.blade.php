@extends('layouts.main')

@section('content')
<section class="breadcrumb-option">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="breadcrumb__text">
                    <h4>Kontak</h4>
                    <div class="breadcrumb__links">
                        <a href="{{route('index')}}">Beranda</a>

                        <span>Kontak</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<div class="map">
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d213721.42393177666!2d112.66327656325625!3d-7.468280865754578!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd7e1a0848edcbf%3A0x3027a76e352bdf0!2sSidoarjo%20Regency%2C%20East%20Java!5e0!3m2!1sen!2sid!4v1710693256674!5m2!1sen!2sid" width="600" height="450" style="border:0; margin-top:20px" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
    {{-- <iframe src="" height="400" style="border:0; margin-top:10px" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe> --}}
</div>
<section class="contact spad">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-md-6">
                <div class="contact__text">
                    <div class="section-title">
                        <span>Informasi</span>
                        <h2>Kontak Kami</h2>
                        <p>Apakah Anda memiliki pertanyaan, masukan, atau butuh bantuan?
                            Tidak perlu ragu untuk menghubungi kami. Kami siap membantu Anda dengan senang hati.</p>
                    </div>
                    <ul>
                        <li>
                            <h4>Sidoarjo</h4>
                            <p>Perum The Taman Dhika Blok J-27, Buduran<br />+62 81232355887</p>
                        </li>

                    </ul>
                </div>
            </div>
            <div class="col-lg-6 col-md-6">
                <div class="contact__form">
                    <form action="#">
                        <div class="row">
                            <div class="col-lg-6">
                                <input type="text" placeholder="Nama">
                            </div>
                            <div class="col-lg-6">
                                <input type="text" placeholder="Email">
                            </div>
                            <div class="col-lg-12">
                                <textarea placeholder="Pesan"></textarea>
                                <button type="submit" class="site-btn">Kirim Pesan</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection

