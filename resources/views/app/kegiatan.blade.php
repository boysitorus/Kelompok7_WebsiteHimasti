@extends('template.app')
@section('content')
    <div class="site-blocks-cover inner-page-cover overlay"
        style="background-image: url('{{ asset('assets/images/himasti.JPG') }}')" data-aos="fade"
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

                {{-- filter --}}

                <form method="GET" class="container mt-3 mb-5">
                    <h2 id="judul-kepengurusan">Proker Kepengurusan Tahun </h2>

                    <div class="form-group">
                        <label for="tahun-select">Pilih Tahun Kepengurusan :</label>
                        <select class="form-control" id="tahun-select" name="tahun-select">
                            @foreach ($yearsOptions as $option)
                                <option value="{{$option->year}}">Kepengurusan Tahun {{$option->year}}</option>
                            @endforeach

                            <!-- Tambahkan tahun-tahun berikutnya sesuai kebutuhan -->
                        </select>
                    </div>

                    <div class="form-group">
                        <label for="divisi-select">Pilih Divisi :</label>
                        <select class="form-control" id="divisi-select" name="divisi-select">
                            <option value="*">Semua Divisi</option>
                            @foreach ($divisionsOptions as $option)
                                <option value="{{$option->divisi}}">Divisi {{$option->divisi}}</option>
                            @endforeach
                        </select>
                    </div>
                    <button class="btn btn-primary">Temukan</button>
                </form>

                {{-- filter --}}

                @if (isset($programs) && sizeof($programs) > 0)
                    @foreach ($programs as $program)
                        <div class="col-md-6 col-lg-4 mb-5" data-aos="fade-up" data-aos-delay="300">
                            <a href="{{ route('detailKegiatan', $program->id) }}"><img
                                    src={{ asset($program->picture) }} alt="Image" class="img-fluid" /></a>
                            <div class="p-4 bg-white">
                                <span class="d-block text-primary text-uppercase ">{{ $program->divisi }}</span>
                                <span class="d-block text-secondary small text-uppercase">{{ $program->date }}</span>
                                <h2 class="h5 text-black mb-3">
                                    <a class="text-blue"
                                        href="{{ route('detailKegiatan', $program->id) }}">{{ $program->title }}</a>
                                </h2>
                            </div>
                        </div>
                    @endforeach
                @else
                        <center><h1>DATA TIDAK DITEMUKAN</h1></center>
                @endif






            </div>
        </div>
    </div>

@endsection
