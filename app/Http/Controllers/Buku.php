<?php

namespace App\Http\Controllers;

use App\Models\ModelBuku;
use Illuminate\Routing\Controller as BaseController;

class Buku extends BaseController
{
    protected $ModelBuku;
    //Pemanggilan Models
    public function __construct()
    {

        // untuk memanggil semua function pada class ModelBuku
        $this->ModelBuku = new ModelBuku();
    }
    
    public function index()
    {
        $data = [
            'judul' => 'Halaman Data Buku',
            'subjudul'    => 'Tampilan Data Buku',
            'buku' => $this->ModelBuku->allData()
        ];
        return view('master/v_buku', $data);
    }

    public function Tambah()
    {

       

        $data = [
            'judul' => 'Halaman Tambah Buku',
            'subjudul'    => 'Tampilan Tambah Buku'
        ];
        return view('master/v_tmbhbuku', $data);
    }

    public function Insert()
    {

      


        Request()->validate([
            'kd_buku'=> 'required|unique:tbl_buku,kd_buku',
            'judul_buku'=> 'required',
            'pengarang'=> 'required',
            'penerbit'=> 'required',
            'thn_terbit'=> 'required',
            'tebal_buku'=> 'required',
       ], [
            'kd_buku.required' => 'Kode Buku Wajib di Isi !!',
            'kd_buku.unique' => 'Kode Buku Ini Sudah Ada !!',
            'judul_buku.required' => ' Wajib di Isi !!',
            'pengarang.required' => ' Wajib di Isi !!',
            'penerbit.required' => ' Wajib di Isi !!',
            'thn_terbit.required' => ' Wajib di Isi !!',
            'tebal_buku.required' => ' Wajib di Isi !!',
           
            
       ]);

       $data = [
        'kd_buku' => Request()->kd_buku,
        'judul_buku' => Request()->judul_buku,
        'pengarang' => Request()->pengarang,
        'penerbit' => Request()->penerbit,
        'thn_terbit' => Request()->thn_terbit,
        'tebal_buku' => Request()->tebal_buku
       ];
       $this->ModelBuku->addData($data);
       return redirect()->to('/Buku')->with('pesan', 'Data Berhasil Ditambah !!!');
    }

    public function Edit($id_buku)
    {

       

        $data = [
            'judul' => 'Halaman Edit Buku',
            'subjudul'    => 'Tampilan Edit Buku',
            'buku' => $this->ModelBuku->detailData($id_buku)
        ];


        return view('master/v_editbuku', $data);
    }

    public function update($id_buku)
    {
        Request()->validate([
            'judul_buku'=> 'required',
            'pengarang'=> 'required',
            'penerbit'=> 'required',
            'thn_terbit'=> 'required',
            'tebal_buku'=> 'required',
       ], [
            'kd_buku.unique' => 'Kode Buku Ini Sudah Ada !!',
            'judul_buku.required' => ' Wajib di Isi !!',
            'pengarang.required' => ' Wajib di Isi !!',
            'penerbit.required' => ' Wajib di Isi !!',
            'thn_terbit.required' => ' Wajib di Isi !!',
            'tebal_buku.required' => ' Wajib di Isi !!',
           
            
       ]);

       $data = [
        'kd_buku' => Request()->kd_buku,
        'judul_buku' => Request()->judul_buku,
        'pengarang' => Request()->pengarang,
        'penerbit' => Request()->penerbit,
        'thn_terbit' => Request()->thn_terbit,
        'tebal_buku' => Request()->tebal_buku
    ];


    $this->ModelBuku->editData($id_buku, $data);
    return redirect()->to('/Buku')->with('update', 'Data Berhasil Diedit !!!');
 }

 public function Delete($id_buku)
 {
    
     $this->ModelBuku->deleteData($id_buku);
     return redirect()->to('/Buku')->with('delete', 'Data Berhasil Dihapus !!!');
    }
}