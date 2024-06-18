<?php include "header.php"; ?>
<?php
$conn = new mysqli("localhost", "root", "", "bcs_ty23-24_b3");

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$query = "SELECT * FROM tbladd_event";
$result = mysqli_query($conn, $query);
?>
 
<style>
    /* Existing styles */
    .carousel-item img {
        object-fit: cover;
        height: 200px; /* Set a default height for the images */
        width: 100%;
    }
</style>
<section class="section-padding our-work-sec bg-light-white whys-box">
    <div class="container">
        <div class="row why-choose-sec">
            <?php if ($result->num_rows > 0) { ?>
                <div class="col-lg-8 aos-init aos-animate" data-aos="fade-up" data-aos-duration="2000">
                    <div class="row">
                        <?php foreach ($result as $row) { ?>
                            <div class="col-lg-4 mb-4">
                                <div class="why-box">
                                    <div class="why-box-items">
                                        <div class="carousel slide" data-ride="carousel">
                                            <div class="carousel-inner">
                                                <?php
                                                $folderPath = 'admin pannel/EventImages/' . $row["Event_Name"];
                                                $files = scandir($folderPath);
                                                $first = true;

                                                foreach ($files as $file) {
                                                    if ($file != "." && $file != "..") {
                                                        echo '<div class="carousel-item ' . ($first ? 'active' : '') . '">
                                                                <img src="' . $folderPath . '/' . $file . '" class="d-block w-100" alt="">
                                                              </div>';
                                                        $first = false;
                                                    }
                                                }
                                                ?>
                                            </div>
                                        </div>
                                        <div class="why-box-text text-center">
                                            <p><?php echo $row["Event_discription"]; ?></p>
                                            <p><?php echo $row["event_date_time"]; ?></p>
                                            <form action="event_details.php" method="post">
                                                <input type="hidden" name="hdnService" value="<?php echo $row['id']; ?>">
                                                <input type="submit" class="btn btn-sm animated-button victoria-one pt-2"
                                                       value="Read More"/>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        <?php } ?>
                    </div>
                </div>
            <?php } else {
                echo "No upcoming events found";
            } ?>
        </div>
    </div>
</section>

<?php
$conn->close();
include "footer.php";
?>
