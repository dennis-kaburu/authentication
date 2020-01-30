<?php 
session_start();
$admin = array();
$admin=$_SESSION['admin_key'];
if (count($admin)>0) {
	# code...
}else{
	header("Location:index.php?err=please Login");
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <!-- This file has been downloaded from Bootsnipp.com. Enjoy! -->
    <title>Keystroke Video Testing</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet">
    <style type="text/css">
        
/*! * Start Bootstrap - Simple Sidebar (http://startbootstrap.com/) * Copyright 2013-2016 Start Bootstrap * Licensed under MIT (https://github.com/BlackrockDigital/startbootstrap/blob/gh-pages/LICENSE) */
body
{
	overflow-x: hidden;
	padding-top: 70px;
	/* Required padding for .navbar-fixed-top. Remove if using .navbar-static-top. Change if height of navigation changes. */
}

/* Toggle Styles */
#wrapper
{
	padding-left: 0;
	-webkit-transition: all 0.5s ease;
	-moz-transition: all 0.5s ease;
	-o-transition: all 0.5s ease;
	transition: all 0.5s ease;
}

#wrapper.toggled
{
	padding-left: 250px;
}

#sidebar-wrapper
{
	z-index: 1000;
	position: fixed;
	left: 250px;
	width: 0;
	height: 100%;
	margin-left: -250px;
	overflow-y: auto;
	background: #2c3e50;
	-webkit-transition: all 0.5s ease;
	-moz-transition: all 0.5s ease;
	-o-transition: all 0.5s ease;
	transition: all 0.5s ease;
}

#wrapper.toggled #sidebar-wrapper
{
	width: 250px;
}

#page-content-wrapper
{
	width: 100%;
	position: absolute;
	padding: 15px;
}

#wrapper.toggled #page-content-wrapper
{
	position: absolute;
	margin-right: -250px;
}

/* Sidebar Styles */
.sidebar-nav
{
	position: absolute;
	top: 0;
	width: 250px;
	margin: 0;
	padding: 0;
	list-style: none;
}

.sidebar-nav p, h1, h2, h3, h4, h5, h6
{
	color: #fff;
}

.sidebar-nav li
{
	text-indent: 20px;
	line-height: 40px;
}

.sidebar-nav li a
{
	display: block;
	text-decoration: none;
	color: #fff;
}

.sidebar-nav li a:hover
{
	text-decoration: none;
	color: #18bc9c;
}

li a.activer
{
	color: #18bc9c;
}

.sidebar-nav li a:active,.sidebar-nav li a:focus
{
	text-decoration: none;
}

.sidebar-nav > .sidebar-brand
{
	height: 65px;
	font-size: 18px;
	line-height: 60px;
}

.sidebar-nav > .sidebar-brand a
{
	color: #fff;
}

.sidebar-nav > .sidebar-brand a:hover
{
	color: #fff;
	background: none;
}

@media(min-width:768px)
{
	#wrapper
	{
		padding-left: 250px;
	}

	#wrapper.toggled
	{
		padding-left: 0;
	}

	#sidebar-wrapper
	{
		width: 250px;
	}

	#wrapper.toggled #sidebar-wrapper
	{
		width: 0;
	}

	#page-content-wrapper
	{
		padding: 20px;
		position: relative;
	}

	#wrapper.toggled #page-content-wrapper
	{
		position: relative;
		margin-right: 0;
	}
}

.point
{
	cursor: pointer;
}

.text-decoration
{
	text-decoration: none;
}

.avatar-md
{
	border-radius: 100%;
	height: 100px;
	width: 100px;
}

.avatar-xs
{
	border-radius: 100%;
	height: 25px;
	width: 25px;
}

.slide-image
{
	width: 100%;
}

.carousel-holder
{
	margin-bottom: 30px;
}

.carousel-control,.item
{
	border-radius: 4px;
}

.caption
{
	height: 130px;
	overflow: hidden;
}

.caption h4
{
	white-space: nowrap;
}

.thumbnail img
{
	width: 100%;
}

.ratings
{
	padding-right: 10px;
	padding-left: 10px;
	color: #d17581;
}

.thumbnail
{
	padding: 0;
}

.thumbnail .caption-full
{
	padding: 9px;
	color: #333;
}

footer
{
	margin: 50px 0;
}

.portfolio-item
{
	margin-bottom: 25px;
}
    </style>
    <script src="http://code.jquery.com/jquery-1.11.1.min.js"></script>
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
</head>
<body>
<!DOCTYPE html>
<html lang="fr-FR">
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta name="description" content="Youtube">
		<meta name="author" content="Johan">
		<link rel="icon" href="assets/images/favicon.ico" type="image/x-icon">
		<title>Keystroke Testing - Dashboard</title>
		<link rel="stylesheet" type="text/css" href="assets/css/app.css">
		<link rel="stylesheet" type="text/css" href="https://bootswatch.com/flatly/bootstrap.min.css">
		<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-T8Gy5hrqNKT+hzMclPo118YTQO6cYprQmhrYwIiQ/3axmI1hQomh7Ud2hPOy8SP1" crossorigin="anonymous">
		<!--[if lt IE 9]>
		<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
		<![endif]-->
	</head>
	<body>
		<?php include 'header.php'; ?>



		<div class="container">
			<div class="row">
				<div class="col-md-12" style="color: #000;">
					<h1 class="page-header">
					<i class="fa fa-movie"></i>
						 Add Video Assignment
						
					</h1>
				</div>
			</div>
			<!-- Projects Row -->
			<div class="row">
			<form method="POST" action="">
				<div class="col-md-4 portfolio-item form-group">
					Video Name
				<input type="text" required="" name="name" placeholder="Enter New Video Assignment" class="form-control">
			</div>
			<div class="col-md-4 portfolio-item form-group">
				Memory type
				<SELECT   name="memory"  class="form-control" required="">
					<option>Semantic Memory</option>
					<option>Procedural Memory</option>
					<option>Edipisodic Memory</option>
				</SELECT>
			</div>
				<div class="col-md-4 portfolio-item form-group">
					Video Link
				<input type="text" name="link" required="" placeholder="Enter New Video Link" class="form-control">
				<input type="hidden" name="id" value="<?php echo $admin['id']; ?>">	
				</div>
				<div class="col-md-6 portfolio-item form-group">
				<input value="Add" class="btn btn-info" name="add" type="submit">
					
				</div>
			</form>
		
			</div>
				<div class="row">
				
			
			<?php 
			require 'config.php';
if (isset($_POST['add'])) {

	$name=$_POST['name'];
	$memory=$_POST['memory'];
	$link=$_POST['link'];
	$id=$_POST['id'];

	$add="INSERT INTO videos(name,memory,link,created_by) VALUES ('$name','$memory','$link','$id')";
	$add_query=mysqli_query($con,$add);
	if ($add_query) {
		echo "<div class='alert alert-success'> Record Added</div>";
	}else{
		echo "<div class='alert alert-warning'> Record couldn't Added</div>";	
	}
}


			?>
			</div>
	<div class="row">
	<table class="table table-borded" >
		<tr><th>#</th>
		<th>Name </th>
		<th>Memory </th>
		<th>Link </th>
		<th>Date Created</th>
		<th colspan="2">action</th>
		</tr>
		<?php 
		$i=1;
	$sql="SELECT * FROM videos";
	$mysql=mysqli_query($con,$sql);
	if (mysqli_num_rows($mysql)>0) {
		while ($row=mysqli_fetch_array($mysql)) {
			echo '

<tr>
<td>'.$i++.'</td>
<td>'.$row['name'].'</td>
<td>'.$row['memory'].'</td>
<td><iframe width="100" height="50" src="'.$row['link'].'" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe></td>
<td>'.$row['created_at'].'</td>
<td><i class="fa fa-edit" style="color:green; "></i></td>
<td><i class="fa fa-trash" style="color:red;" onclick="deltest('.$row['id'].')"></i></td>
</tr>
			';
		}
	}else{
		echo '<tr>
<td colspan="5"><div class="alert alert-danger"> No Results Founds</div></td>
		</tr>';
	}


			?>

	</table>			
			
			</div>			
		
		</div>

<script>
	function deltest(id){
var r = confirm("Are you sure you want to delete");
if (r == true) {
  if (id=="") {
   
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
   alert(this.responseText);
   // document.getElementById("phy_action").innerHTML=this.responseText;
     //document.getElementById("msg").style.display="block";
   window.location.reload();
    }
  }
  xmlhttp.open("GET","delvidtest.php?id="+id,true);
 
  xmlhttp.send();


}
	}
</script>






	</body>
</html>
