@extends('layout')
@section('content')
{{-- penanda navbar --}}
<input type="text" class="hidden" value="books" id="pin">
{{-- end penanda navbar --}}
    <div class="container mx-auto flex flex-col items-center">



        <img  src="{{ url('data_comingsoon/' . $coming->img_buku) }}" class="w-[800px] max-[1534px]:w-[720px] max-[1279px]:w-[680px]" alt="Bookcoming-soon">
        <div class="w-4/5 flex flex-col gap-y-10">
            <div class="font-inter text-2xl flex flex-col gap-y-8">
                <h4 class="font-bold">Judul : {{ $coming->judul }}</h4>
                <p>Penulis : {{ $coming->penulis }}</p>
                <p>Penerbit : {{ $coming->penerbit }}</p>
                <p>Ukuran : {{ $coming->ukuran }}</p>
                <p>Laminasi : {{ $coming->laminasi }}</p>
            </div>
            <div class="font-inter flex flex-col gap-y-5 mb-6">
                <h4 class="text-2xl font-bold">Blurb :</h4>
                <p class="text-xl text-justify">
                    {{ $coming->sinopsis }}
                </p>
            </div>
            <div class="font-inter flex flex-col items-center gap-y-7">
                <h4 class="text-2xl font-bold">Tersedia Di Marketplace</h4>
                <section class="flex gap-x-10">
                    <a href="{{ $coming->link_tt }}">
                        <img src="{{ asset('assets/TikTok.png') }}" class="w-20" alt="imgPlace">
                    </a>
                    <a href="{{ $coming->link_sp }}">
                        <img src="{{ asset('assets/shopee.png') }}" class="w-20" alt="imgPlace">
                    </a>
                    <a href="{{ $coming->link_pb }}">
                        <img src="{{ asset('assets/storeBook.png') }}" class="w-20" alt="imgPlace">
                    </a>
                    <a href="{{ $coming->link_tokped }}">
                        <img src="{{ asset('assets/Tokopedia.png') }}" class="w-20" alt="imgPlace">
                    </a>
                </section>
            </div>
        </div>
    </div>
<div class="mb-24"></div>
@endsection
