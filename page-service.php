<?php
/**
 * Template Name: Service
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package _s
 */

get_header();
?>


  <!-- ========== MAIN ========== -->
  <main id="content" role="main">
    <!-- Hero Section -->
    <div id="SVGheroSectionBg" class="svg-preloader position-relative gradient-half-primary-v3">
      <div class="container space-2 space-top-md-5 space-top-lg-4">
        <div class="row align-items-lg-center">
          <div class="col-lg-5 mb-7 mb-lg-0">
            <!-- Info -->
            <h1 class="mb-4">We create the best <span class="text-primary font-weight-semi-bold">solution</span> for you.</h1>
            <p>Front is an easy-to-use template that is loaded with all the features you will ever need.</p>
            <!-- End Info -->
          </div>

          <div class="col-lg-7">
            <!-- SVG Icon -->
            <figure class="ie-we-have-an-idea">
              <img class="js-svg-injector" src="<?php echo get_template_directory_uri() ?>/assets/svg/illustrations/we-have-an-idea.svg" alt="Image Description"
                   data-parent="#SVGheroSectionBg">
            </figure>
            <!-- End SVG Icon -->
          </div>
        </div>
      </div>

      <!-- SVG Background -->
      <figure class="position-absolute right-0 bottom-0 left-0">
        <img class="js-svg-injector" src="<?php echo get_template_directory_uri() ?>/assets/svg/components/wave-1-bottom-sm.svg" alt="Image Description"
             data-parent="#SVGheroSectionBg">
      </figure>
      <!-- End SVG Background Section -->
    </div>
    <!-- End Hero Section -->

    <!-- Front for -->
    <div class="container space-2 space-bottom-md-3">
      <!-- Title -->
      <div class="w-md-80 w-lg-50 text-center mx-md-auto mb-9">
        <span class="btn btn-xs btn-soft-success btn-pill mb-2">Front</span>
        <h2 class="text-primary font-weight-normal">Who is <span class="font-weight-semi-bold">Front</span> for?</h2>
        <p>All agencies. All startups. All fields of businesses. All countries.</p>
      </div>
      <!-- End Title -->

      <div class="row align-items-lg-center">
        <div class="col-lg-5 order-lg-2 mb-7 mb-lg-0">
          <!-- Info -->
          <div class="pl-lg-7">
            <div class="mb-4">
              <h3 class="h5">Professional design</h3>
              <p>Easy and fast adjustments of elements are possible with Front template. Find our more about our all-in-one programmatic template.</p>
            </div>

            <!-- Link -->
            <a class="card border-0 shadow-sm" href="#">
              <div class="card-body p-4">
                <div class="media align-items-center">
                  <div class="u-avatar mr-3">
                    <img class="img-fluid rounded-circle" src="<?php echo get_template_directory_uri() ?>/assets/img/icons/img2.png" alt="Image Description">
                  </div>
                  <span class="media-body">
                    <span class="d-flex justify-content-between align-items-center font-weight-semi-bold">
                      Get Started with Front <span class="fas fa-angle-right"></span>
                    </span>
                  </span>
                </div>
              </div>
            </a>
            <!-- End Link -->
          </div>
          <!-- End Info -->
        </div>

        <div id="SVGchattingGirl" class="col-lg-7 order-lg-1 svg-preloader">
          <!-- SVG Icon -->
          <figure class="ie-chatting-girl">
            <img class="js-svg-injector" src="<?php echo get_template_directory_uri() ?>/assets/svg/illustrations/chatting-girl.svg" alt="Image Description"
                 data-parent="#SVGchattingGirl">
          </figure>
          <!-- End SVG Icon -->
        </div>
      </div>
    </div>
    <!-- End Front for -->

    <!-- Features Section -->
    <div class="container">
      <div class="row">
        <div class="col-lg-6 mb-7 mb-lg-0">
          <div class="media d-block d-sm-flex pr-md-4">
            <!-- SVG Icon -->
            <figure id="SVGproject" class="svg-preloader w-40 mr-4 mb-4 mb-sm-0">
              <img class="js-svg-injector" src="<?php echo get_template_directory_uri() ?>/assets/svg/flat-icons/project.svg" alt="Image Description"
                   data-parent="#SVGproject">
            </figure>
            <!-- End SVG Icon -->

            <div class="media-body">
              <h3 class="h5">Product Design</h3>

              <div class="d-flex">
                <!-- List -->
                <ul class="list-unstyled text-secondary font-size-1 mr-md-4">
                  <li class="py-1">
                    <span class="h6 text-primary mr-1">&#8226;</span>
                    Illustration
                  </li>
                  <li class="py-1">
                    <span class="h6 text-primary mr-1">&#8226;</span>
                    Graphic
                  </li>
                </ul>
                <!-- End List -->

                <!-- List -->
                <ul class="list-unstyled text-secondary font-size-1">
                  <li class="py-1">
                    <span class="h6 text-primary mr-1">&#8226;</span>
                    Web Design
                  </li>
                  <li class="py-1">
                    <span class="h6 text-primary mr-1">&#8226;</span>
                    UX/UI Design
                  </li>
                </ul>
                <!-- End List -->
              </div>
            </div>
          </div>
        </div>

        <div class="col-lg-6">
          <div class="media d-block d-sm-flex pr-md-4">
            <!-- SVG Icon -->
            <figure id="SVGwebDesign" class="svg-preloader w-40 mr-4 mb-4 mb-sm-0">
              <img class="js-svg-injector" src="<?php echo get_template_directory_uri() ?>/assets/svg/flat-icons/web-design.svg" alt="Image Description"
                   data-parent="#SVGwebDesign">
            </figure>
            <!-- End SVG Icon -->

            <div class="media-body">
              <h3 class="h5">Web Development</h3>

              <div class="d-flex">
                <!-- List -->
                <ul class="list-unstyled text-secondary font-size-1 mr-md-4">
                  <li class="py-1">
                    <span class="h6 text-primary mr-1">&#8226;</span>
                    jQuery
                  </li>
                  <li class="py-1">
                    <span class="h6 text-primary mr-1">&#8226;</span>
                    WordPress
                  </li>
                </ul>
                <!-- End List -->

                <!-- List -->
                <ul class="list-unstyled text-secondary font-size-1">
                  <li class="py-1">
                    <span class="h6 text-primary mr-1">&#8226;</span>
                    HTML5
                  </li>
                  <li class="py-1">
                    <span class="h6 text-primary mr-1">&#8226;</span>
                    PHP
                  </li>
                </ul>
                <!-- End List -->
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- End Features Section -->

	<div id="primary" class="content-area">
		<main id="main" class="site-main container">

		<?php
		while ( have_posts() ) :
			the_post();

			get_template_part( 'template-parts/content', 'page' );

			// If comments are open or we have at least one comment, load up the comment template.
			if ( comments_open() || get_comments_number() ) :
				comments_template();
			endif;

		endwhile; // End of the loop.
		?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_footer();
