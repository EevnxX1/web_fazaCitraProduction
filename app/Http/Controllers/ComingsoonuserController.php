<?php

namespace App\Http\Controllers;

use App\Models\Comingsoon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class ComingsoonuserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $comings = Comingsoon::all();
        $bigBook = Comingsoon::take(1)->get();
        return view('comingsoonuser.coming-soon', compact('comings', 'bigBook'));
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
        $coming = Comingsoon::find($id);

        return view('comingsoonuser.detail-comingsoon', compact('coming'));
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
