<?php
$info=array();
session_start();
if ($_SESSION['keystroke_u']!="") {
  $info=$_SESSION['keystroke_u'];
} else {
 header("Location:index.php?err=Please Login First");
}

?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Key Stroke Testing Portal</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.6 -->
  <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/AdminLTE.min.css">
  <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
  <link rel="stylesheet" href="dist/css/skins/_all-skins.min.css">
  <!-- bootstrap wysihtml5 - text editor -->
  <link rel="stylesheet" href="plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css">


  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->
    <style>
  video, canvas {
    
    position: absolute;
  }
  </style>
</head>
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">

  <header class="main-header">
    <!-- Logo -->
    <a href="" class="logo">
      <!-- mini logo for sidebar mini 50x50 pixels -->
      <span class="logo-mini"><b>MOC</b>W</span>
      <!-- logo for regular state and mobile devices -->
      <span class="logo-lg"><b>MAK Online Course</b> work</span>
    </a>
    <!-- Header Navbar: style can be found in header.less -->
    <nav class="navbar navbar-static-top">
      <!-- Sidebar toggle button-->
      <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </a>

      <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">

          <!-- User Account: style can be found in dropdown.less -->
          <li class="dropdown user user-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <img src="images/avatar.png" class="user-image" alt="User Image">
              <span class="hidden-xs"><?php echo $info['fname'] ?></span>
            </a>
            <ul class="dropdown-menu">
              <!-- User image -->
              <li class="user-header">
                <img src="images/avatar.png" class="img-circle" alt="User Image">

                <p>
                  <?php echo $info['fname'] ?>
                  <small>Member since <?php  echo date("d M Y",strtotime($info['created_at']));?></small>
                </p>
              </li>
              <!-- Menu Body -->
              <li class="user-body">
                <div class="row">
                  <div class="col-xs-4 text-center">
                    <a href="#">Followers</a>
                  </div>
                  <div class="col-xs-4 text-center">
                    <a href="#">Coursworks</a>
                  </div>
                  <div class="col-xs-4 text-center">
                    <a href="#">Friends</a>
                  </div>
                </div>
                <!-- /.row -->
              </li>
              <!-- Menu Footer-->
              <li class="user-footer">
                <div class="pull-left">
                  <a href="#" class="btn btn-default btn-flat">Profile</a>
                </div>
                <div class="pull-right">
                  <a href="logout.php" class="btn btn-default btn-flat">Sign out</a>
                </div>
              </li>
            </ul>
          </li>
          <!-- Control Sidebar Toggle Button -->
          <li>
            <a href="#" data-toggle="control-sidebar"><i class="fa fa-gears"></i></a>
          </li>
        </ul>
      </div>
    </nav>
  </header>
<?php
include 'aside.php';
?>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">

      <h1>
      Online Course Work
        <small></small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Online </a></li>
        <li class="active">Testing System</li>
      </ol>
    </section>

    <!-- Main content -->

    <section class="content">
      <div class="row">
      <div class="col-md-12" style="text-align: center;">
            <?php
    if (isset($_GET['msg'])) {
      echo '<div class="alert alert-success">'.$_GET['msg'].'</div>';
    }
      if (isset($_GET['err'])) {
      echo '<div class="alert alert-danger">'.$_GET['err'].'</div>';
    }
    ?>
      </div>
        <div class="col-md-12">
          <div class="box box-info">
            <div class="box-header">
            
              <!-- tools box -->
              <div class="pull-right box-tools">
                
              </div>
              <!-- /. tools -->
            </div>
            <!-- /.box-header -->
            <script src="jquery.min.js"></script>
            <div class="box-body pad">
<?php $uid=$info['id']; ?>
       

              <form action="save_work.php" method="POST">
    <input type="hidden" name="id" id="id" value="<?php echo $uid; ?>">          
