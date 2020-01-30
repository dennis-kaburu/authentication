  <!-- Left side column. contains the logo and sidebar -->
  <aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar user panel -->
      <div class="user-panel">
        <div class="pull-left image">
          <img src="images/avatar.png" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
          <p><?php echo $info['fname']; ?></p>
          <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
        </div>
      </div>
      <!-- search form -->
      <form action="#" method="get" class="sidebar-form">
        <div class="input-group">
          <input type="text" name="q" class="form-control" placeholder="Search...">
              <span class="input-group-btn">
                <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
                </button>
              </span>
        </div>
      </form>
      <!-- /.search form -->
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu">
        <li class="header">MAIN NAVIGATION</li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-dashboard"></i> <span>Dashboard</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
        </li>
         <!--  <li class="treeview">
          <a href="#"> -->
           <!--  <i class="fa fa-pie-chart"></i>
            <span>Select Test</span>
            <span class="pull-right-container">
 --><!--  --><?php
// require 'config.php';
            // $num_test=mysqli_num_rows(mysqli_query($con,"SELECT * FROM test"));

             ?>
              <!--<span class="label label-primary pull-right">--><?php// echo $num_test; ?><!--</span>
            </span>
            </span>
          </a>
          <ul class="treeview-menu">-->
          <?php
//           $te=mysqli_query($con,"SELECT * FROM test");
//           if(mysqli_num_rows($te)>0){
//             while($test=mysqli_fetch_array($te)){
//          echo'   <li><a href="addtest.php?id='.$test['id'].'&user='.$info['id'].'&type=general"><i class="fa fa-circle-o"></i> '.$test['name'].'</a></li>';
          
// }
//             }else{
//               echo'<li><a href="#"><i class="fa fa-circle-o"></i> No Tests Found </a></li>';
//             }
            ?>
         <!--  </ul>
        </li> -->
         <li class="treeview">
          <a href="#">
            <i class="fa fa-film"></i>
            <span>Select Video</span>
            <span class="pull-right-container">
              <?php
            require 'config.php';
            $num_test=mysqli_num_rows(mysqli_query($con,"SELECT * FROM videos"));

             ?>
              <span class="label label-primary pull-right"><?php echo $num_test; ?></span>
            </span>
            </span>
          </a>
          <ul class="treeview-menu">
          <?php
          $te=mysqli_query($con,"SELECT * FROM videos");
          if(mysqli_num_rows($te)>0){
            while($test=mysqli_fetch_array($te)){
         echo'   <li><a href="addtest.php?id='.$test['id'].'&user='.$info['id'].'&type=video"><i class="fa fa-circle-o"></i> '.$test['name'].'</a></li>';
          
}
            }else{
              echo'<li><a href="#"><i class="fa fa-circle-o"></i> No Tests Found </a></li>';
            }
            ?>
          </ul>
        </li>

       <!--  <li class="header">LABELS</li>
        <li><a href="#"><i class="fa fa-circle-o text-red"></i> <span>Important</span></a></li>
        <li><a href="#"><i class="fa fa-circle-o text-yellow"></i> <span>Warning</span></a></li>
        <li><a href="#"><i class="fa fa-circle-o text-aqua"></i> <span>Information</span></a></li> -->
      </ul>
    </section>
    <!-- /.sidebar -->
  </aside>
