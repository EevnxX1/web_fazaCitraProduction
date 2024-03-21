<?php

namespace App\Http\Controllers;

use App\Models\Recommendation;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class RecommendationController extends Controller
{
    public function index(Request $request)
{
    $query = Recommendation::query();

   
    if ($request->has('cari')) {
        $query->where('judul', 'like', '%' . $request->input('cari') . '%');
    }

    $recommendations = $query->latest()->paginate(20);

    return view('recommendation.index', compact('recommendations'))->with('i', ($request->input('page', 1) - 1) * 20);
}


    public function show($id)
    {
        // You can implement this if you need to show a specific costumer's details
    }

    public function edit(recommendation $recommendation)
    {
        return view('recommendation.edit',compact('recommendation'));
        // You can implement this if you need to show an edit form for a specific costumer
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'judul' => 'required',
            'img_buku',
            'penulis' => 'required',
            'halaman' => 'required',
            'nomer_isbn' => 'required',
            'sinopsis' => 'required',
            'harga' => 'required',
            'harga_coret' => 'required',
            'img_review',
        ]);
    
        $recommendation = recommendation::find($id);
    
        // Check if a new image is being uploaded
        if ($request->hasFile('img_buku')) {
            // Get the file path of the old image
            $fileToDelete = public_path('data_recommendation/' . $recommendation->img_buku);
    
            // Check if the old image file exists before attempting to delete it
            if (File::exists($fileToDelete)) {
                // Delete the old image file
                File::delete($fileToDelete);
            }
    
            // Handle the file upload for the new image
            $file = $request->file('img_buku');
            $nama_file = time() . "_" . $file->getClientOriginalName();
    
            $tujuan_upload = 'data_recommendation';
            $file->move($tujuan_upload, $nama_file);
    
            // Update the image attribute in the database
            $recommendation->img_buku = $nama_file;
        }

        if ($request->hasFile('img_review')) {
            // Get the file path of the old image
            $fileToDelete = public_path('recommendation/' . $recommendation->img_review);
    
            // Check if the old image file exists before attempting to delete it
            if (File::exists($fileToDelete)) {
                // Delete the old image file
                File::delete($fileToDelete);
            }
    
            // Handle the file upload for the new image
            $file = $request->file('img_review');
            $nama_file = time() . "_" . $file->getClientOriginalName();
    
            $tujuan_upload = 'data_recommendation';
            $file->move($tujuan_upload, $nama_file);
    
            // Update the image attribute in the database
            $recommendation->img_review = $nama_file;
        }
    
        // Update other fields
        $recommendation->judul = $request->judul;
        $recommendation->penulis = $request->penulis;
        $recommendation->halaman = $request->halaman;
        $recommendation->nomer_isbn = $request->nomer_isbn;
        $recommendation->sinopsis = $request->sinopsis;
        $recommendation->harga = $request->harga;
        $recommendation->harga_coret = $request->harga_coret;
     
     

        $recommendation->save();
    
        return redirect()->route('recommendation.index')
            ->with('success', 'recommendation updated successfully.');
    }
    
    
    public function destroy($id)
    {
        // Get the Kendaraan record by its ID
        $recommendation = recommendation::findOrFail($id);
    
        // Get the file path of the image
        $fileToDelete = public_path('data_recommendation/' . $recommendation->img_buku);
        $fileToDelete = public_path('data_recommendation/' . $recommendation->img_review);
    
        // Check if the file exists before attempting to delete it
        if (File::exists($fileToDelete)) {
            // Delete the image file
            File::delete($fileToDelete);
        }
    
        // Delete the Kendaraan record
        $recommendation->delete();
    
        return redirect()->route('recommendation.index')
            ->with('success', 'recommendation deleted successfully.');
    }
}