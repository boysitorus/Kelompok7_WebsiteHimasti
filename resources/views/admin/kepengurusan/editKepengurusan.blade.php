@extends('template.admin')

@section('content')
    <style>
        .animasi-kartu {
            transition: 0.3s;
            box-shadow: rgba(100, 100, 111, 0.2) 0px 7px 29px 0px;
        }
    </style>

    @php
        $year = $managements->first()->year;
    @endphp

    <div class="container">
        <h3>DIVISI KEPENGURUSAN {{ $managements->first()->year }}/{{ $managements->first()->year + 1 }}</h3>

        <a class="btn btn-primary mt-3 mb-3" href="#" data-toggle="modal" data-target="#addDivisi">
            Tambah Divisi
        </a>
        <!-- MODAL CREATE DIVISI-->
        <div class="modal fade" id="addDivisi" tabindex="-1" role="dialog" aria-labelledby="addDivisiModal" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="addDivisiModal">Tambah Divisi</h5>
                        <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">×</span>
                        </button>
                    </div>

                    <form action="{{ route('admin.kepengurusan.divisi.create') }}" method="POST"
                        enctype="multipart/form-data">
                        @csrf
                        <div class="modal-body">
                            <div class="mb-3">
                                <input name="tahun" type="hidden" value="{{ $managements->first()->year }}">
                                <label for="divisi">Nama Divisi</label>
                                <input type="text" class="form-control" name="divisi" id="divisi" required />
                            </div>

                            <div class="modal-footer">
                                <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                                <button id="submit" class="btn btn-primary" type="submit">Add</button>
                            </div>
                    </form>

                </div>
            </div>
        </div>
    </div>

    @if (isset($managements) && sizeof($managements) > 0)
        <div class="container" data-aos="fade-up" style="margin-left: -15px">
            <div class="row justify-content-start">
                <div class="text-justify">
                    @php
                        $counter = 1;
                    @endphp
                    @foreach ($managements as $management)
                        <div class="d-flex align-items-start rounded p-3 mb-4 animasi-kartu">
                            <div class="pr-3">&#129066;</div>
                            
                            <a
                                href="{{ route('admin.kepengurusan.divisi.detail', ['tahun' => $year, 'divisi' => $management->divisi]) }}">
                                <span class="text-uppercase">{{ $management->divisi }}</span>
                            </a>
                            @if ($counter === 1)
                            @else
                                <a class="pl-3 ml-auto" href="#" data-toggle="modal"
                                    data-target="#deleteDivisi-{{ $counter }}">
                                    <i class="fas fa-fw fa-trash"></i>
                                </a>
                            @endif


                            <div class="modal fade" id="deleteDivisi-{{ $counter++ }}" tabindex="-1" role="dialog"
                                aria-labelledby="deleteDivisiModal" aria-hidden="true">
                                <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="deleteDivisiModal">Delete Divisi</h5>
                                            <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">×</span>
                                            </button>
                                        </div>

                                        <div class="modal-body">
                                            <div class="mb-3">
                                                Kamu akan menghapus Divisi
                                                <strong class="text-danger" id="deleteDivisi"></strong>.
                                                Apakah kamu yakin?
                                            </div>

                                            <div class="modal-footer">
                                                <form action="{{ route('admin.kepengurusan.divisi.delete') }}"
                                                    method="POST">
                                                    @csrf
                                                    <input name="tahun" type="hidden" value="{{ $year }}">
                                                    <input name="divisi" type="hidden" value="{{ $management->divisi }}">
                                                    <button class="btn btn-secondary" type="button"
                                                        data-dismiss="modal">Cancel</button>
                                                    <button class="btn btn-danger" type="submit">Delete</button>
                                                </form>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    @else
        <h4>BELUM ADA KEPENGURUSAN</h4>
    @endif



    </div>
@endsection
