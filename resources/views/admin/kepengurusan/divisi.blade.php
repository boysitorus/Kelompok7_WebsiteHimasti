@extends('template.admin')

@section('content')
    <style>
        .animasi-kartu {
            transition: 0.3s;
            box-shadow: rgba(100, 100, 111, 0.2) 0px 7px 29px 0px;
        }
    </style>

    <div class="container">
        <h3>{{ $management->divisi }} - {{ $management->year }}/{{ $management->year + 1 }}</h3>

        <div class="container" data-aos="fade-up" style="margin-left: -15px">
            <div class="row justify-content-start">
                <div class="text-justify text-uppercase">
                    <div class="d-flex align-items-start rounded p-3 mb-4 animasi-kartu">
                        <div class="pr-3">&#129066;</div>
                        <a
                            href="{{ route('admin.kepengurusan.divisi.keanggotaan', ['tahun' => $management->year, 'divisi' => $management->divisi]) }}">
                            Keanggotaan
                        </a>
                    </div>
                    @if ($management->divisi != 'Badan Pengurus Harian')
                        <div class="d-flex align-items-start rounded p-3 mb-4 animasi-kartu">
                            <div class="pr-3">&#129066;</div>
                            <a href="{{ route('admin.kepengurusan.divisi.proker', ['tahun' => $management->year, 'divisi' => $management->divisi]) }}">
                                Program Kerja
                            </a>
                        </div>
                    @else
                    @endif

                </div>
            </div>
        </div>
    </div>
@endsection
