@extends('admin.layout')
@section('content')
    <div>
        <h1 class="font-inter text-4xl text-color1 font-bold mb-10">Form Tambah Data news</h1>
        <div class="bg-white rounded-lg p-5 shadow-table">
        <form class="user" method="POST" action="{{ route('news.store') }}" enctype="multipart/form-data" > 
        @csrf

        <label for="img_buku" class="font-inter relative block cursor-text">
                    <input id="img_buku" type="file" name="img_buku" class="peer mb-6 w-full h-14 px-3 py-4 outline-none text-gray-700 border border-gray-300 rounded-md" required>
                    <p class="-top-2 text-sm text-gray-500 bg-white px-1 absolute left-3">
                        Thumbnail Berita
                    </p>
                </label>


                <label for="judul" class="font-inter relative block cursor-text">
                    <input id="judul" type="text" name="judul" class="peer mb-6 w-full h-14 px-3 outline-none focus:border-color1 focus:border-2 text-gray-700 border border-gray-300 rounded-md" required>
                    <p class="peer-focus:-top-2 peer-focus:text-sm peer-focus:text-color1 peer-valid:-top-2 peer-valid:text-sm transition-all duration-200 ease-in-out text-base text-gray-500 bg-white px-1 absolute top-4 left-3">
                        Judul Berita
                    </p>
                </label>

                
                <label for="tanggal" class="font-inter relative block cursor-text">
                    <input id="tanggal" type="date" name="tanggal" class="peer mb-6 w-full h-14 px-3 outline-none focus:border-color1 focus:border-2 text-gray-700 border border-gray-300 rounded-md" required>
                    <p class="peer-focus:-top-2 peer-focus:text-sm peer-focus:text-color1 peer-valid:-top-2 peer-valid:text-sm transition-all duration-200 ease-in-out text-base text-gray-500 bg-white px-1 absolute top-4 left-3">
                        Tanggal Publish
                    </p>
                </label>

              
                <label for="paragraf1" class="font-inter relative block cursor-text">
                    <textarea id="paragraf1" name="paragraf1" class="peer mb-6 w-full h-14 px-3 py-4 outline-none text-gray-700 border border-gray-300 rounded-md" required> </textarea>
                    <p class="-top-2 text-sm text-gray-500 bg-white px-1 absolute left-3">
                        Paragraf Pertama
                    </p>
                </label>

                <label for="isi" class="font-inter relative block cursor-text">
                    <textarea id="isi" name="isi" class="peer mb-6 w-full h-14 px-3 py-4 outline-none text-gray-700 border border-gray-300 rounded-md" required> </textarea>
                    <p class="-top-2 text-sm text-gray-500 bg-white px-1 absolute left-3">
                        Isi berita
                    </p>
                </label>


               
               
                <button type="submit" class="py-3 px-8 text-white bg-color1 font-inter mt-2 rounded-lg">Submit Data</button>
            </form>
        </div>
    </div>
@endsection