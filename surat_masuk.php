<section class="content-header">
  <h1>
    Surat Masuk</h1></section>

    <section class="content">

      <style type="text/css">
        .form-group{
          margin-top: 15px;
          margin-bottom: 0px !important;
        }
       
      </style>


      <div class="row">
        <div class="col-xs-12">

          <div class="box">
            <div class="box-header">
              <button data-toggle="collapse" class="btn btn-primary pull-right" data-target=#cari>mode cari</button>
              <div id="cari" class="panel-collapse collapse">
                <div class="panel-body">
                  <form method="POST" name="formcari">

                    <div class="form-group pull-right">              
                      <div class="input-group col-sm-2 pull-right">
                        <span class="input-group-addon">
                          <input type="checkbox" name="pil1">
                        </span>
                      <input type="text" class="form-control" name="no_surat">
                    </div>
                    <label for="no_surat" class="col-sm-1 control-label pull-right text-right">No surat</label>
                    </div>

                    <div class="form-group pull-right">     
                      <div class="input-group col-sm-2 pull-right">
                        <span class="input-group-addon">
                          <input type="checkbox" name="pil2">
                        </span>
                      <input type="text" class="form-control" name="tgl_surat">
                    </div>
                    <label  for="no_surat" class="col-sm-2 control-label pull-right text-right">Tanggal surat</label>
                    </div>

                     <div class="form-group pull-right">     
                      <div class="input-group col-sm-2 pull-right">
                        <span class="input-group-addon">
                          <input type="checkbox" name="pil3">
                        </span>
                      <input type="text" class="form-control" name="perihal">
                    </div>
                    <label for="no_surat" class="col-sm-1 control-label pull-right text-right">Perihal</label>
                    </div>

                  <div class="form-group pull-right ">
                    <input type="submit" class="btn btn-success" value="cari">
                  </div>
                    
                  </form>

                  <?php

        $Where = "";
        $penjelasan ="";

        if (isset($_POST['pil1']))
        {
           $no_surat = $_POST['no_surat'];
           if (empty($Where))
           {
                $Where .= " WHERE no_surat = '$no_surat'";
                $penjelasan .=" Berdasarkan no_surat = '$no_surat'";
           }
        }

        if (isset($_POST['pil2']))
        {
           $tgl_surat = $_POST['tgl_surat'];
           if (empty($Where))
           {
                $Where .= "WHERE tgl_surat LIKE '%$tgl_surat%'";
                $penjelasan .=" Berdasarkan tgl_surat = '$tgl_surat'";
           }
           else
           {
                $Where .= " AND tgl_surat LIKE '%$tgl_surat%'";
                $penjelasan .=" dan tgl_surat = '$tgl_surat'";
           }
        }

        if (isset($_POST['pil3']))
        {
           $perihal = $_POST['perihal'];
           if (empty($Where))
           {
                $Where .= "WHERE perihal LIKE '%$perihal%'";
                $penjelasan .=" Berdasarkan perihal = '$perihal'";
           }
           else
           {
                $Where .= " AND perihal LIKE '%$perihal%'";
                $penjelasan .=" dan perihal = '$perihal'";
           }
        }

        $select = "SELECT * FROM tb_suratmasuk ".$Where;
      ?>

                </div>
              </div>
              <h3 class="box-title">
              <a href="?page=fsuratmasuk" class="btn btn-flat btn-primary btn-flat"><i class="fa fa-plus"></i> Tambah Data</a>
            </h3>
            </div>

            <div class="box-body table-responsive no-padding">
              <table id="datatables" class="table table-bordered table-hover dataTable">
                <thead>
                  <tr>
                    <th width="5%">No</th>
                    <th width="10%">No Surat</th>
                    <th width="10%">tanggal surat</th>      
                    <th>Perihal</th>
                    <th width="20%">Asal surat</th>
                    <th width="20%">Aksi</th>
                  </tr>
                </thead>
                
                <tbody>
                  <?php

                $no=1;
               
                $qselect = mysql_query($select) or die(mysql_error());
                $rows = mysql_num_rows($qselect);
                if ($rows>0) {
                   while ($_POST = mysql_fetch_assoc($qselect)) {
                    $no_surat = $_POST['no_surat'];
                    $no_agenda = $_POST['no_agenda'];
                    $asal_surat = $_POST['asal_surat'];     
                    $perihal = $_POST['perihal'];
                    $tgl_surat = $_POST['tgl_surat'];
                    $kepada = $_POST['kepada'];
                    $keterangan = $_POST['keterangan'];
                    
                    
                     
                ?>
                  <tr>
                    <td><?php echo $no++ ?></td>
                    <td><?php echo "$no_surat"; ?></td>
                    <td><?php echo "$tgl_surat"; ?></td>       
                    <td><?php echo "$perihal"; ?></td>
                    <td><?php echo "$asal_surat"; ?></td>
                    <td align="center">
                      <a href="?page=lsuratmasuk&no_surat=<?php echo "$no_surat"; ?>" class="btn-sm btn bg-navy "><i class="fa fa-search" title="lihat detail data"></i></a>
                      <a href="?page=esuratmasuk&no_surat=<?php echo "$no_surat"; ?>" class="btn-sm btn bg-olive " title="edit data" ><i class="fa fa-edit"></i></a>

                      <a onClick="return confirm('Anda yakin akan menghapus')" href="?page=hsuratmasuk&no_surat=<?php echo "$no_surat"; ?>" class="btn btn-sm btn-danger" title="hapus data" ><i class="fa fa-trash"></i></a>
                    </td>
                   
                    

                  </tr>
                  <?php }} ?>
                </tbody>
              </table>
            </div>

          </div>
        </div>
      </div>

    

</section>