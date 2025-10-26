<?php


/* Template Name: Location */
get_header();
?>

<main class="main">

<!-- Page Title -->
<div class="page-title light-background">
  <div class="container d-lg-flex justify-content-between align-items-center">
    <h1 class="mb-2 mb-lg-0">Location</h1>
    <nav class="breadcrumbs">
      <ol>
        <li><a href="<?php echo get_permalink( get_page_by_path( 'home' ) ); ?>">Home</a></li>
        <li class="current">Location</li>
      </ol>
    </nav>
  </div>
</div><!-- End Page Title -->

<!-- Hotel Location Section -->
<section id="hotel-location" class="hotel-location section">

  <div class="container" data-aos="fade-up" data-aos-delay="100">

    <!-- Main Location Content -->
    <div class="row align-items-center mb-5">

      <!-- Location Details -->
      <div class="col-lg-6 order-2 order-lg-1" data-aos="fade-right" data-aos-delay="200">
        <div class="location-content">
          <div class="location-badge">
            <i class="bi bi-geo-alt-fill"></i>
            <span>Prime Location</span>
          </div>
          <h2 class="location-title">Luxury Downtown Experience</h2>
          <p class="location-description">Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia curae. Donec rutrum congue leo eget malesuada. Proin eget tortor risus cras ultricies ligula sed magna dictum porta.</p>

          <div class="info-grid">
            <div class="info-item">
              <div class="info-icon">
                <i class="bi bi-building"></i>
              </div>
              <div class="info-text">
                <h6>Address</h6>
                <p>789 Madison Street<br>Chicago, IL 60601</p>
              </div>
            </div>

            <div class="info-item">
              <div class="info-icon">
                <i class="bi bi-airplane"></i>
              </div>
              <div class="info-text">
                <h6>Airport Access</h6>
                <p>O'Hare - 35 min<br>Midway - 25 min</p>
              </div>
            </div>

            <div class="info-item">
              <div class="info-icon">
                <i class="bi bi-telephone"></i>
              </div>
              <div class="info-text">
                <h6>Contact</h6>
                <p>+1 (555) 876-5432<br>reservations@example.com</p>
              </div>
            </div>

            <div class="info-item">
              <div class="info-icon">
                <i class="bi bi-clock"></i>
              </div>
              <div class="info-text">
                <h6>Check-in</h6>
                <p>3:00 PM - 11:00 PM<br>Check-out: 11:00 AM</p>
              </div>
            </div>
          </div>

          <div class="action-buttons">
            <a href="#" class="btn btn-primary">View on Map</a>
            <a href="#" class="btn btn-outline">Book Now</a>
          </div>
        </div>
      </div>

      <!-- Interactive Map -->
      <div class="col-lg-6 order-1 order-lg-2" data-aos="fade-left" data-aos-delay="300">
        <div class="map-container">
          <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d58619.52375121279!2d87.71635321396477!3d21.779853596998993!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3a021f0e31bdb88b%3A0x83f79f3a8c22e2a!2sContai%2C%20West%20Bengal!5e0!3m2!1sen!2sin!4v1728839220000!5m2!1sen!2sin"></iframe>
          <div class="map-overlay">
            <div class="hotel-marker">
              <i class="bi bi-building"></i>
              Grand Luxury Hotel
            </div>
          </div>
        </div>
      </div>

    </div>

    <!-- Transportation Hub -->
    <div class="transportation-hub" data-aos="fade-up" data-aos-delay="400">
      <div class="row">
        <div class="col-12">
          <div class="section-header">
            <h3>Getting Here is Easy</h3>
            <p>Multiple convenient transportation options to reach our hotel</p>
          </div>
        </div>
      </div>

      <div class="row">
        <div class="col-lg-6 col-md-6 mb-4" data-aos="slide-up" data-aos-delay="500">
          <div class="transport-card">
            <div class="transport-header">
              <div class="transport-icon-box">
                <i class="bi bi-car-front-fill"></i>
              </div>
              <div class="transport-title">
                <h5>By Car</h5>
                <span class="transport-time">Most Convenient</span>
              </div>
            </div>
            <div class="transport-details">
              <p>Complimentary valet service available. Premium parking garage with direct hotel access and EV charging stations.</p>
              <div class="transport-features">
                <span class="feature-tag">Valet Service</span>
                <span class="feature-tag">EV Charging</span>
              </div>
            </div>
          </div>
        </div>

        <div class="col-lg-6 col-md-6 mb-4" data-aos="slide-up" data-aos-delay="600">
          <div class="transport-card">
            <div class="transport-header">
              <div class="transport-icon-box">
                <i class="bi bi-train-front-fill"></i>
              </div>
              <div class="transport-title">
                <h5>By Metro</h5>
                <span class="transport-time">5 min walk</span>
              </div>
            </div>
            <div class="transport-details">
              <p>State Street Station directly connects to all major lines. Blue line to airports, Red line to suburbs and entertainment districts.</p>
              <div class="transport-features">
                <span class="feature-tag">Blue Line</span>
                <span class="feature-tag">Red Line</span>
              </div>
            </div>
          </div>
        </div>

        <div class="col-lg-6 col-md-6 mb-4" data-aos="slide-up" data-aos-delay="700">
          <div class="transport-card">
            <div class="transport-header">
              <div class="transport-icon-box">
                <i class="bi bi-airplane-fill"></i>
              </div>
              <div class="transport-title">
                <h5>Airport Shuttle</h5>
                <span class="transport-time">Every 30 min</span>
              </div>
            </div>
            <div class="transport-details">
              <p>Luxury shuttle service to both major airports. Premium comfort with WiFi, refreshments, and luggage assistance included.</p>
              <div class="transport-features">
                <span class="feature-tag">WiFi</span>
                <span class="feature-tag">Refreshments</span>
              </div>
            </div>
          </div>
        </div>

        <div class="col-lg-6 col-md-6 mb-4" data-aos="slide-up" data-aos-delay="800">
          <div class="transport-card">
            <div class="transport-header">
              <div class="transport-icon-box">
                <i class="bi bi-taxi-front-fill"></i>
              </div>
              <div class="transport-title">
                <h5>Ride Share</h5>
                <span class="transport-time">24/7 Available</span>
              </div>
            </div>
            <div class="transport-details">
              <p>Dedicated pickup zones for all ride-sharing services. Professional concierge assistance for booking and special requests.</p>
              <div class="transport-features">
                <span class="feature-tag">Concierge Help</span>
                <span class="feature-tag">Express Pickup</span>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- Attractions Gallery -->
    <div class="attractions-section" data-aos="fade-up" data-aos-delay="900">
      <div class="row">
        <div class="col-12">
          <div class="section-header">
            <h3>Explore the Neighborhood</h3>
            <p>World-class attractions and entertainment right at your doorstep</p>
          </div>
        </div>
      </div>

      <div class="row">
        <div class="col-lg-4 col-md-6" data-aos="zoom-in" data-aos-delay="1000">
          <div class="attraction-item">
            <div class="attraction-photo">
              <img src="<?php echo get_template_directory_uri(); ?>/assets/img/hotel/location-5.webp" alt="Millennium Park" class="img-fluid" loading="lazy">
              <div class="distance-badge">
                <i class="bi bi-geo-alt"></i>
                <span>2 blocks</span>
              </div>
            </div>
            <div class="attraction-info">
              <h5>Millennium Park</h5>
              <p class="walk-time"><i class="bi bi-clock"></i> 8 minute walk</p>
              <p>Cras ultricies ligula sed magna dictum porta. Donec sollicitudin molestie malesuada. Experience iconic Cloud Gate sculpture.</p>
            </div>
          </div>
        </div>

        <div class="col-lg-4 col-md-6" data-aos="zoom-in" data-aos-delay="1100">
          <div class="attraction-item">
            <div class="attraction-photo">
              <img src="<?php echo get_template_directory_uri(); ?>/assets/img/hotel/location-6.webp" alt="Art Institute" class="img-fluid" loading="lazy">
              <div class="distance-badge">
                <i class="bi bi-geo-alt"></i>
                <span>4 blocks</span>
              </div>
            </div>
            <div class="attraction-info">
              <h5>Art Institute</h5>
              <p class="walk-time"><i class="bi bi-clock"></i> 12 minute walk</p>
              <p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas world-renowned collection.</p>
            </div>
          </div>
        </div>

        <div class="col-lg-4 col-md-6" data-aos="zoom-in" data-aos-delay="1200">
          <div class="attraction-item">
            <div class="attraction-photo">
              <img src="<?php echo get_template_directory_uri(); ?>/assets/img/hotel/location-7.webp" alt="Navy Pier" class="img-fluid" loading="lazy">
              <div class="distance-badge">
                <i class="bi bi-geo-alt"></i>
                <span>1.2 miles</span>
              </div>
            </div>
            <div class="attraction-info">
              <h5>Navy Pier</h5>
              <p class="walk-time"><i class="bi bi-clock"></i> 18 minute walk</p>
              <p>Vivamus magna justo lacinia eget consectetur sed convallis at tellus. Entertainment, dining, and stunning lake views.</p>
            </div>
          </div>
        </div>

        <div class="col-lg-4 col-md-6" data-aos="zoom-in" data-aos-delay="1300">
          <div class="attraction-item">
            <div class="attraction-photo">
              <img src="<?php echo get_template_directory_uri(); ?>/assets/img/hotel/location-8.webp" alt="Theater District" class="img-fluid" loading="lazy">
              <div class="distance-badge">
                <i class="bi bi-geo-alt"></i>
                <span>3 blocks</span>
              </div>
            </div>
            <div class="attraction-info">
              <h5>Theater District</h5>
              <p class="walk-time"><i class="bi bi-clock"></i> 10 minute walk</p>
              <p>Mauris blandit aliquet elit eget tincidunt nibh pulvinar. Broadway shows and world-class performances nightly.</p>
            </div>
          </div>
        </div>

        <div class="col-lg-4 col-md-6" data-aos="zoom-in" data-aos-delay="1400">
          <div class="attraction-item">
            <div class="attraction-photo">
              <img src="<?php echo get_template_directory_uri(); ?>/assets/img/hotel/location-9.webp" alt="Shopping District" class="img-fluid" loading="lazy">
              <div class="distance-badge">
                <i class="bi bi-geo-alt"></i>
                <span>1 block</span>
              </div>
            </div>
            <div class="attraction-info">
              <h5>Magnificent Mile</h5>
              <p class="walk-time"><i class="bi bi-clock"></i> 5 minute walk</p>
              <p>Donec rutrum congue leo eget malesuada. Premium shopping, luxury brands, and upscale dining experiences.</p>
            </div>
          </div>
        </div>

        <div class="col-lg-4 col-md-6" data-aos="zoom-in" data-aos-delay="1500">
          <div class="attraction-item">
            <div class="attraction-photo">
              <img src="<?php echo get_template_directory_uri(); ?>/assets/img/hotel/location-10.webp" alt="Lakefront" class="img-fluid" loading="lazy">
              <div class="distance-badge">
                <i class="bi bi-geo-alt"></i>
                <span>6 blocks</span>
              </div>
            </div>
            <div class="attraction-info">
              <h5>Lake Michigan Shore</h5>
              <p class="walk-time"><i class="bi bi-clock"></i> 15 minute walk</p>
              <p>Sed porttitor lectus nibh mauris blandit aliquet elit. Beach access, recreational trails, and scenic waterfront dining.</p>
            </div>
          </div>
        </div>
      </div>
    </div>

  </div>

</section><!-- /Hotel Location Section -->

</main>










<!-- ======= Footer ======= -->
 <?php
    get_footer();
 ?>