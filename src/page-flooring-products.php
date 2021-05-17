<?php
/*
Template Name: Flooring Product
*/
?>

<?php get_header(); ?>
<main class="archiveProducts">
    <br><br>
    <div class="container">
        <section class="flooringTypeSelected">
            <div class="container">
                <h2 style="margin:auto"><span><?php the_title(); ?></span> Flooring</h2>
            </div>
        </section>
        <?php the_field('jc_flooring_link'); ?>
    </div>
</main>
<?php get_footer(); ?>