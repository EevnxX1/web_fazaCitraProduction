@extends('admin.layout')
@section('content')
    <div>
        <h1 class="font-inter text-4xl text-color1 font-bold mb-10">Form Tambah Data Penjualan</h1>
        <div class="bg-white rounded-lg p-5 shadow-table">
            <form class="user" method="POST" action="{{ route('penjualan.store') }}" enctype="multipart/form-data">
                @csrf

                <label for="nama" class="font-inter relative block cursor-text">
                    <input id="nama" type="text" name="nama" class="peer mb-6 w-full h-14 px-3 outline-none focus:border-color1 focus:border-2 text-gray-700 border border-gray-300 rounded-md" required>
                    <p class="peer-focus:-top-2 peer-focus:text-sm peer-focus:text-color1 peer-valid:-top-2 peer-valid:text-sm transition-all duration-200 ease-in-out text-base text-gray-500 bg-white px-1 absolute top-4 left-3">
                        Nama Costumer
                    </p>
                </label>

                <label for="hp" class="font-inter relative block cursor-text">
                    <input id="hp" type="number" name="hp" class="peer mb-6 w-full h-14 px-3 outline-none focus:border-color1 focus:border-2 text-gray-700 border border-gray-300 rounded-md" required>
                    <p class="peer-focus:-top-2 peer-focus:text-sm peer-focus:text-color1 peer-valid:-top-2 peer-valid:text-sm transition-all duration-200 ease-in-out text-base text-gray-500 bg-white px-1 absolute top-4 left-3">
                        Nomer Whatsapp
                    </p>
                </label>

                <label for="alamat" class="font-inter relative block cursor-text">
                    <textarea id="alamat" name="alamat" class="peer mb-6 w-full h-14 px-3 py-4 outline-none text-gray-700 border border-gray-300 rounded-md" required></textarea>
                    <p class="-top-2 text-sm text-gray-500 bg-white px-1 absolute left-3">
                        Alamat Pengiriman
                    </p>
                </label>

              
                <label for="tgl_pembelian" class="font-inter relative block cursor-text">
                    <input id="tgl_pembelian" type="date" name="tgl_pembelian" class="peer mb-6 w-full h-14 px-3 outline-none focus:border-color1 focus:border-2 text-gray-700 border border-gray-300 rounded-md" required>
                    <p class="peer-focus:-top-2 peer-focus:text-sm peer-focus:text-color1 peer-valid:-top-2 peer-valid:text-sm transition-all duration-200 ease-in-out text-base text-gray-500 bg-white px-1 absolute top-4 left-3">
                    Tanggal Pembelian
                    </p>
                </label>

                <label for="judul" class="font-inter relative block cursor-text">
                    <select name="judul" id="judul" class="peer mb-6 w-full h-14 px-3 outline-none focus:border-color1 focus:border-2 text-gray-700 border border-gray-300 rounded-md" required>
                        <option selected disabled>--Pilih judul buku--</option>
                        @foreach ($bukus as $buku)
                            <option value="{{ $buku->judul }}" data-harga="{{ $buku->harga }}">{{ $buku->judul }}</option>
                        @endforeach
                    </select>
                    <p class="-top-2 text-sm text-gray-500 bg-white px-1 absolute left-3">
                        Pilih judul buku
                    </p>
                </label>

               
                <label for="qty" class="font-inter relative block cursor-text">
                    <input id="qty" type="number" name="qty" class="peer mb-6 w-full h-14 px-3 outline-none focus:border-color1 focus:border-2 text-gray-700 border border-gray-300 rounded-md" required>
                    <p class="peer-focus:-top-2 peer-focus:text-sm peer-focus:text-color1 peer-valid:-top-2 peer-valid:text-sm transition-all duration-200 ease-in-out text-base text-gray-500 bg-white px-1 absolute top-4 left-3">
                        Quantity pembelian
                    </p>
                </label>

                <label for="payment" class="font-inter relative block cursor-text">
                 <select name="payment" id="payment" class="peer mb-6 w-full h-14 px-3 outline-none focus:border-color1 focus:border-2 text-gray-700 border border-gray-300 rounded-md" required>
                    <p class="peer-focus:-top-2 peer-focus:text-sm peer-focus:text-color1 peer-valid:-top-2 peer-valid:text-sm transition-all duration-200 ease-in-out text-base text-gray-500 bg-white px-1 absolute top-4 left-3">
                    <option selected disabled>--Pilih Metode Pembayaran--</option>
                       <option value="Transfer">Transfer</option>
                        <option value="COD">COD</option>
                    </select>
                    </p>
                </label>


               
                
                <div class="form-group">
                    <label>harga :</label>
                    <input type="text" readonly id="harga" class="form-control" name="harga" placeholder="Rp.">
                </div>


                <div class="form-group">
                    <label>Diskon :</label>
                    <input type="text" readonly id="diskonHarga" class="form-control" name="diskon" placeholder="0%">
                </div>

            
                <div class="form-group">
                    <label>Total :</label>
                    <input type="text" id="total" readonly class="form-control" name="total" placeholder="0">
                </div>

                <button type="submit" class="py-3 px-8 text-white bg-color1 font-inter mt-2 rounded-lg">Submit Data</button>
            </form>
        </div>
    </div>

    <script>
                    const judulSelect = document.getElementById('judul');
                    const hargaInput = document.getElementById('harga');
                    const qtyInput = document.getElementById('qty');
                    const diskonInput = document.getElementById('diskonHarga');
                    const totalInput = document.getElementById('total');
                    const hargaArray = @json($bukus->pluck('harga')->toArray());

                    judulSelect.addEventListener('change', () => {
                        let selectedJudul = judulSelect.value;
                        let harga = hargaArray[judulSelect.selectedIndex - 1]; // Assuming index starts from 1
                        hargaInput.value = `${harga}`;
                        qtyInput.dispatchEvent(new Event('input')); // Trigger input event to recalculate total
                    });

                    qtyInput.addEventListener('input', () => {
                        let qty = parseInt(qtyInput.value) || 0;
                        let harga = parseInt(hargaArray[judulSelect.selectedIndex - 1]) || 0; // Assuming index starts from 1
                        let total = qty * harga;

                        if (qty > 2) {
                            let diskon = 0.05;
                            let diskonAmount = total * diskon;
                            let discountedTotal = total - diskonAmount;

                            diskonInput.value = '5%';
                            totalInput.value = discountedTotal;
                        } else {
                            diskonInput.value = '0%';
                            totalInput.value = total;
                        }

                        if (!qty) {
                            totalInput.value = '0';
                        }
                    });
                </script>

            </form>
        </div>
    </div>
@endsection
