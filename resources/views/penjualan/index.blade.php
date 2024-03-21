@extends('admin.layout')
@section('content')
    <div>
        <div class="font-inter flex flex-col gap-y-1 mb-8">
            <h1 class="text-4xl text-color1 font-bold">Table Penjualan</h1>
            <p class="text-gray-700 text-base">Tabel menampilkan kumpulan data. Mereka dapat disesuaikan sepenuhnya</p>
        </div>

            <div>
            <form action="{{ route('penjualan.index') }}" method="GET">
    <div class="flex mb-4">
        <div class="mr-2">
            <label for="">Tanggal Awal</label>
            <input type="date" name="dari" class="w-60 h-10 rounded-lg outline-none border-2 border-gray-500 px-2">
        </div>
        <div>
            <label for="">Tanggal Akhir</label>
            <input type="date" name="sampai" class="w-60 h-10 rounded-lg outline-none border-2 border-gray-500 px-2">
        </div>
      
        <button type="submit" class="px-4 py-2 bg-color1 text-white font-inter rounded-lg ml-2">Cari Data</button>
    </div>
</form>
            </div>

            @if ($message = Session::get("success"))
        <div class="w-full mb-4 rounded-xl h-max py-5 text-center bg-lime-500 text-white font-bold font-inter">
            {{ $message }}
        </div>       
        @endif
        <div class="h-max w-full bg-white p-5 rounded-lg shadow-table">
            <table class="text-center table-fixed w-full">
                <thead>
                    <tr class="border-b-2 text-gray-700 font-inter text-base">
                      <th class="pb-2 w-[2%]">No.</th>
                      <th class="pb-2 w-[10%]">Nama Customer</th>
                      <th class="pb-2 w-[8%]">Nomer Whatsapp</th>
                      <th class="pb-2 w-[10%]">Alamat Pengiriman</th>
                      <th class="pb-2 w-[8%]">Tanggal Pembelian</th>
                      <th class="pb-2 w-[8%]">Judul Buku</th>
                      <th class="pb-2 w-[8%]">Harga</th>
                      <th class="pb-2 w-[8%]">Jumlah yang dibeli</th>

                      <th class="pb-2 w-[8%]">Payment</th>
                      <th class="pb-2 w-[10%]">total</th>

                    </tr>
                  </thead>
                  <tbody class="text-gray-700">
                    @foreach($penjualans as $penjualan)
                        <tr class="border-b-2 text-sm">
                            <td>{{ ++$i }}</td>

                            <td class="py-2">{{ $penjualan->nama }}</td>
                            <td class="py-2">{{ $penjualan->hp }}</td>
                            <td class="py-2">{{ $penjualan->alamat }}</td>
                            <td class="py-2">{{ $penjualan->tgl_beli }}</td>
                            <td class="py-2">{{ $penjualan->judul }}</td>
                            <td class="py-2">Rp. {{ number_format($penjualan->harga,0,',','.') }}</td>
                            <td class="py-2">{{ $penjualan->qty }}</td>

                            <td class="py-2">{{ $penjualan->payment }}</td>
                            <td class="py-2"> {{ $penjualan ->total}}</td>

                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
