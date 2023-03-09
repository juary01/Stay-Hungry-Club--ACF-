<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Stay_Hungry_Club
 */

?>
	<footer>
		<div class="footer-container">
			<div class="row justify-content-center align-items-center" style="margin-right: 0;">
				<div class="col-lg-2">
				<div class="logos">
					<div class="site-logo">
						<img src="<?php the_field('logo', 'option')?>" class ="img-fluid">
					</div>
					<div class="social-media_logos">
						<img src="<?php the_field('facebook_logo', 'option')?>" class ="img-fluid">
						<img src="<?php the_field('twitter_logo', 'option')?>" class ="img-fluid">
						<img src="<?php the_field('instagram_logo', 'option')?>" class ="img-fluid">
						<img src="<?php the_field('linkedin_logo', 'option')?>" class ="img-fluid">
						<img src="<?php the_field('pinterest_logo', 'option')?>" class ="img-fluid">
					</div>
				</div>
				</div>
				<div class="col-lg-3">
					<div class="contact-details_footer">
					<?php the_field('contact_details', 'option'); ?>
					</div>
				</div>
				<div class="col-lg-3">
				<div class="foot-menu">
					<ul>
						<?php 
						$link = get_field('home');
						$label = $link['title'];
						?>
						<li><a href="<?php echo $link['url'];?>"><?php echo $label;?></a></li>
						<?php 
						$link_financial_freedom = get_field('financial_freedom');
						$label_financial_freedom = $link_financial_freedom['title'];
						?>
						<li><a href="<?php echo $link_financial_freedom['url'];?>"><?php echo $label_financial_freedom;?></a></li>
						<?php 
						$link_career_growth = get_field('career_growth');
						$label_career_growth = $link_career_growth['title'];
						?>
						<li><a href="<?php echo $link_career_growth['url'];?>"><?php echo $label_career_growth;?></a></li>
					</ul>
					</div>
					</div>
					<div class="col-lg-3">
					<div class="foot-menu">
						<ul>
						<?php
						$link_business_growth = get_field('business_growth');
						$label_business_growth = $link_business_growth['title'];
						?>
						<li><a href="<?php echo $link_business_growth['url'];?>"><?php echo $label_business_growth;?></a></li>
						<?php
						$link_book_events = get_field('book_events');
						$label_book_events = $link_book_events['title'];
						?>
						<li><a href="<?php echo $link_book_events['url'];?>"><?php echo $label_book_events;?></a></li>
						<?php 
						$link_blog = get_field('blog');
						$label_blog = $link_blog['title'];
						?>
						<li><a href="<?php echo $link_blog['url']?>"><?php echo $label_blog;?></a></li>
						</ul>
					</div>
					</div>
			</div>
		</div>
	<div class ="copy-right_container">
		<div>
		<?php the_field('copy_right','option');?>
		</div>
		<div>
		<?php the_field('privacy_policy','option');?>
		</div>
	</div>
	</footer>
<?php wp_footer(); ?>