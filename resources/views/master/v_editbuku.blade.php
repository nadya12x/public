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
                    <form action="/Buku/update/{{$buku->id}}/" method="POST">
                        {{-- Syntax keamanan laravel untuk form --}}
                        @csrf
                        <div class="card-body">
                            <div class="row">
                                <div class="col-6">
                                    <div class="form-group">
                                        <label>Kode Buku</label>
                                        <input name="kd_buku" class="form-control" value="{{ $buku->id }}">
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
                                        <input name="judul_buku" class="form-control" value="{{  $buku->judul_buku }}">
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
                                        <input name="pengarang" class="form-control" value="{{  $buku->pengarang }}">
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
                                        <input name="penerbit" class="form-control" value="{{  $buku->penerbit }}">
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
                                            value="{{ $buku->thn_terbit }}">
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
                                        <input name="tebal_buku" class="form-control" value="{{ $buku->tebal_buku }}">
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
</section>
@endsection