

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta content="width=device-width, initial-scale=1.0" name="viewport">
<title>Index - Grandoria Bootstrap Template</title>
<meta name="description" content="">
<meta name="keywords" content="">

<!-- Favicon -->
<link href="<?php echo get_template_directory_uri(); ?>/assets/img/favicon.png" rel="icon">
<link href="<?php echo get_template_directory_uri(); ?>/assets/img/apple-touch-icon.png" rel="apple-touch-icon">

<!-- Fonts -->
<link href="https://fonts.googleapis.com" rel="preconnect">
<link href="https://fonts.gstatic.com" rel="preconnect" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Josefin+Sans:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;1,100;1,200;1,300;1,400;1,500;1,600;1,700&display=swap" rel="stylesheet">

<!-- Vendor CSS Files -->
<link href="<?php echo get_template_directory_uri(); ?>/assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
<link href="<?php echo get_template_directory_uri(); ?>/assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
<link href="<?php echo get_template_directory_uri(); ?>/assets/vendor/aos/aos.css" rel="stylesheet">
<link href="<?php echo get_template_directory_uri(); ?>/assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
<link href="<?php echo get_template_directory_uri(); ?>/assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

<!-- Main CSS File -->
<link href="<?php echo get_template_directory_uri(); ?>/assets/css/main.css" rel="stylesheet">
<style>
body {
  overflow-x: hidden;  /* শুধু vertical scroll hide হবে */
  overflow-y: auto;    /* horizontal scroll থাকবে */
}

.navmenu ul li.menu-item-has-children > a::after {
  content: "▾";
  margin-left: 6px;
  font-size: 0.8em;
}
.navmenu ul li a:hover{
  color: white;
  font-weight: bold;
  transition: 0.3s;
}
.current_page_item a,.current_page_item a{
color: white;
font-weight: bold;
font-size: 16px;
font-family: 'Poppins', sans-serif;
}


/* মেইন মেনু hover এ সাবমেনু দেখাও */
#menu-item-30:hover .sub-menu {
  display: block;
  opacity: 1;
  visibility: visible;
  transform: translateY(0);
  transition-delay: 0s;
}

/* সাবমেনুর বেসিক স্টাইল */
.sub-menu {
  position: absolute;
  background-color: #e4e2e2ff;
  min-width: 160px;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  z-index: 30;
  visibility: hidden;
  opacity: 0;
  /* transform: translateY(10px); */
}

/* সাবমেনু লিংক */
.sub-menu li a {
  color: #343030ff;
  padding: 12px 16px;
  text-decoration: none;
  display: block;
  border-bottom: 1px solid #ddd;


}

.sub-menu li a:hover {
  background-color: #1e4e39ff;
}   

/* যখন li:hover হবে, সাবমেনু থাকবে */
#menu-item-30:hover .sub-menu {
  visibility: visible;
  opacity: 1;
  transform: translateY(0);
}

/* এখন সাবমেনুতে hover করলে hide হবে না */
.sub-menu:hover {
  visibility: visible;
  opacity: 1;
  transform: translateY(0);
}
.menu-item-has-children:hover .toggle-dropdown {
  transform: rotate(180deg);
}



</style>

</head>
<body>

  <header id="header" class="header sticky-top">

    <div class="topbar d-flex align-items-center dark-background">
      <div class="container d-flex justify-content-center justify-content-md-between">
        <div class="contact-info d-flex align-items-center">
          <i class="bi bi-envelope d-flex align-items-center"><a href="mailto:contact@example.com">contact@example.com</a></i>
          <i class="bi bi-phone d-flex align-items-center ms-4"><span>+1 5589 55488 55</span></i>
        </div>
        <div class="social-links d-none d-md-flex align-items-center">
          <a href="#" class="twitter"><i class="bi bi-twitter-x"></i></a>
          <a href="#" class="facebook"><i class="bi bi-facebook"></i></a>
          <a href="#" class="instagram"><i class="bi bi-instagram"></i></a>
          <a href="#" class="linkedin"><i class="bi bi-linkedin"></i></a>
        </div>
      </div>
    </div><!-- End Top Bar -->

    <div class="branding d-flex align-items-cente">

      <div class="container position-relative d-flex align-items-center justify-content-between">
        <a href="index.html" class="logo d-flex align-items-center">
          <!-- Uncomment the line below if you also wish to use an image logo -->
          <!-- <img src=" assets/img/logo.webp" alt=""> -->
          <h1 class="sitename">Grandoria</h1>
        </a>

        <nav id="navmenu" class="navmenu">
          <ul>
            <?php
            if (has_nav_menu('header-menu')) {
                wp_nav_menu(array(
                    'theme_location' => 'header-menu',
                    'container'      => 'nav',
                    'container_class'=> 'topbar-menu',
                    'menu_class'     => 'topbar-menu-list',
                    'container'      => false,
                    'items_wrap'     => '%3$s',
                ));
            }
            ?>

            <!-- <li><a href="index.html" class="active">Home</a></li>
            <li><a href="about.html">About</a></li>
            <li><a href="rooms.html">Rooms</a></li>
            <li><a href="amenities.html">Amenities</a></li>
            <li><a href="location.html">Location</a></li> -->
            <!-- <li class="dropdown"><a href="#"><span>Pages</span> <i class="bi bi-chevron-down toggle-dropdown"></i></a>
              <ul>
               
              
                 <li><a href="room-details.html">Room Details</a></li>
                <li><a href="restaurant.html">Restaurant</a></li>
                <li><a href="offers.html">Offers</a></li>
                <li><a href="events.html">Events</a></li>
                <li><a href="gallery.html">Gallery</a></li>
                <li><a href="booking.html">Booking</a></li>
                <li><a href="terms.html">Terms Page</a></li>
                <li><a href="privacy.html">Privacy Page</a></li>
                <li><a href="404.html">404 Page</a></li>
                <li><a href="starter-page.html">Starter Page</a></li>
              </ul>-->
            <!-- </li>
            <li><a href="contact.html">Contact</a></li> 
            <li class="dropdown">
              <a href="#english">
                <svg class="icon" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <g id="SVGRepo_iconCarrier">
                    <path fill-rule="evenodd" clip-rule="evenodd" d="M4 0H6V2H10V4H8.86807C8.57073 5.66996 7.78574 7.17117 6.6656 8.35112C7.46567 8.73941 8.35737 8.96842 9.29948 8.99697L10.2735 6H12.7265L15.9765 16H13.8735L13.2235 14H9.77647L9.12647 16H7.0235L8.66176 10.9592C7.32639 10.8285 6.08165 10.3888 4.99999 9.71246C3.69496 10.5284 2.15255 11 0.5 11H0V9H0.5C1.5161 9 2.47775 8.76685 3.33437 8.35112C2.68381 7.66582 2.14629 6.87215 1.75171 6H4.02179C4.30023 6.43491 4.62904 6.83446 4.99999 7.19044C5.88743 6.33881 6.53369 5.23777 6.82607 4H0V2H4V0ZM12.5735 12L11.5 8.69688L10.4265 12H12.5735Z" fill="currentColor"></path>
                  </g>
                </svg>
                <span>English</span>
                <i class="bi bi-chevron-down toggle-dropdown"></i></a>
              <ul>
                <li><a href="#french">French</a></li>
                <li><a href="#deutsch">Deutsch</a></li>
                <li><a href="#spanish">Spanish</a></li>
              </ul>
            </li>  -->

          </ul>
          <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
        </nav>

      </div>

    </div>

  </header>
  <!-- End Header -->
</body>
</html>