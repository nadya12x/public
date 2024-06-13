@extends('layout.v_template')
@section('content')

<section class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">{{ $judul }}</h3>
                    </div>
                    <!-- /.card-header -->
                    <form action="/Pinjaman/update/{{$pinjaman->id}}" method="POST">
                        {{-- Laravel form security syntax --}}
                        @csrf
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label>Judul Buku</label>
                                        <input name="judul_buku" class="form-control" value="{{ $pinjaman->judul_buku }}">
                                        <div class="text-danger">
                                            @error('judul_buku')
                                                {{ $message }}
                                            @enderror
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label>Nama Peminjam</label>
                                        <input name="nama_peminjam" class="form-control" value="{{ $pinjaman->nama_peminjam }}">
                                        <div class="text-danger">
                                            @error('nama_peminjam')
                                                {{ $message }}
                                            @enderror
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                            <div class="col-md-12">
                                    <div class="form-group">
                                        <label>Nomor HP</label>
                                        <input name="no_hp" class="form-control" value="{{ $pinjaman->no_hp }}">
                                        <div class="text-danger">
                                            @error('no_hp')
                                                {{ $message }}
                                            @enderror
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label>Tanggal Peminjaman</label>
                                        <input type="date" name="tgl_peminjam" class="form-control"
                                            value="{{ $pinjaman->tgl_peminjaman }}">
                                        <div class="text-danger">
                                            @error('tgl_peminjam')
                                                {{ $message }}
                                            @enderror
                                        </div>
                                    </div>
                                </div>
                            </div>

                                <button type="submit" class="btn btn-primary">Submit</button>
                                <a href="/Buku" class="btn btn-success">Kembali</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>



@endsection