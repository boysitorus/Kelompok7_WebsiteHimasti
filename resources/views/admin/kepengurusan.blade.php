@extends('template.admin')

@section('content')
<style>
    .animasi-kartu {
        transition: 0.3s; 
        box-shadow: rgba(100, 100, 111, 0.2) 0px 7px 29px 0px;
    }
</style>

    <div class="container">
        <h3>DAFTAR KEPENGURUSAN</h3>

        <a class="btn btn-primary mt-3 mb-3" href="#" data-toggle="modal" data-target="#addKepengurusan">
            Tambah
        </a>
        <!-- MODAL CREATE KEPENGURUSAN-->
        <div class="modal fade" id="addKepengurusan" tabindex="-1" role="dialog" aria-labelledby="addKepengurusanModal"
            aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="addKepengurusanModal">Tambah Kepengurusan</h5>
                        <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">×</span>
                        </button>
                    </div>

                    <form action="{{ route('admin.kepengurusan.create') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="modal-body">
                            <div class="mb-3">
                                <label for="tahun">Tahun Kepengurusan</label>
                                <input type="text"  name="pincode" maxlength="4"  id="pin" pattern="\d{4}" class="form-control" placeholder="ex: 2021" required />
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
        <div class="row justify-content-start" >
                <div class="text-justify">
                    @php
                        $counter = 1;
                    @endphp
                    @foreach ($managements as $management)
                        <div class="d-flex align-items-start rounded p-3 mb-4 animasi-kartu">
                            <div class="pr-3">&#129066;</div>
                            <a href="{{ route('admin.kepengurusan.detail', $management->year) }}">
                                Kepengurusan Tahun {{$management->year}}/{{$management->year + 1}}
                            </a>
                            <a class="pl-3 ml-auto" href="#" data-toggle="modal"
                                data-target="#deleteKepengurusan-{{ $counter }}">
                                <i class="fas fa-fw fa-trash"></i>
                            </a>

                            <div class="modal fade" id="deleteKepengurusan-{{ $counter++ }}" tabindex="-1"
                                role="dialog" aria-labelledby="deleteKepengurusanModal" aria-hidden="true">
                                <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="deleteKepengurusanModal">Delete Kepengurusan</h5>
                                            <button class="close" type="button" data-dismiss="modal"
                                                aria-label="Close">
                                                <span aria-hidden="true">×</span>
                                            </button>
                                        </div>

                                        <div class="modal-body">
                                            <div class="mb-3">
                                                Kamu akan menghapus Kepengurusan, dan semua konten yang ada didalamnya
                                                <strong class="text-danger" id="deleteKepengurusan"></strong>.
                                                Apakah kamu yakin?
                                            </div>

                                            <div class="modal-footer">
                                                <form action="{{ route('admin.kepengurusan.delete') }}" method="POST">
                                                    @csrf
                                                    <input name="tahun" type="hidden" value="{{ $management->year }}">
                                                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
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

