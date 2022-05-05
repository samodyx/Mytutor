<?php
include 'config.php';


$username=$_POST["username"];
$email=$_POST["email"];
$coursename=["coursename"];

$sql="INSERT INTO course_enrollement(student_id,course_id,student_username,student_email) VALUES ('24','21','$username','$email')";


if(mysqli_query($conn,$sql)){
    
$receiver = $email;
$subject = "You have successfully Enrolled at Mytutor";
$body = "
Dear ".$username."

You have sucessfully enrolled to at  Mytutor.

This email serves as a confirmation that you have enroll to the above mentioned course.
Happy Learning!

Regards,
The Mytutor team";
$sender = "info.mytutor2020@gmail.com";
if(mail($receiver, $subject, $body, $sender)){
    // echo "Email sent successfully to $receiver";
    echo "
    <script type='text/javascript'>
        alert('Registration Completed Successfully');
       
    </script>";
}
else{
    echo "Sorry, failed while sending mail!";
}

   

}

else{
    echo "<script type='text/javascript'>
        alert('Registration not Successfull!');
    </script>";
}




?>