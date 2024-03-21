@extends('layout')
@section('content')
{{-- penanda navbar --}}
<input type="text" class="hidden" value="books" id="pin">
{{-- end penanda navbar --}}
{{-- space --}}
<div class="mb-24"></div>
{{-- end space --}}
{{-- page1 --}}
 <div class="container mx-auto flex flex-col items-center gap-y-14">
    <h1 class="font-akira text-5xl text-color1">BUKU TERBITAN FAZA</h1>
    <form action="{{ route('storebookuser.index') }}" method="get" class="w-3/4">
        <label for="search" class="w-full h-16 bg-color2 relative flex rounded-full cursor-text">
            <input class="w-full h-full block bg-transparent rounded-full text-center outline-none px-16 font-inter text-xl text-white placeholder:text-center placeholder:text-white" type="text" name="cari" id="search" placeholder="Cari judul buku / nama penulis disini">
            <img class="absolute left-4 top-4 w-8" src="{{ asset('assets/Vector.png') }}" alt="vector">
        </label>
        <button type="submit" class="hidden"></button>
    </form>
 </div>
{{-- end page1 --}}
{{-- space --}}
<div class="mb-24"></div>
{{-- end space --}}
@if(request('cari'))
@if($bukus->count() > 0)
{{-- page3 --}}
<div class="container mx-auto flex flex-col gap-y-10 border-8 border-color1 bg-color2 rounded-xl py-10">
    <h1 class="text-4xl font-bold font-inter pl-40 max-[1534px]:pl-20">Pencaharian:</h1>
    <section class="flex flex-wrap gap-x-32 max-[1534px]:gap-x-24 max-[1279px]:gap-x-44 w-4/5 max-[1534px]:w-11/12 max-[1279px]:w-4/5 self-center gap-y-16 relative font-inter">
        @foreach ($bukus as $buku)


        <a href="{{ route('bukuuser.edit', $buku->id) }}" class="flex flex-col w-80 gap-y-5">
            <img  src="{{ url('data_buku/' . $buku->thumbnail) }}" class="w-[320px] h-[458px]" alt="">
            <div class="flex items-end justify-between">
                <div class="flex flex-col gap-y-1">
                    <p class="text-sm text-slate-400 font-bold">{{ $buku->penulis }}</p>
                    <p>{{ $buku->judul }}</p>
                    <p class="text-xl font-bold">Rp. {{ number_format($buku->harga) }}</p>
                    <p class="text-slate-400 font-bold relative w-max">Rp. {{ number_format($buku->harga_coret) }} <span class="border border-red-500 w-full absolute left-0 top-1/2 -translate-y-1/2"></span></p>
                </div>
                <img src="{{ asset('assets/icon-plus.png') }}" alt="">
            </div>
        </a>
        @endforeach
     
      
     
      
        
    
      
    </section>
</div>
{{-- end page3 --}}
@else
<div class="container mx-auto flex justify-center">
    <div class="w-4/5 border-8 border-color1 bg-color2 rounded-xl py-5">
        <p class="font-inter font-bold text-xl text-center">Keyword yang anda cari tidak di temukan!</p>
    </div>
