

<section class="content-header">
  <h1>
    Surat Masuk</h1></section>

    <section class="content">
      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">
              <button type="button" class="btn btn-flat btn-primary" data-toggle="modal" data-target="#tambah"><i class="fa fa-plus"></i> Tambah data</button>
            </h3>
            </div>

            <div class="box-body table-responsive no-padding">
              <table id="datatables" class="table table-bordered table-hover dataTable">
                <thead>
                  <tr>
                    <th width="5%">No</th>
                    <th >Username</th>
                    <th >Nama Lengkap</th>      
                    <th width="20%">Level</th>
                    <th width="20%">Aksi</th>
                  </tr>
                </thead>
                
                <tbody>
                  <?php

                $no=1;
                $select = "SELECT * FROM tb_user";
                $qselect = mysql_query($select) or die(mysql_error());
                $rows = mysql_num_rows($qselect);
                if ($rows>0) {
                   while ($_POST = mysql_fetch_assoc($qselect)) {
                    $nama_lengkap = $_POST['nama_lengkap'];
                    $username = $_POST['username'];
                    $level = $_POST['level'];     

                     
                ?>
                  <tr>
                    <td><?php echo $no++ ?></td>
                    <td><?php echo "$username"; ?></td>
                    <td><?php echo "$nama_lengkap"; ?></td>       
                    <td><?php echo "$level"; ?></td>
                    
                    <td align="center">
                      <a href="?page=esuratmasuk&no_surat=<?php echo "$no_surat"; ?>" class="btn-sm btn bg-olive " title="edit data" ><i class="fa fa-edit"></i></a>

                      <a onClick="return confirm('Anda yakin akan menghapus')" href="?page=hsuratmasuk&no_surat=<?php echo "$no_surat"; ?>" class="btn btn-sm btn-danger" title="hapus data" ><i class="fa fa-trash"></i></a>
                    </td>
                   
                    

                  </tr>
                  <?php }} ?>
                </tbody>
              </table>
            </div>


            

            <div id="tambah" class="modal fade" role="dialog" aria-hidden="true" >
              <div class="modal-dialog">
                <div class="modal-content">
                  <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">
                      <span aria-hidden="true">&times;</span></button>
                    </button>
                    <h4 class="modal-title">Form Tambah user</h4>
                  </div>
                  <form action="?page=iuser" method="POST" class="form-horizontal" id="form_user" >
                    <div class="modal-body">
                      <div class="form-group">
                        <label for="nama_lengkap" class="col-sm-3 control-label">Nama Lengkap</label>
                        <div class="col-sm-8">
                          <input type="text" class="form-control" id="nama_lengkap" name="nama_lengkap" required="">
                        </div>
                      </div>

                      <div class="form-group">
                        <label for="username" class="col-sm-3 control-label">Username</label>
                        <div class="col-sm-8">
                          <input type="text" class="form-control" id="username" name="username" required="">
                        </div>
                      </div>

                      <div class="form-group">
                        <label for="password" class="col-sm-3 control-label">Password</label>
                        <div class="col-sm-7">
                          <input type="password" class="form-control" id="password" name="password" required="">
                        </div>
                      </div>
                      <div class="form-group">
                        <label for="nama_lengkap" class="col-sm-3 control-label">Level</label>
                        <div class="col-sm-5">
                          <select class="form-control" name="level">
                            <option value="admin">Admin</option>
                            <option value="kepala_dinas">Kepala dinas</option>
                          </select>
                        </div>
                      </div>
                      
                    </div>

                    <div class="modal-footer">
                      <button type="reset" class="btn btn-warning">Reset</button>
                      <button type="submit" name="simpan" id="simpan" class="btn btn-info">Simpan</button>
                    </div>

                  </form>

               
                  
                </div>
              </div>
            </div>

          </div>
        </div>
      </div>
</section>

