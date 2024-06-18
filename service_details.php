<?php
if(isset($_POST['hdnService'])) {
    $hdnId = $_POST['hdnService'];
   

    $conn = mysqli_connect("localhost", "AmitShinde", "Pavi@2017", "bcs_ty23-24_b3");

    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }

    $sql = "SELECT * FROM tbladd_event WHERE id = $hdnId";
    $result = mysqli_query($conn, $sql);
    if ($result->num_rows > 0) {
        $event = $result->fetch_assoc();
        print_r($event);
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

<section class="section-padding bg-light-white listing-details">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="listing-details-inner bg-custom-white padding-20">
                    <div class="row">
                        <div class="col-lg-8">
                            <h4>
                               
                            </h4>
                            <div class="detail-slider-for mb-xl-20 magnific-gallery">
                                <div class="slide-item">
                                    <?php 
                              $imagePath = 'admin pannel/EventImages/' . $event["Event_Name"];
                                      if (file_exists($imagePath)) {
                           echo '<a href="' . $imagePath . '" class="popup"><img src="' . $imagePath . '" alt="Image" width="100px"></a>';
                          } else {
                              echo 'Image not found';
                          }
                          ?>
                                </div>
                            </div>

                            <hr>

                            <div class="course-dtl-meta">
                                <ul class="detail-meta">
                                    <li>
                                        <i class="fa fa-clock"></i>
                                        <span><b>Last Update :</b>
                                            <?php echo $event["event_date_time"]; ?>
                                        </span>
                                    </li>
                                </ul>
                            </div>
                            <div class="row">
                                <div class="card mt-2">
                                    <div class="card-header">
                                        <ul class="nav nav-tabs nav-tabs-neutral" role="tablist">
                                            <li class="nav-item">
                                                <a class="nav-link active" data-toggle="tab" href="#home1"
                                                    role="tab">Overview</a>
                                            </li>

                                        </ul>
                                    </div>
                                    <div class="card-body pt-3 pl-0 pr-0 pb-0">

                                        <div class="tab-content">
                                            <div class="tab-pane active" id="home1" role="tabpanel">
                                                <h3 class="course-tab">What Will You Learn?</h3>
                                                <div class="overview-box">
                                                    <p>
                                                        <?php echo $event["Event_discription"]; ?>
                                                    </p>

                                                </div>
                                            </div>
                                            <div class="tab-pane" id="profile1" role="tabpanel">
                                                <div class="overview-box">
                                                    <h4>Visual Learning with theory</h4>
                                                    <p>I think that’s a responsibility that I have, to push
                                                        possibilities, to show people, this is the level that things
                                                        could be at. So when you get something that has the name Kanye
                                                        West on it, it’s supposed to be pushing the furthest
                                                        possibilities. I will be the leader of a company that ends up
                                                        being worth billions of dollars, because I got the answers. I
                                                        understand culture. I am the nucleus.</p>
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
</section>
<!-- End Listing detail -->
<?php include 'footer.php'; ?>