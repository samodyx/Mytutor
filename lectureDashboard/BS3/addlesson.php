<?php
include_once 'config.php';
if(isset($_POST['save']))
{	 
	 $course_name = $_POST['course_name'];
	 $lesson_link = $_POST['lesson_link'];
	 $course_name = $_POST['course_name'];
	 $lesson_materials = $_POST['lesson_materials'];
	 $sql = "INSERT INTO lesson(course_name,lessson_link,lesson_materials)
	 VALUES ('$course_name','$lessson_link','$lesson_materials')";
	 if (mysqli_query($conn, $sql)) {
		die("New record created successfully !") ;
	 } else {
		echo "Error: " . $sql . "
" . mysqli_error($conn);
	 }
	 mysqli_close($conn);
}
?>