<?php 
  if (isset($_GET['no_surat'])) {
    $no_surat = $_GET['no_surat'];
    $select = "SELECT * FROM tb_suratmasuk WHERE no_surat='$no_surat'";
    $q_select = mysql_query($select) or die(mysql_error());
    $_POST = mysql_fetch_array($q_select);

      $no_surat = $_POST['no_surat'];
      $no_agenda = $_POST['no_agenda'];
      $asal_surat = $_POST['asal_surat'];
      $perihal = $_POST['perihal'];
      $tgl_surat = $_POST['tgl_surat'];
      $kepada = $_POST['kepada'];
      $keterangan = $_POST['keterangan'];
      $lampiran = $_POST['lampiran'];


      

  }
?>



<section class="content-header">
  <h1>Detail<small>Surat masuk</small></h1></section>
   <section class="content">
      <div class="box box-info">
        <form action="?page=isuratmasuk" class="form-horizontal" method="POST" enctype="multipart/form-data">

                  
                  <div class="box-body">

                    <div class="col-md-8">

                    <table class="table table-hover">
                    <tr><th class="col-sm-2">NO surat</th>
                      <td> <?php echo "$no_surat" ?></td>
                    </tr>

                     <tr><th class="col-sm-2">No Agenda</th>
                      <td> <?php echo "$no_agenda" ?></td>
                    </tr>

                     <tr><th class="col-sm-2">Asal Surat</th>
                      <td> <?php echo "$asal_surat" ?></td>
                    </tr>

                     <tr><th class="col-sm-2">Perihal</th>
                      <td> <?php echo "$perihal" ?></td>
                    </tr>

                     <tr><th class="col-sm-2">Tanggal Surat</th>
                      <td> <?php echo "$tgl_surat" ?></td>
                    </tr>

                     <tr><th class="col-sm-2">Kepada</th>
                      <td> <?php echo "$kepada" ?></td>
                    </tr>

                     <tr><th class="col-sm-2">Keterangan</th>
                      <td> <?php echo "$keterangan" ?></td>
                    </tr>

                     <tr><th class="col-sm-2">coba</th>
                      <td> wew</td>
                    </tr>
                  </table>

                    </div>

                    <div class="col-sm-4 no-padding">

                    <table class="table table-hover"> 

                    <tr><th class="text-center">Lampiran</th></tr>
                    <tr><th class="text-center">
                      <img src="img/suratmasuk/<?php echo "$lampiran"; ?>" width="300px" >
                    </th>
                    </tr>

                </table>
              </div>

                  </div>
                  

                     

                    <div class="box-footer">  
                       <a href="?page=esuratmasuk&no_surat=<?php echo "$no_surat"; ?>" class="btn btn-success " title="edit data" ><i class="fa fa-edit"></i>edit</a>
                      
                  </div>
                  <!-- /.box-body -->
               
                  <!-- /.box-footer -->
                
                
                </form>
      </div>
</section>