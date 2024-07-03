<?php
include "koneksi.php";

error_reporting(0);

session_start();

if (isset($_SESSION['username'])) {
  header("location:login.php");
}
if (isset($_POST['submit'])) {
  $username = $_POST['username'];
  $email = $_POST['email'];
  $password = md5($_POST['password']);
  $_uppassword = md5($_POST['upassword']);
  if ($password == $_uppassword) {
    $sql = "SELECT * FROM users WHERE email = '$email'";

    $result = mysqli_query($conn, $sql);

    if (!$result->num_rows > 0) {
      $sql = "INSERT INTO users (username, email, password)
            VALUES ('$username', '$email', '$password')";
      $result = mysqli_query($conn, $sql);
      if ($result) {
        echo "<script>
                alert ('Yeeeyy Kamu Berhasil Login >< Selamat Yaaa')
                </script>";
        $username = "";
        $email = "";
        $_POST['password'] = "";
        $_POST['upassword'] = "";
      } else {
        echo "<script>
                alert ('Yahh, Ada Yang Salah Nihh:(')
                </script>";
      }
    } else {
      echo "<script>alert ('yahhh, email kamu udah dipake sama akun lainn')</script>";
    }
  } else {
    echo "<script>alert ('passwordnya harus sama yaaakk. hihihi')</script>";
  }
}

?>
<!DOCTYPE html>
<html lang="en" data-theme="light">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/daisyui@4.11.1/dist/full.min.css" rel="stylesheet" type="text/css" />
  <script src="https://cdn.tailwindcss.com"></script>
  <title>Register</title>

</head>

<body>
  <div class="mx-auto max-w-screen-xl px-4 py-16 sm:px-6 lg:px-8">
    <div class="mx-auto max-w-lg text-center">
      <h1 class="text-2xl font-bold sm:text-3xl">Daftarin Diri Kamu</h1>

      <p class="mt-4 text-gray-500">
        Daftar disini yuu biar bisa saling kenal, hehehe
      </p>
    </div>

    <form action="" method="post" class="mx-auto mb-0 mt-8 max-w-md space-y-4">
      <div>
        <label for="username" class="not-sr-only">Username</label>
        <br>
        <div class="relative">
          <input type="text" name="username" required class="w-full rounded-lg border-gray-200 p-4 pe-12 text-sm shadow-sm outline-blue-600" placeholder="Masukan Username" />
        </div>
      </div>

      <div>
        <label for="email" class="not-sr-only">Email</label>
        <div class="relative">
          <input type="email" name="email" class="w-full rounded-lg border-gray-200 p-4 pe-12 text-sm shadow-sm outline-blue-600" placeholder="Masukin Email" required />
        </div>
      </div>

      <div>
        <label for="password" class="not-sr-only">Password</label>
        <div class="relative">
          <input type="password" name="password" class="w-full rounded-lg border-gray-200 p-4 pe-12 text-sm shadow-sm outline-blue-600" placeholder="Masukin Password" required />
        </div>
      </div>

      <div>
        <label for="password" class="not-sr-only">Ulangi Password</label>
        <div class="relative">
          <input type="password" name="upassword" class="w-full rounded-lg border-gray-200 p-4 pe-12 text-sm shadow-sm outline-blue-600" placeholder="Masukin Ulang Password" required />
        </div>
      </div>


      <div class="flex items-center justify-between">
        <p class="text-sm text-gray-500">
          Udah Punya Akun yaa?
          <a class="underline" href="login.php">Ayoo Login Disinii</a>
        </p>
        <button class="inline-block rounded-lg bg-blue-500 px-5 py-3 text-sm font-medium text-white" name="submit">Create Account</button>
      </div>
    </form>
  </div>
</body>

</html>