
<?php include 'header.php'; ?>
<style>
    .alert {
        color: red;
    }
    
    @media (max-width: 768px) {
        .main-banner .slide-item {
	    height: 414px;
        width: 100%;
        }
         .padding{
            padding-top: 0;
            padding-bottom: 0;
            margin: 0;
         }
    }
@media (min-width:360px) and (max-width:460px) {
    .single-courses-card .courses-content .admin-profile {
	position: relative;
	padding-left: 76px;
	padding-bottom: 10px;
	/* margin-bottom: 20px; */
}
    .header .navigation-wrapper nav > .main-navigation .logo {
	width: 185px;
	height: 55px;
	position: absolute;
	top: 0;
	left: 90px;
}
.slider-content h1 {
    font-size: 46px;
}
}
@media (max-width: 430px) {
        .client-logo img {
            padding: 75px;
        }

        |
            .main-navigation .logo a #LogoImage {
                width: 245px;
            margin-top: -2px;
            height: 157px;
            left: 195px;
            }
            .main-navigation .logo a #MainImage.img-fluid {
                width: 172px;
    margin-top: -7px;
    margin-left: 24px;
            }
    }
    
#video-container {
        position: fixed;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background-color: black;
        z-index: 9999; /* Ensure video is on top of other elements */
        display: none; /* Hide the video initially */
        animation: fadeOutVideo 22s forwards; /* Apply fade-out animation */
    }
    @keyframes fadeOutVideo {
        from { opacity: 1; }
        to { opacity: 0; }
    }
    #video-player {
        width: 100%;
        height: 100%;
        object-fit: cover; /* Ensure the video covers the entire container */
    }
    #main-content {
        display: none; /* Hide the main content initially */
        animation: fadeInContent 5s forwards; /* Apply fade-in animation */
    }
    @keyframes fadeInContent {
        from { opacity: 0; }
        to { opacity: 1; }
    }
</style>
<div id="video-container">
    <video id="video-player" muted autoplay>
        <source src="website png data/About page/PAPERBOAT01MAIN.mp4" type="video/mp4">
        Your browser does not support the video tag.
    </video>
</div>
<div class="slider p-relative">
    <div class="main-banner arrow-layout-1">
        <?php
         $folderPath = 'Award hoem page gallary';

         $files = scandir($folderPath);

         foreach ($files as $file) {
             if ($file != "." && $file != "..") {
                 echo '<div class="slide-item">';
                echo '<img src="' . $folderPath . '/' . $file . '" class="image-fit" alt="Slider">';
                echo '</div>';
            }
        }
        ?>
    </div>
</div>

<div class="container bg-#F3721A">
    <div class="banner-tabs">
        <div class="row">
            <div class="col-md-3 col-sm-3 co-xs-12" data-aos="fade-down" data-aos-duration="2000">
                <div class="counter-container">
                    <img src="PNG_SECTION/PROJECTS.png" class="mb-4" alt="img">
                    <div class="counter" data-target="6"></div>
                    <p>PROJECT</p>
                </div>
            </div>
            <div class="col-md-3 col-sm-3 co-xs-12" data-aos="fade-up" data-aos-duration="2000">
                <div class="counter-container">
                    <img src="PNG_SECTION/ARTWORK.png" class="mb-4" alt="img">
                    <div class="counter" data-target="23"></div>
                    <p>ARTWORKS</p>
                </div>
            </div>
            <div class="col-md-3 col-sm-3 co-xs-12" data-aos="fade-down" data-aos-duration="2000">
                <div class="counter-container">
                    <img src="PNG_SECTION/AWARD.png" class="mb-4" alt="img">
                    <div class="counter" data-target="12"></div>
                    <p> AWARDS </p>
                </div>
            </div>
            <div class="col-md-3 col-sm-3 co-xs-12" data-aos="fade-up" data-aos-duration="2000">
                <div class="counter-container">
                    <img src="PNG_SECTION/CLIENT.png" class="mb-4" alt="img">
                    <div class="counter" data-target="14"></div>
                    <p> CLIENTS </p>
                </div>
            </div>
        </div>
    </div>
</div>

