<?php

namespace App\Http\Controllers;

use App\Models\News;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class NewsController extends Controller
{
    public function index(Request $request)
    {
        $query = News::latest();
    
        // Check if there is a search query
        if ($request->has('cari')) {
            $query->where('judul', 'like', '%' . $request->input('cari') . '%');
        }
    
        // Check if there is a date filter
        if ($request->has('tanggal')) {
            $query->whereDate('tanggal', $request->input('tanggal'));
        }
    
        $newss = $query->paginate(20);
    
        return view('news.index', compact('newss'))->with('i', ($request->input('page', 1) - 1) * 20);
    }
    

    public function create()
    {
        return view('news.create');
    }

    public function store(Request $request)
    {
        $request->validate([
          
            'img_buku' => '|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'judul' => 'required',
            'tanggal' => 'required',
            'paragraf1' => 'required',
            'isi' => 'required',
        ]);


        $fileimgbuku = $request->file('img_buku');
        $namafileimgbuku = time() . "_" . $fileimgbuku->getClientOriginalName();
        $tujuanUploadimgbuku = 'data_news';
        $fileimgbuku->move($tujuanUploadimgbuku, $namafileimgbuku);


        News::create([
            'img_buku' => $namafileimgbuku,
            'judul' => $request->judul,
            'tanggal' => $request->tanggal,
            'paragraf1' => $request->paragraf1,
            'isi' => $request->isi,
 
        ]);

        return redirect()->route('news.index')
            ->with('success', 'Data News created successfully.');
    }
    public function show($id)
    {
    }

    public function edit(news $news)
    {
        return view('news.edit',compact('news'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'img_buku' ,
            'judul' => 'required',
            'tanggal' => 'required',
            'paragraf1' => 'required',
            'isi' => 'required',
        ]);
    
        $news = news::find($id);
    
      
        if ($request->hasFile('img_buku')) {
         
            $fileToDelete = public_path('data_news/' . $news->img_buku);
    
         
            if (File::exists($fileToDelete)) {
              
                File::delete($fileToDelete);
            }
    
            // Handle the file upload for the new image
            $file = $request->file('img_buku');
            $nama_file = time() . "_" . $file->getClientOriginalName();
    
            $tujuan_upload = 'data_news';
            $file->move($tujuan_upload, $nama_file);
    
            // Update the image attribute in the database
            $news->img_buku = $nama_file;
        }

      
    
        // Update other fields
        $news->judul = $request->judul;
        $news->tanggal = $request->tanggal;
        $news->paragraf1 = $request->paragraf1;
        $news->isi = $request->isi;
    
        $news->save();
    
        return redirect()->route('news.index')
            ->with('success', 'buku updated successfully.');
    }
    
    
    public function destroy($id)
    {
        // Get the Kendaraan record by its ID
        $news = news::findOrFail($id);
    
        // Get the file path of the image
        $fileToDelete = public_path('data_news/' . $news->img_buku);

    
        // Check if the file exists before attempting to delete it
        if (File::exists($fileToDelete)) {
            // Delete the image file
            File::delete($fileToDelete);
        }
    
        // Delete the Kendaraan record
        $news->delete();
    
        return redirect()->route('news.index')
            ->with('success', 'news deleted successfully.');
    }
}