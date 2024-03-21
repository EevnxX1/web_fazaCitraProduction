<?php

namespace App\Http\Controllers;


use App\Models\Buku;
use App\Models\Comingsoon;
use Illuminate\Http\Request;
use App\Models\Bestseller;
class BukuuserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {

        $buku9 = Buku::take(9)->get();
        $comings = Comingsoon::all();
        $best = Bestseller::take(1)->get();

        return view('bukuuser.books', compact('buku9', 'comings', 'best'));
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
    public function edit($id)
    {
        $bukus = Buku::find($id);

        return view('detailbookuser.detail-books', compact('bukus'));
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
