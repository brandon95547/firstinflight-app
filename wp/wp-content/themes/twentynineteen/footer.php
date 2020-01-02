<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Twenty_Nineteen
 * @since 1.0.0
 */

?>

<div class="app-footer-3 pv-7 bg-dark">
    <div class="container">
        <div class="row">
            <div class="col-lg">
                <img src="<?php echo get_template_directory_uri(); ?>/img/raptor-logo-light.png" alt="" class="logo">
                <p class="mt-4 c-light">
                    First In Flight skateboards is a local business located in Hickory, NC. We offer all major brands, wheels, parts and other inventory.
                </p>
            </div>
            <div class="col-lg text-right">
                <h4>Contact</h4>
                <ul class="list-unstyled c-light mt-4">
                    <li>828-291-8040</li>
                    <li>info@firstinflightskateboards.com</li>
                    <li>Hickory, NC</li>
                </ul>
            </div>
        </div>
        <div class="row">
            <div class="col-lg">
                <hr class="mb-4">
            </div>
        </div>
        <div class="row c-lighter">
            <div class="col-lg">
                First In Flight Skateboards &copy; 2020 All Rights Reserved
            </div>
            <div class="col-lg">
                <div class="app-iconset-1 text-right">
                    <a target="_blank" href="https://www.facebook.com/First-in-Flight-Skateshop-106903644153785/" class="btn btn-outline-light"><i class="fab fa-facebook-f"></i></a>
                    <a target="_blank" href="https://www.instagram.com/first_in_flight_skateshop/" class="btn btn-outline-light ml-2"><i class="fab fa-instagram"></i></a>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- <script src="./node-dev/node_modules/reload/lib/reload.js"></script> -->
<script src="./node-dev/node_modules/jquery/dist/jquery.min.js"></script>
<script src="./node-dev/node_modules/bootstrap/dist/js/bootstrap.min.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/js/main.js"></script>

</body>