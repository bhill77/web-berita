<?php session_start(); ?>
<!DOCTYPE html>
<html>
<?php include "function.php"; ?>
<head>
<title>Situs Berita</title>
<link rel="stylesheet" type="text/css" href="style.css" />
<script src="jquery-1.7.2.min.js" type="text/javascript"></script>
<script src="login.js" type="text/javascript"></script>
</head>
<body>
<div id="wrap">

<div id="header">
	<div id="title">Situs Berita</div>
	<div id="tagline">semua berita ada disini</div>
</div>

<div id="nav">

<nav>
	<a href="tampilberita.php">Home</a> 
	<a href="about.php">About</a> 
	<?php if(isset($_SESSION['id'])){?>
	<a href="adminberita.php">Admin berita</a> 
	<a href="formberita.php">Tambah berita</a> 
	<?php }
	if(!isset($_SESSION['id'])){
	echo "<a title=\"Login\" href=\"#\" style=\"float:right;\" class=\"login\">Login</a>";
	}else{echo	"<a href=\"logout.php?ref=".WriteURL()."\" style=\"float:right;\" class=\"login\">Logout</a>";
	} ?>
</nav>
</div>

<?php echo "<div class=\"loginform\">";
		echo loginform();
		echo "</div>"; ?>
		
<div id="sidebar1">
sample content of sidebar

</div>

<div id="main">