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
    <title>Keystroke Testing Home</title>
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
				<div class="col-lg-12">
					<h1 class="page-header">
					<i class="fa fa-line-chart"></i>
					Welcome To Dennis Ngram Analyser
						
					</h1>
				</div>
			</div>
			<!-- Projects Row -->
			<div class="row">
    <?php







	       #####
	      #####
         #####           ANALYSIS FUNCTIONS
        #####
       #####

include('loglikelihood.php');

$ngrams = array();
#$ngrams['fo42haj'] = 0;

   function separatePun($word){
  
      # separate punctuation from word. so treat punctuation as separate tokens
  	  $pat1 = "/^[\"'\(\[<]/";
  	  $pat2 = "/[\"'\)\]\.\!\?;\:,]$/";
  	  $result = array();
      while(preg_match($pat1, $word)){
          array_push($result, substr($word, 0, 1));
      	  $word = substr($word, 1);
      	  
      }
      $res2 = array();
      
      #echo"<p>$pat2</p>";
      while(preg_match($pat2, $word)){
          array_push($res2, substr($word, -1));
      	  $word = substr($word, 0, -1);
      	  
      }
      
      $pos = strpos($word, "'");
      if ($pos === false){ 
      	  array_push($result, $word);
      }
      else {
      	array_push($result, substr($word, 0, $pos));
      	array_push($result, substr($word, $pos));
      }
      $res2 = array_reverse($res2);
      foreach($res2 as $item){
      	array_push($result, $item);
      }
      
      return $result;
  
  }
function deletePun($word){
  
  	  $orig = $word;
      # separate punctuation from word. so treat punctuation as separate tokens
  	  $pat1 = "/^[\"'\(\[<]/";
  	  $pat2 = "/[\"'\)\]\.\!\?;\:,]$/";
  	  $result = array();
      while(preg_match($pat1, $word)){
      	  $word = substr($word, 1);      	  
      }
      while(preg_match($pat2, $word)){
      	  $word = substr($word, 0, -1);
      	  
      }
      if ($word == ''){
          $word = $orig;
      }
      $result = array($word);
      return $result;
  
  }
  
  

  function processLine($line){
       global $ngrams;
       global $previous;
       global $n;
       global $total;
       global $unigrams;
       global $punc;
  	   $words = preg_split('/\s+/', $line);
  	   #$ngrams = array();
       foreach($words as $word){
         if ($punc == 'checked'){
    	    $wordcomponents = separatePun($word);
    	 }
    	 else {
    	 	$wordcomponents = deletePun($word);
    	 }
    	 #$current = $word;
    	 foreach($wordcomponents as $current){
    	      #echo "X$current ";
    	      if (isset($unigrams[$current])){
    	          $unigrams[$current] = $unigrams[$current] + 1;
    	      }
    	      else {
    	         $unigrams[$current] = 1;
    	      }
    	      $gram = '';
    	      $total++;
    	      for($i = $n - 2; $i >= 0; $i--){
    	            $gram = "$gram$previous[$i] ";
    	      }
    	      $gram = "$gram$current";
    	      #$ngrams[$gram] = 1;
    	      #if (array_key_exists($gram, $ngrams))
    	      if (isset($ngrams[$gram]))
    	      {
    	          $ngrams[$gram] = $ngrams[$gram] + 1;
    	      }
    	      else {
    	         $ngrams[$gram] = 1;
    	      #   #echo "...";
    	      }
    	      $previous[4] = $previous[3];
    	      $previous[3] = $previous[2];
    	      $previous[2] = $previous[1];
    	      $previous[1] = $previous[0];
    	      $previous[0] = $current;
    	    
    	 }
       }
  
  }

     ###
    ###   BY FREQUENCY
   ###
   function byFrequency(){
       global $ngrams;
       global $unigrams;
       global $previous;
       global $n;
       global $total;
       global $thetext;
       global $cutoff;
  	   if (is_array($thetext) == true)
       {
  	       foreach($thetext as $aline){
    	      processLine($aline);
           }
       }
       else {
          if (substr($thetext, 0, 4) == 'http') {
      		 $urls = preg_split('/\s+/', $thetext);
      		 foreach($urls as $url){
      	    	processLine(file_get_contents($url));
      	     }
          }
          else{
      	     processLine($thetext);
          }
       }
  
   }
   
   
      ###
     ###  USING LOG LIKELIHOOD
    ###
    function ll($w2, $w1, $w1w2, $total){
      #echo "<p>$w2 $w1 $w1w2 $total</p>";
      $e1 = $w1 * ($w2 + $w1w2) / ($w1 + $total);
      
      $e2 = $total * ($w1w2 + $w2) / ($w1 + $total);
      #echo"<p>E1: $e1</p><p>E2: $e2</p>";
      $g2 = 2 * (($w1w2 * log(($w1w2 / $e1), 2)) + ($w2 * log(($w2 / $e2), 2)));
      return $g2;
    }

    ###
   ###     
  ###    M A I N
 ###
### 


