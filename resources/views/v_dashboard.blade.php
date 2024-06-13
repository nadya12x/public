@extends('layout.v_template')
@section('content')
<section class="content">
    <div class="container-fluid">
        <!-- Small boxes (Stat box) -->
        <div class="row">
            <div class="col-lg-3 col-6" >
                <!-- small box -->
                <div class="small-box bg-info">
                    <div class="inner">
                        <h3>{{ $jmlbuku }}</h3>
                        <p>Jumlah Buku</p>
                    </div>
                    <div class="icon">
                        <i class="fas fa-book"></i>
                    </div>
                    <a href="{{ url('/Buku') }}" class="small-box-footer">Info Lebih Lanjut <i class="fas fa-arrow-circle-right"></i></a>
                </div>
            </div>
            <!-- ./col -->
            <div class="col-lg-3 col-6" >
                <!-- small box -->
                <div class="small-box bg-success">
                    <div class="inner">
                        <h3>{{ $jmlrak }}</h3>
                        <p>Jumlah Rak Buku</p>
                    </div>
                    <div class="icon">
                        <i class="fas fa-archive"></i>
                    </div>
                    <a href="{{ url('/Rak') }}" class="small-box-footer">Info Lebih Lanjut <i class="fas fa-arrow-circle-right"></i></a>
                </div>
            </div>
            <!-- ./col -->
            <div class="col-lg-3 col-6">
                <!-- small box -->
                <div class="small-box bg-warning">
                    <div class="inner text-white">
                        <h3>{{ $jmlpinjaman }}</h3>
                        <p>Jumlah Pinjaman</p>
                    </div>
                    <div class="icon">
                        <i class="fas fa-handshake"></i>
                    </div>
                    <a href="{{ url('/Pinjaman') }}" class="small-box-footer" style="color: white !important;">Info Lebih Lanjut <i class="fas fa-arrow-circle-right"></i></a>
                </div>
            </div>


 
            <!-- ./col -->
            <div class="col-lg-3 col-6" >
                <!-- small box -->
                <div class="small-box bg-danger">
                    <div class="inner">
                        <h3>{{ $jmlpengembalian }}</h3>
                        <p>Jumlah Pengembalian</p>
                    </div>
                    <div class="icon">
                        <i class="fas fa-undo"></i>
                    </div>
                    <a href="{{ url('/Pengembalian') }}" class="small-box-footer">Info Lebih Lanjut <i class="fas fa-arrow-circle-right"></i></a>
                </div>
            </div>
            <!-- ./col -->
        </div>
        <!-- /.row -->
    </div>
</section>
























@endsection