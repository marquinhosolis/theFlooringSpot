<?php
/*
Template Name: Single Post
*/
?>

<?php get_header(); ?>
<main class="singlePost">
    <div class="backBlogs">
        <div class="container">
            <a href="<?php echo site_url('blog'); ?>">
                <i class="fa fa-long-arrow-left" aria-hidden="true"></i> Back to all blogs
            </a>
        </div>
    </div>
    <div class="container">
        <article>
            <div class="singlePostHeader">
                <div class="singlePostImage" style="background-image: url(<?php echo get_the_post_thumbnail_url(); ?>);">
                    <div class="content"></div>
                </div>
                <div class="singlePostIntro">
                    <h1 class="singlePostTitle"><?php the_title(); ?></h1>
                    <div class="singlePostTitleData">
                        <?php
                        the_date();
                        $categories = get_the_category();
                        foreach ($categories as $category) {
                            echo ' | ' . $category->name;
                        }
                        ?>
                    </div>
                    <div class="singlePostTitleShare">
                        Share <i class="fa fa-share" aria-hidden="true"></i>:
                        <a href="https://twitter.com/intent/tweet?text=<?php the_permalink(); ?>">
                            <i class="fa fa-twitter-square" aria-hidden="true"></i>
                        </a>
                        <a href="https://www.linkedin.com/shareArticle?mini=true&<?php the_permalink(); ?>=url&title=&summary=&source=">
                            <i class="fa fa-linkedin-square" aria-hidden="true"></i>
                        </a>
                        <a href="https://www.facebook.com/sharer/sharer.php?u=<?php the_permalink(); ?>">
                            <i class="fa fa-facebook-square" aria-hidden="true"></i>
                        </a>
                        <a href="mailto:?body=<?php the_permalink(); ?>">
                            <i class="fa fa-envelope-o" aria-hidden="true"></i>
                        </a>
                    </div>
                </div>
            </div>
            <div class="singlePostMain">
                <?php the_content(); ?>
                <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
                        <div class="postNav">
                            <div class="previous_post_link">
                                <?php previous_post_link('%link', '<i class="fa fa-long-arrow-left" aria-hidden="true"></i> Previous Blog') ?>
                            </div>
                            <div class="next_post_link">
                                <?php next_post_link('%link', 'Next Blog <i class="fa fa-long-arrow-right" aria-hidden="true"></i>') ?>
                            </div>
                        </div>
                    <?php endwhile; ?>
                <?php endif; ?>
            </div>

        </article>
    </div>

</main>
<?php get_footer(); ?>