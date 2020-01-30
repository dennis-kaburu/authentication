<?php
session_start();
unset($_SESSION['admin_key']);
session_destroy();
header("location:index.php");