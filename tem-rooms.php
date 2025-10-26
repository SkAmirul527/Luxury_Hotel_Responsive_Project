

<?php
/* Template Name: Rooms */
get_header(); 

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<main class="main">

<!-- Page Title -->
<div class="page-title light-background">
  <div class="container d-lg-flex justify-content-between align-items-center">
    <h1 class="mb-2 mb-lg-0">Rooms</h1>
    <nav class="breadcrumbs">
      <ol>
        <li><a href="<?php echo get_permalink( get_page_by_path( 'home' ) ); ?>">Home</a></li>
        <li class="current">Rooms</li>
      </ol>
    </nav>
  </div>
</div><!-- End Page Title -->

<!-- Rooms 2 Section -->
<section id="rooms-2" class="rooms-2 section">

  <div class="container" data-aos="fade-up" data-aos-delay="100">

    <div class="room-filters" data-aos="fade-up" data-aos-delay="200">
      <div class="row g-3 align-items-center">
        <div class="col-lg-3 col-md-6">
          <label class="form-label">Price Range</label>
          <select class="form-select">
            <option>All Prices</option>
            <option>$100 - $200</option>
            <option>$200 - $350</option>
            <option>$350+</option>
          </select>
        </div>
        <div class="col-lg-3 col-md-6">
          <label class="form-label">Guest Capacity</label>
          <select class="form-select">
            <option>Any Capacity</option>
            <option>1-2 Guests</option>
            <option>3-4 Guests</option>
            <option>5+ Guests</option>
          </select>
        </div>
        <div class="col-lg-3 col-md-6">
          <label class="form-label">View Type</label>
          <select class="form-select">
            <option>All Views</option>
            <option>Ocean View</option>
            <option>City View</option>
            <option>Garden View</option>
          </select>
        </div>
        <div class="col-lg-3 col-md-6">
          <label class="form-label">Sort By</label>
          <select class="form-select">
            <option>Popularity</option>
            <option>Price: Low to High</option>
            <option>Price: High to Low</option>
            <option>Room Size</option>
          </select>
        </div>
      </div>
    </div>

    <div class="rooms-grid" data-aos="fade-up" data-aos-delay="300">
      <div class="row g-4">

        <div class="col-xl-4 col-lg-6">
          <div class="room-card">
            <div class="room-image">
              <img src="<?php echo get_template_directory_uri(); ?>/assets/img/hotel/room-1.webp" alt="Deluxe Ocean Suite" class="img-fluid">
              <div class="room-features">
                <span class="feature-badge ocean">Ocean View</span>
                <span class="feature-badge popular">Popular</span>
              </div>
            </div>
            <div class="room-content">
              <div class="room-header">
                <h3>Deluxe Ocean Suite</h3>
                <div class="room-rating">
                  <i class="bi bi-star-fill"></i>
                  <i class="bi bi-star-fill"></i>
                  <i class="bi bi-star-fill"></i>
                  <i class="bi bi-star-fill"></i>
                  <i class="bi bi-star-fill"></i>
                </div>
              </div>
              <p class="room-description">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
              <div class="room-amenities">
                <span><i class="bi bi-people"></i> Up to 4 guests</span>
                <span><i class="bi bi-wifi"></i> Free WiFi</span>
                <span><i class="bi bi-tv"></i> Smart TV</span>
              </div>
              <div class="room-footer">
                <div class="room-price">
                  <span class="price-from">From</span>
                  <span class="price-amount">$289</span>
                  <span class="price-period">/ night</span>
                </div>
                <a href="<?php echo get_permalink( get_page_by_path( 'rooms-details' ) ); ?>" class="btn-room-details">View Details</a>
              </div>
            </div>
          </div>
        </div><!-- End Room Card -->

        <div class="col-xl-4 col-lg-6">
          <div class="room-card">
            <div class="room-image">
              <img src="<?php echo get_template_directory_uri(); ?>/assets/img/hotel/room-3.webp" alt="Executive Business Suite" class="img-fluid">
              <div class="room-features">
                <span class="feature-badge business">Business</span>
              </div>
            </div>
            <div class="room-content">
              <div class="room-header">
                <h3>Executive Business Suite</h3>
                <div class="room-rating">
                  <i class="bi bi-star-fill"></i>
                  <i class="bi bi-star-fill"></i>
                  <i class="bi bi-star-fill"></i>
                  <i class="bi bi-star-fill"></i>
                  <i class="bi bi-star-half"></i>
                </div>
              </div>
              <p class="room-description">Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
              <div class="room-amenities">
                <span><i class="bi bi-people"></i> Up to 2 guests</span>
                <span><i class="bi bi-laptop"></i> Work Desk</span>
                <span><i class="bi bi-telephone"></i> Business Phone</span>
              </div>
              <div class="room-footer">
                <div class="room-price">
                  <span class="price-from">From</span>
                  <span class="price-amount">$199</span>
                  <span class="price-period">/ night</span>
                </div>
                <a href="room-details.html" class="btn-room-details">View Details</a>
              </div>
            </div>
          </div>
        </div><!-- End Room Card -->

        <div class="col-xl-4 col-lg-6">
          <div class="room-card">
            <div class="room-image">
              <img src="<?php echo get_template_directory_uri(); ?>/assets/img/hotel/room-7.webp" alt="Family Garden Room" class="img-fluid">
              <div class="room-features">
                <span class="feature-badge family">Family Friendly</span>
                <span class="feature-badge garden">Garden View</span>
              </div>
            </div>
            <div class="room-content">
              <div class="room-header">
                <h3>Family Garden Room</h3>
                <div class="room-rating">
                  <i class="bi bi-star-fill"></i>
                  <i class="bi bi-star-fill"></i>
                  <i class="bi bi-star-fill"></i>
                  <i class="bi bi-star-fill"></i>
                  <i class="bi bi-star"></i>
                </div>
              </div>
              <p class="room-description">Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>
              <div class="room-amenities">
                <span><i class="bi bi-people"></i> Up to 5 guests</span>
                <span><i class="bi bi-cup-hot"></i> Mini Kitchen</span>
                <span><i class="bi bi-controller"></i> Game Console</span>
              </div>
              <div class="room-footer">
                <div class="room-price">
                  <span class="price-from">From</span>
                  <span class="price-amount">$159</span>
                  <span class="price-period">/ night</span>
                </div>
                <a href="room-details.html" class="btn-room-details">View Details</a>
              </div>
            </div>
          </div>
        </div><!-- End Room Card -->

        <div class="col-xl-4 col-lg-6">
          <div class="room-card">
            <div class="room-image">
              <img src="<?php echo get_template_directory_uri(); ?>/assets/img/hotel/room-12.webp" alt="Romantic Honeymoon Suite" class="img-fluid">
              <div class="room-features">
                <span class="feature-badge romantic">Romantic</span>
                <span class="feature-badge premium">Premium</span>
              </div>
            </div>
            <div class="room-content">
              <div class="room-header">
                <h3>Romantic Honeymoon Suite</h3>
                <div class="room-rating">
                  <i class="bi bi-star-fill"></i>
                  <i class="bi bi-star-fill"></i>
                  <i class="bi bi-star-fill"></i>
                  <i class="bi bi-star-fill"></i>
                  <i class="bi bi-star-fill"></i>
                </div>
              </div>
              <p class="room-description">Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim.</p>
              <div class="room-amenities">
                <span><i class="bi bi-people"></i> Up to 2 guests</span>
                <span><i class="bi bi-heart"></i> King Bed</span>
                <span><i class="bi bi-water"></i> Jacuzzi</span>
              </div>
              <div class="room-footer">
                <div class="room-price">
                  <span class="price-from">From</span>
                  <span class="price-amount">$349</span>
                  <span class="price-period">/ night</span>
                </div>
                <a href="room-details.html" class="btn-room-details">View Details</a>
              </div>
            </div>
          </div>
        </div><!-- End Room Card -->

        <div class="col-xl-4 col-lg-6">
          <div class="room-card">
            <div class="room-image">
              <img src="<?php echo get_template_directory_uri(); ?>/assets/img/hotel/room-15.webp" alt="Standard City Room" class="img-fluid">
              <div class="room-features">
                <span class="feature-badge city">City View</span>
              </div>
            </div>
            <div class="room-content">
              <div class="room-header">
                <h3>Standard City Room</h3>
                <div class="room-rating">
                  <i class="bi bi-star-fill"></i>
                  <i class="bi bi-star-fill"></i>
                  <i class="bi bi-star-fill"></i>
                  <i class="bi bi-star-half"></i>
                  <i class="bi bi-star"></i>
                </div>
              </div>
              <p class="room-description">Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium.</p>
              <div class="room-amenities">
                <span><i class="bi bi-people"></i> Up to 2 guests</span>
                <span><i class="bi bi-wifi"></i> Free WiFi</span>
                <span><i class="bi bi-car-front"></i> Parking</span>
              </div>
              <div class="room-footer">
                <div class="room-price">
                  <span class="price-from">From</span>
                  <span class="price-amount">$129</span>
                  <span class="price-period">/ night</span>
                </div>
                <a href="room-details.html" class="btn-room-details">View Details</a>
              </div>
            </div>
          </div>
        </div><!-- End Room Card -->

        <div class="col-xl-4 col-lg-6">
          <div class="room-card">
            <div class="room-image">
              <img src="<?php echo get_template_directory_uri(); ?>/assets/img/hotel/room-18.webp" alt="Premium Ocean View" class="img-fluid">
              <div class="room-features">
                <span class="feature-badge ocean">Ocean View</span>
                <span class="feature-badge luxury">Luxury</span>
              </div>
            </div>
            <div class="room-content">
              <div class="room-header">
                <h3>Premium Ocean View</h3>
                <div class="room-rating">
                  <i class="bi bi-star-fill"></i>
                  <i class="bi bi-star-fill"></i>
                  <i class="bi bi-star-fill"></i>
                  <i class="bi bi-star-fill"></i>
                  <i class="bi bi-star-fill"></i>
                </div>
              </div>
              <p class="room-description">Totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt.</p>
              <div class="room-amenities">
                <span><i class="bi bi-people"></i> Up to 3 guests</span>
                <span><i class="bi bi-cup-hot"></i> Coffee Machine</span>
                <span><i class="bi bi-safe"></i> Safe</span>
              </div>
              <div class="room-footer">
                <div class="room-price">
                  <span class="price-from">From</span>
                  <span class="price-amount">$259</span>
                  <span class="price-period">/ night</span>
                </div>
                <a href="room-details.html" class="btn-room-details">View Details</a>
              </div>
            </div>
          </div>
        </div><!-- End Room Card -->

      </div>
    </div>

    <div class="load-more-section" data-aos="fade-up" data-aos-delay="400">
      <div class="text-center">
        <button class="btn-load-more">
          <i class="bi bi-arrow-down-circle"></i>
          Load More Rooms
        </button>
      </div>
    </div>

  </div>

</section><!-- /Rooms 2 Section -->

</main>  










<?php get_footer(); ?>

</body>
</html>