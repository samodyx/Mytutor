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
    header("location:../../studentDashboard/Code/table.php");
    
}
else{
    echo "<script type='text/javascript'>alert('One of entered elements are wrong! Please check the username or password and try again!!');</script>";

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
        $status="";

        while($row=$res->fetch_assoc()){
            $status=$row['status'];
            $userid= $row['lecturer_id'];
    
        }if($status=="Pending"){
            header("location:../loginnotapproved.html");
        
        }elseif($status=="Decline"){

            header("location:../logindecline.html");
        }
        
        else{
            header("location:../../lectureDashboard/Code/studentlist.php");
        }

        
        
        $_SESSION['lecturerid']=$userid;
        $_SESSION['lecturer_username']=$username;
        // header("location:../../lectureDashboard/Code/studentlist.php");
        
    }
    
    else{

        $sqllec="SELECT * from admin where admin_username='$username' AND admin_password='$password'";
    $resultlec=mysqli_query($conn,$sqllec);

    $rowlec=mysqli_fetch_array($resultlec,MYSQLI_ASSOC);

    $countlec=mysqli_num_rows($resultlec);

    if($countlec>=1){

        $sqlQ="Select * From admin where admin_username='$username' AND admin_password='$password'";

        $res=$conn->query($sqlQ);

        $userid="";

        while($row=$res->fetch_assoc()){
            $userid= $row['admin_id'];
        }

        
        
        $_SESSION['adminid']=$userid;
        $_SESSION['admin_username']=$username;
        header("location:../../adminDashboard/Code/allstudent.php");
    }
    
    else{
        echo "<script type='text/javascript'>alert('One of entered elements are wrong! Please check the username or password and try again!!');</script>";
    
    }
    
    
    {
        echo "<script type='text/javascript'>alert('Login Unsuccessful');location='../../login/login.html';</script>";
    }


    }
}

?>