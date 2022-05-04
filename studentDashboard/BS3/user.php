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

$uid=$_SESSION['student_id'];

$sql = "SELECT * FROM student WHERE student_id=$uid";
$result = $conn->query($sql);





  while($row = $result->fetch_assoc()) {
    $student_name = $row["student_name"]; 
$student_username = $row["student_username"]; 
$student_email = $row["student_email"]; 
$student_conno = $row["student_conno"];
$student_birthday = $row["student_birthday"];
  }

$conn->close();
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

    <title>Student Dashboard</title>

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

    <!--  CSS for Demo Purpose, don't include it in your project     -->
    <link href="assets/css/demo.css" rel="stylesheet" />

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
        data-image="assets/img/studentdashboard.jpg"
      >
        <div class="sidebar-wrapper">
          <div class="logo">
          <label class="simple-text">  <?php
            echo "Welcome  ".$_SESSION['student_username'];
            ?>  </label>
          </div>

          <ul class="nav">
            <li>
              <a href="table.php">
                <i class="pe-7s-users"></i>
                <p>Students</p>
              </a>
            </li>
            <li class="active">
              <a href="user.php">
                <i class="pe-7s-user"></i>
                <p>User Profile</p>
              </a>
            </li>
           
            <li>
              <a href="#">
                <i class="pe-7s-note"></i>
                <p>Lessons Materials</p>
              </a>
            </li>
            <li>
              <a href="#">
                <!--update this link to Mytutor link-->
                <i class="pe-7s-video"></i>
                <p>Live Lectures</p>
              </a>
            </li>
            <li>
              <a href="lessons.php">
                <i class="pe-7s-notebook"></i>
                <p>Lessons</p>
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
                    <h4 class="title">Edit Profile</h4>
                  </div>
                  <div class="content">
                  <form method="post" action="updatestudent.php">
                      <div class="row">
                        <div class="col-md-5">
                          <div class="form-group">
                            <label>Full Name</label>
                            <input
                              type="text"
                              class="form-control"
                              name="name"
                              placeholder="Full Name"
                              value="<?php echo $student_name?>" required>
                        
                          </div>
                        </div>
                        <div class="col-md-3">
                          <div class="form-group">
                            <label>Username</label>
                            <input
                              type="text"
                              class="form-control"
                              placeholder="Username"
                              name="Username"
                              value="<?php echo $student_username?>" required>
                            
                          </div>
                        </div>
                        <div class="col-md-4">
                          <div class="form-group">
                            <label for="exampleInputEmail1"
                              >Email address</label
                            >
                            <input
                              type="email"
                              class="form-control"
                              placeholder="Email"
                              name="Email"
                              value="<?php echo $student_email?>" required>
                            
                          </div>
                        </div>
                      </div>



                      <div class="row">
                        <div class="col-md-4">
                          <div class="form-group">
                            <label>New Password</label>
                            <input
                              type="password"
                              class="form-control"
                              placeholder="New Password"
                              name="Password"
                            />
                          </div>
                        </div>
                        <div class="col-md-4">
                          <div class="form-group">
                            <label>Confrim New Password</label>
                            <input
                              type="password"
                              class="form-control"
                              placeholder="Confrim New Password"
                             
                            />
                          </div>
                        </div>
                        <div class="col-md-4">
                          <div class="form-group">
                            <label>Contact Number</label>
                            <input
                              type="number"
                              class="form-control"
                              placeholder="Contact Number"
                              name="Contact"
                              value="<?php echo $student_conno?>" required>
                            
                          </div>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-md-2">
                          <div class="form-group">
                            <label>Birthday</label>
                            <input
                              type="date"
                              class="form-control"
                              placeholder="Birthday"
                              name="Birthday"
                              >
                          </div>
                        </div>
                      </div>
                      <button
                        type="submit"
                        name="save"
                        class="btn btn-info btn-fill pull-right"
                      >
                        Update Profile
                      </button>
                      <div class="clearfix"></div>
                    </form>
                    <a href="deletestudent.php" class="btn btn-warning">Delete</a>
                  </div>
                </div>
              </div>
              </form>
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
