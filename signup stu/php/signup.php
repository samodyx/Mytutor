<?php
include '../../config.php';


$fullname=$_POST["fullname"];
$username=$_POST["username"];
$email=$_POST["email"];
$contactnumber=$_POST["contactnumber"];
$dob=$_POST["dob"];
$password=$_POST["password"];


/*INSERT INTO `mytutor`.`student`
(`student_id`,
`student_username`,
`student_name`,
`student_conno`,
`student_email`,
`student_birthday`,
`student_password`)
VALUES
(<{student_id: }>,
<{student_username: }>,
<{student_name: }>,
<{student_conno: }>,
<{student_email: }>,
<{student_birthday: }>,
<{student_password: }>);
*/

$sql="INSERT INTO student(student_username,student_name,student_conno,student_email,student_birthday,student_password) VALUES ('$username','$fullname','$contactnumber','$email','$dob','$password')";


if(mysqli_query($conn,$sql)){
    echo "
        <script type='text/javascript'>
            alert('Registration Completed Successfully');
            window.location.href = 'http://localhost/Mytutor/signup%20stu/signup.html'
        </script>";

}

else{
    echo "<script type='text/javascript'>
        alert('Registration not Successfull!');
        window.location.href = 'http://localhost/Mytutor/signup%20stu/signup.html'
    </script>";
}




?>