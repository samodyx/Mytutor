<?php
include '../../config.php';


$fullname=$_POST["fullname"];
$username=$_POST["username"];
$email=$_POST["email"];
$contactnumber=$_POST["contactnumber"];
$dob=$_POST["dob"];
$password=$_POST["password"];


$sql="INSERT INTO student(student_username,student_name,student_conno,student_email,student_birthday,student_password) VALUES ('$username','$fullname','$contactnumber','$email','$dob','$password')";


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
else{
    echo "Sorry, failed while sending mail!";
}

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