</div>
@endif
@else
{{-- page2 --}}
<div class="w-full overflow-hidden">
    <div class="flex justify-between items-center container mx-auto px-36 -mb-24">
        <h1 class="text-2xl font-bold text-color1 font-akira">REKOMENDASI UNTUKMU</h1>
    </div>
    <div class="w-full relative scroll-container">
        {{-- Arrow slide --}}
        <img class="w-16 cursor-pointer z-10 top-[53%] sticky left-8 -scale-x-100" src="{{ asset('assets/arrow-red.png') }}" alt="arrow-left" id="left">
        <img class="w-16 cursor-pointer z-10 top-[53%] sticky left-[97%] mr-6" src="{{ asset('assets/arrow-red.png') }}" alt="arrow-right" id="right">
        {{-- End Arrow Slide --}}
    {{-- slide --}}
    <input type="text" class="hidden" value="15" id="geserValue">
    {{-- NOTE!! Isi konten Maksimal 11, Minimal 6 --}}
    <section class="flex w-max gap-x-12 bg-color1 py-16 px-40 pr-60 scroll-content transition duration-300 ease-linear">
        @foreach ($recoms as $recom)


        <a href="{{ route('storebookuser.edit', $recom->id) }}" class="flex flex-col w-80 gap-y-5 p-6 rounded-xl bg-slate-200 slide-content">
            <img  src="{{ url('data_recommendation/' . $recom->img_buku) }}" class="w-[272px] h-[389px]" alt="">
            <div class="flex items-end justify-between">
                <div class="flex flex-col gap-y-1">
                    <p class="text-sm text-slate-400 font-bold">{{$recom->penulis}}</p>
                    <p>{{$recom->judul}}</p>
                    <p class="text-xl font-bold">Rp.{{number_format($recom->harga)}}</p>
                    <p class="text-slate-400 font-bold relative w-max">Rp. {{number_format($recom->harga_coret)}} <span class="border border-red-500 w-full absolute left-0 top-1/2 -translate-y-1/2"></span></p>
                </div>
                <img src="{{ asset('assets/icon-plus.png') }}" alt="">
            </div>
        </a>
        @endforeach

     
  
    </section>
    {{-- end slide --}}
    </div>
 </div>
{{-- end page2 --}}
{{-- page3 --}}
<div class="w-full h-max overflow-hidden relative">
    {{-- asset background --}}
    <div class="w-[600px] h-[600px] bg-color1 absolute rounded-full -top-80 opacity-50 translate-x-2/4 right-2/4"></div>
    <div class="w-64 h-64 bg-color1 absolute rounded-full -top-20 opacity-50 right-[530px]"></div>
    <div class="w-[600px] h-[600px] bg-color1 absolute rounded-full top-[35%] opacity-40 right-[400px]"></div>
    <div class="w-40 h-40 bg-color1 absolute rounded-full opacity-40 -right-10 top-[32%]"></div>
    <div class="w-28 h-28 bg-color1 absolute rounded-full opacity-40 top-[32%] left-[670px]"></div>
    <div class="w-[600px] h-[600px] bg-color1 absolute rounded-full top-[60%] -left-72 opacity-40"></div>
    <div class="w-40 h-40 bg-color1 absolute rounded-full opacity-40 left-40 top-[60%]"></div>
    <div class="w-[600px] h-[600px] bg-color1 absolute rounded-full opacity-40 bottom-0 translate-x-2/4 right-2/4"></div>
    <div class="w-44 h-44 bg-color1 absolute rounded-full opacity-40 left-[600px] bottom-96"></div>
    <div class="w-44 h-44 bg-color1 absolute rounded-full opacity-40 right-56 bottom-0"></div>
    <div class="w-28 h-28 bg-color1 absolute rounded-full opacity-40 left-56 bottom-0"></div>
    {{-- end asset background --}}
<div class="container mx-auto flex flex-col">
    <section class="flex flex-wrap gap-x-32 max-[1534px]:gap-x-24 max-[1279px]:gap-x-44 w-4/5 max-[1534px]:w-11/12 max-[1279px]:w-4/5 self-center gap-y-16 relative font-inter mt-52">
        @foreach ($bukus as $buku)


        <a href="{{ route('bukuuser.edit', $buku->id) }}" class="flex flex-col w-80 gap-y-5">
            <img  src="{{ url('data_buku/' . $buku->thumbnail) }}" class="w-[320px] h-[458px]" alt="">
            <div class="flex items-end justify-between">
                <div class="flex flex-col gap-y-1">
                    <p class="text-sm text-slate-400 font-bold">{{ $buku->penulis }}</p>
                    <p>{{ $buku->judul }}</p>
                    <p class="text-xl font-bold">Rp. {{ number_format($buku->harga) }}</p>
                    <p class="text-slate-400 font-bold relative w-max">Rp. {{ number_format($buku->harga_coret) }} <span class="border border-red-500 w-full absolute left-0 top-1/2 -translate-y-1/2"></span></p>
                </div>
                <img src="{{ asset('assets/icon-plus.png') }}" alt="">
            </div>
        </a>
        @endforeach
     
      
     
      
        
    
      
    </section>
</div>
</div>
{{-- end page3 --}}
@endif

{{-- space --}}
<div class="mb-20"></div>
{{-- end space --}}
<script src="{{ asset('js/slider.js') }}"></script>
@endsection
