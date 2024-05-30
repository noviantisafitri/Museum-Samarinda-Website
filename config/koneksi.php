<?php 

$hostname = 'localhost';
$username = 'root';
$password = '';
$database = 'museum_samarinda';

// Buat koneksi

$koneksi = mysqli_connect($hostname, $username, $password, $database);

// Cek koneksi

if ($koneksi == null) {
    die('Koneksi gagal:' . mysqli_connect_error());
}