<?php
/* Template Name: Contact Page */
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

<!-- Contact Section -->
<section id="contact" class="contact section">

  <!-- Map Section -->
  <div class="map-container mb-5">
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d58619.52375121279!2d87.71635321396477!3d21.779853596998993!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3a021f0e31bdb88b%3A0x83f79f3a8c22e2a!2sContai%2C%20West%20Bengal!5e0!3m2!1sen!2sin!4v1728839220000!5m2!1sen!2sin" width="100%" height="500" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
  </div>

  <div class="container" data-aos="fade-up" data-aos-delay="100">

    <!-- Contact Info -->
    <div class="row g-4 mb-5" data-aos="fade-up" data-aos-delay="300">
      <div class="col-md-6">
        <div class="contact-info-card">
          <div class="icon-box">
            <i class="bi bi-geo-alt"></i>
          </div>
          <div class="info-content">
            <h4>Location</h4>
            <p>482 Pine Street, Seattle, Washington 98101</p>
          </div>
        </div>
      </div>

      <div class="col-md-6">
        <div class="contact-info-card">
          <div class="icon-box">
            <i class="bi bi-telephone"></i>
          </div>
          <div class="info-content">
            <h4>Phone &amp; Email</h4>
            <p>+1 (206) 555-0192</p>
            <p>connect@example.com</p>
          </div>
        </div>
      </div>
    </div>

  
<?php echo do_shortcode('[contact-form-7 id="17a9c9d" title="Contact form 1"]'); ?>
  </div>

</section><!-- /Contact Section -->

</main>


<?php
get_footer();
?>  