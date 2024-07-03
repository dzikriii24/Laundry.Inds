<!DOCTYPE html>
<html lang="en" data-theme="light">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/daisyui@4.11.1/dist/full.min.css" rel="stylesheet" type="text/css" />
  <script src="https://cdn.tailwindcss.com"></script>
  <title>Cuci Kering</title>
  <script defer src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js"></script>

</head>

<style>

</style>

<body>
  <br><br>
  <!-- Jenis Barang -->
  <br>
  <div class="mb-0 md:mb-0" id="jbr">
    <br>
    <h2 class="mb-0 text-center text-2xl font-bold text-gray-800 md:mb-0 lg:text-3xl">Silahkan Masukan Jumlah Barang !</h2>
    <br>
  </div>
  <style>

  </style>
  <section class="flex justify-center">
    <div class="max-w-screen-xl px-4 py-8 sm:px-6 sm:py-12 lg:px-8 lg:py-16">
      <div class="flex flexbox-cols-1 gap-y-8 lg:flexbox-cols-2 lg:items-flexbox lg:gap-x-16">
        <div class="flex grid-cols-2 gap-4 sm:grid-cols-3">
          <a class="block rounded-xl border border-gray-100 p-4 shadow-sm hover:border-gray-200 hover:ring-1 hover:ring-gray-200 focus:outline-none focus:ring" href="#">
            <span class="inline-block rounded-lg bg-gray-50 p-3">
              <img class="size-32" src="img/baju.png" alt="">
            </span>

            <h2 class="mt-2 font-bold">Baju</h2>
            <br>

          </a>

          <a class="block rounded-xl border border-gray-100 p-4 shadow-sm hover:border-gray-200 hover:ring-1 hover:ring-gray-200 focus:outline-none focus:ring" href="#">
            <span class="inline-block rounded-lg bg-gray-50 p-3">
              <img class="size-32" src="img/celana.png" alt="">
            </span>

            <h2 class="mt-2 font-bold">Celana</h2>
            <br>

          </a>

          <a class="block rounded-xl border border-gray-100 p-4 shadow-sm hover:border-gray-200 hover:ring-1 hover:ring-gray-200 focus:outline-none focus:ring" href="#">
            <span class="inline-block rounded-lg bg-gray-50 p-3">
              <img class="size-32" src="img/jaket.png " alt="">
            </span>

            <h2 class="mt-2 font-bold">Jaket</h2>
            <br>

          </a>

          <a class="block rounded-xl border border-gray-100 p-4 shadow-sm hover:border-gray-200 hover:ring-1 hover:ring-gray-200 focus:outline-none focus:ring" href="#">
            <span class="inline-block rounded-lg bg-gray-50 p-3">
              <img class="size-32" src="img/cd.png" alt="">
            </span>

            <h2 class="mt-2 font-bold">Pakaian Dalam</h2>
            <br>

          </a>

          <a class="block rounded-xl border border-gray-100 p-4 shadow-sm hover:border-gray-200 hover:ring-1 hover:ring-gray-200 focus:outline-none focus:ring" href="#">
            <span class="inline-block rounded-lg bg-gray-50 p-3">
              <img class="size-32" src="img/selimut.png" alt="">
            </span>

            <h2 class="mt-2 font-bold">Selimut</h2>
            <br>

          </a>
        </div>
      </div>
    </div>
    </div>
    </form>
  </section>

  <div class="flex justify-center ">
    <style>
      #number {
        border-color: grey;
      }
    </style>
    <form action="jumlahbrg.php" method="post" class="">
      <form action="lihatPesanan.php" method="post">
        <div class="flex flex-row mx-20 justify-center">
          <input type="number" value=0 class="block rounded-xl border border-gray-100 flex flex-row mx-16 p-2 w-24 py-1 px-0 text-center shadow-sm hover:border-gray-200 hover:ring-1 hover:ring-gray-200 focus:outline-none focus:ring" name="jumlah-baju" id="number">
          <input type="number" value=0 class="block rounded-xl border border-gray-100 flex flex-row mx-16 p-2 w-24 py-1 px-0 text-center shadow-sm hover:border-gray-200 hover:ring-1 hover:ring-gray-200 focus:outline-none focus:ring" name="jumlah-celana" id="number">
          <input type="number" value=0 class="block rounded-xl border border-gray-100 flex flex-row mx-16 p-2 w-24 py-1 px-0 text-center shadow-sm hover:border-gray-200 hover:ring-1 hover:ring-gray-200 focus:outline-none focus:ring" name="jumlah-jaket" id="number">
          <input type="number" value=0 class="block rounded-xl border border-gray-100 flex flex-row mx-16 p-2 w-24 py-1 px-0 text-center shadow-sm hover:border-gray-200 hover:ring-1 hover:ring-gray-200 focus:outline-none focus:ring" name="jumlah-cd" id="number">
          <input type="number" value=0 class="block rounded-xl border border-gray-100 flex flex-row mx-16 p-2 w-24 py-1 px-0 text-center shadow-sm hover:border-gray-200 hover:ring-1 hover:ring-gray-200 focus:outline-none focus:ring" name="jumlah-selimut" id="number">
        </div>
        <br><br>
        <div>
          <!-- Identitas User -->
          <div class="bg-white py-6 sm:py-8 lg:py-12">
            <div class="mx-auto max-w-screen-2xl px-4 md:px-8">
              <!-- text - start -->
              <div class="mb-10 md:mb-16">
                <h2 class="mb-4 text-center text-2xl font-bold text-gray-800 md:mb-6 lg:text-3xl">Silahkan Lengkapi Data Dibawah Ini</h2>
                <span class="flex justify-center shrink-0 px-6">Silahkan Isi Data Diri Anda Untuk Melanjutkan Pembayaran</span>
              </div>
              <!-- text - end -->

              <!-- form - start -->
              <form class="mx-auto grid max-w-screen-md gap-4 sm:grid-cols-2" action="#" method="post">
                <div>
                  <div class="grid justify-items-center">
                    <label for="nama" class="mb-1 mr-64 inline-block text-sm text-gray-800 sm:text-base">Nama</label>
                    <br>
                    <input name="nama" required class="mb-4 w-80 rounded border bg-gray-50 px-3 py-2 text-gray-800 outline-none ring-indigo-300 transition duration-100 focus:ring" />
                  </div>

                  <div class="grid justify-items-center">
                    <label for="nomer" class="mb-1 mr-52 inline-block text-sm text-gray-800 sm:text-base">Nomer Telepon</label>
                    <br>
                    <input name="nomer" required class="mb-4 w-80 rounded border bg-gray-50 px-3 py-2 text-gray-800 outline-none ring-indigo-300 transition duration-100 focus:ring" />
                  </div>

                  <div class="sm:col-span-2 grid justify-items-center">
                    <label for="alamat" class="mb-1 mr-64 inline-block text-sm text-gray-800 sm:text-base">Alamat</label>
                    <br>
                    <input name="alamat" required class="mb-4 w-80 rounded border bg-gray-50 px-3 py-2 text-gray-800 outline-none ring-indigo-300 transition duration-100 focus:ring" />
                  </div>

                  <div class="sm:col-span-2 grid justify-items-center">
                    <label for="email" class="mb-1 mr-64 inline-block text-sm text-gray-800 sm:text-base">Email</label>
                    <br>
                    <input name="email" required class="mb-4 w-80 rounded border bg-gray-50 px-3 py-2 text-gray-800 outline-none ring-indigo-300 transition duration-100 focus:ring" />
                  </div>
                  <br><br>
                  <div class="flex justify-center">
                    <a href="jumlahbrg.php"><button class="flex justify-center btn btn-wide btn-primary " name="cuker">Selesai</button></a>
                  </div>
                </div>
              </form>
              <!-- form - end -->
            </div>
          </div>
        </div>
      </form>
    </form>
  </div>

  <!-- Identitas User end -->


  <!-- Jenis Barang End-->



  <!-- Qwitansi -->
  <!-- Qwitansi end-->

  <!-- Bayar Qris -->
  <!-- Bayar Qris end-->

  <!-- Hubungi kami. Sosial Media -->
  <!-- Hubungi kami. Sosial Media end-->


</body>

</html>