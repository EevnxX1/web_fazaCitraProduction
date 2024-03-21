@extends('admin.layout')
@section('content')
    <div></div>
    <h1 class="font-inter text-4xl text-color1 font-bold mb-10">Form Update Data Recommendation</h1>
    <div class="bg-white rounded-lg p-5 shadow-table">
        <form class="user" method="POST" action="{{ route('recommendation.update', $recommendation->id) }}" enctype="multipart/form-data">
            @csrf
            @method('PUT')

            <label for="judul" class="font-inter relative block cursor-text">
                <input id="judul" type="text" name="judul" value="{{ $recommendation->judul }}" class="peer mb-6 w-full h-14 px-3 outline-none focus:border-color1 focus:border-2 text-gray-700 border border-gray-300 rounded-md" required>
                <p class="peer-focus:-top-2 peer-focus:text-sm peer-focus:text-color1 peer-valid:-top-2 peer-valid:text-sm transition-all duration-200 ease-in-out text-base text-gray-500 bg-white px-1 absolute top-4 left-3">
                    Judul Buku
                </p>
            </label>
            
            <label for="penulis" class="font-inter relative block cursor-text">
                <input id="penulis" type="text" name="penulis" value="{{ $recommendation->penulis }}" class="peer mb-6 w-full h-14 px-3 outline-none focus:border-color1 focus:border-2 text-gray-700 border border-gray-300 rounded-md" required>
                <p class="peer-focus:-top-2 peer-focus:text-sm peer-focus:text-color1 peer-valid:-top-2 peer-valid:text-sm transition-all duration-200 ease-in-out text-base text-gray-500 bg-white px-1 absolute top-4 left-3">
                    Penulis Buku
                </p>
            </label>

            <label for="halaman" class="font-inter relative block cursor-text">
                <input id="halaman" type="number" name="halaman" value="{{ $recommendation->halaman }}" class="peer mb-6 w-full h-14 px-3 outline-none focus:border-color1 focus:border-2 text-gray-700 border border-gray-300 rounded-md" required>
                <p class="peer-focus:-top-2 peer-focus:text-sm peer-focus:text-color1 peer-valid:-top-2 peer-valid:text-sm transition-all duration-200 ease-in-out text-base text-gray-500 bg-white px-1 absolute top-4 left-3">
                    Halaman Buku
                </p>
            </label>

            <label for="nomer_isbn" class="font-inter relative block cursor-text">
                <input id="nomer_isbn" type="text" name="nomer_isbn" value="{{ $recommendation->nomer_isbn }}" class="peer mb-6 w-full h-14 px-3 outline-none focus:border-color1 focus:border-2 text-gray-700 border border-gray-300 rounded-md" required>
                <p class="peer-focus:-top-2 peer-focus:text-sm peer-focus:text-color1 peer-valid:-top-2 peer-valid:text-sm transition-all duration-200 ease-in-out text-base text-gray-500 bg-white px-1 absolute top-4 left-3">
                    Nomer ISBN
                </p>
            </label>

            <label for="sinopsis" class="font-inter relative block cursor-text">
                <textarea id="sinopsis" name="sinopsis" class="peer mb-6 w-full h-14 px-3 py-4 outline-none text-gray-700 border border-gray-300 rounded-md" required>{{ $recommendation->sinopsis }}</textarea>
                <p class="-top-2 text-sm text-gray-500 bg-white px-1 absolute left-3">
                    Sinopsis
                </p>
            </label>


            <label for="harga" class="font-inter relative block cursor-text">
                <input id="harga" type="text" name="harga" value="{{ $recommendation->harga }}" class="peer mb-6 w-full h-14 px-3 outline-none focus:border-color1 focus:border-2 text-gray-700 border border-gray-300 rounded-md" required>
                <p class="peer-focus:-top-2 peer-focus:text-sm peer-focus:text-color1 peer-valid:-top-2 peer-valid:text-sm transition-all duration-200 ease-in-out text-base text-gray-500 bg-white px-1 absolute top-4 left-3">
                    Harga Diskon
                </p>
            </label>

            <label for="harga_coret" class="font-inter relative block cursor-text">
                <input id="harga_coret" type="text" name="harga_coret" value="{{ $recommendation->harga_coret }}" class="peer mb-6 w-full h-14 px-3 outline-none focus:border-color1 focus:border-2 text-gray-700 border border-gray-300 rounded-md" required>
                <p class="peer-focus:-top-2 peer-focus:text-sm peer-focus:text-color1 peer-valid:-top-2 peer-valid:text-sm transition-all duration-200 ease-in-out text-base text-gray-500 bg-white px-1 absolute top-4 left-3">
                    Harga Asli
                </p>
            </label>

            <input type="hidden" name="current_img_buku" value="{{ $recommendation->img_buku }}">

            <label for="img_buku" class="font-inter relative block cursor-text">
                <input id="img_buku" type="file" name="img_buku" class="peer mb-6 w-full h-14 px-3 py-4 outline-none text-gray-700 border border-gray-300 rounded-md" accept="image/*">
                <p class="-top-2 text-sm text-gray-500 bg-white px-1 absolute left-3">
                    Cover Buku:
                </p>
                @if($recommendation->img_buku)
                    <img src="{{ asset('data_recommendation/' . $recommendation->img_buku) }}" alt="Current Image" class="mt-2 rounded-md" width="200" height="100">
                    <p class="mt-2 text-sm text-gray-500 bg-white px-1 absolute left-3">
                        Current Image Name: {{ $recommendation->img_buku }}
                    </p>
                @else
                    <p class="mt-2 text-sm text-gray-500 bg-white px-1 absolute left-3">
                        No current image.
                    </p>
                @endif
            </label>
            <br>
            <br>

            
            <input type="hidden" name="current_img_buku" value="{{ $recommendation->img_review }}">
            
            <label for="img_review" class="font-inter relative block cursor-text">
                <input id="img_review" type="file" name="img_review" class="peer mb-6 w-full h-14 px-3 py-4 outline-none text-gray-700 border border-gray-300 rounded-md" accept="image/*">
                <p class="-top-2 text-sm text-gray-500 bg-white px-1 absolute left-3">
                    Isi Buku:
                </p>
                @if($recommendation->img_review)
                    <img src="{{ asset('data_recommendation/' . $recommendation->img_review) }}" alt="Current Image" class="mt-2 rounded-md" width="200" height="100">
                    <p class="mt-2 text-sm text-gray-500 bg-white px-1 absolute left-3">
                        Current Image Name: {{ $recommendation->img_review }}
                    </p>
                @else
                    <p class="mt-2 text-sm text-gray-500 bg-white px-1 absolute left-3">
                        No current image.
                    </p>
                @endif
            </label>
            <br>
            <br>
            
           
            <button type="submit" class="py-3 px-8 text-white bg-color1 font-inter mt-2 rounded-lg">Submit Data</button>
        </form>
    </div>
</div>
@endsection
