<?php
function koneksi()
{
  return mysqli_connect('localhost', 'root', '', 'e41211994');
}

function query($query)
{
  $conn = koneksi();
  $result = mysqli_query($conn, $query);
  while ($row = mysqli_fetch_assoc($result)) {
    $rows[] = $row;
  }
  return $rows;
}
