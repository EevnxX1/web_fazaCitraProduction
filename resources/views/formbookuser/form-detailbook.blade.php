@extends('layout')
@section('content')
{{-- penanda navbar --}}
<input type="text" class="hidden" value="books" id="pin">
{{-- end penanda navbar --}}
{{-- page1 --}}
    <div class="container mx-auto flex flex-col items-center mt-20">
        <div class="w-4/5 flex flex-col items-center gap-y-16">
            <div class="flex flex-col items-center gap-y-5">
                <h1 class="font-inter text-5xl font-bold">Form Data Pembelian Buku  </h1>

                <img src="{{ asset('assets/chart.png') }}" class="w-[500px] max-[1534px]:w-[400px] max-[1279px]:w-[350px]" alt="imageChart">
            </div>
            <section class="w-full">
                @if($type === 'bestseller')
                <form action="{{ route('formbookuser.store') }}" method="POST" id="orderForm">
                    @csrf
                    <label for="judul" class="font-inter relative block cursor-text">
                        <input value="{{ $model->judul ?? '' }}" id="judul" type="text" name="judul" readonly  class="peer outline-none focus:border-color1 mb-6 w-full h-14 px-3 text-gray-700 border-2 border-gray-400 rounded-md" required>
                        <p class="-top-2 text-sm text-gray-500 bg-white px-1 absolute left-3 peer-focus:text-color1">
                            Judul
                        </p>
                    </label>
                    <label for="namaPembeli" class="font-inter relative block cursor-text">
                        <input id="namaPembeli" type="text" name="nama" class="peer mb-6 w-full h-14 px-3 outline-none focus:border-color1 text-gray-700 border-2 border-gray-400 rounded-md" required>
                        <p class="peer-focus:-top-2 peer-focus:text-sm peer-focus:text-color1 peer-valid:-top-2 peer-valid:text-sm transition-all duration-200 ease-in-out text-base text-gray-500 bg-white px-1 absolute top-4 left-3">
                            Nama Pembeli
                        </p>
                    </label>
                    <label for="noWa" class="font-inter relative block cursor-text">
                        <input id="noWa" type="text" name="hp" class="peer mb-6 w-full h-14 px-3 outline-none focus:border-color1 text-gray-700 border-2 border-gray-400 rounded-md" required>
                        <p class="peer-focus:-top-2 peer-focus:text-sm peer-focus:text-color1 peer-valid:-top-2 peer-valid:text-sm transition-all duration-200 ease-in-out text-base text-gray-500 bg-white px-1 absolute top-4 left-3">
                            Nomor Whatsapp
                        </p>
                    </label>
                    <label for="alamatP" class="font-inter relative block cursor-text">
                        <input id="alamatP" type="text" name="alamat" class="peer mb-6 w-full h-14 px-3 outline-none focus:border-color1 text-gray-700 border-2 border-gray-400 rounded-md" required>
                        <p class="peer-focus:-top-2 peer-focus:text-sm peer-focus:text-color1 peer-valid:-top-2 peer-valid:text-sm transition-all duration-200 ease-in-out text-base text-gray-500 bg-white px-1 absolute top-4 left-3">
                            Alamat Pembeli
                        </p>
                    </label>

                    <label for="datetime" class="font-inter relative block cursor-text">
                        <input  id="datetime" type="datetime-local" name="tgl_beli" readonly  class="peer outline-none focus:border-color1 mb-6 w-full h-14 px-3 text-gray-700 border-2 border-gray-400 rounded-md" required>
                        <p class="-top-2 text-sm text-gray-500 bg-white px-1 absolute left-3 peer-focus:text-color1">
                            Tanggal
                        </p>
                    </label>
                    <label for="harga" class="font-inter relative block cursor-text">
                        <input value="{{ $model->harga ?? ''}}" id="harga" type="number" name="harga" readonly  class="peer outline-none focus:border-color1 mb-6 w-full h-14 px-3 text-gray-700 border-2 border-gray-400 rounded-md" required>
                        <p class="-top-2 text-sm text-gray-500 bg-white px-1 absolute left-3 peer-focus:text-color1">
                            Harga
                        </p>
                    </label>
                    <label for="qty" class="font-inter relative block cursor-text">
                        <input id="qty" type="number" name="qty" class="peer mb-6 w-full h-14 px-3 outline-none focus:border-color1 text-gray-700 border-2 border-gray-400 rounded-md" required>
                        <p class="peer-focus:-top-2 peer-focus:text-sm peer-focus:text-color1 peer-valid:-top-2 peer-valid:text-sm transition-all duration-200 ease-in-out text-base text-gray-500 bg-white px-1 absolute top-4 left-3">
                            Qty
                        </p>
                    </label>
                    <label for="total" class="font-inter relative block cursor-text">
                        <input  id="total" type="text" name="total" readonly class="peer outline-none focus:border-color1 mb-6 w-full h-14 px-3 text-gray-700 border-2 border-gray-400 rounded-md" required>
                        <p class="-top-2 text-sm text-gray-500 bg-white px-1 absolute left-3 peer-focus:text-color1">
                            Total
                        </p>
                    </label>
                    <label for="payment" class="font-inter relative block cursor-text">
                        <select id="payment" name="payment" class="peer outline-none focus:border-color1 mb-6 w-full h-14 px-3 text-gray-700 border-2 border-gray-400 rounded-md">
                            <option selected>~~ Pilih Pembayaran ~~</option>
                            <option value="Bank">Transfer Bank</option>
                            <option value="COD">COD</option>
                        </select>
                        <p class="-top-2 text-sm text-gray-500 bg-white px-1 absolute left-3 peer-focus:text-color1">
                            payment
                        </p>
                    </label>
                    <button type="submit" class="w-full py-4 text-xl bg-color1 font-bold text-white mt-5 rounded-md">Pesan Sekarang</button>
                </form>
                @elseif($type === 'buku')
                <form action="{{ route('formbookuser.store') }}" method="POST" id="orderForm">
                    @csrf
                    <label for="judul" class="font-inter relative block cursor-text">
                        <input value="{{ $model->judul ?? '' }}" id="judul" type="text" name="judul" readonly  class="peer outline-none focus:border-color1 mb-6 w-full h-14 px-3 text-gray-700 border-2 border-gray-400 rounded-md" required>
                        <p class="-top-2 text-sm text-gray-500 bg-white px-1 absolute left-3 peer-focus:text-color1">
                            Judul
                        </p>
                    </label>
                    <label for="namaPembeli" class="font-inter relative block cursor-text">
                        <input id="namaPembeli" type="text" name="nama" class="peer mb-6 w-full h-14 px-3 outline-none focus:border-color1 text-gray-700 border-2 border-gray-400 rounded-md" required>
                        <p class="peer-focus:-top-2 peer-focus:text-sm peer-focus:text-color1 peer-valid:-top-2 peer-valid:text-sm transition-all duration-200 ease-in-out text-base text-gray-500 bg-white px-1 absolute top-4 left-3">
                            Nama Pembeli
                        </p>
                    </label>
                    <label for="noWa" class="font-inter relative block cursor-text">
                        <input id="noWa" type="text" name="hp" class="peer mb-6 w-full h-14 px-3 outline-none focus:border-color1 text-gray-700 border-2 border-gray-400 rounded-md" required>
                        <p class="peer-focus:-top-2 peer-focus:text-sm peer-focus:text-color1 peer-valid:-top-2 peer-valid:text-sm transition-all duration-200 ease-in-out text-base text-gray-500 bg-white px-1 absolute top-4 left-3">
                            Nomor Whatsapp
                        </p>
                    </label>
                    <label for="alamatP" class="font-inter relative block cursor-text">
                        <input id="alamatP" type="text" name="alamat" class="peer mb-6 w-full h-14 px-3 outline-none focus:border-color1 text-gray-700 border-2 border-gray-400 rounded-md" required>
                        <p class="peer-focus:-top-2 peer-focus:text-sm peer-focus:text-color1 peer-valid:-top-2 peer-valid:text-sm transition-all duration-200 ease-in-out text-base text-gray-500 bg-white px-1 absolute top-4 left-3">
                            Alamat Pembeli
                        </p>
                    </label>

                    <label for="datetime" class="font-inter relative block cursor-text">
                        <input  id="datetime" type="datetime-local" name="tgl_beli" readonly  class="peer outline-none focus:border-color1 mb-6 w-full h-14 px-3 text-gray-700 border-2 border-gray-400 rounded-md" required>
                        <p class="-top-2 text-sm text-gray-500 bg-white px-1 absolute left-3 peer-focus:text-color1">
                            Tanggal
                        </p>
                    </label>
                    <label for="harga" class="font-inter relative block cursor-text">
                        <input value="{{ $model->harga ?? ''}}" id="harga" type="number" name="harga" readonly  class="peer outline-none focus:border-color1 mb-6 w-full h-14 px-3 text-gray-700 border-2 border-gray-400 rounded-md" required>
                        <p class="-top-2 text-sm text-gray-500 bg-white px-1 absolute left-3 peer-focus:text-color1">
                            Harga
                        </p>
                    </label>
                    <label for="qty" class="font-inter relative block cursor-text">
                        <input id="qty" type="number" name="qty" class="peer mb-6 w-full h-14 px-3 outline-none focus:border-color1 text-gray-700 border-2 border-gray-400 rounded-md" required>
                        <p class="peer-focus:-top-2 peer-focus:text-sm peer-focus:text-color1 peer-valid:-top-2 peer-valid:text-sm transition-all duration-200 ease-in-out text-base text-gray-500 bg-white px-1 absolute top-4 left-3">
                            Qty
                        </p>
                    </label>
                    <label for="total" class="font-inter relative block cursor-text">
                        <input  id="total" type="text" name="total" readonly class="peer outline-none focus:border-color1 mb-6 w-full h-14 px-3 text-gray-700 border-2 border-gray-400 rounded-md" required>
                        <p class="-top-2 text-sm text-gray-500 bg-white px-1 absolute left-3 peer-focus:text-color1">
                            Total
                        </p>
                    </label>
                    <label for="payment" class="font-inter relative block cursor-text">
                        <select id="payment" name="payment" class="peer outline-none focus:border-color1 mb-6 w-full h-14 px-3 text-gray-700 border-2 border-gray-400 rounded-md">
                            <option selected>~~ Pilih Pembayaran ~~</option>
                            <option value="Bank">Transfer Bank</option>
                            <option value="COD">COD</option>
                        </select>
                        <p class="-top-2 text-sm text-gray-500 bg-white px-1 absolute left-3 peer-focus:text-color1">
                            payment
                        </p>
                    </label>
                    <button type="submit" class="w-full py-4 text-xl bg-color1 font-bold text-white mt-5 rounded-md">Pesan Sekarang</button>
                </form>
                @elseif($type === 'recomendation')
                <form action="{{ route('formbookuser.store') }}" method="POST" id="orderForm">
                    @csrf
                    <label for="judul" class="font-inter relative block cursor-text">
                        <input value="{{ $model->judul ?? '' }}" id="judul" type="text" name="judul" readonly  class="peer outline-none focus:border-color1 mb-6 w-full h-14 px-3 text-gray-700 border-2 border-gray-400 rounded-md" required>
                        <p class="-top-2 text-sm text-gray-500 bg-white px-1 absolute left-3 peer-focus:text-color1">
                            Judul
                        </p>
                    </label>
                    <label for="namaPembeli" class="font-inter relative block cursor-text">
                        <input id="namaPembeli" type="text" name="nama" class="peer mb-6 w-full h-14 px-3 outline-none focus:border-color1 text-gray-700 border-2 border-gray-400 rounded-md" required>
                        <p class="peer-focus:-top-2 peer-focus:text-sm peer-focus:text-color1 peer-valid:-top-2 peer-valid:text-sm transition-all duration-200 ease-in-out text-base text-gray-500 bg-white px-1 absolute top-4 left-3">
                            Nama Pembeli
                        </p>
                    </label>
                    <label for="noWa" class="font-inter relative block cursor-text">
                        <input id="noWa" type="text" name="hp" class="peer mb-6 w-full h-14 px-3 outline-none focus:border-color1 text-gray-700 border-2 border-gray-400 rounded-md" required>
                        <p class="peer-focus:-top-2 peer-focus:text-sm peer-focus:text-color1 peer-valid:-top-2 peer-valid:text-sm transition-all duration-200 ease-in-out text-base text-gray-500 bg-white px-1 absolute top-4 left-3">
                            Nomor Whatsapp
                        </p>
                    </label>
                    <label for="alamatP" class="font-inter relative block cursor-text">
                        <input id="alamatP" type="text" name="alamat" class="peer mb-6 w-full h-14 px-3 outline-none focus:border-color1 text-gray-700 border-2 border-gray-400 rounded-md" required>
                        <p class="peer-focus:-top-2 peer-focus:text-sm peer-focus:text-color1 peer-valid:-top-2 peer-valid:text-sm transition-all duration-200 ease-in-out text-base text-gray-500 bg-white px-1 absolute top-4 left-3">
                            Alamat Pembeli
                        </p>
                    </label>

                    <label for="datetime" class="font-inter relative block cursor-text">
                        <input  id="datetime" type="datetime-local" name="tgl_beli" readonly  class="peer outline-none focus:border-color1 mb-6 w-full h-14 px-3 text-gray-700 border-2 border-gray-400 rounded-md" required>
                        <p class="-top-2 text-sm text-gray-500 bg-white px-1 absolute left-3 peer-focus:text-color1">
                            Tanggal
                        </p>
                    </label>
                    <label for="harga" class="font-inter relative block cursor-text">
                        <input value="{{ $model->harga ?? ''}}" id="harga" type="number" name="harga" readonly  class="peer outline-none focus:border-color1 mb-6 w-full h-14 px-3 text-gray-700 border-2 border-gray-400 rounded-md" required>
                        <p class="-top-2 text-sm text-gray-500 bg-white px-1 absolute left-3 peer-focus:text-color1">
                            Harga
                        </p>
                    </label>
                    <label for="qty" class="font-inter relative block cursor-text">
                        <input id="qty" type="number" name="qty" class="peer mb-6 w-full h-14 px-3 outline-none focus:border-color1 text-gray-700 border-2 border-gray-400 rounded-md" required>
                        <p class="peer-focus:-top-2 peer-focus:text-sm peer-focus:text-color1 peer-valid:-top-2 peer-valid:text-sm transition-all duration-200 ease-in-out text-base text-gray-500 bg-white px-1 absolute top-4 left-3">
                            Qty
                        </p>
                    </label>
                    <label for="total" class="font-inter relative block cursor-text">
                        <input  id="total" type="text" name="total" readonly class="peer outline-none focus:border-color1 mb-6 w-full h-14 px-3 text-gray-700 border-2 border-gray-400 rounded-md" required>
                        <p class="-top-2 text-sm text-gray-500 bg-white px-1 absolute left-3 peer-focus:text-color1">
                            Total
                        </p>
                    </label>
                    <label for="payment" class="font-inter relative block cursor-text">
                        <select id="payment" name="payment" class="peer outline-none focus:border-color1 mb-6 w-full h-14 px-3 text-gray-700 border-2 border-gray-400 rounded-md">
                            <option selected>~~ Pilih Pembayaran ~~</option>
                            <option value="Bank">Transfer Bank</option>
                            <option value="COD">COD</option>
                        </select>
                        <p class="-top-2 text-sm text-gray-500 bg-white px-1 absolute left-3 peer-focus:text-color1">
                            payment
                        </p>
                    </label>
                    <button type="submit" class="w-full py-4 text-xl bg-color1 font-bold text-white mt-5 rounded-md">Pesan Sekarang</button>
                </form>
                @else
                    <p>Model tidak ditemukan.</p>
                @endif
                 <!-- Tambahkan skrip JavaScript -->
                 <script>
                    document.addEventListener('DOMContentLoaded', function () {
                      const qtyInput = document.getElementById('qty');
                      const totalInput = document.getElementById('total');
                      const hargaInput = document.getElementById('harga');
                      const form = document.getElementById('orderForm');

                      form.addEventListener('submit', function (event) {
    // Pastikan total dihitung sebelum formulir dikirim
    updateTotal();

    // Tampilkan pop-up notifikasi setelah berhasil mengirim formulir
    window.alert('Pesanan berhasil dikirim!, Admin akan menghubungi anda by WA.');

    // Atau gunakan notifikasi HTML5 (bisa disesuaikan)
    // const notification = new Notification('Pesanan berhasil dikirim!');
});

                      // Fungsi untuk memformat angka sebagai format uang Indonesia
                      function formatUang(angka) {
                        return new Intl.NumberFormat('id-ID', {
                          style: 'currency',
                          currency: 'IDR',
                          minimumFractionDigits: 0,
                        }).format(angka);
                      }

                      // Fungsi untuk menghitung total dan menerapkan diskon
                      function hitungTotal() {
                        const qty = parseFloat(qtyInput.value);
                        const harga = parseFloat(hargaInput.value);
                        let total = qty * harga;

                        // Terapkan diskon 5% jika qty lebih dari 2
                        if(!qty) {
                            totalInput.value = formatUang(0)
                        } else {
                            if (qty > 2) {
                              total *= 0.95; // Diskon 5%
                            }
    
                            
                            // Tampilkan total yang diformat sebagai uang Indonesia pada input
                            totalInput.value = formatUang(total);
                        }
                      }

                      // Panggil fungsi hitungTotal saat qtyInput berubah
                      qtyInput.addEventListener('input', hitungTotal);

                      // Panggil fungsi hitungTotal secara otomatis saat halaman dimuat
                      hitungTotal();
                    });
                  </script>
                  <script>
                        // Fungsi untuk mengisi input tanggal dan waktu dengan nilai saat ini
function fillCurrentDateTime() {
    // Buat objek Date untuk mendapatkan tanggal dan waktu saat ini
    const currentDateTime = new Date();

    // Format tanggal dan waktu ke format ISO (yyyy-mm-ddThh:mm)
    const formattedDateTime = currentDateTime.toISOString().slice(0, 16);

    // Temukan elemen input tanggal dan waktu berdasarkan ID
    const inputDateTime = document.getElementById('datetime');

    // Atur nilai input tanggal dan waktu ke nilai saat ini
    inputDateTime.value = formattedDateTime;
}

// Panggil fungsi untuk mengisi input tanggal dan waktu saat halaman dimuat
fillCurrentDateTime();
                  </script>
            </section>
        </div>
    </div>
{{-- End page1 --}}
<div class="mb-20"></div>
@endsection
