<?php
include "config.php";
$koneksi = mysql_connect($host, $user, $pass);
$pilih_db = mysql_select_db($db_name);

if(!$koneksi){
	echo "koneksi server gagal";
}elseif(!$pilih_db){
	echo "tidak dapat terkoneksi dengan database";
}
?>