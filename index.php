<?php

session_start();

session_destroy();

?>

<!DOCTYPE html>
<html lang="en" data-theme="light">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/daisyui@4.11.1/dist/full.min.css" rel="stylesheet" type="text/css" />
  <script src="https://cdn.tailwindcss.com"></script>
  <title>Laundry.Inds</title>

</head>

<body>
  <header class="text-center">
    <h2 class="text-xl font-bold text-gray-900 sm:text-3xl mt-10">Laundry.Inds</h2>
    <p class="mx-auto mt-4 max-w-md text-gray-500">
      Budayakan Malas Mencuci, Karena Mencuci Tugas Kami
    </p>
    <script>
      
    </script>
  </header>

  <span class="flex items-center mt-10 mb-10">
    <span class="h-px flex-1 bg-black"></span>
    <span class="shrink-0 px-6">Selamat Datang</span>
    <span class="h-px flex-1 bg-black"></span>
  </span>
  <article class="place-content-center flex justify-center overflow-hidden rounded-lg shadow transition hover:shadow-lg">
    <img src="img/logosz.png" class="place-content-center h-56 w-500 object-cover" />

    <div class="bg-white p-4 sm:p-6">
      <h3 class="mt-0.5 text-lg text-gray-900">Laundry.Inds </h3>


      <p class="mt-2 line-clamp-3 text-sm/relaxed text-gray-500">
        Di sini, kebersihan dan kepuasan pelanggan adalah prioritas utama kami. Mari nikmati layanan laundry terbaik dengan hasil maksimal.

      </p>
    </div>
  </article>

  <section class="bg-white">
    <div class="mt-8 flex flex-wrap justify-center gap-4">
      <a class="block w-full rounded bg-blue-600 px-12 py-3 text-sm font-medium text-white shadow hover:bg-blue-700 focus:outline-none focus:ring active:bg-blue-700 sm:w-auto" href="login.php">
        Login
      </a>

      <a class="block w-full bg-blue-600 rounded px-12 py-3 text-sm font-medium text-white shadow hover:bg-blue-700 text-white focus:outline-none focus:ring active:bg-blue-700 text-white-700 sm:w-auto" href="register.php">
        Register
      </a>
    </div>
    </div>
    </div>
  </section>
</body>

</html>