<section class="content-header">
  <h1>Tambah <small>Surat masuk</small></h1></section>
   <section class="content">
      <div class="box box-info">
        <div class="box-header with-border">
      
            <h3 class="box-title">Edit Profil</h3>

          </div>

          <?php
          include "/../inc/koneksi.php";

          if (@($_SESSION['level']==admin)) {
            $level = $_SESSION['level']=='admin';
          }else if (@($_SESSION['level']==kepala_dinas)) {
            $level = $_SESSION['level']=='kepala_dinas';
          }
          $sql_profil = mysql_query("SELECT * FROM tb_user where id_surat = '$level' ");
          

    

          ?>
                <form action="" class="form-horizontal" method="POST" enctype="multipart/form-data">

                  
                  <div class="box-body">

                    <div class="col-md-7">

                    
                    <div class="form-group">
                      <label for="nama_lengkap" class="col-sm-2 control-label">Nama lengkap</label>
                      <div class="col-sm-4">
                        <input type="text" class="form-control" id="nama_lengkap" name="nama_lengkap" value="<?php echo "$nama_lengkap"; ?>">
                      </div>
                    </div>

                    <div class="form-group" >
                      <label for="username" class="col-md-2 control-label">Username</label>
                      <div class="col-md-6">
                        <input type="text" class="form-control" id="username" name="username" value="<?php echo "$username"; ?>">
                      </div>
                    </div>

                    <div class="form-group">
                      <label for="password" class="col-sm-2 control-label">Password</label>
                      <div class="col-sm-5">
                        <input type="text" class="form-control" id="password" name="password" >(<i>Kosongkan Jika Tidak Di Ganti</i>)
                      </div>
                    </div>

                   

                    <div class="box-footer">  
                      <input type="reset" name="reset" value="Reset" class=" btn btn-warning ">
                      <input type="submit" name="edit" value="Update" class="btn btn-success">
                  </div>
                  <!-- /.box-body -->
               
                  <!-- /.box-footer -->
                
                
                </form>

                <?php 
                if (isset($_POST['edit'])) {
                  $nama_lengkap = $_POST['nama_lengkap'];
                  $username = $_POST['username'];
                  $password = $_POST['password'];
                  $pass = md5($password);

                  $query = mysql_query(" UPDATE tb_user SET nama_lengkap='$nama_lengkap', username='$username', password='$pass' ");
                  ?>
                     <script language="JavaScript">
                    alert('Data Berhasil Diupdate');
                    document.location.href="?page=user";
                   </script>
                   <?php 
                }

                ?>
            </div>
           
      </div>
  </section>
  
 