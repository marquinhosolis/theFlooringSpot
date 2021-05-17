<?php
/*
Template Name: About Us Page
*/
?>

<?php get_header(); ?>
<main class="aboutPage">
    <section class="pageHeader pageHeaderBlog">
        <div class="pageHeaderImage" style="background-image: url(<?php echo get_the_post_thumbnail_url(); ?>);">
        </div>
        <div class="pageHeaderCopy">
            <h1 class="underlineTitle wow animate__animated animate__slideInRight"><?php the_field('hero_title'); ?></h1>
            <p class="wow animate__animated animate__slideInRight"><?php the_field('hero_copy'); ?></p>
        </div>
    </section>
    <section class="aboutUsOffering">
        <div class="container">
            <h2>For more than 16 years, we’ve focused on offering:</h2>
            <div class="offersWrapper">
                <?php
                while (have_rows('offers')) : the_row(); ?>
                    <div class="dottedBg wow animate__animated animate__slideInUp">
                        <div class="dots wow" data-wow-delay="1s" transition-style="in:wipe:left"></div>
                        <div class="offerImage" style="background-image: url(<?php the_sub_field('offer_image'); ?>);">
                            <div class="content"></div>
                        </div>
                    </div>
                    <div class="offerText wow animate__animated animate__slideInUp">
                        <h3><?php the_sub_field('offer_title'); ?></h3>
                        <p><?php the_sub_field('offer_copy'); ?></p>
                    </div>
                <?php endwhile; ?>
            </div>
        </div>
    </section>
    <section class="showroomTour">
        <div class="container">
            <h2>Take a tour of our showroom</h2>
            <?php the_field('showroom_video'); ?>
        </div>
    </section>
    <section class="teamMembers">
        <div class="container">
            <div class="teamMembersTitle">
                <h2><?php the_field('team_member_title'); ?></h2>
                <p><?php the_field('team_member_subtitle'); ?></p>
            </div>
            <div class="teamMembersWrapper">
                <?php
                while (have_rows('team_members')) : the_row(); ?>
                    <div class="teamMember wow animate__animated animate__slideInUp">
                        <div class="dottedBg">
                            <div class="dots wow" data-wow-delay="1s" transition-style="in:wipe:left"></div>
                            <div class="teamMemberImage" style="background-image: url(<?php the_sub_field('photo'); ?>);">
                                <div class="content"></div>
                            </div>
                        </div>
                        <div class="teamMemberName"><?php the_sub_field('name'); ?></div>
                        <div class="teamMemberRole"><?php the_sub_field('role'); ?></div>
                    </div>
                <?php endwhile;
                ?>
            </div>
        </div>
    </section>
    <section class="installation">
        <div class="container">
            <div class="installationContent wow animate__animated animate__fadeInUp">
                <div class="dottedBg invertedDotted">
                    <div class="dots"></div>
                    <div class="installationContentImage" style="background-image: url(<?php the_field('installation_photo_1'); ?>);">
                        <div class="content"></div>
                    </div>
                </div>
                <div class="installationContentText">
                    <h3>Our installation team</h3>
                    <p><?php the_field('installation_copy'); ?></p>
                </div>
            </div>
            <div class="installationContent wow animate__animated animate__fadeInUp">
                <div class="installationContentText wow" data-wow-delay="1s" transition-style="in:wipe:bottom">
                    <?php the_field('installation_points'); ?>
                </div>
                <div class="dottedBg invertedDotted">
                    <div class="dots"></div>
                    <div class="installationContentImage" style="background-image: url(<?php the_field('installation_photo_2'); ?>);">
                        <div class="content"></div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>
<?php get_footer(); ?>