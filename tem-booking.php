<?php
/* Template Name: Booking Now */
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

  <!-- Booking Section -->
    <section id="booking" class="booking section">

      <div class="container" data-aos="fade-up" data-aos-delay="100">

        <div class="reservation-wrapper">

          <div class="reservation-header text-center" data-aos="fade-up" data-aos-delay="200">
            <h2>Reserve Your Stay</h2>
            <p class="lead">Experience unmatched hospitality with our streamlined booking process</p>
          </div>

          <div class="booking-grid">

            <div class="booking-form-section" data-aos="fade-right" data-aos-delay="300">
              <div class="form-container">
                <form class="reservation-form" action="" method="POST">

                  <div class="form-section">
                    <h4>Booking Details</h4>
                    <div class="form-grid">
                      <div class="form-group">
                        <label for="arrival-date" class="form-label">Arrival Date</label>
                        <input type="date" class="form-control" id="arrival-date" name="arrival_date" required="">
                      </div>
                      <div class="form-group">
                        <label for="departure-date" class="form-label">Departure Date</label>
                        <input type="date" class="form-control" id="departure-date" name="departure_date" required="">
                      </div>
                      <div class="form-group">
                        <label for="guest-count" class="form-label">Total Guests</label>
                        <select class="form-select" id="guest-count" name="guest_count" required="">
                          <option value="">Choose guests</option>
                          <option value="1">1 Guest</option>
                          <option value="2">2 Guests</option>
                          <option value="3">3 Guests</option>
                          <option value="4">4 Guests</option>
                          <option value="5">5+ Guests</option>
                        </select>
                      </div>
                      <div class="form-group">
                        <label for="room-count" class="form-label">Total Rooms</label>
                        <select class="form-select" id="room-count" name="room_count" required="">
                          <option value="">Choose rooms</option>
                          <option value="1">1 Room</option>
                          <option value="2">2 Rooms</option>
                          <option value="3">3 Rooms</option>
                          <option value="4">4+ Rooms</option>
                        </select>
                      </div>
                    </div>
                  </div>

                  <div class="form-section">
                    <h4>Room Preferences</h4>
                    <div class="form-group">
                      <label for="accommodation-type" class="form-label">Accommodation Type</label>
                      <select class="form-select" id="accommodation-type" name="accommodation_type">
                        <option value="">No preference</option>
                        <option value="classic">Classic Room</option>
                        <option value="premium">Premium Room</option>
                        <option value="junior-suite">Junior Suite</option>
                        <option value="luxury-suite">Luxury Suite</option>
                        <option value="penthouse">Penthouse Suite</option>
                      </select>
                    </div>
                    <div class="form-group">
                      <label for="additional-notes" class="form-label">Additional Requirements</label>
                      <textarea class="form-control" id="additional-notes" name="additional_notes" rows="3" placeholder="Please specify any special arrangements or preferences..."></textarea>
                    </div>
                  </div>

                  <div class="form-section">
                    <h4>Guest Information</h4>
                    <div class="form-grid">
                      <div class="form-group full-width">
                        <label for="primary-guest" class="form-label">Primary Guest Name</label>
                        <input type="text" class="form-control" id="primary-guest" name="primary_guest" required="">
                      </div>
                      <div class="form-group">
                        <label for="contact-email" class="form-label">Email Address</label>
                        <input type="email" class="form-control" id="contact-email" name="contact_email" required="">
                      </div>
                      <div class="form-group">
                        <label for="contact-phone" class="form-label">Contact Number</label>
                        <input type="tel" class="form-control" id="contact-phone" name="contact_phone" required="">
                      </div>
                    </div>
                  </div>

                  <div class="form-actions">
                    <button type="submit" class="btn btn-primary">
                      <i class="bi bi-calendar-plus me-2"></i>
                      Submit Reservation Request
                    </button>
                  </div>

                </form>
              </div>
            </div>

            <div class="hotel-showcase" data-aos="fade-left" data-aos-delay="400">
              <div class="showcase-image">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/hotel/showcase-1.webp" alt="Hotel luxury showcase" class="img-fluid">
              </div>

              <div class="hotel-highlights">
                <h3>Why Choose Our Hotel</h3>
                <div class="highlights-grid">
                  <div class="highlight-item">
                    <div class="highlight-icon">
                      <i class="bi bi-wifi"></i>
                    </div>
                    <div class="highlight-content">
                      <h5>Premium Connectivity</h5>
                      <p>High-speed internet access in all areas</p>
                    </div>
                  </div>
                  <div class="highlight-item">
                    <div class="highlight-icon">
                      <i class="bi bi-clock"></i>
                    </div>
                    <div class="highlight-content">
                      <h5>24/7 Service</h5>
                      <p>Round-the-clock assistance and support</p>
                    </div>
                  </div>
                  <div class="highlight-item">
                    <div class="highlight-icon">
                      <i class="bi bi-car-front"></i>
                    </div>
                    <div class="highlight-content">
                      <h5>Valet Parking</h5>
                      <p>Complimentary parking with valet service</p>
                    </div>
                  </div>
                  <div class="highlight-item">
                    <div class="highlight-icon">
                      <i class="bi bi-heart-pulse"></i>
                    </div>
                    <div class="highlight-content">
                      <h5>Wellness Center</h5>
                      <p>Full-service spa and fitness facilities</p>
                    </div>
                  </div>
                </div>
              </div>

              <div class="booking-guarantees">
                <div class="guarantee-item">
                  <i class="bi bi-shield-check"></i>
                  <span>Secure Booking</span>
                </div>
                <div class="guarantee-item">
                  <i class="bi bi-arrow-clockwise"></i>
                  <span>Flexible Cancellation</span>
                </div>
                <div class="guarantee-item">
                  <i class="bi bi-telephone"></i>
                  <span>24/7 Support</span>
                </div>
              </div>
            </div>

          </div>

        </div>

      </div>

    </section><!-- /Booking Section -->


</main>

<?php
get_footer();
?>