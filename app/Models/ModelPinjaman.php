<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class ModelPinjaman extends Model
{


    protected $fillable = [
         'judul_buku', 'nama_peminjam', 'no_hp', 'tgl_peminjaman',
    ];

    protected $primaryKey = 'id';
    protected $table = 'tbl_pinjaman';


    public function allData()
    {
       return DB::table('tbl_pinjaman')->get();
    }

    public function detailData($id_pinjaman)
    {
        return DB::table('tbl_pinjaman')->where('id', $id_pinjaman)->first();
    }

    public function addData($data)
    {

       

        DB::table('tbl_pinjaman')->insert($data);
    }

    public function editData($id_pinjaman ,$data)
    {
        DB::table('tbl_pinjaman')
        ->where('id', $id_pinjaman)
        ->update($data);
    }

    public function deleteData($id_pinjaman)
    {
        DB::table('tbl_pinjaman')
        ->where('id', $id_pinjaman)
        ->delete();
    }
    public function jumlahpinjaman()
    {
        return DB::table('tbl_pinjaman')->count();
    }

        
}