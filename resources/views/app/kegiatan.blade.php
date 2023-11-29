@extends('template.app')
@section('content')
    <div class="site-blocks-cover inner-page-cover overlay" style="background-image: url('{{ asset('assets/images/himasti.JPG') }}')" data-aos="fade"
        data-stellar-background-ratio="0.5" data-aos="fade">
        <div class="container">
            <div class="row align-items-center justify-content-center">
                <div class="col-md-7 text-center" data-aos="fade-up" data-aos-delay="400">
                    <h1 class="text-white">Kegiatan</h1>
                </div>
            </div>
        </div>
    </div>

    <div class="site-section">
        <div class="container">
            <div class="row">
                <div class="col-md-6 co.l-lg-4 mb-5" data-aos="fade-up" data-aos-delay="100">
                    <a href="single.html"><img src={{ asset('assets/images/temu22.jpg')}} alt="Image" class="img-fluid" /></a>
                    <div class="p-4 bg-white">
                        <span class="d-block text-secondary small text-uppercase">Feb 11th, 2023</span>
                        <h2 class="h5 text-black mb-3">
                            <a href="single.html">Welcoming Party untuk Angkatan 2022</a>
                        </h2>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 mb-5" data-aos="fade-up" data-aos-delay="200">
                    <a href="single.html"><img src={{ asset('assets/images/temu22.jpg') }} class="img-fluid" /></a>
                    <div class="p-4 bg-white">
                        <span class="d-block text-secondary small text-uppercase">Nov 18th, 2023</span>
                        <h2 class="h5 text-black mb-3">
                            <a href="single.html">Temu Ramah Angkatan 2022 dengan 2023</a>
                        </h2>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 mb-5" data-aos="fade-up" data-aos-delay="300">
                    <a href="single.html"><img src={{ asset('assets/images/temu22.jpg') }} alt="Image" class="img-fluid" /></a>
                    <div class="p-4 bg-white">
                        <span class="d-block text-secondary small text-uppercase">Okt 28th, 2023</span>
                        <h2 class="h5 text-black mb-3">
                            <a href="single.html">Temu Ramah Angkatan 2021 dengan 2023</a>
                        </h2>
                    </div>
                </div>

                <div class="col-md-6 col-lg-4 mb-5" data-aos="fade-up" data-aos-delay="100">
                    <a href="single.html"><img src={{ asset('assets/images/temu22.JPG') }} alt="Image" class="img-fluid" /></a>
                    <div class="p-4 bg-white">
                        <span class="d-block text-secondary small text-uppercase">Apr 10th, 2023</span>
                        <h2 class="h5 text-black mb-3">
                            <a href="single.html">KM CUP</a>
                        </h2>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 mb-5" data-aos="fade-up" data-aos-delay="200">
                    <a href="single.html"><img src={{ asset('assets/images/temu22.jpg')}} alt="Image" class="img-fluid" /></a>
                    <div class="p-4 bg-white">
                        <span class="d-block text-secondary small text-uppercase">Okt 24th, 2023</span>
                        <h2 class="h5 text-black mb-3">
                            <a href="single.html">KPU HIMASTI 2023/2024</a>
                        </h2>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 mb-5" data-aos="fade-up" data-aos-delay="300">
                    <a href="single.html"><img src={{ asset('assets/images/temu22.jpg') }} class="img-fluid" /></a>
                    <div class="p-4 bg-white">
                        <span class="d-block text-secondary small text-uppercase">Sept 16th, 2023</span>
                        <h2 class="h5 text-black mb-3">
                            <a href="single.html">Sharing Knowledge 2023</a>
                        </h2>
                    </div>
                </div>
            </div>
        </div>

        <div class="container mt-5" data-aos="fade-up">
            <div class="row">
                <div class="col-md-12 text-center">
                    <div class="site-block-27">
                        <ul>
                            <li><a href="#">&lt;</a></li>
                            <li class="active"><span>1</span></li>
                            <li><a href="#">2</a></li>
                            <li><a href="#">3</a></li>
                            <li><a href="#">4</a></li>
                            <li><a href="#">5</a></li>
                            <li><a href="#">&gt;</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
