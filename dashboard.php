
<section class="content-header">
  <h1>Dashboard</h1>
</section>
<section class="content">
      <p>penjelasan aplikasi</p>
        
     <div class="row">

        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-aqua">
            <div class="inner">
              <h3>
                <?php

                $select = "SELECT * FROM tb_suratmasuk ";
                $qselect = mysql_query($select);
                $rows = mysql_num_rows($qselect);
                if ($rows >0) {
                   echo "$rows";
                 } else {
                  echo "0";
                 }


                ?>
              </h3>

              <p>surat masuk</p>
            </div>
            <div class="icon">
              <i class="fa fa-envelope"></i>
            </div>
            <a href="#" class="small-box-footer">
              More info <i class="fa fa-arrow-circle-right"></i>
            </a>
          </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-green">
            <div class="inner">
              <h3>53</h3>

              <p>surat keluar</p>
            </div>
            <div class="icon">
              <i class="fa fa-envelope"></i>
            </div>
            <a href="#" class="small-box-footer">
              More info <i class="fa fa-arrow-circle-right"></i>
            </a>
          </div>
        </div>
      </div>
        
        </section>
      