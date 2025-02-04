<?php

$conn = mysqli_connect(
    "localhost",
    "root",
    "",
    "dbparkir_naufal_surya_falah"
);

//cek koneksi
if(!$conn){
    die("Connection is fail" . mysqli_connect_error());
}