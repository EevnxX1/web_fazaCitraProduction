<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Penjualan;
use App\Models\Buku;

class PenjualanController extends Controller
{

    public function index(Request $request)
    {
        $query = Penjualan::latest();
    
        // Check if there is a date range filter
        if ($request->has('dari') && $request->has('sampai')) {
            $dari = $request->input('dari');
            $sampai = $request->input('sampai');
            $query->whereBetween('tgl_beli', [$dari, $sampai]);
        }
    
        $penjualans = $query->paginate(20);
    
        return view('penjualan.index', compact('penjualans'))->with('i', ($request->input('page', 1) - 1) * 20);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $bukus = Buku::all();
        $penjualans = Penjualan::all(); // Pastikan penulisan model "Customer" sesuai dengan model yang sebenarnya
        return view('penjualan.create', compact('bukus', 'penjualans'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required',
            'hp' => 'required',
            'alamat' => 'required',
            'tgl_pembelian' => 'required',
            'judul' => 'required',
            'harga' => 'required',
            'qty' => 'required',
            'diskon' => 'required',
            'payment' => 'required',
            'total' => 'required',

        ]);
        Penjualan::create($request->all());
        return redirect()->route('penjualan.index')->with('success', 'Data Penjualan Berhasil Disimpan');
    }
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Penjualan $pinjam)
    {
        $bukus = Buku::all();
        return view('penjualan.edit', compact('Penjualans', 'bukus'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Penjualan $penjualan)
    {
        $request->validate([
            'nama' => 'required',
            'hp' => 'required',
            'alamat' => 'required',
            'tgl_pembelian' => 'required',
            'judul' => 'required',
            'harga' => 'required',
            'qty' => 'required',
            'diskon' => 'required',
            'payment' => 'required',
            'total' => 'required',
        ]);
        $penjualan->update($request->all());
        return redirect()->route('penjualan.index')->with('success', 'Data penjualan Berhasil Diubah');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Penjualan $penjualan)
    {
        $penjualan->delete();
        return redirect()->route('penjualan.index')->with('success', 'Data Penjualan Berhasil Dihapus');

    }
}