<?php 
$if_sql="SELECT * FROM sat_students WHERE sid='$uid' ";
$if_query=mysqli_query($con,$if_sql);
if(mysqli_num_rows($if_query)>0){
  $re=mysqli_fetch_array($if_query);
echo '<div class="alert alert-danger" style="text-align:center;">Sorry'.$info['fname'].' You sat for a test at '.date("d M Y h:m:s",strtotime($re['date_finished'])).'</div>';
echo '
<script>


</script>

';
}
  else{


$qn="SELECT q.qn,q.num,t.name,q.id as qid, t.id as tid,u.fname FROM questions q,test t, users u WHERE ( t.id=q.test AND t.id=u.test_active) AND (u.id='$uid' AND u.test_type='general')  ORDER BY num ASC ";
$qn_query=mysqli_query($con,$qn);

$vid_qn="SELECT q.qn,q.num,t.name,q.id as qid, t.id as tid,u.fname FROM vid_qn q,videos t, users u WHERE ( t.id=q.vid_id AND t.id=u.test_active) AND (u.id='$uid' AND u.test_type='video')  ORDER BY num ASC ";
$vid_qn_query=mysqli_query($con,$vid_qn);


if (mysqli_num_rows($qn_query)>0) {
while($row_qn=mysqli_fetch_array($qn_query)){
  echo '
  <input type="hidden" name="qin_id[]" value="'.$row_qn['qid'].'">
  <h3 class="box-title">'.$row_qn['num'].'
  <small>'.$row_qn['qn'].'</small>
              </h3>
         <div class="form-group">
<textarea onkeyup="test2(this.value,this.id)" 
          onkeypress="myFunction(event,this.id)" 
       id="'.$row_qn['num'].'"
       name="qn_'.$row_qn['qid'].'" 
        style="height: 300px;" 
       class="form-control" 
       onkeydown="test(this.value)" 
     ></textarea>
                    </div>


  ';
}
}else if(mysqli_num_rows($qn_query)==0){


$vid=mysqli_fetch_array(mysqli_query($con,"SELECT link FROM videos v,users u   WHERE v.id=u.test_active"));

echo '<div><iframe width="800" height="480" src="'.$vid['link'].'" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe></div>';


while($row_qn=mysqli_fetch_array($vid_qn_query)){
  echo '
  <input type="hidden" name="qin_id[]" value="'.$row_qn['qid'].'">
  <h3 class="box-title">'.$row_qn['num'].'
  <small>'.$row_qn['qn'].'</small>
              </h3>
         <div class="form-group">
<textarea onkeyup="test2(this.value,this.id)" 
          onkeypress="myFunction(event,this.id)" 
       id="'.$row_qn['num'].'"
       name="qn_'.$row_qn['qid'].'" 
        style="height: 300px;" 
       class="form-control" 
       onkeydown="test(this.value)" 
     ></textarea>
                    </div>


  ';
}
}else{
    echo '<div class="alert alert-danger">There are No Questions found for this test '.mysqli_error($con).'</div>';
}
echo mysqli_error($con);
}
 ?>

     
              <div class="form-group">
              <BUTTON class="btn btn-primary "> Submit </BUTTON>
               <i id="res" class="span"></i><br>
              <i id="num" class="span"></i>
              </form>
             
            </div>
          </div>
          <!-- /.box -->

        
        </div>
        <!-- /.col-->
      </div>
      <!-- ./row -->
    </section>
    <!-- /.content -->
  </div>

  <!-- /.content-wrapper -->
  <footer class="main-footer">
    <div class="pull-right hidden-xs">
      <b>Version</b> 1.0.0
    </div>
    <strong>Copyright &copy; <?php echo date("Y");?> <a href="http://almsaeedstudio.com">Mugambi Dennis</a>.</strong> All rights
    reserved.
  </footer>

  <!-- Control Sidebar -->
 
  <!-- /.control-sidebar -->
  <!-- Add the sidebar's background. This div must be placed
       immediately after the control sidebar -->
  <div class="control-sidebar-bg"></div>
</div>
<!-- ./wrapper -->
    <div class="modal fade" id="info" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header modal-header-info">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                    Re-Authenticate 
                </div>
                <div class="modal-body">
                  <div class="form-group">
                    <input type="password" name="password" placeholder="Confirm Password" class="form-control">
                  </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Close</button>
                </div>
            </div><!-- /.modal-content -->
        </div><!-- /.modal-dialog -->
    </div>

    <div class="modal fade" id="camera" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header modal-header-info">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                    Re-Authenticate 
                </div>
                <div class="modal-body">
                <div class="row">
               <div class="demo-frame">
                <div class="demo-container">
                  <video id="video" width="480" height="480" preload autoplay loop muted></video>
                  <canvas id="canvas" width="480" height="480"></canvas>
                </div>
              </div>
                </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Close</button>
                </div>
            </div><!-- /.modal-content -->
        </div><!-- /.modal-dialog -->
    </div>

      <div class="modal fade" id="finger" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header modal-header-info">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                    Re-Authenticate 
                </div>
                <div class="modal-body">
                  <div align="center"><strong><h2 align="center">Capture Signature</h2></strong>
    <p>&nbsp;</p>
      <table class="table" style="font-family: 9 [SO; font-size: 9pt">
        
        
             
        <tr>         
          <td ><object classid="clsid:059059BE-8F4C-49AC-B2A9-5649F02A4FC6" id="FPEngineEx1" data="DATA:application/x-oleobject" style="height: 301px; width: 221px"></object></td>

        <td width="182"><input type="button" class="btn btn-success" value="Capture Signature" name="B5" ONCLICK=GetFingerImage()></td>
        </tr>
        
</table>
      <!-- <form action="" method="post" > -->
      
      
          
      
        </div>
<p align="center"><b>
  <textarea  name="SS" id="es" class="form-control" ></textarea>
