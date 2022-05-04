<?php
include_once 'config.php';
session_start();

$courseid=$_SESSION['course_id'];

$sql="DELETE FROM course WHERE course_id=$courseid";

mysqli_query($conn, $sql);


echo "Done"
?>