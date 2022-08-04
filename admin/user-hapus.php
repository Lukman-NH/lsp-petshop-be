<?php 
include '../koneksi.php';
$id = $_GET['id'];

mysqli_query($koneksi, "DELETE from user where id_user='$id'");

header("location:user.php");
