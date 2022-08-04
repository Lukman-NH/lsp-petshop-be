<?php
include '../koneksi.php';

$id  = $_POST['id'];
$nama  = $_POST['nama'];
$username  = $_POST['username'];
$phone  = $_POST['phone'];
$password  = md5($_POST['password']);

if($_POST['password'] == ""){

	mysqli_query($koneksi, "UPDATE user set 
                            nama='$nama', 
                            username='$username', 
                            phone='$phone'
                            where id_user='$id'");

}else{
	mysqli_query($koneksi, "UPDATE user set 
                            nama='$nama', 
                            username='$username', 
                            phone='$phone',
                            password='$password' 
                            where id_user='$id'");

}

header("location:user.php");
?>