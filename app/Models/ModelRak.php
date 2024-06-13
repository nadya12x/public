<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class ModelRak extends Model
{


    protected $fillable = [
        'rak',
    ];

    protected $primaryKey = 'id';
    protected $table = 'tbl_rak';


    public function allData()
    {
       return DB::table('tbl_rak')->get();
    }

    public function detailData($id_rak)
    {
        return DB::table('tbl_rak')->where('id', $id_rak)->first();
    }

    public function addData($data)
    {
        DB::table('tbl_rak')->insert($data);
    }

    public function editData($id_rak ,$data)
    {
        DB::table('tbl_rak')
        ->where('id', $id_rak)
        ->update($data);
    }

    public function deleteData($id_rak)
    {
        DB::table('tbl_rak')
        ->where('id', $id_rak)
        ->delete();
    }

    public function jumlahrak()
    {
        return DB::table('tbl_rak')->count();
    }

        
}