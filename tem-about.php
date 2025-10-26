<?php
/*
Template Name: About page
*/
get_header();
?>

 <main class="main">

 <!-- Page Title -->
 <div class="page-title light-background">
   <div class="container d-lg-flex justify-content-between align-items-center">
     <h1 class="mb-2 mb-lg-0"><?php the_title(); ?></h1>
     <nav class="breadcrumbs">
       <ol>
         <li><a href="<?php echo get_permalink(get_page_by_path('home')); ?>"><?php _e( 'Home', 'your-text-domain' ); ?></a></li>
         <li class="current"><?php the_title(); ?></li>
       </ol>
     </nav>
   </div>
 </div><!-- End Page Title -->

 <!-- About Section -->
 <section id="about" class="about section">

   <div class="container" data-aos="fade-up" data-aos-delay="100">

     <div class="row align-items-center">
       <div class="col-lg-5">
         <div class="image-stack">
           <div class="main-image-wrapper" data-aos="fade-right" data-aos-delay="200">
             <img src="<?php echo get_template_directory_uri(); ?>/assets/img/hotel/showcase-9.webp" alt="Hotel Exterior" class="img-fluid main-image">
             <div class="floating-card" data-aos="zoom-in" data-aos-delay="400">
               <div class="card-icon">
                 <i class="bi bi-star-fill"></i>
               </div>
               <h6>5-Star Excellence</h6>
               <p>Rated #1 Luxury Resort</p>
             </div>
           </div>
           <div class="secondary-image" data-aos="fade-up" data-aos-delay="300">
             <img src="<?php echo get_template_directory_uri(); ?>/assets/img/hotel/room-8.webp" alt="Luxury Suite" class="img-fluid">
           </div>
         </div>
       </div>

       <div class="col-lg-7">
         <div class="content-wrapper" data-aos="fade-left" data-aos-delay="200">
           <div class="badge">
             <span>Est. 1923</span>
           </div>

           <h2>Where Timeless Elegance Meets Modern Luxury</h2>

           <p class="lead">
             Excepteur sint occaecat cupidatat non proident sunt in culpa qui officia deserunt mollit anim id est laborum. Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium.
           </p>

           <p>
             Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
           </p>

           <div class="milestone-timeline">
             <div class="milestone-item" data-aos="slide-up" data-aos-delay="250">
               <div class="milestone-year">1923</div>
               <div class="milestone-content">
                 <h5>Grand Opening</h5>
                 <p>Founded as exclusive mountain retreat</p>
               </div>
             </div>
             <div class="milestone-item" data-aos="slide-up" data-aos-delay="300">
               <div class="milestone-year">1987</div>
               <div class="milestone-content">
                 <h5>Major Renovation</h5>
                 <p>Modern amenities while preserving heritage</p>
               </div>
             </div>
             <div class="milestone-item" data-aos="slide-up" data-aos-delay="350">
               <div class="milestone-year">2019</div>
               <div class="milestone-content">
                 <h5>Spa &amp; Wellness</h5>
                 <p>Award-winning wellness center addition</p>
               </div>
             </div>
           </div>

           <div class="action-buttons">
             <a href="#" class="btn-explore">
               <i class="bi bi-compass"></i>
               Explore Our Heritage
             </a>
             <a href="https://www.youtube.com/watch?v=Y7f98aduVJ8" class="btn-video glightbox">
               <i class="bi bi-play-circle"></i>
               Watch Story
             </a>
           </div>
         </div>
       </div>
     </div>

     <div class="row features-showcase">
       <div class="col-12">
         <div class="features-header text-center" data-aos="fade-up" data-aos-delay="100">
           <h3>Exceptional Hospitality Redefined</h3>
           <p>Discover the amenities and services that make your stay unforgettable</p>
         </div>
       </div>
     </div>

     <div class="row">
       <div class="col-lg-4 col-md-6">
         <div class="feature-card" data-aos="flip-up" data-aos-delay="200">
           <div class="feature-visual">
             <img src="<?php echo get_template_directory_uri(); ?>/assets/img/hotel/amenities-3.webp" alt="Spa Services" class="img-fluid">
             <div class="feature-overlay">
               <div class="feature-icon">
                 <i class="bi bi-flower1"></i>
               </div>
             </div>
           </div>
           <div class="feature-details">
             <h4>World-Class Spa</h4>
             <p>Rejuvenating treatments in our award-winning wellness sanctuary</p>
           </div>
         </div>
       </div>
       <div class="col-lg-4 col-md-6">
         <div class="feature-card" data-aos="flip-up" data-aos-delay="250">
           <div class="feature-visual">
             <img src="<?php echo get_template_directory_uri(); ?>/assets/img/hotel/dining-4.webp" alt="Fine Dining" class="img-fluid">
             <div class="feature-overlay">
               <div class="feature-icon">
                 <i class="bi bi-cup-hot"></i>
               </div>
             </div>
           </div>
           <div class="feature-details">
             <h4>Gourmet Dining</h4>
             <p>Michelin-starred cuisine crafted by renowned executive chefs</p>
           </div>
         </div>
       </div>
       <div class="col-lg-4 col-md-6">
         <div class="feature-card" data-aos="flip-up" data-aos-delay="300">
           <div class="feature-visual">
             <img src="<?php echo get_template_directory_uri(); ?>/assets/img/hotel/location-2.webp" alt="Prime Location" class="img-fluid">
             <div class="feature-overlay">
               <div class="feature-icon">
                 <i class="bi bi-geo-alt"></i>
               </div>
             </div>
           </div>
           <div class="feature-details">
             <h4>Prime Location</h4>
             <p>Nestled in the heart of the city with breathtaking panoramic views</p>
           </div>
         </div>
       </div>
     </div>

     <div class="row achievements-section">
       <div class="col-lg-8 offset-lg-2">
         <div class="achievements-grid" data-aos="fade-up" data-aos-delay="200">
           <div class="achievement-stat">
             <div class="stat-counter">
               <span data-purecounter-start="0" data-purecounter-end="236" data-purecounter-duration="2" class="purecounter"></span>
             </div>
             <div class="stat-description">Luxury Suites</div>
           </div>
           <div class="achievement-stat">
             <div class="stat-counter">
               <span data-purecounter-start="80" data-purecounter-end="96" data-purecounter-duration="2" class="purecounter"></span>%
             </div>
             <div class="stat-description">Satisfaction Rate</div>
           </div>
           <div class="achievement-stat">
             <div class="stat-counter">
               <span data-purecounter-start="0" data-purecounter-end="15" data-purecounter-duration="1" class="purecounter"></span>
             </div>
             <div class="stat-description">International Awards</div>
           </div>
           <div class="achievement-stat">
             <div class="stat-counter">
               <span data-purecounter-start="90" data-purecounter-end="100" data-purecounter-duration="2" class="purecounter"></span>
             </div>
             <div class="stat-description">Years of Excellence</div>
           </div>
         </div>
       </div>
     </div>

   </div>

 </section><!-- /About Section -->

 <!-- Rooms Showcase Section -->
 <section id="rooms-showcase" class="rooms-showcase section">

   <!-- Section Title -->
   <div class="container section-title" data-aos="fade-up">
     <span class="description-title">Rooms</span>
     <h2>Rooms</h2>
     <p>Necessitatibus eius consequatur ex aliquid fuga eum quidem sint consectetur velit</p>
   </div><!-- End Section Title -->

   <div class="container" data-aos="fade-up" data-aos-delay="100">

     <div class="row gy-5">
       <div class="col-xl-8" data-aos="zoom-in" data-aos-delay="200">
         <div class="hero-room-showcase">
           <div class="showcase-image-container">
             <img src="<?php echo get_template_directory_uri(); ?>/assets/img/hotel/room-14.webp" alt="Grand Presidential Suite" class="img-fluid">
             <div class="room-category-badge">
               <span>Presidential</span>
             </div>
             <div class="room-details-overlay">
               <div class="room-specs">
                 <span class="spec-item">
                   <i class="bi bi-people"></i>
                   <span>6 Guests</span>
                 </span>
                 <span class="spec-item">
                   <i class="bi bi-house"></i>
                   <span>180m²</span>
                 </span>
                 <span class="spec-item">
                   <i class="bi bi-geo-alt"></i>
                   <span>Top Floor</span>
                 </span>
               </div>
             </div>
           </div>
           <div class="showcase-content">
             <div class="room-title-section">
               <h2>Grand Presidential Suite</h2>
               <div class="room-rating">
                 <div class="stars">
                   <i class="bi bi-star-fill"></i>
                   <i class="bi bi-star-fill"></i>
                   <i class="bi bi-star-fill"></i>
                   <i class="bi bi-star-fill"></i>
                   <i class="bi bi-star-fill"></i>
                 </div>
                 <span class="rating-text">5.0 Excellence</span>
               </div>
             </div>
             <p class="room-description">Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.</p>
             <div class="amenities-grid">
               <div class="amenity-item">
                 <i class="bi bi-wifi"></i>
                 <span>Premium WiFi</span>
               </div>
               <div class="amenity-item">
                 <i class="bi bi-tv"></i>
                 <span>Smart TV</span>
               </div>
               <div class="amenity-item">
                 <i class="bi bi-cup-hot"></i>
                 <span>Coffee Bar</span>
               </div>
               <div class="amenity-item">
                 <i class="bi bi-snow"></i>
                 <span>Climate Control</span>
               </div>
             </div>
             <div class="booking-section">
               <div class="price-display">
                 <span class="currency">$</span>
                 <span class="amount">649</span>
                 <span class="period">per night</span>
               </div>
               <a href="room-details.html" class="primary-booking-btn">Reserve Suite</a>
             </div>
           </div>
         </div>
       </div><!-- End Hero Room -->

       <div class="col-xl-4">
         <div class="room-list-container">
           <div class="standard-room-card" data-aos="slide-left" data-aos-delay="250">
             <div class="card-image">
               <img src="<?php echo get_template_directory_uri(); ?>/assets/img/hotel/room-6.webp" alt="Executive Room" class="img-fluid">
               <div class="view-link">
                 <i class="bi bi-arrow-up-right"></i>
               </div>
             </div>
             <div class="card-content">
               <h4>Executive Business Room</h4>
               <p>Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores.</p>
               <div class="features-list">
                 <span><i class="bi bi-briefcase"></i>Work Space</span>
                 <span><i class="bi bi-building"></i>City Views</span>
               </div>
               <div class="booking-row">
                 <div class="price">$329<small>/night</small></div>
                 <a href="<?php echo get_permalink( get_page_by_path('rooms-details')); ?>" class="book-link">Book</a>
               </div>
             </div>
           </div><!-- End Standard Room -->

           <div class="standard-room-card" data-aos="slide-left" data-aos-delay="300">
             <div class="card-image">
               <img src="<?php echo get_template_directory_uri(); ?>/assets/img/hotel/room-19.webp" alt="Garden View" class="img-fluid">
               <div class="view-link">
                 <i class="bi bi-arrow-up-right"></i>
               </div>
             </div>
             <div class="card-content">
               <h4>Garden View Deluxe</h4>
               <p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque.</p>
               <div class="features-list">
                 <span><i class="bi bi-tree"></i>Garden View</span>
                 <span><i class="bi bi-door-open"></i>Private Terrace</span>
               </div>
               <div class="booking-row">
                 <div class="price">$269<small>/night</small></div>
                 <a href="<?php echo get_permalink( get_page_by_path('rooms-details')); ?>" class="book-link">Book</a>
               </div>
             </div>
           </div><!-- End Standard Room -->

           <div class="standard-room-card" data-aos="slide-left" data-aos-delay="350">
             <div class="card-image">
               <img src="<?php echo get_template_directory_uri(); ?>/assets/img/hotel/room-12.webp" alt="Family Suite" class="img-fluid">
               <div class="view-link">
                 <i class="bi bi-arrow-up-right"></i>
               </div>
             </div>
             <div class="card-content">
               <h4>Family Comfort Suite</h4>
               <p>Temporibus autem quibusdam et aut officiis debitis aut rerum necessitatibus saepe eveniet ut et voluptates.</p>
               <div class="features-list">
                 <span><i class="bi bi-people"></i>Family Space</span>
                 <span><i class="bi bi-controller"></i>Kids Area</span>
               </div>
               <div class="booking-row">
                 <div class="price">$419<small>/night</small></div>
                 <a href="<?php echo get_permalink( get_page_by_path('rooms-details')); ?>" class="book-link">Book</a>
               </div>
             </div>
           </div><!-- End Standard Room -->

         </div>
       </div>

     </div>

     <div class="row mt-6">
       <div class="col-lg-3 col-sm-6" data-aos="fade-up" data-aos-delay="400">
         <div class="minimal-room-card">
           <div class="room-image">
             <img src="<?php echo get_template_directory_uri(); ?>/assets/img/hotel/room-1.webp" alt="Classic Room" class="img-fluid">
             <div class="hover-overlay">
               <a href="room-details.html" class="view-room">
                 <i class="bi bi-eye"></i>
               </a>
             </div>
           </div>
           <div class="room-summary">
             <h5>Classic Double</h5>
             <div class="price-tag">$189<span>/night</span></div>
             <div class="basic-amenities">
               <i class="bi bi-wifi"></i>
               <i class="bi bi-tv"></i>
               <i class="bi bi-telephone"></i>
             </div>
           </div>
         </div>
       </div><!-- End Minimal Room -->

       <div class="col-lg-3 col-sm-6" data-aos="fade-up" data-aos-delay="450">
         <div class="minimal-room-card">
           <div class="room-image">
             <img src="<?php echo get_template_directory_uri(); ?>/assets/img/hotel/room-5.webp" alt="Superior Room" class="img-fluid">
             <div class="hover-overlay">
               <a href="<?php echo get_permalink( get_page_by_path('rooms-details')); ?>" class="view-room">
                 <i class="bi bi-eye"></i>
               </a>
             </div>
           </div>
           <div class="room-summary">
             <h5>Superior King</h5>
             <div class="price-tag">$249<span>/night</span></div>
             <div class="basic-amenities">
               <i class="bi bi-wifi"></i>
               <i class="bi bi-cup-hot"></i>
               <i class="bi bi-snow"></i>
             </div>
           </div>
         </div>
       </div><!-- End Minimal Room -->

       <div class="col-lg-3 col-sm-6" data-aos="fade-up" data-aos-delay="500">
         <div class="minimal-room-card">
           <div class="room-image">
             <img src="<?php echo get_template_directory_uri(); ?>/assets/img/hotel/room-8.webp" alt="Premium Room" class="img-fluid">
             <div class="hover-overlay">
               <a href="<?php echo get_permalink( get_page_by_path('rooms-details')); ?>" class="view-room">
                 <i class="bi bi-eye"></i>
               </a>
             </div>
           </div>
           <div class="room-summary">
             <h5>Premium Ocean View</h5>
             <div class="price-tag">$359<span>/night</span></div>
             <div class="basic-amenities">
               <i class="bi bi-water"></i>
               <i class="bi bi-door-open"></i>
               <i class="bi bi-award"></i>
             </div>
           </div>
         </div>
       </div><!-- End Minimal Room -->

       <div class="col-lg-3 col-sm-6" data-aos="fade-up" data-aos-delay="550">
         <div class="minimal-room-card">
           <div class="room-image">
             <img src="<?php echo get_template_directory_uri(); ?>/assets/img/hotel/room-17.webp" alt="Luxury Suite" class="img-fluid">
             <div class="hover-overlay">
               <a href="<?php echo get_permalink( get_page_by_path('rooms-details')); ?>" class="view-room">
                 <i class="bi bi-eye"></i>
               </a>
             </div>
           </div>
           <div class="room-summary">
             <h5>Luxury Penthouse</h5>
             <div class="price-tag">$1,199<span>/night</span></div>
             <div class="basic-amenities">
               <i class="bi bi-star"></i>
               <i class="bi bi-house"></i>
               <i class="bi bi-gem"></i>
             </div>
           </div>
         </div>
       </div><!-- End Minimal Room -->

     </div>

     <div class="text-center" data-aos="fade-up" data-aos-delay="600">
       <a href="<?php echo get_permalink( get_page_by_path('rooms')); ?>" class="explore-all-link">
         <span>Explore All Accommodations</span>
         <i class="bi bi-arrow-right"></i>
       </a>
     </div>

   </div>

 </section><!-- /Rooms Showcase Section -->

</main>



















<?php

get_footer();
?>