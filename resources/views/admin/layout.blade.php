<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@200;400;700;900&family=Montserrat:wght@200;300;400&family=Plus+Jakarta+Sans:wght@200&family=Plus+Jakarta+Sans:wght@300;400;500;600;700&display=swap" rel="stylesheet" />
    <link href="https://fonts.cdnfonts.com/css/akira-expanded" rel="stylesheet">
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://kit.fontawesome.com/29c51fef9f.js" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script>
        tailwind.config = {
          theme: {
            extend: {
              colors: {
                color1: '#8C5EE6',
                color2: '#D9C6FF',
                color3: '#FF3A3A',
                color4: '#774CD6',
              },
              fontFamily: {
                inter: 'Inter',
                akira: 'Akira Expanded',
                mont: 'Montserrat',
                jakarta: 'Plus Jakarta Sans'
              },
              gridTemplateColumns: {
                'navbar1C': 'max-content 1fr',
              },
              gridTemplateRows: {
                'navbar1R': 'max-content 1fr',
              },
              boxShadow: {
                'table': '0 0 10px 1px rgba(0, 0, 0, 0.25)',
              },
            }
          }
        }
      </script>
    <title>Document</title>
</head>
<body>
    <div class="grid grid-cols-navbar1C grid-rows-navbar1R h-lvh pr-12 gap-y-3 gap-x-10 bg-gray-100">
      {{-- navbar 1 --}}
      <div class="col-start-2 flex justify-end h-max items-center pt-2 gap-x-5">
          <div>
            <svg class="w-7" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><title>bell-outline</title><path d="M10 21H14C14 22.1 13.1 23 12 23S10 22.1 10 21M21 19V20H3V19L5 17V11C5 7.9 7 5.2 10 4.3V4C10 2.9 10.9 2 12 2S14 2.9 14 4V4.3C17 5.2 19 7.9 19 11V17L21 19M17 11C17 8.2 14.8 6 12 6S7 8.2 7 11V18H17V11Z" /></svg>
          </div>
          <div class="flex justify-between items-center gap-x-2">
            <p class="font-inter">Selamat Datang Admin</p>
            <svg class="w-10 fill-color1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><title>account-circle</title><path d="M12,19.2C9.5,19.2 7.29,17.92 6,16C6.03,14 10,12.9 12,12.9C14,12.9 17.97,14 18,16C16.71,17.92 14.5,19.2 12,19.2M12,5A3,3 0 0,1 15,8A3,3 0 0,1 12,11A3,3 0 0,1 9,8A3,3 0 0,1 12,5M12,2A10,10 0 0,0 2,12A10,10 0 0,0 12,22A10,10 0 0,0 22,12C22,6.47 17.5,2 12,2Z" /></svg>
          </div>
      </div>
      {{-- End Navbar 1 --}}
      {{-- navbar 2 --}}
        <div class="row-start-1 row-span-2">
          <div class="flex items-center justify-center gap-x-3 mb-8 p-5">
            <img src="{{ asset('assets/logo.png') }}" class="w-12" alt="logo">
            <h1 class="font-akira text-lg text-color1 leading-5">faza citra <br> production</h1>
          </div>
          <section class="flex flex-col gap-y-3 font-inter text-[19px]">
            <a href="{{ route('dashboard.index') }}" class="pl-5 py-3 w-full h-max bg-gradient-to-r from-violet-300 from-10% to-color1 to-80% flex items-center gap-x-3 rounded-r-full text-white"><i class="fa-solid fa-house"></i> Dashboard</a></a>
            <div class="flex w-full items-center text-gray-500 text-base py-2"><span class="w-[20%] border"></span><p class="px-2">Data</p><span class="w-[80%] border"></span></div>
            <a href="{{ route('buku.index') }}" class="pl-5 py-3 w-full h-max text-gray-700 flex items-center gap-x-3 rounded-r-full"><i class="fa-solid fa-database"></i> Data Buku</a>
            <a href="{{ route('bestseller.index') }}" class="pl-5 py-3 w-full h-max text-gray-700 flex items-center gap-x-3 rounded-r-full"><i class="fa-solid fa-database"></i> Data Best Seller</a>
            <a href="{{ route('comingsoon.index') }}" class="pl-5 py-3 w-full h-max text-gray-700 flex items-center gap-x-3 rounded-r-full"><i class="fa-solid fa-database"></i> Data Comingsoon</a>
            <a href="{{ route('recommendation.index') }}"class="pl-5 py-3 w-full h-max text-gray-700 flex items-center gap-x-3 rounded-r-full"><i class="fa-solid fa-database"></i> Data Recommendation </a>
            <a href="{{ route('news.index') }}" class="pl-5 py-3 w-full h-max text-gray-700 flex items-center gap-x-3 rounded-r-full"><i class="fa-solid fa-database"></i> Data News</a>
            <a href="{{ route('penjualan.index') }}" class="pl-5 py-3 w-full h-max text-gray-700 flex items-center gap-x-3 rounded-r-full"><i class="fa-solid fa-database"></i> Data Penjualan</a>
            <div class="flex w-full items-center text-gray-500 text-base py-2"><span class="w-[20%] border"></span><p class="px-2">Logout</p><span class="w-[80%] border"></span></div>
            <a href="/logout" onclick="return confirm('Apakah Anda Yakin Ingin Keluar?')" class="pl-5 py-3 w-full h-max text-gray-700 flex items-center gap-x-3 rounded-r-full"><i class="fa-solid fa-right-from-bracket"></i> Logout</a>
          </section>
      </div>
      {{-- End navbar 2 --}}
      {{-- content --}}
      <div class="overflow-y-auto p-2">
        @yield('content')
      <footer class="py-5">
        © 2024, Copyright @FazaCitraProduction
      </footer>
      </div>
      {{-- End content --}}
    </div>
</body>
</html>