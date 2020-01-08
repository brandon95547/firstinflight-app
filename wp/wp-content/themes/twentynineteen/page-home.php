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
                    <div class="banner-img"><img
                            src="<?php echo get_template_directory_uri(); ?>/img/cms_2.1.jpg?v=<?php echo time(); ?>"
                            alt="" class="img-responsive"></div>
                </div>
            </div>
            <div class="col col-lg-4 col-md-4 col-xs-12">
                <div class="warpper">
                    <div class="banner-img"><img
                            src="<?php echo get_template_directory_uri(); ?>/img/cms_2.2.jpg?v=<?php echo time(); ?>"
                            alt="" class="img-responsive"></div>
                </div>
            </div>
            <div class="col col-lg-4 col-md-4 col-xs-12">
                <div class="warpper">
                    <div class="banner-img"><img
                            src="<?php echo get_template_directory_uri(); ?>/img/cms_2.3.jpg?v=<?php echo time(); ?>"
                            alt="" class="img-responsive"></div>
                </div>
            </div>
        </div>
    </div>
</div>


<div id="our-products" class="pv-6 app-products">
    <div class="text-center">
        <h2 class="title-3">
            our <span>products</span>
        </h2>
        <p class="des-title mt-4">We have a variety of skateboards and carry most major brands. <br>We will soon be
            adding a complete inventory of products.</p>
    </div>

    <ul class="nav justify-content-center mb-4">
        <li class="nav-item">
            <a class="nav-link active" href="#">Skateboards</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="#">Apparel</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="#">T-Shirts</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="#" tabindex="-1" aria-disabled="true">Other</a>
        </li>
    </ul>
    <div class="container">
        <div class="row">
            <div class="col col-lg-4 col-md-4 col-xs-12">
                <div class="warpper">
                    <div class="banner-img"><img
                            src="<?php echo get_template_directory_uri(); ?>/img/cms_2.4.jpg?v=<?php echo time(); ?>"
                            alt="" class="img-responsive">
                    </div>
                </div>
            </div>
            <div class="col col-lg-4 col-md-4 col-xs-12">
                <div class="warpper">
                    <div class="banner-img"><img
                            src="<?php echo get_template_directory_uri(); ?>/img/cms_2.5.jpg?v=<?php echo time(); ?>"
                            alt="" class="img-responsive">
                    </div>
                </div>
            </div>
            <div class="col col-lg-4 col-md-4 col-xs-12">
                <div class="warpper">
                    <div class="banner-img"><img
                            src="<?php echo get_template_directory_uri(); ?>/img/cms_2.6.jpg?v=<?php echo time(); ?>"
                            alt="" class="img-responsive">
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="hot-deals pv-6">
    <div class="text-center">
        <h2 class="title-3 text-white">
            hot <span>deals</span>
        </h2>
        <p class="des-title mt-4 text-white">
            If there's a certain type of board you're looking for, send us a note and we will have it built for you.
            <br>
            Stay updated with our events, as we are always giving away great products.
        </p>
    </div>
    <div class="app-display-1 mt-5">
        <div class="container">
            <div class="row no-gutters bg-white">
                <div class="col-4">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/ride-saturday-snowboard(2).jpg?v=<?php echo time(); ?>"
                        alt="">
                </div>
                <div class="col-8">
                    <div class="">
                        <div class="pl-5 pt-5">
                            <h3>Skate Spots</h3>
                            <h5 class="text-secondary">Recent Articles</h5>

                            <p>
                                There are tons of places around town to skateboard. Stay up to date with us, as we will
                                be posting many areas you may not know about to hang out and chill.
                            </p>

                            <a href="" data-scroll="#contact" class="btn btn-outline-dark mt-3 btn-midsize mb-4">Learn More</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="app-latest-blogs pv-6">
    <div class="container">
        <div class="row">
            <div class="col-sm-8">
                <h2 class="title-3">
                    upcoming <span>events</span>
                </h2>
                <p class="mt-3">
                    Do you want to present posts in the best way to highlight interesting moments of your blog? Focus on
                    the latest news!
                </p>

                <div class="media mt-4">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/home_default-4.jpg?v=<?php echo time(); ?>"
                        class="mr-4" alt="...">
                    <div class="media-body">
                        <h5 class="mt-0 title">Grand Opening</h5>
                        <p>
                            Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin.
                            Cras
                            purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac
                            nisi
                            vulputate fringilla. Donec lacinia congue felis in faucibus.
                        </p>
                        <a href="#">Read More</a>
                    </div>
                </div>

                <div class="media mt-5">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/home_default-3.jpg?v=<?php echo time(); ?>"
                        class="mr-4" alt="...">
                    <div class="media-body">
                        <h5 class="mt-0 title">Media heading</h5>
                        <p>
                            Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin.
                            Cras
                            purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac
                            nisi
                            vulputate fringilla. Donec lacinia congue felis in faucibus.
                        </p>
                        <a href="#">Read More</a>
                    </div>
                </div>
            </div>
            <div class="col-sm-4 app-contact">
                <form class="pv-5 ph-3 mt-4">
                    <h2 class="title-3">GET IN TOUCH</h2>
                    <div class="form-group mt-5">
                        <label class="sr-only" for="your-name">Name</label>
                        <input required="" name="your-name" type="text" class="form-control" id="your-name"
                            placeholder="Your name...">
                    </div>
                    <div class="form-group">
                        <label class="sr-only" for="email">Email</label>
                        <input required="" name="email" type="email" class="form-control" id="password"
                            placeholder="Your email...">
                    </div>
                    <div class="form-group">
                        <textarea required="" class="form-control" name="message" id="" cols="30" rows="10"
                            placeholder="Message.."></textarea>
                    </div>
                    <div class="text-center">
                        <button type="submit" class="btn btn-light btn-midsize">SEND</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<?php
get_footer();