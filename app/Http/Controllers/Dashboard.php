<?php

namespace App\Http\Controllers;

use App\Models\ModelBuku;
use App\Models\ModelPengembalian;
use App\Models\ModelPinjaman;
use App\Models\ModelRak;
use Illuminate\Routing\Controller as BaseController;

class Dashboard extends BaseController
{

    protected $buku;
    protected $rak;
    protected $pinjaman;
    protected $pengembalian;

    public function __construct(ModelBuku $buku, ModelRak $rak, ModelPinjaman $pinjaman, ModelPengembalian $pengembalian){

        $this->buku = $buku;
        $this->rak = $rak;
        $this->pinjaman = $pinjaman;
        $this->pengembalian = $pengembalian;

    }

    public function index()
    {

       $jumlahBuku =  $this->buku->jumlahbuku();
       $jumlahRak =  $this->rak->jumlahrak();
       $jumlahPinjaman =  $this->pinjaman->jumlahpinjaman();
       $jumlahPengembalian =  $this->pengembalian->jumlahpengembalian();



      

        $data = [
            'judul' => 'Halaman Dashboard',
            'subjudul'    => 'Dashboard',
            'jmlbuku' => $jumlahBuku,
            'jmlrak' => $jumlahRak,
            'jmlpinjaman' => $jumlahPinjaman,
            'jmlpengembalian' => $jumlahPengembalian
        ];

        return view('v_dashboard', $data);
    }
}