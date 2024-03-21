@extends('layout')
@section('content')
{{-- page1 --}}
<div class="h-max pb-72 max-[1699px]:pb-48 max-[1559px]:pb-48 max-[1429px]:pb-52 max-[1309px]:pb-36 max-[1199px]:pb-40 w-full overflow-hidden">
    <div class="w-full h-[650px] max-[1559px]:h-[570px] max-[1429px]:h-[500px] max-[1199px]:h-[450px] bg-color1 flex flex-col items-center relative">
        <h1 class="text-center text-6xl max-[1559px]:text-5xl font-akira text-white mt-20">
            sorry, <br>
            coming soon pages</h1>
        <img src="{{ asset('assets/error.png') }}" class="absolute top-20 w-4/5" alt="gambar-error">
    </div>
</div>
{{-- End page1 --}}
@endsection