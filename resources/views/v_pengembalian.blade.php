@extends('layout.v_template')
@section('content')
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">{{ $judul }}</h3>
                            <div class="card-tools">
                                <a href="#" class="btn btn-success btn-block float-right" data-toggle="modal"
                                    data-target="#tambahModal">Tambah</a>
                            </div>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                            <table id="example1" class="table table-bordered table-striped">
                                <thead>
                                    <tr class="text-center">
                                        <th>No.</th>
                                        <th>Judul Buku</th>
                                        <th>Nama Peminjam</th>
                                        <th>No Hp</th>
                                        <th>Tanggal Pengembalian</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $no = 1; ?>
                                    @foreach ($pengembalian as $data)
                                        <tr>
                                            <td class="text-center">{{ $no++ }}</td>
                                            <td>{{ $data->judul_buku }}</td>
                                            <td>{{ $data->nama_peminjam }}</td>
                                            <td>{{ $data->no_hp }}</td>
                                            <td>{{ $data->tgl_pengembalian }}</td>
                                            <td class="text-center">
                                                <a href="/Pengembalian/Edit/{{ $data->id }}"
                                                    class="btn btn-warning btn-block">Edit</a>
                                                <a href="#" class="btn btn-danger btn-block"
                                                    onclick="prepareDelete('{{ $data->id }}')"
                                                    data-toggle="modal" data-target="#hapusModal">Hapus</a>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Modal Tambah Pengembalian -->
    <div class="modal fade" id="tambahModal" tabindex="-1" role="dialog" aria-labelledby="tambahModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="tambahModalLabel">Tambah Pengembalian</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">


                    <form action="{{ url('/Pengembalian/Insert') }}" method="POST">
                        {{-- Syntax keamanan laravel untuk form --}}
                        @csrf
                        <div class="card-body">
                            <div class="row">
                                <div class="col-12">
                                    <div class="form-group">
                                        <label>Judul Buku</label>
                                        <input name="judul_buku" class="form-control" value="{{ old('judul_buku') }}">
                                        <div class="text-danger">
                                            @error('judul_buku')
                                                {{ $message }}
                                            @enderror
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-12">
                                    <div class="form-group">
                                        <label>Nama Peminjam</label>
                                        <input name="nama_peminjam" class="form-control"
                                            value="{{ old('nama_peminjam') }}">
                                        <div class="text-danger">
                                            @error('nama_peminjam')
                                                {{ $message }}
                                            @enderror
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-12">
                                    <div class="form-group">
                                        <label>No HP</label>
                                        <input name="no_hp" class="form-control" value="{{ old('no_hp') }}">
                                        <div class="text-danger">
                                            @error('no_hp')
                                                {{ $message }}
                                            @enderror
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-12">
                                    <div class="form-group">
                                        <label>Tanggal Pengembalian</label>
                                        <input type="date" name="tgl_pengembalian" class="form-control" name="tgl_pengembalian"
                                            value="{{ old('tgl_pengembalian') }}">
                                        <div class="text-danger">
                                            @error('tgl_pengembalian')
                                                {{ $message }}
                                            @enderror
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal Konfirmasi Hapus -->
    <div class="modal fade" id="hapusModal" tabindex="-1" role="dialog" aria-labelledby="hapusModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="hapusModalLabel">Konfirmasi Hapus</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    Apakah Anda yakin ingin menghapus data ini?
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
                    <a id="deleteButton" href="#" class="btn btn-danger">Hapus</a>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

    <!-- Script JavaScript -->
    <script>
        function prepareDelete(id) {
            var deleteUrl = '/Pengembalian/Delete/' + id;
            document.getElementById('deleteButton').setAttribute('href', deleteUrl);
        }
    </script>
@endsection
