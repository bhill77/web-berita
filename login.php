<?php
include "koneksi.php";

$ref = $_GET['ref'];
$user = $_POST['username'];
$pass = md5($_POST['password']);

$sql = mysql_query("SELECT * from user WHERE nama='$user' AND pass='$pass'");
$data = mysql_fetch_array($sql);

$ada = mysql_num_rows($sql);

if($ada){
	session_start();
	$_SESSION['id'] = $data['id'];
	$_SESSION['nama'] = $data['nama'];
	$ref != '' ? header("location:".$ref): header("location: tampilberita.php");
	
}else{
	include "header.php";
	echo "<br />Username atau password salah";
	loginform2();
	include "footer.php";
}
?>