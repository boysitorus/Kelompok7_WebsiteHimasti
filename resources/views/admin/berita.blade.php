@extends('template.admin')

@section('content')
    <div class="container">
        <h3>DAFTAR BERITA</h3>

        <a class="btn btn-primary mt-3 mb-3" href="#" data-toggle="modal" data-target="#addBerita">
            Tambah
        </a>
        <!-- MODAL ADD BERITA-->
        <div class="modal fade" id="addBerita" tabindex="-1" role="dialog" aria-labelledby="addBeritaModal" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="addBeritaModal">Tambah Berita</h5>
                        <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">×</span>
                        </button>
                    </div>

                    @if (session('success'))
                        <div class="alert alert-success">
                            {{ session('success') }}
                        </div>
                    @endif

                    @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul id="errorMessages">
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
                    <div class="modal-body">
                        <form action="{{ route('admin.berita.create') }}" method="POST" enctype="multipart/form-data">
                            @csrf

                            <div class="mb-3">

                                <label for="title">Title</label>
                                <input type="text" id="title" name="title" class="form-control"
                                    value="{{ old('field') }}">

                                <label for="date">Date</label>
                                <input type="date" id="date" name="date" class="form-control">

                                <label for="detail">Detail</label>
                                <textarea id="detail" name="detail" class="form-control"></textarea>
                                <label for="picture" class="form-label mt-2">Upload Picture</label>
                                <input class="form-control" name="picture" type="file" id="picture"
                                    accept="image/png, image/jpeg, image/jpg">
                                <label for="type">Pilih Type :</label>
                                <select name="type" id="type" class="form-control">
                                    <option value="event" selected>Event</option>
                                    <option value="ucapan">Ucapan</option>
                                </select>



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

                            $(document).ready(function() {
                                // Check
                                // if there are validation errors and show the modal
                                @if ($errors->any())
                                    $(document).ready(function() {
                                        $('#addBerita').modal('show');
                                    });
                                @endif
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
                    <th scope="col">Title</th>
                    <th scope="col">Date</th>
                    <th scope="col">Detail</th>
                    <th scope="col">Type</th>
                    <th scope="col"></th>
                    <th scope="col"></th>
                </tr>
            </thead>
            <tbody>
                @if (isset($news) && sizeof($news) > 0)
                    @php
                        $counter = 1;
                    @endphp
                    @foreach ($news as $berita)
                        <tr>
                            <td>{{ $counter++ }}</td>
                            <td>{{ $berita->title }}</td>
                            <td>{{ $berita->date }}</td>
                            @if (strlen($berita->detail) > 100)
                                <td>{!! Str::substr($berita->detail, 0, 100) !!}...</td>
                            @else
                                <td>{!! $berita->detail !!}</td>
                            @endif
                            <td>{{ $berita->type }} </td>
                            <td>
                                <a class="btn btn-sm btn-warning" href="#" data-toggle="modal"
                                    data-target="#updateBerita-{{ $counter }}">
                                    Update
                                </a>

                                {{-- MODAL UPDATE BERITA --}}
                                <div class="modal fade" id="updateBerita-{{ $counter }}" tabindex="-1" role="dialog"
                                    aria-labelledby="updateBeritaModal" aria-hidden="true">
                                    <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="updateBeritaModal">Update Berita</h5>
                                                <button class="close" type="button" data-dismiss="modal"
                                                    aria-label="Close">
                                                    <span aria-hidden="true">×</span>
                                                </button>
                                            </div>

                                            <form action="{{ route('admin.berita.update') }}" method="POST"
                                                enctype="multipart/form-data">
                                                @csrf
                                                <div class="modal-body">
                                                    <div class="mb-3">
                                                        <input name="id" type="hidden" id="inputIdBerita"
                                                            value="{{ $berita->id }}">
                                                        <label for="title">Title</label>
                                                        <input placeholder="{{ $berita->title }}" type="text"
                                                            id="title" name="title" class="form-control">

                                                        <label for="date">Date</label>
                                                        <input placeholder="{{ $berita->date }}" type="date"
                                                            id="date" name="date" class="form-control">
                                                        <label for="updateDetail">Detail</label>
                                                        <textarea placeholder="{!! $berita->detail !!}" id="updateDetail-{{ $counter }}" name="updateDetail"
                                                            class="form-control"></textarea>
                                                        <label for="picture" class="form-label mt-2">Update
                                                            Picture</label>
                                                        <input class="form-control" name="picture" type="file"
                                                            id="picture" accept="image/png, image/jpeg, image/jpg">
                                                        <label for="type">Pilih Type :</label>
                                                        <select name="type" id="type" class="form-control">
                                                            <option value="event"
                                                                {{ $berita->type === 'event' ? 'selected' : '' }}>Event
                                                            </option>
                                                            <option value="ucapan"
                                                                {{ $berita->type === 'ucapan' ? 'selected' : '' }}>Ucapan
                                                            </option>
                                                        </select>
                                                    </div>

                                                    <div class="modal-footer">
                                                        <button class="btn btn-secondary" type="button"
                                                            data-dismiss="modal">Cancel</button>
                                                        <button id="submit" class="btn btn-primary"
                                                            type="submit">Update</button>
                                                    </div>
                                            </form>

                                            <script>
                                                let updateEditor_{{ $counter }};;

                                                ClassicEditor
                                                    .create(document.querySelector('#updateDetail-{{ $counter }}'))
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

                            <td>
                                <a class="btn btn-sm btn-danger" href="#" data-toggle="modal"
                                    data-target="#deleteBerita-{{ $counter }}">
                                    Delete
                                </a>

                                <div class="modal fade" id="deleteBerita-{{ $counter }}" tabindex="-1"
                                    role="dialog" aria-labelledby="deleteBeritaModal" aria-hidden="true">
                                    <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="deleteBeritaModal">Delete Berita</h5>
                                                <button class="close" type="button" data-dismiss="modal"
                                                    aria-label="Close">
                                                    <span aria-hidden="true">×</span>
                                                </button>
                                            </div>

                                            <div class="modal-body">
                                                <div class="mb-3">
                                                    Kamu akan menghapus Berita
                                                    <strong class="text-danger" id="deleteBerita"></strong>.
                                                    Apakah kamu yakin?
                                                </div>

                                                <div class="modal-footer">
                                                    <form action="{{ route('admin.berita.delete') }}" method="POST">
                                                        @csrf
                                                        <input name="id" type="hidden" id="inpuDeletePortfolioId"
                                                            value="{{ $berita->id }}">
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
