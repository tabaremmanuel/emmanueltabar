<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link http://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage Twenty_Sixteen
 * @since Twenty Sixteen 1.0
 */

get_header(); ?>

<div class="main-content">
	<div id="about" class="about-section main-sections">
		<div class="container">
			<div class="row">
				<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center head-con">
					<h2>About</h2>
				</div>				
				<div class="col-lg-612 col-md-12 col-sm-12 col-xs-12 text-center">
					<img src="<?php bloginfo('template_url'); ?>/images/typos.jpg" class="img-responsive" />
				</div>
				<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center">
					<p>Follows best practices of website development. Most of my creations are Content Management System (CMS)-driven, such as Wordpress. Also accepts freelance jobs. Please do check my works below.</p>
				</div>
			</div>
		</div>
	</div>
	<div id="portfolio" class="portfolio-section main-sections">
		<?php
			$args = array(
				'posts_per_page'   => 6,
				'offset'           => 0,
				'category'         => '',
				'category_name'    => '',
				'orderby'          => 'date',
				'order'            => 'DESC',
				'include'          => '',
				'exclude'          => '',
				'meta_key'         => '',
				'meta_value'       => '',
				'post_type'        => 'projects',
				'post_mime_type'   => '',
				'post_parent'      => '',
				'author'	   => '',
				'author_name'	   => '',
				'post_status'      => 'publish',
				'suppress_filters' => true 
			);
		?>
		<div class="container">
			<div class="row">
				<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center head-con">
					<h2>Cool Stuff</h2>
				</div>
				<?php
					$my_loop = new WP_Query($args);
					if( $my_loop->have_posts() ):
						while( $my_loop->have_posts() ): $my_loop->the_post();
				?>
							<div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 port-items">
								<a href="<?php the_permalink(); ?>"><div class="portfolio-img" style="background-image:url(<?php the_post_thumbnail_url('large'); ?>);"></div></a>
								<div class="portfolio-details">
									<a href="<?php the_permalink(); ?>"><h4><?php the_title(); ?></h4></a>
									<?php the_content(); ?>
									<div class="text-right">
										<a href="<?php the_permalink(); ?>">read more</a>
									</div>
								</div>
							</div>
				<?php
						endwhile;					
					else:
				?>
						<div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 port-items">
							<div class="portfolio-img"></div>
							<div class="portfolio-details">
								<h4>Lorem Ipsum</h4>
								<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua</p>
								<div class="text-right">
									<a href="#">read more</a>
								</div>
							</div>
						</div>
						<div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 port-items">
							<div class="portfolio-img"></div>
							<div class="portfolio-details">
								<h4>Lorem Ipsum</h4>
								<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua</p>
								<div class="text-right">
									<a href="#">read more</a>
								</div>
							</div>
						</div>
						<div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 port-items">
							<div class="portfolio-img"></div>
							<div class="portfolio-details">
								<h4>Lorem Ipsum</h4>
								<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua</p>
								<div class="text-right">
									<a href="#">read more</a>
								</div>
							</div>
						</div>
				<?php
					endif;
					wp_reset_postdata();
				?>				
				<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center view-more"><a href="/projects/" class="btn btn-medium">view all</a></div>
			</div>
		</div>
	</div>
	<div id="contact-me" class="contact-section main-sections">
		<div class="container">
			<div class="row">
				<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center head-con">
					<h2>Email me</h2>					
				</div>
				<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center head-con">
					<p><a class="mail-to" href="mailto:tabar.emmanuel@gmail.com">tabar.emmanuel@gmail.com</a></p>					
				</div>
				<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center head-con">
					<h3>- or -</h3>					
				</div>
				<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center">
					<?php echo do_shortcode('[contact-form-7 id="7" title="Contact form 1"]'); ?>
				</div>
			</div>
		</div>
	</div>
</div>

<?php get_footer(); ?>
