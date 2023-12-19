@extends('template.admin')

@section('content')
    <div class="container">
        <h3 class="text-uppercase">KEANGGOTAAN {{ $management->divisi }} -
            {{ $management->year }}/{{ $management->year + 1 }}</h3>

        <button class="btn btn-primary mt-3 mb-3" {{ ($management->divisi === "Badan Pengurus Harian" && sizeof($members) === 6) ? 'disabled' : '' }} href="#" data-toggle="modal" data-target="#addMember">
            Tambah Keanggotaan
        </button>
        <!-- MODAL ADD MEMBER-->
        <div class="modal fade" id="addMember" tabindex="-1" role="dialog" aria-labelledby="addMemberModal"
            aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="addMemberModal">Tambah Member</h5>
                        <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">×</span>
                        </button>
                    </div>

                    <form action="{{ route('admin.kepengurusan.divisi.keanggotaan.create') }}" method="POST"
                        enctype="multipart/form-data">
                        @csrf
                        <div class="modal-body">
                            <div class="mb-3">
                                <input type="hidden" name="year" value="{{ $management->year }}">
                                <input type="hidden" name="divisi" value="{{ $management->divisi }}">
                                <label for="nim">NIM</label>
                                <input type="text" id="nim" name="nim" class="form-control"
                                    placeholder="ex: 11S21025" required pattern="11S\d{5}">
                                <label for="name">Nama</label>
                                <input type="text" id="nama" name="nama" class="form-control" required>
                                <label for="jabatan">Pilih Jabatan :</label>
                                <select name="jabatan" id="jabatan" class="form-control">
                                    @if ($management->divisi === 'Badan Pengurus Harian')
                                        @if (!$checkKetua)
                                            <option value="Ketua">Ketua</option>
                                        @endif

                                        @if (!$checkWakilKetua)
                                            <option value="Wakil Ketua">Wakil Ketua</option>
                                        @endif

                                        @if (!$checkSekretaris)
                                            <option value="Sekretaris">Sekretaris</option>
                                        @endif

                                        @if (!$checkWakilSekretaris)
                                            <option value="Wakil Sekretaris">Wakil Sekretaris</option>
                                        @endif

                                        @if (!$checkBendahara)
                                            <option value="Bendahara">Bendahara</option>
                                        @endif

                                        @if (!$checkWakilBendahara)
                                            <option value="Wakil Bendahara">Wakil Bendahara</option>
                                        @endif
                                    @else
                                        @if (!$checkKetua)
                                            <option value="Ketua">Ketua</option>
                                        @endif
                                        @if (!$checkWakilKetua)
                                            <option value="Wakil Ketua">Wakil Ketua</option>
                                        @endif

                                        <option value="Anggota">Anggota</option>
                                    @endif

                                </select>
                                <label for="picture" class="form-label mt-2">Upload Picture</label>
                                <input class="form-control" name="picture" type="file" id="picture"
                                    accept="image/png, image/jpeg, image/jpg" required>
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

    <table class="table table-striped ">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">NIM</th>
                <th scope="col">Nama</th>
                <th scope="col">Jabatan</th>
                <th scope="col">Picture</th>
                <th scope="col"></th>
                <th scope="col"></th>
            </tr>
        </thead>
        <tbody>
            @if (isset($members) && sizeof($members) > 0)
                @php
                    $counter = 1;
                @endphp
                @foreach ($members as $member)
                    <tr>
                        <td>{{ $counter++ }}</td>
                        <td>{{ $member->nim }}</td>
                        <td>{{ $member->nama }}</td>
                        <td>{{ $member->jabatan }} </td>
                        <td>{{ $member->picture }} </td>
                        <td>
                            <a class="btn btn-sm btn-warning" href="#" data-toggle="modal"
                                data-target="#updateMember-{{ $counter }}">
                                Update
                            </a>

                            {{-- MODAL UPDATE MEMBER --}}
                            <div class="modal fade" id="updateMember-{{ $counter }}" tabindex="-1" role="dialog"
                                aria-labelledby="updateMemberModal" aria-hidden="true">
                                <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="updateMemberModal">Update Member</h5>
                                            <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">×</span>
                                            </button>
                                        </div>

                                        <form action="{{ route('admin.kepengurusan.divisi.keanggotaan.update') }}"
                                            method="POST" enctype="multipart/form-data">
                                            @csrf
                                            <div class="modal-body">
                                                <div class="mb-3">
                                                    <input name="nim" type="hidden" id="nimMember"
                                                        value="{{ $member->nim }}">
                                                    <label for="nama">Nama</label>
                                                    <input placeholder="{{ $member->nama }}" type="text"
                                                        id="nama" name="nama" class="form-control">
                                                    <label for="jabatan">Pilih Jabatan :</label>
                                                    <select name="jabatan" id="jabatan" class="form-control">
                                                        <option value="Ketua"
                                                            {{ $member->jabatan === 'Ketua' ? 'selected' : '' }}>Ketua
                                                        </option>
                                                        <option value="Wakil Ketua"
                                                            {{ $member->jabatan === 'Wakil Ketua' ? 'selected' : '' }}>
                                                            Wakil Ketua</option>
                                                        <option value="Anggota"
                                                            {{ $member->jabatan === 'Anggota' ? 'selected' : '' }}>Anggota
                                                        </option>
                                                    </select>
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
                                    </div>
                                </div>
                            </div>
                        </td>

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
                                                Kamu akan menghapus Member
                                                <strong class="text-danger" id="deleteMember"></strong>.
                                                Apakah kamu yakin?
                                            </div>

                                            <div class="modal-footer">
                                                <form action="{{ route('admin.kepengurusan.divisi.keanggotaan.delete') }}"
                                                    method="POST">
                                                    @csrf
                                                    <input name="nim" type="hidden" id="nimMember"
                                                        value="{{ $member->nim }}">
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

    @if (isset($members) && sizeof($members) > 0)
    @else
    @endif

    </div>
@endsection
