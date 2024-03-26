<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserDashboardController extends Controller
{
    /**
     * Menampilkan halaman dashboard untuk pengguna.
     *
     * @return \Illuminate\Contracts\View\View
     */
    public function index()
    {
        // Tambahkan logika sesuai kebutuhan untuk menampilkan dashboard pengguna
        return view('user.dashboard');
    }
}
