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
                    <form action="/Rak/update/{{$rak->id}}/" method="POST">
                        {{-- Syntax keamanan laravel untuk form --}}
                        @csrf
                        <div class="card-body">
                            <div class="row">
                                <div class="col-12">
                                    <div class="form-group">
                                        <label>Rak</label>
                                        <input name="rak" class="form-control" value="{{ $rak->rak }}">
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
</section>
@endsection