<?php
/**
 * Static Front Page.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 * @package Voyager_Theme
 */
get_header();
?>

  <!-- FRONT - Hero #14 -->
  <?php if( have_rows('slides') ): ?>
    <div class="js-slick-carousel u-slick u-slick--equal-height"
         data-fade="true"
         data-infinite="true"
         data-autoplay="true"
         data-speed="10000"
         data-pagi-classes="text-center u-slick__pagination u-slick__pagination--white position-absolute right-0 bottom-0 left-0 mb-4 mb-0">

      <?php while ( have_rows('slides') ) : the_row(); ?>

        <div class="js-slide gradient-overlay-half-primary-v1 bg-img-hero space-3 min-height-lg-100vh" style="background-image: url(<?php echo get_template_directory_uri() ?>/assets/img/1920x800/img7.jpg);">
            <!-- Hero News -->
            <div class="container d-lg-flex align-items-lg-center">
              <article class="js-scroll-effect position-relative w-lg-60 text-center mx-lg-auto"
                       data-scroll-effect="smoothFadeToBottom"
                       data-scroll-effect-speed="500">
                <!-- Share Social Networks -->
                <div data-scs-animation-in="fadeInUp">
                  <ul class="list-inline mb-4">
                    <li class="list-inline-item">
                      <a class="btn btn-sm btn-icon btn-soft-light btn-bg-transparent rounded-circle" href="#">
                        <span class="fab fa-facebook-f btn-icon__inner"></span>
                      </a>
                    </li>
                    <li class="list-inline-item">
                      <a class="btn btn-sm btn-icon btn-soft-light btn-bg-transparent rounded-circle" href="#">
                        <span class="fab fa-google btn-icon__inner"></span>
                      </a>
                    </li>
                    <li class="list-inline-item">
                      <a class="btn btn-sm btn-icon btn-soft-light btn-bg-transparent rounded-circle" href="#">
                        <span class="fab fa-twitter btn-icon__inner"></span>
                      </a>
                    </li>
                    <li class="list-inline-item">
                      <a class="btn btn-sm btn-icon btn-soft-light btn-bg-transparent rounded-circle" href="#">
                        <span class="fab fa-github btn-icon__inner"></span>
                      </a>
                    </li>
                  </ul>
                </div>
                <!-- End Share Social Networks -->

                <!-- Info -->
                <div class="mb-4">
                  <h1 class="text-white font-weight-semi-bold mb-3"
                      data-scs-animation-in="fadeInUp"><?php the_sub_field('title'); ?></h1>
                  <p class="text-white-70 mb-7"
                     data-scs-animation-in="fadeInUp"><?php the_sub_field('text'); ?></p>
                </div>
                <a class="btn text-primary btn-white btn-pill btn-wide transition-3d-hover" href="../blog/single-article-classic.html"
                   data-scs-animation-in="fadeInUp"><?php the_sub_field('button_text'); ?></a>
                <!-- End Info -->
              </article>
            </div>
            <!-- End Hero News -->
        </div>

      <?php endwhile; ?>
    </div>
  <?php endif;?>
  <!-- End Hero #14 Section -->

<!-- Hero Section -->
<div class="container space-2 space-top-md-5 space-bottom-md-3 space-top-lg-4">
  <div class="row justify-content-lg-between align-items-lg-center">
    <div class="col-lg-5 mb-4">
      <!-- Title -->
      <div class="mb-3">
        <h1 class="display-4 font-size-md-down-5 mb-0">Voyager</h1>
        <h2 class="text-primary display-3 font-size-md-down-5 font-weight-semi-bold">Marketing</h2>
      </div>
      <p>Integrate and setup your business with Front. Attract more visitors, and win more business with Front template.</p>
      <!-- End Title -->
    </div>

    <div class="col-lg-6 mb-4">
      <!-- SVG Icon -->
      <div id="SVGeasyStart" class="svg-preloader d-none d-lg-block">
        <figure class="ie-subscribe-2">
          <img class="js-svg-injector" src="<?php echo get_template_directory_uri() ?>/assets/svg/flat-icons/easy-start.svg" alt="Image Description"
               data-parent="#SVGeasyStart">
        </figure>
      </div>
      <!-- End SVG Icon -->
    </div>
  </div>

