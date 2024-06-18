 

<?php include 'header.php'; ?>
<style>
    .alert {
        color: red;
    }
</style>
<div class="subheader normal-bg section-padding mt-5"
    style='background-image: url("website png data/home page png/banner.jpg"); margin-top: 130px'>
    <div class="container">
        <div class="page-banner-content" style="margin-top: -77px;">
            <h1>Contact Us</h1>
            <ul>
                <li><a href="index.html">Home</a></li>
                <li>contact us</li>
            </ul>
        </div>
    </div>
</div>
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
                <form method="post" action="contact_data.php" class="mb-md-80">
                    <div class="row">
                        <div class="col-md-6 mb-4">
                            <div class="form-group">
                                <input type="text" name="txtName" class="form-control form-control-custom"
                                    placeholder="Name" required="">
                            </div>
                        </div>
                        <div class="col-md-6 mb-4">
                            <div class="form-group">
                                <input type="email" name="txtEmail" class="form-control form-control-custom"
                                    placeholder="Email" required="">
                            </div>
                        </div>
                        <div class="col-md-6 mb-4">
                            <div class="form-group">
                                <input type="text" name="txtSubject" class="form-control form-control-custom"
                                    placeholder="Subject" required="">
                            </div>
                        </div>
                        <div class="col-md-6 mb-4">
                            <div class="form-group">
                                <input type="tel" name="txtPhone" class="form-control form-control-custom"
                                    placeholder="Phone" required="">
                            </div>
                        </div>
                        <div class="col-md-12 mb-4">
                            <div class="form-group">
                                <textarea name="txtmessage" rows="5" class="form-control form-control-custom"
                                    placeholder="Message" required=""></textarea>
                            </div>
                            <button style="margin-top: 40px;" type="submit" class="btn btn-primary btn-block"
                                name="btnSubmit">Submit</button>
                        </div>
                    </div>
                </form>
            </div>
            <div class="col-lg-5">
                <div class="contact-map full-height">
                    <iframe
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d60043.57537248729!2d75.24903212167968!3d19.85165060000001!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3bdb998c2bff4da7%3A0xfd6fd4354596acd0!2spencil%20boat%20visual%20art%20studio!5e0!3m2!1sen!2sin!4v1710321932543!5m2!1sen!2sin"
                        width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                        referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
            </div>
        </div>
    </div>
</section>

 

<script>
    // Display alert for success message
    <?php if (!empty($successMSG)) : ?>
        alert("<?php echo $successMSG; ?>");
    <?php endif; ?>
</script>

    <?php include 'footer.php'; ?>