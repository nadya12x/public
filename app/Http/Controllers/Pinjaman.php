<?php

namespace App\Http\Controllers;

use App\Models\ModelPinjaman;

use Illuminate\Routing\Controller as BaseController;

class Pinjaman extends BaseController
{
    protected $ModelPinjaman;
    //Pemanggilan Models
    public function __construct()
    {

        // untuk memanggil semua function pada class ModelPinjaman
        $this->ModelPinjaman = new ModelPinjaman();
    }
    
    public function index()
    {
        $data = [
            'judul' => 'Halaman Pinjaman',
            'subjudul'    => 'Tampilan Data Pinjaman',
            'pinjaman' => $this->ModelPinjaman->allData()
        ];
        return view('v_pinjaman', $data);
    }

    public function Tambah()
    {
        $data = [
            'judul' => 'Halaman Tambah Pinjaman',
            'subjudul'    => 'Tampilan Tambah Pinjaman'
        ];
        return view('v_tmbhpinjaman', $data);
    }

    public function Insert()
    {
        Request()->validate([
            'judul_buku'=> 'required',
            'nama_peminjam'=> 'required',
            'tgl_peminjam'=> 'required',
            'no_hp'=> 'required',
       ], [
            'judul_buku.required' => 'Kode Buku Wajib di Isi !!',
            'nama_peminjam' => 'Kode Buku Ini Sudah Ada !!',
            'tgl_peminjaman.required' => ' Wajib di Isi !!',
            'no_hp.required' => ' Wajib di Isi !!',
            
       ]);

       $data = [
        'judul_buku' => Request()->judul_buku,
        'nama_peminjam' => Request()->nama_peminjam,
        'tgl_peminjaman' => Request()->tgl_peminjam,
        'no_hp' => Request()->no_hp,
    
       ];
       $this->ModelPinjaman->addData($data);
       return redirect()->to('/Pinjaman')->with('pesan', 'Data Berhasil Ditambah !!!');
    }

    public function Edit($id_pinjaman)
    {
        $data = [
            'judul' => 'Halaman Edit Pinjaman',
            'subjudul'    => 'Tampilan Edit Pinjaman',
            'pinjaman' => $this->ModelPinjaman->detailData($id_pinjaman)
        ];
        return view('v_editpinjaman', $data);
    }
    public function update($id_pinjaman)
    {
        Request()->validate([
            'judul_buku'=> 'required',
            'nama_peminjam'=> 'required',
            'tgl_peminjam'=> 'required',
            'no_hp'=> 'required',
       ], [
            'judul_buku.required' => 'Kode Buku Wajib di Isi !!',
            'nama_peminjam' => 'Kode Buku Ini Sudah Ada !!',
            'tgl_peminjaman.required' => ' Wajib di Isi !!',
            'no_hp.required' => ' Wajib di Isi !!',
            
       ]);

       $data = [
      
        'judul_buku' => Request()->judul_buku,
        'nama_peminjam' => Request()->nama_peminjam,
        'tgl_peminjaman' => Request()->tgl_peminjam,
        'no_hp' => Request()->no_hp,
    
       ];
       $this->ModelPinjaman->editData($id_pinjaman, $data);
       return redirect()->to('/Pinjaman')->with('update', 'Data Berhasil Diedit !!!');
    }

    public function Delete($id_pinjaman)
    {


        $this->ModelPinjaman->deleteData($id_pinjaman);
        return redirect()->to('/Pinjaman')->with('update', 'Data Berhasil Dihapus !!!');
    }
}