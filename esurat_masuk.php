 <?php

include "inc/koneksi.php";

 if (isset($_GET['no_surat'])) {
                $no_surat = $_GET['no_surat'];
                $select = "SELECT * FROM tb_suratmasuk WHERE no_surat='$no_surat' ";
                $qselect = mysql_query($select) or die(mysql_error());
                $_POST = mysql_fetch_assoc($qselect); 

                $no_surat = $_POST['no_surat'];
                $no_agenda = $_POST['no_agenda'];
                $asal_surat = $_POST['asal_surat'];
                $perihal = $_POST['perihal'];
                $tgl_surat = $_POST['tgl_surat'];
                $kepada = $_POST['kepada'];
                $keterangan = $_POST['keterangan'];
                 
            }
                     
?>
<section class="content-header">
  <h1>Edit<small>Surat masuk</small></h1></section>
   <section class="content">
      <div class="box box-info">
        <div class="box-header with-border">

          <style type="text/css">
            #imgpreview{
              margin: 15px 15px 15px 0px;
            }

            
          </style>
          
            <h3 class="box-title"> Form Edit Data surat masuk</h3>
                <form action="?page=usuratmasuk" class="form-horizontal" method="POST" enctype="multipart/form-data">

                  
                  <div class="box-body">

                    <div class="col-md-7">

                    
                    <div class="form-group">
                      <label for="no_surat" class="col-sm-2 control-label">No surat</label>
                      <div class="col-sm-4">
                        <input type="text" class="form-control" id="no_surat" name="no_surat" value="<?php echo "$no_surat"; ?>" >
                      </div>
                    </div>

                    <div class="form-group" >
                      <label for="no_agenda" class="col-md-2 control-label">no agenda</label>
                      <div class="col-md-6">
                        <input type="text" class="form-control" id="no_agenda" name="no_agenda" value="<?php echo "$no_agenda"; ?>"  >
                      </div>
                    </div>

                    <div class="form-group">
                      <label for="asal_surat" class="col-sm-2 control-label">Asal surat</label>
                      <div class="col-sm-5">
                        <input type="text" class="form-control" id="asal_surat" name="asal_surat" value="<?php echo "$asal_surat"; ?>" >
                      </div>
                    </div>

                    <div class="form-group">
                      <label for="perihal" class="col-sm-2 control-label">Perihal</label>
                      <div class="col-sm-9">
                        <textarea name="perihal" id="perihal" class="form-control" cols="20" rows="3"><?php echo "$perihal"; ?></textarea>
                      </div>
                    </div>

                    <div class="form-group">
                      <label for="tgl_surat" class="col-sm-2 control-label">Tanggal Surat</label>
                      <div class="col-sm-4">
                        <input type="date" class="form-control" id="tgl_surat" name="tgl_surat" value="<?php echo "$tgl_surat"; ?>" style="width: 85%" >
                      </div>
                    </div>

                    <div class="form-group">
                      <label for="kepada" class="col-sm-2 control-label">Kepada</label>
                      <div class="col-sm-8">
                        <input type="text" class="form-control" id="kepada" name="kepada" value="<?php echo "$kepada"; ?>" >
                      </div>
                    </div> 

                    <div class="form-group">
                      <label for="keterangan" class="col-sm-2 control-label">Keterangan</label>
                      <div class="col-sm-6">
                        <input type="text" class="form-control" id="keterangan" name="keterangan" value="<?php echo "$keterangan"; ?>" >
                      </div>
                    </div>

                    </div> 

                    <div class="kanan">
                    <div class="form-group">
                      <label for="lampiran" class="col-sm-1 control-label">Lampiran</label>
                      <div style="width: 30%" class="col-sm-4">
                        <input type="checkbox" name="ubah_foto" value="true">Ceklis jika ingin ubah foto<br>
                        <input type="file" class="form-control" name="lampiran" id="lampiran" multiple="multiple">
                        <div id="imgpreview" class="col-sm-3"></div>
                      </div>
                    </div>
                  </div>

                  </div>
                  

                    <div class="box-footer">  
                      <input type="reset" name="reset" value="Reset" class=" btn btn-warning ">
                      <input type="submit" name="simpan" value="Simpan" class="btn btn-primary">
                  </div>
                  <!-- /.box-body -->
               
                  <!-- /.box-footer -->
                
                
                </form> 
            </div>
          
      </div>
  </section>

<script src="assets/bower_components/jquery/dist/jquery.min.js"></script>
  <script>
  $(document).ready(function(){
    $("#lampiran").on('change', function(){
      var imgItem = $(this)[0].files;
      var imgCount = $(this)[0].files.length;
      var imgPath = $(this)[0].value;
      var imgExt = imgPath.substring(imgPath.lastIndexOf('.')+1).toLowerCase();
      var imgPreview = $('#imgpreview');
      imgPreview.empty();
      if(imgExt == "gif" || imgExt == "png" || imgExt == "jpg" || imgExt == "jpeg" || imgExt == "bmp"){
        if(typeof(FileReader) != "undefined"){
          for (var i = 0; i < imgCount; i++) {
            var reader = new FileReader();
            reader.onload = function(e){
              $("<img />", {
                "src": e.target.result,
                "width": "250",
                "class": "imgClass"
              }).appendTo(imgPreview);
            }
            imgPreview.show();
            reader.readAsDataURL($(this)[0].files[i]);
          }
        } else{
          imgPreview.html("Browser ini tidak mendukung FileReader");
        }
      } else{
        imgPreview.html("File harus format gambar");
      }
    });
  });
  </script>