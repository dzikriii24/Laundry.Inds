<?php

session_start();

if (!isset($_SESSION['username'])) {
  header("Location: index.php");
}

?>
<!DOCTYPE html>
<html lang="en" data-theme="light">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/daisyui@4.11.1/dist/full.min.css" rel="stylesheet" type="text/css" />

  <script src="https://cdn.tailwindcss.com"></script>

  <title>Pemilihan Barang</title>
</head>
<style>
  .header {
    margin-top: 15px;
    margin-left: 15px;
  }
</style>

<body>
  <!-- Header/Logo -->

  <header class="header">
    <div class="flex items-stretch gap-4 ">
      <img src="img/logosz.png" alt="" class="aspect-square w-20 rounded-lg object-cover" />

      <div>
        <h3 class="text-lg/tight font-medium text-gray-900">Laundry.inds</h3>

        <p class="mt-0.5 text-gray-700">
          Budayakan Malas Mencuci, Karena Mencuci Tugas Kami
        </p>
      </div>
    </div>
    <span class="flex items-center">
      <span class="h-px flex-1 bg-black"></span>
      <span class="shrink-0 px-6"><?php echo "<p id=dd>Selamat Datang " . $_SESSION['username'] . ", Selamat bergabung><" . "</p>"; ?></span>
      <span class="h-px flex-1 bg-black"></span>
    </span>
    <br><br>
  </header>
  <!-- Logo End -->

  <!-- Paket Laundry -->
  <section>

    <div class="mb-10 md:mb-16">
      <h2 class="mb-4 text-center text-2xl font-bold text-gray-800 md:mb-6 lg:text-3xl">Silahkan Pilih Paket </h2>
    </div>
    <div class="grid grid-cols-2 gap-1 sm:grid-cols-3">

      <a class="size-80 block rounded-xl border border-gray-100 p-4 shadow-sm hover:border-gray-200 hover:ring-1 hover:ring-gray-200 focus:outline-none focus:ring" href="cuker.php">
        <span class="inline-block rounded-lg bg-gray-50 p-3">
          <img class="size-56" src="img/cuker.png" alt="">
        </span>
        <br>
        <h2 class="mt-2 font-bold" id="cuker">Cuci Kering</h2>
        <br>
        <button class="btn btn-wide / btn-primary">Pilih</button>

      </a>

      <a class="size-80 block rounded-xl border border-gray-100 p-4 shadow-sm hover:border-gray-200 hover:ring-1 hover:ring-gray-200 focus:outline-none focus:ring" href="setrika.php">
        <span class="inline-block rounded-lg bg-gray-50 p-3">
          <img class="size-56" src="img/setrika.png" alt="">
        </span>
        <br>
        <h2 class="mt-2 font-bold">Setrika</h2>
        <br>
        <button class="btn btn-wide / btn-primary">Pilih</button>
      </a>

      <a class="size-80 block rounded-xl border border-gray-100 p-4 shadow-sm hover:border-gray-200 hover:ring-1 hover:ring-gray-200 focus:outline-none focus:ring" href="cucisetrika.php">
        <span class="inline-block rounded-lg bg-gray-50 p-3">
          <img class="size-56" src="img/cuci + gosok.png" alt="">
        </span>

        <br>
        <h2 class="mt-2 font-bold">Cuci + Setrika</h2>
        <br>
        <button class="btn btn-wide / btn-primary">Pilih</button>

      </a>

    </div>
    </div>
    </div>
  </section>
  <!-- Paket Laundry End -->
  <br><br><br><br>
  <div class="input-group flex justify-center">
    <a href="index.php">
      <button class="inline-block rounded-lg bg-red-500 px-5 py-3 text-sm font-medium text-white" name="submit">Log Out</button>
    </a>
  </div>

</body>

</html>