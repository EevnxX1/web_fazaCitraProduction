<?php

namespace App\Http\Controllers;

use App\Models\Buku;
use App\Models\Recommendation;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class StoreuserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $recoms = Recommendation::all();
        
        $query = Buku::query();
        if($request->has('cari')) {
            $query->where('judul', 'like', '%'.$request->input('cari').'%');
        }

        $bukus = $query->latest()->paginate(20);

        return view('storebookuser.store-book', compact('bukus', 'recoms'));
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
        $bukus = Recommendation::find($id);

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
