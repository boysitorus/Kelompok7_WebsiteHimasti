@extends('template.admin')

@section('content')
    <div class="container">
        <h3 class="text-uppercase">RENCANA PROGRAM KERJA</h3>


        <table class="table table-striped ">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Judul</th>
                    <th scope="col">Divisi</th>
                    <th scope="col">Tahun</th>
                    
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
                            <td>{{ $program->divisi }}</td>
                            <td>{{ $program->year }}</td>
                            

                            <td>
                                <a class="btn btn-sm btn-warning" href="#" data-toggle="modal"
                                    data-target="#updateProker-{{ $counter }}">
                                    Update
                                </a>

                                {{-- MODAL UPDATE BERITA --}}
                                <div class="modal fade" id="updateProker-{{ $counter }}" tabindex="-1" role="dialog"
                                    aria-labelledby="updateProkerModal" aria-hidden="true">
                                    <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="updateProkerModal">Update Proker</h5>
                                                <button class="close" type="button" data-dismiss="modal"
                                                    aria-label="Close">
                                                    <span aria-hidden="true">×</span>
                                                </button>
                                            </div>

                                            <form action="{{ route('admin.kegiatan.notdone.update') }}" method="POST"
                                                enctype="multipart/form-data">
                                                @csrf
                                                <div class="modal-body">
                                                    <div class="mb-3">
                                                        <input name="id" type="hidden" id="inputIdBerita"
                                                            value="{{ $program->id }}">
                                                        <label for="title">Title</label>
                                                        <input placeholder="{{ $program->title }}" type="text"
                                                            id="title" name="title" class="form-control">
                                                        <label for="date">Date</label>
                                                        <input placeholder="{{ $program->date }}" type="date"
                                                            id="date" name="date" class="form-control">
                                                        <label for="updateLaporan">Laporan</label>
                                                        <textarea placeholder="{{ $program->laporan != null ? $program->laporan : '' }}" id="updateLaporan-{{$counter}}" name="updateLaporan" class="form-control"></textarea>
                                                        <label for="picture" class="form-label mt-2">Update Picture</label>
                                                        <input class="form-control" name="picture" type="file"
                                                            id="picture" accept="image/png, image/jpeg, image/jpg">
                                                    </div>

                                                    <div class="modal-footer">
                                                        <button class="btn btn-secondary" type="button"
                                                            data-dismiss="modal">Cancel</button>
                                                        <button id="submit" class="btn btn-primary"
                                                            type="submit">Update</button>
                                                    </div>
                                            </form>

                                            <script>
                                                let updateEditor_{{$counter}};

                                                ClassicEditor
                                                    .create(document.querySelector('#updateLaporan-{{ $counter }}'))
                                                    .then(newEditor => {
                                                        updateEditor = newEditor;
                                                    })
                                                    .catch(error => {
                                                        console.error(error);
                                                    });
                                            </script>

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
