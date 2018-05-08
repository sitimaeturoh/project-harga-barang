<?php

include "koneksi.php";
$koneksiObj = new koneksi();
$koneksi = $koneksiObj->ambilKoneksi();

if($koneksi->connect_error) {
    die("koneksi gagal : " . $koneksi->connect_error);
} else {
    echo "koneksi ke basis data SUKSES";
}

//echo "kode : " .$_POST["kode"];
//echo "nama barang : ".$_POST["namaBarang"];
//echo "harga : ".$_POST["harga"];

//insert into harga_barang(kode, nama_barang, harga)
//values(1, 'gula', 500)
$query ="insert into harga_barang (kode, nama_barang, harga) ".
    "values(" . $_POST["kode"].", '".$_POST["namaBarang"].
    "',".$_POST["harga"].")";
//echo "<br><br>".$query;
if($koneksi->query($query)==true){
    echo "<br>Data".$_POST["namaBarang"].
    " sudah tersimpan. Data bisa dilihat ".
    '<a href="main.php">disini</a>';
}else{
    echo "error : " . $query." -> " . $koneksi->error;
}

$koneksi->close();
?>