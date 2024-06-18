<?php
    echo'
    <div class="footer-area pt-100 pb-70 section-padding ">
      <div class="container" id="footer-wrapper" style="    width: 100%;
          margin-left: 130px;
          display: flex;
          justify-content: center;">
        <div class="row" id="footer-area-row">
          <div class="col-lg-4 col-sm-6" style="margin-right: 50px;">
            <div class="footer-logo-area">
              <a href="index.php"><img src="website png data/home page png/1.png" alt="Image"
                  style="object-fit: cover; height: 76px; background: white; padding-top: 8px;"></a>
              <p>It is a long established fact that a reader will be distracted by the readable content of a page when
                looking at its layout.</p>
              <div class="contact-list">
                <ul>
                  <li><a href="tel:+919284988084">+91 9284988084</a></li>
    
                  <li> <a href="mailto: pencilboatart@gmail.com" title="Gmail"> pencilboatart@gmail.com</a> </li>
                </ul>
              </div>
            </div>
          </div>
          <div class="col-lg-3 col-sm-6" id="LinkColumn1">
            <div class="footer-widjet">
              <h3>Quick Links</h3>
              <div class="list">
                <ul>
                  <li><a href="index.php#home">Home</a></li>
                  <li><a href="gallery.php">Gallery</a></li>
                  <li><a href="contact.php">Contact</a></li>
                  <li><a href="about.php">About us</a></li>
                </ul>
              </div>
            </div>
          </div>
          <div class="col-lg-3 col-sm-6" id="LinkColumn2">
            <div class="footer-widjet">
              <h3>Useful link</h3>
              <div class="list">
                <ul>
                  <li><a href="#">FAQ</a></li>
                  <li><a href="#">Alumni</a></li>
                  <li><a href="#">Application</a></li>
                  <li><a href="#">Privacy policy</a></li>
                  <li><a href="#">Terms &amp; conditions</a></li>
                </ul>
              </div>
            </div>
          </div>
    
        </div>
        <div class="shape">
          <img src="website png data/home page png/footerBack.png" alt="Image">
        </div>
      </div>
    </div>
    <div class="copyright-area">
      <div class="container">
        <div class="copyright">
          <div class="row">
            <div class="col-lg-6 col-md-4 text-left">
              <div class="social-content">
                <ul>
                  <li><span>Follow Us On</span></li>
                  <li>
                    <a href="whatsapp://send?phone=9284988084" target="_blank"><i class="fab fa-whatsapp"></i></a>
                  </li>
                  <li> <a href="mailto: pencileBoatArt@gmail.com" title="Gmail"><i class="far fa-envelope"></i></a> </li>
    
                  <li>
                    <a href="https://www.instagram.com/pencilboatartstudio/" target="_blank"><i
                        class="fab fa-instagram"></i></a>
                  </li>
                  <li>
                    <a href="https://www.linkedin.com/company/pencil-boat-visual-art-studio" target="_blank"><i
                        class="fab fa-linkedin"></i></a>
                  </li>
                </ul>
              </div>
            </div>
            <div class="col-lg-6 col-md-8 text-right">
              <div class="copy">
                <p>Copyright © 2024 | Powered by <a href="admin pannel/index.php" target="_blank">pencilboatart</a></p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div id="back-top" class="back-top"> <a href="#top"><i class="flaticon-arrows"></i></a> </div>
    <div id="back-top" class="back-top"> <a href="#top"><i class="flaticon-arrows"></i></a> </div>
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
    
    <script src="https://unpkg.com/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
    
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    
    <script src="https://cdn.jsdelivr.net/npm/ion-rangeslider@2.3.1/js/ion.rangeSlider.min.js"></script>
    
    <script src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
    
    <script src="https://cdn.jsdelivr.net/npm/air-datepicker@2.2.3/dist/js/datepicker.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/air-datepicker@2.2.3/dist/js/datepicker.en.js"></script>
    
    <script src="https://cdn.jsdelivr.net/npm/isotope-layout@3.0.6/dist/isotope.pkgd.min.js"></script>
    
    <script src="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.js"></script>
    
    <script src="https://cdn.jsdelivr.net/npm/jquery-nice-select@1.1.0/js/jquery.nice-select.min.js"></script>
    
    <script src="https://cdn.jsdelivr.net/npm/magnific-popup@1.1.0/dist/jquery.magnific-popup.min.js"></script>
    
    <script src="https://maps.googleapis.com/maps/api/js?key=YOUR_GOOGLE_MAPS_API_KEY"></script>
    
    <script>AOS.init();</script>
    <script src="assets/js/custom.js"></script>
    
    
    <script>
    let lastScrollTop = 0;

window.addEventListener("scroll", function() {
    let st = window.pageYOffset || document.documentElement.scrollTop;

    if (st > lastScrollTop) {
        // Scroll down
        document.querySelector(".slogan").style.display = "none";
    } else {
        // Scroll up
        if (st === 0) {
            document.querySelector(".slogan").style.display = "block";
        }
    }

    lastScrollTop = st <= 0 ? 0 : st; // For Mobile or negative scrolling
}, false);

    $(document).ready(function () {
      $(window).scroll(function () {
        var scroll = $(window).scrollTop();
        var logo = $(".logo");
        var logoImage1 = $(".logo .img-fluid");
        var ImageLogo2 = $("#LogoImage");
        if (scroll >= 100) {
          logo.addClass("fixed");
          logo.css({
            "width": "430px",
            "padding-top": "32px",
            "height": "145px",
            "padding-left": "97px",
            "margin-left": "-161px",
  
          });
          ImageLogo2.css({
            "margin-top": "-5px"
  
          });
  
          logoImage1.css({
            "width": "153px",
            "margin-left": "-22px",
            "margin-top": "26px"
  
          });
        } else {
          logo.removeClass("fixed");
          logo.css({
            "width": "430px",
            "padding-top": "32px",
            "height": "145px",
            "padding-left": "97px",
            "margin-left": "-161px"
          });
          ImageLogo2.css({
            "margin-top": "-32px"
  
          });
          logoImage1.css({  
            "width": "218px",
            "margin-top": "-7px",
            "margin-left": " -53px"
          });
        }
      });
    });
  </script>
    
    </body>';


?>