@extends('layout.v_template')
@section('content')
<section class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <div class="cad-tools">
                            <!-- Button trigger modal -->
                            <button type="button" class="btn btn-success btn-blok btn-x float-right" data-toggle="modal" data-target="#tambahModal">
                                Tambah
                            </button>
                        </div>
                    </div>
                    <!-- /.card-header -->
                    @if (session('pesan'))
                        <div class="alert alert-success alert-dismissible d-flex justify-content-center" style="width:70%; margin: 0 auto;">
                            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                            <h5><i class="icon fas fa-ban"></i>Sukses!</h5>
                            {{ session('pesan') }}
                        </div>
                    @endif

                    @if (session('update'))
                        <div class="alert alert-warning alert-dismissible d-flex justify-content-center" style="width:70%; margin: 0 auto;">
                            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                            <h5><i class="icon fas fa-ban"></i>Sukses!</h5>
                            {{ session('update') }}
                        </div>
                    @endif

                    @if (session('delete'))
                        <div class="alert alert-danger alert-dismissible d-flex justify-content-center" style="width:70%; margin: 0 auto;">
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
                                    <th>Kode Buku</th>
                                    <th>Judul Buku</th>
                                    <th>Pengarang</th>
                                    <th>Penerbit</th>
                                    <th>Tahun Terbit</th>
                                    <th>Tebal Buku</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $no = 1;  ?>
                                @foreach ($buku as $data)
                                <tr>
                                    <td class="text-center">{{ $no++ }}</td>
                                    <td class="text-center">{{ $data->kd_buku }}</td>
                                    <td>{{ $data->judul_buku }}</td>
                                    <td>{{ $data->pengarang }}</td>
                                    <td>{{ $data->penerbit }}</td>
                                    <td class="text-center">{{ $data->thn_terbit }}</td>
                                    <td class="text-center">{{ $data->tebal_buku }}</td>
                                    <td class="text-center">
                                        <a href="/Buku/Edit/{{ $data->id }}" class="btn btn-warning ">Edit</a>
                                        <a href="/Buku/Delete/{{ $data->id }}" class="btn btn-danger ">Hapus</a>
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

<!-- Modal -->
<div class="modal fade" id="tambahModal" tabindex="-1" role="dialog" aria-labelledby="tambahModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="tambahModalLabel">Tambah Data Buku</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div> 
            <form action="{{ url('/Buku/Insert') }}" method="POST">
                        {{-- Syntax keamanan laravel untuk form --}}
                        @csrf
                        <div class="card-body">
                            <div class="row">
                                <div class="col-6">
                                    <div class="form-group">
                                        <label>Kode Buku</label>
                                        <input name="kd_buku" class="form-control" value="{{ old('kd_buku') }}"required>
                                        <div class="text-danger">
                                            @error('kd_buku')
                                            {{ $message }}
                                            @enderror
                                        </div>
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="form-group">
                                        <label>Judul Buku</label>
                                        <input name="judul_buku" class="form-control" value="{{ old('judul_buku') }}" required>
                                        <div class="text-danger">
                                            @error('judul_buku')
                                            {{ $message }}
                                            @enderror
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-6">
                                    <div class="form-group">
                                        <label>Pengarang</label>
                                        <input name="pengarang" class="form-control" value="{{ old('pengarang') }}">
                                        <div class="text-danger">
                                            @error('pengarang')
                                            {{ $message }}
                                            @enderror
                                        </div>
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="form-group">
                                        <label>Penerbit</label>
                                        <input name="penerbit" class="form-control" value="{{ old('penerbit') }}">
                                        <div class="text-danger">
                                            @error('penerbit')
                                            {{ $message }}
                                            @enderror
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-6">
                                    <div class="form-group">
                                        <label>Tahun Terbit</label>
                                        <input type="date" name="thn_terbit" class="form-control"
                                            value="{{ old('thn_terbit') }}">
                                        <div class="text-danger">
                                            @error('thn_terbit')
                                            {{ $message }}
                                            @enderror
                                        </div>
                                    </div>
                                </div>
                                <dv class="col-6">
                                    <div class="form-group">
                                        <label>Tebal Halaman</label>
                                        <input name="tebal_buku" class="form-control" value="{{ old('tebal_buku') }}">
                                        <div class="text-danger">
                                            @error('tebal_buku')
                                            {{ $message }}
                                            @enderror
                                        </div>
                                    </div>
                                </dv>
                            </div>
                                <button type="submit" class="btn btn-primary">Submit</button>
                                <a href="/Buku" class="btn btn-success btn-blok">Kembali</a>

                        </div>
                    </form>
        </div>
    </div>
</div>


<script>
    // Script to handle modal closing and reset form fields on modal close
    $('#tambahModal').on('hidden.bs.modal', function () {
        $(this).find('form').trigger('reset');
    });
</script>

@endsection