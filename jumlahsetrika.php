<!DOCTYPE html>
<html lang="en" data-theme="light">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/daisyui@4.11.1/dist/full.min.css" rel="stylesheet" type="text/css" />
  <script src="https://cdn.tailwindcss.com"></script>
  <title>Detail Pemesanan Setrika</title>
  <script defer src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js"></script>
  <script type="text/javascript" src="https://app.stg.midtrans.com/snap/snap.js" data-client-key="SB-Mid-client-FoG3zxd_jEx3Cm1q"></script>
</head>

<body>
  <form action="lihatPesanan.php" method="get">
    <?php
    $jumlahBj =  $_POST["jumlah-baju"] * 500;
    $jumlahcln = $_POST["jumlah-celana"] * 500;
    $jumlahjkt = $_POST["jumlah-jaket"] * 2500;
    $jumlahcd =  $_POST["jumlah-cd"] * 100;
    $jumlahslmt = $_POST["jumlah-selimut"] * 7000;
    $totalbarang = $_POST["jumlah-baju"] + $_POST["jumlah-celana"] + $_POST["jumlah-jaket"] + $_POST["jumlah-cd"] + $_POST["jumlah-selimut"];
    $totalharga = $jumlahBj + $jumlahcln + $jumlahjkt + $jumlahcd + $jumlahslmt;


    function message()
    {
      $nama = $_POST['nama'];
      $nomer = $_POST['nomer'];
      $alamat = $_POST['alamat'];
      $email = $_POST['email'];
    }
    ?>
  </form>

  <!-- Identitas -->
  <div class="flow-root rounded-lg border border-gray-100 py-3 shadow-sm">
    <dl class="-my-3 divide-y divide-gray-100 text-sm">
      <div class="mb-10 md:mb-16">
        <br>
        <h2 class="mb-4 text-center text-2xl font-bold text-gray-800 md:mb-6 lg:text-3xl">Detail Pelanggan </h2>
      </div>
      <div class="grid grid-cols-1 gap-1 p-3 even:bg-gray-50 sm:grid-cols-3 sm:gap-4">
        <dt class="font-medium text-gray-900">Nama Panjang</dt>
        <dd class="text-gray-700 sm:col-span-2"><?= $_POST["nama"]; ?></dd>
      </div>

      <div class="grid grid-cols-1 gap-1 p-3 even:bg-gray-50 sm:grid-cols-3 sm:gap-4">
        <dt class="font-medium text-gray-900">Nomer Telepon</dt>
        <dd class="text-gray-700 sm:col-span-2"><?= $_POST["nomer"] ?></dd>
      </div>

      <div class="grid grid-cols-1 gap-1 p-3 even:bg-gray-50 sm:grid-cols-3 sm:gap-4">
        <dt class="font-medium text-gray-900">Alamat</dt>
        <dd class="text-gray-700 sm:col-span-2"><?= $_POST["alamat"] ?></dd>
      </div>

      <div class="grid grid-cols-1 gap-1 p-3 even:bg-gray-50 sm:grid-cols-3 sm:gap-4">
        <dt class="font-medium text-gray-900">Email</dt>
        <dd class="text-gray-700 sm:col-span-2"><?= $_POST["email"] ?></dd>

      </div>
      <div class="grid grid-cols-1 gap-1 p-3 even:bg-gray-50 sm:grid-cols-3 sm:gap-4">
        <dt class="font-medium text-gray-900">Jenis Pemesanan</dt>
        <dd class="text-gray-700 sm:col-span-2">Setrika</dd>
      </div>
    </dl>
  </div>
  <br>
  <br>
  <!-- Identitas End -->
  <!-- Total Pembayaran -->
  <div class="mb-0 md:mb-0" id="jbr">
    <br>
    <h2 class="mb-0 text-center text-2xl font-bold text-gray-800 md:mb-0 lg:text-3xl">Rincian Pembayaran</h2>
    <br>
    <span class="flex justify-center shrink-0 px-6">Screenshot halaman ini dan kirim sebelum melakukan pembayaran!</span>
    <br>
    <br>
  </div>
  <div class="overflow-x-auto">
    <table class="min-w-full divide-y-2 divide-gray-200 bg-white text-sm">
      <th class="whitespace-nowrap px-4 py-2 font-medium text-gray-900">Jenis Barang</th>
      <th class="whitespace-nowrap px-4 py-2 font-medium text-gray-900">Jumlah Barang</th>
      <th class="whitespace-nowrap px-4 py-2 font-medium text-gray-900">Harga Satuan</th>
      <th class="whitespace-nowrap px-4 py-2 font-medium text-gray-900">Total Harga</th>
      </tr>
      </thead>

      <tbody class="divide-y divide-gray-200">
        <tr>
          <td class="whitespace-nowrap px-4 py-2 font-medium text-gray-900 text-center">Baju</td>
          <td class="whitespace-nowrap px-4 py-2 text-gray-700 text-center"> <?= $_POST["jumlah-baju"]; ?></td>
          <td class="whitespace-nowrap px-4 py-2 text-gray-700 text-center">500</td>
          <td class="whitespace-nowrap px-4 py-2 text-gray-700 text-center"><?php echo $jumlahBj ?></td>
        </tr>

        <tr>
          <td class="whitespace-nowrap px-4 py-2 font-medium text-gray-900 text-center">Celana</td>
          <td class="whitespace-nowrap px-4 py-2 text-gray-700 text-center"><?= $_POST["jumlah-celana"] ?></td>
          <td class="whitespace-nowrap px-4 py-2 text-gray-700 text-center">500</td>
          <td class="whitespace-nowrap px-4 py-2 text-gray-700 text-center"><?php echo $jumlahcln ?></td>
        </tr>

        <tr>
          <td class="whitespace-nowrap px-4 py-2 font-medium text-gray-900 text-center">Jaket</td>
          <td class="whitespace-nowrap px-4 py-2 text-gray-700 text-center"><?= $_POST["jumlah-jaket"] ?></td>
          <td class="whitespace-nowrap px-4 py-2 text-gray-700 text-center">2.500</td>
          <td class="whitespace-nowrap px-4 py-2 text-gray-700 text-center"><?php echo $jumlahjkt ?></td>
        </tr>
        <tr>
          <td class="whitespace-nowrap px-4 py-2 font-medium text-gray-900 text-center">Pakaian Dalam</td>
          <td class="whitespace-nowrap px-4 py-2 text-gray-700 text-center"><?= $_POST["jumlah-cd"] ?></td>
          <td class="whitespace-nowrap px-4 py-2 text-gray-700 text-center ">100</td>
          <td class="whitespace-nowrap px-4 py-2 text-gray-700 text-center"><?php echo $jumlahcd ?></td>
        </tr>
        <tr>
          <td class="whitespace-nowrap px-4 py-2 font-medium text-gray-900 text-center ">Selimut</td>
          <td class="whitespace-nowrap px-4 py-2 text-gray-700 text-center "><?= $_POST["jumlah-selimut"] ?></td>
          <td class="whitespace-nowrap px-4 py-2 text-gray-700 text-center ">7.000</td>
          <td class="whitespace-nowrap px-4 py-2 text-gray-700 text-center "><?php echo $jumlahslmt ?></td>
        </tr>
        <tr>
          <td class="whitespace-nowrap px-4 py-2 font-medium text-gray-900 text-center">Total Barang</td>
          <td class="whitespace-nowrap px-4 py-2 text-gray-700 text-center"><?php echo $totalbarang ?></td>
        </tr>
      </tbody>
    </table>
    <div class="mt-0 mx-28 flex justify-end border-t border-gray-100 pt-8">
      <div class="w-screen max-w-lg space-y-4">
        <dl class="space-y-0.5 text-sm text-gray-700">
          <div class="flex justify-between !text-base font-medium">
            <dt class="mx-32 mt-2">Total Harga</dt>
            <dd class="mt-6"><?php echo $totalharga; ?></dd>
            <button id="buttonck">
              <div class="flex justify-end space-y-4 text-center w-52 mt-0">
                <br><br>
                <a href="http://wa.me/6285156296580?text=Hallo min.. ingin membayar pesanan saya atas nama <?= $_POST['nama']; ?> yang beralamat di <?= $_POST['alamat']; ?> dengan email <?= $_POST['email']; ?> dengan rincian pesanan ||- Setrika-Baju : <?= $_POST['jumlah-baju']; ?> || Setrika-Celana :  <?= $_POST['jumlah-celana']; ?> || Setrika-Jaket :  <?= $_POST['jumlah-jaket']; ?> || Setrika-CD :  <?= $_POST['jumlah-cd']; ?> || Setrika-Selimut :  <?= $_POST['jumlah-selimut']; ?> dengan total pembayaran Sebesar : <?php echo $totalharga ?> " class="block rounded bg-gray-700 px-5 py-3 text-sm text-gray-100 transition hover:bg-gray-600">
                  Bayar
                </a>
              </div>
            </button>

          </div>

        </dl>
      </div>
    </div>
  </div>
  <!-- Total Pembayaran end -->
  <br><br>

</body>

</html>