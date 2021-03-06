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




<!doctype html>
<html lang="en">
    
<head>
    <meta charset="utf-8" />
	<link rel="icon" type="image/png" href="assets/img/update_logo_700x_NUf_icon.ico">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <title>Sign Up </title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

    <script src="jquery-3.3.1.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js"></script>
    <link rel="stylesheet" href="css/Signup.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.0/jquery.validate.min.js"></script>

</head>

<body>
    <section class="ftco-section">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-6 text-center mb-5">
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-md-12">
                    <div class="wrap d-md-flex">
                        <div class="text-wrap p-4 p-lg-5 d-flex img" style="background-image: url(images/bg.jpg);">
                            <div class="text w-100">
                            </div>
                        </div>
                        <div class="login-wrap p-4 p-md-5">
                            <div class="row justify-content-center py-md-5">
                                <div class="col-lg-9">
                                    <div class="social-wrap">
                                        <h3 class="mb-3 text-center">Signup with this services</h3>
                                        <p class="social-media d-flex justify-content-center">
                                            <a href="#" class="social-icon google d-flex align-items-center justify-content-center"><span class="fa fa-google"></span></a>
                                            <a href="https://www.facebook.com/signup" class="social-icon facebook d-flex align-items-center justify-content-center"><span class="fa fa-facebook"></span></a>
                                            <a href="https://twitter.com/signup" class="social-icon twitter d-flex align-items-center justify-content-center"><span class="fa fa-twitter"></span></a>
                                        </p>
                                        <p class="or">
                                            <span>or</span>
                                        </p>
                                    </div> 
                                    <form action="php/signup.php" method="POST" class="signup-form" name="signValidation" id="signupForm">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label class="label" for="fullname">Full Name </label>
                                                    <input type="text" class="form-control" name="fullname" id="fullname">
                                                    <span class="error"></span>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label class="label" for="username">Username </label>
                                                    <input type="text" class="form-control" name="username" id="username">
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label class="label" for="name">Course</label>
                                                         <select name="course_name">
                                                        <?php
                                                        while($row = mysqli_fetch_assoc($result)) {
                                                        echo "<option value='".$row["course_id"]."'>".$row["course_name"]."</option>";
                                                        }
                                                        ?>
                                                            </select>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label class="label" for="qualification">Qualification</label>
                                                <textarea type="text" class="form-control" name="qualification"></textarea>
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label class="label" for="description">Description</label>
                                                <textarea type="text" class="form-control" name="description"></textarea>
                                            </div>
                                        </div>
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <label class="label" for="email">Email Address</label>
                                                    <input type="text" class="form-control" name="email">
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <label class="label" for="conno">Contact Number</label>
                                                    <input type="tel" class="form-control" name="contactnumber">
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <label class="label" for="password">Password</label>
                                                    <input type="password" class="form-control" name="password">
                                                </div>
                                                <div class="form-group">
                                                    <label class="label" for="password">Confirm Password</label>
                                                    <input type="password" class="form-control" name="retypepassword">
                                             <div class="col-md-12 my-4">
                                                <div class="form-group">
                                                    <div class="w-100">
                                                        <label class="checkbox-wrap checkbox-primary">I agree all statements in terms of service
														  <input type="checkbox" checked>
														  <span class="checkmark"></span>
														</label>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                            <div class="form-group">
                                                    <button type="submit" class="btn btn-primary submit p-3">Create an account as Lecturer</button>
                                                </div>
                                            </div>
                                        </div>

                                    </form>
                                    <div class="w-100">
                                        <p class="mt-4">I'm already a member! <a href="../login/login.html">Log In</a></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.3/jquery.validate.min.js"></script>
    <!-- <script src="https://cdn.jsdelivr.net/npm/jquery-validation@1.17.0/dist/jquery.validate.js"></script>    -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.1/jquery.validate.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="js/jquery.min.js"></script>
    <script src="js/popper.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/main.js"></script>
    <script type="text/javascript">
        // var $formvalidate = $('#signupForm');
        $(document).ready(function(){
            $('#signupForm').validate();
        })
    </script>

</body>

</html>