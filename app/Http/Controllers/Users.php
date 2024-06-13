<?php

namespace App\Http\Controllers;

use Illuminate\Routing\Controller as BaseController;

class Users extends BaseController
{
    public function index()
    {
        $data = [
            'judul' => 'Halaman Users',
            'subjudul'    => 'Tampilan Data Users'
        ];
        return view('v_users', $data);
    }
}