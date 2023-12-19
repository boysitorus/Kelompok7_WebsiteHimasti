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

                <form method="" class="container mt-3 mb-5" onsubmit="return false;">
                    <h2 id="judul-kepengurusan">Kegiatan Tahun 2023</h2>

                    <div class="form-group">
                        <label for="tahun-select">Pilih Tahun Kegiatan :</label>
                        <select class="form-control" id="tahun-select" name="tahun-select">
                            <option value="2021">Kegiatan Tahun 2021</option>
                            <option value="2022">Kegiatan Tahun 2022</option>
                            <option value="2023">Kegiatan Tahun 2023</option>
                            <!-- Tambahkan tahun-tahun berikutnya sesuai kebutuhan -->
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
                    <button class="btn btn-primary" onclick="changeTitle()">Temukan</button>
                </form>

                {{-- filter --}}

                @if (isset($programs) && sizeof($programs) > 0)
                    @foreach ($programs as $program)
                    <div class="col-md-6 col-lg-4 mb-5" data-aos="fade-up" data-aos-delay="300">
                        <a href="{{ route('detailKegiatan', $program->id) }}"><img src={{ asset('assets/images/temu22.jpg') }}
                                alt="Image" class="img-fluid" /></a>
                        <div class="p-4 bg-white">
                            <span class="d-block text-secondary small text-uppercase">{{ $program->date }}</span>
                            <h2 class="h5 text-black mb-3">
                                <a class="text-blue" href="{{ route('detailKegiatan', $program->id) }}">{{ $program->title }}</a>
                            </h2>
                        </div>
                    </div>
                    @endforeach
                @endif



                
            </div>
        </div>
    </div>

    <script>
        function changeTitle() {
            var selectedYear = document.getElementById("tahun-select").value;
            document.getElementById("judul-kepengurusan").innerText = "Kegiatan Tahun " + selectedYear;
        }
    </script>
@endsection