</div>
<!-- End Hero Section -->



<!-- Icon Blocks Section -->
<div class="bg-light">
  <div class="container space-2">
    <div class="w-lg-85 mx-lg-auto">
      <div class="card-deck d-block d-md-flex card-md-gutters-3">
        <!-- Card -->
        <article class="card text-center">
          <div class="card-body p-7">
            <!-- SVG Icon -->
            <div id="SVGforSale" class="svg-preloader w-75 mx-auto mb-6">
              <figure class="ie-for-sale">
                <img class="js-svg-injector" src="<?php echo get_template_directory_uri() ?>/assets/svg/flat-icons/for-sale.svg" alt="Image Description"
                     data-parent="#SVGforSale">
              </figure>
            </div>
            <!-- End SVG Icon -->

            <h3 class="h4 mb-3">I'm a Seller</h3>
            <p class="mb-4">Discover how much property sold for with our comprehensive house price data.</p>
            <a class="btn btn-sm btn-soft-danger transition-3d-hover" href="#">
              Sell my Home
              <span class="fas fa-angle-right ml-2"></span>
            </a>
          </div>
        </article>
        <!-- End Card -->

        <!-- Card -->
        <article class="card text-center">
          <div class="card-body p-7">
            <!-- SVG Icon -->
            <div id="SVGbuyer" class="svg-preloader w-75 mx-auto mb-6">
              <figure class="ie-buyer">
                <img class="js-svg-injector" src="<?php echo get_template_directory_uri() ?>/assets/svg/flat-icons/buyer.svg" alt="Image Description"
                     data-parent="#SVGbuyer">
              </figure>
            </div>
            <!-- End SVG Icon -->

            <h3 class="h4 mb-3">I'm a Buyer</h3>
            <p class="mb-4">Ensure you find the right home, near the right school with new School Checker tool.</p>
            <a class="btn btn-sm btn-soft-primary transition-3d-hover" href="#">
              Buy a Home
              <span class="fas fa-angle-right ml-2"></span>
            </a>
          </div>
        </article>
        <!-- End Card -->
      </div>
    </div>
  </div>
</div>
<!-- End Icon Blocks Section -->

<!-- Hero Section -->
<div id="SVGheroSectionBg" class="svg-preloader position-relative gradient-half-primary-v3 pb-4">
  <div class="container space-2">
    <div class="row align-items-lg-center">
      <div class="col-lg-5 mb-7 mb-lg-0">
        <!-- Info -->
        <h1 class="mb-4"><?php the_field( 'hero_title' ); ?></h1>
        <p><?php the_field( 'hero_text' ); ?></p>
        <a class="btn btn-white btn-wide btn-pill transition-3d-hover" href="https://themes.getbootstrap.com/product/front-multipurpose-responsive-template/">
          Get Started
          <span class="fas fa-arrow-right text-primary font-size-1 ml-2"></span>
        </a>
        <!-- End Info -->
      </div>

      <div class="col-lg-7">
        <!-- SVG Icon -->
        <figure class="ie-we-have-an-idea">
          <img class="js-svg-injector" src="<?php echo get_template_directory_uri() ?>/images/home.svg" alt="Image Description"
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



