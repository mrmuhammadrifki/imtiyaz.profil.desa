@extends('layouts.app')

@section('content')
    <div class="container mt-5">
        <h1 class="text-center mb-4">Layanan Desa</h1>
        <p class="text-center mb-5">Halaman ini menyediakan informasi tentang layanan yang disediakan oleh desa, seperti pendaftaran penduduk, izin usaha, dan lainnya.</p>

        <!-- Layanan Desa -->
        <section>
            <div class="row">
                <!-- Layanan Pendaftaran Penduduk -->
                <div class="col-md-4 mb-4">
                    <div class="card shadow-sm">
                        <div class="card-header bg-primary text-white text-center">
                            <i class="bi bi-person-check" style="font-size: 3rem;"></i>
                            <h5 class="card-title mt-2">Pendaftaran Penduduk</h5>
                        </div>
                        <div class="card-body">
                            <p class="card-text">Layanan untuk pendataan penduduk baru yang ingin tinggal di desa ini. Melalui layanan ini, penduduk akan terdaftar dalam sistem administrasi desa.</p>
                        </div>
                        <div class="card-footer text-center">
                            <a href="#" class="btn btn-primary">Selengkapnya</a>
                        </div>
                    </div>
                </div>

                <!-- Layanan Izin Usaha -->
                <div class="col-md-4 mb-4">
                    <div class="card shadow-sm">
                        <div class="card-header bg-success text-white text-center">
                            <i class="bi bi-building" style="font-size: 3rem;"></i>
                            <h5 class="card-title mt-2">Izin Usaha</h5>
                        </div>
                        <div class="card-body">
                            <p class="card-text">Layanan yang memungkinkan warga desa untuk mendapatkan izin usaha, baik usaha mikro, kecil, maupun menengah di desa ini.</p>
                        </div>
                        <div class="card-footer text-center">
                            <a href="#" class="btn btn-success">Selengkapnya</a>
                        </div>
                    </div>
                </div>

                <!-- Layanan Kesehatan -->
                <div class="col-md-4 mb-4">
                    <div class="card shadow-sm">
                        <div class="card-header bg-info text-white text-center">
                            <i class="bi bi-heart" style="font-size: 3rem;"></i>
                            <h5 class="card-title mt-2">Layanan Kesehatan</h5>
                        </div>
                        <div class="card-body">
                            <p class="card-text">Layanan kesehatan yang disediakan di desa ini meliputi pemeriksaan kesehatan rutin, vaksinasi, dan layanan darurat.</p>
                        </div>
                        <div class="card-footer text-center">
                            <a href="#" class="btn btn-info">Selengkapnya</a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <!-- Layanan Administrasi Desa -->
                <div class="col-md-4 mb-4">
                    <div class="card shadow-sm">
                        <div class="card-header bg-warning text-white text-center">
                            <i class="bi bi-file-earmark" style="font-size: 3rem;"></i>
                            <h5 class="card-title mt-2">Layanan Administrasi Desa</h5>
                        </div>
                        <div class="card-body">
                            <p class="card-text">Meliputi layanan seperti pengurusan KTP, KK, dan akta kelahiran untuk warga desa.</p>
                        </div>
                        <div class="card-footer text-center">
                            <a href="#" class="btn btn-warning">Selengkapnya</a>
                        </div>
                    </div>
                </div>

                <!-- Layanan Bantuan Sosial -->
                <div class="col-md-4 mb-4">
                    <div class="card shadow-sm">
                        <div class="card-header bg-danger text-white text-center">
                            <i class="bi bi-people" style="font-size: 3rem;"></i>
                            <h5 class="card-title mt-2">Bantuan Sosial</h5>
                        </div>
                        <div class="card-body">
                            <p class="card-text">Layanan yang memberikan bantuan sosial kepada warga kurang mampu untuk memenuhi kebutuhan dasar mereka.</p>
                        </div>
                        <div class="card-footer text-center">
                            <a href="#" class="btn btn-danger">Selengkapnya</a>
                        </div>
                    </div>
                </div>

                <!-- Layanan Pendidikan -->
                <div class="col-md-4 mb-4">
                    <div class="card shadow-sm">
                        <div class="card-header bg-dark text-white text-center">
                            <i class="bi bi-book" style="font-size: 3rem;"></i>
                            <h5 class="card-title mt-2">Layanan Pendidikan</h5>
                        </div>
                        <div class="card-body">
                            <p class="card-text">Menyediakan program pendidikan bagi anak-anak dan pelatihan keterampilan untuk masyarakat desa.</p>
                        </div>
                        <div class="card-footer text-center">
                            <a href="#" class="btn btn-dark">Selengkapnya</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection
