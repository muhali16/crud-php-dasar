<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Tambah Barang - Web Programming</title>
    <link rel="stylesheet" href="<?= BASE_URL . "public/css/style.css" ?>">
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gradient-to-r from-indigo-500 via-purple-500 to-pink-500">
<header class="px-7 pt-12 w-full md:px-52 md:pt-24">
    <h1 class="text-4xl text-white">Toko barang<br><span class="text-8xl font-bold">Bang Ali.</span></h1>
    <p class="mt-4 text-2xl font-thin text-white">Tambah dan Edit stok barang jadi lebih mudah di sini!</p>
</header>
<main class="px-7 w-full md:px-52 mt-12">
    <h3 class="text-white text-2xl font-semibold mb-4">Tambah Barang Sekarang!</h3>
    <form action="" method="post" class="flex flex-col gap-3 md:w-1/2">
        <input type="text" name="nama_barang" class="py-1 px-3 rounded-md focus:ring-4 focus:outline-none focus:ring-pink-600 placeholder:text-sm" placeholder="Nama Barang" required>
        <input type="number" name="harga_barang" class="py-1 px-3 rounded-md focus:ring-4 focus:outline-none focus:ring-pink-600 placeholder:text-sm" placeholder="Harga (Rp)" required>
        <input type="number" name="stok_barang" class="py-1 px-3 rounded-md focus:ring-4 focus:outline-none focus:ring-pink-600 placeholder:text-sm" placeholder="Stok Barang" required>
        <div class="w-full text-right">
            <button type="submit" name="tambah" class="px-4 py-2 mb-5 text-white bg-blue-500/50 rounded-full border border-white hover:bg-blue-900/50">Tambah</button>
        </div>
    </form>
</main>

</body>
</html>