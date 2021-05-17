<?php
/*
Template Name: On Sale Page
*/
?>
<?php
$limit = 5;
if (isset($_GET['all'])) {
    $posts = '-1';
} else {
    $posts = $limit;
}
?>
<?php get_header(); ?>
<main class="onSalePage">
    <section class="container">
        <div class="onSaleHeader">
            <h1><?php the_field('on_sale_page_title'); ?></h1>
            <p><?php the_field('on_sale_page_subtitle'); ?></p>
        </div>
    </section>
    <section class="promotionsBoxes">
        <div class="container">
            <?php
            $args = array(
                'post_type' => 'promotions',
                'posts_per_page' => $posts,
            );

            $query = new WP_Query($args);
            //$index = 1;
            if ($query->have_posts()) {
                while ($query->have_posts()) {
                    $query->the_post(); ?>
                    <?php
                    $count = $query->found_posts;
                    ?>

                    <a href="<?php echo site_url('contact-us') ?>" class="promotionBox promotionBoxModal" data-promotion='<?php echo $index; ?>'>
                        <div class="promotionBoxShowcase" style="background-image: url(<?php echo get_the_post_thumbnail_url(get_the_ID(), ''); ?>);">
                            <div class="content">
                                <p><?php the_field('pop_up_title'); ?></p>
                                <p><?php the_title(); ?></p>
                            </div>
                        </div>
                        <div class="promotionBoxIntro">
                            <h4><?php the_field('subtitle'); ?></h4>
                            <p><?php the_field('intro_copy'); ?></p>
                            <p><?php the_field('cta_label'); ?></p>
                        </div>
                    </a>
                    <!-- <div class="promotionPopup" id='promotionPopUp_<?php echo $index; ?>'>
                        <div class="promotionPopupContent">
                            <a href="#" class="promotionPopupContentClose"><i class="fa fa-times" aria-hidden="true"></i></a>
                            <div class="promotionPopupContentImage" style="background-image: url(<?php echo get_the_post_thumbnail_url(); ?>);">
                                <div class="content"></div>
                            </div>
                            <h5><?php the_field('pop_up_title'); ?><br><?php the_title(); ?></h5>
                            <div>
                                <?php the_field('pop_up_text'); ?>
                            </div>
                        </div>
                    </div> -->
            <?php
                    //$index++;
                }
            }
            wp_reset_postdata();
            ?>
        </div>
        <?php
        if ($query->found_posts > $limit && !isset($_GET['all'])) { ?>
            <div class="loadMorePosts">
                <a href="<?php the_permalink(); ?>?all=1">Load more promotions <i class="fa fa-long-arrow-down" aria-hidden="true"></i></a>
            </div>
        <?php }
        ?>
    </section>
</main>
<?php get_footer(); ?>