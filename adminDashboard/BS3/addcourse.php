<?php 
include_once 'config.php';

	// echo "<pre>";
	// print_r($_FILES['course_image']);
	// echo "</pre>";

	$img_name = $_FILES['course_image']['name'];
	$img_size = $_FILES['course_image']['size'];
	$tmp_name = $_FILES['course_image']['tmp_name'];
	$error = $_FILES['course_image']['error'];
 
    $course_name = $_POST['course_name'];
    $course_description = $_POST['course_description'];
   //  $course_image = $_POST['course_image'];
    $course_type = $_POST['course_type'];
    $course_price = $_POST['course_price'];
	if ($error === 0) {
		if ($img_size > 500000) {
			$em = "Sorry, your file is too large.";
		    echo $em;
		}else {
			$img_ex = pathinfo($img_name, PATHINFO_EXTENSION);
			$img_ex_lc = strtolower($img_ex);

			$allowed_exs = array("jpg", "jpeg", "png"); 

			if (in_array($img_ex_lc, $allowed_exs)) {
				$new_img_name = uniqid("IMG", true).'.'.$img_ex_lc;
				$img_upload_path = '../../lectureDashboard/BS3/uploads/'.$new_img_name;
				move_uploaded_file($tmp_name, $img_upload_path);

				// Insert into Database
				// $sql = "INSERT INTO images(image_url) 
				//         VALUES('$new_img_name')";
				// mysqli_query($conn, $sql);
				// header("Location: view.php");
                $sql = "INSERT INTO course(course_name,course_description,course_type,course_price,course_image)
                VALUES ('$course_name','$course_description','$course_type','$course_price','$new_img_name')";
                if (mysqli_query($conn, $sql)) {
                   echo "Done !";
				                  } 
                else{
                    echo("Error description: " . $conn -> error);
                }


			}else {
				$em = "You can't upload files of this type";
                echo $em;
			}
		}
	}else {
		$em = "unknown error occurred!";
        echo $em;
	}