<?php

namespace App\Http\Controllers;

use App\Models\Comingsoon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class ComingsoonController extends Controller
{
    public function index(Request $request)
    {
        $query = Comingsoon::query();
    
       
        if ($request->has('cari')) {
            $query->where('judul', 'like', '%' . $request->input('cari') . '%');
        }
    
        $comingsoons = $query->latest()->paginate(20);
    
        return view('comingsoon.index', compact('comingsoons'))->with('i', ($request->input('page', 1) - 1) * 20);
    }
    

    public function show($id)
    {
        // You can implement this if you need to show a specific customer's details
    }

    public function edit(Comingsoon $comingsoon)
    {
        return view('comingsoon.edit', compact('comingsoon'));
        // You can implement this if you need to show an edit form for a specific customer
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'judul' => 'required',
            'img_buku' ,
            'penulis' => 'required',
            'penerbit' => 'required',
            'halaman' => 'required',
            'ukuran_buku' => 'required',
            'laminasi' => 'required',
            'sinopsis' => 'required',
            'link_tt' => 'required',
            'link_sp' => 'required',
            'link_pb' => 'required',
            'link_tokped' => 'required',
        ]);

        $comingsoon = Comingsoon::find($id);

        // Check if a new image is being uploaded
        if ($request->hasFile('img_buku')) {
            // Get the file path of the old image
            $fileToDelete = public_path('data_comingsoon/' . $comingsoon->img_buku);

            // Check if the old image file exists before attempting to delete it
            if (File::exists($fileToDelete)) {
                // Delete the old image file
                File::delete($fileToDelete);
            }

            // Handle the file upload for the new image
            $file = $request->file('img_buku');
            $nama_file = time() . "_" . $file->getClientOriginalName();

            $tujuan_upload = 'data_comingsoon';
            $file->move($tujuan_upload, $nama_file);

            // Update the image attribute in the database
            $comingsoon->img_buku = $nama_file;
        }

        // Update other fields
        $comingsoon->judul = $request->judul;
        $comingsoon->penulis = $request->penulis;
        $comingsoon->penerbit = $request->penerbit;
        $comingsoon->halaman = $request->halaman;
        $comingsoon->ukuran_buku = $request->ukuran_buku;
        $comingsoon->sinopsis = $request->sinopsis;
        $comingsoon->link_tt = $request->link_tt;
        $comingsoon->link_sp = $request->link_sp;
        $comingsoon->link_pb = $request->link_pb;
        $comingsoon->link_tokped = $request->link_tokped;

        $comingsoon->save();

        return redirect()->route('comingsoon.index')
            ->with('success', 'Comingsoon updated successfully.');
    }

    public function destroy($id)
    {
        // Get the Comingsoon record by its ID
        $comingsoon = Comingsoon::findOrFail($id);

        // Get the file path of the image
        $fileToDelete = public_path('data_comingsoon/' . $comingsoon->img_buku);

        // Check if the file exists before attempting to delete it
        if (File::exists($fileToDelete)) {
            // Delete the image file
            File::delete($fileToDelete);
        }

        // Delete the Comingsoon record
        $comingsoon->delete();

        return redirect()->route('comingsoon.index')
            ->with('success', 'Comingsoon deleted successfully.');
    }
}