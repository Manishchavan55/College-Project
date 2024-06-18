<?php include 'header.php'; ?>
 

    <style>.close-btn {
    position: absolute;
    top: 10px;
    right: 10px;
    background: none;
    border: none;
    color: white;
    font-size: 18px;
    cursor: pointer;
}
</style>
<div class="subheader normal-bg section-padding mt-5" style='background-image: url("website png data/home page png/banner.jpg"); margin-top: 130px'>
    <div class="container">
        <div class="page-banner-content" style="margin-top: -77px;">
            <h1>Course</h1>
            <ul>
                <li><a href="index.php">Home</a></li> 
                <li>Course</li>
            </ul>
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
                            <input type="hidden" name="hdnenroll" value="<?php echo $row['id'];?>">
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
<script>
    function closeForm() {
        document.getElementById('form_container').style.display = 'none';
    }
</script>


<?php include 'footer.php'; ?>