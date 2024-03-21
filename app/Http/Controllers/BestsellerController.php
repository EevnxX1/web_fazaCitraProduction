<?php

namespace App\Http\Controllers;

use App\Models\Bestseller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class BestsellerController extends Controller
{
    public function index(Request $request)
{
    $query = Bestseller::query();

   
    if ($request->has('cari')) {
        $query->where('judul', 'like', '%' . $request->input('cari') . '%');
    }

    $bestsellers = $query->latest()->paginate(20);

    return view('bestseller.index', compact('bestsellers'))->with('i', ($request->input('page', 1) - 1) * 20);
}


    public function show($id)
    {
        // You can implement this if you need to show a specific costumer's details
    }

    public function edit(bestseller $bestseller)
    {
        return view('bestseller.edit',compact('bestseller'));
        // You can implement this if you need to show an edit form for a specific costumer
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'judul' => 'required',
            'img_bukuM' ,
            'penulis' => 'required',
            'halaman' => 'required',
            'nomer_isbn' => 'required',
            'sinopsis' => 'required',
            'harga' => 'required',
            'harga_coret' => 'required',
            'cover_buku',
            'img_review' ,
        ]);
    
        $bestseller = bestseller::find($id);
    
        // Check if a new image is being uploaded
        if ($request->hasFile('img_bukuM')) {
            // Get the file path of the old image
            $fileToDelete = public_path('data_bestseller/' . $bestseller->img_bukuM);
    
            // Check if the old image file exists before attempting to delete it
            if (File::exists($fileToDelete)) {
                // Delete the old image file
                File::delete($fileToDelete);
            }
    
            // Handle the file upload for the new image
            $file = $request->file('img_bukuM');
            $nama_file = time() . "_" . $file->getClientOriginalName();
    
            $tujuan_upload = 'data_bestseller';
            $file->move($tujuan_upload, $nama_file);
    
            // Update the image attribute in the database
            $bestseller->img_bukuM = $nama_file;
        }

        // Check if a new image is being uploaded
        if ($request->hasFile('cover_buku')) {
            // Get the file path of the old image
            $fileToDelete = public_path('data_bestseller/' . $bestseller->cover_buku);
    
            // Check if the old image file exists before attempting to delete it
            if (File::exists($fileToDelete)) {
                // Delete the old image file
                File::delete($fileToDelete);
            }
    
            // Handle the file upload for the new image
            $file = $request->file('cover_buku');
            $nama_file = time() . "_" . $file->getClientOriginalName();
    
            $tujuan_upload = 'data_bestseller';
            $file->move($tujuan_upload, $nama_file);
    
            // Update the image attribute in the database
            $bestseller->cover_buku = $nama_file;
        }

        if ($request->hasFile('img_review')) {
            // Get the file path of the old image
            $fileToDelete = public_path('data_bestseller/' . $bestseller->img_review);
    
            // Check if the old image file exists before attempting to delete it
            if (File::exists($fileToDelete)) {
                // Delete the old image file
                File::delete($fileToDelete);
            }
    
            // Handle the file upload for the new image
            $file = $request->file('img_review');
            $nama_file = time() . "_" . $file->getClientOriginalName();
    
            $tujuan_upload = 'data_bestseller';
            $file->move($tujuan_upload, $nama_file);
    
            // Update the image attribute in the database
            $bestseller->img_review = $nama_file;
        }
    
        // Update other fields
        $bestseller->judul = $request->judul;
        $bestseller->penulis = $request->penulis;
        $bestseller->halaman = $request->halaman;
        $bestseller->nomer_isbn = $request->nomer_isbn;
        $bestseller->sinopsis = $request->sinopsis;
        $bestseller->harga = $request->harga;
        $bestseller->harga_coret = $request->harga_coret;
     
     

        $bestseller->save();
    
        return redirect()->route('bestseller.index')
            ->with('success', 'bestseller updated successfully.');
    }
    
    
    public function destroy($id)
    {
        // Get the Kendaraan record by its ID
        $bestseller = bestseller::findOrFail($id);
    
        // Get the file path of the image
        $fileToDelete = public_path('data_bestseller/' . $bestseller->img_buku);
        $fileToDelete = public_path('data_bestseller/' . $bestseller->img_review);
    
        // Check if the file exists before attempting to delete it
        if (File::exists($fileToDelete)) {
            // Delete the image file
            File::delete($fileToDelete);
        }
    
        // Delete the Kendaraan record
        $bestseller->delete();
    
        return redirect()->route('bestseller.index')
            ->with('success', 'bestseller deleted successfully.');
    }
}