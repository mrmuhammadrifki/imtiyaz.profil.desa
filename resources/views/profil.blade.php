@extends('layouts.app')

@section('content')
    <div class="container-fluid p-0">
        <!-- Hero Section with Background Image -->
        <section class="hero-section" style="background-image: url('https://via.placeholder.com/1920x600'); background-size: cover; background-position: center; color: white;">
            <div class="hero-overlay">
                <div class="container text-center py-5 text-dark">
                    <h1 class="display-4">Selamat datang di Profil Desa</h1>
                    <p class="lead">Halaman ini berisi informasi lebih lanjut tentang desa, visi dan misi, serta struktur pemerintahan desa.</p>
                    <a href="#visi" class="btn btn-light btn-lg">Selengkapnya</a>
                </div>
            </div>
        </section>

        <!-- Visi dan Misi -->
        <section id="visi" class="py-5 bg-light">
            <div class="container">
                <h2 class="text-center text-primary mb-4">Visi dan Misi Desa</h2>
                <div class="row">
                    <div class="col-md-6">
                        <div class="card shadow-sm mb-4">
                            <div class="card-header bg-primary text-white">
                                <h5 class="card-title mb-0">Visi Desa</h5>
                            </div>
                            <div class="card-body">
                                <p class="card-text">Menjadi desa yang maju, mandiri, dan sejahtera dengan mengutamakan pembangunan berkelanjutan, kebudayaan lokal, serta kesejahteraan masyarakat.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="card shadow-sm mb-4">
                            <div class="card-header bg-success text-white">
                                <h5 class="card-title mb-0">Misi Desa</h5>
                            </div>
                            <div class="card-body">
                                <ul>
                                    <li>Memajukan sektor pertanian dan perikanan untuk meningkatkan pendapatan masyarakat.</li>
                                    <li>Meningkatkan fasilitas pendidikan dan kesehatan untuk kesejahteraan bersama.</li>
                                    <li>Melestarikan kebudayaan lokal dan meningkatkan partisipasi masyarakat dalam kegiatan desa.</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Struktur Pemerintahan Desa -->
        <section id="struktur" class="py-5">
            <div class="container">
                <h2 class="text-center text-primary mb-4">Struktur Pemerintahan Desa</h2>
                <div class="row">
                    <div class="col-md-4">
                        <div class="card shadow-sm mb-4">
                           
                            <div class="card-body">
                                <h5 class="card-title">Kepala Desa</h5>
                                <p class="card-text">Pak Budi Santoso</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card shadow-sm mb-4">
                       
                            <div class="card-body">
                                <h5 class="card-title">Sekretaris Desa</h5>
                                <p class="card-text">Ibu Siti Rahmawati</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card shadow-sm mb-4">
                         
                            <div class="card-body">
                                <h5 class="card-title">Bendahara Desa</h5>
                                <p class="card-text">Saiful Anwar</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

         <!-- Galeri Foto Section -->
         <section id="galeri" class="py-5 bg-light">
            <div class="container">
                <h2 class="text-center text-primary">Galeri Foto Desa</h2>
                <div class="row">
                    <div class="col-md-4 mb-4">
                        <img src="{{ asset('images/desa1.png') }}"  class="img-fluid rounded" alt="Foto Desa 1">
                        <p class="text-center mt-2">Pemandangan Alam Desa</p>
                    </div>
                    <div class="col-md-4 mb-4">
                        <img src="{{ asset('images/desa5.png') }}"  class="img-fluid rounded" alt="Foto Desa 2">
                        <p class="text-center mt-2">Festival Budaya Desa</p>
                    </div>
                    <div class="col-md-4 mb-4">
                        <img src="{{ asset('images/desa6.png') }}"  class="img-fluid rounded" alt="Foto Desa 3">
                        <p class="text-center mt-2">Upacara Adat</p>
                    </div>
                </div>
            </div>
        </section>

    </div>
@endsection
