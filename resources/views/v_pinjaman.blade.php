@extends('layout.v_template')
@section('content')
    <div class="container-fluid">


        
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">{{ $judul }}</h3>
                        <button type="button" class="btn btn-success btn-sm float-right" data-toggle="modal"
                            data-target="#tambahModal">Tambah</button>
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
                                    <th>Tanggal Peminjaman</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $no = 1; ?>
                                @foreach ($pinjaman as $data)
                                    <tr>
                                        <td class="text-center">{{ $no++ }}</td>
                                        <td>{{ $data->judul_buku }}</td>
                                        <td>{{ $data->nama_peminjam }}</td>
                                        <td>{{ $data->no_hp }}</td>
                                        <td>{{ $data->tgl_peminjaman }}</td>
                                        <td class="text-center">
                                            <a href="/Pinjaman/Edit/{{ $data->id }}"
                                                class="btn btn-warning btn-sm">
                                                <i class="fas fa-edit"></i> Edit
                                            </a>
                                            <button class="btn btn-danger btn-sm btn-hapus" data-toggle="modal"
                                                data-target="#konfirmasiModal" data-id="{{ $data->id }}">
                                                <i class="fas fa-trash-alt"></i> Hapus
                                            </button>

                                           
                                        </td>
                                    </tr>

                                     <div class="modal fade" id="konfirmasiModal" tabindex="-1" role="dialog"
                                                aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                <div class="modal-dialog" role="document">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h5 class="modal-title" id="exampleModalLabel">Konfirmasi Hapus
                                                            </h5>
                                                            <button type="button" class="close" data-dismiss="modal"
                                                                aria-label="Close">
                                                                <span aria-hidden="true">&times;</span>
                                                            </button>
                                                        </div>
                                                        <div class="modal-body">
                                                            Apakah Anda yakin ingin menghapus data pinjaman ini?
                                                        </div>
                                                        <div class="modal-footer">
                                                            <button type="button" class="btn btn-secondary"
                                                                data-dismiss="modal">Batal</button>
                                                            <form method="GET"
                                                                action="{{ url('/Pinjaman/Delete/' . $data->id) }}">
                                                                @csrf
                                                                @method('DELETE')
                                                                <button type="submit" class="btn btn-danger">Hapus</button>
                                                            </form>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>


                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal -->
    <div class="modal fade" id="tambahModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Tambah Data Pinjaman</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>



                <form action="  {{ url('/Pinjaman/Insert') }}" method="POST">
                    {{-- Laravel security syntax for forms --}}
                    @csrf
                    <div class="modal-body">
                        <div class="form-group">
                            <label for="judul_buku">Judul Buku</label>
                            <input type="text" name="judul_buku" class="form-control" id="judul_buku"
                                value="{{ old('judul_buku') }}">
                            <div class="text-danger">
                                @error('judul_buku')
                                    {{ $message }}
                                @enderror
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-6">
                                <div class="form-group">
                                    <label for="nama_peminjam">Nama Peminjam</label>
                                    <input type="text" name="nama_peminjam" class="form-control" id="nama_peminjam"
                                        value="{{ old('nama_peminjam') }}">
                                    <div class="text-danger">
                                        @error('nama_peminjam')
                                            {{ $message }}
                                        @enderror
                                    </div>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="form-group">
                                    <label for="no_hp">No HP</label>
                                    <input type="text" name="no_hp" class="form-control" id="no_hp"
                                        value="{{ old('no_hp') }}">
                                    <div class="text-danger">
                                        @error('no_hp')
                                            {{ $message }}
                                        @enderror
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="tgl_peminjam">Tanggal Peminjaman</label>
                            <input type="date" name="tgl_peminjam" class="form-control" id="tgl_peminjam"
                                value="{{ old('tgl_peminjam') }}">
                            <div class="text-danger">
                                @error('tgl_peminjam')
                                    {{ $message }}
                                @enderror
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>





    <script>
        // JavaScript to show modal when 'Tambah' button is clicked
        $('#tambahModal').on('show.bs.modal', function(e) {
            // Clear input fields when modal is opened
            $(this).find('input').val('');
        });

        $(document).on("click", ".btn-hapus", function() {
            var idPinjaman = $(this).data('id');
            $("#hapusForm").attr('action', '/Pinjaman/Delete/' + idPinjaman);
        });
    </script>
@endsection
