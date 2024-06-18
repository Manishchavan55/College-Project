<?php include 'header.php'; ?>
<div class="subheader normal-bg section-padding mt-5" style='background-image: url("website png data/home page png/banner.jpg"); margin-top: 130px'>
    <div class="container">
        <div class="page-banner-content" style="margin-top: -77px;">
            <h1>Services</h1>
            <ul>
                <li><a href="index.php">Home</a></li> 
                <li>Services</li>
            </ul>
        </div>
    </div>
</div>
<section class="section-padding our_articles our-work-sec">
    <div class="container">
        <div class="section-header text-center">
            <span></span>
            <div class="section-heading">
                <h3 class="text-custom-black">Our <span class="text-custom">Services</span></h3>
                <div class="section-description">
                    <p class="text-light-dark">We are providing the best Services presented below.</p>
                </div>
            </div>
        </div>
        <div class="row">
            <?php
            $conn = new mysqli("localhost", "AmitShinde", "Pavi@21", "bcs_ty23-24_b3");

            if ($conn->connect_error) {
                die("Connection failed: " . $conn->connect_error);
            }

            $sql = "SELECT * FROM tbladd_service";
            $result = mysqli_query($conn, $sql);

            if (!$result) {
                die("Query failed: " . mysqli_error($conn));
            }

            if ($result->num_rows > 0): ?>
                <?php while ($row = $result->fetch_assoc()): ?>
                    <article class="col-lg-4 col-md-6 post mb-xl-30">
                        <div class="post-wrapper bx-wrapper">
                            <div class="post-img animate-img">
                                <a href="#">
                                    <img src="admin pannel/serviceImage/<?php echo $row['service_image']; ?>" alt="Image" style="width: 100%; height: 100%; object-fit: cover;">
                                </a>
                                <div class="post-date">
                                    <?php 
                                    // Extracting and formatting the date
                                    $date = date('M d, Y', strtotime($row['date']));
                                    ?>
                                    <div class="text-custom-white fw-600 date bg-custom-blue" style="font-size: 10px;"><?php echo $date; ?></div>
                                </div>
                            </div>
                            <div class="blog-meta padding-20 bg-custom-white p-relative">
                                <div class="post-heading">
                                    <h2> <a href="blog-details.html" class="text-custom-black fw-600 fs-20"><?php echo $row["Service_Name"]; ?></a> </h2>
                                    <p class="text-light-dark no-margin"><?php echo $row["Service_discription"]; ?></p>
                                </div>
                            </div>
                            <div class="post-footer">
                                <a href="https://www.youtube.com/@PencilBoatVisualArtStudi-bu3gs" class="btn btn-sm animated-button victoria-one pt-2">Read More</a> 
                            </div>
                        </div>
                    </article>
                <?php endwhile; ?>
            <?php endif; ?>

            <?php $conn->close(); ?>
        </div>
    </div>
</section>

<?php include 'footer.php'; ?>
