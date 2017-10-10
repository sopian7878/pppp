<?php 
  session_start();
  include 'koneksi.php';

  $username = $_POST['username'];
  $password = $_POST['password'];
  $pass = md5($password);


  $query = mysql_query("SELECT * FROM tb_user WHERE username='$username' AND password='$pass'");
  $cek=mysql_num_rows($query);
  $_POST = mysql_fetch_array($query);

  $nama_lengkap = $_POST['nama_lengkap'];
  $username = $_POST['username'];
  $level = $_POST['level'];

  if ($cek == TRUE) {
    $_SESSION['nama_lengkap']=$nama_lengkap;  
    $_SESSION['username']=$username;
    $_SESSION['level']=$level;
    

    header("location:../home.php");
  }
  else{
    ?>
    <script language="JavaScript">
      alert('Username Atau Password Salah');
      document.location.href="../index.php";
     </script>

    <?php 
  }
 ?>