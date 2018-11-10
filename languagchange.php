<?php
session_start();
$_SESSION['language']=$_POST['language'];
$actual_link = $_POST['rquesturl'];
header("Location:$actual_link");
 

?>