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

$sql = "SELECT * FROM course";
$result = $conn->query($sql);
$result2 = $conn->query($sql);
session_start();


?>


<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <link
      rel="icon"
      type="image/png"
      href="assets/img/update_logo_700x_NUf_icon.ico"
    />
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

    <title>Lecture Dashboard</title>

    <meta
      content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0"
      name="viewport"
    />
    <meta name="viewport" content="width=device-width" />

    <!-- Bootstrap core CSS     -->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet" />

    <!-- Animation library for notifications   -->
    <link href="assets/css/animate.min.css" rel="stylesheet" />

    <!--  Light Bootstrap Table core CSS    -->
    <link
      href="assets/css/light-bootstrap-dashboard.css?v=1.4.0"
      rel="stylesheet"
    />


    <!--     Fonts and icons     -->
    <link
      href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css"
      rel="stylesheet"
    />
    <link
      href="http://fonts.googleapis.com/css?family=Roboto:400,700,300"
      rel="stylesheet"
      type="text/css"
    />
    <link href="assets/css/pe-icon-7-stroke.css" rel="stylesheet" />
  </head>
  <body>
    <div class="wrapper">
      <div
        class="sidebar"
        data-color="blue"
        data-image="assets/img/lecturedashboard.jpg"
      >
      <div class="sidebar-wrapper">
          <div class="logo">
            <label class="simple-text">  <?php
              
                echo "Welcome  ".$_SESSION['admin_username'];
                ?>  </label>
          </div>

          <ul class="nav">
            <li class="#">
              <a href="allstudent.php">
                <i class="pe-7s-users"></i>
                <p>Students</p>
              </a>
            

            <li class="#">
              <a href="alllectures.php">
                <i class="pe-7s-users"></i>
                <p>Lecturers</p>
              </a>
            </li>
            <li>
              <a href="#">
                <i class="pe-7s-notebook"></i>
                <p>Courses</p>
              </a>
            </li>
            <li>
              <a href="#">
                <i class="pe-7s-note"></i>
                <p>Lessons</p>
              </a>
            </li>

            <li class="active">
              <a href="#">
                <!--update this link to Mytutor link-->
                <i class="pe-7s-graph2"></i>
                <p>Charts</p>
              </a>
            </li>
          </ul>
        </div>
      </div>
      
      <div class="main-panel">
        Nav Bar
        <nav class="navbar navbar-default navbar-fixed">
          <div class="container-fluid">
            <div class="navbar-header">
        
            </div>
            <div class="collapse navbar-collapse">

              <ul class="nav navbar-nav navbar-right">
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
<!-- ADD COURSES -->
        <div class="content">
          <div class="container-fluid">
            <div class="row">
              <form method="post" action="uploadcourseimage.php" enctype="multipart/form-data">
              <div class="col-md-12">
                <div class="card">
                  <div class="header">
                    <h4 class="title">Add Course</h4>
                  </div>
                  <div class="content table-responsive table-full-width">
                    <table class="table table-hover table-striped">
                      <thead>
                        <!-- <th>Course ID</th> -->
                        <th>Course Name</th>
                        <th>Course Description</th>
                        <th>Course Banner</th>
                        <th>Course Type</th>
                        <th>Course Price</th>
                        <th colspan="1">Actions</th>
                      </thead>
                      <tbody>
                        <tr>
                          <td><input type="text" name="course_name" ></td>
                          <td><input type="text" name="course_description" ></td>
                          <td><div class="form-group" >

                            <input type="file" class="form-control-file" name="course_image">
                            </div>
                          </td>
                                                   
                          <td><input type="text" name="course_type"></td>
                          <td><input type="text" name="course_price"></td>
                          <td>
                           <button <input type="submit" name="save" value="submit">Add Course</button>
                          </td>
                        </tr>
                      </tbody>
                    </table>
                  
                  </div>
                </div>
              
              </div>
            </form>
            </div>
          </div>

          <div class="content">
            <div class="container-fluid">
              <div class="row">
                <div class="col-md-12">
                  <div class="card">
                    <div class="header">
                      <h4 class="title">All Courses</h4>
                   </div>
                    <div class="content table-responsive table-full-width">
                    <?php
$result = mysqli_query($conn,"SELECT lesson_id,course_name,lesson_link,lesson_materials FROM lesson");
?>
<?php
if (mysqli_num_rows($result) > 0) {
?>
<table class='table table-bordered table-striped'>
<th>Lesson ID</th>
                          <th>Lesson Name</th>
                          <th>Course Name</th>
                          <th colspan="2">Actions</th>
<?php
$i=0;
while($row = mysqli_fetch_array($result)) {
?>
<tr>
<td><?php echo $row["lesson_id"]; ?></td>
<td><?php echo $row["course_name"]; ?></td>
<td><?php echo $row["lesson_link"]; ?></td>
<td><?php echo $row["lesson_materials"]; ?></td>
<td>
                              <button class="btn btn-warning">Delete</button>
                              <button class="btn btn-info">Update</button>
                            </td>
</tr>

<?php
$i++;
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
        </div>

        <footer class="footer">
          <div class="container-fluid">
            <nav class="pull-left">
              <ul>
                <li>
                  <a href="#"> Home </a>
                </li>
                <li>
                  <a href="#"> Company </a>
                </li>
                <li>
                  <a href="#"> Portfolio </a>
                </li>
                <li>
                  <a href="#"> Blog </a>
                </li>
              </ul>
            </nav>
            <p class="copyright pull-right">
              &copy;
              <script>
                document.write(new Date().getFullYear());
              </script>
              <a href="../index.html">Mytutor</a>, made with love for a better
              web
            </p>
          </div>
        </footer>
      </div>
    </div>
  </body>

  <!--   Core JS Files   -->
  <script src="assets/js/jquery.3.2.1.min.js" type="text/javascript"></script>
  <script src="assets/js/bootstrap.min.js" type="text/javascript"></script>

  <!--  Charts Plugin -->
  <script src="assets/js/chartist.min.js"></script>

  <!--  Notifications Plugin    -->
  <script src="assets/js/bootstrap-notify.js"></script>

  <!--  Google Maps Plugin    -->
  <script
    type="text/javascript"
    src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"
  ></script>

  <!-- Light Bootstrap Table Core javascript and methods for Demo purpose -->
  <script src="assets/js/light-bootstrap-dashboard.js?v=1.4.0"></script>

  <!-- Light Bootstrap Table DEMO methods, don't include it in your project! -->
  <script src="assets/js/demo.js"></script>
</html>
