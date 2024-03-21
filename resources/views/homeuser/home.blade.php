@extends('layout')
@section('content')
@if ($message = Session::get("success"))
<div class="bg-slate-900/80 w-screen h-screen fixed top-0 z-[100] flex justify-center items-center" id="overlay">
    <div class="bg-color4 border-8 border-color1 p-10 py-14 text-2xl font-inter font-bold text-center text-white relative">
        <span class="text-3xl absolute top-1 right-1 cursor-pointer hover:text-red-700" id="close">X</span>
        {{ $message }}
    </div>
</div>
@endif
    {{-- penanda navbar --}}
    <input type="text" class="hidden" value="home" id="pin">
    {{-- end penanda navbar --}}
    {{-- Page1 --}}
    <div class="container float-end flex justify-end">
    <div class="w-full max-[1610px]:w-11/12 max-[1534px]:w-full max-[1340px]:w-11/12 max-[1279px]:w-full flex justify-end items-center gap-x-16 h-page1full">
        <div class="w-[900px] h-max gap-y-9 flex flex-col">
            <p class="text-6xl max-[1610px]:text-5xl max-[1340px]:text-[45px] max-[1279px]:text-[38px] max-[1279px]:leading-[45px] max-[1340px]:leading-[50px] max-[1610px]:leading-[55px] font-akira text-color1 leading-[60px]">WUJUDKAN MIMPIMU DENGAN CIPTAKAN KARYA BERKUALITAS</p>
            <a href="https://wa.me/+6289698091919" class="flex w-64 h-12 bg-color1 justify-center items-center text-lg text-white font-inter">Dapatkan Informasi</a>
        </div>
        <div class="bg-[url('assets/bg1.png')] bg-no-repeat bg-cover bg-[center_left_50px] max-[1534px]:bg-[center_left_30px] w-[800px] h-[710px] max-[1340px]:h-[600px] relative">
            <img src="{{ asset('assets/book1.png') }}" class="absolute top-20 max-[1534px]:top-32 max-[1340px]:top-24" alt="">
        </div>
    </div>
</div>
    {{-- End Page1 --}}
    <div class="mb-12"></div>
    {{-- Page2 --}}
    <div class="w-full h-16 bg-color1  text-white text-3xl font-bold font-inter flex items-center justify-center">Best Seller This Month</div>
    <div class="mb-40"></div>
    {{-- Menu Buku Page2 --}}
    <div class="container mx-auto flex justify-center">
        <section class="w-4/5 flex mx-auto gap-x-10 justify-center">
        @foreach ($book3s as $buku)
<div class="relative w-[400px] bg-color2 rounded-3xl p-10 flex flex-col justify-between">
<img class="absolute -top-28 max-[1534px]:left-5 max-[1279px]:left-3 max-[1534px]:w-[300px] w-[349px]" src="{{ url('data_bestseller/' . $buku->img_bukuM) }}" alt="buku">
    <h2 class="mt-48 max-[1534px]:mt-36 max-[1279px]:mt-32 text-2xl font-bold font-inter text-center mx-auto w-52 h-16">{{ $buku->judul }}</h2>
    <p class="text-sm max-[1534px]:text-xs text-center font-inter">Blurb : {{ $buku->sinopsis }}.</p>
    <a class="mt-10 max-[1279px]:mt-6 font-inter text-lg max-[1279px]:text-base flex w-40 max-[1279px]:w-36 h-11 max-[1279px]:h-10 rounded-full justify-center items-center text-white mx-auto bg-color1"
        href="{{ route('homeuser.edit', $buku->id) }}">See more +</a>
</div>
@endforeach
        </section>
    </div>
    {{-- End Menu Buku Page2 --}}
    {{-- End Page2 --}}
    <div class="mb-20 max-[1534px]:mb-16"></div>
    {{-- Page3 --}}
    <div class="h-[900px] w-full overflow-hidden flex items-center">
    <div class="w-full h-[650px] bg-color1 flex justify-center items-center font-inter relative">
        <div class="container flex justify-center relative">
            <div class="w-full max-[1610px]:w-11/12 max-[1534px]:w-full max-[1370px]:w-11/12 max-[1279px]:w-full flex justify-between">
            <img class="w-[700px] max-[1279px]:w-[600px] relative -bottom-36 z-10" src="{{ asset('assets/gambar1.png') }}" alt="womanTable">
            <div class="flex flex-col w-[700px] self-center gap-y-14 max-[1370px]:gap-y-12">
                <h2 class="text-5xl max-[1534px]:text-[45px] font-bold text-white">Kata siapa terbit buku mahal?</h2>
                <p class="text-2xl max-[1370px]:text-xl text-white">Nih kita kasih tahu, di Penerbit Faza Citra Production bisa terbit secara gratis dan berbayar. Kalau gratis itu namanya Indie dan kalo berbayar itu namanya Self Publish. Dengan waktu cetak kurang lebih 7-10 hari kerja</p>
                <a  class="flex w-64 h-12 justify-center items-center bg-color3 text-lg text-white" href="https://wa.me/+6289698091919">Hubungi Kami</a>
            </div>
        </div>
            {{-- asset background --}}
            <div class="absolute w-[670px] h-[670px] max-[1279px]:w-[600px] max-[1279px]:h-600px rounded-full bg-white -left-52 -bottom-56"></div>
            <img class="absolute animate-vibrate blur-sm -left-80 top-52" src="{{ asset('assets/assetbg1.png') }}" alt="assetBg">
            <img class="absolute animate-vibrate -right-28 -bottom-20 max-[1279px]:w-64" src="{{ asset('assets/assetbg1.png') }}" alt="assetBg">
            <img class="absolute animate-vibrate -scale-x-100 blur-sm -right-72 -top-36" src="{{ asset('assets/assetbg1.png') }}" alt="assetBg">
            {{-- end asset background --}}
        </div>
    </div>
