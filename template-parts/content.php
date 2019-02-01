<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package _s
 */

?>



<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">
		<!-- Hero Section -->
    <div class="dzsparallaxer auto-init height-is-based-on-content use-loading mode-scroll" data-options='{direction: "normal"}'>
      <!-- Apply your Parallax background image here -->
      <div class="divimage dzsparallaxer--target" style="height: 130%; background-image: url(<?php echo get_the_post_thumbnail_url(); ?>)"></div>

      <!-- Content -->
      <div class="js-scroll-effect position-relative"
           data-scroll-effect="smoothFadeToBottom">
        <div class="container space-top-2 space-bottom-1 space-top-md-5">
          <div class="text-center w-lg-80 mx-auto space-bottom-2 space-bottom-md-3">
            <h1 class="display-4 font-size-md-down-5 text-white font-weight-normal mb-0">
            	<?php the_title(); ?>
            </h1>
          </div>

          <!-- Author -->
          <div class="text-center">
            <div class="u-avatar mx-auto mb-2">
              <?php echo get_avatar( get_the_author_meta( 'ID' ), 50, '', null, array( 'class' => 'rounded-circle')); ?>
            </div>
            <span class="d-block">
              <a class="text-white h6 mb-0" href="#"><?php echo get_the_author(); ?></a>
            </span>
          </div>
          <!-- End Author -->
        </div>
      </div>
      <!-- End Content -->
    </div>
    <!-- End Hero Section -->
	</header><!-- .entry-header -->

  <!-- Description Section -->
  <div class="container space-top-2 space-top-md-3">
    <div class="w-lg-60 mx-auto">
      <div class="mb-4">
        <span class="text-muted">
        	<?php
						if ( 'post' === get_post_type() ) :
							?>
							<div class="entry-meta">
								<?php
								_s_posted_on();
								_s_posted_by();
								?>
							</div><!-- .entry-meta -->
						<?php endif; ?>
        </span>
      </div>

			<?php
			if ( is_singular() ) :
				the_title( '<h1 class="entry-title">', '</h1>' );
			else :
				the_title( '<h2 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' );
			endif; ?>

			<?php // _s_post_thumbnail(); ?>

			<div class="entry-content">
				<?php
				the_content( sprintf(
					wp_kses(
						/* translators: %s: Name of current post. Only visible to screen readers */
						__( 'Continue reading<span class="screen-reader-text"> "%s"</span>', '_s' ),
						array(
							'span' => array(
								'class' => array(),
							),
						)
					),
					get_the_title()
				) );

				wp_link_pages( array(
					'before' => '<div class="page-links">' . esc_html__( 'Pages:', '_s' ),
					'after'  => '</div>',
				) );
				?>
			</div><!-- .entry-content -->

			<footer class="entry-footer">
				<?php _s_entry_footer(); ?>
			</footer><!-- .entry-footer -->
	  </div>
	</div>
	<!-- End Description Section -->

</article><!-- #post-<?php the_ID(); ?> -->

