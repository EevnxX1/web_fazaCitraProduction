<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Penjualan;
use App\Models\Bestseller;
use App\Models\Recommendation;
use App\Models\Buku;


class PenjualanuserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'judul' => 'required',
            'nama' => 'required',
            'hp' => 'required',
            'alamat' => 'required',
            'tgl_beli' => 'required',
            'harga' => 'required',
            'qty' => 'required',
            'payment' => 'required',
            'total' => 'required',

        ]);
        Penjualan::create($request->all());
        return redirect()->route('homeuser.index')->with('success', 'Pembelian berhasil!, Admin akan menghubungi anda lewat WA .');
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
    public function edit($id)
    {
        $bestseller = Bestseller::find($id);
    $buku = Buku::find($id);
    $recomendation = Recommendation::find($id);

    if ($bestseller) {
        $model = $bestseller;
        $type = 'bestseller';
    } elseif ($buku) {
        $model = $buku;
        $type = 'buku';
    } elseif ($recomendation) {
        $model = $recomendation;
        $type = 'recomendation';
    }
    else {
        // Handle jika tidak ditemukan baik Bestseller maupun Buku
        abort(404);
    }

    return view('formbookuser.form-detailbook', compact('model', 'type'));
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
