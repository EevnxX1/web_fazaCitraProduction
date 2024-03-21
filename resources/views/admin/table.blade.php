@extends('admin.layout')
@section('content')
    <div>
        <div class="font-inter flex flex-col gap-y-1 mb-8">
            <h1 class="text-4xl text-color1 font-bold">Table Buku</h1>
            <p class="text-gray-700 text-base">Tabel menampilkan kumpulan data. Mereka dapat disesuaikan sepenuhnya</p>
        </div>
        <div class="flex justify-between items-center">
            <a href="/form" class="px-6 py-3 bg-color1 text-white font-inter rounded-xl text-lg">+Tambah Data</a>
            <div>
                <form action="" method="">
                    <input type="text" name="cari" class="w-60 h-10 rounded-lg outline-none border-2 border-gray-500 px-2">
                    <button type="submit" class="px-4 py-2 bg-color1 text-white font-inter rounded-lg">Cari Data</button>
                </form>
            </div>
        </div>        
        <div class="h-max w-full bg-white p-5 rounded-lg shadow-table mt-8">
            <table class="text-center table-fixed w-full">
                <thead>
                <tr class="border-b-2 text-gray-700 font-inter text-base">
                    <th class="pb-2 w-[2%]">No</th>
                    <th class="pb-2 w-[8%]">Judul</th>
                    <th class="pb-2 w-[10%]">Penulis</th>
                    <th class="pb-2 w-[8%]">Halaman</th>
                    <th class="pb-2 w-[8%]">Harga Coret</th>
                    <th class="pb-2 w-[8%]">Harga</th>
                    <th class="pb-2 w-[8%]">Nomer ISBN</th>
                    <th class="pb-2 w-[%]">Sinopsis</th>
                    <th class="pb-2 w-[10%]">Isi Buku</th>
                    <th class="pb-2 w-[10%]">Buku</th>
                    <th class="pb-2 w-[10%]">Action</th>
                </tr>
                </thead>
                <tbody class="text-gray-700">
                <tr class="border-b-2 text-sm">
                    <td class="py-2">1</td>
                    <td class="py-2">Permaisuri</td>
                    <td class="py-2">Reza Oktavian</td>
                    <td class="py-2">15 Halaman</td>
                    <td class="py-2">Rp. 80.000</td>
                    <td class="py-2">Rp. 65.000</td>
                    <td class="py-2">LDK001</td>
                    <td class="py-2">Lorem ipsum dolor</td>
                    <td class="py-2">Gambar isi 1</td>
                    <td class="py-2">Gambar Buku 1</td>
                    <td class="py-2">
                        <form action="" method="post" class="flex items-center justify-center gap-x-1">
                        <a href=""><svg class="w-8" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><title>Edit Data</title><path d="M13.09 20C13.21 20.72 13.46 21.39 13.81 22H6C4.89 22 4 21.11 4 20V4C4 2.9 4.89 2 6 2H14L20 8V13.09C19.67 13.04 19.34 13 19 13C18.66 13 18.33 13.04 18 13.09V9H13V4H6V20H13.09M17 15L14.5 18H16V22H18V18H19.5L17 15M22 20V16H20V20H18.5L21 23L23.5 20H22Z" /></svg></a>
                        | 
                        <button type="submit"><svg class="w-8" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><title>Hapus Data</title><path d="M6,19A2,2 0 0,0 8,21H16A2,2 0 0,0 18,19V7H6V19M8,9H16V19H8V9M15.5,4L14.5,3H9.5L8.5,4H5V6H19V4H15.5Z" /></svg></button>
                        </form>
                    </td>
                </tr>
                <tr class="border-b-2 text-sm">
                    <td class="py-2">1</td>
                    <td class="py-2">Permaisuri</td>
                    <td class="py-2">Reza Oktavian</td>
                    <td class="py-2">15 Halaman</td>
                    <td class="py-2">Rp. 80.000</td>
                    <td class="py-2">Rp. 65.000</td>
                    <td class="py-2">LDK001</td>
                    <td class="py-2">Lorem ipsum dolor</td>
                    <td class="py-2">Gambar isi 1</td>
                    <td class="py-2">Gambar Buku 1</td>
                    <td class="py-2">
                        <form action="" method="post" class="flex items-center justify-center gap-x-1">
                        <a href=""><svg class="w-8" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><title>Edit Data</title><path d="M13.09 20C13.21 20.72 13.46 21.39 13.81 22H6C4.89 22 4 21.11 4 20V4C4 2.9 4.89 2 6 2H14L20 8V13.09C19.67 13.04 19.34 13 19 13C18.66 13 18.33 13.04 18 13.09V9H13V4H6V20H13.09M17 15L14.5 18H16V22H18V18H19.5L17 15M22 20V16H20V20H18.5L21 23L23.5 20H22Z" /></svg></a>
                        | 
                        <button type="submit"><svg class="w-8" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><title>Hapus Data</title><path d="M6,19A2,2 0 0,0 8,21H16A2,2 0 0,0 18,19V7H6V19M8,9H16V19H8V9M15.5,4L14.5,3H9.5L8.5,4H5V6H19V4H15.5Z" /></svg></button>
                        </form>
                    </td>
                </tr>
                </tbody>
            </table>
        </div>
    </div>
@endsection