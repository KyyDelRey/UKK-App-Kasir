<?php

namespace App\Http\Controllers;

use App\Models\detail_penjualan;
use App\Models\pelanggan;
use App\Models\penjualan;
use Illuminate\Http\Request;

class PenjualanController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $penjualan = penjualan::getPenjualanWithPelanggan();
        return view("penjualan.index", compact('penjualan'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $penjualan = pelanggan::all();
        $detail = detail_penjualan::getDetailPenjualanWithProduk()->whereNUll('penjualan_id');
        return view('penjualan.create', compact(['penjualan', 'detail']));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'pelanggan_id' => 'required',
            'total_harga' => 'required',
            'tanggal_penjualan' => 'required',
        ]);
        $penjualan_id = penjualan::create([
            'pelanggan_id' => $request->pelanggan_id,
            'total_harga' => $request->total_harga,
            'tanggal_penjualan' => $request->tanggal_penjualan,
        ]);

        $penjualan_id = $penjualan_id->id;
        $detail = detail_penjualan::getDetailPenjualanWithProduk()->whereNull('penjualan_id');
        foreach ($detail as $data) {
            $detail = detail_penjualan::findOrFail($data->id);
            $detail->update(['penjualan_id' => $penjualan_id]);
        }
        return redirect()->route('penjualan.index')->with('success', 'Data penjualan Berhasil DiTambah');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $penjualan = penjualan::findOrFail($id);
        return view('penjualan.show', compact('penjualan'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $penjualan = penjualan::findOrFail($id);
        return view('penjualan.show', compact('penjualan'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        detail_penjualan::deleteDetailPenjualanById($id);
        Penjualan::findOrFail($id)->delete();
        return redirect()->route('penjualan.index')->with(['success' => 'Berhasil Menghapus Data Penjualan.']);
    }
}
