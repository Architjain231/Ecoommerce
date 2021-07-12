<?php
session_start();
if(!isset($_POST['log']))
    header("location:index.php");
session_destroy();    
header("location:index.php");
?>