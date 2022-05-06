<?php

$server = "localhost:3308";
$user = "root";
$pass = "mytutor@123";
$database = "mytutor";

$conn = mysqli_connect($server, $user, $pass, $database);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
session_start();



?>



<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8" />
	<link rel="icon" type="image/png" href="assets/img/update_logo_700x_NUf_icon.ico">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

	<title>Student Dashboard</title>

	<meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
    <meta name="viewport" content="width=device-width" />


   <link href="assets/css/bootstrap.min.css" rel="stylesheet" />

    <link href="assets/css/animate.min.css" rel="stylesheet"/>

    <link href="assets/css/light-bootstrap-dashboard.css?v=1.4.0" rel="stylesheet"/>


    <link href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
    <link href='http://fonts.googleapis.com/css?family=Roboto:400,700,300' rel='stylesheet' type='text/css'>
    <link href="assets/css/pe-icon-7-stroke.css" rel="stylesheet" />

</head>
<body>

<div class="wrapper">
    <div class="sidebar" data-color="blue" data-image="assets/img/studentdashboard.jpg">

     	<div class="sidebar-wrapper">
            <div class="logo">
            <label class="simple-text">  <?php
            
            echo "Welcome  ".$_SESSION['student_username'];
            ?>  </label>
            </div>

            <ul class="nav">
            <!-- <li class="active">
                <a href="table.php">
                    <i class="pe-7s-graph"></i>
                    <p>Course Progress</p>
                </a>
            </li> -->
            <li>
                <a href="user.php">
                    <i class="pe-7s-user"></i>
                    <p>User Profile</p>
                </a>
            </li>
            <li>
                <a href="table.php">
                    <i class="pe-7s-note2"></i>
                    <p>Course List</p>
                </a>
            </li>
            <li class="active">
                <a href="coursematerials.php">
                    <i class="pe-7s-folder"></i>
                    <p>Course Materials</p>
                </a>
            </li>
            <li >
                <a href="livelectures.php">  <!--update this link to Mytutor link--> 
                    <i class="pe-7s-video"></i>
                    <p>Live Lectures</p>
                </a>
            </li>
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


        <div class="content">
        <div class="container-fluid">
              <div class="row">
                <div class="col-md-12">
                  <div class="card">
                    <div class="header">
                      <h4 class="title">All Course Materials</h4>

                  </ul>
                    </div>
                    <div class="content table-responsive table-full-width">
                    <?php
                                        $result = mysqli_query($conn,"SELECT lesson.lesson_name, course.course_name, lesson.lesson_materials
                                        FROM lesson
                                        INNER JOIN course
                                        ON lesson.course_id=course.course_id;
                                        ");



                                    ?>
                                    <?php
                                    if (mysqli_num_rows($result) > 0) {
                                    ?>
                                    <table class='table table-bordered table-striped'>

                                                            <th>Lesson Name</th>
                                                            <th>Course Name</th>
                                                            <th>Lesson Materials</th>
                                                            <th colspan="1">Actions</th>

                          


                        <?php
                        
                        while($row = mysqli_fetch_array($result)) {
                        ?>
                        <tr>
                        <td><?php echo $row["lesson_name"]; ?></td>
                        <td><?php echo $row["course_name"]; ?></td>
                        <td><?php echo $row["lesson_materials"]; ?></td>
                        <td>  <a href="../../lectureDashboard/Code/uploads/pdf/<?php echo $row['lesson_materials']?>" class="btn btn-download" target="_blank">Download</a></td>


                        <?php
                     
                                }
                                ?>
                                </table>
                                <?php
                }
                else{
                echo "No lesson found";
                }
                ?>
                                          </div>
                  </div>
                </div>
              </div>
            </div>
        </div>


<footer class="footer">
          <div class="container-fluid">
            <nav class="pull-left">
             </nav>
            <p class="copyright pull-right">
              &copy;
              <script>
                document.write(new Date().getFullYear());
              </script>
              <a href="../index.php">Mytutor</a>, made with
              love for a better web
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
