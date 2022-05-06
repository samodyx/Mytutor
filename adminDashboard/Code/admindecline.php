<?php
 

$server = "localhost:3308";
$user = "root";
$pass = "mytutor@123";
$database = "mytutor";

$conn = mysqli_connect($server, $user, $pass, $database);

if (!$conn) {
    die("<script>alert('Connection Failed.')</script>");
}
session_start();

$id = $_GET["id"];


// $query = "SELECT * FROM lecturer WHERE status ='Pending' ORDER BY lecturer_id ASC";
// $result = mysqli_query($conn,$query);
// while($row - mysqli_fetch_array($result));


$sql = "UPDATE lecturer SET `status`='Decline' WHERE lecturer_id=$id";

if ($conn->query($sql) === TRUE) {
  
  echo "<script type='text/javascript'>alert('Lecture has been declined successfully');</script>";

} else {
  echo "<script type='text/javascript'>alert('Error updating record: ');</script>" . $conn->error;
}

?>