<section class="section-padding our-work-sec bg-light-white">
    <div class="container">
        <div class="section-header text-center">
            <span></span>
            <div class="section-heading">
                <h3 class="text-custom-black">Our <span class="text-custom">Courses</span></h3>
                <div class="section-description">
                    <p class="text-light-dark">Explore our wide range of courses designed to provide you with the skills and knowledge you need to succeed in your chosen field.  Start your journey towards success with us today!</p>
                </div>
            </div>
        </div>
        <div class="row">
            <?php
            $conn = new mysqli("localhost", "root", "", "bcs_ty23-24_b3");

            if ($conn->connect_error) {
                die("Connection failed: " . $conn->connect_error);
            }

            $sql = "SELECT * FROM tbladd_course";
            $result = mysqli_query($conn, $sql);

            if ($result->num_rows > 0) {
                $counter = 0; // Counter for unique modal IDs
                while ($row = $result->fetch_assoc()) {
              
                    $counter++;
            ?>
            <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-duration="2000">
               <form action="enroll.php" method="post">
                <div class="single-courses-card">
                    <div class="courses-img" style="width: 100%; height: 300px;">
                        <a href="https://www.youtube.com/@PencilBoatVisualArtStudi-bu3gs/videos">
                        <?php echo '<img src="admin pannel/uploads/' . $row["course_image"] . '" alt="Image" style="width: 100%; height: 100%; object-fit: cover;">'; ?>                        </a>
                    </div>
                    <div class="courses-content" style="height: 100%;">
                        <a href="https://www.youtube.com/@PencilBoatVisualArtStudi-bu3gs/videos">
                            <h4>
                                <?php echo $row["Course_Name"]; ?>
                            </h4>
                        </a>
                        <div class="bottom-content">
                            <p>
                                <?php echo $row["Course_discription"]; ?>
                            </p>
                            <div class="course-duration">
                                <i class="fa fa-clock"></i>
                                <?php echo $row["course_duration"]; ?>
                            </div>
                            <a href=""><input style="margin-left: 200px;" type="submit" value="Enroll Now" class="btn btn-primary btn-enroll" data-toggle="modal"
                                data-target="#enrollModal<?php echo $counter; ?>">  </a>
                            <input type="hidden" name="Course_Name" value="<?php echo $row['Course_Name'];?>">
                        </div>
                    </div>
                 </div>
              </form>
            </div>
            <?php
                }
            }
            $conn->close();
            ?>
        </div>
    </div>
</section>

<section id="clients" class="section-bg">
    <div class="container">
        <div class="section-header" style="flex-direction: column; align-items: center;">
            <h3>Our CLients</h3>
            <p>Meet our happy clients</p>
        </div>
        <div class="row no-gutters clients-wrap clearfix wow fadeInUp"
            style="visibility: visible; animation-name: fadeInUp;">
            <?php
         $folderPath = 'Client Photos';

         $files = scandir($folderPath);

         foreach ($files as $file) {
             if ($file != "." && $file != "..") {
                 echo '<div class="col-lg-3 col-md-4 col-xs-6" style="margin:0px">
                <div class="client-logo">';
                echo '<img src="' . $folderPath . '/' . $file . '" class="img-fluid" alt="">';
                echo ' </div>
                </div>';
            }
        }
        ?>

        </div>

    </div>

</section>

