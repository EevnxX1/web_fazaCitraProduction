<?php

namespace App\Http\Controllers;
use App\Models\Penjualan;
use App\Models\Buku;
use App\Models\Recommendation;
use App\Models\Bestseller;

use Illuminate\Http\Request;
use Illuminate\support\Facades\DB;

class dashboardController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $penghasilan = Penjualan::select(DB::raw('qty'), 
        DB::raw('tgl_beli'))->pluck('qty', 'tgl_beli');

        $lbl = $penghasilan->keys();
        $dt = $penghasilan->values();
        $totalQty = Penjualan::sum('qty');
        $recom = Recommendation::count();
        $buku = Buku::count();
        $best = Bestseller::count();
        $totalRow = $recom + $buku + $best;

        return view('dashboard.dashboard', compact('lbl', 'dt', 'totalQty', 'totalRow'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
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
