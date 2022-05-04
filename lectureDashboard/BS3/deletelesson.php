<?php
include_once 'config.php';
session_start();

$lecid=$_GET['id'];

$sql="DELETE FROM lesson WHERE lesson_id=$lecid";

mysqli_query($conn, $sql);


echo "Done";
// header("location:addlesson.php");
?>