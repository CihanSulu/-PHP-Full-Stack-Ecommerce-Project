<?php
try {
     $conn = new PDO("mysql:host=localhost;dbname=ezelrent_verims;", "ezelrent_root", "83428834__12");
     $conn->query("SET NAMES utf8");
} catch ( PDOException $e ){
     print $e->getMessage();
}

?>
