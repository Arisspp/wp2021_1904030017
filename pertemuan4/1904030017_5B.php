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
    $binatang = ["Tikus","Kecoa","Kucing","Kerbau"];
    var_dump($binatang);
    echo "<br>";
    echo "$binatang[1]";
    echo "<br>";

    // mengganti isi value
    echo "<br>";
    $binatang[0] = "Badak";
    var_dump($binatang);
    echo "<br>";

    // menambahkan value
    echo "<br>";
    $binatang[] = "Elang";
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
        "ID" => "Aris", 
        "Nama" => "Aris Pangestu", 
        "Umur" => 20,
    );
    var_dump($aris);
    echo "<br>";
    $rohman = [
        "ID" => "Rohman", 
        "Nama" => "Rohman Siregar", 
        "Umur" => 24,
        "Alamat" => [
           "Kota" => "Tangerang",
           "Provinsi" => "Banten"
           ]
    ];
    var_dump($rohman);
    echo "<br>";
    echo("Nama ID :" . $rohman["ID"]);
    echo "<br>";
    echo("Nama Lengkap :" . $rohman["Nama"]);
    echo "<br>";
    echo("Umur :" . $rohman["Umur"]);

    ?>
<hr>
    <h1> Operator Aritmatika</h1>
    <?php
    $tambah = 50 + 12;
    $kurang = 15 - 5;
    $kali = 20 * 50;
    $bagi = 100 / 20;
    $modular = 250 % 5;
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
        $makanan = ["Ayam Geprek", "Nasi Kebuli", "Burger", "Ayam Goreng", "Ikan Bakar"];

        for ($i=0; $i < count($makanan); $i++) { 
            echo $makanan[$i]."<br>";
        }
        echo "<br>";
        $minuman = ["Teh Jus", "Es Teler", "Teh Tubruk", "Thai Tea"];

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
        "Umur" => "20 Tahun", 
        "Alamat" => "Perum Permata Sepatan", 
        "TTL" => "Tangerang, 25-11-2000", 
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
             "Nama" => "Saepul",
             "Umur" => "22 Tahun"
         ],
         [
            "Nama" => "Dadang",
            "Umur" => "17 Tahun"
        ],
        [
            "Nama" => "Darman",
            "Umur" => "20 Tahun"
        ],
        [
            "Nama" => "Michel",
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