@extends('template.app')

@section('content')
    <!-- .site-mobile-menu -->

    <div class="site-blocks-cover inner-page-cover overlay" style="background-image: url('{{ asset('assets/images/himasti.JPG') }}')"
        data-aos="fade" data-stellar-background-ratio="0.5" data-aos="fade">
        <div class="container">
            <div class="row align-items-center justify-content-center">
                <div class="col-md-7 text-center" data-aos="fade-up" data-aos-delay="400">
                    <h1 class="text-white">Kepengurusan</h1>
                </div>
            </div>
        </div>
    </div>

    {{-- filter --}}

    <form method="" class="container mt-5">
        <h2>Kepengurusan 2021</h2>

        <div class="form-group">
            <label for="tahun-select">Pilih Tahun Kepengurusan :</label>
            <select class="form-control" id="tahun-select" name="tahun-select">
                <option value="option1">Tahun Kepengurusan 2019 / 2020</option>
                <option value="option2">Tahun Kepengususan 2020 / 2021</option>
                <option value="option3">Tahun Kepengurusan 2021 / 2022</option>
            </select>
        </div>      

        <div class="form-group">
            <label for="divisi-select">Pilih Divisi :</label>
            <select class="form-control" id="divisi-select" name="divisi-select">
                <option value="option1">Semua Divisi</option>
                <option value="option2">Divisi Riset dan Teknologi</option>
                <option value="option3">Divisi Komunikasi dan Informasi</option>
                <option value="option4">Divisi Pendidikan</option>
                <option value="option5">Divisi Dana dan Usaha</option>
                <option value="option6">Divisi Minat dan Bakat</option>
                <option value="option7">Divisi Hubungan Masyarakat</option>
            </select>
        </div>  
        <button class="btn btn-primary" type="submit">Temukan</button>    
    </form>

    {{-- filter --}}

    <div class="site-section">
        <div class="container">
            <div class="row">
                <div class="site-section-heading text-center mb-5 w-border col-md-6 mx-auto">
                    <h2 class="mb-5">Badan Pengurus Harian</h2>
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eveniet,
                        fugit nam obcaecati fuga itaque deserunt officia, error reiciendis
                        ab quod?
                    </p>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-md-6 col-lg-3 mb-5" data-aos="fade-up" data-aos-delay="100">
                    <a href="apartment-detail.html" class="unit-9">
                        <div class="image" style="background-image: url('assets/images/rafael.png')"></div>
                        <div class="unit-9-content">
                            <h2>Ketua</h2>
                            <span>Lorem ipsum</span>
                        </div>
                    </a>
                </div>

                <div class="col-md-6 col-lg-3 mb-5" data-aos="fade-up" data-aos-delay="100">
                    <a href="apartment-detail.html" class="unit-9">
                        <div class="image" style="background-image: url('assets/images/rafael.png')"></div>
                        <div class="unit-9-content">
                            <h2>Wakil Ketua</h2>
                            <span>Lorem ipsum</span>
                            <!-- <span>with Wendy Matos</span> -->
                        </div>
                    </a>
                </div>

                <div class="col-md-6 col-lg-3 mb-5" data-aos="fade-up" data-aos-delay="100">
                    <a href="apartment-detail.html" class="unit-9">
                        <div class="image" style="background-image: url('assets/images/rafael.png')"></div>
                        <div class="unit-9-content">
                            <h2>Sekretaris</h2>
                            <span>Lorem ipsum</span>
                            <!-- <span>with Wendy Matos</span> -->
                        </div>
                    </a>
                </div>

                <div class="col-md-6 col-lg-3 mb-5" data-aos="fade-up" data-aos-delay="100">
                    <a href="apartment-detail.html" class="unit-9">
                        <div class="image" style="background-image: url('assets/images/rafael.png')"></div>
                        <div class="unit-9-content">
                            <h2>Bendahara</h2>
                            <span>Lorem ipsum</span>
                            <!-- <span>with Wendy Matos</span> -->
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </div>

    <div class="site-section">
        <div class="container">
            <div class="row">
                <div class="site-section-heading text-center mb-5 w-border col-md-6 mx-auto">
                    <h2 class="mb-5">Divisi Ristek</h2>
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eveniet,
                        fugit nam obcaecati fuga itaque deserunt officia, error reiciendis
                        ab quod?
                    </p>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-md-6 col-lg-3 mb-5" data-aos="fade-up" data-aos-delay="100">
                    <a href="apartment-detail.html" class="unit-9">
                        <div class="image" style="background-image: url('assets/images/rafael.png')"></div>
                        <div class="unit-9-content">
                            <h2>Ketua</h2>
                            <span>Lorem ipsum</span>
                            <!-- <span>with Wendy Matos</span> -->
                        </div>
                    </a>
                </div>

                <div class="col-md-6 col-lg-3 mb-5" data-aos="fade-up" data-aos-delay="100">
                    <a href="apartment-detail.html" class="unit-9">
                        <div class="image" style="background-image: url('assets/images/rafael.png')"></div>
                        <div class="unit-9-content">
                            <h2>Wakil Ketua</h2>
                            <span>Lorem ipsum</span>
                            <!-- <span>with Wendy Matos</span> -->
                        </div>
                    </a>
                </div>
            </div>

            <div class="row justify-content-center">
                <div class="col-md-6 col-lg-3 mb-5" data-aos="fade-up" data-aos-delay="100">
                    <a href="apartment-detail.html" class="unit-9">
                        <div class="image" style="background-image: url('assets/images/rafael.png')"></div>
                        <div class="unit-9-content">
                            <h2>Anggota</h2>
                            <span>Lorem ipsum</span>
                            <!-- <span>with Wendy Matos</span> -->
                        </div>
                    </a>
                </div>

                <div class="col-md-6 col-lg-3 mb-5" data-aos="fade-up" data-aos-delay="100">
                    <a href="apartment-detail.html" class="unit-9">
                        <div class="image" style="background-image: url('assets/images/rafael.png')"></div>
                        <div class="unit-9-content">
                            <h2>Anggota</h2>
                            <span>Lorem ipsum</span>
                            <!-- <span>with Wendy Matos</span> -->
                        </div>
                    </a>
                </div>

                <div class="col-md-6 col-lg-3 mb-5" data-aos="fade-up" data-aos-delay="100">
                    <a href="apartment-detail.html" class="unit-9">
                        <div class="image" style="background-image: url('assets/images/rafael.png')"></div>
                        <div class="unit-9-content">
                            <h2>Anggota</h2>
                            <span>Lorem ipsum</span>
                            <!-- <span>with Wendy Matos</span> -->
                        </div>
                    </a>
                </div>

                <div class="col-md-6 col-lg-3 mb-5" data-aos="fade-up" data-aos-delay="100">
                    <a href="apartment-detail.html" class="unit-9">
                        <div class="image" style="background-image: url('assets/images/rafael.png')"></div>
                        <div class="unit-9-content">
                            <h2>Anggota</h2>
                            <span>Lorem ipsum</span>
                            <!-- <span>with Wendy Matos</span> -->
                        </div>
                    </a>
                </div>

                
            </div>
            <div class="d-flex justify-content-center">
                <a href="{{ route('detailkepengurusan') }}" class="btn btn-primary px-4 py-3">Selengkapnya</a>
            </div>
            
        </div>
    </div>

    <div class="site-section">
        <div class="container">
            <div class="row">
                <div class="site-section-heading text-center mb-5 w-border col-md-6 mx-auto">
                    <h2 class="mb-5">Divisi Kominfo</h2>
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eveniet,
                        fugit nam obcaecati fuga itaque deserunt officia, error reiciendis
                        ab quod?
                    </p>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-md-6 col-lg-3 mb-5" data-aos="fade-up" data-aos-delay="100">
                    <a href="apartment-detail.html" class="unit-9">
                        <div class="image" style="background-image: url('assets/images/rafael.png')"></div>
                        <div class="unit-9-content">
                            <h2>Ketua</h2>
                            <span>Lorem ipsum</span>
                            <!-- <span>with Wendy Matos</span> -->
                        </div>
                    </a>
                </div>

                <div class="col-md-6 col-lg-3 mb-5" data-aos="fade-up" data-aos-delay="100">
                    <a href="apartment-detail.html" class="unit-9">
                        <div class="image" style="background-image: url('assets/images/rafael.png')"></div>
                        <div class="unit-9-content">
                            <h2>Wakil Ketua</h2>
                            <span>Lorem ipsum</span>
                            <!-- <span>with Wendy Matos</span> -->
                        </div>
                    </a>
                </div>
            </div>

            <div class="row justify-content-center">
                <div class="col-md-6 col-lg-3 mb-5" data-aos="fade-up" data-aos-delay="100">
                    <a href="apartment-detail.html" class="unit-9">
                        <div class="image" style="background-image: url('assets/images/rafael.png')"></div>
                        <div class="unit-9-content">
                            <h2>Anggota</h2>
                            <span>Lorem ipsum</span>
                            <!-- <span>with Wendy Matos</span> -->
                        </div>
                    </a>
                </div>

                <div class="col-md-6 col-lg-3 mb-5" data-aos="fade-up" data-aos-delay="100">
                    <a href="apartment-detail.html" class="unit-9">
                        <div class="image" style="background-image: url('assets/images/rafael.png')"></div>
                        <div class="unit-9-content">
                            <h2>Anggota</h2>
                            <span>Lorem ipsum</span>
                            <!-- <span>with Wendy Matos</span> -->
                        </div>
                    </a>
                </div>

                <div class="col-md-6 col-lg-3 mb-5" data-aos="fade-up" data-aos-delay="100">
                    <a href="apartment-detail.html" class="unit-9">
                        <div class="image" style="background-image: url('assets/images/rafael.png')"></div>
                        <div class="unit-9-content">
                            <h2>Anggota</h2>
                            <span>Lorem ipsum</span>
                            <!-- <span>with Wendy Matos</span> -->
                        </div>
                    </a>
                </div>

                <div class="col-md-6 col-lg-3 mb-5" data-aos="fade-up" data-aos-delay="100">
                    <a href="apartment-detail.html" class="unit-9">
                        <div class="image" style="background-image: url('assets/images/rafael.png')"></div>
                        <div class="unit-9-content">
                            <h2>Anggota</h2>
                            <span>Lorem ipsum</span>
                            <!-- <span>with Wendy Matos</span> -->
                        </div>
                    </a>
                </div>
            </div>
            <div class="d-flex justify-content-center">
                <a href="{{ route('detailkepengurusan') }}" class="btn btn-primary px-4 py-3">Selengkapnya</a>
            </div>
        </div>
    </div>

    <div class="site-section">
        <div class="container">
            <div class="row">
                <div class="site-section-heading text-center mb-5 w-border col-md-6 mx-auto">
                    <h2 class="mb-5">Divisi Pendidikan</h2>
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eveniet,
                        fugit nam obcaecati fuga itaque deserunt officia, error reiciendis
                        ab quod?
                    </p>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-md-6 col-lg-3 mb-5" data-aos="fade-up" data-aos-delay="100">
                    <a href="apartment-detail.html" class="unit-9">
                        <div class="image" style="background-image: url('assets/images/rafael.png')"></div>
                        <div class="unit-9-content">
                            <h2>Ketua</h2>
                            <span>Lorem ipsum</span>
                            <!-- <span>with Wendy Matos</span> -->
                        </div>
                    </a>
                </div>

                <div class="col-md-6 col-lg-3 mb-5" data-aos="fade-up" data-aos-delay="100">
                    <a href="apartment-detail.html" class="unit-9">
                        <div class="image" style="background-image: url('assets/images/rafael.png')"></div>
                        <div class="unit-9-content">
                            <h2>Wakil Ketua</h2>
                            <span>Lorem ipsum</span>
                            <!-- <span>with Wendy Matos</span> -->
                        </div>
                    </a>
                </div>
            </div>

            <div class="row justify-content-center">
                <div class="col-md-6 col-lg-3 mb-5" data-aos="fade-up" data-aos-delay="100">
                    <a href="apartment-detail.html" class="unit-9">
                        <div class="image" style="background-image: url('assets/images/rafael.png')"></div>
                        <div class="unit-9-content">
                            <h2>Anggota</h2>
                            <span>Lorem ipsum</span>
                            <!-- <span>with Wendy Matos</span> -->
                        </div>
                    </a>
                </div>

                <div class="col-md-6 col-lg-3 mb-5" data-aos="fade-up" data-aos-delay="100">
                    <a href="apartment-detail.html" class="unit-9">
                        <div class="image" style="background-image: url('assets/images/rafael.png')"></div>
                        <div class="unit-9-content">
                            <h2>Anggota</h2>
                            <span>Lorem ipsum</span>
                            <!-- <span>with Wendy Matos</span> -->
                        </div>
                    </a>
                </div>

                <div class="col-md-6 col-lg-3 mb-5" data-aos="fade-up" data-aos-delay="100">
                    <a href="apartment-detail.html" class="unit-9">
                        <div class="image" style="background-image: url('assets/images/rafael.png')"></div>
                        <div class="unit-9-content">
                            <h2>Anggota</h2>
                            <span>Lorem ipsum</span>
                            <!-- <span>with Wendy Matos</span> -->
                        </div>
                    </a>
                </div>

                <div class="col-md-6 col-lg-3 mb-5" data-aos="fade-up" data-aos-delay="100">
                    <a href="apartment-detail.html" class="unit-9">
                        <div class="image" style="background-image: url('assets/images/rafael.png')"></div>
                        <div class="unit-9-content">
                            <h2>Anggota</h2>
                            <span>Lorem ipsum</span>
                            <!-- <span>with Wendy Matos</span> -->
                        </div>
                    </a>
                </div>
            </div>

            <div class="d-flex justify-content-center">
                <a href="{{ route('detailkepengurusan') }}" class="btn btn-primary px-4 py-3">Selengkapnya</a>
            </div>
        </div>
    </div>

    <div class="site-section">
        <div class="container">
            <div class="row">
                <div class="site-section-heading text-center mb-5 w-border col-md-6 mx-auto">
                    <h2 class="mb-5">Divisi Dana & Usaha</h2>
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eveniet,
                        fugit nam obcaecati fuga itaque deserunt officia, error reiciendis
                        ab quod?
                    </p>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-md-6 col-lg-3 mb-5" data-aos="fade-up" data-aos-delay="100">
                    <a href="apartment-detail.html" class="unit-9">
                        <div class="image" style="background-image: url('assets/images/rafael.png')"></div>
                        <div class="unit-9-content">
                            <h2>Ketua</h2>
                            <span>Lorem ipsum</span>
                            <!-- <span>with Wendy Matos</span> -->
                        </div>
                    </a>
                </div>

                <div class="col-md-6 col-lg-3 mb-5" data-aos="fade-up" data-aos-delay="100">
                    <a href="apartment-detail.html" class="unit-9">
                        <div class="image" style="background-image: url('assets/images/rafael.png')"></div>
                        <div class="unit-9-content">
                            <h2>Wakil Ketua</h2>
                            <span>Lorem ipsum</span>
                            <!-- <span>with Wendy Matos</span> -->
                        </div>
                    </a>
                </div>
            </div>

            <div class="row justify-content-center">
                <div class="col-md-6 col-lg-3 mb-5" data-aos="fade-up" data-aos-delay="100">
                    <a href="apartment-detail.html" class="unit-9">
                        <div class="image" style="background-image: url('assets/images/rafael.png')"></div>
                        <div class="unit-9-content">
                            <h2>Anggota</h2>
                            <span>Lorem ipsum</span>
                            <!-- <span>with Wendy Matos</span> -->
                        </div>
                    </a>
                </div>

                <div class="col-md-6 col-lg-3 mb-5" data-aos="fade-up" data-aos-delay="100">
                    <a href="apartment-detail.html" class="unit-9">
                        <div class="image" style="background-image: url('assets/images/rafael.png')"></div>
                        <div class="unit-9-content">
                            <h2>Anggota</h2>
                            <span>Lorem ipsum</span>
                            <!-- <span>with Wendy Matos</span> -->
                        </div>
                    </a>
                </div>

                <div class="col-md-6 col-lg-3 mb-5" data-aos="fade-up" data-aos-delay="100">
                    <a href="apartment-detail.html" class="unit-9">
                        <div class="image" style="background-image: url('assets/images/rafael.png')"></div>
                        <div class="unit-9-content">
                            <h2>Anggota</h2>
                            <span>Lorem ipsum</span>
                            <!-- <span>with Wendy Matos</span> -->
                        </div>
                    </a>
                </div>

                <div class="col-md-6 col-lg-3 mb-5" data-aos="fade-up" data-aos-delay="100">
                    <a href="apartment-detail.html" class="unit-9">
                        <div class="image" style="background-image: url('assets/images/rafael.png')"></div>
                        <div class="unit-9-content">
                            <h2>Anggota</h2>
                            <span>Lorem ipsum</span>
                            <!-- <span>with Wendy Matos</span> -->
                        </div>
                    </a>
                </div>
            </div>
            <div class="d-flex justify-content-center">
                <a href="{{ route('detailkepengurusan') }}" class="btn btn-primary px-4 py-3">Selengkapnya</a>
            </div>
        </div>
    </div>

    <div class="site-section">
        <div class="container">
            <div class="row">
                <div class="site-section-heading text-center mb-5 w-border col-md-6 mx-auto">
                    <h2 class="mb-5">Divisi Minat & Bakat</h2>
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eveniet,
                        fugit nam obcaecati fuga itaque deserunt officia, error reiciendis
                        ab quod?
                    </p>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-md-6 col-lg-3 mb-5" data-aos="fade-up" data-aos-delay="100">
                    <a href="apartment-detail.html" class="unit-9">
                        <div class="image" style="background-image: url('assets/images/rafael.png')"></div>
                        <div class="unit-9-content">
                            <h2>Ketua</h2>
                            <span>Lorem ipsum</span>
                            <!-- <span>with Wendy Matos</span> -->
                        </div>
                    </a>
                </div>

                <div class="col-md-6 col-lg-3 mb-5" data-aos="fade-up" data-aos-delay="100">
                    <a href="apartment-detail.html" class="unit-9">
                        <div class="image" style="background-image: url('assets/images/rafael.png')"></div>
                        <div class="unit-9-content">
                            <h2>Wakil Ketua</h2>
                            <span>Lorem ipsum</span>
                            <!-- <span>with Wendy Matos</span> -->
                        </div>
                    </a>
                </div>
            </div>

            <div class="row justify-content-center">
                <div class="col-md-6 col-lg-3 mb-5" data-aos="fade-up" data-aos-delay="100">
                    <a href="apartment-detail.html" class="unit-9">
                        <div class="image" style="background-image: url('assets/images/rafael.png')"></div>
                        <div class="unit-9-content">
                            <h2>Anggota</h2>
                            <span>Lorem ipsum</span>
                            <!-- <span>with Wendy Matos</span> -->
                        </div>
                    </a>
                </div>

                <div class="col-md-6 col-lg-3 mb-5" data-aos="fade-up" data-aos-delay="100">
                    <a href="apartment-detail.html" class="unit-9">
                        <div class="image" style="background-image: url('assets/images/rafael.png')"></div>
                        <div class="unit-9-content">
                            <h2>Anggota</h2>
                            <span>Lorem ipsum</span>
                            <!-- <span>with Wendy Matos</span> -->
                        </div>
                    </a>
                </div>

                <div class="col-md-6 col-lg-3 mb-5" data-aos="fade-up" data-aos-delay="100">
                    <a href="apartment-detail.html" class="unit-9">
                        <div class="image" style="background-image: url('assets/images/rafael.png')"></div>
                        <div class="unit-9-content">
                            <h2>Anggota</h2>
                            <span>Lorem ipsum</span>
                            <!-- <span>with Wendy Matos</span> -->
                        </div>
                    </a>
                </div>

                <div class="col-md-6 col-lg-3 mb-5" data-aos="fade-up" data-aos-delay="100">
                    <a href="apartment-detail.html" class="unit-9">
                        <div class="image" style="background-image: url('assets/images/rafael.png')"></div>
                        <div class="unit-9-content">
                            <h2>Anggota</h2>
                            <span>Lorem ipsum</span>
                            <!-- <span>with Wendy Matos</span> -->
                        </div>
                    </a>
                </div>
            </div>
            <div class="d-flex justify-content-center">
                <a href="{{ route('detailkepengurusan') }}" class="btn btn-primary px-4 py-3">Selengkapnya</a>
            </div>
        </div>
    </div>

    <div class="site-section">
        <div class="container">
            <div class="row">
                <div class="site-section-heading text-center mb-5 w-border col-md-6 mx-auto">
                    <h2 class="mb-5">Divisi Humas</h2>
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eveniet,
                        fugit nam obcaecati fuga itaque deserunt officia, error reiciendis
                        ab quod?
                    </p>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-md-6 col-lg-3 mb-5" data-aos="fade-up" data-aos-delay="100">
                    <a href="apartment-detail.html" class="unit-9">
                        <div class="image" style="background-image: url('assets/images/rafael.png')"></div>
                        <div class="unit-9-content">
                            <h2>Ketua</h2>
                            <span>Lorem ipsum</span>
                            <!-- <span>with Wendy Matos</span> -->
                        </div>
                    </a>
                </div>

                <div class="col-md-6 col-lg-3 mb-5" data-aos="fade-up" data-aos-delay="100">
                    <a href="apartment-detail.html" class="unit-9">
                        <div class="image" style="background-image: url('assets/images/rafael.png')"></div>
                        <div class="unit-9-content">
                            <h2>Wakil Ketua</h2>
                            <span>Lorem ipsum</span>
                            <!-- <span>with Wendy Matos</span> -->
                        </div>
                    </a>
                </div>
            </div>

            <div class="row justify-content-center">
                <div class="col-md-6 col-lg-3 mb-5" data-aos="fade-up" data-aos-delay="100">
                    <a href="apartment-detail.html" class="unit-9">
                        <div class="image" style="background-image: url('assets/images/rafael.png')"></div>
                        <div class="unit-9-content">
                            <h2>Anggota</h2>
                            <span>Lorem ipsum</span>
                            <!-- <span>with Wendy Matos</span> -->
                        </div>
                    </a>
                </div>

                <div class="col-md-6 col-lg-3 mb-5" data-aos="fade-up" data-aos-delay="100">
                    <a href="apartment-detail.html" class="unit-9">
                        <div class="image" style="background-image: url('assets/images/rafael.png')"></div>
                        <div class="unit-9-content">
                            <h2>Anggota</h2>
                            <span>Lorem ipsum</span>
                            <!-- <span>with Wendy Matos</span> -->
                        </div>
                    </a>
                </div>

                <div class="col-md-6 col-lg-3 mb-5" data-aos="fade-up" data-aos-delay="100">
                    <a href="apartment-detail.html" class="unit-9">
                        <div class="image" style="background-image: url('assets/images/rafael.png')"></div>
                        <div class="unit-9-content">
                            <h2>Anggota</h2>
                            <span>Lorem ipsum</span>
                            <!-- <span>with Wendy Matos</span> -->
                        </div>
                    </a>
                </div>

                <div class="col-md-6 col-lg-3 mb-5" data-aos="fade-up" data-aos-delay="100">
                    <a href="apartment-detail.html" class="unit-9">
                        <div class="image" style="background-image: url('assets/images/rafael.png')"></div>
                        <div class="unit-9-content">
                            <h2>Anggota</h2>
                            <span>Lorem ipsum</span>
                            <!-- <span>with Wendy Matos</span> -->
                        </div>
                    </a>
                </div>
            </div>
            <div class="d-flex justify-content-center">
                <a href="{{ route('detailkepengurusan') }}" class="btn btn-primary px-4 py-3">Selengkapnya</a>
            </div>
        </div>
    </div>
@endsection