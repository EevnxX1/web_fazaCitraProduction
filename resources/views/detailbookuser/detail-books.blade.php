@extends('layout')
@section('content')
{{-- penanda navbar --}}
<input type="text" class="hidden" value="books" id="pin">
{{-- end penanda navbar --}}
{{-- page1 --}}
    <div class="container mx-auto mt-24 flex justify-center">
        <div class="grid grid-cols-headerC grid-rows-header font-inter gap-16 w-4/5 justify-center">
            <div>
            @if($bukus->cover_buku)
            <img class="w-[329px] h-[471px]" src="{{ asset('data_bestseller/' . $bukus->cover_buku) }}" alt="book">
            @else
                @if (!$bukus->thumbnail)
                    @if(Storage::disk('public')->exists('data_buku/'.$bukus->img_buku ))
                    <img class="w-[329px] h-[471px]" src="{{ asset('data_buku/' . $bukus->img_buku) }}" alt="book">
                    @else
                    <img class="w-[329px] h-[471px]" src="{{ asset('data_recommendation/' . $bukus->img_buku) }}" alt="book">
                    @endif
                @else
                <img class="w-[329px] h-[471px]" src="{{ asset('data_buku/' . $bukus->thumbnail) }}" alt="book">
                @endif
             @endif

            </div>
            <div class="flex flex-col gap-y-6">
                <h1 class="text-3xl font-bold">Judul : {{ $bukus->judul }}</h1>
                <div class="text-2xl flex flex-col gap-y-2">
                    <p>Penulis : {{ $bukus->penulis }}</p>
                    <p>Hal : {{ $bukus->halaman }}</p>
                    <p>Nomor ISBN : {{ $bukus->nomer_isbn }}</p>
                </div>
                <div class="flex flex-col gap-y-6">
                    <h1 class="text-6xl font-bold">Rp. {{ number_format($bukus->harga) }},-</h1>
                    <p class="text-2xl text-slate-500 relative w-max pl-8 font-bold">Rp. {{ number_format($bukus->harga_coret) }},-<span class="border border-red-500 w-full absolute left-0 top-1/2 -translate-y-1/2"></span></p>
                </div>
                <a href="{{ route('formbookuser.edit', $bukus->id) }}" class="text-xl w-60 h-12 bg-color3 text-white flex justify-center items-center">Pesan Sekarang</a>
            </div>
            <div class="col-span-2 flex flex-col gap-y-5">
                <h1 class="text-3xl font-bold">Blurb :</h1>
                <p class="text-lg">
                    {{ $bukus->sinopsis }} .
                </p>
            </div>
        </div>
    </div>

{{-- end page1 --}}
{{-- space --}}
<div class="mb-20"></div>
{{-- end space --}}
{{-- page2 --}}
<div class="w-full overflow-hidden">
    <div class="flex items-center container mx-auto px-36 -mb-20">
        <h1 class="text-3xl font-bold font-inter">Review book’s</h1>
    </div>
    <div class="w-full relative scroll-container">
        {{-- Arrow slide --}}
        <img class="w-16 cursor-pointer z-10 top-[53%] sticky left-8 -scale-x-100" src="{{ asset('assets/arrow-red.png') }}" alt="arrow-left" id="left">
        <img class="w-16 cursor-pointer z-10 top-[53%] sticky left-[97%] mr-6" src="{{ asset('assets/arrow-red.png') }}" alt="arrow-right" id="right">
        {{-- End Arrow Slide --}}
    {{-- slide --}}
    <input type="text" class="hidden" value="40" id="geserValue">
    {{-- NOTE!! Isi konten Maksimal 6, Minimal 4 --}}
    @if(!$bukus->img_review)
    <section class="flex w-max gap-x-12 bg-color2 py-16 px-40 pr-80 scroll-content transition duration-300 ease-linear">
        <a href="" class="w-max h-max slide-content">
            <img src="{{ asset('data_buku/'.$bukus->photo) }}" class="w-[1800px]" alt="">
        </a>
        <div></div>
        <div></div>
    </section>
    @else
    <section class="flex w-max gap-x-12 bg-color2 py-16 px-40 pr-80 scroll-content transition duration-300 ease-linear">
        <a href="" class="w-max h-max slide-content">
        @if(!Storage::disk('public')->exists('data_recommendation/'.$bukus->img_review))
        <img src="{{ asset('data_bestseller/'.$bukus->img_review) }}" class="w-[1800px]" alt="">
        @else
        ''
        @endif
        @if(Storage::disk('public')->exists('data_recommendation/'.$bukus->img_review))
        <img src="{{ asset('data_recommendation/'.$bukus->img_review) }}" class="w-[1800px]" alt="">
        @else
        <img src="{{ asset('data_recommendation/'.$bukus->img_review) }}" class="w-[1800px]" alt="">
        @endif
        </a>
            <div></div>
            <div></div>
        </section>
    @endif
    {{-- end slide --}}
    </div>
 </div>
{{-- end page2 --}}
<script src="{{ asset('js/slider.js') }}"></script>
@endsection
