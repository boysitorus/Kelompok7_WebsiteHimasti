@extends('template.app')

@section('content')
    <div class="site-blocks-cover overlay" style="background-image: url({{ asset('assets/images/himasti.JPG') }});"
        data-aos="fade" data-stellar-background-ratio="0.5" data-aos="fade">
        <div class="container">
            <div class="row align-items-center justify-content-center">
                <div class="col-md-8 text-center" data-aos="fade-up" data-aos-delay="400">
                    <h1 class="mb-4">HIMPUNAN MAHASISWA
                        SARJANA INFORMATIKA</h1>
                    <p class="mb-5">Institut Teknologi Del</p>
                </div>
            </div>
        </div>
    </div>

    @if (isset($congrats) && sizeof($congrats) > 0)
        <div class="container">
            <div id="carousel-main-news" class="carousel slide" data-ride="carousel">
                <div class="carousel-inner" style="margin-top: -100px;">
                    @php
                        $flag = true;
                    @endphp
                    @foreach ($congrats as $congrat)
                        <div class="carousel-item {{ $flag ? 'active' : '' }}">
                            @php
                                $flag = false;
                            @endphp
                            <div class="featured-property-half d-flex">
                                <div class="image"
                                    style="background-image: url('{{ asset($congrat->picture) }}'); height: 600px;">
                                </div>
                                <div class="mt-5 text">
                                    <h2>Selamat!</h2>
                                    <p class="mb-5">
                                        {!! Str::substr($congrat->detail, 0, 185) !!} ....
                                    </p>

                                    <p><a href="{{ route('detailBerita', $congrat->id) }}"
                                            class="btn btn-primary px-4 py-3">Selengkapnya</a></p>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>

                <a class="carousel-control-prev" href="#carousel-main-news" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carousel-main-news" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>
        </div>
    @else
    @endif

    {{-- <div class="site-section bg-light">
        <div class="container">
            <div class="row">
                <div class="site-section-heading text-center mb-5 w-border col-md-6 mx-auto" data-aos="fade-up">
                    <h2 class="mb-5">Pengumuman</h2>

                </div>
            </div>
            <div class="row">
                <div class="col-md-6 col-lg-4 mb-4 mb-lg-0" data-aos="fade-up" data-aos-delay="100">
                    <a href="{{ route('detailBerita') }}"><img src="{{ asset('assets/images/meet23.jpg') }}" alt="Image"
                            class="img-fluid" /></a>
                    <div class="p-4 bg-white">
                        <span class="d-block text-secondary small text-uppercase">Oktober 28th, 2023</span>
                        <h2 class="h5 text-black mb-3">
                            <a class="text-blue" href="{{ route('detailBerita') }}">Acara Temu Ramah Angkatan 2023 dengan
                                Angkatan 2021, 2020 dan
                                2019</a>
                        </h2>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 mb-4 mb-lg-0" data-aos="fade-up" data-aos-delay="200">
                    <a href="{{ route('detailBerita') }}"><img src="{{ asset('assets/images/temu 19 18 dan 21.jpg') }}"
                            alt="Image" class="img-fluid" /></a>
                    <div class="p-4 bg-white">
                        <span class="d-block text-secondary small text-uppercase">October 1st, 2022</span>
                        <h2 class="h5 text-black mb-3">
                            <a class="text-blue" href="{{ route('detailBerita') }}">Acara Temu Ramah Angkatan 2021 dengan
                                Angkatan 2019, 2018 dan
                                2017</a>
                        </h2>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 mb-4 mb-lg-0" data-aos="fade-up" data-aos-delay="300">
                    <a href="{{ route('detailBerita') }}"><img src="{{ asset('assets/images/Welpar 2022.jpg') }}"
                            alt="Image" class="img-fluid" /></a>
                    <div class="p-4 bg-white">
                        <span class="d-block text-secondary small text-uppercase">Feb 11th, 2023</span>
                        <h2 class="h5 text-black mb-3">
                            <a class="text-blue" href="{{ route('detailBerita') }}">Kegiatan Welcoming Party Untuk Angkatan
                                2022</a>
                        </h2>
                    </div>
                </div>
            </div>
        </div>
    </div> --}}

    @if (isset($events) && sizeof($events) > 0)
        <div class="site-section bg-white block-13">
            <div class="container" data-aos="fade-up">
                <div class="row" style="margin-bottom:0">
                    <div class="site-section-heading text-center w-border col-md-6 mx-auto">
                        <h2>Berita Acara</h2>
                        <p>Berikut merupakan beberapa kegiatan yang sudah dilaksanakan:</p>
                    </div>
                </div>
                <div class="nonloop-block-13 owl-carousel">

                    @foreach ($events as $event)
                        <div class="p-3 p-md-5 bg-white mb-4 mb-lg-0" data-aos="fade-up" data-aos-delay="100">
                            <a href="{{ route('detailBerita', $event->id) }}"><img src="{{ asset($event->picture) }}" alt="Image"
                                    class="img-fluid" /></a>
                            <div class="p-4 bg-white">
                                <span class="d-block text-secondary small text-uppercase">{{ date('F d, Y', strtotime($event->date)) }}</span>
                                <h2 class="h5 text-black mb-3">
                                    <a class="text-blue" href="{{ route('detailBerita', $event->id) }}">{{ $event->title }}</a>
                                </h2>
                            </div>
                        </div>
                    @endforeach

                </div>
            </div>
        </div>
    @else
        <h2>belum ada events</h2>
    @endif


@endsection
