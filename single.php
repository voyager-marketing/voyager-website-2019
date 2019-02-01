<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package _s
 */

get_header();
?>
  <!-- ========== MAIN ========== -->
  <main id="content" role="main">

    <?php
    while ( have_posts() ) :
      the_post();

      get_template_part( 'template-parts/content', get_post_type() );

      //the_post_navigation();

      // If comments are open or we have at least one comment, load up the comment template.
      if ( comments_open() || get_comments_number() ) :
        comments_template();
      endif;

    endwhile; // End of the loop.
    ?>


    <!-- Description Section -->
    <div class="container space-bottom-2 space-bottom-md-3">
      <div class="w-lg-60 mx-auto">
       <!-- Tags -->
        <ul class="list-inline text-center mb-0">
          <li class="list-inline-item pb-3">
            <a class="btn btn-xs btn-gray btn-pill" href="#">Business</a>
          </li>
          <li class="list-inline-item pb-3">
            <a class="btn btn-xs btn-gray btn-pill" href="#">Start-Up</a>
          </li>
          <li class="list-inline-item pb-3">
            <a class="btn btn-xs btn-gray btn-pill" href="#">Plan</a>
          </li>
        </ul>
        <!-- End Tags -->

        <hr class="my-7">

        <!-- Social Networks -->
        <ul class="list-inline text-center mb-0">
          <li class="list-inline-item">
            <a class="btn btn-icon btn-soft-secondary btn-bg-transparent" href="https://www.facebook.com/sharer.php?u={<?php echo get_the_permalink(); ?>}">
              <span class="fab fa-facebook-f btn-icon__inner"></span>
            </a>
          </li>
          <li class="list-inline-item">
            <a class="btn btn-icon btn-soft-secondary btn-bg-transparent" href="https://www.google.com/bookmarks/mark?op=edit&bkmk={<?php echo get_the_permalink(); ?>}&title={<?php echo get_the_title() ?>}">
              <span class="fab fa-google btn-icon__inner"></span>
            </a>
          </li>
          <li class="list-inline-item">
            <a class="btn btn-icon btn-soft-secondary btn-bg-transparent" href="https://twitter.com/intent/tweet?url={<?php echo get_the_permalink(); ?>}&text={<?php echo get_the_title() ?>}">
              <span class="fab fa-twitter btn-icon__inner"></span>
            </a>
          </li>
          <li class="list-inline-item">
            <a class="btn btn-icon btn-soft-secondary btn-bg-transparent" href="http://pinterest.com/pin/create/link/?url={<?php echo get_the_permalink(); ?>}">
              <span class="fab fa-pinterest btn-icon__inner"></span>
            </a>
          </li>
          <li class="list-inline-item">
            <a class="btn btn-icon btn-soft-secondary btn-bg-transparent" href="https://getpocket.com/edit?url={<?php echo get_the_permalink(); ?>}">
              <span class="fab fa-get-pocket btn-icon__inner"></span>
            </a>
          </li>
          <li class="list-inline-item">
            <a class="btn btn-icon btn-soft-secondary btn-bg-transparent" href="https://t.me/share/url?url={<?php echo get_the_permalink(); ?>}&text={<?php echo get_the_title() ?>}">
              <span class="fab fa-telegram-plane btn-icon__inner"></span>
            </a>
          </li>
          <li class="list-inline-item">
            <a class="btn btn-icon btn-soft-secondary btn-bg-transparent" href="https://www.linkedin.com/shareArticle?mini=true&url={<?php echo get_the_permalink(); ?>}&title={<?php echo get_the_title() ?>}&summary={<?php echo the_excerpt() ?>}&source={<?php echo get_site_url() ?>}">
              <span class="fab fa-linkedin btn-icon__inner"></span>
            </a>
          </li>
        </ul>
        <!-- End Social Networks -->

        <hr class="my-7">

        <!-- Author -->
        <div class="media">
          <div class="u-avatar mr-3">
            <?php echo get_avatar( get_the_author_meta( 'ID' ), 50, '', null, array( 'class' => 'rounded-circle')); ?>
          </div>
          <div class="media-body">
            <div class="row mb-3 mb-sm-0">
              <div class="col-sm-9 mb-2">
                <h4 class="d-inline-block mb-0">
                  <a class="d-block h6 mb-0" href="<?php echo get_author_posts_url( get_the_author_meta( 'ID' ) ); ?>"><?php echo get_the_author(); ?></a>
                </h4>
                <small class="d-block text-muted">Author description goes here.</small>
              </div>
              <div class="col-sm-3 text-sm-right">
                <a href="<?php echo get_author_posts_url( get_the_author_meta( 'ID' ) ); ?>" class="btn btn-xs btn-soft-primary font-weight-semi-bold transition-3d-hover">Follow</a>
              </div>
            </div>
            <p class="small">Andrea Gard is the author of two story collections and two novels, most recently Eat Only When You're Hungry. She lives in Chicago.</p>
          </div>
        </div>
        <!-- End Author -->
      </div>
    </div>
    <!-- End Description Section -->

    <!-- Related News -->
    <div class="bg-light space-2">
      <div class="container space-2 space-md-3">
        <div class="card-deck d-block d-md-flex card-md-gutters-3">
          <!-- Blog News -->
          <div class="card border-0 mb-5 mb-md-0">
            <img class="card-img-top" src="<?php echo get_template_directory_uri() ?>/assets/img/480x320/img15.jpg" alt="Image Description">
            <div class="card-body p-5">
              <small class="d-block text-secondary mb-1">March 20, 2018</small>
              <h3 class="h6 mb-0">
                <a href="single-article-classic.html">Remote workers, here's how to dodge distractions</a>
              </h3>
            </div>
          </div>
          <!-- End Blog News -->

          <!-- Blog News -->
          <div class="card border-0 mb-5 mb-md-0">
            <img class="card-img-top" src="<?php echo get_template_directory_uri() ?>/assets/img/480x320/img16.jpg" alt="Image Description">
            <div class="card-body p-5">
              <small class="d-block text-secondary mb-1">April 29, 2018</small>
              <h3 class="h6 mb-0">
                <a href="single-article-classic.html">How to make trust your competitive advantage</a>
              </h3>
            </div>
          </div>
          <!-- End Blog News -->

          <!-- Blog News -->
          <div class="card border-0">
            <img class="card-img-top" src="<?php echo get_template_directory_uri() ?>/assets/img/480x320/img13.jpg" alt="Image Description">
            <div class="card-body p-5">
              <small class="d-block text-secondary mb-1">March 20, 2018</small>
              <h3 class="h6 mb-0">
                <a href="single-article-classic.html">How to change careers or start a home-based business?</a>
              </h3>
            </div>
          </div>
          <!-- End Blog News -->
        </div>
      </div>
    </div>
    <!-- End Related News -->

<?php
get_footer();
