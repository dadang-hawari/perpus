<?php
    $host="localhost";
    $user="root";
    $pw="";


    $koneksi = mysqli_connect($host,$user,$pw,'perpustakaan');

    if(!$koneksi){
        die("Koneksi gagal: ".mysqli_connect_error());
    }
?>