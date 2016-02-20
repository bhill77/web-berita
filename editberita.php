<?php
include "header.php";
require_once("koneksi.php");

$id		=$_GET['id'];
$sql	=mysql_query("SELECT * FROM berita WHERE no='$id'");

while($data=mysql_fetch_array($sql)){
	$id=$data['no'];
	$penulis=$data['penulis'];
	$judul=$data['judul'];
	$berita=$data['isiberita'];
	$isiberita=str_replace("<br />", "\r\n", $berita);

	if(!isset($_SESSION['id'])){
		die("Anda harus login terlebih dahulu!");
	}
?>
	<form action="proses_edit.php" method="post">
		<input type="hidden" name="id" value="<?php echo $id; ?>" />
		<table>
			<tr><td>Penulis</td><td>:</td><td><input type="text" name="penulis" value="<?php echo $penulis; ?>" /></td></tr>
			<tr><td>Judul</td><td>:</td><td><input type="text" name="judul" value="<?php echo $judul; ?>" /></td></tr>
			<tr><td>Isi Berita</td><td>:</td><td><textarea name="berita" style="height:300px;width:500px;"><?php echo $isiberita; ?></textarea></td></tr>
			<tr><td></td><td></td><td><input type="submit" value="Update" /></td></tr>
		</table>

	</form>
<?php 
}

include "footer.php";