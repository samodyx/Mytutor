<?php 

$server = "localhost:3308";
$user = "root";
$pass = "mytutor@123";
$database = "mytutor";

$conn = mysqli_connect($server, $user, $pass, $database);

if (!$conn) {
    die("<script>alert('Connection Failed.')</script>");
}

session_start();

$sql = "SELECT * FROM student";
if ($result=mysqli_query($conn,$sql)) {
$rowcountstudent=mysqli_num_rows($result); 
}
$sql = "SELECT * FROM course";
if ($result=mysqli_query($conn,$sql)) {
$rowcountcourse=mysqli_num_rows($result);
}
$sql = "SELECT * FROM lecturer";
if ($result=mysqli_query($conn,$sql)) {
$rowcountlecture=mysqli_num_rows($result);
}
?>



<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8" />
	<link rel="icon" type="image/png" href="assets/img/update_logo_700x_NUf_icon.ico">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

	<title>Admin Dashboard</title>

	<meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
    <meta name="viewport" content="width=device-width" />


    <!-- Bootstrap core CSS     -->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet" />

    <!-- Animation library for notifications   -->
    <link href="assets/css/animate.min.css" rel="stylesheet"/>

    <!--  Light Bootstrap Table core CSS    -->
    <link href="assets/css/light-bootstrap-dashboard.css?v=1.4.0" rel="stylesheet"/>


    <!--     Fonts and icons     -->
    <link href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
    <link href='http://fonts.googleapis.com/css?family=Roboto:400,700,300' rel='stylesheet' type='text/css'>
    <link href="assets/css/pe-icon-7-stroke.css" rel="stylesheet" />
</head>
<body>

<div class="wrapper">
      <div
        class="sidebar"
        data-color="azure"
        data-image="assets/img/adminDashboard.png"
      >

        <div class="sidebar-wrapper">
          <div class="logo">
            <label class="simple-text">  <?php
              
                echo "Welcome  ".$_SESSION['admin_username'];
                ?>  </label>
          </div>

          <ul class="nav">
            <li class="active">
              <a href="allstudent.php">
                <i class="pe-7s-users"></i>
                <p>Students</p>
              </a>
            </li>

            <li>
              <a href="alllectures.php">
                <i class="pe-7s-users"></i>
                <p>Lecturers</p>
              </a>
            </li>
            <li>
              <a href="course.php">
                <i class="pe-7s-notebook"></i>
                <p>Courses</p>
              </a>
            </li>
            <!-- <li>
              <a href="#">
                <i class="pe-7s-note"></i>
                <p>Lessons</p>
              </a>
            </li> -->

            <!-- <li>
              <a href="../admin reports/reports/course.php">
                
                <i class="pe-7s-graph2"></i>
                <p>Charts</p>
              </a>
            </li> -->
          </ul>
        </div>
    </div>

    <div class="main-panel">
    <nav class="navbar navbar-default navbar-fixed">
          <div class="container-fluid">
            <div class="navbar-header">
        
            </div>
            <div class="collapse navbar-collapse">

              <ul class="nav navbar-nav navbar-right">
              <li>
                  <a href="../../index.php">
                    <p>Home Page</p>
                  </a> 
                </li>
                 <li>
                  <a href="logout.php">
                    <p>Log out</p>
                  </a> 
                </li>
                <li class="separator hidden-lg hidden-md"></li>
              </ul>
            </div>
          </div>
        </nav>
     
          <div class="container-fluid">
            <div class="container">
              <div class="row">
                <div class="col-lg-4 col-sm-6">
                  <div class="card-box bg-blue">
                    <div class="inner">
                      <h3> <label class="simple-text">  <?php
             echo $rowcountstudent;
              ?>  </label></h3>
                      <p>Students Enrolled</p>
                    </div>
                    <div class="icon">
                      <i class="fa faIcon fa-graduation-cap" aria-hidden="true"></i>
                    </div>
                     </div>
                </div>

                <div class="col-lg-4 col-sm-6">
                  <div class="card-box bg-green">
                    <div class="inner">
                    <h3> <label class="simple-text">  <?php
              echo $rowcountlecture;
              ?>  </label></h3>
                      <p>Lecturers Registered</p>
                    </div>
                    <div class="icon">
                    <i class="fa faIcon fa-users" aria-hidden="true"></i>
                    </div>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6">
                  <div class="card-box bg-orange">
                    <div class="inner">
                    <h3> <label class="simple-text">  <?php
                          echo $rowcountcourse;
              ?>  </label></h3>
                      <p>Number of Courses</p>
                    </div>
                    <div class="icon">
                    <i class="fa faIcon fa-book" aria-hidden="true"></i>
                    </div>
                   </div>
                </div>
              </div>
              <div class="row">
                <div class="col-lg-3 col-sm-6">
                 </div>
              </div>
            </div>
           </div>
        
        <script type="text/javascript">
$(document).ready(function(){
$('[data-toggle="tooltip"]').tooltip();   
});
</script>
</head>
<body>
<div class="bs-example">
<div class="container">
<div class="row">
<div class="col-md-12">
<div class="page-header clearfix">
<h2 class="pull-left">Student List</h2>
</div>
<?php
$result = mysqli_query($conn,"SELECT * FROM student");
?>
<?php
if (mysqli_num_rows($result) > 0) {
?>
<table class='table table-bordered table-striped'>
<tr>
<td>ID</td>
<td>Name</td>
<td>Email </td>
<td>Contact Number</td>
</tr>
<?php
$i=0;
while($row = mysqli_fetch_array($result)) {
?>
<tr>
<td><?php echo $row["student_id"]; ?></td>
<td><?php echo $row["student_name"]; ?></td>
<td><?php echo $row["student_email"]; ?></td>
<td><?php echo $row["student_conno"]; ?></td>
</tr>
<?php
$i++;
}
?>
</table>
<?php
}
else{
echo "No result found";
}
?>

        <footer class="footer">
            <div class="container-fluid">
                <nav class="pull-left">
                    <ul>
                        <li>
                            <a href="#">
                                Home
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                Company
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                Portfolio
                            </a>
                        </li>
                        <li>
                            <a href="#">
                               Blog
                            </a>
                        </li>
                    </ul>
                </nav>
                <p class="copyright pull-right">
                    &copy; <script>document.write(new Date().getFullYear())</script> <a href="../index.php">Mytutor</a>, made with love for a better web
                </p>
            </div>
        </footer>


    </div>
</div>


</body>

    <!--   Core JS Files   -->
    <script src="assets/js/jquery.3.2.1.min.js" type="text/javascript"></script>
	<script src="assets/js/bootstrap.min.js" type="text/javascript"></script>




</html>