</b></p>
<p align="Center"> <button id="submit" type="submit" name="submit" class="btn btn-success" > Verify</button></p>
<p align="center"><textarea rows="10" name="S2" id="e3" class="form-control" style="display: none;"></textarea></p>
<p align="center">

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Close</button>
                </div>
            </div><!-- /.modal-content -->
        </div><!-- /.modal-dialog -->
    </div>
 <script type="text/javascript">
   function count(str){
var n=str.length;

document.getElementById("num").innerHTML=n;

 if (n==300) {
  $('#info').modal('show');
 }
 if (n==70) {
   $('#finger').modal('show');
 }
   }

 </script>   

<!-- jQuery 2.2.3 -->
<script src="plugins/jQuery/jquery-2.2.3.min.js"></script>
<!-- Bootstrap 3.3.6 -->
<script src="bootstrap/js/bootstrap.min.js"></script>
<!-- FastClick -->
<script src="plugins/fastclick/fastclick.js"></script>
<!-- AdminLTE App -->
<script src="dist/js/app.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="dist/js/demo.js"></script>
<!-- CK Editor -->
<script src="plugins/ckeditor/ckeditor.js"></script>
<!-- Bootstrap WYSIHTML5 -->
<script src="plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js"></script>
<script src="action.js"></script>
<script src="scanimage.js"></script>
 <script src="build/tracking-min.js"></script>
  <script src="build/data/face-min.js"></script>
  <script src="build/dat.gui.min.js"></script>

<script>
  
  var start = null;
function test(str){
 if (!start) {//checking is a new user input
  start = $.now();
        }

// document.getElementById("res").innerHTML="down";
}

function test2(str,qn){

var n=str.length;
if (n==1) {
  ready();
}
//document.getElementById("num").innerHTML=n;
 if (n==300) {
  $('#info').modal('show');
 }if (n==100) 
{
   $('#camera').modal('show');
    var video = document.getElementById('video');
      var canvas = document.getElementById('canvas');
      var context = canvas.getContext('2d');

      var tracker = new tracking.ObjectTracker('face');
      tracker.setInitialScale(4);
      tracker.setStepSize(2);
      tracker.setEdgesDensity(0.1);

      tracking.track('#video', tracker, { camera: true });

      tracker.on('track', function(event) {
        context.clearRect(0, 0, canvas.width, canvas.height);

        event.data.forEach(function(rect) {
          context.strokeStyle = '#a64ceb';
          context.strokeRect(rect.x, rect.y, rect.width, rect.height);
          context.font = '11px Helvetica';
          context.fillStyle = "#fff";
          context.fillText('x: ' + rect.x + 'px', rect.x + rect.width + 5, rect.y + 11);
          context.fillText('y: ' + rect.y + 'px', rect.x + rect.width + 5, rect.y + 22);
        });
      });

      var gui = new dat.GUI();
      gui.add(tracker, 'edgesDensity', 0.1, 0.5).step(0.01);
      gui.add(tracker, 'initialScale', 1.0, 10.0).step(0.1);
      gui.add(tracker, 'stepSize', 1, 5).step(0.1);
}
 if (n==70) {
   $('#finger').modal('show');
 }
   

  var id = document.getElementById("id").value;
    var timeElapsed = $.now() - start;
        start = null;//start the next  timing tracking
         
         console.log(['time elapsed:', timeElapsed, 'ms'].join(' '));
         var takentime=[timeElapsed];
         takentime.push(timeElapsed);

         // document.getElementById("res").innerHTML=takentime;



            if (timeElapsed=="") {
   document.getElementById("res").innerHTML="";
    return;
  }
  if (window.XMLHttpRequest) {
    // code for IE7+, Firefox, Chrome, Opera, Safari
    xmlhttp=new XMLHttpRequest();
  } else { // code for IE6, IE5
    xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
  }
  xmlhttp.onreadystatechange=function() {
    if (this.readyState==4 && this.status==200) {
     document.getElementById("res").innerHTML=this.responseText;
     document.getElementById("res").style.display="block";
  
    }
  }
  xmlhttp.open("GET","gettime.php?q="+timeElapsed+"&id="+id+"&qn="+qn,true);
 
  xmlhttp.send();

}


function ready(){
  alert("Click Ok to continue");
}

</script>
<script>
  $(function () {
    // Replace the <textarea id="editor1"> with a CKEditor
    // instance, using default configuration.
    //CKEDITOR.replace('editor1');
    //bootstrap WYSIHTML5 - text editor
   // $(".textarea").wysihtml5();

    CKEDITOR.on('instanceCreated', function(e) {
        e.editor.on('contentDom', function() {
            e.editor.document.on('keyup', function(event) {
               alert("am pressed");
            }
        );
    });
}); 


  });
</script>


</body>
</html>
