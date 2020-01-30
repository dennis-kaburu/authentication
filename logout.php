<?php
session_start();
unset($_SESSION['keystroke_u']);
session_destroy();
header("location:index.php");