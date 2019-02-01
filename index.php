<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package _s
 */

get_header();
?>

<div id="logoAndNav"></div>

  <!-- ========== MAIN ========== -->
  <main id="content" role="main">
    <!-- Blog List Section -->
    <div class="container space-2 space-top-md-5 space-top-lg-4">
      <!-- Title -->
      <div class="w-md-80 w-lg-60 mb-9">
        <h1 class="font-weight-normal">Blog list - <span class="text-primary font-weight-semi-bold">Right Sidebar</span></h1>
      </div>
      <!-- End Title -->

      <div class="row">
        <div class="col-lg-9 mb-9 mb-lg-0">
          <!-- Blog List News -->
          <article class="d-block card border-0 mb-7">
            <div class="card-body p-0">
              <div class="row">
                <div class="col-sm-5 mb-5 mb-sm-0">
                  <img class="img-fluid w-100 rounded" src="<?php echo get_template_directory_uri() ?>/assets/img/480x320/img12.jpg" alt="Image Description">
                </div>

                <div class="col-sm-7">
                  <div class="pt-1 pr-4">
                    <small class="d-block text-muted mb-3">April 11, 2018</small>
                    <div class="mb-7">
                      <h2 class="h5">
                        <a href="single-article-classic.html">Smartbtc sees the need for contracts</a>
                      </h2>
                      <p>Just recently the startup Smartbtc announced the execution of...</p>
                    </div>
                    <small class="d-block text-secondary">by <a class="text-dark font-weight-semi-bold" href="#">James Austin</a></small>
                  </div>
                </div>
              </div>
            </div>
          </article>
          <!-- End Blog News -->

          <!-- Blog List News -->
          <article class="d-block card border-0 mb-7">
            <div class="card-body p-0">
              <div class="row">
                <div class="col-sm-5 mb-5 mb-sm-0">
                  <img class="img-fluid w-100 rounded" src="<?php echo get_template_directory_uri() ?>/assets/img/480x320/img17.jpg" alt="Image Description">
                </div>

                <div class="col-sm-7">
                  <div class="pt-1 pr-4">
                    <small class="d-block text-muted mb-3">May 5, 2018</small>
                    <div class="mb-7">
                      <h3 class="h5">
                        <a href="single-article-classic.html">Italy completes consultations on companies</a>
                      </h3>
                      <p>Public consultations on a new regulatory regime for crypto companies...</p>
                    </div>
                    <small class="d-block text-secondary">by <a class="text-dark font-weight-semi-bold" href="#">James Austin</a></small>
                  </div>
                </div>
              </div>
            </div>
          </article>
          <!-- End Blog News -->

          <!-- Blog List News -->
          <article class="d-block card border-0 mb-7">
            <div class="card-body p-0">
              <div class="row">
                <div class="col-sm-5 mb-5 mb-sm-0">
                  <img class="img-fluid w-100 rounded" src="<?php echo get_template_directory_uri() ?>/assets/img/480x320/img13.jpg" alt="Image Description">
                </div>

                <div class="col-sm-7">
                  <div class="pt-1 pr-4">
                    <small class="d-block text-muted mb-3">April 16, 2018</small>
                    <div class="mb-7">
                      <h3 class="h5">
                        <a href="single-article-classic.html">ICOs have raised $2 billion this year</a>
                      </h3>
                      <p>Despite the quality of this year's initial crowd offerings being patchy at best...</p>
                    </div>
                    <small class="d-block text-secondary">by <a class="text-dark font-weight-semi-bold" href="#">Scott Levine</a></small>
                  </div>
                </div>
              </div>
            </div>
          </article>
          <!-- End Blog News -->

          <!-- Blog List News -->
          <article class="d-block card border-0 mb-7">
            <div class="card-body p-0">
              <div class="row">
                <div class="col-sm-5 mb-5 mb-sm-0">
                  <img class="img-fluid w-100 rounded" src="<?php echo get_template_directory_uri() ?>/assets/img/480x320/img14.jpg" alt="Image Description">
                </div>

                <div class="col-sm-7">
                  <div class="pt-1 pr-4">
                    <small class="d-block text-muted mb-3">May 1, 2018</small>
                    <div class="mb-7">
                      <h3 class="h5">
                        <a href="single-article-classic.html">Touch yourself</a>
                      </h3>
                      <p>Everyone's are different, and they can even change...</p>
                    </div>
                    <small class="d-block text-secondary">by <a class="text-dark font-weight-semi-bold" href="#">Charlotte Moore</a></small>
                  </div>
                </div>
              </div>
            </div>
          </article>
          <!-- End Blog News -->

          <!-- Blog Card -->
          <article class="card bg-primary text-center shadow-primary-lg position-relative mb-7">
            <a class="card-body py-9 px-7" href="../blog/single-article-classic.html">
              <!-- SVG Quote -->
              <figure class="mx-auto mb-3">
                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="40px" height="40px"
                   viewBox="0 0 8 8" style="enable-background:new 0 0 8 8;" xml:space="preserve">
                  <path class="fill-white" opacity=".7" d="M3,1.3C2,1.7,1.2,2.7,1.2,3.6c0,0.2,0,0.4,0.1,0.5c0.2-0.2,0.5-0.3,0.9-0.3c0.8,0,1.5,0.6,1.5,1.5c0,0.9-0.7,1.5-1.5,1.5
                    C1.4,6.9,1,6.6,0.7,6.1C0.4,5.6,0.3,4.9,0.3,4.5c0-1.6,0.8-2.9,2.5-3.7L3,1.3z M7.1,1.3c-1,0.4-1.8,1.4-1.8,2.3
                    c0,0.2,0,0.4,0.1,0.5c0.2-0.2,0.5-0.3,0.9-0.3c0.8,0,1.5,0.6,1.5,1.5c0,0.9-0.7,1.5-1.5,1.5c-0.7,0-1.1-0.3-1.4-0.8
                    C4.4,5.6,4.4,4.9,4.4,4.5c0-1.6,0.8-2.9,2.5-3.7L7.1,1.3z"/>
                </svg>
              </figure>
              <!-- End SVG Quote -->

              <h3 class="h4 text-white mb-4">In the future, design principles won't be about design</h3>
              <small class="d-block text-white-70 mb-1">Andrea Gard</small>
            </a>
          </article>
          <!-- End Blog Card -->

          <!-- Blog List News -->
          <article class="d-block card border-0 mb-7">
            <div class="card-body p-0">
              <div class="row">
                <div class="col-sm-5 mb-5 mb-sm-0">
                  <img class="img-fluid w-100 rounded" src="<?php echo get_template_directory_uri() ?>/assets/img/480x320/img16.jpg" alt="Image Description">
                </div>

                <div class="col-sm-7">
                  <div class="pt-1 pr-4">
                    <small class="d-block text-muted mb-3">April 16, 2018</small>
                    <div class="mb-7">
                      <h3 class="h5">
                        <a href="single-article-classic.html">Trends with benefits</a>
                      </h3>
                      <p>Trends, content, interests, buzz, emoji — these are a few of our favorite things...</p>
                    </div>
                    <small class="d-block text-secondary">by <a class="text-dark font-weight-semi-bold" href="#">Scott Levine</a></small>
                  </div>
                </div>
              </div>
            </div>
          </article>
          <!-- End Blog News -->

          <!-- Blog List News -->
          <article class="d-block card border-0 mb-7">
            <div class="card-body p-0">
              <div class="row">
                <div class="col-sm-5 mb-5 mb-sm-0">
                  <img class="img-fluid w-100 rounded" src="<?php echo get_template_directory_uri() ?>/assets/img/480x320/img15.jpg" alt="Image Description">
                </div>

                <div class="col-sm-7">
                  <div class="pt-1 pr-4">
                    <small class="d-block text-muted mb-3">May 5, 2018</small>
                    <div class="mb-7">
                      <h3 class="h5">
                        <a href="single-article-classic.html">5 basic tips for illustrating</a>
                      </h3>
                      <p>Tips and tricks that most people wouldn't highlight when illustrating....</p>
                    </div>
                    <small class="d-block text-secondary">by <a class="text-dark font-weight-semi-bold" href="#">James Austin</a></small>
                  </div>
                </div>
              </div>
            </div>
          </article>
          <!-- End Blog News -->

          <!-- Blog List News -->
          <article class="d-block card border-0 mb-7">
            <div class="card-body p-0">
              <div class="row">
                <div class="col-sm-5 mb-5 mb-sm-0">
                  <img class="img-fluid w-100 rounded" src="<?php echo get_template_directory_uri() ?>/assets/img/480x320/img18.jpg" alt="Image Description">
                </div>

                <div class="col-sm-7">
                  <div class="pt-1 pr-4">
                    <small class="d-block text-muted mb-3">May 1, 2018</small>
                    <div class="mb-7">
                      <h3 class="h5">
                        <a href="single-article-classic.html">Announcing a plan for small teams</a>
                      </h3>
                      <p>We've always believed that by providing a space...</p>
                    </div>
                    <small class="d-block text-secondary">by <a class="text-dark font-weight-semi-bold" href="#">Charlotte Moore</a></small>
                  </div>
                </div>
              </div>
            </div>
          </article>
          <!-- End Blog News -->

          <div class="space-bottom-2"></div>

          <!-- Pagination -->
          <nav aria-label="Page navigation">
            <ul class="pagination mb-0">
              <li class="page-item ml-0">
                <a class="page-link" href="#" aria-label="Previous">
                  <span aria-hidden="true">&laquo;</span>
                  <span class="sr-only">Previous</span>
                </a>
              </li>
              <li class="page-item active"><a class="page-link" href="#">1</a></li>
              <li class="page-item"><a class="page-link" href="#">2</a></li>
              <li class="page-item disabled"><a class="page-link" href="#">...</a></li>
              <li class="page-item"><a class="page-link" href="#">12</a></li>
              <li class="page-item">
                <a class="page-link" href="#" aria-label="Next">
                  <span aria-hidden="true">&raquo;</span>
                  <span class="sr-only">Next</span>
                </a>
              </li>
            </ul>
          </nav>
          <!-- End Pagination -->
        </div>

        <div id="stickyBlockStartPoint" class="col-lg-3">
          <!-- Sticky Block -->
          <div class="js-sticky-block"
               data-offset-target="#logoAndNav"
               data-parent="#stickyBlockStartPoint"
               data-sticky-view="lg"
               data-start-point="#stickyBlockStartPoint"
               data-end-point="#stickyBlockEndPoint"
               data-offset-top="32"
               data-offset-bottom="170">
            <h3 class="h5 text-primary font-weight-semi-bold mb-4">News</h3>

            <!-- Thumbnail News -->
            <article class="card border-0 mb-5">
              <div class="card-body p-0">
                <div class="media">
                  <div class="u-avatar mr-3">
                    <img class="img-fluid rounded" src="<?php echo get_template_directory_uri() ?>/assets/img/100x100/img5.jpg" alt="Image Description">
                  </div>
                  <div class="media-body">
                    <h4 class="h6 font-weight-normal mb-0">
                      <a href="#">
                        Homemade Clabatta donuts
                      </a>
                    </h4>
                  </div>
                </div>
              </div>
            </article>
            <!-- End Thumbnail News -->

            <!-- Thumbnail News -->
            <article class="card border-0 mb-5">
              <div class="card-body p-0">
                <div class="media">
                  <div class="u-avatar mr-3">
                    <img class="img-fluid rounded" src="<?php echo get_template_directory_uri() ?>/assets/img/100x100/img7.jpg" alt="Image Description">
                  </div>
                  <div class="media-body">
                    <h4 class="h6 font-weight-normal mb-0">
                      <a href="#">
                        Spruce up your coffee table
                      </a>
                    </h4>
                  </div>
                </div>
              </div>
            </article>
            <!-- End Thumbnail News -->

            <!-- Thumbnail News -->
            <article class="card border-0 mb-5">
              <div class="card-body p-0">
                <div class="media">
                  <div class="u-avatar mr-3">
                    <img class="img-fluid rounded" src="<?php echo get_template_directory_uri() ?>/assets/img/100x100/img6.jpg" alt="Image Description">
                  </div>
                  <div class="media-body">
                    <h4 class="h6 font-weight-normal mb-0">
                      <a href="#">
                        Breating in the crisp air of cozy place
                      </a>
                    </h4>
                  </div>
                </div>
              </div>
            </article>
            <!-- End Thumbnail News -->

            <hr class="my-7">

            <h3 class="h5 text-primary font-weight-semi-bold mb-4">Tags</h3>

            <!-- Tags -->
            <ul class="list-inline mb-0">
              <li class="list-inline-item pb-3">
                <a class="btn btn-xs btn-gray btn-pill" href="#">Design</a>
              </li>
              <li class="list-inline-item pb-3">
                <a class="btn btn-xs btn-gray btn-pill" href="#">Art</a>
              </li>
              <li class="list-inline-item pb-3">
                <a class="btn btn-xs btn-gray btn-pill" href="#">Graphic</a>
              </li>
              <li class="list-inline-item pb-3">
                <a class="btn btn-xs btn-gray btn-pill" href="#">CSS</a>
              </li>
              <li class="list-inline-item pb-3">
                <a class="btn btn-xs btn-gray btn-pill" href="#">HTML</a>
              </li>
              <li class="list-inline-item pb-3">
                <a class="btn btn-xs btn-gray btn-pill" href="#">SASS</a>
              </li>
              <li class="list-inline-item">
                <a class="btn btn-xs btn-gray btn-pill" href="#">WordPress</a>
              </li>
            </ul>
            <!-- End Tags -->
          </div>
          <!-- End Sticky Block -->
        </div>
      </div>
    </div>
    <!-- End Blog List Section -->

    <!-- Sticky Block End Point -->
    <div id="stickyBlockEndPoint"></div>

    <!-- Subscribe Section -->
    <div id="SVGsubscribe" class="svg-preloader overflow-hidden">
      <div class="position-relative gradient-half-primary-v1 overflow-hidden space-top-2 space-bottom-3 space-top-md-3 space-bottom-md-4">
        <div class="container">
          <div class="row justify-content-md-center">
            <div class="col-md-9 col-lg-7 col-xl-6 offset-xl-2">
              <!-- Title -->
              <div class="text-center mb-4">
                <span class="btn btn-xs btn-soft-white btn-pill mb-2">Subscribe</span>
                <h2 class="h1 text-white"><span class="font-weight-semi-bold">Stay</span> in the know</h2>
                <p class="lead text-white-70">Get special offers on the latest developments from Front.</p>
              </div>
              <!-- End Title -->

              <!-- Subscribe Form -->
              <form class="js-validate js-form-message">
                <label class="sr-only" for="subscribeSrEmail">Enter your email address</label>
                <div class="input-group input-group-lg input-group-borderless">
                  <input type="email" class="form-control" name="email" id="subscribeSrEmail" placeholder="Enter your email address" aria-label="Enter your email address" aria-describedby="subscribeButton" required
                         data-msg="Please enter a valid email address.">
                  <div class="input-group-append">
                    <button type="button" class="btn btn-warning btn-wide" id="subscribeButton">Join Front</button>
                  </div>
                </div>
              </form>
              <!-- End Subscribe Form -->

              <!-- Info -->
              <div class="d-block d-xl-none">
                <small class="form-text text-white-70 mb-0">Be the lucky user to earn <span class="text-white font-weight-semi-bold">$1000</span> bonus now!</small>
              </div>
              <!-- End Info -->
            </div>

            <div class="col-xl-2 d-none d-xl-inline-block mt-auto mb-7">
              <div class="position-relative p-3">
                <p class="small text-white-70 mb-0">Be the lucky user to earn <span class="text-white font-weight-semi-bold">$1000</span> bonus now!</p>

                <!-- SVG Shape -->
                <figure class="position-absolute top-0 right-0 left-0">
                  <img class="js-svg-injector" src="<?php echo get_template_directory_uri() ?>/assets/svg/components/comment.svg" alt="Image Description"
                       data-parent="#SVGsubscribe">
                </figure>
                <!-- End SVG Shape -->
              </div>
            </div>
          </div>
        </div>

        <!-- SVG Phone Mockup -->
        <div class="d-none d-lg-block u-devices-v2__phone u-devices-v2__phone--left-position">
          <figure class="w-75 u-devices-v2__phone-svg ie-devices-v2-iphone">
            <img class="js-svg-injector" src="<?php echo get_template_directory_uri() ?>/assets/svg/components/iphone.svg" alt="Image Description"
                 data-img-paths='[
                   {"targetId": "#SVGiphoneImg1", "newPath": "<?php echo get_template_directory_uri() ?>/assets/img/282x500/img3.jpg"}
                 ]'
                 data-parent="#SVGsubscribe">
          </figure>
        </div>
        <!-- End SVG Phone Mockup -->
      </div>

      <!-- SVG Background -->
      <figure class="position-absolute right-0 bottom-0 left-0 z-index-2">
        <img class="js-svg-injector" src="<?php echo get_template_directory_uri() ?>/assets/svg/components/wave-1-bottom-sm.svg" alt="Image Description"
             data-parent="#SVGsubscribe">
      </figure>
      <!-- End SVG Background Section -->
    </div>
    <!-- End Subscribe Section -->
  </main>
  <!-- ========== END MAIN ========== -->

  <!-- ========== SECONDARY CONTENTS ========== -->
  <!-- Account Sidebar Navigation -->
  <aside id="sidebarContent" class="u-sidebar" aria-labelledby="sidebarNavToggler">
    <div class="u-sidebar__scroller">
      <div class="u-sidebar__container">
        <div class="u-header-sidebar__footer-offset">
          <!-- Toggle Button -->
          <div class="d-flex align-items-center pt-4 px-7">
            <button type="button" class="close ml-auto"
                    aria-controls="sidebarContent"
                    aria-haspopup="true"
                    aria-expanded="false"
                    data-unfold-event="click"
                    data-unfold-hide-on-scroll="false"
                    data-unfold-target="#sidebarContent"
                    data-unfold-type="css-animation"
                    data-unfold-animation-in="fadeInRight"
                    data-unfold-animation-out="fadeOutRight"
                    data-unfold-duration="500">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <!-- End Toggle Button -->

          <!-- Content -->
          <div class="js-scrollbar u-sidebar__body">
            <div class="u-sidebar__content u-header-sidebar__content">
              <form class="js-validate">
                <!-- Login -->
                <div id="login" data-target-group="idForm">
                  <!-- Title -->
                  <header class="text-center mb-7">
                    <h2 class="h4 mb-0">Welcome Back!</h2>
                    <p>Login to manage your account.</p>
                  </header>
                  <!-- End Title -->

                  <!-- Form Group -->
                  <div class="form-group">
                    <div class="js-form-message js-focus-state">
                      <label class="sr-only" for="signinEmail">Email</label>
                      <div class="input-group">
                        <div class="input-group-prepend">
                          <span class="input-group-text" id="signinEmailLabel">
                            <span class="fas fa-user"></span>
                          </span>
                        </div>
                        <input type="email" class="form-control" name="email" id="signinEmail" placeholder="Email" aria-label="Email" aria-describedby="signinEmailLabel" required
                               data-msg="Please enter a valid email address."
                               data-error-class="u-has-error"
                               data-success-class="u-has-success">
                      </div>
                    </div>
                  </div>
                  <!-- End Form Group -->

                  <!-- Form Group -->
                  <div class="form-group">
                    <div class="js-form-message js-focus-state">
                      <label class="sr-only" for="signinPassword">Password</label>
                      <div class="input-group">
                        <div class="input-group-prepend">
                          <span class="input-group-text" id="signinPasswordLabel">
                            <span class="fas fa-lock"></span>
                          </span>
                        </div>
                        <input type="password" class="form-control" name="password" id="signinPassword" placeholder="Password" aria-label="Password" aria-describedby="signinPasswordLabel" required
                               data-msg="Your password is invalid. Please try again."
                               data-error-class="u-has-error"
                               data-success-class="u-has-success">
                      </div>
                    </div>
                  </div>
                  <!-- End Form Group -->

                  <div class="d-flex justify-content-end mb-4">
                    <a class="js-animation-link small link-muted" href="javascript:;"
                       data-target="#forgotPassword"
                       data-link-group="idForm"
                       data-animation-in="slideInUp">Forgot Password?</a>
                  </div>

                  <div class="mb-2">
                    <button type="submit" class="btn btn-block btn-sm btn-primary transition-3d-hover">Login</button>
                  </div>

                  <div class="text-center mb-4">
                    <span class="small text-muted">Do not have an account?</span>
                    <a class="js-animation-link small" href="javascript:;"
                       data-target="#signup"
                       data-link-group="idForm"
                       data-animation-in="slideInUp">Signup
                    </a>
                  </div>

                  <div class="text-center">
                    <span class="u-divider u-divider--xs u-divider--text mb-4">OR</span>
                  </div>

                  <!-- Login Buttons -->
                  <div class="d-flex">
                    <a class="btn btn-block btn-sm btn-soft-facebook transition-3d-hover mr-1" href="#">
                      <span class="fab fa-facebook-square mr-1"></span>
                      Facebook
                    </a>
                    <a class="btn btn-block btn-sm btn-soft-google transition-3d-hover ml-1 mt-0" href="#">
                      <span class="fab fa-google mr-1"></span>
                      Google
                    </a>
                  </div>
                  <!-- End Login Buttons -->
                </div>

                <!-- Signup -->
                <div id="signup" style="display: none; opacity: 0;" data-target-group="idForm">
                  <!-- Title -->
                  <header class="text-center mb-7">
                    <h2 class="h4 mb-0">Welcome to Front.</h2>
                    <p>Fill out the form to get started.</p>
                  </header>
                  <!-- End Title -->

                  <!-- Form Group -->
                  <div class="form-group">
                    <div class="js-form-message js-focus-state">
                      <label class="sr-only" for="signupEmail">Email</label>
                      <div class="input-group">
                        <div class="input-group-prepend">
                          <span class="input-group-text" id="signupEmailLabel">
                            <span class="fas fa-user"></span>
                          </span>
                        </div>
                        <input type="email" class="form-control" name="email" id="signupEmail" placeholder="Email" aria-label="Email" aria-describedby="signupEmailLabel" required
                               data-msg="Please enter a valid email address."
                               data-error-class="u-has-error"
                               data-success-class="u-has-success">
                      </div>
                    </div>
                  </div>
                  <!-- End Input -->

                  <!-- Form Group -->
                  <div class="form-group">
                    <div class="js-form-message js-focus-state">
                      <label class="sr-only" for="signupPassword">Password</label>
                      <div class="input-group">
                        <div class="input-group-prepend">
                          <span class="input-group-text" id="signupPasswordLabel">
                            <span class="fas fa-lock"></span>
                          </span>
                        </div>
                        <input type="password" class="form-control" name="password" id="signupPassword" placeholder="Password" aria-label="Password" aria-describedby="signupPasswordLabel" required
                               data-msg="Your password is invalid. Please try again."
                               data-error-class="u-has-error"
                               data-success-class="u-has-success">
                      </div>
                    </div>
                  </div>
                  <!-- End Input -->

                  <!-- Form Group -->
                  <div class="form-group">
                    <div class="js-form-message js-focus-state">
                      <label class="sr-only" for="signupConfirmPassword">Confirm Password</label>
                      <div class="input-group">
                        <div class="input-group-prepend">
                          <span class="input-group-text" id="signupConfirmPasswordLabel">
                            <span class="fas fa-key"></span>
                          </span>
                        </div>
                        <input type="password" class="form-control" name="confirmPassword" id="signupConfirmPassword" placeholder="Confirm Password" aria-label="Confirm Password" aria-describedby="signupConfirmPasswordLabel" required
                               data-msg="Password does not match the confirm password."
                               data-error-class="u-has-error"
                               data-success-class="u-has-success">
                      </div>
                    </div>
                  </div>
                  <!-- End Input -->

                  <div class="mb-2">
                    <button type="submit" class="btn btn-block btn-sm btn-primary transition-3d-hover">Get Started</button>
                  </div>

                  <div class="text-center mb-4">
                    <span class="small text-muted">Already have an account?</span>
                    <a class="js-animation-link small" href="javascript:;"
                       data-target="#login"
                       data-link-group="idForm"
                       data-animation-in="slideInUp">Login
                    </a>
                  </div>

                  <div class="text-center">
                    <span class="u-divider u-divider--xs u-divider--text mb-4">OR</span>
                  </div>

                  <!-- Login Buttons -->
                  <div class="d-flex">
                    <a class="btn btn-block btn-sm btn-soft-facebook transition-3d-hover mr-1" href="#">
                      <span class="fab fa-facebook-square mr-1"></span>
                      Facebook
                    </a>
                    <a class="btn btn-block btn-sm btn-soft-google transition-3d-hover ml-1 mt-0" href="#">
                      <span class="fab fa-google mr-1"></span>
                      Google
                    </a>
                  </div>
                  <!-- End Login Buttons -->
                </div>
                <!-- End Signup -->

                <!-- Forgot Password -->
                <div id="forgotPassword" style="display: none; opacity: 0;" data-target-group="idForm">
                  <!-- Title -->
                  <header class="text-center mb-7">
                    <h2 class="h4 mb-0">Recover Password.</h2>
                    <p>Enter your email address and an email with instructions will be sent to you.</p>
                  </header>
                  <!-- End Title -->

                  <!-- Form Group -->
                  <div class="form-group">
                    <div class="js-form-message js-focus-state">
                      <label class="sr-only" for="recoverEmail">Your email</label>
                      <div class="input-group">
                        <div class="input-group-prepend">
                          <span class="input-group-text" id="recoverEmailLabel">
                            <span class="fas fa-user"></span>
                          </span>
                        </div>
                        <input type="email" class="form-control" name="email" id="recoverEmail" placeholder="Your email" aria-label="Your email" aria-describedby="recoverEmailLabel" required
                               data-msg="Please enter a valid email address."
                               data-error-class="u-has-error"
                               data-success-class="u-has-success">
                      </div>
                    </div>
                  </div>
                  <!-- End Form Group -->

                  <div class="mb-2">
                    <button type="submit" class="btn btn-block btn-sm btn-primary transition-3d-hover">Recover Password</button>
                  </div>

                  <div class="text-center mb-4">
                    <span class="small text-muted">Remember your password?</span>
                    <a class="js-animation-link small" href="javascript:;"
                       data-target="#login"
                       data-link-group="idForm"
                       data-animation-in="slideInUp">Login
                    </a>
                  </div>
                </div>
                <!-- End Forgot Password -->
              </form>
            </div>
          </div>
          <!-- End Content -->
        </div>

        <!-- Footer -->
        <footer id="SVGwaveWithDots" class="svg-preloader u-sidebar__footer u-sidebar__footer--account">
          <ul class="list-inline mb-0">
            <li class="list-inline-item pr-3">
              <a class="u-sidebar__footer--account__text" href="../pages/privacy.html">Privacy</a>
            </li>
            <li class="list-inline-item pr-3">
              <a class="u-sidebar__footer--account__text" href="../pages/terms.html">Terms</a>
            </li>
            <li class="list-inline-item">
              <a class="u-sidebar__footer--account__text" href="../pages/help.html">
                <i class="fas fa-info-circle"></i>
              </a>
            </li>
          </ul>

          <!-- SVG Background Shape -->
          <div class="position-absolute right-0 bottom-0 left-0">
            <img class="js-svg-injector" src="<?php echo get_template_directory_uri() ?>/assets/svg/components/wave-bottom-with-dots.svg" alt="Image Description"
                   data-parent="#SVGwaveWithDots">
          </div>
          <!-- End SVG Background Shape -->
        </footer>
        <!-- End Footer -->
      </div>
    </div>
  </aside>
  <!-- End Account Sidebar Navigation -->
  <!-- ========== END SECONDARY CONTENTS ========== -->

  <!-- Go to Top -->
  <a class="js-go-to u-go-to" href="#"
    data-position='{"bottom": 15, "right": 15 }'
    data-type="fixed"
    data-offset-top="400"
    data-compensation="#header"
    data-show-effect="slideInUp"
    data-hide-effect="slideOutDown">
    <span class="fas fa-arrow-up u-go-to__inner"></span>
  </a>
  <!-- End Go to Top -->

  <!-- JS Plugins Init. -->
  <script>
    $(document).on('ready', function () {
      // initialization of sticky blocks
      $.HSCore.components.HSStickyBlock.init('.js-sticky-block');

      // initialization of go to
      $.HSCore.components.HSGoTo.init('.js-go-to');
    });
  </script>


	<div id="primary" class="content-area">
		<main id="main" class="site-main">

		<?php
		if ( have_posts() ) :

			if ( is_home() && ! is_front_page() ) :
				?>
				<header>
					<h1 class="page-title screen-reader-text"><?php single_post_title(); ?></h1>
				</header>
				<?php
			endif;

			/* Start the Loop */
			while ( have_posts() ) :
				the_post();

				/*
				 * Include the Post-Type-specific template for the content.
				 * If you want to override this in a child theme, then include a file
				 * called content-___.php (where ___ is the Post Type name) and that will be used instead.
				 */
				get_template_part( 'template-parts/content', get_post_type() );

			endwhile;

			the_posts_navigation();

		else :

			get_template_part( 'template-parts/content', 'none' );

		endif;
		?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_sidebar();
get_footer();
