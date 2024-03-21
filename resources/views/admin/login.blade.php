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
            }
          }
        }
      </script>
    <title>Admin - Login</title>
</head>
<body>
<div class="w-full h-screen bg-gray-200 flex justify-center items-center">
    <div class="w-[450px] bg-white flex flex-col items-center p-10 pt-14 rounded-md">
        <div class="flex items-center justify-center gap-x-3 mb-8">
            <img src="{{ asset('assets/logo.png') }}" class="w-12" alt="logo">
            <h1 class="font-akira text-lg text-color1 leading-5">faza citra <br> production</h1>
        </div>
        <div class="font-inter mb-5 flex flex-col gap-y-2">
            <h2 class="font-bold text-gray-600 text-2xl">Welcome Admin!</h2>
            <p class="text-sm text-gray-500">Silahkan login terlebih dahulu untuk membuktikan bahwa anda adalah seorang Admin.</p>
            @if($message = Session::get('loginError'))
                  <div class="w-full text-center text-sm font-inter bg-red-600 text-white py-2 rounded-lg">
                    <p>{{ $message }}</p>
                  </div>
                @endif
        </div>
        <form class="w-full mb-10" action="/login" method="post">
          @csrf
            <label for="email" class="font-inter relative block cursor-text">
                <input id="email" class="peer mb-4 w-full h-14 px-3 outline-none focus:border-color1 focus:border-2 text-gray-700 border border-gray-300 rounded-md" type="text" name="email" required>
                <p class="peer-focus:-top-2 peer-focus:text-sm peer-focus:text-color1 peer-valid:-top-2 peer-valid:text-sm transition-all duration-200 ease-in-out text-base text-gray-500 bg-white px-1 absolute top-4 left-3">Email</p>
            </label>
            <label for="password" class="font-inter relative block cursor-text">
                <input id="password" class="peer mb-3 w-full h-14 px-3 outline-none focus:border-color1 focus:border-2 text-gray-700 border border-gray-300 rounded-md" type="password" name="password" required>
                <p class="peer-focus:-top-2 peer-focus:text-sm peer-focus:text-color1 peer-valid:-top-2 peer-valid:text-sm transition-all duration-200 ease-in-out text-base text-gray-500 bg-white px-1 absolute top-4 left-3">Password</p>
                <label for="seePassword" class="absolute right-3 top-3 cursor-pointer">
                    <input type="checkbox" class="hidden" id="seePassword">
                    <i class="fa-regular fa-eye text-2xl text-gray-700"></i>
                </label>
            </label>
            <div class="w-full flex justify-between font-inter mb-8">
                <div class="w-max flex justify-between items-center gap-x-2">
                    <input type="checkbox" id="">
                    <p class="text-gray-600 text-sm">Remember Me</p>
                </div>
                <a href="" class="text-color1 text-sm">Forgot Password!</a>
            </div>
            <button type="submit" class="w-full h-11 text-base font-inter font-bold bg-color1 text-white rounded-lg">LOGIN</button>
        </form>
        <p class="font-inter">Copyright <span class="font-bold text-color1">@FazaCitraProduction</span></p>
    </div>
</div>
<script>
    const inpPass = document.getElementById('password');
    const seePass = document.getElementById('seePassword');
    seePass.addEventListener('change', () => {
      if (seePass.checked) {
            inpPass.type = 'text';
            seePass.nextElementSibling.classList.remove('fa-eye')
            seePass.nextElementSibling.classList.add('fa-eye-slash')
          } else {
            inpPass.type = 'password';
            seePass.nextElementSibling.classList.remove('fa-eye-slash')
            seePass.nextElementSibling.classList.add('fa-eye')
          }
    })
</script>
</body>
</html>