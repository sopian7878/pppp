<?php 
include "koneksi.php";
function anti_injection($data){
  $filter = mysql_real_escape_string(stripslashes(strip_tags(htmlspecialchars($data,ENT_QUOTES))));
  return $filter;
}

$username = anti_injection($_POST['username']);
$password     = anti_injection(md5($_POST['password']));
// pastikan username dan password adalah berupa huruf atau angka.
if (!ctype_alnum($username) OR !ctype_alnum($password)){
  header("location:../home.php");
}else{
	$query_user=mysql_query("SELECT * FROM tb_user where username='$username'");
	$cek_user=mysql_num_rows($query_user);
	$data_user=mysql_fetch_array($query_user);
	if ($cek_user==0) {
		?>
		<script language="JavaScript">
 			alert('Username Atau Password Salah');
 			document.location.href="../index.php";
		 </script>

		<?php

	}elseif($data_user['password']==$password){
		# code...
		session_start();
		$_SESSION['username']=$data_user['username'];
		$_SESSION['password']=$data_user['password'];
		$_SESSION['nama']=$data_user['nama_lengkap'];
		$_SESSION['level']=$data_user['level'];
		header("location:../home.php");
	}else{
		?>
		<script language="JavaScript">
 			alert('Username Atau Password Salah');
 			document.location.href="../index.php";
		 </script>

		<?php 
	}}
 ?>