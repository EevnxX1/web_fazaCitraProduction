@extends('layout')
@section('content')
{{-- penanda navbar --}}
<input type="text" class="hidden" value="about" id="pin">
{{-- end penanda navbar --}}
{{-- page1 --}}
    <div class="container mx-auto flex justify-center mt-28">
        <div class="w-11/12 flex justify-center gap-x-36">
            <div class="w-[600px] flex flex-col gap-y-10">
                <h1 class="font-akira text-6xl max-[1279px]:text-5xl text-color1">faza citra production</h1>
                <p class="font-inter text-xl max-[1279px]:text-lg text-color1 text-justify tracking-wider">Penerbit Faza Citra Production merupakan penerbit buku yang berdiri di bawah naungan CV Faza Citra Production. Penerbit Faza Citra Production berdiri pada tanggal 22 Februari 2021 di Cirebon. Pemilik Penerbit Faza Citra Production adalah Laely Maulidyah, S. Hum.
                    Penerbit Faza Citra Production hadir untuk memberikan warna literasi Indonesia sebagai wadah kreativitas para penerus bangsa.</p>
            </div>
            <img src="{{ asset('assets/big-logo.png') }}" alt="gambar" class="w-[400px] max-[1279px]:w-[350px]">
        </div>
    </div>
{{-- End page1 --}}
<div class="mb-20"></div>
{{-- page2 --}}
    <div class="w-full h-max bg-color1 flex flex-col items-center py-24 gap-y-5 max-[1279px]:gap-y-10">
        <h1 class="font-akira text-4xl text-white">visi & misi</h1>
        <div class="container flex justify-center">
            <div class="w-11/12 flex justify-between">
                <div class="text-white font-inter flex flex-col text-2xl max-[1534px]:text-xl gap-y-10 self-center">
                    <div>
                        <h1 class="font-bold">VISI :</h1>
                        <p>Menjadikan ladang dakwah bagi para penulis atau mitra bisnis. Menaungi semua orang yang ingin berkarya atau berkreativitas dalam media apa pun.</p>
                    </div>
                    <div>
                        <h1 class="font-bold">MISI :</h1>
                        <ul class="list-disc">
                            <li class="ml-6 text-justify tracking-wider">Memastikan naskah yang akan terbit tidak mengandung unsur yang merusak moral generasi penerus bangsa.</li>
                            <li class="ml-6 text-justify tracking-wider">Menyediakan fasilitas yang dibutuhkan penulis atau mitra bisnis dengan memberikan pelayanan yang prima.</li>
                            <li class="ml-6 text-justify tracking-wider">Menyediakan fasilitas yang dibutuhkan penulis atau mitra bisnis dengan memberikan pelayanan yang prima.Memberikan hasil kinerja tim sesuai dengan harapan penulis atau mitra bisnis.</li>
                            <li class="ml-6 text-justify tracking-wider">Memberikan kebermanfaatan bagi lingkungan sekitar.</li>
                        </ul>
                    </div>
                </div>
                <img src="{{ asset('assets/gambar4.png') }}" class="w-[700px] max-[1534px]:w-[600px] max-[1279px]:w-[450px]" alt="gambar">
            </div>
        </div>
    </div>
{{-- End page2 --}}
<div class="mb-10"></div>
@endsection