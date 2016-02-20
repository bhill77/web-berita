<?php
include "header.php";
require_once("koneksi.php");
$sql=mysql_query("SELECT * FROM berita order by no desc");

while($data=mysql_fetch_array($sql)){
$id=$data['no'];
$berita=htmlentities(strip_tags($data['isiberita']));
$isi=substr($berita,0,260);
?>
<div class="post">
	<h2 class="post-title"><a href="detailberita.php?id=<?php echo $id; ?>"><?php echo $data['judul']; ?></a></h2>
	<p>Penulis : <?php echo $data['penulis']; ?></p><br />
	<div class="post-content"><?php echo $isi; ?>....<br /><a href="detailberita.php?id=<?php echo $id; ?>" class="more"> Berita selengkapnya...</a></div>
</div>
<?php }
include "footer.php";
?>