<!-- What We Do Section -->
<div class="container space-2">
  <div class="row justify-content-lg-between">
    <div class="col-lg-4 mb-7 mb-lg-0">
      <?php if ( have_rows( 'what_we_do' ) ) : ?>
        <?php while ( have_rows( 'what_we_do' ) ) : the_row(); ?>

          <!-- Title -->
          <small class="text-secondary text-uppercase font-weight-medium mb-2"><?php the_sub_field( 'subtitle' ); ?></small>
          <h3 class="font-weight-medium"><?php the_sub_field( 'title' ); ?></h3>
          <p><?php the_sub_field( 'text' ); ?></p>
          <!-- End Title -->

        <?php endwhile; ?>
      <?php endif; ?>
    </div>

    <div class="col-lg-7">
      <div class="row">
        <div class="col-sm-6 mb-3">
          <!-- Icon Blocks -->
          <figure id="icon26" class="svg-preloader ie-height-56 w-100 max-width-8 mb-3">
            <img class="js-svg-injector" src="<?php echo get_template_directory_uri() ?>/assets/svg/icons/icon-26.svg" alt="SVG"
                 data-parent="#icon26">
          </figure>
          <h4 class="h5">Web</h4>
          <p class="font-size-1">Building a foundation with beautiful, fully responsive, and mobile-first websites.</p>
          <!-- End Icon Blocks -->
        </div>

        <div class="col-sm-6 mb-3">
          <!-- Icon Blocks -->
          <figure id="icon27" class="svg-preloader ie-height-56 w-100 max-width-8 mb-3">
            <img class="js-svg-injector" src="<?php echo get_template_directory_uri() ?>/assets/svg/icons/icon-27.svg" alt="SVG"
                 data-parent="#icon27">
          </figure>
          <h4 class="h5">Social</h4>
          <p class="font-size-1">Social media programs dedicated to creating assets that grab attention.</p>
          <!-- End Icon Blocks -->
        </div>

        <div class="w-100"></div>

        <div class="col-sm-6 mb-3 mb-sm-0">
          <!-- Icon Blocks -->
          <figure id="icon25" class="svg-preloader ie-height-56 w-100 max-width-8 mb-3">
            <img class="js-svg-injector" src="<?php echo get_template_directory_uri() ?>/assets/svg/icons/icon-25.svg" alt="SVG"
                 data-parent="#icon25">
          </figure>
          <h4 class="h5">Content</h4>
          <p class="font-size-1">Get in front of the right audience while developing effective strategies to keep the conversation going. </p>
          <!-- End Icon Blocks -->
        </div>

        <div class="col-sm-6">
          <!-- Icon Blocks -->
          <figure id="icon28" class="svg-preloader ie-height-56 w-100 max-width-8 mb-3">
            <img class="js-svg-injector" src="<?php echo get_template_directory_uri() ?>/assets/svg/icons/icon-28.svg" alt="SVG"
                 data-parent="#icon28">
          </figure>
          <h4 class="h5">Analytics</h4>
          <p class="font-size-1">All of the traffic in the world means nothing if it's not converting into paying customers, sales, or clients.</p>
          <!-- End Icon Blocks -->
        </div>
      </div>
    </div>
  </div>
</div>
<!-- End What We Do Section -->


