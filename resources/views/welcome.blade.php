<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EnviroPay</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <style>
        body {
            background: linear-gradient(135deg, #ffffff 0%, #a0e9ff 100%);
            font-family: 'Arial', sans-serif;
        }
    </style>
</head>
<body class="min-h-screen flex items-center">
    <div class="absolute top-8 left-8">
        <h1 class="text-2xl font-bold text-black">Enviro<span class="text-green-500">Pay</span></h1>
    </div>
    <div class="text-left" style="margin-left: 250px;">
        <h2 class="text-red-500 text-lg font-semibold mb-2">Halo Selamat Datang di EviroPay</h2>
        <h1 class="text-4xl font-bold text-gray-900 mb-4">Ayo bayar IPL mu dengan mudah</h1>
        <p class="text-gray-500 mb-8">Rawatlah lingkungan mu bla bla bla<br>Ayo Daftar Sekarang.</p>
        <a class="bg-gray-800 text-white py-2 px-6 rounded-full" href="{{ route('login') }}">Masuk</a>
    </div>
</body>
</html>