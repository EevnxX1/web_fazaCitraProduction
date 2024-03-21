@extends('layout')
@section('content')
{{-- penanda navbar --}}
<input type="text" class="hidden" value="books" id="pin">
{{-- end penanda navbar --}}
{{-- page1 --}}
    <div class="w-full h-max bg-color1 pb-8 overflow-hidden max-[1535px]:pt-10">
        <div class="container mx-auto flex flex-col items-center relative gap-y-12">
            <div class="relative h-[680px] w-[800px] max-[1535px]:h-[480px] z-10 animate-fadeInRight">
                @foreach ($best as $bests)
                <img class="max-[1535px]:scale-[0.85] absolute w-[865px] -top-5 max-[1535px]:-top-32" src="{{ asset('data_bestseller/'.$bests->img_bukuM) }}" alt="buku4">
                @endforeach
            </div>
            <p class="animate-fadeIn font-akira text-white text-2xl max-[1279px]:text-xl z-10 absolute left-40 top-32 max-[1535px]:left-28 max-[1279px]:left-12 max-[1535px]:top-16">TOP 1 BEST SELLER</p>
            <p class="animate-fadeIn font-akira text-white text-2xl max-[1279px]:text-xl z-10 absolute right-40 top-32 max-[1535px]:right-16 max-[1279px]:right-2 max-[1535px]:top-16" >FAZA CITRA PRODUCTION</p>
            <p class="animate-fadeIn font-akira text-white text-2xl z-10">Bertumbuh Sama-sama by dessy</p>
            {{-- background text --}}
            <img class="animate-fadeIn absolute z-[0] bottom-12 max-[1535px]:bottom-0 max-[1279px]:bottom-12 max-[1535px]:scale-[0.8] max-[1279px]:scale-[0.9]" src="{{ asset('assets/text1.png') }}" alt="background">
            {{-- end background text --}}
        </div>
    </div>
{{-- end page1 --}}
{{-- space --}}
<div class="mb-20"></div>
{{-- end space --}}
{{-- page2 --}}
    <div class="container mx-auto flex flex-col gap-y-32">
        <div class="flex justify-between w-4/5 mx-auto">
            <h1 class="text-4xl font-bold text-color1 font-akira">COMING SOON</h1>
            <a href="{{ route('comingsoonuser.index') }}" class="flex text-xl text-color1 font-inter font-bold items-center gap-x-4">See More <img src="{{ asset('assets/button-right.png') }}" alt="btn-right"></a>
        </div>
        <section class="w-4/5 flex mx-auto gap-x-10 justify-center">
            @foreach ($comings as $item)


            <div class="relative w-[400px] bg-color2 rounded-3xl p-10 flex flex-col justify-between">
                <img class="absolute -top-28 max-[1534px]:left-5 max-[1279px]:left-3 max-[1534px]:w-[300px]"  src="{{ url('data_comingsoon/' . $item->img_buku) }}" alt="buku">
                <h2 class="mt-48 max-[1534px]:mt-36 max-[1279px]:mt-32 mb-4 text-2xl font-bold font-inter text-center mx-auto w-52 h-16">{{ $item->judul }}</h2>
                <p class="text-sm max-[1534px]:text-xs text-center font-inter">Blurb : {{ $item->sinopsis }}.</p>
                <a class="mt-10 max-[1279px]:mt-6 font-inter text-lg max-[1279px]:text-base flex w-40 max-[1279px]:w-36 h-11 max-[1279px]:h-10 rounded-full justify-center items-center text-white mx-auto bg-color1"
                href="{{ route('comingsoonuser.edit', $item->id) }}">See more +</a>
                {{-- {{ route('other.page') }}#target-id" --}}
            </div>
            @endforeach
          

        </section>
    </div>
{{-- end page2 --}}
{{-- space --}}
<div class="mb-36"></div>
{{-- end space --}}
{{-- page3 --}}
    <div class="container mx-auto flex justify-center">
        <div class="w-11/12 flex items-center justify-center gap-x-20">
        <div class="w-[550px] flex flex-col gap-y-8">
            <div class="font-akira text-4xl max-[1279px]:text-3xl text-color1">
                <h2>My Candy</h2>
                <h2>By Naylafi</h2>
            </div>
            <p class="font-inter text-lg text-justify">
                The standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested. Sections 1.10.32 and 1.10.33 from "de Finibus Bonorum et Malorum" by Cicero are also reproduced in their exact original form, accompanied by English versions from the 1914 translation by H. Rackham.
            </p>
            <a href="{{ route('bukuuser.edit', 20) }}" class="w-44 h-11 font-inter text-white font-bold rounded-full bg-color1 flex justify-center items-center">
                See More +
            </a>
        </div>
        <div class="w-[640px]">
            <img class="" src="{{ asset('assets/GRUP.png') }}" alt="book">
        </div>
    </div>
    </div>
{{-- end page3 --}}
{{-- space --}}
<div class="mb-12"></div>
{{-- end space --}}
{{-- page4 --}}
    <div class="w-full h-max bg-color1 py-24">
        <div class="container mx-auto flex flex-col items-center gap-y-20">
            <h1 class="font-akira text-4xl text-white">KATEGORI PUBLISH BOOK</h1>
            <section class="flex gap-x-10 font-inter">
                <div class="flex flex-col items-center gap-y-8">
                    <div class="bg-white rounded-3xl">
                        <img class="" src="{{ asset('assets/SP.png') }}" alt="buku">
                    </div>
                    <p class="text-2xl text-white">Terbit Self Publish</p>
                </div>
                <div class="flex flex-col items-center gap-y-8">
                    <div class="bg-white rounded-3xl">
                        <img class="" src="{{ asset('assets/INDIE.png') }}" alt="buku">
                    </div>
                    <p class="text-2xl text-white">Terbit Indie</p>
                </div>
                <div class="flex flex-col items-center gap-y-8">
                    <div class="bg-white rounded-3xl">
                        <img class="" src="{{ asset('assets/NP.png') }}" alt="buku">
                    </div>
                    <p class="text-2xl text-white">Naskah Pilihan</p>
                </div>
            </section>
        </div>
    </div>
{{-- end page4 --}}
{{-- space --}}
<div class="mb-40"></div>
{{-- end space --}}
{{-- page5 --}}
    <div class="container mx-auto flex flex-col">
        <section class="flex flex-wrap justify-between w-4/5 max-[1534px]:w-11/12 max-[1279px]:w-4/5 self-center gap-y-16 relative font-inter">
            <a class="text-white font-bold text-lg w-44 h-10 bg-color1 flex justify-center items-center absolute left-0 -top-[85px]" href="{{ route('storebookuser.index') }}">See More +</a>
            @foreach ($buku9 as $buku)


            <a href="{{ route('bukuuser.edit', $buku->id) }}" class="flex flex-col w-80 gap-y-5">
            <img  src="{{ url('data_buku/' . $buku->thumbnail) }}" class="w-[320px] h-[458px]" alt="">
                <div class="flex items-end justify-between">
                    <div class="flex flex-col gap-y-1">
                        <p class="text-sm text-slate-400 font-bold">{{ $buku->penulis }}</p>
                        <p>{{ $buku->judul }}</p>
                        <p class="text-xl font-bold">Rp. {{ number_format($buku->harga) }},-</p>
                        <p class="text-slate-400 font-bold relative w-max">Rp. {{ number_format($buku->harga_coret) }},- <span class="border border-red-500 w-full absolute left-0 top-1/2 -translate-y-1/2"></span></p>
                    </div>
                    <img src="{{ asset('assets/icon-plus.png') }}" alt="">
                </div>
            </a>
            @endforeach
            
       
       
    
        </section>
    </div>
{{-- end page5 --}}
{{-- space --}}
    <div class="mb-32"></div>
{{-- end space --}}
@endsection