<?php /* ?>
<!-- Pricing Section -->
<div class="container space-1">
  <div class="mx-lg-auto">
    <div class="card-deck d-block d-md-flex card-md-gutters-3 mb-5">
      <!-- Pricing -->
      <div class="card text-center mb-5 mb-md-0">
        <!-- Header -->
        <header class="card-header p-5">
          <h4 class="h5 text-success">Website Design & Development</h4>
          <div>
            <span class="text-secondary">starting at</span>
            <span class="h1 text-dark font-weight-medium">
              <span class="align-top font-size-2">$</span>800
            </span>
          </div>
        </header>
        <!-- End Header -->

        <!-- Content -->
        <div class="card-body p-5">
          <!-- SVG Icon -->
          <figure id="SVGfreeTrial" class="svg-preloader w-80 mx-auto mb-5">
            <img class="js-svg-injector" src="<?php echo get_template_directory_uri() ?>/assets/svg/flat-icons/free-trial.svg" alt="Image Description"
                 data-parent="#SVGfreeTrial">
          </figure>
          <!-- End SVG Icon -->

          <button type="button" class="btn btn-sm btn-block btn-success transition-3d-hover">Start 14-Day Free Trial</button>
        </div>
        <!-- End Content -->
      </div>
      <!-- End Pricing -->

      <!-- Pricing -->
      <div class="card card-frame-highlighted text-center">
        <!-- Header -->
        <header class="card-header p-5">
          <h4 class="h5 text-secondary">Social Media & Digital Marketing</h4>
          <div>
            <span class="text-secondary">starting at</span>
            <span class="h1 text-dark font-weight-medium">
              <span class="align-top font-size-2">$</span>500
            </span>
          </div>
        </header>
        <!-- End Header -->

        <!-- Content -->
        <div class="card-body p-5">
          <!-- SVG Icon -->
          <figure id="SVGenterprise" class="svg-preloader w-80 mx-auto mb-5">
            <img class="js-svg-injector" src="<?php echo get_template_directory_uri() ?>/assets/svg/flat-icons/enterprise-1.svg" alt="Image Description"
                 data-parent="#SVGenterprise">
          </figure>
          <!-- End SVG Icon -->

          <button type="button" class="btn btn-sm btn-block btn-primary transition-3d-hover">Start Enterprise</button>
        </div>
        <!-- End Content -->
      </div>
      <!-- End Pricing -->

      <!-- Pricing -->
      <div class="card card-frame-highlighted text-center">
        <!-- Header -->
        <header class="card-header p-5">
          <h4 class="h5 text-primary">Managed WordPress Hosting</h4>
          <div>
            <span class="text-secondary">starting at</span>
            <span class="h1 text-dark font-weight-medium">
              <span class="align-top font-size-2">$</span>35
            </span>
          </div>
        </header>
        <!-- End Header -->

        <!-- Content -->
        <div class="card-body p-5">
          <!-- SVG Icon -->
          <figure id="SVGenterprise" class="svg-preloader w-80 mx-auto mb-5">
            <img class="js-svg-injector" src="<?php echo get_template_directory_uri() ?>/assets/svg/flat-icons/enterprise-1.svg" alt="Image Description"
                 data-parent="#SVGenterprise">
          </figure>
          <!-- End SVG Icon -->

          <button type="button" class="btn btn-sm btn-block btn-primary transition-3d-hover">Start Enterprise</button>
        </div>
        <!-- End Content -->
      </div>
      <!-- End Pricing -->

      <!-- Pricing -->
      <div class="card card-frame-highlighted text-center">
        <!-- Header -->
        <header class="card-header p-5">
          <h4 class="h5 text-primary">Voyage Beyond with Enterprise</h4>
          <div>
            <span class="h1 text-dark font-weight-medium">
              Contact
            </span>
          </div>
        </header>
        <!-- End Header -->

        <!-- Content -->
        <div class="card-body p-5">
          <!-- SVG Icon -->
          <figure id="SVGenterprise" class="svg-preloader w-80 mx-auto mb-5">
            <img class="js-svg-injector" src="<?php echo get_template_directory_uri() ?>/assets/svg/flat-icons/enterprise-1.svg" alt="Image Description"
                 data-parent="#SVGenterprise">
          </figure>
          <!-- End SVG Icon -->

          <button type="button" class="btn btn-sm btn-block btn-primary transition-3d-hover">Start Enterprise</button>
        </div>
        <!-- End Content -->
      </div>
      <!-- End Pricing -->
    </div>
  </div>
</div>
<!-- End Pricing Section -->
<?php */ ?>


<!-- Hero Section -->
<div id="SVGheroSectionBg2" class="svg-preloader position-relative gradient-half-primary-v3">
  <div class="container space-2">
    <div class="row align-items-lg-center">
      <div class="col-lg-5 mb-7 mb-lg-0">
        <!-- Info -->
        <h1 class="mb-4"><?php the_field( 'cta_title' ); ?></h1>
        <p><?php the_field( 'cta_text' ); ?></p>
        <!-- End Info -->
      </div>

      <div class="col-lg-7">
        <!-- SVG Icon -->
        <figure class="ie-we-have-an-idea">
          <img class="js-svg-injector" src="<?php echo get_template_directory_uri() ?>/assets/svg/illustrations/we-have-an-idea.svg" alt="Image Description"
               data-parent="#SVGheroSectionBg2">
        </figure>
        <!-- End SVG Icon -->
      </div>
    </div>
  </div>

  <!-- SVG Background -->
  <figure class="position-absolute right-0 bottom-0 left-0">
    <img class="js-svg-injector" src="<?php echo get_template_directory_uri() ?>/assets/svg/components/wave-1-bottom-sm.svg" alt="Image Description"
         data-parent="#SVGheroSectionBg2">
  </figure>
  <!-- End SVG Background Section -->
