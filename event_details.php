<?php
if(isset($_POST['hdnService'])) {
    $hdnId = $_POST['hdnService'];

    $conn = mysqli_connect("localhost", "root", "", "bcs_ty23-24_b3");

    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }

    $sql = "SELECT * FROM tbladd_event WHERE id = $hdnId";
    $result = mysqli_query($conn, $sql);
    if ($result->num_rows > 0) {
        $event = $result->fetch_assoc();
    } else {
        echo "No service found with the given ID.";
    }

    mysqli_close($conn);
} else {
    echo "No data submitted.";
}
?>

<?php include 'header.php'; ?>
<!-- Start Listing detail -->
<br>
<section class="section-padding bg-light-white listing-details">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="listing-details-inner bg-custom-white padding-20">
                    <div class="row">
                        <div class="col-lg-8">
                            <h4><?php echo @$event['Event_Name']; ?></h4>
                            <div id="carouselExample" class="carousel slide" data-ride="carousel">
                                <div class="carousel-inner">
                                 
                                    <?php
                                    $folderPath = 'admin pannel/EventImages/' . $event["Event_Name"];
                                    $files = scandir($folderPath);
                                    $first = true;
                                    foreach ($files as $file) {
                                        if ($file != "." && $file != "..") {
                                            echo '<div class="carousel-item ' . ($first ? 'active' : '') . '">
                                                    <a class="lightbox popup" href="' . $folderPath . '/' . $file . '">
                                                        <img src="' . $folderPath . '/' . $file . '" class="d-block w-100" alt="Image" style="height: 400px; object-fit: cover;">
                                                    </a>
                                                </div>';
                                            $first = false;
                                        }
                                    }
                                    ?>
                                </div>
                                <!-- Add Previous & Next Arrows Here -->
                                <a class="carousel-control-prev" href="#carouselExample" role="button" data-slide="prev">
                                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                    <span class="sr-only">Previous</span>
                                </a>
                                <a class="carousel-control-next" href="#carouselExample" role="button" data-slide="next">
                                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                    <span class="sr-only">Next</span>
                                </a>
                            </div>
                            <hr> <div class="course-dtl-meta">
                                <ul class="detail-meta">
                                    <li>
                                        <i class="fa fa-clock"></i>
                                        <span><b>Last Update :</b> <?php echo $event["event_date_time"]; ?></span>
                                    </li>
                                </ul>
                            </div>
                            <div class="row">
                                <div class="card mt-2">
                                    <div class="card-header">
                                        <ul class="nav nav-tabs nav-tabs-neutral" role="tablist">
                                            <li class="nav-item">
                                                <a class="nav-link active" data-toggle="tab" href="#home1" role="tab">Overview</a>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="card-body pt-3 pl-0 pr-0 pb-0">
                                        
                                        <div class="tab-pane" id="profile1" role="tabpanel">
                                            <div class="overview-box">
                                                <h4>Visual Learning with theory</h4>
                                                <p><?php echo $event["Event_discription"]; ?></p>
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
</section>
<!-- End Listing detail -->
<?php include 'footer.php'; ?>