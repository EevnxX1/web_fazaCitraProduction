@extends('admin.layout')
@section('content')
    <div>
        <h1 class="font-inter text-4xl text-color1 font-bold mb-10">Form Tambah Data Buku</h1>
        <div class="bg-white rounded-lg p-5 shadow-table">
        <form class="user" method="POST" action="{{ route('buku.store') }}" enctype="multipart/form-data" > 
        @csrf
                <label for="judul" class="font-inter relative block cursor-text">
                    <input id="judul" type="text" name="judul" class="peer mb-6 w-full h-14 px-3 outline-none focus:border-color1 focus:border-2 text-gray-700 border border-gray-300 rounded-md" required>
                    <p class="peer-focus:-top-2 peer-focus:text-sm peer-focus:text-color1 peer-valid:-top-2 peer-valid:text-sm transition-all duration-200 ease-in-out text-base text-gray-500 bg-white px-1 absolute top-4 left-3">
                        Judul Buku
                    </p>
                </label>
                <label for="penulis" class="font-inter relative block cursor-text">
                    <input id="penulis" type="text" name="penulis" class="peer mb-6 w-full h-14 px-3 outline-none focus:border-color1 focus:border-2 text-gray-700 border border-gray-300 rounded-md" required>
                    <p class="peer-focus:-top-2 peer-focus:text-sm peer-focus:text-color1 peer-valid:-top-2 peer-valid:text-sm transition-all duration-200 ease-in-out text-base text-gray-500 bg-white px-1 absolute top-4 left-3">
                        Penulis Buku
                    </p>
                </label>
                <label for="halaman" class="font-inter relative block cursor-text">
                    <input id="halaman" type="number" name="halaman" class="peer mb-6 w-full h-14 px-3 outline-none focus:border-color1 focus:border-2 text-gray-700 border border-gray-300 rounded-md" required>
                    <p class="peer-focus:-top-2 peer-focus:text-sm peer-focus:text-color1 peer-valid:-top-2 peer-valid:text-sm transition-all duration-200 ease-in-out text-base text-gray-500 bg-white px-1 absolute top-4 left-3">
                        Halaman Buku
                    </p>
                </label>
                <label for="harga_coret" class="font-inter relative block cursor-text">
                    <input id="harga_coret" type="text" name="harga_coret" class="peer mb-6 w-full h-14 px-3 outline-none focus:border-color1 focus:border-2 text-gray-700 border border-gray-300 rounded-md" required>
                    <p class="peer-focus:-top-2 peer-focus:text-sm peer-focus:text-color1 peer-valid:-top-2 peer-valid:text-sm transition-all duration-200 ease-in-out text-base text-gray-500 bg-white px-1 absolute top-4 left-3">
                        Harga Asli
                    </p>
                </label>
                <label for="harga" class="font-inter relative block cursor-text">
                    <input id="harga" type="text" name="harga" class="peer mb-6 w-full h-14 px-3 outline-none focus:border-color1 focus:border-2 text-gray-700 border border-gray-300 rounded-md" required>
                    <p class="peer-focus:-top-2 peer-focus:text-sm peer-focus:text-color1 peer-valid:-top-2 peer-valid:text-sm transition-all duration-200 ease-in-out text-base text-gray-500 bg-white px-1 absolute top-4 left-3">
                        Harga Diskon
                    </p>
                </label>
                <label for="nomer_isbn" class="font-inter relative block cursor-text">
                    <input id="nomer_isbn" type="text" name="nomer_isbn" class="peer mb-6 w-full h-14 px-3 outline-none focus:border-color1 focus:border-2 text-gray-700 border border-gray-300 rounded-md" required>
                    <p class="peer-focus:-top-2 peer-focus:text-sm peer-focus:text-color1 peer-valid:-top-2 peer-valid:text-sm transition-all duration-200 ease-in-out text-base text-gray-500 bg-white px-1 absolute top-4 left-3">
                        Nomer ISBN
                    </p>
                </label>
                </label>
                <label for="sinopsis" class="font-inter relative block cursor-text">
                    <textarea id="sinopsis" name="sinopsis" class="peer mb-6 w-full h-14 px-3 py-4 outline-none text-gray-700 border border-gray-300 rounded-md" required> </textarea>
                    <p class="-top-2 text-sm text-gray-500 bg-white px-1 absolute left-3">
                        Sinopsis
                    </p>
                </label>
                <label for="photo" class="font-inter relative block cursor-text">
                    <input id="photo" type="file" name="photo" class="peer mb-6 w-full h-14 px-3 py-4 outline-none text-gray-700 border border-gray-300 rounded-md" required>
                    <p class="-top-2 text-sm text-gray-500 bg-white px-1 absolute left-3">
                        Photo
                    </p>
                </label>
                <label for="thumbnail" class="font-inter relative block cursor-text">
                    <input id="thumbnail" type="file" name="thumbnail" class="peer mb-6 w-full h-14 px-3 py-4 outline-none text-gray-700 border border-gray-300 rounded-md" required>
                    <p class="-top-2 text-sm text-gray-500 bg-white px-1 absolute left-3">
                      thumbnail
                    </p>
                </label>
                <button type="submit" class="py-3 px-8 text-white bg-color1 font-inter mt-2 rounded-lg">Submit Data</button>
            </form>
        </div>
    </div>
@endsection