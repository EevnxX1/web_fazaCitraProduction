@extends('admin.layout')
@section('content')
    <div>
        <div class="font-inter flex flex-col gap-y-1 mb-8">
            <h1 class="text-4xl text-color1 font-bold">Table Recommendation</h1>
            <p class="text-gray-700 text-base">Tabel menampilkan kumpulan data. Mereka dapat disesuaikan sepenuhnya</p>
        </div>
        <div class="flex justify-between items-center mb-4">
        <div>
    <form action="{{ route('recommendation.index') }}" method="GET">
        <input type="text" name="cari" class="w-60 h-10 rounded-lg outline-none border-2 border-gray-500 px-2">
        <button type="submit" class="px-4 py-2 bg-color1 text-white font-inter rounded-lg">Cari Data</button>
    </form>
</div>

        </div>        
        @if ($message = Session::get("success"))
        <div class="w-full mb-4 rounded-xl h-max py-5 text-center bg-lime-500 text-white font-bold font-inter">
            {{ $message }}
        </div>       
        @endif
        <div class="h-max w-full bg-white p-5 rounded-lg shadow-table">
            <table class="text-center table-fixed w-full">
                <thead>
                    <tr class="border-b-2 text-gray-700 font-inter text-base">
                        <th class="pb-2 w-[2%]">No</th>
                        <th class="pb-2 w-[8%]">Judul</th>
                        <th class="pb-2 w-[10%]">Penulis</th>
                        <th class="pb-2 w-[8%]">Halaman</th>
                        <th class="pb-2 w-[8%]">Nomer ISBN</th>
                        <th class="pb-2 w-[8%]">Sinopsis</th>
                        <th class="pb-2 w-[8%]">Harga</th>
                        <th class="pb-2 w-[8%]">Harga Coret</th>
                        <th class="pb-2 w-[10%]">Cover Buku</th>
                        <th class="pb-2 w-[10%]">Isi Buku</th>
                        <th class="pb-2 w-[10%]">Action</th>
                    </tr>
                </thead>
                <tbody class="text-gray-700">
                    @foreach($recommendations as $recommendation)
                        <tr class="border-b-2 text-sm">
                            <td>{{ ++$i }}</td>
                            <td class="py-2">{{ $recommendation->judul }}</td>
                            <td class="py-2">{{ $recommendation->penulis }}</td>
                            <td class="py-2">{{ $recommendation->halaman }}</td>
                            <td class="py-2">{{ $recommendation->nomer_isbn }}</td>
                            <td class="py-2">{{ $recommendation->sinopsis }}</td>
                            <td class="py-2">{{ $recommendation->harga }}</td>
                            <td class="py-2">{{ $recommendation->harga_coret }}</td>
                            <td class="py-2"><img width="150px" align="center" src="{{ url('/data_recommendation/'.$recommendation->img_buku) }}"></td>
                            <td class="py-2"><img width="150px" align="center" src="{{ url('/data_recommendation/'.$recommendation->img_review) }}"></td>
                            <td>
                                <form action="{{ route('recommendation.destroy', $recommendation->id) }}" method="POST" class="flex items-center justify-center gap-x-1">
                                    @csrf
                                    @method('DELETE')
                                    <a href="{{ route('recommendation.edit', $recommendation->id) }}">
                                        <svg class="w-8" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                                            <title>Edit Data</title>
                                            <path d="M13.09 20C13.21 20.72 13.46 21.39 13.81 22H6C4.89 22 4 21.11 4 20V4C4 2.9 4.89 2 6 2H14L20 8V13.09C19.67 13.04 19.34 13 19 13C18.66 13 18.33 13.04 18 13.09V9H13V4H6V20H13.09M17 15L14.5 18H16V22H18V18H19.5L17 15M22 20V16H20V20H18.5L21 23L23.5 20H22Z" />
                                        </svg>
                                    </a>
                                
                                </form>
                            </td>
                        </tr>
                    @endforeach
                    <!-- Add more data rows here -->
                </tbody>
            </table>
        </div>
    </div>
@endsection
