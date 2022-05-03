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

session_start();


$conn->close();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Mytutor.lk </title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- update_logo_700x_NUf_icon -->
    <link href="img\logo\update_logo_700x_NUf_icon.ico" rel="icon"> 

    
    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Heebo:wght@400;500;600&family=Nunito:wght@600;700;800&display=swap" rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="lib/animate/animate.min.css" rel="stylesheet">
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/courseEX.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="css/style.css" rel="stylesheet">

    <!-- JavaScript/JQuery -->
    <script src="js/courseEx.js"></script>
    <script src="https://code.jquery.com/jquery-1.10.2.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.0/dist/js/bootstrap.bundle.min.js"></script>

        <!-- Libraries Stylesheet -->
        <link href="lib/animate/animate.min.css" rel="stylesheet">  
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">


<title>Courses</title>
</head>

<!-- <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
        <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
            <span class="sr-only">Loading...</span>
        </div>
    </div> -->
    <!-- Spinner End -->


    <!-- Navbar Start -->
    <nav class="navbar navbar-expand-lg bg-white navbar-light shadow sticky-top p-0">
        <a href="index.html" class="navbar-brand d-flex align-items-center px-4 px-lg-5">
            <h2 class="m-0 text-primary"><img src="img\logo\update-logo-700x.png" width="80" height="80" class="d-inline-block align-center" alt="">My Tutor.lk</h2>
        </a>
        <button type="button" class="navbar-toggler me-4" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
            <div class="navbar-nav ms-auto p-4 p-lg-0">
                <a href="index.html" class="nav-item nav-link">Home</a>
                <a href="about.html" class="nav-item nav-link">About</a>
                <a href="courses.html" class="nav-item nav-link active">Courses</a>
               
             
                <a href="contact.html" class="nav-item nav-link">Contact</a>
            </div>
            <a href="" class="btn btn-primary py-4 px-lg-5 d-none d-lg-block">Log In<i class="fa fa-arrow-right ms-3"></i></a>
        </div>
    </nav>

<body>
  
  <!-- Fisrt category -->
  <div class="container-xxl py-5 category">
    <div class="container">
        <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
            <h6 class="section-title bg-white text-center text-primary px-3">Categories</h6>
            <h1 class="mb-5">Development</h1>
        </div>
    </div>
  </div>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js" integrity="sha512-bPs7Ae6pVvhOSiIcyUClR7/q2OAsRiovw4vAkX+zJbw3ShAeeqezq50RIIcIURq7Oa20rW2n2q+fyXBNcU9lrw==" crossorigin="anonymous"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" integrity="sha512-tS3S5qG0BlhnQROyJXvNjeEM4UpMXHrQfTGmbQ1gKmelCxlSEBUaxhRBj/EFTzpbP4RVSrpEikbmdJobCvhE3g==" crossorigin="anonymous" />
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/ti-icons@0.1.2/css/themify-icons.css">
<div class="popular_courses">
    <div class="container">
        <div class="row justify-content-center">
           </div>
        
        <div class="row">
            <div class="col-lg-12">
                <div class="owl-carousel active_course owl-loaded owl-drag">
                    <div class="owl-stage-outer">
                        <div class="owl-stage" style="transform: translate3d(-1520px, 0px, 0px); transition: all 1.5s ease 0s; width: 3420px;">

                        <?php

while($row = mysqli_fetch_assoc($result)) {
$course_name = $row["course_name"]; 
$course_description = $row["course_description"]; 
$course_image ="lectureDashboard/BS3/uploads/".$row["course_image"]; 
$course_type = $row["course_type"]; 
$course_price = $row["course_price"]; 

}
?>
                            <div class="owl-item cloned" style="width: 350px; margin-right: 30px;">
                                <div class="single_course">
 
                                    <div class="course_head">
                                    <img class="img-fluid" src="<?php echo $course_image?>" alt="" />
                                    </div>
                                    <div class="course_content">
                                        <span class="price" required><?php echo $course_price?> LKR</span>
                                        <span class="tag mb-4 d-inline-block" value="<?php echo $course_type?>" required> </span>
                                        <h4 class="mb-3">
                                            <a href="#" required><?php echo $course_name?></a>
                                        </h4>
                                        <p>
                                        <a required><?php echo $course_description?></a>
                                        </p>
                                        <!-- <div class="course_meta d-flex justify-content-lg-between align-items-lg-center flex-lg-row flex-column mt-4">
                                            <div class="authr_meta">
                                                <img src="https://bootdey.com/img/Content/avatar/avatar2.png" alt="" />
                                                <span class="d-inline-block ml-2">Cameron</span>
                                            </div>
                                            <div class="mt-lg-0 mt-3">
                                                <span class="meta_info mr-4">
                                                    <a href="#"> <i class="ti-user mr-2"></i>25 </a>
                                                </span>
                                                <span class="meta_info">
                                                    <a href="#"> <i class="ti-heart mr-2"></i>35 </a>
                                                </span>
                                            </div>
                                        </div> -->
                                    </div>
                                </div>
                            </div>
   

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Second category -->
<div class="container-xxl py-5 category">
  <div class="container">
      <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
          <h6 class="section-title bg-white text-center text-primary px-3">Categories</h6>
          <h1 class="mb-5">Programming</h1>
      </div>
  </div>
