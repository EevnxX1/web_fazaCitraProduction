<?php

namespace App\Http\Controllers;

use App\Models\Buku;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class BukuController extends Controller
{

    
    public function index(Request $request)
    {
        $query = Buku::query();
    
        // Check if there's a search query
        if ($request->has('cari')) {
            $query->where('judul', 'like', '%' . $request->input('cari') . '%');
        }
    
        $bukus = $query->latest()->paginate(20);
    
        return view('buku.index', compact('bukus'))->with('i', ($request->input('page', 1) - 1) * 20);
    }

    public function create()
    {
        return view('buku.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'judul' => 'required',
            'penulis' => 'required',
            'halaman' => 'required',
            'harga_coret' => 'required',
            'harga' => 'required',
            'nomer_isbn' => 'required',
            'sinopsis' => 'required',
            'photo' => '|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'thumbnail' => '|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        // Handle the file upload for the 'photo' field
        $filePhoto = $request->file('photo');
        $namaFilePhoto = time() . "_" . $filePhoto->getClientOriginalName();
        $tujuanUploadPhoto = 'data_buku';
        $filePhoto->move($tujuanUploadPhoto, $namaFilePhoto);

        // Handle the file upload for the 'thumbnail' field
        $fileThumbnail = $request->file('thumbnail');
        $namaFileThumbnail = time() . "_" . $fileThumbnail->getClientOriginalName();
        $tujuanUploadThumbnail = 'data_buku';
        $fileThumbnail->move($tujuanUploadThumbnail, $namaFileThumbnail);

        Buku::create([
            'judul' => $request->judul,
            'penulis' => $request->penulis,
            'halaman' => $request->halaman,
            'harga_coret' => $request->harga_coret,
            'harga' => $request->harga,
            'nomer_isbn' => $request->nomer_isbn,
            'sinopsis' => $request->sinopsis,
            'photo' => $namaFilePhoto,
            'thumbnail' => $namaFileThumbnail,
        ]);

        return redirect()->route('buku.index')
            ->with('success', 'Data buku created successfully.');
    }
    public function show($id)
    {
        // You can implement this if you need to show a specific costumer's details
    }

    public function edit(buku $buku)
    {
        return view('buku.edit',compact('buku'));
        // You can implement this if you need to show an edit form for a specific costumer
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'judul' => 'required',
            'penulis' => 'required',
            'halaman' => 'required',
            'harga_coret' => 'required',
            'harga' => 'required',
            'nomer_isbn' => 'required',
            'sinopsis' => 'required',
            'photo' ,
            'thumbnail',
        ]);
    
        $buku = buku::find($id);
    
        // Check if a new image is being uploaded
        if ($request->hasFile('photo')) {
            // Get the file path of the old image
            $fileToDelete = public_path('data_buku/' . $buku->photo);
    
            // Check if the old image file exists before attempting to delete it
            if (File::exists($fileToDelete)) {
                // Delete the old image file
                File::delete($fileToDelete);
            }
    
            // Handle the file upload for the new image
            $file = $request->file('photo');
            $nama_file = time() . "_" . $file->getClientOriginalName();
    
            $tujuan_upload = 'data_buku';
            $file->move($tujuan_upload, $nama_file);
    
            // Update the image attribute in the database
            $buku->photo = $nama_file;
        }

        if ($request->hasFile('thumbnail')) {
            // Get the file path of the old image
            $fileToDelete = public_path('data_buku/' . $buku->thumbnail);
    
            // Check if the old image file exists before attempting to delete it
            if (File::exists($fileToDelete)) {
                // Delete the old image file
                File::delete($fileToDelete);
            }
    
            // Handle the file upload for the new image
            $file = $request->file('thumbnail');
            $nama_file = time() . "_" . $file->getClientOriginalName();
    
            $tujuan_upload = 'data_buku';
            $file->move($tujuan_upload, $nama_file);
    
            // Update the image attribute in the database
            $buku->thumbnail = $nama_file;
        }
    
        // Update other fields
        $buku->judul = $request->judul;
        $buku->penulis = $request->penulis;
        $buku->halaman = $request->halaman;
        $buku->harga_coret = $request->harga_coret;
        $buku->harga = $request->harga;
        $buku->nomer_isbn = $request->nomer_isbn;
        $buku->sinopsis = $request->sinopsis;
    
        $buku->save();
    
        return redirect()->route('buku.index')
            ->with('success', 'buku updated successfully.');
    }
    
    
    public function destroy($id)
    {
        // Get the Kendaraan record by its ID
        $buku = buku::findOrFail($id);
    
        // Get the file path of the image
        $fileToDelete = public_path('data_buku/' . $buku->photo);
        $fileToDelete = public_path('data_buku/' . $buku->thumbnail);
    
        // Check if the file exists before attempting to delete it
        if (File::exists($fileToDelete)) {
            // Delete the image file
            File::delete($fileToDelete);
        }
    
        // Delete the Kendaraan record
        $buku->delete();
    
        return redirect()->route('buku.index')
            ->with('success', 'buku deleted successfully.');
    }
}