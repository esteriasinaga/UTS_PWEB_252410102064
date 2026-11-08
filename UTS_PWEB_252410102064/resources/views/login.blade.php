
@extends('layouts.app')

@section('title', 'Login')

@section('content')

<div style="
    width: 350px;
    margin: 50px auto;
    padding: 25px;
    border: 1px solid #b7d7f0;
    background-color: #f5faff;
">

    <h2 style="text-align: center;">Smart Library</h2>

    <p style="text-align: center;">
        Silakan masukkan username untuk masuk.
    </p>

    <hr>

    <form action="{{ route('dashboard.submit') }}" method="POST">
        @csrf

        <label>Username</label>
        <br>

        <input
            type="text"
            name="username"
            placeholder="Masukkan username"
            required
            style="width: 95%; margin: 10px 0 15px 0;"
        >

        <br>

        <button type="submit" style="width: 100%;">
            Login
        </button>
    </form>

</div>

@endsection
