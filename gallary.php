<?php  include 'header.php'; ?>
<div class="subheader normal-bg section-padding mt-5" style='background-image: url("website png data/home page png/banner.jpg"); margin-top: 130px'>
    <div class="container">
        <div class="page-banner-content" style="margin-top: -77px;">
            <h1>Gallery</h1>
            <ul>
                <li><a href="index.php">Home</a></li> 
                <li>Gallery</li>
            </ul>
        </div>
    </div>
</div>
  <!-- Start gallery -->
 
<section class="section-padding gallery our-work-sec">
    <div class="container gallery-container">
        <div class="section-header text-center">
            <span></span>
            <div class="section-heading">
                <h3 class="text-custom-black">Our <span class="text-custom">Gallery</span></h3>
                <div class="section-description">
                    <p class="text-light-dark">Welcome to our gallery, where you can explore stunning images of our work. We take pride in showcasing our achievements and creativity. Take a moment to browse through our collection and get inspired..!</p>
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
  <!-- End gallery -->
   <?php  include 'footer.php'; ?>