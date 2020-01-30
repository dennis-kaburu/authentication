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
<?php include 'header.php'; ?>


		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<h1 class="page-header">
					<i class="fa fa-users"></i>
						 Students
						
					</h1>
				</div>
			</div>
			<!-- Projects Row -->
			<div class="row">
				<table class="table">
					<thead>
						<tr>
							<th>#</th>
							<th>Full Name</th>
							<th>Email</th>
							<th>Phone</th>
							<th>Active Test</th>
						</tr>
					</thead>
					<tbody>
					<?php 
					require 'config.php';
					$sql_students="SELECT * FROM users LEFT JOIN test ON users.test_active=test.id limit 3";
					$results_students=mysqli_query($con,$sql_students);
					if (mysqli_num_rows($results_students)>0) {
						$i=1;
						while ($row_s=mysqli_fetch_array($results_students)) {
						echo '
						<tr>
							<td>'.$i++.'</td>
							<td>'.$row_s['fname'].'</td>
							<td>'.$row_s['email'].'</td>
							<td>'.$row_s['phone'].'</td>
							<td>'.$row_s['name'].'</td>
						</tr>

						';	
						}
					}else{
						echo '<tr> <td colspan="5">'.mysqli_error($con).'<td></tr>';
					}
						

						?>
					</tbody>
				</table>
				<small>
							<h5 class="pull-right">
								 
								<a href="#" class="btn btn-danger btn-xs"><i class="fa fa-users" aria-hidden="true"></i> See All Students</a>
							</h5>
						</small>
			</div>
			<div class="row">
				<div class="col-lg-12">
					<h1 class="page-header">
						<i class="fa fa-user"></i>
						 Admins
						
					</h1>
				</div>
			</div>
			<!-- Projects Row -->
			<div class="row">
				<table class="table">
					<thead>
						<tr>
							<th>#</th>
							<th>Full Name</th>
							<th>Username</th>
						</tr>
					</thead>
					<tbody>
					<?php 
					require 'config.php';
					$sql_admin="SELECT * FROM admin limit 3";
					$results_admin=mysqli_query($con,$sql_admin);
					if (mysqli_num_rows($results_admin)>0) {
						$z=1;
						while ($row_a=mysqli_fetch_array($results_admin)) {
						echo '
						<tr>
							<td>'.$z++.'</td>
							<td>'.$row_a['full_name'].'</td>
							<td>'.$row_a['username'].'</td>
						</tr>

						';	
						}
					}else{
						echo '<tr> <td colspan="3">'.mysqli_error($con).'<td></tr>';
					}
						

						?>
					</tbody>
				</table>
				<small>
							<h5 class="pull-right">
								
								<a href="admins.php" class="btn btn-danger btn-xs"><i class="fa fa-user" aria-hidden="true"></i> View all Admins</a>
							</h5>
						</small>
			</div>
			<div class="row">
				<div class="col-lg-12">
					<h1 class="page-header">
						<i class="fa fa-question-circle-o"></i>
						 Assignments
						
					</h1>
				</div>
			</div>
			<!-- Projects Row -->
			<div class="row">
				<table class="table">
					<thead>
						<tr>
							<th>#</th>
							<th>Assignment</th>
							<th>Created On</th>
						</tr>
					</thead>
					<tbody>
					<?php 
					require 'config.php';
					$sql_t="SELECT * FROM test limit 3";
					$results_t=mysqli_query($con,$sql_t);
					if (mysqli_num_rows($results_t)>0) {
						$t=1;
						while ($row_t=mysqli_fetch_array($results_t)) {
						echo '
						<tr>
							<td>'.$t++.'</td>
							<td>'.$row_t['name'].'</td>
							<td>'.$row_t['created_at'].'</td>
						</tr>

						';	
						}
					}else{
						echo '<tr> <td colspan="3">'.mysqli_error($con).'<td></tr>';
					}
						

						?>
					</tbody>
				</table>
				<small>
							<h5 class="pull-right">
								
								<a href="tests.php" class="btn btn-danger btn-xs"><i class="fa fa-question-circle-o" aria-hidden="true"></i> View all Assinments</a>
							</h5>
						</small>

		</div>

<div class="modal fade" id="squarespaceModal" tabindex="-1" role="dialog" aria-labelledby="modalLabel" aria-hidden="true">
  <div class="modal-dialog">
	<div class="modal-content">
		<div class="modal-header">
			<button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span><span class="sr-only">Close</span></button>
			<h3 class="modal-title" id="lineModalLabel">My Modal</h3>
		</div>
		<div class="modal-body">
			
            <!-- content goes here -->
			<form>
              <div class="form-group">
                <label for="exampleInputEmail1">Email address</label>
                <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Enter email">
              </div>
              <div class="form-group">
                <label for="exampleInputPassword1">Password</label>
                <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
              </div>
              <div class="form-group">
                <label for="exampleInputFile">File input</label>
                <input type="file" id="exampleInputFile">
                <p class="help-block">Example block-level help text here.</p>
              </div>
              <div class="checkbox">
                <label>
                  <input type="checkbox"> Check me out
                </label>
              </div>
              <button type="submit" class="btn btn-default">Submit</button>
            </form>

		</div>
		<div class="modal-footer">
			<div class="btn-group btn-group-justified" role="group" aria-label="group button">
				<div class="btn-group" role="group">
					<button type="button" class="btn btn-default" data-dismiss="modal"  role="button">Close</button>
				</div>
				<div class="btn-group btn-delete hidden" role="group">
					<button type="button" id="delImage" class="btn btn-default btn-hover-red" data-dismiss="modal"  role="button">Delete</button>
				</div>
				<div class="btn-group" role="group">
					<button type="button" id="saveImage" class="btn btn-default btn-hover-green" data-action="save" role="button">Save</button>
				</div>
			</div>
		</div>
	</div>
  </div>
</div>



	</body>
</html>
