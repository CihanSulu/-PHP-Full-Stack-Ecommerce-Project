<?php 
$pass = "83428834";
$pass = md5(sha1(sha1(sha1(md5(md5($pass))))));

echo $pass;
?>