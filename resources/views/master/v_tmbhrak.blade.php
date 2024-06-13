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
                            <div class="card-footer">
                                <button type="submit" class="btn btn-primary">Submit</button>
                                <a href="/Rak" class="btn btn-success btn-blok">Kembali</a>
                            </div>
                        </div>
                    </form>

                </div>
            </div>
        </div>
</section>
@endsection