<h2>Formulir Edit Harga Barang</h2>
<hr>
<form action="update.php" method="post"> 


<?php
include "koneksi.php";
$koneksiObj = new koneksi();
$koneksi = $koneksiObj->ambilKoneksi();

if($koneksi->connect_error) {
    die("koneksi gagal : " . $koneksi->connect_error);
}

$qry ="select * from harga_barang where kode='".
    $_GET["kode"] . "'";
$data = $koneksi ->query($qry);

if ($data->num_rows <= 0) {
    echo "Mas/Mba isi datanya sesuai prosedur ya!";
}else{
    while($hasil = $data->fetch_assoc()){
        global $namaBarang;
        global $harga;
        $namaBarang = $hasil["nama_barang"];
        $harga = $hasil["harga"];
    }
}
?>

<table>
<tr>
    <td>KODE</td>
    <td>: <input type = "text" name="kode" readonly="true"
        value=<?php echo $_GET["kode"]; ?>></td>
</tr>
<tr>
    <td>NAMA BARANG </td>
    <td>: <input type="text" name="namaBarang"
        value=<?php echo $namaBarang; ?>></td>

</tr>
<tr>
    <td>HARGA</td>
    <td>: <input type="text" name="harga"
        value=<?php echo $harga; ?>></td>
</tr>
<tr>
    <td><input type="submit" value="simpan"></td>

</tr>
</table>
</form>