</div>
<!-- End Hero Section -->






<div class="container space-2">
<div class="row">
  <div class="col-md-6 mb-3 mb-md-0">
    <!-- Blog Card -->
    <article class="d-flex align-items-start flex-wrap height-380 gradient-overlay-half-dark-v2 bg-img-hero rounded-pseudo transition-3d-hover p-5 mt-1" style="background-image: url(<?php echo get_template_directory_uri() ?>/assets/img/500x550/img2.jpg);">
      <header class="w-100 d-flex justify-content-between mb-3">
        <!-- Author -->
        <div class="media align-items-center">
          <a class="u-sm-avatar position-relative mr-3" href="#">
            <img class="img-fluid rounded-circle" src="<?php echo get_template_directory_uri() ?>/assets/img/100x100/img3.jpg" alt="Image Description">
            <span class="badge badge-primary badge-pos badge-pos--bottom-right rounded-circle">+</span>
          </a>
          <div class="media-body">
            <h3 class="h6 text-white mb-0">
              <a href="#">Scott Levine</a>
            </h3>
            <small class="d-block text-white">on <a class="text-white-70" href="#">Buzzfeed</a></small>
          </div>
        </div>
        <!-- End Author -->

        <small class="d-block text-white-70">1 day ago</small>
      </header>

      <!-- Info -->
      <div class="mt-auto">
        <h2 class="h5 text-white">
          <a href="#">Facebook is creating a news section in Watch to feature breaking news</a>
        </h2>
        <p class="text-white-70 mb-0">Facebook launched the Watch platform in August</p>
      </div>
      <!-- End Info -->
    </article>
    <!-- End Blog Card -->
  </div>

  <div class="col-md-6">
    <!-- Blog Card -->
    <article class="d-flex align-items-start flex-wrap height-380 gradient-overlay-half-dark-v2 bg-img-hero rounded-pseudo transition-3d-hover p-5 mt-1" style="background-image: url(<?php echo get_template_directory_uri() ?>/assets/img/500x550/img3.jpg);">
      <header class="w-100 d-flex justify-content-between mb-3">
        <!-- Author -->
        <div class="media align-items-center">
          <a class="u-sm-avatar position-relative mr-3" href="#">
            <img class="img-fluid rounded-circle" src="<?php echo get_template_directory_uri() ?>/assets/img/100x100/img1.jpg" alt="Image Description">
            <span class="badge badge-primary badge-pos badge-pos--bottom-right rounded-circle">+</span>
          </a>
          <div class="media-body">
            <h3 class="h6 text-white mb-0">
              <a href="#">Andrea Gard</a>
            </h3>
            <small class="d-block text-white">on <a class="text-white-70" href="#">Buzzfeed</a></small>
          </div>
        </div>
        <!-- End Author -->

        <small class="d-block text-white-70">29 days ago</small>
      </header>

      <!-- Info -->
      <div class="mt-auto">
        <h2 class="h5 text-white">
          <a href="#">A last-minute Labor Day road trip</a>
        </h2>
        <p class="text-white-70 mb-0">Time is running out on all those ambitious plans for barbecues, lounging at the beach and road trips.</p>
      </div>
      <!-- End Info -->
    </article>
    <!-- End Blog Card -->
  </div>
</div>
</div>










