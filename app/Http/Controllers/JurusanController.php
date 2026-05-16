<?php

namespace App\Http\Controllers;

use App\Models\Jurusan;
use Illuminate\Http\Request;

class JurusanController extends Controller
{
    public function index()
    {
        $jurusans = Jurusan::orderBy('kode_jurusan')->get();
        return view('jurusan.index', compact('jurusans'));
    }

    public function create()
    {
        return view('jurusan.form');
    }

    public function store(Request $request)
    {
        $request->validate([
            'kode_jurusan' => 'required|string|max:255|unique:jurusans,kode_jurusan',
            'nama_jurusan' => 'required|string|max:255',
        ]);

        Jurusan::create([
            'kode_jurusan' => $request->kode_jurusan,
            'nama_jurusan' => $request->nama_jurusan,
        ]);

        return redirect('/jurusan')->with(['success' => 'Data jurusan berhasil ditambahkan.']);
    }

    public function edit(string $id)
    {
        $jurusan = Jurusan::findOrFail($id);
        return view('jurusan.form', compact('jurusan'));
    }

    public function update(Request $request, string $id)
    {
        $jurusan = Jurusan::findOrFail($id);

        $request->validate([
            'kode_jurusan' => 'required|string|max:255|unique:jurusans,kode_jurusan,' . $jurusan->id,
            'nama_jurusan' => 'required|string|max:255',
        ]);

        $jurusan->update([
            'kode_jurusan' => $request->kode_jurusan,
            'nama_jurusan' => $request->nama_jurusan,
        ]);

        return redirect('/jurusan')->with(['success' => 'Data jurusan berhasil diperbarui.']);
    }

    public function destroy(string $id)
    {
        $jurusan = Jurusan::findOrFail($id);
        $jurusan->delete();

        return redirect('/jurusan')->with(['success' => 'Data jurusan berhasil dihapus.']);
    }
}

