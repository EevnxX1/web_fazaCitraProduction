@extends('layout')
@section('content')
{{-- penanda navbar --}}
<input type="text" class="hidden" value="layanan" id="pin">
{{-- end penanda navbar --}}
{{-- page1 --}}
    <div class="w-full h-max bg-color1 flex justify-center pt-16 overflow-hidden">
        <div class="container flex justify-center">
            <div class="w-11/12 flex justify-between">
                <div class="self-center flex flex-col gap-y-10">
                    <h1 class="text-6xl max-[1279px]:text-5xl font-akira text-white leading-[80px] max-[1279px]:leading-[60px]">jasa <br>
                        faza citra <br>
                        production</h1>
                        <a class="text-base text-white w-max py-3 max-[1279px]:py-2 px-16 max-[1279px]:px-12 bg-color3" href="/error">Informasi lebih lanjut</a>
                </div>
                <img src="{{ asset('assets/big-layanan3.png') }}" alt="gambar" class="w-[750px] scale-110 max-[1534px]:w-[700px] translate-x-10">
            </div>
        </div>
    </div>
{{-- End page1 --}}
<div class="mb-32"></div>
{{-- page2 --}}
    <div class="container mx-auto flex justify-center">
        <div class="w-11/12 flex justify-center gap-x-40 max-[1279px]:gap-x-28">
            <a class="w-64 h-64 rounded-3xl bg-color1 overflow-hidden text-white font-akira flex flex-col justify-between items-center py-5 scale-[1.1]" href="/error">
                <img src="{{ asset('assets/layanan5.png') }}" class="w-44 scale-150" alt="gambar1">
                <p>editing</p>
            </a>
            <a class="w-64 h-64 rounded-3xl bg-color1 overflow-hidden text-white font-akira flex flex-col justify-between items-center py-5 scale-[1.1]" href="/error">
                <img src="{{ asset('assets/layanan7.png') }}" class="w-44 translate-y-2" alt="gambar2">
                <p>layouting</p>
            </a>
            <a class="w-64 h-64 rounded-3xl bg-color1 overflow-hidden text-white font-akira flex flex-col justify-between items-center py-5 scale-[1.1]" href="/error">
                <img src="{{ asset('assets/layanan8.png') }}" class="w-44 translate-y-2" alt="gambar3">
                <p>cover</p>
            </a>
        </div>
    </div>
{{-- End age2 --}}
<div class="mb-32"></div>
@endsection