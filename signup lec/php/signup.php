<?php
include '../../config.php';


$fullname=$_POST["fullname"];
$username=$_POST["username"];
$qualification=$_POST["qualification"];
$description=$_POST["description"];
$email=$_POST["email"];
$contactnumber=$_POST["contactnumber"];
$password=$_POST["password"];
$course=$_POST["course_name"];

$lecturerid="";

/*INSERT INTO `mytutor`.`student`
INSERT INTO `mytutor`.`ecturer`
(`lecturer_id`,
`lecturer_name`,
`lecturer_username`,
`lecturer_password`,
`lecturer_qualification`,
`lecturer_description`,
`lecturer_email`,
`lecturer_conno`)
VALUES
(<{lecturer_id: }>,
<{lecturer_name: }>,
<{lecturer_username: }>,
<{lecturer_password: }>,
<{lecturer_qualification: }>,
<{lecturer_description: }>,
<{lecturer_email: }>,
<{lecturer_conno: }>);

*/
// $option = array("cost=>4");
// $hashpassword = password_hash($password,PASSWORD_BCRYPT,$option);
// $hashed_password = password_hash($password, PASSWORD_DEFAULT);
$sql="INSERT INTO lecturer(lecturer_name,lecturer_username,lecturer_password,lecturer_qualification,lecturer_description,lecturer_email,lecturer_conno,lecturer_course) VALUES ('$fullname','$username','$password','$qualification','$description','$email','$contactnumber','$course')";



$lecid= "SELECT * FROM lecturer ORDER BY lecturer_id DESC LIMIT 1";

$result = $conn->query($lecid);

if(mysqli_query($conn,$sql)){


    
    

    while($row = mysqli_fetch_assoc($result)) {
        $lecturerid = $row["lecturer_id"]; 
    }

    $sqlLecCourses="INSERT INTO lecturercourses(lecturer_id,course_id) VALUES ('$lecturerid','$course')";

    if(mysqli_query($conn,$sqlLecCourses)){
        echo "<script type='text/javascript'>alert('Registration Completed Successfully and Your account is pending for approval');location='../../login/login.html';</script>";
    }






}

else{
    echo "<script type='text/javascript'>alert('Registration Completed Unsuccessfully'); location'../signup.html';</script>";
}




?>