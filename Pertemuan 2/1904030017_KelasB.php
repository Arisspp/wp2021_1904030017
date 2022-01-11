<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pertemuan 4</title>
</head>
<body>
    <h1>Membuat Array</h1>
    <?php
    $nilai = array(2,4,6,8,10.60);
    var_dump($nilai);
    echo "<br>";
    echo($nilai[4]);
    echo "<br>";
    $binatang = ["Anjing","Monyet","Babi","Kuda"];
    var_dump($binatang);
    echo "<br>";
    echo "$binatang[1]";
    echo "<br>";

    // mengganti isi value
    echo "<br>";
    $binatang[0] = "Kupu Kupu";
    var_dump($binatang);
    echo "<br>";

    // menambahkan value
    echo "<br>";
    $binatang[] = "Macan";
    var_dump($binatang);
    echo "<br>";

    // menghapus salah satu value
    echo "<br>";
    unset($binatang[0]);
    var_dump($binatang);
    echo "<br>";

    //menghitung total array
    echo "<br>";
    var_dump(count($binatang));
    ?>
<hr>
    <h1> Map Dengan Array</h1>
    <?php

    $aris = array(
        "ID" => "Arisss", 
        "Nama" => "Aris Pangestu", 
        "Umur" => 21
    );
    var_dump($briyan);
    echo "<br>";
    $doni = [
        "ID" => "DODO", 
        "Nama" => "Doni Setiawan", 
        "Umur" => 21,
        "Alamat" => [
           "Kota" => "Tangerang",
           "Provinsi" => "Banten"
           ]
    ];
    var_dump($doni);
    echo "<br>";
    echo("Nama ID :" . $doni["ID"]);
    echo "<br>";
    echo("Nama Lengkap :" . $doni["Nama"]);
    echo "<br>";
    echo("Umur :" . $doni["Umur"]);

    ?>
<hr>
    <h1> Operator Aritmatika</h1>
    <?php
    $tambah = 52 + 12;
    $kurang = 10 - 5;
    $kali = 25 * 53;
    $bagi = 100 / 25;
    $modular = 250 % 6;
    $pangkat = 5**5;

    echo "Tambah : " . $tambah . "<br>";
    echo "Kurang : " . $kurang . "<br>";
    echo "Kali : " . $kali . "<br>";
    echo "Bagi : " . $bagi . "<br>";
    echo "Modular : " . $modular . "<br>";
    echo "Pangkat : " . $pangkat . "<br>";


    ?>
<hr>
    <h1> Increment </h1>
    <?php
    $f = 23;
    $f++;
    $f--;
    
    echo($f);
    
    
    ?>
<hr>
    <h1> Menampilkan Isi Array Dengan Perulangan </h1>
    <?php
        $makanan = ["Cumi", "Nasi Uduk", "Kepiting", "Ayam Geprek", "Soto Bogor"];

        for ($i=0; $i < count($makanan); $i++) { 
            echo $makanan[$i]."<br>";
        }
        echo "<br>";
        $minuman = ["Es Duren", "Es Bubur Kacang Ijo", "Es Teh Manis", "Kopi"];

        foreach ($minuman as $minuman) {
            echo $minuman."<br>";
        }
    ?>
<hr>
    <h1> Array Asosiatif </h1>
    <?php
    // membuat array asosiatif
    $biodata = [
        "Nama" => "Aris Pangestu", 
        "Umur" => "21 Tahun", 
        "Alamat" => "Perum Permata Sepatan Blok C8/25", 
        "TTL" => "Serang , 25-11-2000", 
    ];
    
    //mencetak isi array asosiatif
    echo "<h2>Biodata</h2>";
    echo "<p>Nama: ".$biodata["Nama"]."</br>";
    echo "<p>Umur: ".$biodata["Umur"]."</br>";
    echo "<p>Alamat: ".$biodata["Alamat"]."</br>";
    echo "<p>TTL: ".$biodata["TTL"]."</br>";
    ?>
<hr>
    <h1> Array Multi Dimensi </h1>
    <?php
    // membuat array 2 dimensi yang berisi array asosiatif
     $sahabats = [
         [
             "Nama" => "Risda",
             "Umur" => "20 Tahun"
         ],
         [
            "Nama" => "Rocky",
            "Umur" => "19 Tahun"
        ],
        [
            "Nama" => "Danang",
            "Umur" => "21 Tahun"
        ],
        [
            "Nama" => "Daniel",
            "Umur" => "20 Tahun"
        ],

     ];
     echo "<br>";

     // menampilkan array
     foreach ($sahabats as $sahabats) {
         echo "<h2>".$sahabats["Nama"]."</h2>";
         echo "<p>".$sahabats["Umur"]."</p>";
         echo "<hr>";
     }
    
    ?>
</body>
</html>