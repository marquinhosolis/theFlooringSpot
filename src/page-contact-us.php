<?php
/*
Template Name: Contact Us Page
*/
?>

<?php get_header(); ?>
<main class="contactPage">
    <div class="container">
        <div class="contactPageWrapper">
            <div class="contactForm wow animate__animated animate__fadeInLeft">
                <div class="contactFormWrapper">
                    <h1>Contact us today to get started</h1>
                    <p>Our flooring experts are ready to help you transform your space! Send us a message below and we’ll get back to you the same business day.</p>
                    <?php echo do_shortcode('[formidable id=3]'); ?>
                </div>
            </div>
            <div class="showrooms" style="background-image: url(<?php echo get_the_post_thumbnail_url(); ?>);">
                <h2>Our Showrooms</h2>
                <address class="wow animate__animated animate__fadeInUp">
                    <h3>Ocoee</h3>
                    11920 W Colonial Drive Ocoee, FL 34761 <br><br>

                    Monday – Friday: 9:30am – 6pm <br>
                    Saturday – Sunday: 10am – 4pm <br> <br>

                    <a href="https://www.google.com/maps/place/The+Flooring+Spot/@28.5509726,-81.5589137,17z/data=!3m1!4b1!4m5!3m4!1s0x88e778bd3bf2da71:0x3b6b62aaffeb092c!8m2!3d28.5509679!4d-81.556725" target="_blank" class="btn">Find your store</a>
                    <a href="tel: 407.406.6778" class="link">Call us <strong>407.406.6778</strong></a>
                </address>
                <address class="wow animate__animated animate__fadeInUp animate__delay-1s">
                    <h3>New! Winter Garden</h3>
                    Showroom coming soon
                </address>
            </div>
        </div>
    </div>
</main>
<?php get_footer(); ?>