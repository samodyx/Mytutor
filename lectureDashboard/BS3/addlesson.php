<?php
include_once 'config.php';
if(isset($_POST['save']))
{	 
	 $course_id = $_POST['course_name'];
	 $lesson_name = $_POST['lesson_name'];
	//  $lesson_link = $_POST['lesson_link'];
	//  $lesson_materials = $_POST['lesson_materials'];


	 $file = $_FILES['filePDF']['name'];
	 $file_loc = $_FILES['filePDF']['tmp_name'];
	 $file_size = $_FILES['filePDF']['size'];
	 $file_type = $_FILES['filePDF']['type'];
	 $folder="uploads/pdf/";
 
	 // new file size in KB
	//  $new_size = $file_size/1024;  
	 // new file size in KB
 
	 // make file name in lower case
	 $new_file_name = strtolower($file);
	 // make file name in lower case
 
	 $final_file=str_replace(' ','-',$new_file_name);
 
	 if(move_uploaded_file($file_loc,$folder.$final_file))
	 {
	 $sql = "INSERT INTO lesson(course_id,lesson_name,lesson_materials,course_name)
	 VALUES ('$course_id','$lesson_name','$final_file',$course_id)";
	 if (mysqli_query($conn, $sql)) {
		// die("New record created successfully !") ;
	 } else {
		echo "Error: " . $sql . "
" . mysqli_error($conn);
	 }
		 if (mysqli_query($conn,$sql));
		 ?>
		 <script>
		 alert('successfully uploaded');
		header("location: lessons.php");
		 </script>
		 <?php
	 }
	 else
	 {
		 ?>
		 <script>
		 alert('error while uploading file');
		 // window.location.href='index.php?fail';
		 </script>
		 <?php
	 }
}
?>