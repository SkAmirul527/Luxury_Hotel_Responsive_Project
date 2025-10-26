<?php
/* Template Name: Amenities */
get_header();
?>


<main class="main">

<!-- Page Title -->
<div class="page-title light-background">
  <div class="container d-lg-flex justify-content-between align-items-center">
    <h1 class="mb-2 mb-lg-0"><?php the_title(); ?></h1>
    <nav class="breadcrumbs">
      <ol>
        <li><a href="<?php echo get_permalink( get_page_by_path( 'home' ) ); ?>"><?php _e( 'Home', 'your-text-domain' ); ?></a></li>
        <li class="current"><?php the_title(); ?></li>
      </ol>
    </nav>
  </div>
</div><!-- End Page Title -->

<!-- Amenities Section -->
<section id="amenities" class="amenities section">

  <div class="container" data-aos="fade-up" data-aos-delay="100">

    <div class="row gy-4">

      <div class="col-lg-6" data-aos="fade-up" data-aos-delay="200">
        <div class="amenity-card">
          <div class="amenity-image">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/hotel/amenities-1.webp" alt="Rooftop Pool" class="img-fluid">
          </div>
          <div class="amenity-content">
            <h3>Infinity Pool &amp; Sun Deck</h3>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation.</p>
            <ul class="amenity-features">
              <li><i class="bi bi-clock"></i> Open 6 AM - 10 PM</li>
              <li><i class="bi bi-droplet"></i> Heated pool year-round</li>
              <li><i class="bi bi-cup-hot"></i> Poolside bar service</li>
            </ul>
          </div>
        </div>
      </div><!-- End Amenity Card -->

      <div class="col-lg-6" data-aos="fade-up" data-aos-delay="300">
        <div class="amenity-card">
          <div class="amenity-image">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/hotel/amenities-2.webp" alt="Spa Wellness" class="img-fluid">
          </div>
          <div class="amenity-content">
            <h3>Luxury Spa &amp; Wellness</h3>
            <p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum.</p>
            <ul class="amenity-features">
              <li><i class="bi bi-calendar2-check"></i> Book treatments online</li>
              <li><i class="bi bi-heart"></i> Couples massage rooms</li>
              <li><i class="bi bi-flower1"></i> Organic spa products</li>
            </ul>
          </div>
        </div>
      </div><!-- End Amenity Card -->

      <div class="col-lg-6" data-aos="fade-up" data-aos-delay="400">
        <div class="amenity-card">
          <div class="amenity-image">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/hotel/dining-3.webp" alt="Fine Dining" class="img-fluid">
          </div>
          <div class="amenity-content">
            <h3>Signature Restaurant</h3>
            <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis.</p>
            <ul class="amenity-features">
              <li><i class="bi bi-award"></i> Michelin-starred chef</li>
              <li><i class="bi bi-wine"></i> Award-winning wine cellar</li>
              <li><i class="bi bi-moon-stars"></i> Open Tuesday - Sunday</li>
            </ul>
          </div>
        </div>
      </div><!-- End Amenity Card -->

      <div class="col-lg-6" data-aos="fade-up" data-aos-delay="500">
        <div class="amenity-card">
          <div class="amenity-image">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/hotel/amenities-4.webp" alt="Fitness Center" class="img-fluid">
          </div>
          <div class="amenity-content">
            <h3>24/7 Fitness Center</h3>
            <p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi.</p>
            <ul class="amenity-features">
              <li><i class="bi bi-lightning"></i> State-of-the-art equipment</li>
              <li><i class="bi bi-person-check"></i> Personal trainers available</li>
              <li><i class="bi bi-shield-check"></i> Complimentary towels</li>
            </ul>
          </div>
        </div>
      </div><!-- End Amenity Card -->

    </div>

    <div class="row mt-5">
      <div class="col-12" data-aos="fade-up" data-aos-delay="600">
        <div class="amenities-grid">
          <h3 class="text-center mb-4">Additional Hotel Services</h3>
          <div class="row g-4">
            <div class="col-lg-3 col-md-4 col-sm-6">
              <div class="service-item">
                <div class="service-icon">
                  <i class="bi bi-wifi"></i>
                </div>
                <h4>Free Wi-Fi</h4>
                <p>High-speed internet throughout the property</p>
              </div>
            </div>
            <div class="col-lg-3 col-md-4 col-sm-6">
              <div class="service-item">
                <div class="service-icon">
                  <i class="bi bi-car-front"></i>
                </div>
                <h4>Valet Parking</h4>
                <p>Complimentary valet service for all guests</p>
              </div>
            </div>
            <div class="col-lg-3 col-md-4 col-sm-6">
              <div class="service-item">
                <div class="service-icon">
                  <i class="bi bi-airplane"></i>
                </div>
                <h4>Airport Shuttle</h4>
                <p>Scheduled transfers to major airports</p>
              </div>
            </div>
            <div class="col-lg-3 col-md-4 col-sm-6">
              <div class="service-item">
                <div class="service-icon">
                  <i class="bi bi-headset"></i>
                </div>
                <h4>Concierge</h4>
                <p>24/7 assistance for reservations and tours</p>
              </div>
            </div>
            <div class="col-lg-3 col-md-4 col-sm-6">
              <div class="service-item">
                <div class="service-icon">
                  <i class="bi bi-bell"></i>
                </div>
                <h4>Room Service</h4>
                <p>Gourmet dining delivered to your room</p>
              </div>
            </div>
            <div class="col-lg-3 col-md-4 col-sm-6">
              <div class="service-item">
                <div class="service-icon">
                  <i class="bi bi-shield-check"></i>
                </div>
                <h4>Safe Deposit</h4>
                <p>Secure storage for your valuables</p>
              </div>
            </div>
            <div class="col-lg-3 col-md-4 col-sm-6">
              <div class="service-item">
                <div class="service-icon">
                  <i class="bi bi-translate"></i>
                </div>
                <h4>Multilingual Staff</h4>
                <p>Service in English, Spanish, French, and more</p>
              </div>
            </div>
            <div class="col-lg-3 col-md-4 col-sm-6">
              <div class="service-item">
                <div class="service-icon">
                  <i class="bi bi-heart-pulse"></i>
                </div>
                <h4>Pet Friendly</h4>
                <p>Welcome amenities for your furry friends</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

  </div>

</section>
<!-- /Amenities Section -->

</main>

















<!-- ======= Footer ======= -->
 <?php
    get_footer();
    ?>