
<?php
include_once 'config.php';
session_start();

if(isset($_POST['save']))
{	

    $uid=$_SESSION['student_id'];

    echo $uid;


     $student_id= $_SESSION["student_id"];
    $student_name = $_POST["name"]; 
    $student_username = $_POST["Username"]; 
    $student_password = $_POST["Password"]; 
    $student_email = $_POST["Email"]; 
    $student_conno = $_POST["Contact"];
    $student_birthday = $_POST["Birthday"];

	 $sql = "UPDATE student SET student_name='$student_name',student_username='$student_username',student_password='$student_password',student_email='$student_email',student_conno='$student_conno',student_birthday='$student_birthday' where student_id='27'";
	 if (mysqli_query($conn, $sql)) {
		echo("New record created successfully !") ;
	 } else {
		echo "Error: " . $sql . "
" . mysqli_error($conn);
	 }
	 mysqli_close($conn);
}
?>