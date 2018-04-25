<?php
/**
 * Template Name: Mobility Equipment
 * The template for displaying all pages.
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 * @package understrap
 */

get_header();

$container   = get_theme_mod( 'understrap_container_type' );

?>
<div id="mobilityaidpage" class="content-area">
		<h1 id='aidh' class='entry-title'> Mobility Aids </h1>
		<main id="aidm" class="site-folio">
			<?php
			// query parameters
			$args = array(
				'post_type' => 'mobilityaid',
				'orderby' => 'date',
				'order' => 'DESC'
			);
			$folio = new WP_Query($args);
			?>
			
			
			<?php 
			//display content
			if( $mobilityaid->have_posts() ): ?>
				<?php while( $mobilityaid->have_posts() ): $mobilityaid->the_post(); ?>
					<article class="mobilityaid">
						<div class="aid_header">
						<a href='<?php the_permalink(); ?>'>	
							<h2><?php the_title(); ?></h2>
						</a>
						</div>
						<div class='aid-content'>
						<a href='<?php the_permalink(); ?>'>		
							<?php the_post_thumbnail(); ?>
						</a>
							<?php the_content(); ?>
						</div>
					</article>
				<?php endwhile; ?>
			<?php else: ?>
				<p>Sorry, there are no projects to be found. </p>
			<?php endif; ?>
		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_sidebar();
get_footer();
