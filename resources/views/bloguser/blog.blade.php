@extends('layout')
@section('content')
{{-- penanda navbar --}}
<input type="text" class="hidden" value="blog" id="pin">
{{-- end penanda navbar --}}
{{-- page1 --}}
    <div class="w-full h-max bg-color1 flex justify-center overflow-hidden">
        <div class="container flex justify-center">
            <div class="w-11/12 flex justify-between relative">
                <div class="text-white self-center flex flex-col gap-y-10 bg-transparent relative z-10">
                    <h1 class="font-akira text-6xl max-[1279px]:text-5xl leading-[70px]">Blog <br>
                        faza citra <br>
                        production</h1>
                    <p class="font-inter text-xl max-[1279px]:text-lg text-justify w-[600px] max-[1279px]:w-[500px]">Hai selamat datang di Blog milik
                        Faza, berikut adalah berita dan beberapa
                        berita mengenai kepenulisan yang bermanfaat.</p>
                </div>
                <img src="{{ asset('assets/gambar7.png') }}" class="w-[650px] max-[1279px]:w-[550px] relative z-10" alt="gambar">
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
<div class="mb-20"></div>
{{-- page2 --}}
    <div class="container mx-auto flex flex-col items-center h-max gap-y-16">
        @foreach ($blogs as $blog)


        <div class="w-11/12 flex justify-center gap-x-20 max-[1279px]:gap-x-16">
            <img src="{{ url('data_news/' . $blog->img_buku) }}" class="w-96 max-[1279px]:w-[300px]" alt="gambar-berita">
            <div class="font-inter w-[800px] max-[1279px]:w-[700px] flex flex-col gap-y-3">
                <h1 class="text-4xl border-b-4 border-slate-300 font-bold pb-8 max-[1279px]:pb-5"> {{ $blog->judul }}</h1>
                <p class="text-slate-400">{{ $blog->tanggal }}</p>
                <p>{{ $blog->paragraf1 }}.</p>
                <a href="{{ route('bloguser.edit', $blog->id) }}" class="w-max px-10 py-3 bg-color3 text-white text-base mt-2">Baca lebih lanjut</a>
            </div>
        </div>
        @endforeach
        <div class="w-11/12 flex justify-center gap-x-20 max-[1279px]:gap-x-16">
            <img src="{{ asset('assets/gambar8.png') }}" class="w-96 max-[1279px]:w-72" alt="gambar-berita">
            <div class="font-inter w-[800px] max-[1279px]:w-[700px] flex flex-col gap-y-3">
                <h1 class="text-4xl border-b-4 border-slate-300 font-bold pb-8 max-[1279px]:pb-5">Hari Ulang Tahun ke 3 Faza Citra Production - Menjadi Lebih Maju</h1>
                <p class="text-slate-400">12/Desember/2023</p>
                <p>orem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.</p>
                <a href="/detail-blog" class="w-max px-10 py-3 bg-color3 text-white text-base mt-2">Baca lebih lanjut</a>
            </div>
        </div>
    </div>
{{-- End page2 --}}
<div class="mb-20"></div>
@endsection
