		<nav class="navbar navbar-default navbar-fixed-top">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<a class="navbar-brand point" id="menu-toggle"><i id="menu-toggle" class="fa fa-bars" aria-hidden="true"></i></a>
				<a class="navbar-brand" href="home.php"> Keystroke Dashboard</a>
			</div>
			<div class="container-fluid">
				<div id="navbar" class="navbar-collapse collapse">
					<ul class="nav navbar-nav">
						<li class="dropdown ">
						  <a href="#" class="dropdown-toggle fa fa-plus" data-toggle="dropdown"> Add Questions </span></a>				
						  <ul class="dropdown-menu" role="menu">
			               <li><a href="add_qn.php">General Quentions</a></li>
							<li><a href="add_vid_qn.php">Video Quentions</a></li>
			              </ul>                
			            </li>
						<li>
							<a href="students.php" class="fa fa-users">  View Student's Work</a>
						</li>
						<li class="dropdown ">
						  <a href="#" class="dropdown-toggle fa fa-plus" data-toggle="dropdown">  Add Tests</span></a>				
						  <ul class="dropdown-menu" role="menu">
			               <li><a href="tests.php">General Tests</a></li>
							<li><a href="vid_tests.php">Video Tests</a></li>
			              </ul>                
			            </li>
						<li>
							<a href="admins.php" class="fa fa-user-plus"> Add Admin</a>
						</li>
						<li>
							<a href="ngram.php" class="fa fa-line-chart"> Ngram Analyser</a>
						</li>
					
					
					</ul>
					<!-- <div class="col-sm-3 col-md-3">
						<form class="navbar-form" role="search">
							<div class="input-group">
								<input type="text" class="form-control" placeholder="Rechercher" name="q">
								<div class="input-group-btn">
									<button class="btn btn-default" type="submit"><i class="glyphicon glyphicon-search"></i></button>
								</div>
							</div>
						</form>
					</div> -->
					<ul class="navbar-form navbar-right">
						
						  <div class="btn-group show-on-hover">
        <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown">
            <i class="fa fa-user"></i> Profile
          </button>
          <ul class="dropdown-menu" role="menu">
            <li><a href="#"><?php echo $admin['full_name'];?></a></li>
            <!--
            <li><a href="#">Another action</a></li>
            <li><a href="#">Something else here</a></li>
            <li class="divider"></li> -->
            <li><a href="logout.php">Logout</a></li>
          </ul>
        </div>
					</ul>
				</div>
			</div>
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
