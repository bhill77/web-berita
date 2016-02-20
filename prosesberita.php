<?php
require_once("koneksi.php");
$penulis = $_POST['penulis'];
$judul = $_POST['judul'];
$berita = strip_tags($_POST['berita']);
$isiberita = str_replace("\r\n", "<br />", $berita);
$waktu = date("d-m-y | h:i:s");

$simpan=mysql_query("INSERT INTO berita VALUES('', '$penulis', '$judul', '$isiberita', '$waktu', '')");

if($simpan){
include "header.php";
echo "berita berhasil disimpan";
include "footer.php";
}else{
echo "gagal";
}
?>