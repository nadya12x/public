<?php

namespace App\Http\Controllers;
use App\Models\ModelRak;

use Illuminate\Routing\Controller as BaseController;

class Rak extends BaseController
{
    protected $ModelRak;
    //Pemanggilan Models
    public function __construct()
    {
 
        // untuk memanggil semua function pada class ModelRak
        $this->ModelRak = new ModelRak();
    }
    public function index()
    {
        $data = [
            'judul' => 'Halaman Rak',
            'subjudul'    => 'Tampilan Data Rak',
            'rak' => $this->ModelRak->allData()
        ];
        return view('master/v_rak', $data);
    }
    public function Tambah()
    {
        $data = [
            'judul' => 'Halaman Tambah rak',
            'subjudul'    => 'Tampilan Tambah rak'
        ];
        return view('master/v_tmbhrak', $data);
    }
    public function Insert()
    {
        Request()->validate([
            'rak'=> 'required',
            
       ], [
            'rak.required' => 'Kode Buku Wajib di Isi !!',
            'rak.unique' => 'Kode Buku Ini Sudah Ada !!',
       ]);

       $data = [
        'rak' => Request()->rak,
       ];

     

       $this->ModelRak->addData($data);
       return redirect()->to('/Rak')->with('pesan', 'Data Berhasil Ditambah !!!');
    }

    public function Edit($id_rak)
    {
        $data = [
            'judul' => 'Halaman Edit Rak',
            'subjudul'    => 'Tampilan Edit Rak',
            'rak' => $this->ModelRak->detailData($id_rak)
        ];
        return view('master/v_editrak', $data);
    }

    public function update($id_rak)
    {
        Request()->validate([
            'rak'=> 'required|unique:tbl_rak,rak',
            
       ], [
            'rak.required' => 'Kode Buku Wajib di Isi !!',
            'rak.unique' => 'Kode Buku Ini Sudah Ada !!',
       ]);

       $data = [
       
        'rak' => Request()->rak,
    ];
    $this->ModelRak->editData($id_rak, $data);
    return redirect()->to('/Rak')->with('update', 'Data Berhasil Diedit !!!');
    }

     public function Delete($id_rak)
    {
     $this->ModelRak->deleteData($id_rak);
     return redirect()->to('/Rak')->with('update', 'Data Berhasil Dihapus !!!');
    }

}