</div>
<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js" integrity="sha512-bPs7Ae6pVvhOSiIcyUClR7/q2OAsRiovw4vAkX+zJbw3ShAeeqezq50RIIcIURq7Oa20rW2n2q+fyXBNcU9lrw==" crossorigin="anonymous"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" integrity="sha512-tS3S5qG0BlhnQROyJXvNjeEM4UpMXHrQfTGmbQ1gKmelCxlSEBUaxhRBj/EFTzpbP4RVSrpEikbmdJobCvhE3g==" crossorigin="anonymous" />
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/ti-icons@0.1.2/css/themify-icons.css">
<div class="popular_courses">
  <div class="container">
      <div class="row justify-content-center">
         </div>
      <div class="row">
          <div class="col-lg-12">
              <div class="owl-carousel active_course owl-loaded owl-drag">
                  <div class="owl-stage-outer">
                      <div class="owl-stage" style="transform: translate3d(-1520px, 0px, 0px); transition: all 1.5s ease 0s; width: 3420px;">
                          <div class="owl-item cloned" style="width: 350px; margin-right: 30px;">
                              <div class="single_course">
                                  <div class="course_head">
                                      <img class="img-fluid" src="https://via.placeholder.com/350x280/FFB6C1/000000" alt="" />
                                  </div>
                                  <div class="course_content">
                                      <span class="price">2500 LKR</span>
                                      <span class="tag mb-4 d-inline-block">design</span>
                                      <h4 class="mb-3">
                                          <a href="#">Custom Product Design</a>
                                      </h4>
                                      <p>
                                          One make creepeth man bearing their one firmament won't fowl meat over sea
                                      </p>
                                      <div class="course_meta d-flex justify-content-lg-between align-items-lg-center flex-lg-row flex-column mt-4">
                                          <div class="authr_meta">
                                              <img src="https://bootdey.com/img/Content/avatar/avatar2.png" alt="" />
                                              <span class="d-inline-block ml-2">Cameron</span>
                                          </div>
                                          <div class="mt-lg-0 mt-3">
                                              <span class="meta_info mr-4">
                                                  <a href="#"> <i class="ti-user mr-2"></i>25 </a>
                                              </span>
                                              <span class="meta_info">
                                                  <a href="#"> <i class="ti-heart mr-2"></i>35 </a>
                                              </span>
                                          </div>
                                      </div>
                                  </div>
                              </div>
                          </div>
                          <div class="owl-item cloned" style="width: 350px; margin-right: 30px;">
                              <div class="single_course">
                                  <div class="course_head">
                                      <img class="img-fluid" src="https://via.placeholder.com/350x280/87CEFA/000000" alt="" />
                                  </div>
                                  <div class="course_content">
                                      <span class="price">2500 LKR</span>
                                      <span class="tag mb-4 d-inline-block">design</span>
                                      <h4 class="mb-3">
                                          <a href="#">Social Media Network</a>
                                      </h4>
                                      <p>
                                          One make creepeth man bearing their one firmament won't fowl meat over sea
                                      </p>
                                      <div class="course_meta d-flex justify-content-lg-between align-items-lg-center flex-lg-row flex-column mt-4">
                                          <div class="authr_meta">
                                              <img src="https://bootdey.com/img/Content/avatar/avatar1.png" alt="" />
                                              <span class="d-inline-block ml-2">Cameron</span>
                                          </div>
                                          <div class="mt-lg-0 mt-3">
                                              <span class="meta_info mr-4">
                                                  <a href="#"> <i class="ti-user mr-2"></i>25 </a>
                                              </span>
                                              <span class="meta_info">
                                                  <a href="#"> <i class="ti-heart mr-2"></i>35 </a>
                                              </span>
                                          </div>
                                      </div>
                                  </div>
                              </div>
                          </div>
                          <div class="owl-item cloned" style="width: 350px; margin-right: 30px;">
                              <div class="single_course">
                                  <div class="course_head">
                                      <img class="img-fluid" src="https://via.placeholder.com/350x280/FF7F50/000000" alt="" />
                                  </div>
                                  <div class="course_content">
                                      <span class="price">2500 LKR</span>
                                      <span class="tag mb-4 d-inline-block">design</span>
                                      <h4 class="mb-3">
                                          <a href="#">Computer Engineering</a>
                                      </h4>
                                      <p>
                                          One make creepeth man bearing their one firmament won't fowl meat over sea
                                      </p>
                                      <div class="course_meta d-flex justify-content-lg-between align-items-lg-center flex-lg-row flex-column mt-4">
                                          <div class="authr_meta">
                                              <img src="https://bootdey.com/img/Content/avatar/avatar7.png" alt="" />
                                              <span class="d-inline-block ml-2">Cameron</span>
                                          </div>
                                          <div class="mt-lg-0 mt-3">
                                              <span class="meta_info mr-4">
                                                  <a href="#"> <i class="ti-user mr-2"></i>25 </a>
                                              </span>
                                              <span class="meta_info">
                                                  <a href="#"> <i class="ti-heart mr-2"></i>35 </a>
                                              </span>
                                          </div>
                                      </div>
                                  </div>
                              </div>
                          </div>
                          <div class="owl-item" style="width: 350px; margin-right: 30px;">
                              <div class="single_course">
                                  <div class="course_head">
                                      <img class="img-fluid" src="https://via.placeholder.com/350x280/20B2AA/000000" alt="" />
                                  </div>
                                  <div class="course_content">
                                      <span class="price">2500 LKR</span>
                                      <span class="tag mb-4 d-inline-block">design</span>
                                      <h4 class="mb-3">
                                          <a href="#">Custom Product Design</a>
                                      </h4>
                                      <p>
                                          One make creepeth man bearing their one firmament won't fowl meat over sea
                                      </p>
                                      <div class="course_meta d-flex justify-content-lg-between align-items-lg-center flex-lg-row flex-column mt-4">
                                          <div class="authr_meta">
                                              <img src="https://bootdey.com/img/Content/avatar/avatar6.png" alt="" />
                                              <span class="d-inline-block ml-2">Cameron</span>
                                          </div>
                                          <div class="mt-lg-0 mt-3">
                                              <span class="meta_info mr-4">
                                                  <a href="#"> <i class="ti-user mr-2"></i>25 </a>
                                              </span>
                                              <span class="meta_info">
                                                  <a href="#"> <i class="ti-heart mr-2"></i>35 </a>
                                              </span>
                                          </div>
                                      </div>
                                  </div>
                              </div>
                          </div>
                          <div class="owl-item active" style="width: 350px; margin-right: 30px;">
                              <div class="single_course">
                                  <div class="course_head">
                                      <img class="img-fluid" src="https://via.placeholder.com/350x280/8A2BE2/000000" alt="" />
                                  </div>
                                  <div class="course_content">
                                      <span class="price">2500 LKR</span>
                                      <span class="tag mb-4 d-inline-block">design</span>
                                      <h4 class="mb-3">
                                          <a href="#">Social Media Network</a>
                                      </h4>
                                      <p>
                                          One make creepeth man bearing their one firmament won't fowl meat over sea
                                      </p>
                                      <div class="course_meta d-flex justify-content-lg-between align-items-lg-center flex-lg-row flex-column mt-4">
                                          <div class="authr_meta">
                                              <img src="https://bootdey.com/img/Content/avatar/avatar5.png" alt="" />
                                              <span class="d-inline-block ml-2">Cameron</span>
                                          </div>
                                          <div class="mt-lg-0 mt-3">
                                              <span class="meta_info mr-4">
                                                  <a href="#"> <i class="ti-user mr-2"></i>25 </a>
                                              </span>
                                              <span class="meta_info">
                                                  <a href="#"> <i class="ti-heart mr-2"></i>35 </a>
                                              </span>
                                          </div>
                                      </div>
                                  </div>
                              </div>
                          </div>
                          <div class="owl-item active" style="width: 350px; margin-right: 30px;">
                              <div class="single_course">
                                  <div class="course_head">
                                      <img class="img-fluid" src="https://via.placeholder.com/350x280/008B8B/000000" alt="" />
                                  </div>
                                  <div class="course_content">
                                      <span class="price">2500 LKR</span>
                                      <span class="tag mb-4 d-inline-block">design</span>
                                      <h4 class="mb-3">
                                          <a href="#">Computer Engineering</a>
                                      </h4>
                                      <p>
                                          One make creepeth man bearing their one firmament won't fowl meat over sea
                                      </p>
                                      <div class="course_meta d-flex justify-content-lg-between align-items-lg-center flex-lg-row flex-column mt-4">
                                          <div class="authr_meta">
                                              <img src="https://bootdey.com/img/Content/avatar/avatar4.png" alt="" />
                                              <span class="d-inline-block ml-2">Cameron</span>
                                          </div>
                                          <div class="mt-lg-0 mt-3">
                                              <span class="meta_info mr-4">
                                                  <a href="#"> <i class="ti-user mr-2"></i>25 </a>
                                              </span>
                                              <span class="meta_info">
                                                  <a href="#"> <i class="ti-heart mr-2"></i>35 </a>
                                              </span>
                                          </div>
                                      </div>
                                  </div>
                              </div>
                          </div>
                          <div class="owl-item cloned active" style="width: 350px; margin-right: 30px;">
                              <div class="single_course">
                                  <div class="course_head">
                                      <img class="img-fluid" src="https://via.placeholder.com/350x280/FF69B4/000000" alt="" />
                                  </div>
                                  <div class="course_content">
                                      <span class="price">2500 LKR</span>
                                      <span class="tag mb-4 d-inline-block">design</span>
                                      <h4 class="mb-3">
                                          <a href="#">Custom Product Design</a>
                                      </h4>
                                      <p>
                                          One make creepeth man bearing their one firmament won't fowl meat over sea
                                      </p>
                                      <div class="course_meta d-flex justify-content-lg-between align-items-lg-center flex-lg-row flex-column mt-4">
                                          <div class="authr_meta">
                                              <img src="https://bootdey.com/img/Content/avatar/avatar3.png" alt="" />
                                              <span class="d-inline-block ml-2">Cameron</span>
                                          </div>
                                          <div class="mt-lg-0 mt-3">
                                              <span class="meta_info mr-4">
                                                  <a href="#"> <i class="ti-user mr-2"></i>25 </a>
                                              </span>
                                              <span class="meta_info">
                                                  <a href="#"> <i class="ti-heart mr-2"></i>35 </a>
                                              </span>
                                          </div>
                                      </div>
                                  </div>
                              </div>
                          </div>
                          <div class="owl-item cloned" style="width: 350px; margin-right: 30px;">
                              <div class="single_course">
                                  <div class="course_head">
                                      <img class="img-fluid" src="https://via.placeholder.com/350x280/20B2AA/000000" alt="" />
                                  </div>
                                  <div class="course_content">
                                      <span class="price">2500 LKR</span>
                                      <span class="tag mb-4 d-inline-block">design</span>
                                      <h4 class="mb-3">
                                          <a href="#">Social Media Network</a>
                                      </h4>
                                      <p>
                                          One make creepeth man bearing their one firmament won't fowl meat over sea
                                      </p>
                                      <div class="course_meta d-flex justify-content-lg-between align-items-lg-center flex-lg-row flex-column mt-4">
                                          <div class="authr_meta">
                                              <img src="https://bootdey.com/img/Content/avatar/avatar2.png" alt="" />
                                              <span class="d-inline-block ml-2">Cameron</span>
                                          </div>
                                          <div class="mt-lg-0 mt-3">
                                              <span class="meta_info mr-4">
                                                  <a href="#"> <i class="ti-user mr-2"></i>25 </a>
                                              </span>
                                              <span class="meta_info">
                                                  <a href="#"> <i class="ti-heart mr-2"></i>35 </a>
                                              </span>
                                          </div>
                                      </div>
                                  </div>
                              </div>
                          </div>
                          <div class="owl-item cloned" style="width: 350px; margin-right: 30px;">
                              <div class="single_course">
                                  <div class="course_head">
                                      <img class="img-fluid" src="https://via.placeholder.com/350x280/#FFA07A/000000" alt="" />
                                  </div>
                                  <div class="course_content">
                                      <span class="price">2500 LKR</span>
                                      <span class="tag mb-4 d-inline-block">design</span>
                                      <h4 class="mb-3">
                                          <a href="#">Computer Engineering</a>
                                      </h4>
                                      <p>
                                          One make creepeth man bearing their one firmament won't fowl meat over sea
                                      </p>
                                      <div class="course_meta d-flex justify-content-lg-between align-items-lg-center flex-lg-row flex-column mt-4">
                                          <div class="authr_meta">
                                              <img src="https://bootdey.com/img/Content/avatar/avatar1.png" alt="" />
                                              <span class="d-inline-block ml-2">Cameron</span>
                                          </div>
                                          <div class="mt-lg-0 mt-3">
                                              <span class="meta_info mr-4">
                                                  <a href="#"> <i class="ti-user mr-2"></i>25 </a>
                                              </span>
                                              <span class="meta_info">
                                                  <a href="#"> <i class="ti-heart mr-2"></i>35 </a>
                                              </span>
                                          </div>
                                      </div>
                                  </div>
                              </div>
                          </div>
                      </div>
                  </div>
              </div>
          </div>
      </div>
  </div>
