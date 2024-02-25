@extends('layouts.app')
@section('content')

    <head>
        <link href="{{ asset('style/style.css') }}" rel="stylesheet">
    </head>

    <body>
        <div id="carouselExample" class="carousel slide">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="{{ asset('images/slide2.jpg') }}" class="d-block w-100" alt="...">
                    <div class="background-text position-absolute top-50 translate-middle-y ">
                        <h1 class="text-dark">Paroki Santo Mikael Semarang Indah</h1>
                        <p class="text-dark">Selamat Datang di Website Paroki Santo Mikael Semarang Indah</p>
                    </div>
                </div>
            </div>
        </div>
        {{-- content --}}
        <div class="kontent">
            <div class="background-image text-center">
                <h1 class="">Paroki Santo Mikael Semarang Indah</h1>
                <p class="">Selamat Datang di Website Paroki Santo Mikael Semarang Indah</p>
            </div>
        </div>
        {{-- information --}}
        <div class="info d-flex justify-content-center ">
            <div class="isi d-flex align-items-center gap-5 mt-2 mb-2">
                <div class="left-content w-1/2">
                    <img src="{{ asset('images/slide3.jpg') }}" alt="Gambar" class="p-1 img-rounded" width="500">
                </div>
                <div class="right-content w-1/2">
                    <div class="info-list text-center text-md-start">
                        <h2 class="text-center fw-bold mb-4">Jadwal Misa</h2>
                        <div class="d-flex gap-1 atas">
                            <span class="material-symbols-outlined">
                                calendar_month
                            </span>
                            <h5 class="fw-bold mb-2">Hari</h5>
                        </div>
                        <p>Sabtu & Minggu</p>
                    </div>
                    <div class="info-list text-center text-md-start">
                        <div class="d-flex gap-1 atas">
                            <span class="material-symbols-outlined">
                                schedule
                            </span>
                            <h5 class="fw-bold mb-2">Waktu</h5>
                        </div>
                        <p>Sabtu Pukul 17.00 WIB</p>
                        <p>Minggu Pukul 06.00 WIB & 17.00 WIB</p>
                    </div>
                    <div class="info-list text-center text-md-start">
                        <div class="d-flex gap-1 atas">
                            <span class="material-symbols-outlined">
                                location_on
                            </span>
                            <h5 class="fw-bold mb-2">Alamat</h5>
                        </div>
                        <p class="alamat-desktop">Perumahan Semarang Indah C2 No.19, Tawangmas, <br> Kec. Semarang Barat,
                            Kota Semarang, Jawa Tengah 50144</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="container mb-2">
            <div class="row ">
                <div class="col-md-6 mx-auto">
                    <h3 class="text-center fw-bold">Informasi Gereja</h3>
                    <p class="text-center">Informasi Gereja Santo Mikael Semarang Indah</p>
                </div>
            </div>
            <div class="row pt-3 content ">
                <div class="col-md-6">
                    <div class="left-content kiri mt-30">
                        <div class="d-flex align-items-center gap-2 kontak ">
                            <img src="{{ asset('images/email.webp') }}" width="35" alt="">
                            <h3 class="fs-4 text"><a href="mailto:email@example.com">Email</a></h3>
                        </div>
                        <p>Kirim email kepada kami untuk informasi lebih lanjut.</p>
                        <div class="d-flex align-items-center gap-2 kontak">
                            <img src="{{ asset('images/wa.png') }}" width="35" alt="">
                            <h3 class="fs-4 text"><a href="https://wa.me/phone-number">WhatsApp</a></h3>
                        </div>
                        <p>Hubungi kami melalui WhatsApp.</p>
                        <div class="d-flex align-items-center gap-2 kontak">
                            <img src="{{ asset('images/tlp.jpg') }}" width="35" alt="">
                            <h3 class="fs-4 text"><a href="tel:+1234567890">Nomor Telepon</a></h3>
                        </div>
                        <p>Telepon kami untuk konsultasi langsung.</p>
                        <div class="d-flex align-items-center gap-2 kontak">
                            <img src="{{ asset('images/yt.webp') }}" width="35" alt="">
                            <h3 class="fs-4 text"><a href="https://www.youtube.com/channel/your-channel">YouTube</a></h3>
                        </div>
                        <p>Subscribe ke channel YouTube kami.</p>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="right-content">
                        <img src={{ asset('images/Michael.png') }} alt="" width="350">
                    </div>
                </div>
            </div>
        </div>
    </body>
@endsection