<section class="section-padding our_articles our-work-sec">
    <div class="container">
        <div class="section-header text-center">
            <span></span>
            <div class="section-heading">
                <h3 class="text-custom-black">Our <span class="text-custom">Services</span></h3>
                <div class="section-description">
                    <p class="text-light-dark">We are providing a beast Services presented are.</p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <div class="blog-slider arrow-layout-2 row">
                    <?php
            $conn = new mysqli("localhost", "root", "", "bcs_ty23-24_b3");

             if ($conn->connect_error) {
              die("Connection failed: " . $conn->connect_error);
                }

            $sql = "SELECT * FROM tbladd_service";
            $result = mysqli_query($conn, $sql);
            ?>

                    <?php if ($result->num_rows > 0){ ?>
                    <?php while ($row = $result->fetch_assoc()){      
                    
                  ?>
                    <form method="post" action="service_details.php">
                        <article class="col-12 post slide-item " style="width: 300px;" data-aos="fade-up"
                            data-aos-duration="3000">
                            <div class="post-wrapper bx-wrapper">
                                <div class="post-img animate-img" style="width: 100%; height: 300px;">
                                    <a href="#"> 
                                    <?php echo '<img src="admin pannel/serviceImage/' . $row["service_image"] . '" alt="Image" style="width: 100%; height: 100%; object-fit: cover;">'; ?>  </a>
                                </div>
                                <div class="blog-meta padding-20 bg-custom-white p-relative">
                                    <div class="post-heading">
                                        <h2> <a href="#" class="text-custom-black fw-600 fs-20">
                                                <?php echo $row["Service_Name"]; ?>
                                            </a> </h2>

                                        <p class="text-light-dark no-margin">
                                            <?php echo $row["Service_discription"]; ?>
                                        </p>
                                    </div>
                                </div>
                                <div class="post-footer">
                                <input type="hidden" name="hdnService" value="<?php echo $row['id'];?>">
                                    <a href="https://www.youtube.com/@PencilBoatVisualArtStudi-bu3gs" style="border: 2px solid orange;"><input type="button" class="btn btn-sm animated-button victoria-one pt-2"
                                        value="Read More" /></a>
                                </div>
                            </div>
                        </article>
                    </form>
                    <?php } 
              } ?>


                    <?php $conn->close(); ?>

                </div>
            </div>
        </div>
    </div>
</section>

<section class="section-padding gallery our-work-sec">
    <div class="container gallery-container">
        <div class="section-header text-center">
            <span></span>
            <div class="section-heading">
                <h3 class="text-custom-black">Our <span class="text-custom">Gallery</span></h3>
                <div class="section-description">
                    <p class="text-light-dark">Check out our stunning collection of images showcasing our work.</p>
                </div>
            </div>
        </div>
        <div class="tz-gallery gallery-grid">
            <?php
         $folderPath = 'admin pannel/Image_gallary';

         $files = scandir($folderPath);

         foreach ($files as $file) {
             if ($file != "." && $file != "..") {
                 echo '<div class="col-lg-4">
                        <a   class="lightbox popup" href="' . $folderPath . '/' . $file . '">
                          <img src="' . $folderPath . '/' . $file . '" alt="img" style="height: 337px;
                          object-fit: cover;">
                        </a>
                      </div>';
            }
        }
        ?>
        </div>
    </div>
</section>
 
<?php
 
$conn = mysqli_connect("localhost", "root", "", "bcs_ty23-24_b3");
if (!$conn) {  
  die("Error". mysqli_connect_error());
}

if (isset($_POST["btnSubmit"])) {
    $name = $email = $subject = $phone = $message = "";
    $nameErr = $emailErr = $subjectErr = $phoneErr = $messageErr = "";

    if (empty($_POST["txtName"])) {
        $nameErr = "Name is required";
    } else {
        $name = $_POST["txtName"];
        // Check if name only contains letters and whitespace
        if (!preg_match("/^[a-zA-Z ]*$/", $name)) {
            $nameErr = "Only letters and white space allowed";
        }
    }

    if (empty($_POST["txtEmail"])) {
        $emailErr = "Email is required";
    } else {
        $email = $_POST["txtEmail"];
        // Check if email address is well-formed
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $emailErr = "Invalid email format";
        }
    }

    if (empty($_POST["txtSubject"])) {
        $subjectErr = "Subject is required";
    } else {
        $subject = $_POST["txtSubject"];
        // Check if subject only contains letters and whitespace
        if (!preg_match("/^[a-zA-Z ]*$/", $subject)) {
            $subjectErr = "Only letters and white space allowed";
        }
    }

    if (empty($_POST["txtPhone"])) {
        $phoneErr = "Phone number is required";
    } else {
        $phone = $_POST["txtPhone"];
        // Check if phone number only contains numbers
        if (!preg_match("/^[0-9]*$/", $phone)) {
            $phoneErr = "Only numbers allowed";
        }
    }

    if (empty($_POST["txtmessage"])) {
        $messageErr = "Message is required";
    } else {
        $message = $_POST["txtmessage"];
    }

    if (empty($nameErr) && empty($emailErr) && empty($subjectErr) && empty($phoneErr) && empty($messageErr)) {
        $successMSG = "<p class='alert alert-success'>Form submitted successfully!</p>";
        $Name = $_POST["txtName"];
        $Email = $_POST["txtEmail"];
        $Subject = $_POST["txtSubject"];
        $Phone = $_POST["txtPhone"];
        $Message = $_POST["txtmessage"];

        // Add validation here

        $sql = "INSERT INTO `tblcontact` (`name`, `email`, `subject`, `contact`, `Message`) VALUES ('$Name', '$Email', '$Subject', '$Phone', '$Message')";
        if (mysqli_query($conn, $sql)) {
            echo "<script> alert('🎉 Your message has been sent successfully! We'll get back to you shortly. 😊'); </script>";
            header("location: index.php");
            exit();
        } else {
            echo "Error: " . $sql . "<br>" . mysqli_error($conn);
        }
    }
}
?>
 <section>
