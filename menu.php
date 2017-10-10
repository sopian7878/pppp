<aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu" data-widget="tree">
        <li class="header">MAIN NAVIGATION</li>

  

        <li>
          <a href="home.php?page=dashboard">
            <i class="fa fa-dashboard"></i> <span>Dashboard</span>
          </a>
        </li>

       
        <?php 
        if ($level =='admin'){
        
        ?>
        <li>
          <a href="?page=user">
            <i class="fa fa-user"></i> <span>Users</span>
          </a>
        </li>

        <?php } ?>
          <li class="treeview">
            <a href="#">
              <i class="fa fa-envelope"></i> <span>Jenis Surat</span>
              <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
              </span></a>
            <ul class="treeview-menu">
              <li><a href="?page=suratmasuk"><i class="fa fa-circle-o"></i>Surat Masuk</a></li>
              <li><a href="?page=fsurat2"><i class="fa fa-circle-o"></i>Surat Keluar</a></li>
            </ul>
          </li>

          <li><a href="#">
            <i class="fa fa-files-o"></i> <span>Agenda</span></a>
          </li>
        </ul>
        
    </section>
    <!-- /.sidebar -->
  </aside>
