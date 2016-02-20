<?php
$ref= $_GET['ref'];
session_start();
session_destroy();
header("location:".$ref);
?>