<?php

namespace App\Http\Controllers;

use App\Models\User;
use Exception;
use Illuminate\Support\Facades\Auth;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;


class Login extends BaseController
{

    protected $users;

    public function __construct(User $users)
    {

        $this->users = $users;
    }

    public function index()
    {
        $data = [
            'judul' => 'Halaman Login',
            'subjudul'    => 'Login'
        ];
        return view('v_login', $data);
    }

    public function Register()
    {
        $data = [
            'judul' => 'Halaman Register',
            'subjudul'    => 'Register'
        ];
        return view('v_register', $data);
    }

    public function authenticate(Request $request): RedirectResponse
    {

        try {
            $credentials = $request->validate([
                'name' => ['required'],
                'password' => ['required'],
            ]);





            if (Auth::attempt($credentials)) {



                $request->session()->regenerate();

                return redirect()->intended('/Dashboard');
            }



            return back()->withErrors([
                'message' => 'Login Gagal',

            ]);
        } catch (\Throwable $th) {
          return back();
        }
    }

    public function registerData(Request $request)
    {
        try {


            if ($request->password == $request->passwordRetype) {

                $data = [
                    'name' => $request->name,
                    'email' => $request->email,
                    'password' => bcrypt($request->password),
                ];

                $this->users->getData($data);

                return back()->with('success', 'Register Berhasil');
            } else {
                return back()->with('error', 'Password Tidak Sama');
            }
        } catch (Exception $e) {
            return back()->with('error', 'Terjadi Kesalahan');
        }

        return 'registerData';
    }

    public function logout(Request $request): RedirectResponse
    {
        Auth::logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/');
    }
    public function settings()
    {

      


        return view('v_settings')
            ->with('judul', 'Settings')
            ->with('subjudul', 'Settings')
            ->with('username', Auth::user()->name)
            ->with('email', Auth::user()->email);
    }

    public function updateUser(Request $request){


        try {

            $data = [
                'name' => $request->username,
                'email' => $request->email,
                'password' => bcrypt($request->password),
            ];
            
            $this->users->updateData($data, Auth::user()->id);

            return back()->with('success', 'Update Berhasil');

        } catch (\Throwable $th) {

            return back()->with('error', 'Terjadi Kesalahan');
        }


    }
}
