@extends('layouts.app')

@section('content')
    <!-- Daftar Kontak -->
    <div class="container mt-5">
        <h4 class="text-center">Daftar Kontak Pengguna</h4>
        <!-- Tombol Tambah Kontak -->
        <div class="mb-4 text-end">
            <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#addContactModal">
                <i class="bi bi-plus-circle"></i> Tambah Kontak
            </button>
        </div>

        @if(session('status'))
            <div class="alert alert-success">
                {{ session('status') }}
            </div>
        @endif

        <!-- Tabel Kontak -->
        <table class="table table-striped table-bordered">
            <thead>
                <tr>
                    <th scope="col">Nama</th>
                    <th scope="col">Email</th>
                    <th scope="col">Nomor Telepon</th>
                    <th scope="col">Pesan</th>
                    <th scope="col">Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach($contacts as $contact)
                <tr>
                    <td>{{ $contact->name }}</td>
                    <td>{{ $contact->email }}</td>
                    <td>{{ $contact->phone }}</td>
                    <td>{{ $contact->message }}</td>
                    <td>
                         <!-- Tombol Edit Kontak -->
                         <button class="btn btn-warning btn-sm" data-bs-toggle="modal" data-bs-target="#editContactModal" onclick="editContact({{ $contact->id }})">
                            <i class="bi bi-pencil"></i> Edit
                        </button>
                
                        <!-- Tombol Hapus Kontak -->
                        <form action="{{ url('/kontak/' . $contact->id) }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="button" class="btn btn-danger btn-sm" data-bs-toggle="modal" data-bs-target="#confirmDeleteModal" onclick="setDeleteAction('{{ url('/kontak/' . $contact->id) }}')">
                                <i class="bi bi-trash"></i> Hapus
                            </button>
                        </form>


                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>

    <!-- Modal untuk Tambah Kontak -->
    <div class="modal fade" id="addContactModal" tabindex="-1" aria-labelledby="addContactModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="addContactModalLabel">Tambah Kontak</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form action="{{ url('/kontak') }}" method="POST">
                        @csrf
                        <div class="mb-3">
                            <label for="addName" class="form-label">Nama Lengkap</label>
                            <input type="text" class="form-control" id="addName" name="name" placeholder="Masukkan Nama" required>
                        </div>
                        <div class="mb-3">
                            <label for="addEmail" class="form-label">Email</label>
                            <input type="email" class="form-control" id="addEmail" name="email" placeholder="Masukkan Email" required>
                        </div>
                        <div class="mb-3">
                            <label for="addPhone" class="form-label">Nomor Telepon</label>
                            <input type="text" class="form-control" id="addPhone" name="phone" placeholder="Masukkan Nomor Telepon" required>
                        </div>
                        <div class="mb-3">
                            <label for="addMessage" class="form-label">Pesan</label>
                            <textarea class="form-control" id="addMessage" name="message" rows="4" placeholder="Tuliskan Pesan Anda" required></textarea>
                        </div>
                        <div class="d-flex justify-content-center">
                            <button type="submit" class="btn btn-primary">Tambah Kontak</button>
                        </div>
                    </form>
                    
                </div>
            </div>
        </div>
    </div>

    <!-- Modal untuk Edit Kontak -->
<div class="modal fade" id="editContactModal" tabindex="-1" aria-labelledby="editContactModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="editContactModalLabel">Edit Kontak</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form id="editForm" method="POST" action="">
                    @csrf
                    @method('PUT') <!-- Pastikan menggunakan metode PUT -->
                    <div class="mb-3">
                        <label for="editName" class="form-label">Nama Lengkap</label>
                        <input type="text" class="form-control" id="editName" name="name" placeholder="Masukkan Nama" required>
                    </div>
                    <div class="mb-3">
                        <label for="editEmail" class="form-label">Email</label>
                        <input type="email" class="form-control" id="editEmail" name="email" placeholder="Masukkan Email" required>
                    </div>
                    <div class="mb-3">
                        <label for="editPhone" class="form-label">Nomor Telepon</label>
                        <input type="text" class="form-control" id="editPhone" name="phone" placeholder="Masukkan Nomor Telepon" required>
                    </div>
                    <div class="mb-3">
                        <label for="editMessage" class="form-label">Pesan</label>
                        <textarea class="form-control" id="editMessage" name="message" rows="4" placeholder="Tuliskan Pesan Anda" required></textarea>
                    </div>
                    <div class="d-flex justify-content-center">
                        <button type="submit" class="btn btn-warning">Simpan Perubahan</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<!-- Modal Konfirmasi Hapus -->
<div class="modal fade" id="confirmDeleteModal" tabindex="-1" aria-labelledby="confirmDeleteModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="confirmDeleteModalLabel">Konfirmasi Penghapusan</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                Apakah Anda yakin ingin menghapus kontak ini?
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
                <form id="deleteForm" method="POST" action="" style="display:inline;">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger">Hapus</button>
                </form>
            </div>
        </div>
    </div>
</div>

@endsection
@section('scripts')
    <script>
        function editContact(id) {
            console.log('Editing contact with ID: ' + id); // Debug: Pastikan ID yang dipilih benar

            fetch(`/kontak/${id}/edit`)
                .then(response => response.json())
                .then(data => {
                    document.getElementById('editName').value = data.name;
                    document.getElementById('editEmail').value = data.email;
                    document.getElementById('editPhone').value = data.phone;
                    document.getElementById('editMessage').value = data.message;

                    console.log('Form action sebelum diubah: ' + document.getElementById('editForm').action);
                    document.getElementById('editForm').action = `/kontak/${id}`;
                    console.log('Form action setelah diubah: ' + document.getElementById('editForm').action);
                });
        }

        function setDeleteAction(url) {
        // Mengatur action form di modal konfirmasi ke URL yang benar
        document.getElementById('deleteForm').action = url;
    }
    </script>
@endsection

