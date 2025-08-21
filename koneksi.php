<?php
    
$server = "localhost";
$user = "root";
$password = "";
$nama_database = "boled";

$koneksi = mysqli_connect("localhost","root","","boled");

if( !$koneksi ){
    die("Gagal terhubung dengan database: " .mysqli_connect_error());
}

?>