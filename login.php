<?php

include 'koneksi.php';

session_start();

error_reporting(0);

if (isset($_SESSION['username'])) {
  header("Location: pilih.php");
}

if (isset($_POST['submit'])) {
  $email = $_POST['email'];
  $password = md5($_POST['password']);

  $sql = "SELECT * FROM users WHERE email='$email' AND password='$password'";
  $result = mysqli_query($conn, $sql);
  if ($result->num_rows > 0) {
    $row = mysqli_fetch_assoc($result);
    $_SESSION['username'] = $row['username'];
    header("Location: pilih.php");
  } else {
    echo "<script>alert('Yahhh, Kamu Salah Masukin Email/Password:( Coba Lagi Yaaaa!')</script>";
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
  <title>Login</title>

</head>

<body>
  <div class="mx-auto max-w-screen-xl px-4 py-16 sm:px-6 lg:px-8">
    <div class="mx-auto max-w-lg text-center">
      <h1 class="text-2xl font-bold sm:text-3xl">Masukan Akun Anda</h1>

      <p class="mt-4 text-gray-500">
        Sudah daftar kan? Ayoo login biar makin kecewwwsss
      </p>
    </div>

    <form action="" method="POST" class="mx-auto mb-0 mt-8 max-w-md space-y-4">
      <div>
        <label for="username" class="not-sr-only">Username</label>
        <br>
        <div class="relative">
          <input type="text" value="<?php echo $email ?>" name="email" class="w-full rounded-lg border-gray-200 p-4 pe-12 text-sm shadow-sm outline-blue-600" placeholder="Masukan Email" required />
        </div>
      </div>

      <div>
        <label for="password" class="not-sr-only">Password</label>
        <div class="relative">
          <input required class="w-full rounded-lg border-gray-200 p-4 pe-12 text-sm shadow-sm outline-blue-600" type="password" name="password" value="<?php echo $_POST['password']; ?>" placeholder="Masukin Password" ; />
        </div>
      </div>

      <div class="flex items-center justify-between">
        <p class="text-sm text-gray-500">
          Belum Punya Akun Ya?
          <a class="underline" href="register.php">Ayoo Register Disinii</a>
        </p>
        <button name="submit" class="inline-block rounded-lg bg-blue-500 px-5 py-3 text-sm font-medium text-white">Sign In</button>
      </div>
    </form>
  </div>
</body>

</html>