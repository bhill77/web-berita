<?php
include "header.php";
require_once("koneksi.php");
$sql=mysql_query("SELECT * FROM berita order by no desc");
$No=1;

if(!isset($_SESSION['id'])){
die("Anda harus login terlebih dahulu untuk dapat menggunakan fitur  ini!");
}
?>
<table class="daftar-berita" border="1">
	<tr>
		<th>No</th>
		<th style="min-width:200px">Penulis</th>
		<th style="min-width:300px">Judul</th>
		<th colspan="3">Action</th>
	</tr>
<?php 
while($data=mysql_fetch_array($sql)){
$id=$data['no'];
$penulis=$data['penulis'];
$judul=$data['judul'];

?>
	<tr>
		<td><?php echo $no=$No++; ?> </td>
		<td><?php echo $penulis; ?></td>
		<td><?php echo $judul; ?></td>
		<td ><a title="Lihat berita" href="detailberita.php?id=<?php echo $id; ?>" target="_new">Lihat</a></td>
		<td ><a title="Ubah berita" href="editberita.php?id=<?php echo $id; ?>">Ubah</a></td>
		<td ><a title="Hapus berita" href="#">Hapus</a></td>
	</tr>

<?php } ?>
</table>
<?php
include "footer.php";
?>