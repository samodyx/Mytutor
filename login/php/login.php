<?php
include '../../config.php';

session_start();
$username=$_POST["username"];
$password=$_POST["password"];


$sql="SELECT * from student where student_username='$username' AND student_password='$password'";
$result=mysqli_query($conn,$sql);

$row=mysqli_fetch_array($result,MYSQLI_ASSOC);

$count=mysqli_num_rows($result);
echo($count);

if($count>=1){
    header("location:../../studentDashboard/BS3/dashboard.html");
}

else{
    $sqllec="SELECT * from lecturer where lecturer_username='$username' AND lecturer_password='$password'";
    $resultlec=mysqli_query($conn,$sqllec);

    $rowlec=mysqli_fetch_array($resultlec,MYSQLI_ASSOC);

    $countlec=mysqli_num_rows($resultlec);

    if($countlec>=1){
    
        header("location:../../lectureDashboard/BS3/dashboard.html");
    }
    else{
        echo "<script type='text/javascript'>alert('Login Unsuccessful');location='../../login/login.html';</scrip>";
    }


}


?>