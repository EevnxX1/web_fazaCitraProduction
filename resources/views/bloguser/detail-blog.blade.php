@extends('layout')
@section('content')
{{-- penanda navbar --}}
<input type="text" class="hidden" value="blog" id="pin">
{{-- end penanda navbar --}}
{{-- page1 --}}
     <div class="w-full h-max bg-color1 flex justify-center overflow-hidden">
        <div class="container flex justify-center">
            <div class="w-11/12 flex justify-center relative py-16 max-[1534px]:py-10">
                <img src="{{ asset('data_news/'.$blogs->img_buku) }}" class="h-[550px] max-[1534px]:h-[450px] max-[1279px]:h-[350px] relative z-10" alt="gambar">
                {{-- asset background --}}
                 <div class="w-96 h-96 rounded-full bg-color4 absolute z-0 -left-60 top-36 scale-50 max-[1279px]:scale-[0.4]"></div>
                 <div class="w-96 h-96 rounded-full bg-color4 absolute z-0 left-36 bottom-0 scale-75 max-[1279px]:scale-50"></div>
                 <div class="w-96 h-96 rounded-full bg-color4 absolute z-0 right-96 -top-20 scale-[0.2]"></div>
                 <div class="w-96 h-96 rounded-full bg-color4 absolute z-0 right-28 max-[1534px]:right-0 max-[1279px]:-right-12 -bottom-20 scale-150 max-[1279px]:scale-125"></div>
                {{-- End asset background --}}
            </div>
        </div>
    </div>
{{-- End page1 --}}
<div class="mb-10"></div>
{{-- page2 --}}
    <div class="container mx-auto flex justify-center">
        <div class="font-inter w-4/5 flex flex-col items-center gap-y-2">
            <p class="self-end text-base text-gray-400 mb-8">{{ $blogs->tanggal }}</p>
            <h1 class="text-4xl font-bold mb-7 text-center">{{ $blogs->judul }}</h1>
            <p class="text-base text-justify"> {{ $blogs->isi }}.</p>
            </div>
    </div>
{{-- End page2 --}}
<div class="mb-28"></div>
@endsection
