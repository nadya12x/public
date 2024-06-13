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
                    <form action="/Kategori/update/{{$kategori->id}}/" method="POST">
                        {{-- Syntax keamanan laravel untuk form --}}
                        @csrf
                        <div class="card-body">
                            <div class="row">
                                <div class="col-12">
                                    <div class="form-group">
                                        <label>Kategori</label>
                                        <input name="kategori" class="form-control" value="{{ $kategori->kategori }}">
                                        <div class="text-danger">
                                            @error('kategori')
                                            {{ $message }}
                                            @enderror
                                        </div>
                                    </div>
                                </div>
                            </div>

                                <button type="submit" class="btn btn-primary">Submit</button>
                                <a href="/Kategori" class="btn btn-success btn-blok">Kembali</a>

                        </div>
                    </form>

                </div>
            </div>
        </div>
</section>
@endsection