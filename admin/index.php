<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <!-- This file has been downloaded from Bootsnipp.com. Enjoy! -->
    <title>Keystroke Test Admin</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="res/bootstrap.min.css" rel="stylesheet">
    <style type="text/css">
        @import url(http://fonts.googleapis.com/css?family=Roboto:400);
body {
  background-color:#fff;
  -webkit-font-smoothing: antialiased;
  font: normal 14px Roboto,arial,sans-serif;
}

.container {
    padding: 25px;
    position: fixed;
}

.form-login {
    background-color: #EDEDED;
    padding-top: 10px;
    padding-bottom: 20px;
    padding-left: 20px;
    padding-right: 20px;
    border-radius: 15px;
    border-color:#d2d2d2;
    border-width: 5px;
    box-shadow:0 1px 0 #cfcfcf;
}

h4 { 
 border:0 solid #fff; 
 border-bottom-width:1px;
 padding-bottom:10px;
 text-align: center;
}

.form-control {
    border-radius: 10px;
}

.wrapper {
    text-align: center;
}

    </style>
    <script src="res/jquery-1.11.1.min.js"></script>
    <script src="res/bootstrap.min.js"></script>
</head>
<body>

<!--Pulling Awesome Font -->
<link href="res/font-awesome.min.css" rel="stylesheet">

<div class="container">
    <div class="row">
        <div class="col-md-offset-5 col-md-3">
            <div class="form-login">
            <h4>Welcome back.</h4>
            <form method="POST" action="login.php">
            <input type="text" id="userName" name="username" class="form-control input-sm chat-input" placeholder="username" />
            </br>
            <input type="password" id="userPassword" name="password" class="form-control input-sm chat-input" placeholder="password" />
            </br>
            <div class="wrapper">
            <span class="group-btn">     
                <button type="submit" class="btn btn-primary btn-md">login</button>
            </span>
            </div>
            </form>
            </div>
        
        </div>
    </div>
</div>
<script type="text/javascript">

</script>
</body>
</html>
