<?php
require 'function.php ';
$user_detile = query("SELECT id, user_email, user_fullname FROM user_detile");
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Daftar administrator</title>
</head>

<body>
  <h3>Selamat datang admnistrator</h3>
  <table border="1" cellpadding="10" cellpadding="0">
    <tr>
      <th>No</th>
      <th>Email</th>
      <th>Nama</th>
      <th>Aksi</th>
    </tr>
    <?php $i = 1; ?>
    <?php foreach ($user_detile as $m) : ?>
      <tr>
        <td><?= $i++; ?></td>
        <td><?= $m['user_email']; ?></td>
        <td><?= $m['user_fullname']; ?></td>
        <td>
          <a href="">Ubah</a> | <a href="">Hapus</a>
        </td>
      </tr>
    <?php endforeach ?>
  </table>
</body>

</html>