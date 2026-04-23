<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aplikasi Manajemen Data Pegawai</title>

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <style>
    html, body {
        height: 100%;
    }

    body {
        display: flex;
        flex-direction: column;
    }

    .content {
        flex: 1;
    }
</style>

<nav class="navbar navbar-expand-lg navbar-dark bg-primary">
    <div class="container">

        <!-- Brand -->
        <a class="navbar-brand fw-bold" href="{{ route('home') }}">
            PT Maju Bersama
        </a>

        <!-- Hamburger -->
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarNav">

            <!-- Menu kiri -->
            <ul class="navbar-nav me-auto ">
                <li class="nav-item">
                    <a class="nav-link text-white" href="{{ route('home') }}">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-white" href="{{ route('pegawai.index') }}">Pegawai</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-white" href="{{ route('jabatan.index') }}">Jabatan</a>
                </li>
            </ul>

            <!-- Menu kanan (user) -->
            <ul class="navbar-nav ms-auto align-items-center">

                <!-- Nama user -->
                <li class="nav-item me-3 text-white">
                    👤 {{ Auth::user()->name ?? 'User' }}
                </li>

                <!-- Logout -->
                <li class="nav-item">
                    <form action="{{ route('logout') }}" method="POST" class="d-inline">
                        @csrf
                        <button type="submit" class="btn btn-outline-light btn-sm ms-2">
                            Logout
                        </button>
                    </form>
                </li>

            </ul>
        </div>
    </div>
</nav>

@if(session('success'))
    <div id="alert-success" 
         class="alert alert-success position-fixed bottom-0 start-50 translate-middle-x mb-4 shadow"
         style="z-index:9999; min-width:300px;">
        {{ session('success') }}
    </div>
@endif

<div class="container mt-4">