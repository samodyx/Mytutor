<?php
include_once 'config.php';
session_start();

$student_id=$_SESSION['student_id'];

$sql="DELETE FROM lecturer WHERE student_id=$student_id";

mysqli_query($conn, $sql);


echo "Done";
header("location:../index.php");
?>