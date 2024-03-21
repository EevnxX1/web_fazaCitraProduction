@extends('admin.layout')
@section('content')
    <div>
        <div class="font-inter flex flex-col gap-y-1 mb-8">
            <h1 class="text-4xl text-color1 font-bold">Table Buku</h1>
            <p class="text-gray-700 text-base">Tabel menampilkan kumpulan data. Mereka dapat disesuaikan sepenuhnya</p>
        </div>
        <div class="flex justify-between items-center">
            <a href="{{ route('buku.create') }}" class="px-6 py-3 bg-color1 text-white font-inter rounded-xl text-lg">+Tambah Data</a>
        </div>

        <br>
        
        
        <form action="{{ route('buku.index') }}" method="GET" class="mb-4">
    <input type="text" name="cari" class="w-60 h-10 rounded-lg outline-none border-2 border-gray-500 px-2">
    <button type="submit" class="px-4 py-2 bg-color1 text-white font-inter rounded-lg">Cari Data</button>
</form>
          
        @if ($message = Session::get("success"))
        <div class="w-full mb-4 rounded-xl h-max py-5 text-center bg-lime-500 text-white font-bold font-inter">
            {{ $message }}
        </div>       
        @endif 
           
        <div class="h-max w-full bg-white p-5 rounded-lg shadow-table">
            <table class="text-center table-fixed w-full">
                <thead>
      
                <thead>
                    <tr class="border-b-2 text-gray-700 font-inter text-base">
                        <th class="pb-2 w-[2%]">No</th>
                        <th class="pb-2 w-[8%]">Judul</th>
                        <th class="pb-2 w-[10%]">Penulis</th>
                        <th class="pb-2 w-[8%]">Halaman</th>
                        <th class="pb-2 w-[8%]">Harga Coret</th>
                        <th class="pb-2 w-[8%]">Harga</th>
                        <th class="pb-2 w-[8%]">Nomer ISBN</th>
                        <th class="pb-2 w-[%]">Sinopsis</th>
                        <th class="pb-2 w-[8%]">Isi Buku</th>
                        <th class="pb-2 w-[8%]">Cover Buku</th>
                        <th class="pb-2 w-[10%]">Action</th>
                    </tr>
                </thead>
                <tbody class="text-gray-700">
                    @foreach($bukus as $buku)
                        <tr class="border-b-2 text-sm">
                            <td>{{ ++$i }}</td>
                            <td class="py-2">{{ $buku->judul }}</td>
                            <td class="py-2">{{ $buku->penulis }}</td>
                            <td class="py-2">{{ $buku->halaman }}</td>
                            <td class="py-2">{{ $buku->harga_coret }}</td>
                            <td class="py-2">{{ $buku->harga }}</td>
                            <td class="py-2">{{ $buku->nomer_isbn }}</td>
                            <td class="py-2">{{ $buku->sinopsis }}</td>
                            <td class="py-2"><img width="150px" align="center" src="{{ url('/data_buku/'.$buku->photo) }}"></td>
                            <td class="py-2"><img width="150px" align="center" src="{{ url('/data_buku/'.$buku->thumbnail) }}"></td>
                            <td>
                                <form action="{{ route('buku.destroy', $buku->id) }}" method="POST" class="flex items-center justify-center gap-x-1">
                                    @csrf
                                    @method('DELETE')
                                    <a href="{{ route('buku.edit', $buku->id) }}">
                                        <svg class="w-8" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                                            <title>Edit Data</title>
                                            <path d="M13.09 20C13.21 20.72 13.46 21.39 13.81 22H6C4.89 22 4 21.11 4 20V4C4 2.9 4.89 2 6 2H14L20 8V13.09C19.67 13.04 19.34 13 19 13C18.66 13 18.33 13.04 18 13.09V9H13V4H6V20H13.09M17 15L14.5 18H16V22H18V18H19.5L17 15M22 20V16H20V20H18.5L21 23L23.5 20H22Z" />
                                        </svg>
                                    </a>
                                    <button type="submit">
                                        <svg class="w-8" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" onclick="javascript: return confirm('Apakah anda ingin menghapus data ini.. ?')">
                                            <title>Hapus Data</title>
                                            <path d="M6,19A2,2 0 0,0 8,21H16A2,2 0 0,0 18,19V7H6V19M8,9H16V19H8V9M15.5,4L14.5,3H9.5L8.5,4H5V6H19V4H15.5Z" />
                                        </svg>
                                    </button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
