<?php
$limit = 6;
if (isset($_GET['all'])) {
    $posts = '-1';
} else {
    $posts = $limit;
}

if (isset($_GET['flooringType']) || isset($_GET['look']) || isset($_GET['color'])) {
    $formsubmit = true;
    $flooringType = $_GET['flooringType'];
    $look = $_GET['look'];
    $color =  $_GET['color'];

    $parameters = 'flooringType=' . $_GET['flooringType'] . '&look=' . $_GET['look'] . '&color=' . $_GET['color'];

    $taxQuery = array();

    if ($flooringType != '') {
        $arrayType = array(
            'taxonomy' => 'product-category',
            'field' => 'slug',
            'terms' => $flooringType,
        );
        array_push($taxQuery, $arrayType);
    }
    if ($look != '') {
        $arrayType = array(
            'taxonomy' => 'product-look',
            'field' => 'name',
            'terms' => $look,
        );
        array_push($taxQuery, $arrayType);
    }
    if ($color != '') {
        $color =  $_GET['color'];
        $colorQuery = array(
            'relation'        => 'AND',
            array(
                'key'        => 'colors_$_colorName',
                'compare'    => '=',
                'value'        => $color,
            ),
        );
    }
}
?>
<?php get_header(); ?>

<?php
$selectCores = array();
$args = array(
    'post_type' => 'products', // your post type
    'posts_per_page' => -1, // grab all the posts
    'meta_key' => 'colors',
    'meta_compare' => 'EXISTS' // make sure the post have this acf value
);

$query = new WP_Query($args);

while ($query->have_posts()) : $query->the_post();
    $productColorArr = get_field('colors', get_the_ID());
    if ($productColorArr) {
        foreach ($productColorArr as $colorArr) {
            $colorName = strtolower($colorArr['colorName']);
            if (!in_array($colorName, $selectCores)) {
                array_push($selectCores, $colorName);
            }
        }
    }
endwhile;
wp_reset_query();
?>

<?php

// filter
function my_posts_where($where)
{
    $where = str_replace("meta_key = 'colors_$", "meta_key LIKE 'colors_%", $where);
    return $where;
}
add_filter('posts_where', 'my_posts_where');

$args = array(
    'post_type' => 'products',
    'posts_per_page' => $posts,
    'tax_query' => $taxQuery,
    'meta_query'  => $colorQuery,
);

$query = new WP_Query($args);
$countProducts = $query->found_posts;
?>
<main class="archiveProducts">
    <section class="breadcrumbs">
        <div class="container">
            <?php
            if (isset($flooringType) && $flooringType != '') { ?>
                <a href="<?php echo site_url('/flooring/'); ?>">Flooring</a> >
                <a href="<?php echo get_post_type_archive_link('products'); ?>">All</a> >
                <h1 class="actualItem"><?php echo $flooringType; ?></h1>
            <?php } else { ?>
                <a href="<?php echo site_url('/flooring/'); ?>">Flooring</a> >
                <h1 class="actualItem">All Types</h1>
            <?php }
            ?>
        </div>
    </section>
    <?php
    if (isset($flooringType) && $flooringType != '') { ?>
        <section class="flooringTypeSelected">
            <div class="container">
                <h2><span><?php echo $flooringType; ?></span> Flooring</h2>
                <p>(<span><?php echo $countProducts; ?></span> styles available)</p>
            </div>
        </section>
    <?php }
    ?>
    <section class="productsFilter">
        <div class="container">
            <span>Filter By</span>
            <form action="" method="GET">
                <div class="productsFilterSelectWrapper">
                    <select name="flooringType" id="flooringType">
                        <option value="">Type</option>
                        <?php
                        $terms = get_terms(
                            array(
                                'taxonomy'   => 'product-category',
                                'hide_empty' => false,
                            )
                        );
                        if (!empty($terms) && is_array($terms)) {
                            foreach ($terms as $term) { ?>
                                <option value="<?php echo $term->name; ?>"><?php echo $term->name; ?></option>
                        <?php
                            }
                        }
                        ?>
                    </select>
                </div>
                <div class="productsFilterSelectWrapper">
                    <select name="look" id="look">
                        <option value="">Look</option>
                        <?php
                        $terms = get_terms(
                            array(
                                'taxonomy'   => 'product-look',
                                'hide_empty' => false,
                            )
                        );
                        if (!empty($terms) && is_array($terms)) {
                            foreach ($terms as $term) { ?>
                                <option value="<?php echo $term->name; ?>"><?php echo $term->name; ?></option>
                        <?php
                            }
                        }
                        ?>
                    </select>
                </div>
                <div class="productsFilterSelectWrapper">
                    <select name="color" id="color">
                        <option value="">Color</option>
                        <?php
                        if ($selectCores) {
                            foreach ($selectCores as $cor) { ?>
                                <option value="<?php echo $cor; ?>"><?php echo $cor; ?></option>
                        <?php }
                        }
                        ?>
                    </select>
                </div>
            </form>
        </div>
    </section>
    <section class="productsShowcase">
        <div class="container">

            <?php
            if ($query->have_posts()) {
                while ($query->have_posts()) {
                    $query->the_post(); ?>
                    <a href="<?php the_permalink(); ?>" class="singleProductShowcase">
                        <?php
                        $colors = get_field('colors');
                        $avColors = count($colors) - 1;
                        ?>
                        <div class="singleProductShowcaseImage" style="background-image: url(<?php echo $colors[0]['color_image']; ?>);">
                            <div class="content"></div>
                        </div>
                        <div class="singleProductShowcaseText">
                            <h3 class="productName"><?php echo the_title(); ?></h3>
                            <p class="look">
                                <?php
                                $lookArr = get_the_terms($post->ID, 'product-look');
                                echo $lookArr[0]->name;
                                ?>
                            </p>
                            <p class="mainColor">Color: <span><?php echo $colors[0]['colorName']; ?></span></p>
                            <?php
                            if ($avColors > 0) { ?>
                                <p class="colorsAvailable"><span><?php echo $avColors;  ?></span> other colors available</p>
                            <?php }
                            ?>

                        </div>
                    </a>
            <?php }
            } else {
                echo 'no products available for this search';
            }
            wp_reset_postdata();
            ?>
        </div>
        <?php
        if ($query->found_posts > $limit && !isset($_GET['all'])) { ?>
            <div class="loadMorePosts">
                <a href="<?php echo get_post_type_archive_link('products'); ?>?all=1&<?php echo $parameters; ?>">Load more <i class="fa fa-long-arrow-down" aria-hidden="true"></i></a>
            </div>
        <?php }
        ?>
    </section>
</main>
<?php get_footer(); ?>

<script>
    $(document).ready(function() {
        $("#flooringType").val("<?php echo $_GET['flooringType'];  ?>");
        $("#look").val("<?php echo $_GET['look'];  ?>");
        $("#color").val("<?php echo $_GET['color'];  ?>");
    })
</script>