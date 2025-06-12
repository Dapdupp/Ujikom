<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use App\Models\usersss;


class Auth extends Controller
{
    public function showLoginForm()
    {
        return view('admin.login'); // sesuaikan dengan nama file view login kamu
    }

    public function login(Request $request)
    {
        $credentials = $request->only('email', 'password');

        // Cari user berdasarkan email dan password
        $user = usersss::where('username', $credentials['email'])
            ->where('password', $credentials['password']) // *Note: sebaiknya gunakan hash*
            ->first();

        if ($user) {
            // Simpan data user ke session
            Session::put('id_user', $user->id_user);
            Session::put('username', $user->username);
            Session::put('role', $user->role);

            return redirect()->route('admin.adminResto'); // ganti sesuai halaman setelah login
        } else {
            return back()->with('error', 'Email atau Password salah!');
        }
    }

    public function logout()
    {
        Session::flush();
        return redirect()->route('login')->with('success', 'Anda telah berhasil logout.');
    } 
}
