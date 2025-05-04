@extends('layouts.app')

@section('content')
    <div class="container mt-5">
        <h1 class="text-center mb-4">Galeri Desa</h1>
        <p class="text-center mb-5">Di halaman ini, Anda bisa melihat foto-foto kegiatan dan pemandangan di desa kami.</p>

        <!-- Galeri Foto -->
        <section>
            <div class="row">
                <div class="col-md-4 mb-4">
                    <a href="{{ asset('images/desa1.png') }}" data-bs-toggle="lightbox" data-bs-target="#gallery" class="text-decoration-none">
                        <img src="{{ asset('images/desa1.png') }}" class="img-fluid rounded shadow-sm" alt="Foto Desa 1">
                    </a>
                    <p class="text-center mt-2">Pemandangan Alam Desa</p>
                </div>
                <div class="col-md-4 mb-4">
                    <a href="{{ asset('images/desa2.png') }}" data-bs-toggle="lightbox" data-bs-target="#gallery" class="text-decoration-none">
                        <img src="{{ asset('images/desa2.png') }}" class="img-fluid rounded shadow-sm" alt="Foto Desa 2">
                    </a>
                    <p class="text-center mt-2">Festival Budaya Desa</p>
                </div>
                <div class="col-md-4 mb-4">
                    <a href="{{ asset('images/desa3.png') }}" data-bs-toggle="lightbox" data-bs-target="#gallery" class="text-decoration-none">
                        <img src="{{ asset('images/desa3.png') }}" class="img-fluid rounded shadow-sm" alt="Foto Desa 3">
                    </a>
                    <p class="text-center mt-2">Upacara Adat</p>
                </div>
            </div>
        </section>

    </div>

    <!-- Lightbox Script (Bootstrap 5) -->
    <div class="row justify-content-center mb-5">
        <div class="col-md-8">
            <div class="lightbox" id="gallery" data-bs-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="{{ asset('images/desa1.png') }}" class="d-block w-100" alt="Image 1">
                    </div>
                    <div class="carousel-item">
                        <img src="{{ asset('images/desa2.png') }}" class="d-block w-100" alt="Image 2">
                    </div>
                    <div class="carousel-item">
                        <img src="{{ asset('images/desa3.png') }}" class="d-block w-100" alt="Image 3">
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