<?php /*  ?>
<div class="container space-2">
  <div class="row">

    <?php
    $blogArticleOne = get_field('blog_article_1');

    if( $blogArticleOne ):
      $post = $blogArticleOne;
      setup_postdata( $post );
      ?>
      <div class="col-md-6 mb-3 mb-md-0">
        <!-- Article -->
        <article>
          <img class="img-fluid rounded" src="<?php echo the_post_thumbnail_url() ?>" alt="<?php the_title_attribute(); ?>">

          <div class="px-4">
            <ul class="list-inline d-flex align-items-center py-3">
              <li class="list-inline-item d-flex align-items-center pr-2">
                <div class="u-sm-avatar mr-2">
                  <a href="<?php the_permalink(); ?>" title="">
                    <?php $authorGrav = get_avatar( get_the_author_meta( 'ID' ), 32, '', null, array( 'class' => 'rounded-circle')); ?>
                    <?php if ( $authorGrav !== "" ) : ?>
                        <?php
                          echo $authorGrav;?>
                    <?php endif; ?>
                  </a>
                </div>
                <a class="text-secondary font-size-1" href="#"><?php echo get_the_author(); ?></a>
              </li>
              <li class="list-inline-item ml-auto">
                <a class="d-flex align-items-center small text-secondary" href="javascript:;">
                  <span class="far fa-heart mr-2"></span>
                  3 Likes
                </a>
              </li>
            </ul>

            <!-- Info -->
            <small class="d-block text-muted mb-1">5 minutes ago</small>
            <h2 class="h4">
              <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
            </h2>
            <p class="mb-0"><?php the_excerpt(); ?></p>
            <!-- End Info -->
          </div>
        </article>
        <!-- End Article -->
      </div>
      <?php wp_reset_postdata(); // IMPORTANT - reset the $post object so the rest of the page works correctly ?>
    <?php endif; ?>

    <?php
    $blogArticleTwo = get_field('blog_article_2');

    if( $blogArticleTwo ):
      $post = $blogArticleTwo;
      setup_postdata( $post );
      ?>
      <div class="col-md-6 mb-3 mb-md-0">
        <!-- Article -->
        <article>
          <img class="img-fluid rounded" src="<?php echo the_post_thumbnail_url() ?>" alt="<?php the_title_attribute(); ?>">

          <div class="px-4">
            <ul class="list-inline d-flex align-items-center py-3">
              <li class="list-inline-item d-flex align-items-center pr-2">
                <div class="u-sm-avatar mr-2">
                  <a href="<?php the_permalink(); ?>" title="">
                    <?php $authorGrav = get_avatar( get_the_author_meta( 'ID' ), 32, '', null, array( 'class' => 'rounded-circle')); ?>
                    <?php if ( $authorGrav !== "" ) : ?>
                        <?php
                          echo $authorGrav;?>
                    <?php endif; ?>
                  </a>
                </div>
                <a class="text-secondary font-size-1" href="#"><?php echo get_the_author(); ?></a>
              </li>
              <li class="list-inline-item ml-auto">
                <a class="d-flex align-items-center small text-secondary" href="javascript:;">
                  <span class="far fa-heart mr-2"></span>
                  3 Likes
                </a>
              </li>
            </ul>

            <!-- Info -->
            <small class="d-block text-muted mb-1">5 minutes ago</small>
            <h2 class="h4">
              <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
            </h2>
            <p class="mb-0"><?php the_excerpt(); ?></p>
            <!-- End Info -->
          </div>
        </article>
        <!-- End Article -->
      </div>
      <?php wp_reset_postdata(); // IMPORTANT - reset the $post object so the rest of the page works correctly ?>
    <?php endif; ?>

  </div>
</div>
<?php */ ?>



















<main id="main" class="site-main" role="main">
  <div class="container">
    <div class="row">
      <div class="col-12">
        <section id="content" class="page-content">
          <?php
          while ( have_posts() ) : the_post();
            get_template_part( 'partials/content', 'page' );
            if ( comments_open() || get_comments_number() ) :
              comments_template();
            endif;
          endwhile;
          ?>
        </section>
      </div>
    </div>
  </div>
</main>
</div>

<?php
get_footer();
