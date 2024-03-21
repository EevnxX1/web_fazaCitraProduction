@extends('layout')
@section('content')
{{-- penanda navbar --}}
<input type="text" class="hidden" value="layanan" id="pin">
{{-- end penanda navbar --}}
{{-- page1 --}}
<div class="w-full overflow-hidden h-[750px] max-[1534px]:h-[650px]">
    <div class="w-full h-[650px] max-[1534px]:h-[550px] bg-color1 flex justify-center">
        <div class="container flex justify-center">
            <div class="w-11/12 max-[1599px]:w-[85%] max-[1534px]:w-11/12 flex justify-between relative">
                <div class="text-white w-[600px] max-[1534px]:w-[550px] max-[1279px]:w-[500px] self-center flex flex-col gap-y-12">
                    <h1 class="font-akira text-6xl max-[1534px]:text-5xl">kelas <br> menulis</h1>
                    <p class="font-inter text-xl max-[1534px]:text-lg text-justify tracking-wider">Kelas Menulis Buku Solo adalah kelas menulis yang bertujuan untuk menumbuhkan percaya diri dan meyakinkan penulis pemula untuk mengenalkan karyanya kepada pembaca. Sasaran dalam program Kelas Menulis Buku Solo ini adalah para calon penulis atau penulis pemula yang belum memiliki buku solo.</p>
                    <a class="text-base w-max py-3 max-[1279px]:py-2 px-16 max-[1279px]:px-12 bg-color3" href="">Informasi lebih lanjut</a>
                </div>
                <img src="{{ asset('assets/gambar5.png') }}" class="w-[750px] max-[1534px]:w-[650px] max-[1279px]:w-[600px] absolute -bottom-36 right-0 max-[1279px]:-right-20" alt="gambar">
            </div>
        </div>
    </div>
</div>
{{-- End page1 --}}
<div class="mb-12"></div>
@endsection