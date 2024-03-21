@extends('admin.layout')

@section('content')
    <h1 class="font-inter text-4xl text-color1 font-bold mb-10">Form Update Data Comingsoon</h1>
    <div class="bg-white rounded-lg p-5 shadow-table">
        <form class="user" method="POST" action="{{ route('comingsoon.update', $comingsoon->id) }}" enctype="multipart/form-data">
            @csrf
            @method('PUT')

            <label for="img_buku" class="font-inter relative block cursor-text">
                <input id="img_buku" type="file" name="img_buku" class="peer mb-6 w-full h-14 px-3 py-4 outline-none text-gray-700 border border-gray-300 rounded-md" accept="image/*">
                <p class="-top-2 text-sm text-gray-500 bg-white px-1 absolute left-3">
                    Current Image:
                </p>
                @if($comingsoon->img_buku)
                    <img src="{{ asset('data_comingsoon/' . $comingsoon->img_buku) }}" alt="Current Image" class="mt-2 rounded-md" width="200" height="100">
                    <p class="mt-2 text-sm text-gray-500 bg-white px-1 absolute left-3">
                        Current Image Name: {{ $comingsoon->img_buku }}
                    </p>
                @else
                    <p class="mt-2 text-sm text-gray-500 bg-white px-1 absolute left-3">
                        No current image.
                    </p>
                @endif
            </label>

            <br>
            <br>
            <label for="judul" class="font-inter relative block cursor-text">
                <input id="judul" type="text" name="judul" value="{{ $comingsoon->judul }}" class="peer mb-6 w-full h-14 px-3 outline-none focus:border-color1 focus:border-2 text-gray-700 border border-gray-300 rounded-md" required>
                <p class="peer-focus:-top-2 peer-focus:text-sm peer-focus:text-color1 peer-valid:-top-2 peer-valid:text-sm transition-all duration-200 ease-in-out text-base text-gray-500 bg-white px-1 absolute top-4 left-3">
                    Judul Buku
                </p>
            </label>

            <label for="penulis" class="font-inter relative block cursor-text">
                <input id="penulis" type="text" name="penulis" value="{{ $comingsoon->penulis }}" class="peer mb-6 w-full h-14 px-3 outline-none focus:border-color1 focus:border-2 text-gray-700 border border-gray-300 rounded-md" required>
                <p class="peer-focus:-top-2 peer-focus:text-sm peer-focus:text-color1 peer-valid:-top-2 peer-valid:text-sm transition-all duration-200 ease-in-out text-base text-gray-500 bg-white px-1 absolute top-4 left-3">
                    Penulis Buku
                </p>
            </label>

            <label for="penerbit" class="font-inter relative block cursor-text">
                <input id="penerbit" type="text" name="penerbit" value="{{ $comingsoon->penerbit }}" class="peer mb-6 w-full h-14 px-3 outline-none focus:border-color1 focus:border-2 text-gray-700 border border-gray-300 rounded-md" required>
                <p class="peer-focus:-top-2 peer-focus:text-sm peer-focus:text-color1 peer-valid:-top-2 peer-valid:text-sm transition-all duration-200 ease-in-out text-base text-gray-500 bg-white px-1 absolute top-4 left-3">
                    Penerbit Buku
                </p>
            </label>
            
            <label for="halaman" class="font-inter relative block cursor-text">
                <input id="halaman" type="text" name="halaman" value="{{ $comingsoon->halaman }}" class="peer mb-6 w-full h-14 px-3 outline-none focus:border-color1 focus:border-2 text-gray-700 border border-gray-300 rounded-md" required>
                <p class="peer-focus:-top-2 peer-focus:text-sm peer-focus:text-color1 peer-valid:-top-2 peer-valid:text-sm transition-all duration-200 ease-in-out text-base text-gray-500 bg-white px-1 absolute top-4 left-3">
                    Halaman Buku
                </p>
            </label>


            <label for="ukuran_buku" class="font-inter relative block cursor-text">
                <input id="ukuran_buku" type="text" name="ukuran_buku" value="{{ $comingsoon->ukuran_buku }}" class="peer mb-6 w-full h-14 px-3 outline-none focus:border-color1 focus:border-2 text-gray-700 border border-gray-300 rounded-md" required>
                <p class="peer-focus:-top-2 peer-focus:text-sm peer-focus:text-color1 peer-valid:-top-2 peer-valid:text-sm transition-all duration-200 ease-in-out text-base text-gray-500 bg-white px-1 absolute top-4 left-3">
                    Ukuran Buku
                </p>
            </label>

            <label for="laminasi" class="font-inter relative block cursor-text">
                <input id="laminasi" type="text" name="laminasi" value="{{ $comingsoon->laminasi }}" class="peer mb-6 w-full h-14 px-3 outline-none focus:border-color1 focus:border-2 text-gray-700 border border-gray-300 rounded-md" required>
                <p class="peer-focus:-top-2 peer-focus:text-sm peer-focus:text-color1 peer-valid:-top-2 peer-valid:text-sm transition-all duration-200 ease-in-out text-base text-gray-500 bg-white px-1 absolute top-4 left-3">
                  laminasi
                </p>
            </label>

            <label for="sinopsis" class="font-inter relative block cursor-text">
                <textarea id="sinopsis" name="sinopsis" class="peer mb-6 w-full h-14 px-3 py-4 outline-none text-gray-700 border border-gray-300 rounded-md" required>{{ $comingsoon->sinopsis }}</textarea>
                <p class="-top-2 text-sm text-gray-500 bg-white px-1 absolute left-3">
                    Sinopsis
                </p>
            </label>

         
            <label for="link_tt" class="font-inter relative block cursor-text">
                <textarea id="link_tt" name="link_tt" class="peer mb-6 w-full h-14 px-3 py-4 outline-none text-gray-700 border border-gray-300 rounded-md" required>{{ $comingsoon->link_tt }}</textarea>
                <p class="-top-2 text-sm text-gray-500 bg-white px-1 absolute left-3">
                    Link TikTok
                </p>
            </label>


            <label for="link_sp" class="font-inter relative block cursor-text">
                <textarea id="link_sp" name="link_sp" class="peer mb-6 w-full h-14 px-3 py-4 outline-none text-gray-700 border border-gray-300 rounded-md" required>{{ $comingsoon->link_sp }}</textarea>
                <p class="-top-2 text-sm text-gray-500 bg-white px-1 absolute left-3">
                    Link Shopee
                </p>
            </label>

            <label for="link_pb" class="font-inter relative block cursor-text">
                <textarea id="link_pb" name="link_pb" class="peer mb-6 w-full h-14 px-3 py-4 outline-none text-gray-700 border border-gray-300 rounded-md" required>{{ $comingsoon->link_pb }}</textarea>
                <p class="-top-2 text-sm text-gray-500 bg-white px-1 absolute left-3">
                    Link PB
                </p>
            </label>

            <label for="link_tokped" class="font-inter relative block cursor-text">
                <textarea id="link_tokped" name="link_tokped" class="peer mb-6 w-full h-14 px-3 py-4 outline-none text-gray-700 border border-gray-300 rounded-md" required>{{ $comingsoon->link_tokped }}</textarea>
                <p class="-top-2 text-sm text-gray-500 bg-white px-1 absolute left-3">
                    Link Tokopedia
                </p>
            </label>
            <button type="submit" class="py-3 px-8 text-white bg-color1 font-inter mt-2 rounded-lg">Update Data</button>
        </form>
    </div>
@endsection