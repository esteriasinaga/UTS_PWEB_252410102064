@extends('layouts.app')

@section('title', 'Pengelolaan Buku')

@section('content')

<div class="d-flex justify-content-between align-items-center mb-4">

    <div>
        <h2 class="fw-bold">Pengelolaan Buku</h2>

        <p class="text-muted">
            Daftar koleksi buku Smart Library
        </p>
    </div>

    <span class="badge bg-primary p-2">
        Total: {{ count($buku) }} Buku
    </span>

</div>

<div class="card shadow-sm">

    <div class="card-body">

        <div class="table-responsive">

            <table class="table table-hover align-middle">

                <thead class="table-primary">

                    <tr>
                        <th>No</th>
                        <th>Kode Buku</th>
                        <th>Judul Buku</th>
                        <th>Penulis</th>
                        <th>Kategori</th>
                        <th>Stok</th>
                    </tr>

                </thead>

                <tbody>

                    @foreach($buku as $index => $item)

                    <tr>

                        <td>{{ $index + 1 }}</td>

                        <td>{{ $item['kode'] }}</td>

                        <td class="fw-semibold">
                            {{ $item['judul'] }}
                        </td>

                        <td>{{ $item['penulis'] }}</td>

                        <td>
                            <span class="badge bg-info text-dark">
                                {{ $item['kategori'] }}
                            </span>
                        </td>

                        <td>{{ $item['stok'] }}</td>

                    </tr>

                    @endforeach

                </tbody>

            </table>

        </div>

    </div>

</div>

<div class="mt-3">

    <a href="{{ route('login') }}"
       class="btn btn-outline-primary">

        Kembali ke Login

    </a>

</div>

@endsection