</div>
    {{-- End Page3 --}}
    <div class="mb-10"></div>
    {{-- end-space --}}
    {{-- page4 --}}
<div class="h-max w-full overflow-hidden">
    <div class="container mx-auto font-inter flex justify-center relative">
        <div class="w-11/12 flex justify-center gap-x-40">
        <div class="self-center flex flex-col gap-y-10 font-inter w-[700px] max-[1279px]:w-[400px]">
            <h2 class="text-5xl font-bold leading-[55px] w-[500px] max-[1279px]:text-[45px]">Ketahui Perbedaan Indie Dan Self Public</h2>
            <p class="text-2xl max-[1279px]:text-xl">Kamu masih bingung apa itu indie dan self public? Atau kamu seorang penulis yang baru saja terjun ke dunia kepenulisan? Sini aku kasih tahu apa beda nya Indie dan Self Publish!</p>
            <div class="flex gap-x-5">
                <a class="flex w-52 h-12 justify-center items-center bg-color1 text-lg text-white" href="/self">Self Publish</a>
                <a class="flex w-32 h-12 justify-center items-center bg-color1 text-lg text-white" href="/indie">Indie</a>
            </div>
        </div>
        <div class="w-[500px] h-[690px] overflow-hidden relative">
            <img class="scale-[1.6] absolute top-24" src="{{ asset('assets/gambar2.png') }}" alt="womanThink">
        </div>
    </div>
        {{-- asset background --}}
        <img class="absolute animate-vibrate -scale-x-100 w-[700px] -left-80 top-14 -z-10 blur-[10px]" src="{{ asset('assets/assetbg2.png') }}" alt="assetBg">
        <img class="absolute animate-vibrate w-96 -right-80 blur-[6px]" src="{{ asset('assets/assetbg2.png') }}" alt="assetBg">
        {{-- End asset background --}}
    </div>
</div>
    {{-- End page4 --}}
    <div class="mb-16"></div>
    {{-- Page5 --}}
    <div class="w-full h-[800px] flex justify-center items-center bg-color1 font-inter">
        <div class="container flex justify-center">
            <div class="w-11/12 flex justify-center gap-x-8">
            <div class="self-center w-[900px] max-[1534px]:w-[800px] max-[1279px]:w-[650px] flex flex-col gap-y-9 max-[1279px]:gap-y-7">
                <h2 class="text-5xl max-[1534px]:text-[40px] max-[1279px]:text-4xl font-bold text-white flex justify-center items-center h-20 max-[1534px]:h-16 w-96 max-[1534px]:w-[350px] bg-color3 mb-5">PAKET HEMAT</h2>
                <h2 class="text-5xl max-[1534px]:text-[38px] max-[1279px]:text-4xl font-bold text-white">Di Faza hanya dengan 500k <br>
                    kamu sudah bisa terbitkan buku loh!</h2>
                <p class="text-2xl max-[1534px]:text-[22px] max-[1279px]:text-xl text-white w-[650px] max-[1279px]:w-[550px]">Bener kok, <span class="font-bold">cuma 500 ribu</span> kamu sudah bisa terbitkan naskah kamu di faza. Sudah dapat <span class="font-bold">gratis cover dan layout</span>. Jadi jangan ragu ayo terbitkan naskahmu di Faza Citra Production.</p>

            </div>
            <div class="w-[540px] h-[560px] overflow-hidden relative">
                <img class="absolute scale-150 top-4 max-[1534px]:top-14 max-[1279px]:top-28" src="{{ asset('assets/assetbg2.png') }}" alt="Microphone">
            </div>
        </div>
        </div>
    </div>
    {{-- End Page5 --}}
    <script>
        const close = document.getElementById('close');
        const overlay = document.getElementById('overlay');
        close.addEventListener('click', () => {
            overlay.classList.add('hidden');
        })
    </script>
@endsection
