<?php

namespace App\Http\Controllers;

use App\Models\detail_penjualan;
use App\Models\produk;
use Illuminate\Http\Request;

class DetailPenjualanController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $detail = detail_penjualan::getDetailPenjualanWithProduk()->whereNull('penjualan_id');
        return view('detail.index', compact('detail'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $detail = produk::all();
        return view('detail.create', compact('detail'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // $request->validate([
        //     'produk_id' => 'required',
        //     'jumlah_produk' => 'required'
        // ]);
        // $produk = produk::findOrFail($request->produk_id);
        // detail_penjualan::create([
        //     'produk_id' => $request->produk_id,
        //     'jumlah_produk' => $request->jumlah_produk,
        //     'subtotal' => ($request->jumlah_produk*$produk->harga)
        // ]);
        // return redirect()->route('detail.index')->with('success','Berhasil Menambah Item Produk');
        $request->validate([
            'produk_id' => 'required',
            'jumlah_produk' => 'required',
        ]);
        $produk = produk::findOrFail($request->produk_id);
        detail_penjualan::create([
            'produk_id' => $request->produk_id,
            'jumlah_produk' => $request->jumlah_produk,
            'subtotal' => ($request->jumlah_produk * $produk->harga)
        ]);
        return redirect()->route('detail.index')->with('success', 'Berhasil Menambahkan Item Produk');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
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
        //
    }
}
