<?php
/*
$host = "bintanghati.net";
$user = "bintangh_coba";
$pass = "vzEGGq7MOeQT";
$db_name = "bintangh_coba";

mysql_connect($host, $user, $pass) or die("gak konek");

mysql_select_db($db_name)or die("database gak ketemu");

echo "sukses bro...";

*/

function track($sites, $port, $timeout) {



echo "<table border='1'>";



echo "<th>server name</th><th>status</th><th>time</th>";

foreach ($sites as $host){



$firstTime = microtime(true);

$sock = fSockOpen($host, $port, $errno, $errstr, $timeout);



if (!$sock) {

$status = "offline";

}else {

$status = "online";

}

$secondTime = microtime(true);

$ping = round((($secondTime - $firstTime) * 1000), 0);





echo "<tr>";

echo "<td>".$host."</td>";

echo "<td>".$status."</td>";

echo "<td>".$ping." ms </td>";

echo "</tr>";

}

echo "</table>";

}

$sites = array("www.detik.com","www.google.com","www.yahoo.com");



track($sites, 80, 10);

?>
