<?php
/*
Template Name: Flooring Page
*/
?>

<?php get_header(); ?>
<main class="flooringPage">
    <section class="flooringPageCover" style="background-image: url(<?php echo get_the_post_thumbnail_url(); ?>)">
        <div class="container">
            <div class="homePageCoverText ">
                <h1 class="underlineTitle wow animate__animated animate__slideInLeft"><?php the_field('cover_title'); ?></h1>
                <h2 class="wow animate__animated animate__slideInLeft"><?php the_field('cover_subtitle'); ?></h2>
            </div>
        </div>
    </section>
    <section class="howWorks">
        <div class="container">
            <div class="howWorksTitle">
                <h3>How it works</h3>
                <p><?php the_field('how_it_works_text'); ?></p>
            </div>
            <div class="stepsWrapper">
                <?php
                $countSteps = '1';
                while (have_rows('steps')) : the_row(); ?>
                    <div class="step wow animate__animated animate__fadeInUp">
                        <div class="dottedBg">
                            <div class="dots wow" data-wow-delay="1s" transition-style="in:wipe:left"></div>
                            <div class="stepImage" style="background-image: url(<?php the_sub_field('step_image'); ?>);">
                                <div class="content"></div>
                            </div>
                        </div>
                        <div class="stepText">
                            <p class="stepLabel">Step <?php echo $countSteps; ?>:</p>
                            <h4><?php the_sub_field('step_title'); ?></h4>
                            <p><?php the_sub_field('step_copy'); ?></p>
                        </div>
                    </div>
                <?php
                    $countSteps++;
                endwhile;
                ?>
            </div>
        </div>
    </section>
    <section class="showcaseProducts">
        <div class="container">
            <div class="showcaseHomeTitle">
                <h3>Explore our wide selection of quality flooring</h3>
                <!-- <div class="showcaseHomeTitleImage" style="background-image: url(<?php echo get_stylesheet_directory_uri(); ?>/images/wp/showcaseTitle-image.png);">
                    <div class="content"></div>
                </div> -->
            </div>
            <div class="showcaseBoxesWrapper">
                <?php
                while (have_rows('showcase_products', 181)) : the_row(); ?>
                    <a href="<?php the_sub_field('product_page_link') ?>" class="showcaseBox">
                        <div class="showcaseBoxBgImage" style="background-image: url(<?php the_sub_field('product_big_image'); ?>);">
                            <div class="content">
                                <h4><?php the_sub_field('product_type_name'); ?></h4>
                            </div>
                        </div>
                        <div class="showcaseBoxDetail" style="background-image: url(<?php the_sub_field('product_little_image'); ?>);">
                            <div class="content"></div>
                        </div>
                    </a>
                <?php
                endwhile;
                ?>
                <div class="showcaseBox showcaseBoxCta">
                    <div class="dottedBg">
                        <div class="dots"></div>
                        <!--<a href="<?php echo site_url('/flooring/all/'); ?>">
                            <h5>Browse all <br>flooring options <br><i class="fa fa-long-arrow-right" aria-hidden="true"></i></h5>
                        </a>-->
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="partnerLogos">
        <div class="container">
            <div class="flexslider carousel">
                <ul class="slides">
                    <?php
                    while (have_rows('logos', 5)) : the_row(); ?>
                        <li>
                            <img src="<?php the_sub_field('logo'); ?>" alt="">
                        </li>
                    <?php endwhile;
                    ?>
                </ul>
            </div>
        </div>
    </section>
    <section class="blogCtaFlooringPage">
        <div class="container">
            <div class="blogCtaFlooringPage1">
                <h3>Not sure which type of flooring is right for you?</h3>
                <p>Visit our blog for information about the different flooring options, inspiration, ideas, and more.</p>
            </div>
            <a href="<?php echo site_url('/blog/'); ?>" class="blogCtaFlooringPage2" style="background-image: url(<?php echo get_stylesheet_directory_uri(); ?>/images/blog-cta-footer-bg.png)">
                <span>
                    Visit the blog <br><i class="fa fa-long-arrow-right" aria-hidden="true"></i>
                </span>
            </a>
        </div>
    </section>
</main>
<?php get_footer(); ?>