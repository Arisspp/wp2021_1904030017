<?php
$konn = mysqli_connect('localhost', 'root', '', 'wpsmt5');

// pemanggilan tabel
function query($query)
{
  global $konn;

  //mengambil seluruh data pada tabel
  $result = mysqli_query($konn, $query);

  if (mysqli_num_rows($result) == 1) {
    return mysqli_fetch_assoc($result);
  }

  // pemanggilan elemen data dengan rapih
  $rows = [];
  while ($row = mysqli_fetch_assoc($result)) {
    $rows[] = $row;
  }
  return $rows;
}