<div class="container">
<div class="row">
    <div class="col-lg-7">
        <div class="section-header style-left">
            <div class="section-heading">
                <h3 class="text-custom-black">Get In Touch</h3>
                <div class="section-description">
                    <p class="text-light-dark">Ready to start an amazing Videos, Photography,
                        Graphic Design, or Film Post Production project? We’d love to hear from you!.</p>
                </div>
            </div>
        </div>
        <form method="post" class="mb-md-80">
            <div class="row">
                <div class="col-md-6 mb-4 padding">
                    <div class="form-group">
                        <input type="text" name="txtName" class="form-control form-control-custom" placeholder="Name" required="">
                        <p class="alert "><?php echo @$nameErr; ?></p>
                    </div>
                </div>
                <div class="col-md-6 mb-4 padding">
                    <div class="form-group">
                        <input type="email" name="txtEmail" class="form-control form-control-custom" placeholder="Email" required="">
                        <p class="alert "><?php echo @$emailErr; ?></p>
                    </div>
                </div>
                <div class="col-md-6 mb-4 padding">
                    <div class="form-group">
                        <input type="text" name="txtSubject" class="form-control form-control-custom" placeholder="Subject" required="">
                        <p class="alert "><?php echo @$subjectErr; ?></p>
                    </div>
                </div>
                <div class="col-md-6 mb-4 padding">
                    <div class="form-group">
                        <input type="tel" name="txtPhone" class="form-control form-control-custom" placeholder="Phone" required="">
                        <p class="alert "><?php echo @$phoneErr; ?></p>
                    </div>
                </div>
                <div class="col-md-12 mb-4">
                    <div class="form-group">
                        <textarea name="txtmessage" rows="5" class="form-control form-control-custom" placeholder="Message" required=""></textarea>
                        <p class="alert "><?php echo @$messageErr; ?></p>
                    </div>
                    <button style="margin-top: 40px;" type="submit" class="btn btn-primary btn-block" name="btnSubmit">Submit</button>
                </div>
            </div>
        </form>
    </div>
    <div class="col-lg-5">
        <div class="contact-map full-height">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d60043.57537248729!2d75.24903212167968!3d19.85165060000001!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3bdb998c2bff4da7%3A0xfd6fd4354596acd0!2spencil%20boat%20visual%20art%20studio!5e0!3m2!1sen!2sin!4v1710321932543!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
    </div>
</div>
</div>
</section>


<script src="admin pannel/assets/js/custom.js"></script>
<script>
    window.addEventListener('load', function() {
        // Show the video container
        document.getElementById('video-container').style.display = 'block';
        
        var videoPlayer = document.getElementById('video-player');
        
        // When the video ends or plays for 5 seconds, hide the video and show the main content
        videoPlayer.onended = function() {
            hideVideo();
        };
        
        setTimeout(function() {
            hideVideo();
        }, 5000); // 5000 milliseconds = 5 seconds
        
        function hideVideo() {
            videoPlayer.pause(); // Pause the video
            document.getElementById('video-container').style.display = 'none'; // Hide the video container
            document.getElementById('main-content').style.display = 'block'; // Show the main content
        }
    });
</script>
<?php include 'footer.php'; ?>