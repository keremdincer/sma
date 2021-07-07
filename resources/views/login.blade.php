
<!DOCTYPE html>
<html lang="tr">

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>#yagizyanindayiz</title>
	<meta name="description" content="Herkese merhaba!👋 Benim adım Yağız. Sma Tip 1 hastasıyım.">
	<meta name="keywords" content="smayagizgundogdu,smayagizyasasin,sma,destek,bağış,smatip1,tip 1">
	<meta name="author" content="">
	<!-- Font Awesome if you need it
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css">
  -->
	<link href="https://unpkg.com/tailwindcss/dist/tailwind.min.css" rel="stylesheet" />
	<!--Replace with your tailwind.css once created-->
</head>

<body class="font-sans antialiased text-gray-900 leading-normal tracking-wider bg-cover flex justify-center"
	style="background-image:url('https://source.unsplash.com/1L71sPT5XKc');">
	<div class="max-w-4xl flex items-center h-auto lg:h-screen flex-wrap mx-auto my-32 lg:my-0">
        <form action="/login" method="POST" class="bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4 flex flex-col">
            <div class="mb-4">
            <label class="block text-grey-darker text-sm font-bold mb-2" for="email">
                Email
            </label>
            <input class="shadow appearance-none border rounded w-full py-2 px-3 text-grey-darker" id="email" name="email" type="text" placeholder="Kullanıcı Adı">
            </div>
            <div class="mb-6">
            <label class="block text-grey-darker text-sm font-bold mb-2" for="password">
                Şifre
            </label>
            <input class="shadow appearance-none border border-red rounded w-full py-2 px-3 text-grey-darker mb-3" id="password" name="password" type="password" placeholder="******************">
            <!-- <p class="text-red text-xs italic">Please choose a password.</p> -->
            </div>
            <div class="flex items-center justify-between">
            <button class="w-full bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded" type="submit">
                Giriş
            </button>
            <!-- <a class="inline-block align-baseline font-bold text-sm text-blue hover:text-blue-darker" href="#">
                Forgot Password?
            </a> -->
        </form>
    </div>
	<script src="https://unpkg.com/popper.js@1/dist/umd/popper.min.js"></script>
	<script src="https://unpkg.com/tippy.js@4"></script>
</body>

</html>