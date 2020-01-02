<?php
/**
 * Template Name: Home Page
 *
 * @package WordPress
 * @subpackage Twenty_Nineteen
 * @since 1.0.0
 */

get_header();
?>

<div class="app-feature mt-6">
    <div class="container">
        <div class="row">
            <div class="col col-lg-4 col-md-4 col-xs-12">
                <div class="warpper">
                    <div class="banner-img"><img src="<?php echo get_template_directory_uri(); ?>/img/cms_2.1.jpg?v=1"
                            alt="" class="img-responsive"></div>
                </div>
            </div>
            <div class="col col-lg-4 col-md-4 col-xs-12">
                <div class="warpper">
                    <div class="banner-img"><img src="<?php echo get_template_directory_uri(); ?>/img/cms_2.2.jpg?v=1"
                            alt="" class="img-responsive"></div>
                </div>
            </div>
            <div class="col col-lg-4 col-md-4 col-xs-12">
                <div class="warpper">
                    <div class="banner-img"><img src="<?php echo get_template_directory_uri(); ?>/img/cms_2.3.jpg?v=1"
                            alt="" class="img-responsive"></div>
                </div>
            </div>
        </div>
    </div>
</div>


<div id="our-products" class="pv-6">
    <div class="app-title-1">
        <h2 class="title">
            our <span>products</span>
        </h2>
        <p class="des-title mt-4">We have a variety of skateboards and carry most major brands. <br>We will soon be adding a complete inventory of products.</p>
    </div>

    <ul class="nav justify-content-center mb-4">
        <li class="nav-item">
            <a class="nav-link active" href="#">Active</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="#">Link</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="#">Link</a>
        </li>
        <li class="nav-item">
            <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
        </li>
    </ul>
    <div class="container">
        <div class="row">
            <div class="col col-lg-4 col-md-4 col-xs-12">
                <div class="warpper">
                    <div class="banner-img"><img src="<?php echo get_template_directory_uri(); ?>/img/cms_2.4.jpg?v=1"
                            alt="" class="img-responsive">
                    </div>
                </div>
            </div>
            <div class="col col-lg-4 col-md-4 col-xs-12">
                <div class="warpper">
                    <div class="banner-img"><img src="<?php echo get_template_directory_uri(); ?>/img/cms_2.5.jpg?v=1"
                            alt="" class="img-responsive">
                    </div>
                </div>
            </div>
            <div class="col col-lg-4 col-md-4 col-xs-12">
                <div class="warpper">
                    <div class="banner-img"><img src="<?php echo get_template_directory_uri(); ?>/img/cms_2.6.jpg?v=1"
                            alt="" class="img-responsive">
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="hot-deals pv-6">
    <div class="app-title-1">
        <h2 class="title mt-5 text-white">
            hot <span>deals</span>
        </h2>
        <p class="des-title mt-4 text-white">
            If there's a certain type of board you're looking for, send us a note and we will have it built for you. <br>
            Stay updated with our events, as we are always giving away great products.
        </p>
    </div>
    <div class="app-display-1 mt-5">
        <div class="container">
            <div class="row no-gutters bg-white">
                <div class="col-4">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/ride-saturday-snowboard(2).jpg?v=1" alt="">
                </div>
                <div class="col-8">
                    <div class="">
                        <div class="pl-5 pt-5">
                            <h3>Skate Spots</h3>
                            <h5 class="text-secondary">Recent Articles</h5>

                            <p>
                                There are tons of places around town to skateboard. Stay up to date with us, as we will be posting many areas you may not know about to hang out and chill.
                            </p>

                            <a href="" data-scroll="#contact" class="btn btn-outline-dark mt-3 btn-midsize">Learn More</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?php
get_footer();