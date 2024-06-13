<?php

namespace App\Http\Controllers;

use App\Models\ModelPengembalian;

use Illuminate\Routing\Controller as BaseController;

class Pengembalian extends BaseController
{
    protected $ModelPengembalian;
    //Pemanggilan Models
    public function __construct()
    {

        // untuk memanggil semua function pada class Modelpengembalian
        $this->ModelPengembalian = new ModelPengembalian();
    }
    
    public function index()
    {

        $data = [
            'judul' => 'Halaman pengembalian',
            'subjudul'    => 'Tampilan Data pengembalian',
            'pengembalian' => $this->ModelPengembalian->allData()
        ];
        return view('v_pengembalian', $data);
    }

    public function Tambah()
    {
       

        $data = [
            'judul' => 'Halaman Tambah pengembalian',
            'subjudul'    => 'Tampilan Tambah pengembalian'
        ];
        return view('v_tmbhpengembalian', $data);
    }

    public function Insert()
    {

    


        Request()->validate([
            'judul_buku'=> 'required',
            'nama_peminjam'=> 'required',
            'tgl_pengembalian'=> 'required',
            'no_hp'=> 'required',
       ], [
            'judul_buku.required' => 'Kode Buku Wajib di Isi !!',
            'nama_peminjam' => 'Kode Buku Ini Sudah Ada !!',
            'tgl_pengembalian.required' => ' Wajib di Isi !!',
            'no_hp.required' => ' Wajib di Isi !!',
            
       ]);

       $data = [
        'judul_buku' => Request()->judul_buku,
        'nama_peminjam' => Request()->nama_peminjam,
        'tgl_pengembalian' => Request()->tgl_pengembalian,
        'no_hp' => Request()->no_hp,
    
       ];
       $this->ModelPengembalian->addData($data);
       return redirect()->to('/Pengembalian')->with('pesan', 'Data Berhasil Ditambah !!!');
    }

    public function Edit($id_pengembalian)
    {
        $data = [
            'judul' => 'Halaman Edit pengembalian',
            'subjudul'    => 'Tampilan Edit pengembalian',
            'pengembalian' => $this->ModelPengembalian->detailData($id_pengembalian)
        ];
        return view('v_editpengembalian', $data);
    }

    public function update($id_pengembalian)
    {
        Request()->validate([
            'judul_buku'=> 'required',
            'nama_peminjam'=> 'required',
            'tgl_pengembalian'=> 'required',
            'no_hp'=> 'required',
       ], [
            'judul_buku.required' => 'Kode Buku Wajib di Isi !!',
            'nama_peminjam' => 'Kode Buku Ini Sudah Ada !!',
            'tgl_pengembalian.required' => ' Wajib di Isi !!',
            'no_hp.required' => ' Wajib di Isi !!',
            
       ]);

       $data = [
     
        'judul_buku' => Request()-> judul_buku,
        'nama_peminjam' => Request()-> nama_peminjam,
        'tgl_pengembalian' => Request()-> tgl_pengembalian,
        'no_hp' => Request()->no_hp,
    
       ];
       $this->ModelPengembalian->editData($id_pengembalian, $data);
       return redirect()->to('/Pengembalian')->with('update', 'Data Berhasil Diedit !!!');
    }

    public function Delete($id_pengembalian)
    {
        $this->ModelPengembalian->deleteData($id_pengembalian);
        return redirect()->to('/Pengembalian')->with('update', 'Data Berhasil Dihapus !!!');
    }
    
}