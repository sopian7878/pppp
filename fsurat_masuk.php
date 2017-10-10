<section class="content-header">
  <h1>Tambah <small>Surat masuk</small></h1></section>
   <section class="content">
      <div class="box box-info">
        <div class="box-header with-border">

          <style type="text/css">
            #imgpreview{
              margin: 15px 15px 15px 0px;
            }

            .kanan{}
          </style>
          
            <h3 class="box-title"> Form Tambah Data surat masuk</h3>

          </div>
                <form action="?page=isuratmasuk" class="form-horizontal" method="POST" enctype="multipart/form-data">

                  
                  <div class="box-body">

                    <div class="col-md-7">

                    
                    <div class="form-group">
                      <label for="no_surat" class="col-sm-2 control-label">No surat</label>
                      <div class="col-sm-4">
                        <input type="text" class="form-control" id="no_surat" name="no_surat" placeholder="000/111/0000" >
                      </div>
                    </div>

                    <div class="form-group" >
                      <label for="no_agenda" class="col-md-2 control-label">no agenda</label>
                      <div class="col-md-6">
                        <input type="text" class="form-control" id="no_agenda" name="no_agenda" placeholder="no_agenda"  >
                      </div>
                    </div>

                    <div class="form-group">
                      <label for="asal_surat" class="col-sm-2 control-label">Asal surat</label>
                      <div class="col-sm-5">
                        <input type="text" class="form-control" id="asal_surat" name="asal_surat" placeholder="Asal surat" >
                      </div>
                    </div>

                    <div class="form-group">
                      <label for="perihal" class="col-sm-2 control-label">Perihal</label>
                      <div class="col-sm-9">
                        <textarea name="perihal" id="perihal" class="form-control" cols="20" rows="3"></textarea>
                      </div>
                    </div>

                    <div class="form-group">
                      <label for="tgl_surat" class="col-sm-2 control-label">Tanggal Surat</label>
                      <div class="col-sm-4">
                        <input type="date" class="form-control" id="tgl_surat" name="tgl_surat" placeholder="Tanggal surat" style="width: 85%" >
                      </div>
                    </div>

                    <div class="form-group">
                      <label for="kepada" class="col-sm-2 control-label">Kepada</label>
                      <div class="col-sm-8">
                        <input type="text" class="form-control" id="kepada" name="kepada" placeholder="Kepada" >
                      </div>
                    </div> 

                    <div class="form-group">
                      <label for="keterangan" class="col-sm-2 control-label">Keterangan</label>
                      <div class="col-sm-6">
                        <input type="text" class="form-control" id="keterangan" name="keterangan" placeholder="Keterangan" >
                      </div>
                    </div>

                    </div> 

                    
                    <div class="form-group">
                      <label for="lampiran" class="col-sm-1 control-label">Lampiran</label>
                      <div style="width: 30%" class="col-sm-4">
                        <input type="file" class="form-control" name="lampiran" id="lampiran" multiple="multiple">
                        <div id="imgpreview" class="col-sm-3"></div>
                      </div>
                    </div>
                 

                  </div>
                  

                     

                    <div class="box-footer">  
                      <input type="reset" name="reset" value="Reset" class=" btn btn-warning ">
                      <button type="submit" name="simpan" class="btn btn-success pull-right"><i class="fa fa-save "></i> Simpan</button>
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