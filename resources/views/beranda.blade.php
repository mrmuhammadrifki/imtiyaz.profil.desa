@extends('layouts.app')

@section('content')
    <div class="container-fluid p-0">
        <!-- Hero Section with Background Image -->
        <section class="hero-section" style="background-image: url('https://via.placeholder.com/1920x600'); background-size: cover; background-position: center; color: white;">
            <div class="hero-overlay">
                <div class="container text-center text-dark py-5">
                    <h1 class="display-4">Selamat datang di Profil Desa!</h1>
                    <p class="lead">Menampilkan informasi lengkap tentang desa, sejarah, kebudayaan, dan kehidupan masyarakatnya.</p>
                    <a href="#sejarah" class="btn btn-light btn-lg">Selengkapnya</a>
                </div>
            </div>
        </section>

        <!-- Sejarah Desa Section -->
        <section id="sejarah" class="py-5 bg-light">
            <div class="container">
                <h2 class="text-center text-primary">Sejarah Desa</h2>
                <p>Desa ini memiliki sejarah yang panjang dan kaya akan budaya. Sejak zaman kolonial, desa ini telah menjadi pusat pertemuan bagi berbagai suku dan kebudayaan. Pada awalnya, desa ini dikenal dengan nama "Desa Sejahtera" yang berasal dari bahasa Jawa yang berarti tempat kedamaian dan kesejahteraan.</p>
                <p>Pada masa kemerdekaan, desa ini turut serta dalam perjuangan mempertahankan kemerdekaan Indonesia. Banyak pejuang dari desa ini yang ikut berperang melawan penjajah demi kemerdekaan.</p>
            </div>
        </section>

        <!-- Kebudayaan dan Tradisi Section -->
        <section id="kebudayaan" class="py-5">
            <div class="container">
                <h2 class="text-center text-primary">Kebudayaan dan Tradisi</h2>
                <p>Desa ini kaya akan tradisi dan budaya yang masih dilestarikan hingga saat ini. Setiap tahun, desa mengadakan festival budaya yang memperkenalkan kebudayaan lokal seperti tarian tradisional, musik, dan makanan khas desa.</p>
                <div class="row text-center">
                    <div class="col-md-4 mb-4">
                        <div class="card shadow-sm border-light">
                            <img src="{{ asset('images/desa2.png') }}" class="card-img-top" alt="Gandrung Dance">
                            <div class="card-body">
                                <h5 class="card-title">Gandrung Dance</h5>
                                <p class="card-text">Tarian tradisional yang berasal dari desa ini, ditampilkan dalam acara besar dan festival.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 mb-4">
                        <div class="card shadow-sm border-light">
                            <img src="{{ asset('images/desa3.png') }}" class="card-img-top" alt="Jajan Pasar">
                            <div class="card-body">
                                <h5 class="card-title">Jajan Pasar</h5>
                                <p class="card-text">Makanan khas desa, terbuat dari bahan lokal seperti ketan, kelapa, dan pisang. Selalu ada dalam acara adat.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 mb-4">
                        <div class="card shadow-sm border-light">
                            <img src="{{ asset('images/desa4.png') }}"  class="card-img-top" alt="Upacara Pesta Laut">
                            <div class="card-body">
                                <h5 class="card-title">Upacara Pesta Laut</h5>
                                <p class="card-text">Upacara untuk memohon berkah dari laut, dengan melepaskan sesajen ke laut setiap tahun.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Potensi Alam Desa Section -->
        <section id="potensi" class="py-5 bg-light">
            <div class="container">
                <h2 class="text-center text-primary">Potensi Alam Desa</h2>
                <p>Desa ini memiliki keindahan alam yang luar biasa, mulai dari perbukitan hijau yang subur hingga pantai yang indah. Selain itu, desa ini juga memiliki banyak sumber daya alam yang menjadi mata pencaharian utama bagi warga desa, seperti:</p>
                <div class="row">
                    <div class="col-md-4">
                        <div class="card border-primary mb-4">
                            <div class="card-body">
                                <h5 class="card-title">Pertanian</h5>
                                <p class="card-text">Tanah yang subur memungkinkan warga untuk bercocok tanam padi, jagung, dan sayuran.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card border-primary mb-4">
                            <div class="card-body">
                                <h5 class="card-title">Pertambangan</h5>
                                <p class="card-text">Desa ini kaya akan batu kapur dan pasir yang dimanfaatkan untuk pembangunan.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card border-primary mb-4">
                            <div class="card-body">
                                <h5 class="card-title">Perikanan</h5>
                                <p class="card-text">Hasil laut seperti ikan, udang, dan kerang menjadi komoditas utama bagi masyarakat desa pesisir.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Fasilitas Desa Section -->
        <section id="fasilitas" class="py-5">
            <div class="container">
                <h2 class="text-center text-primary">Fasilitas Desa</h2>
                <p>Untuk meningkatkan kesejahteraan masyarakat, desa ini memiliki berbagai fasilitas yang mendukung kehidupan sehari-hari, antara lain:</p>
                <ul class="list-group">
                    <li class="list-group-item">Rumah Sakit Desa</li>
                    <li class="list-group-item">Pasar Tradisional</li>
                    <li class="list-group-item">Balai Desa</li>
                </ul>
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
