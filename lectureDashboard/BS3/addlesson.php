<?php
include_once 'config.php';
if(isset($_POST['save']))
{	 
	 $course_name = $_POST['course_name'];
	 $lesson_name = $_POST['lesson_name'];
	//  $lesson_link = $_POST['lesson_link'];
	//  $lesson_materials = $_POST['lesson_materials'];
	 $sql = "INSERT INTO lesson(course_name,lesson_name)
	 VALUES ('$course_name','$lesson_name')";
	 if (mysqli_query($conn, $sql)) {
		die("New record created successfully !") ;
	 } else {
		echo "Error: " . $sql . "
" . mysqli_error($conn);
	 }
	 mysqli_close($conn);
}
?>