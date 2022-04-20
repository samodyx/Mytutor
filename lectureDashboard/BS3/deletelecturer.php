<?php
include_once 'config.php';
session_start();

$lecturerid=$_SESSION['lecturerid'];

$sql="DELETE FROM lecturer WHERE lecturer_id=$lecturerid";

mysqli_query($conn, $sql);


echo "Done"
?>