if (isset($_GET['ex'])) {
    #$server = 'http://localhost/ngramAnalyzer';
    $server = 'http://guidetodatamining.com/ngramAnalyzer';
    $text = $_GET['ex'];
    if ($text== 'walden'){
    	
    	$thetext = "$server/walden.txt";
    	$cutoff = 3;
    	$n = 2;
    	$punc = 'no';
    	$method = 'byFreq';
    }
    elseif ($text == 'moby'){
    	
    	$thetext = "$server/moby.txt";
    	$cutoff = 3;
    	$n = 2;
    	$punc = 'no';
    	$method = 'logLikelihood';
    
    }
    elseif ($text == 'lotus'){
    	
    	$thetext = "$server/lotus.txt";
    	$cutoff = 3;
    	$n = 1;
    	$punc = 'no';
    	$method = 'byFreq';
    
    }
    elseif ($text == 'lotus2'){
    	
    	$thetext = "$server/lotus.txt";
    	$cutoff = 3;
    	$n = 2;
    	$punc = 'no';
    	$method = 'byFreq';
    
    }
    elseif ($text == 'lotus3'){
    	
    	$thetext = "$server/lotus.txt";
    	$cutoff = 3;
    	$n = 2;
    	$punc = 'no';
    	$method = 'loglikelihood';
    
    }
    elseif ($text == 'moby2'){
    	
    	$thetext = "$server/moby.txt";
    	$cutoff = 3;
    	$n = 2;
    	$punc = 'no';
    	$method = 'byFreq';
    
    }
    elseif ($text == 'moby3'){
    	
    	$thetext = "$server/moby.txt";
    	$cutoff = 3;
    	$n = 3;
    	$punc = 'no';
    	$method = 'byFreq';
    }
    elseif ($text == 'super'){
    	
    	$thetext = "$server/miserables.txt";
    	$cutoff = 3;
    	$n = 2;
    	$punc = 'no';
    	$method = 'logLikelihood';
    
    }
    elseif ($text == 'super2'){
    	
    	$thetext = "$server/miserables.txt";
    	$cutoff = 3;
    	$n = 3;
    	$punc = 'no';
    	$method = 'byFreq';
    
    }

}
else {
   $thetext = $_POST['mytext'];
   $cutoff = $_POST['cutoff'];
   $n = $_POST['gram'];
   $data_name=$_POST['data_name'];
  // $punc = $_POST['punctuation'];
   $method = $_POST['method'] ;
   require 'config.php';
}
#echo $thetext;
$ngrams = array();
$previous = array('', '', '', '');
   $total = 0;
if ($method == 'byFreq'){
  byFrequency();
  $sql_data="INSERT INTO data (name,grams) VALUES ('$data_name','$n')";
  $data_query=mysqli_query($con,$sql_data);
  if (!$data_query) {
    echo '<div class="alert alert-danger">Error '.mysqli_error($con).'</div>';
  }else{
   // $s="SELECT "
  }
  $len = count($ngrams);
  echo "<h1>Ngrams Ranked by Frequency</h1>";
  echo "<p>Total number of tokens: $total   &nbsp;&nbsp;&nbsp; Types: $len</p>";
  arsort($ngrams, SORT_NUMERIC);
  echo "<table class='table'>
  <tr>
  <th>ngram</th>
  <th>count</th>
  <th>frequency</th>
  </tr>\n";
 // echo $total;
  foreach($ngrams as $gram =>$count){
     if ($count < $cutoff){
         break;
     }
     $freq = ($count * 100) / $total;
$sql_in="INSERT into ngram (text_id,grams,mode,percentage_freq) VALUES ('$data_name','$gram','$count','$freq')";
mysqli_query($con,$sql_in) or die('Error While Saving Tokens ');


     echo "<tr>
     <td>$gram</td>
     <td>$count</td>
     <td>$freq</td></tr>\n";
       
   }
       
      
       echo "</table>";
 
} 
else{
	$n = 2;
	byFrequency();
	$LOGGER = array();
	#echo "<p>OKAY BEFORE ARSORT</p>";
	arsort($ngrams, SORT_NUMERIC);
	$len = count($ngrams);
	#echo "<p>$len</p>";
	foreach($ngrams as $gram=>$k11){
	   if ($k11 < 3){
            break;
       }	
	   $words = preg_split('/\s+/', $gram);
	   #echo "<p>$words[1], $words[0], $gram</p>";
	   $k12 = $unigrams[$words[1]] - $k11;
	   $k21 = $unigrams[$words[0]] - $k11;
	   $k22 = $total + $k11 - $k12 - $k21;
	   $LOGGER[$gram] = logLikelihoodRatio($k11, $k12, $k21, $k22);
	   #$LOGGER[$gram] = ll($unigrams[$words[1]], $unigrams[$words[0]], $count, $total);
	}
	#echo "<p>$LOG</p>";
	
	arsort($LOGGER, SORT_NUMERIC);
	#$len = count($LOGGER);
	#echo "<p>$len</p>";;
	echo "<h1>Ngrams Ranked by Log Likelihood</h1>";
	echo "<p>Total number of tokens: $total   &nbsp;&nbsp;&nbsp; Types: $len</p>";
	echo "<table><tr><th>bigram</th><th>count</th><th>Log Likelihood</th></tr>\n";
    foreach($LOGGER as $gram =>$log){
    	  $count = $ngrams[$gram];
          echo "<tr><td>$gram</td><td>$count</td><td>$log</td></tr>\n";
       
       }
    echo "</table>";

    
}

 


	       #####
	      #####
         #####           END ANALYSIS FUNCTIONS
        #####
       #####

  
?>
		
			</div>
				<div class="row">
				
			</div>
		
		


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
