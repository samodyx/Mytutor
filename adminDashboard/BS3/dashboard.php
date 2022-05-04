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

    <title>Admin Dashboard</title>

    <meta content="width=device-width", initial-scale=1.0, maximum-scale=1.0,
    user-scalable=0' name='viewport' />
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

    <!-- <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script> -->
  </head>

  <body>
    <div class="wrapper">
      <div
        class="sidebar"
        data-color="azure"
        data-image="assets/img/adminDashboard.png"
      >
        <!--

        Tip 1: you can change the color of the sidebar using: data-color="blue | azure | green | orange | red | purple"
        Tip 2: you can also add an image using data-image tag

    -->

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
            <li>
              <a href="#">
                <i class="pe-7s-note"></i>
                <p>Lessons</p>
              </a>
            </li>

            <li>
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
            <div class="row">
              <div class="col-md-4">
                <div class="card">
                  <div class="header">
                    <h4 class="title">Email Statistics</h4>
                    <p class="category">Last Campaign Performance</p>
                  </div>
                  <div class="content">
                    <div
                      id="chartPreferences"
                      class="ct-chart ct-perfect-fourth"
                    ></div>

                    <div class="footer">
                      <div class="legend">
                        <i class="fa fa-circle text-info"></i> Open
                        <i class="fa fa-circle text-danger"></i> Bounce
                        <i class="fa fa-circle text-warning"></i> Unsubscribe
                      </div>
                      <hr />
                      <div class="stats">
                        <i class="fa fa-clock-o"></i> Campaign sent 2 days ago
                      </div>
                    </div>
                  </div>
                </div>
              </div>

              <div class="col-md-8">
                <div class="card">
                  <div class="header">
                    <h4 class="title">Users Behavior</h4>
                    <p class="category">24 Hours performance</p>
                  </div>
                  <div class="content">
                    <div id="chartHours" class="ct-chart"></div>
                    <div class="footer">
                      <div class="legend">
                        <i class="fa fa-circle text-info"></i> Open
                        <i class="fa fa-circle text-danger"></i> Click
                        <i class="fa fa-circle text-warning"></i> Click Second
                        Time
                      </div>
                      <hr />
                      <div class="stats">
                        <i class="fa fa-history"></i> Updated 3 minutes ago
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <div class="row">
              <div class="col-md-6">
                <div class="card">
                  <div class="header">
                    <h4 class="title">2014 Sales</h4>
                    <p class="category">All products including Taxes</p>
                  </div>
                  <div class="content">
                    <div id="chartActivity" class="ct-chart"></div>

                    <div class="footer">
                      <div class="legend">
                        <i class="fa fa-circle text-info"></i> Tesla Model S
                        <i class="fa fa-circle text-danger"></i> BMW 5 Series
                      </div>
                      <hr />
                      <div class="stats">
                        <i class="fa fa-check"></i> Data information certified
                      </div>
                    </div>
                  </div>
                </div>
              </div>

              <div class="col-md-6">
                <div class="card">
                  <div class="header">
                    <h4 class="title">Tasks</h4>
                    <p class="category">Backend development</p>
                  </div>
                  <div class="content">
                    <div class="table-full-width">
                      <table class="table">
                        <tbody>
                          <tr>
                            <td>
                              <div class="checkbox">
                                <input id="checkbox1" type="checkbox" />
                                <label for="checkbox1"></label>
                              </div>
                            </td>
                            <td>
                              Sign contract for "What are conference organizers
                              afraid of?"
                            </td>
                            <td class="td-actions text-right">
                              <button
                                type="button"
                                rel="tooltip"
                                title="Edit Task"
                                class="btn btn-info btn-simple btn-xs"
                              >
                                <i class="fa fa-edit"></i>
                              </button>
                              <button
                                type="button"
                                rel="tooltip"
                                title="Remove"
                                class="btn btn-danger btn-simple btn-xs"
                              >
                                <i class="fa fa-times"></i>
                              </button>
                            </td>
                          </tr>
                          <tr>
                            <td>
                              <div class="checkbox">
                                <input id="checkbox2" type="checkbox" checked />
                                <label for="checkbox2"></label>
                              </div>
                            </td>
                            <td>
                              Lines From Great Russian Literature? Or E-mails
                              From My Boss?
                            </td>
                            <td class="td-actions text-right">
                              <button
                                type="button"
                                rel="tooltip"
                                title="Edit Task"
                                class="btn btn-info btn-simple btn-xs"
                              >
                                <i class="fa fa-edit"></i>
                              </button>
                              <button
                                type="button"
                                rel="tooltip"
                                title="Remove"
                                class="btn btn-danger btn-simple btn-xs"
                              >
                                <i class="fa fa-times"></i>
                              </button>
                            </td>
                          </tr>
                          <tr>
                            <td>
                              <div class="checkbox">
                                <input id="checkbox3" type="checkbox" />
                                <label for="checkbox3"></label>
                              </div>
                            </td>
                            <td>
                              Flooded: One year later, assessing what was lost
                              and what was found when a ravaging rain swept
                              through metro Detroit
                            </td>
                            <td class="td-actions text-right">
                              <button
                                type="button"
                                rel="tooltip"
                                title="Edit Task"
                                class="btn btn-info btn-simple btn-xs"
                              >
                                <i class="fa fa-edit"></i>
                              </button>
                              <button
                                type="button"
                                rel="tooltip"
                                title="Remove"
                                class="btn btn-danger btn-simple btn-xs"
                              >
                                <i class="fa fa-times"></i>
                              </button>
                            </td>
                          </tr>
                          <tr>
                            <td>
                              <div class="checkbox">
                                <input id="checkbox4" type="checkbox" checked />
                                <label for="checkbox4"></label>
                              </div>
                            </td>
                            <td>
                              Create 4 Invisible User Experiences you Never Knew
                              About
                            </td>
                            <td class="td-actions text-right">
                              <button
                                type="button"
                                rel="tooltip"
                                title="Edit Task"
                                class="btn btn-info btn-simple btn-xs"
                              >
                                <i class="fa fa-edit"></i>
                              </button>
                              <button
                                type="button"
                                rel="tooltip"
                                title="Remove"
                                class="btn btn-danger btn-simple btn-xs"
                              >
                                <i class="fa fa-times"></i>
                              </button>
                            </td>
                          </tr>
                          <tr>
                            <td>
                              <div class="checkbox">
                                <input id="checkbox5" type="checkbox" />
                                <label for="checkbox5"></label>
                              </div>
                            </td>
                            <td>Read "Following makes Medium better"</td>
                            <td class="td-actions text-right">
                              <button
                                type="button"
                                rel="tooltip"
                                title="Edit Task"
                                class="btn btn-info btn-simple btn-xs"
                              >
                                <i class="fa fa-edit"></i>
                              </button>
                              <button
                                type="button"
                                rel="tooltip"
                                title="Remove"
                                class="btn btn-danger btn-simple btn-xs"
                              >
                                <i class="fa fa-times"></i>
                              </button>
                            </td>
                          </tr>
                          <tr>
                            <td>
                              <div class="checkbox">
                                <input id="checkbox6" type="checkbox" checked />
                                <label for="checkbox6"></label>
                              </div>
                            </td>
                            <td>Unfollow 5 enemies from twitter</td>
                            <td class="td-actions text-right">
                              <button
                                type="button"
                                rel="tooltip"
                                title="Edit Task"
                                class="btn btn-info btn-simple btn-xs"
                              >
                                <i class="fa fa-edit"></i>
                              </button>
                              <button
                                type="button"
                                rel="tooltip"
                                title="Remove"
                                class="btn btn-danger btn-simple btn-xs"
                              >
                                <i class="fa fa-times"></i>
                              </button>
                            </td>
                          </tr>
                        </tbody>
                      </table>
                    </div>

                    <div class="footer">
                      <hr />
                      <div class="stats">
                        <i class="fa fa-history"></i> Updated 3 minutes ago
                      </div>
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
              <a href="http://www.creative-tim.com">Creative Tim</a>, made with
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

  <script type="text/javascript">
    $(document).ready(function () {
      demo.initChartist();

      $.notify(
        {
          icon: "pe-7s-gift",
          message:
            "Welcome to <b>Light Bootstrap Dashboard</b> - a beautiful freebie for every web developer.",
        },
        {
          type: "info",
          timer: 4000,
        }
      );
    });
  </script>
</html>
