<?php
/**
Template Name: Archive Projects Template
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
			<div class="container">
				<div class="row">
					<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
						<?php if ( have_posts() ) : ?>

								<header class="page-header">
									<h2><?php post_type_archive_title(); ?></h2>
									<?php								
										the_archive_description( '<div class="taxonomy-description">', '</div>' );
									?>
								</header><!-- .page-header -->

								<?php while ( have_posts() ) : the_post(); ?>
									<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
										<div class="projects-item">
											<h1><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h1>
											<?php if ( has_post_thumbnail() ) :	?>
												<div class="projects-image" style="background:url(<?php the_post_thumbnail_url(); ?>) center center no-repeat;">
												</div>
											<?php endif; ?>
											<a href="<?php the_permalink(); ?>" class="btn">see more</a>
										</div>
									</div>
								<?php
								// End the loop.
								endwhile;

								// Previous/next page navigation.
								the_posts_pagination( array(
									'prev_text'          => __( 'Previous page', 'twentysixteen' ),
									'next_text'          => __( 'Next page', 'twentysixteen' ),
									'before_page_number' => '<span class="meta-nav screen-reader-text">' . __( 'Page', 'twentysixteen' ) . ' </span>',
								) );

							// If no content, include the "No posts found" template.
							else :
								get_template_part( 'template-parts/content', 'none' );

							endif;
						?>
					</div>
				</div>
			</div>
		</main><!-- .site-main -->
	</div><!-- .content-area -->
<?php get_footer(); ?>
