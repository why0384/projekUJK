<?php

namespace App\Http\Controllers;

use App\Models\Jabatan;
use App\Models\Pegawai;
use Illuminate\Http\Request;

class PegawaiController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $pegawais = Pegawai::with('jabatan')->get();
        return view('pegawai.index', compact('pegawais'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
         $jabatans = Jabatan::all();
        return view('pegawai.create', compact('jabatans'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'nama_pegawai' => 'required',
            'alamat' => 'nullable',
            'nomor_telepon' => 'nullable',
            'jabatan_id' => 'nullable|exists:jabatans,id'
        ]);

        Pegawai::create($request->all());

        return redirect()->route('pegawai.index')
                         ->with('success', 'Data pegawai berhasil ditambahkan');

    }

    /**
     * Display the specified resource.
     */
    public function show(Pegawai $pegawai)
    {
        return view('pegawai.show', compact('pegawai'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Pegawai $pegawai)
    {
        $jabatans = Jabatan::all();
        return view('pegawai.edit', compact('pegawai', 'jabatans'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Pegawai $pegawai)
    {
        $request->validate([
            'nama_pegawai' => 'required',
            'alamat' => 'nullable',
            'nomor_telepon' => 'nullable',
            'jabatan_id' => 'nullable|exists:jabatans,id'
        ]);

        $pegawai->update($request->all());

        return redirect()->route('pegawai.index')
                         ->with('success', 'Data pegawai berhasil diupdate');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Pegawai $pegawai)
    {
        $pegawai->delete();

        return redirect()->route('pegawai.index')
                         ->with('success', 'Data pegawai berhasil dihapus');
    }
}
