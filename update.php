<?php

include "koneksi.php";
$koneksiObj=new Koneksi();
$koneksi= $koneksiObj->ambilKoneksi();

if($koneksi->connect_error) {
	die("Konesi Gagal : " . $koneksi->connect_error);
}else{
	echo "Koneksi ke basis data sukses!";
}

//$query = "insert into harga_barang(kode, nama_barang, harga)".
//      "values(" . $_POST["kode"].", '".$_POST["namaBarang"].
//      "',".$_POST["harga"].")";

$query = "update harga_barang " .
        "set nama_barang = '" . $_POST["namaBarang"] . "'," .
        "   harga = " . $_POST["harga"] . " " . 
        "where kode = " . $_POST["kode"];

//echo $query

if($koneksi->query($query)==true){
    echo "<br>Data " . $_POST["namaBarang"] . 
    " sudah berubah. Data bisa dilihat " . 
    '<a href="main.php">disini</a>';
}else {
        echo "error : ".$query." -> ".$koneksi->error;
}

$koneksi->close();
?>