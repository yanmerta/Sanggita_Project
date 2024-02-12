@extends('layout.main')
@section('content')
    <!DOCTYPE html>
    <html lang="en">

    <head>
        <base href="../../../">
        <title>Profil - {{ $title }}</title>
        <!-- Anda dapat menambahkan tag meta, link stylesheet, atau elemen head lainnya yang diperlukan -->
    </head>

    <body class="bg-body">
        <div class="d-flex flex-column flex-root">
            <!-- Header atau bagian navigasi -->
            <header>
                <!-- Tambahkan header atau navigasi sesuai kebutuhan Anda -->
                <div>
                    <h1>Selamat datang di Profil SANGGITA</h1>
                    <p><a href="{{ route('logout') }}">Logout</a></p>
                </div>
            </header>

            <!-- Content -->
            <div class="d-flex flex-column flex-column-fluid">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-6">
                            <!-- Isi profil sesuai data pengguna -->
                            <h2>Informasi Profil</h2>
                            <p>Email: {{ $user->email }}</p>
                            <!-- Tambahkan informasi profil lainnya -->

                            <!-- Contoh penggunaan Blade Directives untuk menampilkan data pengguna -->
                            {{-- @if (auth()->user()->isAdmin())
                            <p>Role: Admin</p>
                        @else
                            <p>Role: User</p>
                        @endif --}}
                        </div>
                    </div>
                </div>
            </div>

            <!-- Footer atau bagian lainnya -->
            <footer>
                <!-- Tambahkan footer atau bagian lainnya sesuai kebutuhan Anda -->
                <p>&copy; 2024 Sanggita. All rights reserved.</p>
            </footer>
        </div>
    </body>

    </html>
@endsection
