<?php 
  
      include 'inc/koneksi.php';
      

    
      $no_surat = $_POST['no_surat'];

      $no_agenda = $_POST['no_agenda'];
      $asal_surat = $_POST['asal_surat'];
      $perihal = $_POST['perihal'];
      $tgl_surat = $_POST['tgl_surat'];
      $kepada = $_POST['kepada'];
      $keterangan = $_POST['keterangan'];


        if (isset($_POST['ubah_foto'])) {
          $lampiran = $_FILES['lampiran']['name'];
          $tmp = $_FILES['lampiran']['tmp_name'];

          $ek = explode(".", $lampiran);
          $fotobaru ="srtmsk-".date('dmYHis').".".end($ek);


          $path = "img/suratmasuk/".$fotobaru;

          if (move_uploaded_file($tmp, $path)){

            $select = "SELECT * FROM tb_suratmasuk WHERE no_surat='$no_surat'";
            $qselect = mysql_query($select);
            $data = mysql_fetch_array($qselect);

            if (is_file("img/suratmasuk/".$data['lampiran'])) 
                unlink("img/suratmasuk/".$data['lampiran']);


            $select = "UPDATE tb_suratmasuk SET no_surat='$no_surat', no_agenda='$no_agenda', asal_surat='$asal_surat', perihal='$perihal', tgl_surat='$tgl_surat', kepada='$kepada', keterangan='$keterangan', lampiran='$fotobaru'  WHERE no_surat='$no_surat'";  
            $qselect = mysql_query($select);


              if ($qselect) {
                ?>
                 <script language="JavaScript">
                  alert('Data Berhasil Disimpan');
                  document.location.href="?page=suratmasuk";
                 </script>
                <?php }         
              else{
                echo "maaf,";
                echo "header('location: ?page=esuratmasuk')";
              }

            }else{
              echo "maaf,gambar gagal d uplo";
              echo "header('location: ?page=esuratmasuk')";
            }

          }else{
            $select = "UPDATE tb_suratmasuk SET no_surat='$no_surat', no_agenda='$no_agenda', asal_surat='$asal_surat', perihal='$perihal', tgl_surat='$tgl_surat', kepada='$kepada', keterangan='$keterangan'  WHERE no_surat='$no_surat'";
            $qselect = mysql_query($select);

            if ($qselect) {
              ?>
              <script language="JavaScript">
                  alert('Data Berhasil Disimpan');
                  document.location.href="?page=suratmasuk";
                 </script>
            <?php }
            else{
              echo "maaf,";
              echo "header('location: ?page=esuratmasuk')";
            }
          }

        

        ?>   