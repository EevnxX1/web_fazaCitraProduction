@extends('layout')
@section('content')
{{-- penanda navbar --}}
<input type="text" class="hidden" value="books" id="pin">
{{-- end penanda navbar --}}
{{-- page1 --}}
<div class="w-full h-max bg-color1 py-8 pb-11 max-[1535px]:py-10 max-[1535px]:pb-24">
    <div class="container mx-auto flex flex-col items-center relative">
        <div class="relative h-[680px] w-[800px] max-[1535px]:h-[480px] z-10 animate-fadeInLeft">
            @foreach ($bigBook as $book)
            <img class="max-[1535px]:scale-[0.85] absolute -top-10 max-[1535px]:-top-32 w-[865px]" src="{{ asset('data_comingsoon/' . $book->img_buku) }}" alt="buku15">
            @endforeach
        </div>
        <p class="animate-fadeIn font-akira text-white text-3xl z-10 absolute left-48 top-2/4 -translate-y-2/4 max-[1535px]:left-28 max-[1279px]:left-12">COMING SOON</p>
        <p class="animate-fadeIn font-akira text-white text-3xl z-10 absolute right-48 top-2/4 -translate-y-2/4 max-[1535px]:right-28 max-[1279px]:right-12" >COMING SOON</p>
        {{-- background text --}}
        <img class="animate-fadeIn absolute z-[0] top-2/4 -translate-y-2/4 max-[1535px]:bottom-0 max-[1535px]:scale-[0.8] max-[1279px]:scale-[0.95]" src="{{ asset('assets/text2.png') }}" alt="background">
        {{-- end background text --}}
    </div>
</div>
{{-- end page1 --}}
{{-- space --}}
<div class="mb-32"></div>
{{-- end space --}}
{{-- page2 --}}
    <div class="container mx-auto flex justify-center">
        <div class="w-11/12 flex flex-col gap-y-6">
            <div class="flex justify-between px-36 max-[1534px]:px-20 max-[1279px]:px-5 items-center">
                <h1 class="text-2xl font-bold text-color1 font-akira">coming soon this month</h1>

            </div>
            <section class="flex flex-col">
                @foreach ($comings as $item)

                <div class="w-full flex justify-center gap-x-28 -mb-14 max-[1279px]:gap-x-16 py-8"> 
                <img  src="{{ url('data_comingsoon/' . $item->img_buku) }}" class="w-[550px]" alt="buku">
                    <div class="text-color1 w-[450px] max-[1279px]:w-[480px] self-center flex flex-col gap-y-4">
                        <h1 class="font-akira text-4xl max-[1279px]:text-3xl">{{ $item->judul }}</h1>
                        <h1 class="font-inter text-2xl">By <span class="font-bold">{{ $item->penulis }}</span></h1>
                        <p class="text-lg max-[1279px]:text-base font-inter">{{ $item->sinopsis }}.</p>
                        <a href="{{ route('comingsoonuser.edit', $item->id) }}" class="w-max font-inter py-2 px-10 text-white bg-color1 rounded-full">See More+</a>
                    </div>
                </div>
                @endforeach
                <!-- <div class="w-full flex justify-center gap-x-28 -mb-14 max-[1279px]:gap-x-16 py-8">
                    <img src="{{ asset('assets/buku2.png') }}" class="w-[550px]" alt="buku">
                    <div class="text-color1 w-[450px] max-[1279px]:w-[480px] self-center flex flex-col gap-y-4">
                        <h1 class="font-akira text-4xl max-[1279px]:text-3xl">nulis nevel versi gampang</h1>
                        <h1 class="font-inter text-2xl">By <span class="font-bold">DhiKarey</span></h1>
                        <p class="text-lg max-[1279px]:text-base font-inter">Buku ini adalah buku pertama Penerbit Faza Citra Production. Penulis buku ini aktif dalam memberikan masukan-masukan untuk penulis yang bingung tentang beberapa masalah didunia kepenulisan.</p>
                        <a href="/detail-coming" class="w-max font-inter py-2 px-10 text-white bg-color1 rounded-full">See More+</a>
                    </div>
                </div> -->
                <!-- <div class="w-full flex justify-center gap-x-28 -mb-14 max-[1279px]:gap-x-16 py-8">
                    <img src="{{ asset('assets/buku2.png') }}" class="w-[550px]" alt="buku">
                    <div class="text-color1 w-[450px] max-[1279px]:w-[480px] self-center flex flex-col gap-y-4">
                        <h1 class="font-akira text-4xl max-[1279px]:text-3xl">nulis nevel versi gampang</h1>
                        <h1 class="font-inter text-2xl">By <span class="font-bold">DhiKarey</span></h1>
                        <p class="text-lg max-[1279px]:text-base font-inter">Buku ini adalah buku pertama Penerbit Faza Citra Production. Penulis buku ini aktif dalam memberikan masukan-masukan untuk penulis yang bingung tentang beberapa masalah didunia kepenulisan.</p>
                        <a href="/detail-coming" class="w-max font-inter py-2 px-10 text-white bg-color1 rounded-full">See More+</a>
                    </div>
                </div>
                <div class="w-full flex justify-center gap-x-28 -mb-14 max-[1279px]:gap-x-16 py-8">
                    <img src="{{ asset('assets/buku2.png') }}" class="w-[550px]" alt="buku">
                    <div class="text-color1 w-[450px] max-[1279px]:w-[480px] self-center flex flex-col gap-y-4">
                        <h1 class="font-akira text-4xl max-[1279px]:text-3xl">nulis nevel versi gampang</h1>
                        <h1 class="font-inter text-2xl">By <span class="font-bold">DhiKarey</span></h1>
                        <p class="text-lg max-[1279px]:text-base font-inter">Buku ini adalah buku pertama Penerbit Faza Citra Production. Penulis buku ini aktif dalam memberikan masukan-masukan untuk penulis yang bingung tentang beberapa masalah didunia kepenulisan.</p>
                        <a href="/detail-coming" class="w-max font-inter py-2 px-10 text-white bg-color1 rounded-full">See More+</a>
                    </div>
                </div>
                <div class="w-full flex justify-center gap-x-28 -mb-14 max-[1279px]:gap-x-16 py-8">
                    <img src="{{ asset('assets/buku2.png') }}" class="w-[550px]" alt="buku">
                    <div class="text-color1 w-[450px] max-[1279px]:w-[480px] self-center flex flex-col gap-y-4">
                        <h1 class="font-akira text-4xl max-[1279px]:text-3xl">nulis nevel versi gampang</h1>
                        <h1 class="font-inter text-2xl">By <span class="font-bold">DhiKarey</span></h1>
                        <p class="text-lg max-[1279px]:text-base font-inter">Buku ini adalah buku pertama Penerbit Faza Citra Production. Penulis buku ini aktif dalam memberikan masukan-masukan untuk penulis yang bingung tentang beberapa masalah didunia kepenulisan.</p>
                        <a href="/detail-coming" class="w-max font-inter py-2 px-10 text-white bg-color1 rounded-full">See More+</a>
                    </div>
                </div> -->
            </section>
        </div>
    </div>
{{-- end page2 --}}
{{-- space --}}
<div class="mb-10"></div>
{{-- end space --}}
<script>
const gambar = document.getElementById("gambar-info");
console.log(gambar.offsetWidth);
console.log(gambar.offsetHeight);
</script>
@endsection
