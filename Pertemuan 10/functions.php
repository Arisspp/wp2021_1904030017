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

function tambah ($data)
{
  global $konn;

  $nama =($data['nama']);
  $alamat =($data['alamat']);
  $jenis_kelamin =($data['jenis_kelamin']);
  $agama =($data['agama']);
  $sekolah_asal =($data['sekolah_asal']);
  $foto_maba =($data['foto_maba']);

  $query = "INSERT INTO calon_mhs 
  VALUE
  (null,'$nama','$alamat','$jenis_kelamin','$agama','$sekolah_asal','$foto_maba');";
  mysqli_query($konn, $query);

  echo mysqli_error($konn);
  return mysqli_affected_rows($konn);
}

function hapus($id)
{
  global $konn;
  mysqli_query($konn, "DELETE FROM calon_mhs WHERE id = $id") or die(mysqli_error($konn));
  return mysqli_affected_rows($konn);
  
}