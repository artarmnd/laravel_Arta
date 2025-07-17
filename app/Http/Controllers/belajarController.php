<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\MahasiswaModel;

class BelajarController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $mahasiswa = MahasiswaModel::all();
        return view('mhs', compact('mahasiswa'));
    }

    /**
     * Save data to the database.
     */
    public function saveData(Request $request)
    {
        // Validasi input
        $validated = $request->validate([
            'nim'   => 'required|string|max:20',
            'nama'  => 'required|string|max:100',
            'kelas' => 'required|string|max:10',
            'foto'  => 'nullable|image|mimes:jpg,jpeg,png|max:2048',
        ]);
        if ($request->hasFile('foto')) {
        $fileName = time() . '.' . $request->foto->extension();
        $request->foto->move(public_path('uploads/foto'), $fileName);
        $validated['foto'] = 'uploads/foto/' . $fileName;
    }

        // Simpan data
        MahasiswaModel::create($validated);

        return redirect()
            ->route('mhs-baru')
            ->with('success', 'Data berhasil disimpan!');
    }

    /**
     * Show a single resource.
     */
    public function show($id)
    {
        $mhs = MahasiswaModel::findOrFail($id);
        return view('mhs_detail', compact('mhs'));
    }

    /**
     * Show form for editing a resource.
     */
    public function edit($id)
    {
        $mhs = MahasiswaModel::findOrFail($id);
        return view('mhs_edit', compact('mhs'));
    }

    /**
     * Update a resource.
     */
    public function update(Request $request, $id)
    {
        $validated = $request->validate([
            'nim'   => 'required|string|max:20',
            'nama'  => 'required|string|max:100',
            'kelas' => 'required|string|max:10',
        ]);

        $mhs = MahasiswaModel::findOrFail($id);
        $mhs->update($validated);

        return redirect()
            ->route('mhs-baru')
            ->with('success', 'Data berhasil diupdate!');
    }

    /**
     * Delete a resource.
     */
    public function destroy($id)
    {
        $mhs = MahasiswaModel::findOrFail($id);
        $mhs->delete();

        return redirect()
            ->route('mhs-baru')
            ->with('success', 'Data berhasil dihapus!');
    }
}
