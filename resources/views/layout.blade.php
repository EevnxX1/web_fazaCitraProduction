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
              height: {
                page1full: 'calc(100vh - 85px)'
              },
              keyframes: {
                vibrate: {
                        '0%': {transform: 'translate(0)'},
                        '20%': {transform: 'translate(2px,-2px)'},
                        '40%': {transform: 'translate(2px,2px)'},
                        '60%': {transform: 'translate(-2px,2px)'},
                        '80%': {transform: 'translate(-2px,-2px)'},
                        '100%': {transform: 'translate(0)'}
                },
                fadeInRight: {
                  '0%': {
                          opacity: '0',
                          transform: 'translateX(7%)'
                        },
                  '100%': {
                            opacity: '1',
                            transform: 'none'
                          }
                },
                fadeInLeft: {
                  '0%': {
                          opacity: '0',
                          transform: 'translateX(-7%)'
                        },
                  '100%': {
                            opacity: '1',
                            transform: 'none'
                          }
                },
                fadeIn: {
                  '0%': {opacity: '0'},
                  '100%': {opacity: '1'}
                }
              },
              animation: {
                vibrate: 'vibrate 1s linear infinite',
                fadeInRight: 'fadeInRight 0.3s linear',
                fadeInLeft: 'fadeInLeft 0.3s linear',
                fadeIn: 'fadeIn 0.2s linear'
              },
              screens: {
                'responsive1': '1535px',
              },
              gridTemplateColumns: {
                'headerC': 'max-content 1fr',
                'headerR': 'repeat(2, max-content)',
                'layananW': 'repeat(3, 250px)',
                'layananH': 'repeat(2, 250px)'
              },
            }
          }
        }
      </script>
    <title>Document</title>
</head>
<body>
    {{-- Navbar --}}
    <div class="h-[85px] w-full flex justify-between px-20 items-center">
        {{-- Menu navbar --}}
        <ul class="flex justify-between h-full font-inter text-xl relative ul-nav">
            <li class="hover:bg-color2 h-full w-[110px] max-[1340px]:w-24 relative z-30 bg-white" onclick="pin('home')"><a href="{{ route('homeuser.index') }}" class="h-full w-full flex justify-center py-8 max-[1340px]:text-lg" >Home</a></li>
            <li class="hover:bg-color2 h-full w-[110px] max-[1340px]:w-24 relative z-30 bg-white nav-collapse" onclick="pin('books')"><a href="{{ route('bukuuser.index') }}" class="h-full w-full flex justify-center py-8 max-[1340px]:text-lg" >Book's</a></li>
            <li class=" w-52 h-max bg-color2 absolute -bottom-24 left-[110px] max-[1340px]:left-[95px] text-base flex flex-col z-20 origin-top -translate-y-[200%] transition duration-500 ease-out" id="collapse">
              <a href="{{ route('storebookuser.index') }}" class="w-full text-center py-3">Store Book’s</a>
              <a href="{{ route('comingsoonuser.index') }}" class="w-full text-center py-3">Coming Soon</a>
            </li>
            <li class="hover:bg-color2 h-full w-[110px] max-[1340px]:w-24 relative z-30 bg-white" onclick="pin('layanan')"><a class="h-full w-full flex justify-center py-8 max-[1340px]:text-lg" href="/layanan">Layanan</a></li>
            <li class="hover:bg-color2 h-full w-[110px] max-[1340px]:w-24 relative z-30 bg-white" onclick="pin('blog')"><a class="h-full w-full flex justify-center py-8 max-[1340px]:text-lg" href="{{ route('bloguser.index') }}">Blog</a></li>
            <li class="hover:bg-color2 h-full w-[110px] max-[1340px]:w-24 relative z-30 bg-white" onclick="pin('about')"><a class="h-full w-full flex justify-center py-8 max-[1340px]:text-lg" href="about">About Us</a></li>
        </ul>
        {{-- end Menu Navbar --}}
        {{-- Logo --}}
        <a href="/login" class="flex gap-4 items-center text-xl max-[1340px]:text-lg">
            <p class="font-akira text-color1">FAZA CITRA PRODUCTION</p>
            <img src="{{ asset('assets/logo.png') }}" alt="logo" class="max-[1340px]:w-8">
        </a>
        {{-- end Logo --}}
    </div>
    {{-- End Navbar --}}

    {{-- content --}}
    @yield('content')
    {{-- end content --}}

    {{-- footer --}}
    <footer class="py-10 text-center font-inter flex flex-col gap-y-7">
      <div class="flex flex-col gap-y-6">
        <h1 class="text-slate-900 text-[30px] font-bold">OFFICIAL OFFICE</h1>
        <p class="text-lg">Panembahan, Kec. Plered, Kabupaten Cirebon, Jawa Barat 45154</p>
      </div>
      <div class="flex flex-col gap-y-6 mb-5">
        <h1 class="text-slate-900 font-jakarta text-[30px] font-bold">INFORMASI KONTAK</h1>
        <div class="mx-auto w-max flex font-mont gap-x-8">
          <a href="https://www.instagram.com/fazacitra.production?igsh=MWFzaWNwMjl5ZGtudQ==" class="flex items-center">
            <img class="w-10" src="{{ asset('assets/icon-instagram.png') }}" alt="">
            <p class="text-lg">fazacitra.production</p>
          </a>
          <a href="https://wa.me/+6289698091919" class="flex items-center">
            <img class="w-10" src="{{ asset('assets/icon-whatsapp.png') }}" alt="">
            <p class="text-lg">0896-9809-1919</p>
          </a>
          <a href="https://mail.google.com/mail/u/0/?view=cm&tf=1&fs=1&to=redaksifaza@gmail.com" class="flex items-center">
            <img class="mr-[6px] w-10 scale-[0.92]" src="{{ asset('assets/icon-email.png') }}" alt="">
            <p class="text-lg">Redaksifaza@gmail.com</p>
          </a>
        </div>
      </div>
      <h1 class="text-slate-900 text-2xl font-bold">Copyright @FazaCitraProduction</h1>
    </footer>
    {{-- end footer --}}
    {{-- JavaScript --}}
    <script src="{{ asset('js/navbar.js') }}"></script>
    {{-- end JavaScript --}}
</body>
</html>
