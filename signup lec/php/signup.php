<?php
include '../../config.php';


$fullname=$_POST["fullname"];
$username=$_POST["username"];
$qualification=$_POST["qualification"];
$description=$_POST["description"];
$email=$_POST["email"];
$contactnumber=$_POST["contactnumber"];
$password=$_POST["password"];


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

$sql="INSERT INTO lecturer(lecturer_name,lecturer_username,lecturer_password,lecturer_qualification,lecturer_description,lecturer_email,lecturer_conno) VALUES ('$fullname','$username','$password','$qualification','$description','$email','$contactnumber')";


if(mysqli_query($conn,$sql)){
    
    $receiver = $email;
    $subject = "Thank you for registering with Mytutor";
    $body = "
    Dear ".$username."
    
    Thank you for completing your registration with Mytutor.
    
    This email serves as a confirmation that your account is activated and that you are officially a part of the Mytutor.
    Enjoy!
    
    Regards,
    The Mytutor team";
    $sender = "info.mytutor2020@gmail.com";
    if(mail($receiver, $subject, $body, $sender)){
        echo "Email sent successfully to $receiver";
    }
    echo "<script type='text/javascript'>alert('Registration Completed Successfully');location='../../login/login.html';</script>";

}

else{
    echo "<script type='text/javascript'>alert('Registration Completed Unsuccessfully'); location'../signup.html';</script>";
}




?>