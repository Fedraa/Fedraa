<?php

$hostname = "localhost";
$username = "root";
$password = "";
$dbname   = "pengunjung_perpustakaan";

$db = mysqli_connect($hostname, $username, $password, $dbname);

if($db->connect_error){
        echo "Connection to database failed";
        die("error!");
}
?>