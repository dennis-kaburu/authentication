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
		<title>Keystroke Testing - Add video Questions</title>
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
					<i class="fa fa-question-circle-o"></i>
						Add Questions to a Video
						
					</h1>
				</div>
			</div>
			<!-- Projects Row -->
			<div class="row">

				<div class="col-md-6 portfolio-item form-group">
				Select video
				<SELECT name="Assignmnet" class="form-control" id="test_id">
					<option>-- Select Video --</option>
					<?php
					require 'config.php';
					$ass=mysqli_query($con, "SELECT * FROM videos");
					while ($as=mysqli_fetch_array($ass)) {
						echo '<option value="'.$as['id'].'">'.$as['name'].'</option>';
					}
					?>
				</SELECT>
				<input type="hidden" name="id" id="id" value="<?php echo $admin['id']; ?>">	
				</div>
			
		
			</div>
		<div class="row">
			<script type="text/javascript">

$(document).ready(function(){

    var counter = 2;

    $("#addButton").click(function () {

	if(counter>10){
            alert("Only 10 Questions allow");
            return false;
	}

	var newTextBoxDiv = $(document.createElement('div'))
	     .attr("id", 'TextBoxDiv' + counter);

	newTextBoxDiv.after().html('<label>Question #'+ counter + ' : </label>' +
	      '<input type="text" name="question' + counter +
	      '" id="question' + counter + '" class="form-control">');

	newTextBoxDiv.appendTo("#TextBoxesGroup");


	counter++;

	document.getElementById('coun').value=counter;
	 var testid=document.getElementById('test_id').value;
	 document.getElementById('test').value=testid;
     });


     $("#removeButton").click(function () {
	if(counter==1){
          alert("No more Questions to remove");
          return false;
       }

	counter--;
	document.getElementById('coun').value=counter;
        $("#TextBoxDiv" + counter).remove();

     });

     $("#getButtonValue").click(function () {
	var msg = '';
	for(i=1; i<counter; i++){
   	  msg +="\n Question #" + i + " : " + $('#question' + i).val();
  	var num="Question: "+i;
    var test = document.getElementById("test").value;
    var qn = document.getElementById('question'+i).value;
    var user = document.getElementById('id').value;  
    var form_data = new FormData();                  
    form_data.append('test', test);
    form_data.append('qn',qn);
    form_data.append('num',num);
    form_data.append('user',user);                         
    $.ajax({
                url: 'vid_qnz.php', // point to server-side PHP script 
                dataType: 'json',  // what to expect back from the PHP script, if anything
                cache: false,
                contentType: false,
                processData: false,
                data: form_data,                         
                type: 'post',
                success: function(results){
                  if (results['code']=='failed') {
                  	toastr.error('Error!', results['msg'], {
				        closeButton: true,
				        progressBar: true,
				    });
                  }else if(results['code']=='success'){
                  	toastr.success('Success!', results['msg'], {
        closeButton: true,
        progressBar: true,
    });
                  }// display response from the PHP script, if any

                }
     
        });

	}
    	//  alert(msg);
     });
  });
</script>
<form method="POST" action="qnz.php" id="qnz">
<div id='TextBoxesGroup'>

<input type="hidden" name="coun" id="coun">
<input type="hidden" name="test" id="test">
	<div id="TextBoxDiv1" class="form-group">
		<label>Quenstion #1 : </label><input type='textbox' id='question1' class="form-control">
	</div>


</div>
</form>	
<input type='button' value='Add Question' id='addButton' class="btn btn-info">
<input type='button' value='Remove Last Question' id='removeButton' class="btn btn-primary">
<input type='button' value='Save Questions' id='getButtonValue' class="btn btn-success">
</div>



<div class="row">
<div class="col-md-12">
&nbsp; &nbsp;
<br>

	<h3>View Questions to a Video </h3>
	<div class="col-md-6 portfolio-item form-group">
				Select Video
				<SELECT name="Assignmnet" class="form-control" id="view_id">
					<option>-- Select Video --</option>
					<?php
					require 'config.php';
					$ass=mysqli_query($con, "SELECT * FROM videos");
					while ($as=mysqli_fetch_array($ass)) {
						echo '<option value="'.$as['id'].'">'.$as['name'].'</option>';
					}
					?>
				</SELECT>
				</div>
	<table class="table">
		<tr>
			<th>#</th>
			<th>Question Number</th>
			<th>Question </th>
			<th>Question Creator</th>
			<th>Date Created</th>
			<th colspan="2">Action</th>
		</tr>
	<tbody id="ques">
		
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
            url: 'getvidqn.php',
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
