<?php
require_once("koneksi.php");
$id = $_POST['id'];
$penulis = $_POST['penulis'];
$judul = $_POST['judul'];
$berita = strip_tags($_POST['berita']);
$isiberita = str_replace("\r\n", "<br />", $berita);
$waktu = date("d-m-y | h:i:s");

$simpan=mysql_query("UPDATE berita SET penulis='$penulis', judul='$judul', isiberita='$isiberita' WHERE no='$id'");

if($simpan){
include "header.php";
echo "berita berhasil diperbaharui";
include "footer.php";
}else{
echo "gagal ";
echo $id;
}
?>