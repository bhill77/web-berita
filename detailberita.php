<?php
include "header.php";
require_once("koneksi.php");
$id=$_GET['id'];
$sql=mysql_query("SELECT * FROM berita WHERE no='$id'");

while($data=mysql_fetch_array($sql)){

mysql_query("UPDATE berita SET dibaca=$data[dibaca]+1 WHERE no=$id");

$id=$data['no'];
$berita=$data['isiberita'];

?>
<div class="post">
	<h2 class="post-title"><?php echo $data['judul']; ?></h2>
	<p>Penulis : <?php echo $data['penulis']; ?></p>
	<p>Diterbitkan pada: <?php echo $data['waktu']; ?></p>
	<p>Dibaca: <?php echo $data['dibaca']; ?> kali</p><br />
	<div class="post-content"><?php echo $berita; ?><br /></div>
	
</div>
<?php }
include "footer.php";
?>