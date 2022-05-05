<?php
include_once 'config.php';
session_start();

$courseid=$_GET['id'];

$sql="DELETE FROM course WHERE course_id=$courseid";

mysqli_query($conn, $sql);


echo "Done"
?>