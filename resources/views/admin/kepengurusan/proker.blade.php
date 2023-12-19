@extends('template.admin')

@section('content')
    <div class="container">
        <h3 class="text-uppercase">PROGRAM KERJA {{ $management->divisi }} -
            {{ $management->year }}/{{ $management->year + 1 }}</h3>

        <a class="btn btn-primary mt-3 mb-3" href="#" data-toggle="modal" data-target="#addProker">
            Tambah Proker
        </a>
        <!-- MODAL ADD PROKER-->
        <div class="modal fade" id="addProker" tabindex="-1" role="dialog" aria-labelledby="addProkerModal"
            aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="addProkerModal">Tambah Proker</h5>
                        <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">×</span>
                        </button>
                    </div>

                    <form action="{{ route('admin.kepengurusan.divisi.proker.create') }}" method="POST"
                        enctype="multipart/form-data">
                        @csrf
                        <div class="modal-body">
                            <div class="mb-3">
                                <input type="hidden" name="year" value="{{ $management->year }}">
                                <input type="hidden" name="divisi" value="{{ $management->divisi }}">
                                <label for="title">Judul</label>
                                <input type="text" id="title" name="title" class="form-control" required/>
                                <label for="detail">Detail Rencana Kegiatan</label>
                                <textarea id="detail" name="detail" class="form-control"></textarea>
                            </div>

                            <div class="modal-footer">
                                <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                                <button id="submit" class="btn btn-primary" type="submit">Add</button>
                            </div>

                    </form>

                    <script>
                        let editor;

                        ClassicEditor
                            .create(document.querySelector('#detail'))
                            .then(newEditor => {
                                editor = newEditor;
                            })
                            .catch(error => {
                                console.error(error);
                            });
                    </script>

                </div>
            </div>
        </div>
    </div>

    <table class="table table-striped ">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Judul</th>
                <th scope="col">Detail</th>
                <th scope="col">Status</th>
                <th scope="col"></th>
            </tr>
        </thead>
        <tbody>
            @if (isset($programs) && sizeof($programs) > 0)
                @php
                    $counter = 1;
                @endphp
                @foreach ($programs as $program)
                    <tr>
                        <td>{{ $counter++ }}</td>
                        <td>{{ $program->title }}</td>
                        <td>{!! $program->detail !!}</td>
                        <td>{{ $program->status }}</td>
                    
                        <td>
                            <a class="btn btn-sm btn-danger" href="#" data-toggle="modal"
                                data-target="#deleteMember-{{ $counter }}">
                                Delete
                            </a>

                            <div class="modal fade" id="deleteMember-{{ $counter }}" tabindex="-1" role="dialog"
                                aria-labelledby="deleteMemberModal" aria-hidden="true">
                                <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="deleteMemberModal">Delete Berita</h5>
                                            <button class="close" type="button" data-dismiss="modal"
                                                aria-label="Close">
                                                <span aria-hidden="true">×</span>
                                            </button>
                                        </div>

                                        <div class="modal-body">
                                            <div class="mb-3">
                                                Kamu akan menghapus proker
                                                <strong class="text-danger" id="deleteMember"></strong>.
                                                Apakah kamu yakin?
                                            </div>

                                            <div class="modal-footer">
                                                <form action="{{ route('admin.kepengurusan.divisi.proker.delete') }}"
                                                    method="POST">
                                                    @csrf
                                                    <input name="id" type="hidden" id="idProker"
                                                        value="{{ $program->id }}">
                                                    <button class="btn btn-secondary" type="button"
                                                        data-dismiss="modal">Cancel</button>
                                                    <button class="btn btn-danger" type="submit">Delete</button>
                                                </form>
                                            </div>

                                        </div>
                                    </div>
                        </td>


                    </tr>
                @endforeach
            @else
                <tr>
                    <td colspan="5" class="text-center text-muted">Belum ada data tersedia!</td>
                </tr>
            @endif

        </tbody>
    </table>
    </div>
@endsection
