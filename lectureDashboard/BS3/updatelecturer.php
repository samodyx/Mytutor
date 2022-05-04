
<?php
include_once 'config.php';
session_start();

if(isset($_POST['save']))
{	
    $lecturer_id= $_SESSION["lecturerid"];
    $lecturer_name = $_POST["name"]; 
    $lecturer_username = $_POST["Username"]; 
    $lecturer_password = $_POST["Password"]; 
    $lecturer_qualification = $_POST["Qualification"]; 
    $lecturer_description = $_POST["Description"]; 
    $lecturer_email = $_POST["Email"]; 
    $lecturer_conno = $_POST["Contact"];
	 $sql = "UPDATE lecturer SET lecturer_name='$lecturer_name',lecturer_username='$lecturer_username',lecturer_password='$lecturer_password',lecturer_qualification='$lecturer_qualification',lecturer_description='$lecturer_description',lecturer_email='$lecturer_email',lecturer_conno='$lecturer_conno' where lecturer_id='$lecturer_id'";
	 if (mysqli_query($conn, $sql)) {
		echo("New record created successfully !") ;
        header("location:studentlist.php");
	 } else {
		echo "Error: " . $sql . "
" . mysqli_error($conn);
	 }
	 mysqli_close($conn);
}
?>
<!-- $lecturer_name = $row["name"]; 
$lecturer_username = $row["Username"]; 
$lecturer_password = $row["Password"]; 
$lecturer_qualification = $row["Qualification"]; 
$lecturer_description = $row["Description"]; 
$lecturer_email = $row["Email"]; 
$lecturer_conno = $row["Conatct"]; -->