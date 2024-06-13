<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class ModelBuku extends Model
{


    protected $fillable = [
        'kd_buku',
        'judul_buku',
        'pengarang',
        'penerbit',
        'thn_terbit',
        'tebal_buku'
    ];

    protected $primaryKey = 'id';
    protected $table = 'tbl_buku';


    public function allData()
    {
        return DB::table('tbl_buku')->get();
    }

    public function detailData($id_buku)
    {
        return DB::table('tbl_buku')->where('id', $id_buku)->first();
    }

    public function addData($data)
    {
        DB::table('tbl_buku')->insert($data);
    }

    public function editData($id_buku, $data)
    {
        DB::table('tbl_buku')
            ->where('id', $id_buku)
            ->update($data);
    }

    public function deleteData($id_buku)
    {
        DB::table('tbl_buku')
            ->where('id', $id_buku)
            ->delete();
    }

    public function jumlahbuku()
    {
        return DB::table('tbl_buku')->count();
    }
}
