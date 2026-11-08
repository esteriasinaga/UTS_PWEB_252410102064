@extends('layouts.app')

@section('title', 'Profile')

@section('content')

<div class="row justify-content-center mt-4">

    <div class="col-md-7">

        <div class="card shadow-sm">

            <div class="card-body text-center p-5">

                <div class="mb-3">

                    <div class="rounded-circle bg-primary text-white
                                d-inline-flex justify-content-center
                                align-items-center"
                         style="width:100px;height:100px;font-size:40px">

                        👤

                    </div>

                </div>

                <h3 class="fw-bold">
                    Profile Pengguna
                </h3>

                <p class="text-muted">
                    Informasi pengguna Smart Library
                </p>

                <hr>

                <div class="text-start">

                    <p>
                        <strong>Username:</strong>
                        {{ $username ?? 'Tidak tersedia' }}
                    </p>

                    <p>
                        <strong>Status:</strong>
                        Pengguna Aktif
                    </p>

                    <p>
                        <strong>Aplikasi:</strong>
                        Smart Library
                    </p>

                </div>

                <a href="{{ route('login') }}"
                   class="btn btn-primary mt-3">

                    Kembali ke Login

                </a>

            </div>

        </div>

    </div>

</div>

@endsection