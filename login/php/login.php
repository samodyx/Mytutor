<?php
include '../../config.php';

session_start();
$username=$_POST["username"];
$password=$_POST["password"];


$sql="SELECT * from student where student_username='$username' AND student_password='$password'";
$result=mysqli_query($conn,$sql);

$row=mysqli_fetch_array($result,MYSQLI_ASSOC);

$count=mysqli_num_rows($result);

if($count>=1){
    $sqllec="SELECT * from student where student_username='$username' AND student_password='$password'";
    $resultlec=mysqli_query($conn,$sqllec);

    $rowlec=mysqli_fetch_array($resultlec,MYSQLI_ASSOC);

    $countlec=mysqli_num_rows($resultlec);

    if($countlec>=1){

        $sqlQ="Select * From student where student_username='$username' AND student_password='$password'";

        $res=$conn->query($sqlQ);

        $userid="";

        while($row=$res->fetch_assoc()){
            $userid= $row['student_id'];
        }

        
        
        $_SESSION['student_id']=$userid;
    $_SESSION['student_username']=$username;
    header("location:../../studentDashboard/BS3/dashboard.php");
    
}
}

else{
    $sqllec="SELECT * from lecturer where lecturer_username='$username' AND lecturer_password='$password'";
    $resultlec=mysqli_query($conn,$sqllec);

    $rowlec=mysqli_fetch_array($resultlec,MYSQLI_ASSOC);

    $countlec=mysqli_num_rows($resultlec);

    if($countlec>=1){

        $sqlQ="Select * From lecturer where lecturer_username='$username' AND lecturer_password='$password'";

        $res=$conn->query($sqlQ);

        $userid="";

        while($row=$res->fetch_assoc()){
            $userid= $row['lecturer_id'];
        }

        
        
        $_SESSION['lecturerid']=$userid;
        $_SESSION['lecturer_username']=$username;
        header("location:../../lectureDashboard/BS3/dashboard.php");
        
    }
    else{
        echo "<script type='text/javascript'>alert('Login Unsuccessful');location='../../login/login.html';</scrip>";
    }


}


?>