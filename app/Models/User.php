<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use Illuminate\Support\Facades\DB;


class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;


    protected $fillable = [
        'name',
        'email',
        'password',
    ];

    protected $primaryKey = 'id';
    protected $table = 'users';

    
    public function getData($data){
       return  DB::table('users')->insert($data);
    }
    public function updateData($data, $id){
        return DB::table('users')->where('id', $id)->update($data);
    }
    
}
