<?php
include_once 'config.php';
if(isset($_POST['save']))
{	 
	 $course_name = $_POST['course_name'];
	 $course_description = $_POST['course_description'];
	//  $course_image = $_POST['course_image'];
	 $course_type = $_POST['course_type'];
     $course_price = $_POST['course_price'];
	 $sql = "INSERT INTO course(course_name,course_description,course_type,course_price)
	 VALUES ('$course_name','$course_description','$course_type','$course_price')";
	 if (mysqli_query($conn, $sql)) {
		die("New record created successfully !") ;
	 } else {
		echo "Error: " . $sql . "
" . mysqli_error($conn);
	 }
	 mysqli_close($conn);
}
?>