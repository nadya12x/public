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
                    <form action="/Buku/Insert/" method="POST">
                        {{-- Syntax keamanan laravel untuk form --}}
                        @csrf
                        <div class="card-body">
                            <div class="row">
                                <div class="col-6">
                                    <div class="form-group">
                                        <label>Kode Buku</label>
                                        <input name="kd_buku" class="form-control" value="{{ old('kd_buku') }}">
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