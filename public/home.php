<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
        content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Praktikum CRUD - Web Programming</title>
    <link rel="stylesheet" href="<?= BASE_URL . "public/css/style.css" ?>">
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gradient-to-r from-indigo-500 via-purple-500 to-pink-500">
    <header class="px-7 pt-12 w-full md:px-52 md:pt-24">
        <h1 class="text-4xl text-white">Toko barang<br><span class="text-8xl font-bold">Bang Ali.</span></h1>
        <p class="mt-4 text-2xl font-thin text-white mt-5">Manage barang dagangan mu jadi lebih mudah di sini!</p>
    </header>
    <main class="px-7 w-full md:px-52 mt-10 mb-24">
        <div class="w-full text-right">
            <button href="#" class="px-4 py-2 mb-5 text-white bg-blue-500/50 rounded-full border border-white hover:bg-blue-900/50" onclick="document.location.href = '<?= BASE_URL?>/home/tambah'">Tambah Barang</button>
            <p class="w-full text-white text-sm mt-2 mb-1">(*) Klik nama barang untuk aksi lanjutan.</p>
        </div>
        <table class="table-auto w-full text-white border border-white">
            <thead class="text-center font-semibold bg-blue-500/50">
                <td class="w-20 p-4 border">No</td>
                <td class="p-4 border">Nama Barang</td>
                <td class="p-4 border">Harga</td>
                <td class="p-4 border">Stok</td>
            </thead>
            <tbody>
            <?php
            $i = 1;
            foreach ($data['barang'] as $barang): ?>
                <tr class="hover:bg-stone-100/20 active:bg-stone-100/20">
                    <td class="py-2 px-4 border text-center"><?= $i ?></td>
                    <td class="py-2 px-4 border"><a href="<?= BASE_URL . '/home/edit/' . $barang['id_barang'] ?>"><?= $barang['nama_barang'] ?></a></td>
                    <td class="py-2 px-4 border">Rp. <?= $barang['harga_barang'] ?></td>
                    <td class="py-2 px-4 border"><?= $barang['stok_barang'] ?></td>
                </tr>
            <?php
                $i++;
            endforeach;
            ?>
            </tbody>
        </table>
    </main>

</body>
</html>