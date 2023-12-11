

@extends('template.app')
@section('content')
    <!-- .site-mobile-menu -->

    <style>
        .hover-effect:hover {
            transform: scale(1.015);
        }

        .hover-effect {
            transition: 0.3s; 
            box-shadow: rgba(100, 100, 111, 0.2) 0px 7px 29px 0px;
        }
    </style>

    <div class="site-blocks-cover inner-page-cover overlay" style="background-image: url('{{ asset('assets/images/himasti.JPG') }}')"
        data-aos="fade" data-stellar-background-ratio="0.5" data-aos="fade">
        <div class="container">
            <div class="row align-items-center justify-content-center">
                <div class="col-md-7 text-center" data-aos="fade-up" data-aos-delay="400">
                    <h1 class="text-white">About Us</h1>
                    <p class="text-white">Himpunan Mahasiswa Sarjana Informatika</p>
                </div>
            </div>
        </div>
    </div>

    <div class="site-section mt-5">
        <div class="container" data-aos="fade-up">
            <div class="row justify-content-center">
                <div class="site-section-heading text-center m-3 w-border col-md-10 mx-auto">
                    <h2 class="mb-5">HIMASTI</h2>
                    <p>
                        Himpunan mahasiswa sarjana Informatika (HIMASTI) adalah salah satu himpunan mahasiswa dari tiga himpunan yang berada di Fakultas Informatika dan Teknik Elektro pada
                        Institut Teknologi Del.
                    </p>
                </div>
            </div>
        </div>
    </div>

    <div class="site-section">
        <div class="container" data-aos="fade-up">
            <div class="row justify-content-center">
                <div class="site-section-heading text-center m-3 w-border col-md-10 mx-auto">
                    <h2 class="mb-5">SEJARAH</h2>
                    <p>
                        Program Studi S1 Teknik Informatika merupakan salah satu dari 3
                        (empat) program studi di bawah Fakultas Teknik Informatika dan
                        Elektro di Institut Teknologi Del. Prodi S1 Informatika ini di
                        rancang sejak tahun 2013 dan beroperasi pada tahun 2014 bersama
                        dengan 2 prodi lainnya yaitu prodi S1 Teknik Elektro dan S1 Sistem
                        Informasi. Ketiga prodi ini tergabung dalam 1 fakultas yaitu FITE
                        (Fakultas Teknik Elektro dan Informatika). Fakultas ini berdiri
                        pada tahun 2013 seiring dengan perubahan Politeknik Informatika
                        Del (PI Del) menjadi Institut Teknologi Del (IT Del).
                    </p>
                </div>
            </div>
        </div>
    </div>

    <div class="site-section">
        <div class="container" data-aos="fade-up">
            <div class="row justify-content-center">
                <div class="site-section-heading text-center m-3 w-border col-md-10 mx-auto">
                    <h2 class="mb-5">VISI</h2>
                    <p>
                        Menjadikan HIMASTI sebagai wadah dan sarana untuk menyalurkan minat dan bakat dalam bidang Informatika serta mengoptimalkan kinerja kerjasama antar anggota
                    </p>
                </div>
            </div>
        </div>
    </div>

    <div class="site-section mb-5">
        <div class="container" data-aos="fade-up">
            <div class="row justify-content-center">
                <div class="site-section-heading mb-5 text-center m-3 w-border col-md-10 mx-auto" data-aos="fade-up">
                    <h2 class="mb-5">MISI</h2>
                    <div class="text-justify">
                        <div class="d-flex align-items-center rounded p-3 mb-4 hover-effect">
                            <div class="pr-3">&#129066;</div>
                            <div>
                                Menciptakan kepengurusan yang aktif dan menjalankan hak dan kewajiban yang bertanggung jawab
                            </div>
                        </div>
                        <div class="d-flex align-items-center rounded p-3 mb-4 hover-effect">
                            <div class="pr-3">&#129066;</div>
                            <div>
                                Menampung dan mendukung dalam menyampaikan aspirasi oleh sesama anggota
                            </div>
                        </div>
                        <div class="d-flex align-items-center rounded p-3 mb-4 hover-effect">
                            <div class="pr-3">&#129066;</div>
                            <div>
                                Mengadakan kegiatan yang bermanfaat dan mendukung tumbuhnya rasa kekeluargaan antar sesama anggota    
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
