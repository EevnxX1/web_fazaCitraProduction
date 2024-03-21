@extends('admin.layout')
@section('content')
    <div></div>
    <h1 class="font-inter text-4xl text-color1 font-bold mb-10">Form Update Data Bestseller</h1>
    <div class="bg-white rounded-lg p-5 shadow-table">
        <form class="user" method="POST" action="{{ route('bestseller.update', $bestseller->id) }}" enctype="multipart/form-data">
            @csrf
            @method('PUT')

            <label for="judul" class="font-inter relative block cursor-text">
                <input id="judul" type="text" name="judul" value="{{ $bestseller->judul }}" class="peer mb-6 w-full h-14 px-3 outline-none focus:border-color1 focus:border-2 text-gray-700 border border-gray-300 rounded-md" required>
                <p class="peer-focus:-top-2 peer-focus:text-sm peer-focus:text-color1 peer-valid:-top-2 peer-valid:text-sm transition-all duration-200 ease-in-out text-base text-gray-500 bg-white px-1 absolute top-4 left-3">
                    Judul Buku
                </p>
            </label>
            
            <label for="penulis" class="font-inter relative block cursor-text">
                <input id="penulis" type="text" name="penulis" value="{{ $bestseller->penulis }}" class="peer mb-6 w-full h-14 px-3 outline-none focus:border-color1 focus:border-2 text-gray-700 border border-gray-300 rounded-md" required>
                <p class="peer-focus:-top-2 peer-focus:text-sm peer-focus:text-color1 peer-valid:-top-2 peer-valid:text-sm transition-all duration-200 ease-in-out text-base text-gray-500 bg-white px-1 absolute top-4 left-3">
                    Penulis Buku
                </p>
            </label>

            <label for="halaman" class="font-inter relative block cursor-text">
                <input id="halaman" type="number" name="halaman" value="{{ $bestseller->halaman }}" class="peer mb-6 w-full h-14 px-3 outline-none focus:border-color1 focus:border-2 text-gray-700 border border-gray-300 rounded-md" required>
                <p class="peer-focus:-top-2 peer-focus:text-sm peer-focus:text-color1 peer-valid:-top-2 peer-valid:text-sm transition-all duration-200 ease-in-out text-base text-gray-500 bg-white px-1 absolute top-4 left-3">
                    Halaman Buku
                </p>
            </label>

            <label for="nomer_isbn" class="font-inter relative block cursor-text">
                <input id="nomer_isbn" type="text" name="nomer_isbn" value="{{ $bestseller->nomer_isbn }}" class="peer mb-6 w-full h-14 px-3 outline-none focus:border-color1 focus:border-2 text-gray-700 border border-gray-300 rounded-md" required>
                <p class="peer-focus:-top-2 peer-focus:text-sm peer-focus:text-color1 peer-valid:-top-2 peer-valid:text-sm transition-all duration-200 ease-in-out text-base text-gray-500 bg-white px-1 absolute top-4 left-3">
                    Nomer ISBN
                </p>
            </label>

            <label for="sinopsis" class="font-inter relative block cursor-text">
                <textarea id="sinopsis" name="sinopsis" class="peer mb-6 w-full h-14 px-3 py-4 outline-none text-gray-700 border border-gray-300 rounded-md" required>{{ $bestseller->sinopsis }}</textarea>
                <p class="-top-2 text-sm text-gray-500 bg-white px-1 absolute left-3">
                    Sinopsis
                </p>
            </label>


            <label for="harga" class="font-inter relative block cursor-text">
                <input id="harga" type="text" name="harga" value="{{ $bestseller->harga }}" class="peer mb-6 w-full h-14 px-3 outline-none focus:border-color1 focus:border-2 text-gray-700 border border-gray-300 rounded-md" required>
                <p class="peer-focus:-top-2 peer-focus:text-sm peer-focus:text-color1 peer-valid:-top-2 peer-valid:text-sm transition-all duration-200 ease-in-out text-base text-gray-500 bg-white px-1 absolute top-4 left-3">
                    Harga Diskon
                </p>
            </label>

            <label for="harga_coret" class="font-inter relative block cursor-text">
                <input id="harga_coret" type="text" name="harga_coret" value="{{ $bestseller->harga_coret }}" class="peer mb-6 w-full h-14 px-3 outline-none focus:border-color1 focus:border-2 text-gray-700 border border-gray-300 rounded-md" required>
                <p class="peer-focus:-top-2 peer-focus:text-sm peer-focus:text-color1 peer-valid:-top-2 peer-valid:text-sm transition-all duration-200 ease-in-out text-base text-gray-500 bg-white px-1 absolute top-4 left-3">
                    Harga Asli
                </p>
            </label>
       
            <label for="img_cover" class="font-inter relative block cursor-text">
                <input id="img_cover" type="file" name="cover_buku" class="peer mb-6 w-full h-14 px-3 py-4 outline-none text-gray-700 border border-gray-300 rounded-md">
                <p class="-top-2 text-sm text-gray-500 bg-white px-1 absolute left-3">
                    Cover depan buku
                </p>
            </label>

            <label for="img_buku" class="font-inter relative block cursor-text">
                <input id="img_buku" type="file" name="img_bukuM" class="peer mb-6 w-full h-14 px-3 py-4 outline-none text-gray-700 border border-gray-300 rounded-md">
                <p class="-top-2 text-sm text-gray-500 bg-white px-1 absolute left-3">
                    Gambar Buku
                </p>
            </label>
            
            <label for="img_review" class="font-inter relative block cursor-text">
                <input id="img_review" type="file" name="img_review" class="peer mb-6 w-full h-14 px-3 py-4 outline-none text-gray-700 border border-gray-300 rounded-md">
                <p class="-top-2 text-sm text-gray-500 bg-white px-1 absolute left-3">
                    Isi Buku
                </p>
            </label>

            <button type="submit" class="py-3 px-8 text-white bg-color1 font-inter mt-2 rounded-lg">Submit Data</button>
        </form>
    </div>
</div>
@endsection
