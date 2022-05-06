<?php
include_once 'config.php';
session_start();

$id = $_GET["id"];

$sql="DELETE FROM lecturer WHERE lecturer_id=$id";

if ($conn->query($sql) === TRUE) {
  
    echo "<script type='text/javascript'>alert('Lecture has been deleted successfully');</script>";
  
  } else {
    echo "<script type='text/javascript'>alert('Error updating record: ');</script>" . $conn->error;
  }
  
  ?>