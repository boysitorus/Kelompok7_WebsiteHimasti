@extends('template.admin')

@section('content')
    <div class="container">
        <h3>DAFTAR BERITA</h3>

        <a class="btn btn-primary mt-3 mb-3" href="#" data-toggle="modal" data-target="#addPortfolio">
            Tambah
        </a>
        <!-- MODAL ADD PORTFOLIO-->
        <div class="modal fade" id="addPortfolio" tabindex="-1" role="dialog" aria-labelledby="addPortfolioModal"
            aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="addPortfolioModal">Tambah Berita</h5>
                        <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">×</span>
                        </button>
                    </div>

                    <form action="{{ route('admin.berita.create') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="modal-body">
                            <div class="mb-3">
                                <label for="title">Title</label>
                                <input type="text" id="title" name="title" class="form-control">
                                <label for="date">Date</label>
                                <input type="date" id="date" name="date" class="form-control">
                                <label for="detail">Detail</label>
                                <textarea id="detail" name="detail" class="form-control"></textarea>
                                <label for="picture" class="form-label mt-2">Upload Project Photo</label>
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