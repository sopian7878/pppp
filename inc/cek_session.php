<?php
include "koneksi.php";
if(!isset($_SESSION)){
	session_start();
}
$user=$_SESSION['username'];
$pass=$_SESSION['password'];
$query=mysql_query(" SELECT * from tb_user where username='$user' and password='$pass' ");
$cek=mysql_num_rows($query);
if($cek>=1){
	return TRUE;
	exit();
}else{
	header('location: index.php');
}
