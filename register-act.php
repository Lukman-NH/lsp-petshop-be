<?php
include 'koneksi.php';

$username = $_POST['username'];
$password = md5($_POST['password']); 
$nama = $_POST['nama'];
$phone = $_POST['phone'];
$role = $_POST['role'];


//Insert 
$cek_email = mysqli_query($koneksi,"SELECT * FROM user WHERE username='$username'");
  if(mysqli_num_rows($cek_email) > 0){
    header("location:register.php?alert=duplikat");
  }
  else{
    mysqli_query($koneksi, 
          "INSERT INTO user VALUES (
            NULL,
            '$username',
            '$password',
            '$nama',
            '$phone',
            '$role')");
    header("location:login.php?alert=terdaftar");
}