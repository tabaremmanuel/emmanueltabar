<?php
/**
Template Name: Singe Project Template
 */

get_header(); ?>

<div id="primary" class="content-area">
	<main id="main" class="site-main" role="main">
		<div class="container">
			<div class="row">
				<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
					<?php
					// Start the loop.
					while ( have_posts() ) : the_post();
					?>
						<h1><?php the_title(); ?></h1>
						<?php the_content(); ?>
						<?php if ( has_post_thumbnail() ) :	?>
							<a href="<?php the_post_thumbnail_url(); ?>" target="_blank"><img src="<?php the_post_thumbnail_url('medium'); ?>" class="img-responsive" alt="<?php the_title(); ?>" /></a>
						<?php endif; ?>
					<?php
						// If comments are open or we have at least one comment, load up the comment template.
						if ( comments_open() || get_comments_number() ) {
							comments_template();
						}

						if ( is_singular( 'attachment' ) ) {
							// Parent post navigation.
							the_post_navigation( array(
								'prev_text' => _x( '<span class="meta-nav">Published in</span><span class="post-title">%title</span>', 'Parent post link', 'twentysixteen' ),
							) );
						} elseif ( is_singular( 'post' ) ) {
							// Previous/next post navigation.
							the_post_navigation( array(
								'next_text' => '<span class="meta-nav" aria-hidden="true">' . __( 'Next', 'twentysixteen' ) . '</span> ' .
									'<span class="screen-reader-text">' . __( 'Next post:', 'twentysixteen' ) . '</span> ' .
									'<span class="post-title">%title</span>',
								'prev_text' => '<span class="meta-nav" aria-hidden="true">' . __( 'Previous', 'twentysixteen' ) . '</span> ' .
									'<span class="screen-reader-text">' . __( 'Previous post:', 'twentysixteen' ) . '</span> ' .
									'<span class="post-title">%title</span>',
							) );
						}

						// End of the loop.
					endwhile;
					?>
				</div>
			</div>
		</div>

	</main><!-- .site-main -->

</div><!-- .content-area -->
<?php get_footer(); ?>
