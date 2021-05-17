<?php
/*
Template Name: Home Page
*/
?>
<?php get_header(); ?>
<main class="homePage">
	<section class="homePageCover" style="background-image: url(<?php echo get_the_post_thumbnail_url(); ?>)">
		<?php
		if (get_field('hero_background_video')) { ?>
			<video class="homeVideoBg" autoplay="" muted="" playsinline="" loop="">
				<source src="<?php the_field('hero_background_video'); ?>" type="video/mp4">
			</video>
		<?php } ?>

		<div class="container">
			<div class="homePageCoverText">
				<h1 class="underlineTitle wow animate__animated animate__slideInRight animate__fast"><?php the_field('hero_title'); ?></h1>
				<h2 class="wow animate__animated animate__slideInRight"><?php the_field('hero_subtitle'); ?></h2>
				<a href="<?php echo site_url('/contact-us/'); ?>" class="btn wow animate__animated animate__slideInRight">Get a Quote</a>
			</div>
		</div>
	</section>
	<section class="introBoxes">
		<div class="container">
			<div class="introBox wow animate__animated animate__slideInLeft">
				<div class="content">
					<h3><?php the_field('intro_box_1_title'); ?></h3>
					<p><?php the_field('intro_box_1_copy'); ?></p>
				</div>

			</div>
			<div class="introBox introImage wow animate__animated animate__slideInLeft animate__fast" style="background-image: url(<?php the_field('intro_image_1'); ?>)">
				<div class="content"></div>
			</div>
			<div class="introBox introImage wow animate__animated animate__slideInLeft animate__fast" style="background-image: url(<?php the_field('intro_image_2'); ?>)">
				<div class="content"></div>
			</div>
			<div class="introBox introImage wow animate__animated animate__slideInRight animate__fast" style="background-image: url(<?php the_field('intro_image_3'); ?>)">
				<div class="content"></div>
			</div>
			<div class="introBox introImage wow animate__animated animate__slideInRight animate__fast" style="background-image: url(<?php the_field('intro_image_4'); ?>)">
				<div class="content"></div>
			</div>
			<div class="introBox wow animate__animated animate__slideInRight">
				<div class="content">
					<h3><?php the_field('intro_box_2_title'); ?></h3>
					<p><?php the_field('intro_box_2_copy'); ?></p>
				</div>
			</div>
		</div>
	</section>
	<section class="partnerLogos">
		<div class="container">
			<div class="flexslider carousel">
				<ul class="slides">
					<?php
					while (have_rows('logos')) : the_row(); ?>
						<li>
							<img src="<?php the_sub_field('logo'); ?>" alt="">
						</li>
					<?php endwhile;
					?>
				</ul>
			</div>
		</div>
	</section>
	<section class="homeCopy">
		<div class="container">
			<div class="homeCopySide homeCopySideImage wow animate__animated animate__fadeInUp" style="background-image: url(<?php the_field('home_main_area_image_1'); ?>);">
				<div class="content"></div>
			</div>
			<div class="homeCopySide homeCopySideText wow animate__animated animate__fadeInUp">
				<div class="homeCopySideTextImage">
					<div class="dottedBg">
						<div class="dots wow" data-wow-delay="1s" transition-style="in:wipe:left"></div>
						<div class="homeCopySideTextImageWrapper" style="background-image: url(<?php the_field('home_main_area_image_2'); ?>);">
							<div class="content"></div>
						</div>
					</div>
				</div>
				<h3><?php the_field('home_main_area_title_1'); ?></h3>
				<div>
					<?php the_field('home_main_area_copy1'); ?>
				</div>
			</div>
			<div class="homeCopySide homeCopySideText wow animate__animated animate__fadeInUp">
				<div class="homeCopySideTextImage">
					<div class="dottedBg invertedDotted">
						<div class="dots wow" data-wow-delay="1s" transition-style="in:wipe:right"></div>
						<div class="homeCopySideTextImageWrapper" style="background-image: url(<?php the_field('home_main_area_image_3'); ?>);">
							<div class="content"></div>
						</div>
					</div>
				</div>
				<h3><?php the_field('home_main_area_title_2'); ?></h3>
				<div>
					<?php the_field('home_main_area_copy2'); ?>
				</div>
			</div>
			<div class="homeCopySide homeCopySideImage wow animate__animated animate__fadeInUp" style="background-image: url(<?php the_field('home_main_area_image_4'); ?>);">
				<div class="content"></div>
			</div>
		</div>
		<div class="bgText">
			<span class="wow" data-wow-delay="1s" transition-style="in:wipe:right">QUALITY</span>
		</div>
	</section>
	<section class="showcaseProducts">
		<div class="container">
			<div class="showcaseHomeTitle wow animate__animated animate__slideInUp">
				<h3>Explore our wide selection of quality flooring</h3>
				<div class="showcaseHomeTitleImage" style="background-image: url(<?php echo get_stylesheet_directory_uri(); ?>/images/showcaseTitle-image.png);">
					<div class="content"></div>
				</div>
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
						<a href="<?php echo site_url('/flooring/'); ?>">
							<h5>Browse all <br>flooring options <br><i class="fa fa-long-arrow-right" aria-hidden="true"></i></h5>
						</a>
					</div>
				</div>
			</div>
		</div>
	</section>
	<section class="whyChooseHome">
		<div class="container">
			<div class="whyChooseHomeText wow animate__animated animate__fadeInLeft">
				<h3>Why choose The Flooring Spot?</h3>
				<div class="whyChooseHomeTextMain">
					<?php the_field('why_choose_copy'); ?>
				</div>
				<a href="<?php echo site_url('/about-us/'); ?>">Learn more about us <i class="fa fa-long-arrow-right" aria-hidden="true"></i></a>
			</div>
			<div class="whyChooseHomeImageWrapper">
				<div class="whyChooseHomeImage" style="background-image: url(<?php the_field('why_choose_image'); ?>);">
					<div class="content"></div>
				</div>
				<div class="dottedBg">
					<div class="dots wow" data-wow-delay="1s" transition-style="in:wipe:left"></div>
					<div class="whyChooseHomeImageCaption">
						<p>
							<?php the_field('why_choose_caption'); ?>
							<span>— <?php the_field('why_choose_caption_name'); ?></span>
						</p>
					</div>
				</div>
			</div>
		</div>
	</section>
	<section class="servingCentralFloridaHome">
		<div class="container">
			<div class="servingCentralFloridaHomeImage">
				<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/serving-central-florida-home.png" alt="">
			</div>
			<div class="servingCentralFloridaHomeText">
				<h3>Serving Central Florida for over 15 years</h3>
				<p><?php the_field('serving_central_florida_copy'); ?></p>
			</div>
		</div>
	</section>
	<section class="testimonialsHome">
		<div class="container">
			<div class="testimonialsHomeTitle">
				<div class="dottedBg">
					<div class="dots"></div>
					<h3>What our customers are saying</h3>
				</div>
			</div>
			<div class="testimonialsHomeSlider">
				<div class="flexslider">
					<ul class="slides">
						<?php
						while (have_rows('testimonials')) : the_row(); ?>
							<li>
								<p>
									<?php the_sub_field('testimonial_copy'); ?>
								</p>
								<span><strong><i>— </i><?php the_sub_field(' testimonial_name'); ?></strong>, <?php the_sub_field('testimonial_role'); ?></span>
							</li>
						<?php endwhile;
						?>
					</ul>
				</div>

			</div>
		</div>
	</section>
	<section class="promotionsBoxes">
		<div class="container wow animate__animated animate__slideInUp">
			<a href="<?php echo site_url('/on-sale-page/'); ?>" class="promotionBox promotionBoxFirstHome">
				<h3>
					Latest promotions
				</h3>
				<p> view all <br> promotions <i class="fa fa-long-arrow-right" aria-hidden="true"></i></p>
			</a>
			<?php
			$args = array(
				'post_type' => 'promotions',
				'posts_per_page' => 1,
			);

			$query = new WP_Query($args);
			//$index = 1;
			if ($query->have_posts()) {
				while ($query->have_posts()) {
					$query->the_post(); ?>
					<?php
					$count = $query->found_posts;
					?>
					<a href="<?php echo site_url('on-sale-page'); ?>" class="promotionBox promotionBoxModal" data-promotion='<?php //echo $index; 
																																?>'>
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
							<h5><?php the_field('discount_percentage'); ?><i>%</i>OFF <br><?php the_title(); ?></h5>
							<div>
								<?php the_field('pop_up_text'); ?>
							</div>
						</div>
					</div> -->
			<?php
					$index++;
				}
			}
			wp_reset_postdata();
			?>
		</div>
	</section>
	<section class="blogShowcase BlogShowcaseHome">
		<div class="container">
			<a href="<?php echo site_url('/blog/'); ?>" class="blogShowcaseTitle">
				<h3>We’re here <br>to help you</h3>
				<p>Visit our blog to learn about different flooring options, floor care, the latest flooring trends, and more.</p>
				<p>Visit our blog <i class="fa fa-long-arrow-right" aria-hidden="true"></i></p>
			</a>
			<?php
			$args = array(
				'post_type' => 'post',
				'posts_per_page' => 1,
			);

			$query = new WP_Query($args);

			if ($query->have_posts()) {
				while ($query->have_posts()) {
					$query->the_post(); ?>
					<?php
					$count = $query->found_posts;
					?>
					<a href="<?php the_permalink(); ?>" class="blogShowcaseItem">

						<div class="blogShowcaseImage" style="background-image: url(<?php echo get_the_post_thumbnail_url(get_the_ID(), 'thumb'); ?>);">
							<div class="content"></div>
						</div>
						<div class="blogShowcaseCopy">
							<h4><?php the_title(); ?></h4>

							<p>
								<?php
								the_date();
								$categories = get_the_category();
								foreach ($categories as $category) {
									echo ' | ' . $category->name;
								}
								?>
							</p>
							<?php the_excerpt(); ?>
							<span>CONTINUE READING <i class="fa fa-long-arrow-right" aria-hidden="true"></i></span>
						</div>
						<div class="labelFirst">Latest blog</div>
					</a>
			<?php }
			}
			wp_reset_postdata();
			?>
		</div>
	</section>
</main>
<?php get_footer(); ?>