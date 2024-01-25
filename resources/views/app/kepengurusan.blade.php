@extends('template.app')

@section('content')
    <!-- .site-mobile-menu -->

    <div class="site-blocks-cover inner-page-cover overlay"
        style="background-image: url('{{ asset('assets/images/himasti.JPG') }}')" data-aos="fade"
        data-stellar-background-ratio="0.5" data-aos="fade">
        <div class="container">
            <div class="row align-items-center justify-content-center">
                <div class="col-md-7 text-center" data-aos="fade-up" data-aos-delay="400">
                    <h1 class="text-white">Kepengurusan</h1>
                </div>
            </div>
        </div>
    </div>

    {{-- filter --}}

    @if (isset($yearsOptions) && isset($divisionsOptions))
        <form method="GET" class="container mt-5">

            <label for="tahun-select">Pilih Tahun Kepengurusan :</label>
            <select class="form-control" id="tahun-select" name="tahun-select">
                @foreach ($yearsOptions as $year)
                    <option value="{{ $year->year }}" {{ $year->year == $yearSelected ? 'selected' : '' }}>
                        Kepengurusan Tahun {{ $year->year }}/{{ $year->year + 1 }}
                    </option>
                @endforeach
                <!-- Tambahkan tahun-tahun berikutnya sesuai kebutuhan -->
            </select>

            <label for="divisi-select">Pilih Divisi :</label>
            <select class="form-control" id="divisi-select" name="divisi-select">
                <option value="*">Semua Divisi</option>
                @foreach ($divisionsOptions as $division)
                    <option value="{{ $division->divisi }}" {{ $division->divisi === $divisionSelected ? 'selected' : '' }}>
                        Divisi {{ $division->divisi }}</option>
                @endforeach
            </select>

            <button class="mt-3 btn btn-primary">Temukan</button>
        </form>
    @else
    @endif

    {{-- filter --}}

    @if (isset($managements) && sizeof($managements) > 0)
        @foreach ($managements as $management)
            <div class="site-section">
                <div class="container">
                    <div class="row">
                        <div class="site-section-heading text-center mb-5 w-border col-md-6 mx-auto">
                            <h2>{{ $management->divisi }}</h2>
                            {{-- <p>
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eveniet,
                                fugit nam obcaecati fuga itaque deserunt officia, error reiciendis
                                ab quod?
                            </p> --}}
                        </div>
                    </div>


                    {{-- LAYOUT UNTUK BPH --}}
                    @if ($management->divisi === 'Badan Pengurus Harian')
                        @if (isset($bphs) && sizeof($bphs) > 0)
                            @php
                                $counter = 1;
                            @endphp
                            <div class="row justify-content-center">
                                @foreach ($bphs as $bph)
                                    <div class="col-md-6 col-lg-3 mb-5" data-aos="fade-up" data-aos-delay="100">
                                        <a  class="unit-9">
                                            <div class="image" style="background-image: url('{{ $bph->picture }}')">
                                            </div>
                                            <div class="unit-9-content">
                                                <h2>{{ $bph->jabatan }}</h2>
                                                <span>{{ $bph->nama }}</span>
                                            </div>
                                        </a>
                                    </div>



                                    @if ($counter === 3)
                                        </div>
                                        <div class="row justify-content-center">
                                    @endif
                                    
                                    @if ($counter === 6)
                                        </div>
                                    @endif
                                    
                                    @php
                                        $counter++;
                                    @endphp
                                @endforeach
                        @endif

            {{-- LAYOUT UNTUK DIVISI SELAIN BPH --}}
            @else
                <div class="row justify-content-center">     
                @php
                    $counter = 1;
                @endphp             
                @foreach ($members as $member)
                    @if (($member->divisi === $management->divisi) && ($member->jabatan === "Anggota") && $counter === 3)
                            </div>
                            <div class="row justify-content-center">
                                <div class="col-md-6 col-lg-3 mb-5" data-aos="fade-up" data-aos-delay="100">
                                    <a  class="unit-9">
                                        <div class="image" style="background-image: url('{{ $member->picture }}')"></div>
                                        <div class="unit-9-content">
                                            <h2>{{ $member->jabatan }}</h2>
                                            <span>{{ $member->nama }}</span>
                                            <!-- <span>with Wendy Matos</span> -->
                                        </div>
                                    </a>
                                </div>
                                @php
                                    $counter++; 
                                @endphp   
                        
                    @elseif ($member->divisi === $management->divisi && $counter <= 2)
                    <div class="col-md-6 col-lg-3 mb-5" data-aos="fade-up" data-aos-delay="100">
                        <a  class="unit-9">
                            <div class="image" style="background-image: url('{{ $member->picture }}')"></div>
                            <div class="unit-9-content">
                                <h2>{{ $member->jabatan }}</h2>
                                <span>{{ $member->nama }}</span>
                                <!-- <span>with Wendy Matos</span> -->
                            </div>
                        </a>
                    </div>
                    @php
                    $counter++;
                    @endphp
                    
                    @elseif ($counter > 3 && ($member->divisi === $management->divisi))
                    <div class="col-md-6 col-lg-3 mb-5" data-aos="fade-up" data-aos-delay="100">
                        <a  class="unit-9">
                            <div class="image" style="background-image: url('{{ $member->picture }}')"></div>
                            <div class="unit-9-content">
                                <h2>{{ $member->jabatan }}</h2>
                                <span>{{ $member->nama }}</span>
                                <!-- <span>with Wendy Matos</span> -->
                            </div>
                        </a>
                    </div>
                    @php
                        $counter++;
                    @endphp
                    @endif
                    

                    
                   
                @endforeach
                    </div>
                    <div class="d-flex justify-content-center">
                        <a href="{{ route('detailkepengurusan', ['tahun' => $management->year, 'divisi' => $management->divisi]) }}" class="btn btn-primary px-4 py-3">Selengkapnya</a>
                    </div>
               
            @endif
            </div>
        </div>
    @endforeach
@else
    <center>
        <h1>TIDAK DITEMUKAN DATA</h1>
    </center>
    @endif


@endsection
