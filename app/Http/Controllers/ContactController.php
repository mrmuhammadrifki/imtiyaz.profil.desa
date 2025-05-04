<?php

// app/Http/Controllers/ContactController.php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact;

class ContactController extends Controller
{
    // Fungsi untuk menampilkan daftar kontak
    public function index()
    {
        $contacts = Contact::all();  // Ambil semua data kontak
        return view('kontak', compact('contacts'));  // Kirim data ke view
    }

    public function store(Request $request)
    {
        // Validasi input dari pengguna
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'phone' => 'required|string|max:15',
            'message' => 'required|string|max:1000',
        ]);

        // Simpan data kontak ke database
        Contact::create([
            'name' => $request->name,
            'email' => $request->email,
            'phone' => $request->phone,
            'message' => $request->message,
        ]);

        // Redirect dengan pesan sukses
        return redirect()->back()->with('status', 'Kontak berhasil ditambahkan!');
    }

    // Fungsi untuk menampilkan form edit kontak
    public function edit($id)
    {
        // Ambil data kontak berdasarkan id
        $contact = Contact::findOrFail($id);
        return response()->json($contact);  // Kirim data kontak ke modal
    }

    // app/Http/Controllers/ContactController.php

    public function update(Request $request, $id)
{
    // Validasi input
    $request->validate([
        'name' => 'required|string|max:255',
        'email' => 'required|email|max:255',
        'phone' => 'required|string|max:15',
        'message' => 'required|string|max:1000',
    ]);

    // Cari kontak yang ingin diperbarui
    $contact = Contact::findOrFail($id);
    
    // Update data kontak
    $contact->update([
        'name' => $request->name,
        'email' => $request->email,
        'phone' => $request->phone,
        'message' => $request->message,
    ]);

    // Redirect dengan pesan sukses
    return redirect()->route('kontak.index')->with('status', 'Kontak berhasil diperbarui!');
}

public function destroy($id)
{
    // Cari kontak berdasarkan ID
    $contact = Contact::findOrFail($id);
    
    // Hapus kontak
    $contact->delete();

    // Redirect kembali ke halaman kontak dengan pesan sukses
    return redirect()->route('kontak.index')->with('status', 'Kontak berhasil dihapus!');
}


}