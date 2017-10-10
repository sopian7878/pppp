<?php

include "/../inc/koneksi.php"; 

                    if (isset($_POST['simpan'])) {
                          $nama_lengkap = $_POST['nama_lengkap'];
                          $username = $_POST['username'];
                          $password = $_POST['password'];
                          $pass = md5($password);
                          $level = $_POST['level'];

                          $cek_user = mysql_query("SELECT * FROM tb_user where username ='$username' ");

                          $qcek_user = mysql_num_rows($cek_user);
                          if ($qcek_user==0) {
                            
                            $query_tambah = mysql_query("INSERT INTO tb_user (nama_lengkap,username,password,level ) VALUES ('$nama_lengkap', '$username', '$pass', '$level')");
                            ?>
                             <script language="JavaScript">
                            alert('Data Berhasil Disimpan');
                            document.location.href="?page=user";
                           </script>
                           <?php }

                           else{
                            echo "sama";
                          }

                        }
                          

                    ?>