</div>

<!-- Third category -->

<div class="container-xxl py-5 category">
  <div class="container">
      <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
          <h6 class="section-title bg-white text-center text-primary px-3">Categories</h6>
          <h1 class="mb-5">Multimedia</h1>
      </div>
  </div>
</div>
<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js" integrity="sha512-bPs7Ae6pVvhOSiIcyUClR7/q2OAsRiovw4vAkX+zJbw3ShAeeqezq50RIIcIURq7Oa20rW2n2q+fyXBNcU9lrw==" crossorigin="anonymous"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" integrity="sha512-tS3S5qG0BlhnQROyJXvNjeEM4UpMXHrQfTGmbQ1gKmelCxlSEBUaxhRBj/EFTzpbP4RVSrpEikbmdJobCvhE3g==" crossorigin="anonymous" />
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/ti-icons@0.1.2/css/themify-icons.css">
<div class="popular_courses">
  <div class="container">
      <div class="row justify-content-center">
         </div>
      <div class="row">
          <div class="col-lg-12">
              <div class="owl-carousel active_course owl-loaded owl-drag">
                  <div class="owl-stage-outer">
                      <div class="owl-stage" style="transform: translate3d(-1520px, 0px, 0px); transition: all 1.5s ease 0s; width: 3420px;">
                          <div class="owl-item cloned" style="width: 350px; margin-right: 30px;">
                              <div class="single_course">
                                  <div class="course_head">
                                      <img class="img-fluid" src="https://via.placeholder.com/350x280/FFB6C1/000000" alt="" />
                                  </div>
                                  <div class="course_content">
                                      <span class="price">2500 LKR</span>
                                      <span class="tag mb-4 d-inline-block">design</span>
                                      <h4 class="mb-3">
                                          <a href="#">Custom Product Design</a>
                                      </h4>
                                      <p>
                                          One make creepeth man bearing their one firmament won't fowl meat over sea
                                      </p>
                                      <div class="course_meta d-flex justify-content-lg-between align-items-lg-center flex-lg-row flex-column mt-4">
                                          <div class="authr_meta">
                                              <img src="https://bootdey.com/img/Content/avatar/avatar2.png" alt="" />
                                              <span class="d-inline-block ml-2">Cameron</span>
                                          </div>
                                          <div class="mt-lg-0 mt-3">
                                              <span class="meta_info mr-4">
                                                  <a href="#"> <i class="ti-user mr-2"></i>25 </a>
                                              </span>
                                              <span class="meta_info">
                                                  <a href="#"> <i class="ti-heart mr-2"></i>35 </a>
                                              </span>
                                          </div>
                                      </div>
                                  </div>
                              </div>
                          </div>
                          <div class="owl-item cloned" style="width: 350px; margin-right: 30px;">
                              <div class="single_course">
                                  <div class="course_head">
                                      <img class="img-fluid" src="https://via.placeholder.com/350x280/87CEFA/000000" alt="" />
                                  </div>
                                  <div class="course_content">
                                      <span class="price">2500 LKR</span>
                                      <span class="tag mb-4 d-inline-block">design</span>
                                      <h4 class="mb-3">
                                          <a href="#">Social Media Network</a>
                                      </h4>
                                      <p>
                                          One make creepeth man bearing their one firmament won't fowl meat over sea
                                      </p>
                                      <div class="course_meta d-flex justify-content-lg-between align-items-lg-center flex-lg-row flex-column mt-4">
                                          <div class="authr_meta">
                                              <img src="https://bootdey.com/img/Content/avatar/avatar1.png" alt="" />
                                              <span class="d-inline-block ml-2">Cameron</span>
                                          </div>
                                          <div class="mt-lg-0 mt-3">
                                              <span class="meta_info mr-4">
                                                  <a href="#"> <i class="ti-user mr-2"></i>25 </a>
                                              </span>
                                              <span class="meta_info">
                                                  <a href="#"> <i class="ti-heart mr-2"></i>35 </a>
                                              </span>
                                          </div>
                                      </div>
                                  </div>
                              </div>
                          </div>
                          <div class="owl-item cloned" style="width: 350px; margin-right: 30px;">
                              <div class="single_course">
                                  <div class="course_head">
                                      <img class="img-fluid" src="https://via.placeholder.com/350x280/FF7F50/000000" alt="" />
                                  </div>
                                  <div class="course_content">
                                      <span class="price">2500 LKR</span>
                                      <span class="tag mb-4 d-inline-block">design</span>
                                      <h4 class="mb-3">
                                          <a href="#">Computer Engineering</a>
                                      </h4>
                                      <p>
                                          One make creepeth man bearing their one firmament won't fowl meat over sea
                                      </p>
                                      <div class="course_meta d-flex justify-content-lg-between align-items-lg-center flex-lg-row flex-column mt-4">
                                          <div class="authr_meta">
                                              <img src="https://bootdey.com/img/Content/avatar/avatar7.png" alt="" />
                                              <span class="d-inline-block ml-2">Cameron</span>
                                          </div>
                                          <div class="mt-lg-0 mt-3">
                                              <span class="meta_info mr-4">
                                                  <a href="#"> <i class="ti-user mr-2"></i>25 </a>
                                              </span>
                                              <span class="meta_info">
                                                  <a href="#"> <i class="ti-heart mr-2"></i>35 </a>
                                              </span>
                                          </div>
                                      </div>
                                  </div>
                              </div>
                          </div>
                          <div class="owl-item" style="width: 350px; margin-right: 30px;">
                              <div class="single_course">
                                  <div class="course_head">
                                      <img class="img-fluid" src="https://via.placeholder.com/350x280/20B2AA/000000" alt="" />
                                  </div>
                                  <div class="course_content">
                                      <span class="price">2500 LKR</span>
                                      <span class="tag mb-4 d-inline-block">design</span>
                                      <h4 class="mb-3">
                                          <a href="#">Custom Product Design</a>
                                      </h4>
                                      <p>
                                          One make creepeth man bearing their one firmament won't fowl meat over sea
                                      </p>
                                      <div class="course_meta d-flex justify-content-lg-between align-items-lg-center flex-lg-row flex-column mt-4">
                                          <div class="authr_meta">
                                              <img src="https://bootdey.com/img/Content/avatar/avatar6.png" alt="" />
                                              <span class="d-inline-block ml-2">Cameron</span>
                                          </div>
                                          <div class="mt-lg-0 mt-3">
                                              <span class="meta_info mr-4">
                                                  <a href="#"> <i class="ti-user mr-2"></i>25 </a>
                                              </span>
                                              <span class="meta_info">
                                                  <a href="#"> <i class="ti-heart mr-2"></i>35 </a>
                                              </span>
                                          </div>
                                      </div>
                                  </div>
                              </div>
                          </div>
                          <div class="owl-item active" style="width: 350px; margin-right: 30px;">
                              <div class="single_course">
                                  <div class="course_head">
                                      <img class="img-fluid" src="https://via.placeholder.com/350x280/8A2BE2/000000" alt="" />
                                  </div>
                                  <div class="course_content">
                                      <span class="price">2500 LKR</span>
                                      <span class="tag mb-4 d-inline-block">design</span>
                                      <h4 class="mb-3">
                                          <a href="#">Social Media Network</a>
                                      </h4>
                                      <p>
                                          One make creepeth man bearing their one firmament won't fowl meat over sea
                                      </p>
                                      <div class="course_meta d-flex justify-content-lg-between align-items-lg-center flex-lg-row flex-column mt-4">
                                          <div class="authr_meta">
                                              <img src="https://bootdey.com/img/Content/avatar/avatar5.png" alt="" />
                                              <span class="d-inline-block ml-2">Cameron</span>
                                          </div>
                                          <div class="mt-lg-0 mt-3">
                                              <span class="meta_info mr-4">
                                                  <a href="#"> <i class="ti-user mr-2"></i>25 </a>
                                              </span>
                                              <span class="meta_info">
                                                  <a href="#"> <i class="ti-heart mr-2"></i>35 </a>
                                              </span>
                                          </div>
                                      </div>
                                  </div>
                              </div>
                          </div>
                          <div class="owl-item active" style="width: 350px; margin-right: 30px;">
                              <div class="single_course">
                                  <div class="course_head">
                                      <img class="img-fluid" src="https://via.placeholder.com/350x280/008B8B/000000" alt="" />
                                  </div>
                                  <div class="course_content">
                                      <span class="price">2500 LKR</span>
                                      <span class="tag mb-4 d-inline-block">design</span>
                                      <h4 class="mb-3">
                                          <a href="#">Computer Engineering</a>
                                      </h4>
                                      <p>
                                          One make creepeth man bearing their one firmament won't fowl meat over sea
                                      </p>
                                      <div class="course_meta d-flex justify-content-lg-between align-items-lg-center flex-lg-row flex-column mt-4">
                                          <div class="authr_meta">
                                              <img src="https://bootdey.com/img/Content/avatar/avatar4.png" alt="" />
                                              <span class="d-inline-block ml-2">Cameron</span>
                                          </div>
                                          <div class="mt-lg-0 mt-3">
                                              <span class="meta_info mr-4">
                                                  <a href="#"> <i class="ti-user mr-2"></i>25 </a>
                                              </span>
                                              <span class="meta_info">
                                                  <a href="#"> <i class="ti-heart mr-2"></i>35 </a>
                                              </span>
                                          </div>
                                      </div>
                                  </div>
                              </div>
                          </div>
                          <div class="owl-item cloned active" style="width: 350px; margin-right: 30px;">
                              <div class="single_course">
                                  <div class="course_head">
                                      <img class="img-fluid" src="https://via.placeholder.com/350x280/FF69B4/000000" alt="" />
                                  </div>
                                  <div class="course_content">
                                      <span class="price">2500 LKR</span>
                                      <span class="tag mb-4 d-inline-block">design</span>
                                      <h4 class="mb-3">
                                          <a href="#">Custom Product Design</a>
                                      </h4>
                                      <p>
                                          One make creepeth man bearing their one firmament won't fowl meat over sea
                                      </p>
                                      <div class="course_meta d-flex justify-content-lg-between align-items-lg-center flex-lg-row flex-column mt-4">
                                          <div class="authr_meta">
                                              <img src="https://bootdey.com/img/Content/avatar/avatar3.png" alt="" />
                                              <span class="d-inline-block ml-2">Cameron</span>
                                          </div>
                                          <div class="mt-lg-0 mt-3">
                                              <span class="meta_info mr-4">
                                                  <a href="#"> <i class="ti-user mr-2"></i>25 </a>
                                              </span>
                                              <span class="meta_info">
                                                  <a href="#"> <i class="ti-heart mr-2"></i>35 </a>
                                              </span>
                                          </div>
                                      </div>
                                  </div>
                              </div>
                          </div>
                          <div class="owl-item cloned" style="width: 350px; margin-right: 30px;">
                              <div class="single_course">
                                  <div class="course_head">
                                      <img class="img-fluid" src="https://via.placeholder.com/350x280/20B2AA/000000" alt="" />
                                  </div>
                                  <div class="course_content">
                                      <span class="price">2500 LKR</span>
                                      <span class="tag mb-4 d-inline-block">design</span>
                                      <h4 class="mb-3">
                                          <a href="#">Social Media Network</a>
                                      </h4>
                                      <p>
                                          One make creepeth man bearing their one firmament won't fowl meat over sea
                                      </p>
                                      <div class="course_meta d-flex justify-content-lg-between align-items-lg-center flex-lg-row flex-column mt-4">
                                          <div class="authr_meta">
                                              <img src="https://bootdey.com/img/Content/avatar/avatar2.png" alt="" />
                                              <span class="d-inline-block ml-2">Cameron</span>
                                          </div>
                                          <div class="mt-lg-0 mt-3">
                                              <span class="meta_info mr-4">
                                                  <a href="#"> <i class="ti-user mr-2"></i>25 </a>
                                              </span>
                                              <span class="meta_info">
                                                  <a href="#"> <i class="ti-heart mr-2"></i>35 </a>
                                              </span>
                                          </div>
                                      </div>
                                  </div>
                              </div>
                          </div>
                          <div class="owl-item cloned" style="width: 350px; margin-right: 30px;">
                              <div class="single_course">
                                  <div class="course_head">
                                      <img class="img-fluid" src="https://via.placeholder.com/350x280/#FFA07A/000000" alt="" />
                                  </div>
                                  <div class="course_content">
                                      <span class="price">2500 LKR</span>
                                      <span class="tag mb-4 d-inline-block">design</span>
                                      <h4 class="mb-3">
                                          <a href="#">Computer Engineering</a>
                                      </h4>
                                      <p>
                                          One make creepeth man bearing their one firmament won't fowl meat over sea
                                      </p>
                                      <div class="course_meta d-flex justify-content-lg-between align-items-lg-center flex-lg-row flex-column mt-4">
                                          <div class="authr_meta">
                                              <img src="https://bootdey.com/img/Content/avatar/avatar1.png" alt="" />
                                              <span class="d-inline-block ml-2">Cameron</span>
                                          </div>
                                          <div class="mt-lg-0 mt-3">
                                              <span class="meta_info mr-4">
                                                  <a href="#"> <i class="ti-user mr-2"></i>25 </a>
                                              </span>
                                              <span class="meta_info">
                                                  <a href="#"> <i class="ti-heart mr-2"></i>35 </a>
                                              </span>
                                          </div>
                                      </div>
                                  </div>
                              </div>
                          </div>
                      </div>
                  </div>
              </div>
          </div>
      </div>
  </div>
