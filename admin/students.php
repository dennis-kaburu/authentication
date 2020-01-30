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
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta name="description" content="Youtube">
		<meta name="author" content="Johan">
		<link rel="icon" href="assets/images/favicon.ico" type="image/x-icon">
		<title>Keystroke Testing - Dashboard</title>
		<link rel="stylesheet" type="text/css" href="res/style.css">
		<link rel="stylesheet" type="text/css" href="res/bootstrap.min.css">
		<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css">
		<!--[if lt IE 9]>
		<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
		<![endif]-->
<style>
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
	color: #120202;
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
	color: #120202;
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
    <script src="res/jquery-1.11.1.min.js"></script>
    <script src="res/bootstrap.min.js"></script>
    <script src="res/toastr.min.js"></script>
</head>


	<body>
		<?php include 'header.php';?>
			<div id="wrapper">
				<!-- <div id="sidebar-wrapper">
					<ul class="sidebar-nav">
						<li>
							<a class="activer" href="#"><i class="fa fa-home" aria-hidden="true"></i>  Home</a>
						</li>
					
						<hr/>
						<h5 class="text-left text-danger">
							Main Menu
						</h5>
						
						<li>
							<a href="#"><img src="https://yt3.ggpht.com/-qJOENyJEaMM/AAAAAAAAAAI/AAAAAAAAAAA/HSq_6hPBiVI/s88-c-k-no-mo-rj-c0xffffff/photo.jpg" class="avatar-xs">  Émissions télévisées</a>
						</li>
						<li>
							<a href="#"><img src="//i.ytimg.com/i/YfdidRxbB8Qhf0Nx7ioOYw/1.jpg" class="avatar-xs">  Actualités</a>
						</li>
						<li>
							<a href="#"><img src="//i.ytimg.com/i/4R8DWoMoI7CAwX8_LjQHig/1.jpg" class="avatar-xs">  En direct</a>
						</li>
						<li>
							<a href="#"><img src="//i.ytimg.com/i/zuqhhs6NWbgTzMuM09WKDQ/1.jpg" class="avatar-xs">  Vidéo à 360 degrés</a>
						</li>
						<hr/>
						<p class="container text-left">
							  Connectez-vous maintenant pour
							<br/>
							 consulter vos chaînes et les
							<br/>
							 recommandations.
							<br/>
							<br/>
							<a href="#" class="btn btn-info btn-xs">Connexion</a>
						</p>
					</ul>
				</div> -->
			</div>
		</nav>



		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<h1 class="page-header">
					<i class="fa fa-users"></i>
						 Students Details
						
					</h1>
				</div>
			</div>
	




<div class="row">
<div class="col-md-12">
&nbsp; &nbsp;
<br>

	<h3>View Students </h3>

	<table class="table">
		<tr>
			<th>#</th>
			<th>Full Name</th>
			<th>Username </th>
			<th colspan="2">Action</th>
		</tr>
	<tbody id="ques">
		<?php

//$id=$_POST['id'];
		require 'config.php';
$sql="SELECT * from users" ;
$mysql=mysqli_query($con,$sql);
if (mysqli_num_rows($mysql)>0) {
	$i=1;
	while($row=mysqli_fetch_array($mysql)){
echo '<tr>
<td>'.$i++.'</td>
<td>'.$row['fname'].'</td>
<td>'.$row['email'].'</td>
<td><a href="viewassignemnt.php?id='.$row['id'].'">View Assignment</a></td>
<td><a href="mailto:'.$row['email'].'">Send email</a></td>

	</tr>';

	}

}else{
	echo '<tr><td colspan="5"> Error No Results Founds'.mysqli_error($con).'</td></tr>';
}?>
	</tbody>	
	</table>

</div>
</div>
</div>		




	</body>
	<script>
		$("#view_id").on("change", function() {
		var id=document.getElementById("view_id").value;	
        $.ajax({
            type: 'POST',
            url: 'getqn.php',
            data: 'id='+id,
            dataType: 'html',
            cache: false,
            success: function(result) {
             //   $('questions').html(result);
               // $('#ltype').val(result['type']);
           document.getElementById('ques').innerHTML=result;    
                
            },
        });
    });


	</script>
</html>
