<?php get_header(); ?>
<main class="singleProducts">
    <section class="breadcrumbs">
        <div class="container">
            <?php
            $taxonomyType = get_the_terms(get_the_ID(), 'product-category');
            ?>
            <a href="<?php echo site_url('/flooring/'); ?>">Flooring</a> >
            <a href="<?php echo get_post_type_archive_link('products'); ?>">All</a> >
            <a href="<?php echo get_post_type_archive_link('products'); ?>?flooringType=<?php echo $taxonomyType[0]->name; ?>"><?php echo $taxonomyType[0]->name; ?></a> >
            <p class="actualItem"><?php the_title(); ?></p>
        </div>
    </section>
    <section class="singleProductsData">
        <div class="container">

            <div class="singleProductsDataImage">
                <div class="content"></div>
            </div>
            <div class="singleProductsDataText">
                <h1><?php the_title(); ?></h1>
                <p class="look">
                    <?php
                    $lookArr = get_the_terms($post->ID, 'product-look');
                    echo $lookArr[0]->name;
                    ?>
                </p>
                <p class="specialFeature"><?php the_content(); ?></p>
                <div class="colors">
                    <p>Colors:</p>
                    <div class="colorLinks">
                        <?php
                        $colors = get_field('colors');
                        foreach ($colors as $color) { ?>
                            <a href="<?php echo $color['color_image']; ?>"><?php echo $color['colorName']; ?></a>
                        <?php }
                        ?>
                    </div>
                </div>
                <hr class="line">
                <a href="<?php echo site_url('/contact-us/'); ?>" class="btn">Request a quote</a>
            </div>
        </div>
    </section>
    <div class="singleProductDetails">
        <div class="container">
            <div class="singleProductDetailsHeader">
                <a href="#" class="selected" data-box='description'>Description</a>
                <a href="#" data-box='features'>Features</a>
                <a href="#" data-box='warranties'>Warranties</a>
            </div>
            <div class="singleProductDetailsBoxes">
                <div class="singleProductDetailsBox" id="description">
                    <?php the_field('product_description'); ?>
                </div>
                <div class="singleProductDetailsBox" id="features">
                    <?php the_field('product_features'); ?>
                </div>
                <div class="singleProductDetailsBox" id="warranties">
                    <?php the_field('product_warranties'); ?>
                </div>
            </div>

        </div>

    </div>

</main>
<?php get_footer(); ?>