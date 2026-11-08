
@extends('layouts.app')

@section('title', 'Dashboard')

@section('content')

<h2>Dashboard Smart Library</h2>

<p>Selamat datang, {{ $username }}!</p>

<h3>Informasi Perpustakaan</h3>

<p>Total Buku : {{ $totalBuku }}</p>
<p>Kategori Buku : {{ $kategori }}</p>
<p>Buku Dipinjam : {{ $dipinjam }}</p>

<hr>

<h3>Tentang Smart Library</h3>

<p>
    Smart Library merupakan website sederhana untuk
    menampilkan informasi dan pengelolaan data buku perpustakaan.
</p>

@endsection
