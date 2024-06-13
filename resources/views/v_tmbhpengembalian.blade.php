@extends('layout.v_template')
@section('content')
<!-- <section class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">{{ $judul }}</h3>
                    </div>

                    <form action="/Pengembalian/Insert/" method="POST">
                        {{-- Syntax keamanan laravel untuk form --}}
                        @csrf
                        <div class="card-body">
                            <div class="row">
                                <div class="col-6">
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
                                <div class="col-6">
                                    <div class="form-group">
                                        <label>nama peminjam</label>
                                        <input name="nama_peminjam" class="form-control" value="{{ old('nama_peminjam') }}">
                                        <div class="text-danger">
                                            @error('nama_peminjam')
                                            {{ $message }}
                                            @enderror
                                        </div>
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="form-group">
                                        <label>no hp</label>
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
                                <div class="col-6">
                                    <div class="form-group">
                                        <label>Tanggal pengembalian</label>
                                        <input type="date" name="tgl_pengembalian" class="form-control"
                                            value="{{ old('tgl_pengembalian') }}">
                                        <div class="text-danger">
                                            @error('tgl_pengembalian')
                                            {{ $message }}
                                            @enderror
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card-footer">
                                <button type="submit" class="btn btn-primary">Submit</button>
                                <a href="/Buku" class="btn btn-success btn-blok">Kembali</a>
                            </div>
                        </div>
                    </form>

                </div>
            </div>
        </div>
</section> -->
@endsection