</div>
<!-- Fourth category -->

<div class="container-xxl py-5 category">
  <div class="container">
      <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
          <h6 class="section-title bg-white text-center text-primary px-3">Categories</h6>
          <h1 class="mb-5">Digital Marketing</h1>
      </div>
  </div>
</div>
<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js" integrity="sha512-bPs7Ae6pVvhOSiIcyUClR7/q2OAsRiovw4vAkX+zJbw3ShAeeqezq50RIIcIURq7Oa20rW2n2q+fyXBNcU9lrw==" crossorigin="anonymous"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" integrity="sha512-tS3S5qG0BlhnQROyJXvNjeEM4UpMXHrQfTGmbQ1gKmelCxlSEBUaxhRBj/EFTzpbP4RVSrpEikbmdJobCvhE3g==" crossorigin="anonymous" />
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/ti-icons@0.1.2/css/themify-icons.css">
<div class="popular_courses">
  <div class="container">
      <div class="row justify-content-center">
         </div>
      <div class="row">
          <div class="col-lg-12">
              <div class="owl-carousel active_course owl-loaded owl-drag">
                  <div class="owl-stage-outer">
                      <div class="owl-stage" style="transform: translate3d(-1520px, 0px, 0px); transition: all 1.5s ease 0s; width: 3420px;">
                          <div class="owl-item cloned" style="width: 350px; margin-right: 30px;">
                              <div class="single_course">
                                  <div class="course_head">
                                      <img class="img-fluid" src="https://via.placeholder.com/350x280/FFB6C1/000000" alt="" />
                                  </div>
                                  <div class="course_content">
                                      <span class="price">2500 LKR</span>
                                      <span class="tag mb-4 d-inline-block">design</span>
                                      <h4 class="mb-3">
                                          <a href="#">Custom Product Design</a>
                                      </h4>
                                      <p>
                                          One make creepeth man bearing their one firmament won't fowl meat over sea
                                      </p>
                                      <div class="course_meta d-flex justify-content-lg-between align-items-lg-center flex-lg-row flex-column mt-4">
                                          <div class="authr_meta">
                                              <img src="https://bootdey.com/img/Content/avatar/avatar2.png" alt="" />
                                              <span class="d-inline-block ml-2">Cameron</span>
                                          </div>
                                          <div class="mt-lg-0 mt-3">
                                              <span class="meta_info mr-4">
                                                  <a href="#"> <i class="ti-user mr-2"></i>25 </a>
                                              </span>
                                              <span class="meta_info">
                                                  <a href="#"> <i class="ti-heart mr-2"></i>35 </a>
                                              </span>
                                          </div>
                                      </div>
                                  </div>
                              </div>
                          </div>
                          <div class="owl-item cloned" style="width: 350px; margin-right: 30px;">
                              <div class="single_course">
                                  <div class="course_head">
                                      <img class="img-fluid" src="https://via.placeholder.com/350x280/87CEFA/000000" alt="" />
                                  </div>
                                  <div class="course_content">
                                      <span class="price">2500 LKR</span>
                                      <span class="tag mb-4 d-inline-block">design</span>
                                      <h4 class="mb-3">
                                          <a href="#">Social Media Network</a>
                                      </h4>
                                      <p>
                                          One make creepeth man bearing their one firmament won't fowl meat over sea
                                      </p>
                                      <div class="course_meta d-flex justify-content-lg-between align-items-lg-center flex-lg-row flex-column mt-4">
                                          <div class="authr_meta">
                                              <img src="https://bootdey.com/img/Content/avatar/avatar1.png" alt="" />
                                              <span class="d-inline-block ml-2">Cameron</span>
                                          </div>
                                          <div class="mt-lg-0 mt-3">
                                              <span class="meta_info mr-4">
                                                  <a href="#"> <i class="ti-user mr-2"></i>25 </a>
                                              </span>
                                              <span class="meta_info">
                                                  <a href="#"> <i class="ti-heart mr-2"></i>35 </a>
                                              </span>
                                          </div>
                                      </div>
                                  </div>
                              </div>
                          </div>
                          <div class="owl-item cloned" style="width: 350px; margin-right: 30px;">
                              <div class="single_course">
                                  <div class="course_head">
                                      <img class="img-fluid" src="https://via.placeholder.com/350x280/FF7F50/000000" alt="" />
                                  </div>
                                  <div class="course_content">
                                      <span class="price">2500 LKR</span>
                                      <span class="tag mb-4 d-inline-block">design</span>
                                      <h4 class="mb-3">
                                          <a href="#">Computer Engineering</a>
                                      </h4>
                                      <p>
                                          One make creepeth man bearing their one firmament won't fowl meat over sea
                                      </p>
                                      <div class="course_meta d-flex justify-content-lg-between align-items-lg-center flex-lg-row flex-column mt-4">
                                          <div class="authr_meta">
                                              <img src="https://bootdey.com/img/Content/avatar/avatar7.png" alt="" />
                                              <span class="d-inline-block ml-2">Cameron</span>
                                          </div>
                                          <div class="mt-lg-0 mt-3">
                                              <span class="meta_info mr-4">
                                                  <a href="#"> <i class="ti-user mr-2"></i>25 </a>
                                              </span>
                                              <span class="meta_info">
                                                  <a href="#"> <i class="ti-heart mr-2"></i>35 </a>
                                              </span>
                                          </div>
                                      </div>
                                  </div>
                              </div>
                          </div>
                          <div class="owl-item" style="width: 350px; margin-right: 30px;">
                              <div class="single_course">
                                  <div class="course_head">
                                      <img class="img-fluid" src="https://via.placeholder.com/350x280/20B2AA/000000" alt="" />
                                  </div>
                                  <div class="course_content">
                                      <span class="price">2500 LKR</span>
                                      <span class="tag mb-4 d-inline-block">design</span>
                                      <h4 class="mb-3">
                                          <a href="#">Custom Product Design</a>
                                      </h4>
                                      <p>
                                          One make creepeth man bearing their one firmament won't fowl meat over sea
                                      </p>
                                      <div class="course_meta d-flex justify-content-lg-between align-items-lg-center flex-lg-row flex-column mt-4">
                                          <div class="authr_meta">
                                              <img src="https://bootdey.com/img/Content/avatar/avatar6.png" alt="" />
                                              <span class="d-inline-block ml-2">Cameron</span>
                                          </div>
                                          <div class="mt-lg-0 mt-3">
                                              <span class="meta_info mr-4">
                                                  <a href="#"> <i class="ti-user mr-2"></i>25 </a>
                                              </span>
                                              <span class="meta_info">
                                                  <a href="#"> <i class="ti-heart mr-2"></i>35 </a>
                                              </span>
                                          </div>
                                      </div>
                                  </div>
                              </div>
                          </div>
                          <div class="owl-item active" style="width: 350px; margin-right: 30px;">
                              <div class="single_course">
                                  <div class="course_head">
                                      <img class="img-fluid" src="https://via.placeholder.com/350x280/8A2BE2/000000" alt="" />
                                  </div>
                                  <div class="course_content">
                                      <span class="price">2500 LKR</span>
                                      <span class="tag mb-4 d-inline-block">design</span>
                                      <h4 class="mb-3">
                                          <a href="#">Social Media Network</a>
                                      </h4>
                                      <p>
                                          One make creepeth man bearing their one firmament won't fowl meat over sea
                                      </p>
                                      <div class="course_meta d-flex justify-content-lg-between align-items-lg-center flex-lg-row flex-column mt-4">
                                          <div class="authr_meta">
                                              <img src="https://bootdey.com/img/Content/avatar/avatar5.png" alt="" />
                                              <span class="d-inline-block ml-2">Cameron</span>
                                          </div>
                                          <div class="mt-lg-0 mt-3">
                                              <span class="meta_info mr-4">
                                                  <a href="#"> <i class="ti-user mr-2"></i>25 </a>
                                              </span>
                                              <span class="meta_info">
                                                  <a href="#"> <i class="ti-heart mr-2"></i>35 </a>
                                              </span>
                                          </div>
                                      </div>
                                  </div>
                              </div>
                          </div>
                          <div class="owl-item active" style="width: 350px; margin-right: 30px;">
                              <div class="single_course">
                                  <div class="course_head">
                                      <img class="img-fluid" src="https://via.placeholder.com/350x280/008B8B/000000" alt="" />
                                  </div>
                                  <div class="course_content">
                                      <span class="price">2500 LKR</span>
                                      <span class="tag mb-4 d-inline-block">design</span>
                                      <h4 class="mb-3">
                                          <a href="#">Computer Engineering</a>
                                      </h4>
                                      <p>
                                          One make creepeth man bearing their one firmament won't fowl meat over sea
                                      </p>
                                      <div class="course_meta d-flex justify-content-lg-between align-items-lg-center flex-lg-row flex-column mt-4">
                                          <div class="authr_meta">
                                              <img src="https://bootdey.com/img/Content/avatar/avatar4.png" alt="" />
                                              <span class="d-inline-block ml-2">Cameron</span>
                                          </div>
                                          <div class="mt-lg-0 mt-3">
                                              <span class="meta_info mr-4">
                                                  <a href="#"> <i class="ti-user mr-2"></i>25 </a>
                                              </span>
                                              <span class="meta_info">
                                                  <a href="#"> <i class="ti-heart mr-2"></i>35 </a>
                                              </span>
                                          </div>
                                      </div>
                                  </div>
                              </div>
                          </div>
                          <div class="owl-item cloned active" style="width: 350px; margin-right: 30px;">
                              <div class="single_course">
                                  <div class="course_head">
                                      <img class="img-fluid" src="https://via.placeholder.com/350x280/FF69B4/000000" alt="" />
                                  </div>
                                  <div class="course_content">
                                      <span class="price">2500 LKR</span>
                                      <span class="tag mb-4 d-inline-block">design</span>
                                      <h4 class="mb-3">
                                          <a href="#">Custom Product Design</a>
                                      </h4>
                                      <p>
                                          One make creepeth man bearing their one firmament won't fowl meat over sea
                                      </p>
                                      <div class="course_meta d-flex justify-content-lg-between align-items-lg-center flex-lg-row flex-column mt-4">
                                          <div class="authr_meta">
                                              <img src="https://bootdey.com/img/Content/avatar/avatar3.png" alt="" />
                                              <span class="d-inline-block ml-2">Cameron</span>
                                          </div>
                                          <div class="mt-lg-0 mt-3">
                                              <span class="meta_info mr-4">
                                                  <a href="#"> <i class="ti-user mr-2"></i>25 </a>
                                              </span>
                                              <span class="meta_info">
                                                  <a href="#"> <i class="ti-heart mr-2"></i>35 </a>
                                              </span>
                                          </div>
                                      </div>
                                  </div>
                              </div>
                          </div>
                          <div class="owl-item cloned" style="width: 350px; margin-right: 30px;">
                              <div class="single_course">
                                  <div class="course_head">
                                      <img class="img-fluid" src="https://via.placeholder.com/350x280/20B2AA/000000" alt="" />
                                  </div>
                                  <div class="course_content">
                                      <span class="price">2500 LKR</span>
                                      <span class="tag mb-4 d-inline-block">design</span>
                                      <h4 class="mb-3">
                                          <a href="#">Social Media Network</a>
                                      </h4>
                                      <p>
                                          One make creepeth man bearing their one firmament won't fowl meat over sea
                                      </p>
                                      <div class="course_meta d-flex justify-content-lg-between align-items-lg-center flex-lg-row flex-column mt-4">
                                          <div class="authr_meta">
                                              <img src="https://bootdey.com/img/Content/avatar/avatar2.png" alt="" />
                                              <span class="d-inline-block ml-2">Cameron</span>
                                          </div>
                                          <div class="mt-lg-0 mt-3">
                                              <span class="meta_info mr-4">
                                                  <a href="#"> <i class="ti-user mr-2"></i>25 </a>
                                              </span>
                                              <span class="meta_info">
                                                  <a href="#"> <i class="ti-heart mr-2"></i>35 </a>
                                              </span>
                                          </div>
                                      </div>
                                  </div>
                              </div>
                          </div>
                          <div class="owl-item cloned" style="width: 350px; margin-right: 30px;">
                              <div class="single_course">
                                  <div class="course_head">
                                      <img class="img-fluid" src="https://via.placeholder.com/350x280/#FFA07A/000000" alt="" />
                                  </div>
                                  <div class="course_content">
                                      <span class="price">2500 LKR</span>
                                      <span class="tag mb-4 d-inline-block">design</span>
                                      <h4 class="mb-3">
                                          <a href="#">Computer Engineering</a>
                                      </h4>
                                      <p>
                                          One make creepeth man bearing their one firmament won't fowl meat over sea
                                      </p>
                                      <div class="course_meta d-flex justify-content-lg-between align-items-lg-center flex-lg-row flex-column mt-4">
                                          <div class="authr_meta">
                                              <img src="https://bootdey.com/img/Content/avatar/avatar1.png" alt="" />
                                              <span class="d-inline-block ml-2">Cameron</span>
                                          </div>
                                          <div class="mt-lg-0 mt-3">
                                              <span class="meta_info mr-4">
                                                  <a href="#"> <i class="ti-user mr-2"></i>25 </a>
                                              </span>
                                              <span class="meta_info">
                                                  <a href="#"> <i class="ti-heart mr-2"></i>35 </a>
                                              </span>
                                          </div>
                                      </div>
                                  </div>
                              </div>
                          </div>
                      </div>
                  </div>
              </div>
          </div>
      </div>
  </div>
</div>

<script type="text/javascript">
  function active_course() {
    if ($(".active_course").length) {
      $(".active_course").owlCarousel({
        loop: true,
        margin: 20,
        items: 3,
        nav: true,
        autoplay: 2500,
        smartSpeed: 1500,
        dots: false,
        responsiveClass: true,
        thumbs: true,
        thumbsPrerendered: true,
        responsive: {
          0: {
            items: 1,
            margin: 0
          },
          991: {
            items: 2,
            margin: 30
          },
          1200: {
            items: 3,
            margin: 30
          }
        }
      });
    }
  }
  active_course();
</script>
</body>
</html>
