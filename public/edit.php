<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Edit Barang - Web Programming</title>
    <link rel="stylesheet" href="<?= BASE_URL . "public/css/style.css" ?>">
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gradient-to-r from-indigo-500 via-purple-500 to-pink-500">
<header class="px-7 pt-12 w-full md:px-52 md:pt-24">
    <h1 class="text-4xl text-white">Toko barang<br><span class="text-8xl font-bold">Bang Ali.</span></h1>
    <p class="mt-4 text-2xl font-thin text-white">Tambah dan Edit stok barang jadi lebih mudah di sini!</p>
</header>
<main class="px-7 w-full md:px-52 mt-12">
    <h3 class="text-white text-2xl font-semibold mb-4">Edit data <?= $data['barang']['nama_barang'] ?> sekarang! </h3>
    <button class="px-4 py-2 mb-5 text-white bg-red-500/50 rounded-full border border-white hover:bg-red-900/50" onclick="deleteBarang()">Hapus Barang Ini</button>
    <form action="" method="post" class="flex flex-col gap-3 md:w-1/2">
        <input type="text" name="nama_barang" class="py-1 px-3 rounded-md focus:ring-4 focus:outline-none focus:ring-pink-600 placeholder:text-sm" placeholder="Nama Barang" value="<?= $data['barang']['nama_barang'] ?>" required>
        <input type="number" name="harga_barang" class="py-1 px-3 rounded-md focus:ring-4 focus:outline-none focus:ring-pink-600 placeholder:text-sm" placeholder="Harga (Rp)" value="<?= $data['barang']['harga_barang'] ?>" required>
        <input type="number" name="stok_barang" class="py-1 px-3 rounded-md focus:ring-4 focus:outline-none focus:ring-pink-600 placeholder:text-sm" placeholder="Stok Barang" value="<?= $data['barang']['stok_barang'] ?>" required>
        <div class="w-full text-right">
            <button type="submit" name="edit" class="px-4 py-2 mb-5 text-white bg-blue-500/50 rounded-full border border-white hover:bg-blue-900/50">Edit</button>
        </div>
    </form>
</main>

<script type="text/javascript">
    function deleteBarang() {
        let confirmation = confirm("Ingin menghapus barang ini?")
        if (confirmation) {
            document.location.href = '<?= BASE_URL . "/home/delete/" . $data['barang']['id_barang']?>'
        }
    }
</script>
</body>
</html>