@extends('layout')
@section('content')
{{-- penanda navbar --}}
<input type="text" class="hidden" value="home" id="pin">
{{-- end penanda navbar --}}
{{-- page1 --}}
    <div class="w-full h-[500px] max-[1534px]:h-[480px] max-[1279px]:h-[400px] bg-color1 mt-36">
        <div class="container mx-auto flex justify-center h-full">
            <div class="w-4/5 flex justify-between h-full max-[1534px]:ml-8 max-[1279px]:ml-12">
                <h1 class="text-6xl max-[1534px]:text-5xl max-[1279px]:text-4xl text-white font-akira w-[450px] self-center">apa sih indie itu?</h1>
                <div>
                    <img src="{{ asset('assets/gambar2.png') }}" alt="gambar" class="w-[650px] max-[1534px]:w-[700px] max-[1279px]:w-[900px] -translate-y-44">
                </div>
            </div>
        </div>
    </div>
{{-- end page1 --}}
<div class="mb-10"></div>
{{-- page2 --}}
    <div class="w-full overflow-hidden h-[820px]">
    <div class="w-full h-max flex justify-end relative">
        <div class="container flex justify-end mr-40">
            <div class="w-11/12 h-max flex justify-between">
                <div class="flex flex-col gap-y-11 self-center">
                    <h3 class="text-3xl font-akira text-color1">jadi indie itu . . .</h3>
                    <div class="text-2xl text-justify max-[1579px]:text-xl max-[1439px]:text-lg font-inter w-[650px] max-[1579px]:w-[550px] max-[1439px]:w-[500px] flex flex-col gap-y-8">
                        <p>Penulis tidak perlu memikirkan biaya apa pun, tetapi penulis memiliki kewajiban untuk mempromosikan karyanya yang dibukukan tersebut.</p>
                        <p>Dalam jalur penerbitan indie memiliki peraturan atau sebuah kesepakatan oleh penerbit, jika buku terjual, maka penulis akan mendapatkan royalti sebesar 10-30%.</p>
                    </div>
                    <a href="" class="text-base text-white flex w-max px-14 py-3 bg-color3 mt-5 max-[1579px]:mt-3">Informasi Lebih Lanjut</a>
                </div>
                <img src="{{ asset('assets/gambar3.png') }}" alt="gambar" class="w-[650px] max-[1439px]:w-[600px] max-[1439px]:translate-y-24 translate-y-10">
            </div>
        </div>
        {{-- asset nackground --}}
        <div class="w-[45%] max-[1579px]:w-[36%] h-16 bg-color1 absolute left-0 -bottom-10"></div>
        <div class="w-[700px] max-[1439px]:w-[630px] max-[1279px]:w-[550px] h-[700px] max-[1439px]:h-[630px] max-[1279px]:h-[550px] bg-color1 rounded-full absolute -z-10 -right-24 -bottom-40"></div>
        {{-- end asset background --}}
    </div>
</div>
{{-- end page2 --}}
<div class="mb-36 max-[1439px]:mb-20"></div>
{{-- page3 --}}
    <h1 class="font-akira text-3xl text-color1 w-max mx-auto mb-20">Buku indie yang sudah terbit</h1>
    <div class="w-full h-max bg-color1 flex justify-center relative">
        <div class="container flex flex-col items-center">
            <div class="w-4/5 flex justify-center gap-x-28 max-[1279px]:gap-x-16 py-8">
                <img src="{{ asset('assets/buku2.png') }}" class="w-[550px]" alt="buku">
                <div class="text-white w-[400px] max-[1279px]:w-[480px] self-center flex flex-col gap-y-4">
                    <h1 class="font-akira text-3xl text-white">nulis nevel versi gampang</h1>
                    <h1 class="font-inter text-2xl">By <span class="font-bold">DhiKarey</span></h1>
                    <p class="text-base font-inter">Buku ini adalah buku pertama Penerbit Faza Citra Production. Penulis buku ini aktif dalam memberikan masukan-masukan untuk penulis yang bingung tentang beberapa masalah didunia kepenulisan.</p>
                </div>
            </div>
            <div class="w-4/5 flex flex-row-reverse justify-center gap-x-28 max-[1279px]:gap-x-16 py-8">
                <img src="{{ asset('assets/buku2.png') }}" class="w-[550px]" alt="buku">
                <div class="text-white w-[400px] max-[1279px]:w-[480px] self-center flex flex-col gap-y-4">
                    <h1 class="font-akira text-3xl text-white">nulis nevel versi gampang</h1>
                    <h1 class="font-inter text-2xl">By <span class="font-bold">DhiKarey</span></h1>
                    <p class="text-base font-inter">Buku ini adalah buku pertama Penerbit Faza Citra Production. Penulis buku ini aktif dalam memberikan masukan-masukan untuk penulis yang bingung tentang beberapa masalah didunia kepenulisan.</p>
                </div>
            </div>
        </div>
        {{-- asset background --}}
        <div class="w-[35%] h-10 bg-white absolute left-0 top-2/4 -translate-y-2/4"></div>
        {{-- End asset background --}}
    </div>
{{-- end page3 --}}
<div class="mb-16"></div>
@endsection