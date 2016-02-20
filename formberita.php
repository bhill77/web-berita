<?php include "header.php"; ?>
<form action="prosesberita.php" method="post">
<table>
	<tr><td>Penulis</td><td>:</td><td><input type="text" name="penulis" /></td></tr>
	<tr><td>Judul</td><td>:</td><td><input type="text" name="judul" /></td></tr>
	<tr><td>Isi Berita</td><td>:</td><td><textarea name="berita" style="height:300px;width:500px;"></textarea></td></tr>
	<tr><td></td><td></td><td><input type="submit" value="Simpan" /></td></tr>
</table>

</form>
<?php include "footer.php"; ?>