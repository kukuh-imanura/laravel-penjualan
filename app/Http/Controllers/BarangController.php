<?php

namespace App\Http\Controllers;

use App\Models\Barang;
use Illuminate\Http\Request;

class BarangController extends Controller
{
    public function index()
    {
        $barangs = Barang::all();
        return view('barangs.index', compact('barangs'));
    }

    public function create()
    {
        return view('barangs.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama_barang' => 'required',
            'harga_jual' => 'required|numeric',
            'harga_beli' => 'required|numeric',
            'satuan' => 'required',
            'kategori' => 'required',
            'stok' => 'required|integer',
        ]);

        Barang::create($request->all());

        return redirect()->route('barangs.index');
    }

    public function edit($kode_barang)
    {
        $barang = Barang::findOrFail($kode_barang);
        return view('barangs.edit', compact('barang'));
    }

    public function update(Request $request, $kode_barang)
    {
        $barang = Barang::findOrFail($kode_barang);

        $request->validate([
            'nama_barang' => 'required',
            'harga_jual' => 'required|numeric',
            'harga_beli' => 'required|numeric',
            'satuan' => 'required',
            'kategori' => 'required',
            'stok' => 'required|integer',
        ]);

        $barang->update($request->all());

        return redirect()->route('barangs.index');
    }

    public function destroy($kode_barang)
    {
        $barang = Barang::findOrFail($kode_barang);
        $barang->delete();

        return redirect()->route('barangs.index');
    }
}
