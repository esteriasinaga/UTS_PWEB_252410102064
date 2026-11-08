<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    // Menampilkan halaman Login
    public function login()
    {
        return view('login');
    }

    // Menampilkan halaman Dashboard
    public function dashboard(Request $request)
    {
        $username = $request->input('username')
            ?? $request->query('username');

        return view('dashboard', [
            'username' => $username,
            'totalBuku' => 150,
            'kategori' => 12,
            'dipinjam' => 38
        ]);
    }

    // Menampilkan halaman Profile
    public function profile(Request $request)
    {
        $username = $request->query('username');

        return view('profile', compact('username'));
    }

    // Menampilkan halaman Pengelolaan Buku
    public function pengelolaan(Request $request)
    {
        $username = $request->query('username');

        $buku = [
            [
                'kode' => 'BK001',
                'judul' => 'Laravel Dasar',
                'penulis' => 'Andi',
                'kategori' => 'Pemrograman',
                'stok' => 15
            ],
            [
                'kode' => 'BK002',
                'judul' => 'PHP Modern',
                'penulis' => 'Budi',
                'kategori' => 'Pemrograman',
                'stok' => 20
            ],
            [
                'kode' => 'BK003',
                'judul' => 'MySQL Lengkap',
                'penulis' => 'Siti',
                'kategori' => 'Database',
                'stok' => 10
            ],
            [
                'kode' => 'BK004',
                'judul' => 'Belajar HTML dan CSS',
                'penulis' => 'Rina',
                'kategori' => 'Web Design',
                'stok' => 25
            ],
            [
                'kode' => 'BK005',
                'judul' => 'Python untuk Pemula',
                'penulis' => 'Doni',
                'kategori' => 'Pemrograman',
                'stok' => 18
            ]
        ];

        return view('pengelolaan', compact('buku', 'username'));
    }
}