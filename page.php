<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package _s
 */

get_header();
?>

<!-- Hero Section -->
<div id="SVGwave1BottomSMShape" class="svg-preloader position-relative bg-light overflow-hidden">
  <div class="container space-3">
    <div class="w-md-80 w-lg-60 text-center mx-auto">
      <h1 id="page-title" class="display-4 font-size-md-down-5 text-primary"><?php echo the_title(); ?></h1>
      <p class="lead">Your portfolio should tell your story.</p>
    </div>
  </div>

  <!-- SVG Background -->
  <figure class="position-absolute right-0 bottom-0 left-0">
    <img class="js-svg-injector" src="<?php echo get_template_directory_uri() ?>/assets/svg/components/wave-1-bottom-sm.svg" alt="Image Description"
         data-parent="#SVGwave1BottomSMShape">
  </figure>
  <!-- End SVG Background Section -->
</div>
<!-- End Hero Section -->



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
