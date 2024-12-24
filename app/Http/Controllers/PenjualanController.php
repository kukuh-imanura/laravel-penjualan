<?php

namespace App\Http\Controllers;

use App\Models\Penjualan;
use App\Models\Barang;
use Illuminate\Http\Request;

class PenjualanController extends Controller
{
    public function index()
    {
        $penjualans = Penjualan::with('barang')->get();
        return view('penjualans.index', compact('penjualans'));
    }

    public function create()
    {
        $barangs = Barang::all();
        return view('penjualans.create', compact('barangs'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'tgl_faktur' => 'required|date',
            'no_faktur' => 'required|unique:penjualans',
            'nama_konsumen' => 'required',
            'kode_barang' => 'required|exists:barangs,kode_barang',
            'jumlah' => 'required|integer|min:1',
            'harga_satuan' => 'required|numeric',
        ]);

        $barang = Barang::findOrFail($request->kode_barang);

        if ($barang->stok < $request->jumlah) {
            return back()->withErrors(['jumlah' => 'Stok tidak mencukupi']);
        }

        $barang->stok -= $request->jumlah;
        $barang->save();

        Penjualan::create([
            'tgl_faktur' => $request->tgl_faktur,
            'no_faktur' => $request->no_faktur,
            'nama_konsumen' => $request->nama_konsumen,
            'kode_barang' => $request->kode_barang,
            'jumlah' => $request->jumlah,
            'harga_satuan' => $request->harga_satuan,
            'harga_total' => $request->jumlah * $request->harga_satuan,
            'diskon' => $request->diskon ?? 0,
        ]);

        return redirect()->route('penjualans.index');
    }

    public function destroy($id)
    {
        $penjualan = Penjualan::findOrFail($id);
        $barang = Barang::findOrFail($penjualan->kode_barang);

        $barang->stok += $penjualan->jumlah;
        $barang->save();

        $penjualan->delete();

        return redirect()->route('penjualans.index');
    }
}