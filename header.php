<?php
    echo'<!DOCTYPE html>
    <html lang="en">
    
    <head>
      <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width,initial-scale=1">
      <meta name="keywords" content="#">
      <meta name="description" content="#">
      <title>Pencil boat art</title>
       
      <style>
      #MobileImage{
      display: none;
         }
      .flaticon-arrows:before {
    content: "\2191"; /* Unicode character for up arrow */
    font-family: "Flaticon";
        }
      @media (max-width: 767px) {
          .rightside img {
               display: none !important;
          }
          .leftside ul li {
                display: none !important;
          }
           .logo{
            display: none!important;
            }
            #MainImage {
            display: none !important;
          }
              .fixed {
              display: none!important;
              }
          #LogoImage {
             display: none !important;
          }
          #footer-wrapper.container{
          width: 38%!important;
          text-align: center;
            }
        #MobileImage:nth-child(1) {
    width: 37%;
    position: absolute;
    top: 0;
}

#MobileImage:nth-child(2) {
    width: 37%;
    position: absolute;
    /* Adjust top, left, right, or bottom as per your layout needs */
}
.slogan{
display: none !important;
 
}
          #MobileImage{
      display: block;
      
         }
        .MobileNav{
    width: 303px;
    height: 64px;
    background: white;
    display: flex;
    align-items: center;
    position: absolute;
    left:0;
}
    
      
      
      .arrow-layout-2 .slick-prev {
        right: 5.8%;
        padding: 20px;
        margin: 0px 5px;
      }
      
      .arrow {
        display: none;
      }
    
      .top-short-menu {
        color: white;
      }
    
      .section-header h3 {
        font-size: 36px;
        color: #283d50;
        text-align: center;
        font-weight: 500;
        position: relative;
      }
    
      .section-header p {
        text-align: center;
        margin: auto;
        font-size: 15px;
        padding-bottom: 60px;
        color: #556877;
        width: 50%;
      }
    
      #clients {
        padding: 60px 0;
      }
    
      #clients .clients-wrap {
        border-top: 1px solid #d6eaff;
        border-left: 1px solid #d6eaff;
        margin-bottom: 30px;
      }
    
      #clients .client-logo {
        padding: 64px;
        display: -webkit-box;
        display: -webkit-flex;
        display: -ms-flexbox;
        display: flex;
        -webkit-box-pack: center;
        -webkit-justify-content: center;
        -ms-flex-pack: center;
        justify-content: center;
        -webkit-box-align: center;
        -webkit-align-items: center;
        -ms-flex-align: center;
        align-items: center;
        border-right: 1px solid #d6eaff;
        border-bottom: 1px solid #d6eaff;
        overflow: hidden;
        background: #fff;
        height: 160px;
      }
    
      #clients img {
        transition: all 0.4s ease-in-out;
      }
      
      .team-img img {
        height: 350px;
      }
      
      .header .navigation-wrapper nav > .main-navigation .main-menu > ul > .menu-item > a:hover {
        text-decoration: none;
        color: #F3721A;
        transition: 0.5s;
      }
      
      </style>
    
      <!-- Bootstrap -->
      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css"
        integrity="sha512-LCi2xMY44eIxCsBkpuuY7IDJke5I1STvglYYTqez8v9VioAfA/UYCH9zaAIWyO47KMgjFQmoxCVlZ/GY5DIp4w=="
        crossorigin="anonymous" />
    
      <!-- Font Awesome -->
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"
        integrity="sha512-mt1a9mpPf10YGIE8V1nFEM63p1ixbXDpsqS49wfe9Wc5nMM+ZhSt3XUq50vP0jGrYvhfFfTBXTTMyQ2JczPsXA=="
        crossorigin="anonymous" />
      <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" rel="stylesheet">
      <!-- Flaticons -->
      <link href="path/to/your/flaticon.css" rel="stylesheet">
    
      <!-- Slick Slider -->
      <link href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css" rel="stylesheet">
    
      <!-- Range Slider -->
      <link href="https://cdn.jsdelivr.net/npm/ion-rangeslider@2.3.1/css/ion.rangeSlider.min.css" rel="stylesheet">
    
      <!-- Datepicker -->
      <link href="https://cdn.jsdelivr.net/npm/air-datepicker@2.2.3/dist/css/datepicker.min.css" rel="stylesheet">
    
      <!-- Magnific Popup -->
      <link href="https://cdn.jsdelivr.net/npm/magnific-popup@1.1.0/dist/magnific-popup.css" rel="stylesheet">
    
      <!-- AOS -->
      <link href="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.css" rel="stylesheet">
    
      <!-- Custom Stylesheet -->
      <link href="assets/css/style.css" rel="stylesheet">
      <!-- Custom Responsive -->
      <link href="assets/css/responsive.css" rel="stylesheet">
      <!-- CSS for IE -->
    
      <!-- place -->
    </head>
    
    <body>
      <!-- Header -->
      <!-- Start Topbar -->
      <header class="header">
      
      <div class="topbar bg-theme" style="background-color: transparent;">
      <div class="container">
      <div class="row">
      <div class="col-lg-6 col-md-5">
      <div class="rightside">
      <img class="SloganImage" src="website png data/home page png/4.png" alt="" style=" margin-left: 204px; position: absolute; width: 497px; margin-top: 7px; left: 223px; ">
      </div>
      </div>
      <div class="col-lg-6 col-md-5" style="width: 50%; margin-left: 940px;">
      <div class="leftside">
      <ul class="custom-flex">
      <li> <a href="https://www.instagram.com/pencilboatartstudio/" target="_blank"><i class="fab fa-instagram"></i></a></li> 
      <li> <a href="mailto: pencileBoatArt@gmail.com" title="Gmail"><i class="far fa-envelope"></i></a> </li>
      <li> <a href="https://www.linkedin.com/company/pencil-boat-visual-art-studio" target="_blank"><i class="fab fa-linkedin"></i></a></li> 
      <li> <a href="#" target="_blank" title="YouTube"><i class="fab fa-youtube"></i></a></li>
      
      </ul>
      </div>
      </div>
      
      </div>
      <div class="navigation-wrapper">
      <div class="container">
      <div class="row " id="TopRow">
      <div class="col-12">
      <nav>
      <p class="slogan" style="position: absolute; width: 17%; bottom: 0; top: 40px; z-index: 999; left: 136px; right: -15px; font-size: 8px; text-align: center; color: orange; font-weight: bold;">Regd.Under Ministry of MSME Government of <br> India</p>
                  <div class="main-navigation">
                  <div class="MobileNav">
                   <a href="index.php#home"> <img id="MobileImage" src="website png data/home page png/GIFMaker_me.gif"   class="img-fluid"alt="logo"  > </a>
                   <a href="index.php#home"> <img id="MobileImage" class="MobileImage1" src="website png data/home page png/1.png"   class="img-fluid"alt="logo" style="right: 0; width: 73%; top: -17px;" > </a>
                  </div>
                    <div class="logo " style=" margin-top: -69px; background-color: white; border: 2px solid #192F59; display: flex;width: 439px;padding-top: 32px; height: 145px; padding-left: 97px;margin-left: -161px; "> 
                    <a href="index.php#home">
                     <img src="website png data/home page png/GIFMaker_me.gif" style=" width: 218px; margin-top: -7px; margin-left: -53px;" class="img-fluid"alt="logo" id="MainImage">
                     </a>
                   <img src="website png data/home page png/1.png" alt="" style="width: 261px; position: absolute; margin-top: -32px; height: 158px; left: 172px; " id="LogoImage">
                   </div>
                      <div class="main-menu">
                        <ul class="custom-flex">
                          <li class="menu-item active"> <a href="index.php">Home</a></li>
                          <li class="menu-item  ">
                            <a href="course.php">Courses</a>
  
                          </li>
                          <li class="menu-item  ">
                            <a href="service.php">Services</a>
  
                          </li>
                          <li class="menu-item"> <a href="about.php">About</a> </li>
                          <li class="menu-item menu-item-has-children">
                            <a href="#">More</a>
                            <ul class="submenu custom">
                              <li class="menu-item"> <a href="gallary.php">Gallery</a> </li>
                              <li class="menu-item"> <a href="Upcoming_Event.php">Coming Soon</a> </li>
                            </ul>
                          </li>
                          <li class="menu-item"> <a href="contact.php">Contact</a> </li>
                        </ul>
                      </div>
                      <div class="hamburger-menu">
                        <div class="menu-btn"> <span></span> <span></span> <span></span> </div>
                      </div>
                    </div>
                  </nav>
                </div>
              </div>
            </div>
          </div>
    </header>
    ';
?>
