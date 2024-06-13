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
                                <a href="#" class="btn btn-success btn-block  float-right btn-tambah">Tambah</a>
                            </div>
                        </div>
                        <!-- /.card-header -->
                        @if (session('pesan'))
                        <div class="alert alert-success  alert-dismissible d-flex justify-content-center" style="width:70%; margin: 0 auto;">
                            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                            <h5><i class="icon fas fa-ban"></i>Sukses!</h5>
                            {{ session('pesan') }}
                        </div>
                        @endif

                        @if (session('update'))
                        <div class="alert alert-warning  alert-dismissible d-flex justify-content-center" style="width:70%; margin: 0 auto;">
                            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                            <h5><i class="icon fas fa-ban"></i>Sukses!</h5>
                            {{ session('update') }}
                        </div>
                        @endif

                        @if (session('delete'))
                        <div class="alert alert-danger  alert-dismissible d-flex justify-content-center" style="width:70%; margin: 0 auto;">
                            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                            <h5><i class="icon fas fa-ban"></i>Sukses!</h5>
                            {{ session('delete') }}
                        </div>
                        @endif
                        <div class="card-body">
                            <table id="example1" class="table table-bordered table-striped">
                                <thead>
                                    <tr class="text-center">
                                        <th>No.</th>
                                        <th>Rak</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                <?php $no = 1;  ?>
                                    @foreach ($rak as $data)
                                    <tr>
                                        <td class="text-center">{{ $no++ }}</td>
                                        <td>{{ $data->rak }}</td>
                                        <td class="text-center">
                                            <a href="/Rak/Edit/{{ $data->id }}" class="btn btn-warning">Edit</a>
                                            <a href="#" class="btn btn-danger btn-hapus" data-id="{{ $data->id }}">Hapus</a>
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

    <!-- Modal Tambah -->
    <div class="modal fade" id="modalTambah" tabindex="-1" aria-labelledby="modalTambahLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="modalTambahLabel">Tambah Rak</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                <form action="/Rak/Insert/" method="POST">
                        {{-- Syntax keamanan laravel untuk form --}}
                        @csrf
                        <div class="card-body">
                            <div class="row">
                                <div class="col-12">
                                    <div class="form-group">
                                        <label>Rak</label>
                                        <input name="rak" class="form-control" value="{{ old('rak') }}">
                                        <div class="text-danger">
                                            @error('rak')
                                            {{ $message }}
                                            @enderror
                                        </div>
                                    </div>
                                </div>
                            </div>

                                <button type="submit" class="btn btn-primary">Submit</button>
                                <a href="/Rak" class="btn btn-success btn-blok">Kembali</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal Konfirmasi Hapus -->
    <div class="modal fade" id="modalHapus" tabindex="-1" aria-labelledby="modalHapusLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="modalHapusLabel">Konfirmasi Hapus</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    Apakah Anda yakin ingin menghapus rak ini?
                </div>
                <div class="modal-footer">
                    <!-- Jika tombol "Ya" ditekan, maka akan melakukan penghapusan -->
                    <a href="#" id="hapusBtn" class="btn btn-danger">Ya</a>
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Tidak</button>
                </div>
            </div>
        </div>
    </div>

    <!-- Tambahkan link JavaScript yang diperlukan di sini -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <!-- Tambahkan JavaScript untuk menampilkan modals saat tombol ditekan -->
    <script>
        $(document).ready(function () {
            // Tampilkan modal tambah saat tombol "Tambah" ditekan
            $(".btn-tambah").click(function () {
                $("#modalTambah").modal("show");
            });

            // Tampilkan modal konfirmasi hapus saat tombol "Hapus" ditekan
            $(".btn-hapus").click(function () {
                var id_rak = $(this).data("id");
                $("#hapusBtn").attr("href", "/Rak/Delete/" + id_rak);
                $("#modalHapus").modal("show");
            });
        });
    </script>

@endsection