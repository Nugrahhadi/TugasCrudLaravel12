<?php

namespace App\Http\Controllers;

use App\Models\Satuan;
use Illuminate\Http\Request;

class SatuanController extends Controller
{

    // tampilkan daftar satuan
    public function index()
    {
        $satuans = Satuan::latest()->paginate(5);
        return view('satuans.index', compact('satuans'));
    }

    // tampilkan form tambah data
    public function create()
    {
        return view('satuans.create');
    }

    // simpan data
    public function store(Request $request)
    {
        $request->validate([
            'nama_satuan' => 'required|string|max:255',
            'keterangan' => 'nullable|string'
        ]);

        Satuan::create($request->all());

        return redirect()->route('satuans.index')
            ->with('success', 'Satuan berhasil ditambahkan.');
    }

    // menampilkan detail
    public function show(Satuan $satuan)
    {
        return view('satuans.show', compact('satuan'));
    }

    // tampilkan form edit
    public function edit(Satuan $satuan)
    {
        return view('satuans.edit', compact('satuan'));
    }

    // simpan update data
    public function update(Request $request, Satuan $satuan)
    {
        $request->validate([
            'nama_satuan' => 'required|string|max:255',
            'keterangan' => 'nullable|string'
        ]);

        $satuan->update($request->all());

        return redirect()->route('satuans.index')
            ->with('success', 'Satuan berhasil diperbarui.');
    }

    // hapus data
    public function destroy(Satuan $satuan)
    {
        $satuan->delete();

        return redirect()->route('satuans.index')
            ->with('success', 'Satuan berhasil dihapus.');
    }
}
