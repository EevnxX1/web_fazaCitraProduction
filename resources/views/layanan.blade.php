@extends('layout')
@section('content')
{{-- penanda navbar --}}
<input type="text" class="hidden" value="layanan" id="pin">
{{-- end penanda navbar --}}
{{-- page1 --}}
    <div class="w-full h-max bg-color1 py-20 flex justify-center">
        <div class="container flex justify-center">
            <div class="w-4/5 font-akira text-sm text-color1 grid justify-center grid-cols-layananW grid-row-layananH gap-10 gap-x-20">
                <a href="/error" class="flex flex-col items-center justify-between p-4 bg-white rounded-3xl overflow-hidden"> 
                    <img src="{{ asset('assets/layanan1.png') }}" class="w-80" alt="">
                    <p>Self Publish</p>
                </a>
                <a href="/error" class="flex flex-col items-center justify-between p-4 bg-white rounded-3xl overflow-hidden"> 
                    <img src="{{ asset('assets/layanan2.png') }}" class="w-80 scale-[1.8] translate-y-10" alt="">
                    <p>indie</p>
                </a>
                <a href="/jasa" class="flex flex-col items-center justify-between p-4 bg-white rounded-3xl overflow-hidden"> 
                    <img src="{{ asset('assets/layanan3.png') }}" class="w-80 scale-[1.2] translate-y-10" alt="">
                    <p>jasa</p>
                </a>
                <a href="/kelas-menulis" class="flex flex-col items-center justify-between p-4 bg-white rounded-3xl overflow-hidden"> 
                    <img src="{{ asset('assets/layanan4.png') }}" class="w-80" alt="">
                    <p>kelas menulis</p>
                </a>
                <a href="/kelas-editing" class="flex flex-col items-center justify-between p-4 bg-white rounded-3xl overflow-hidden"> 
                    <img src="{{ asset('assets/layanan5.png') }}" class="w-80 scale-150 -translate-y-3" alt="">
                    <p>kelas editing</p>
                </a>
                <a href="" class="flex flex-col items-center justify-between p-4 bg-white rounded-3xl overflow-hidden"> 
                    <img src="{{ asset('assets/layanan6.png') }}" class="w-80 scale-125 translate-y-5" alt="">
                    <p>event</p>
                </a>
            </div>
        </div>
    </div>
{{-- End page1 --}}
@endsection