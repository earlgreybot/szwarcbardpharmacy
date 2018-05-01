<?php
/**
 * Template Name: Mobility Equipment
 * The template for displaying all pages.
 *
 * This is the template that displays all mobility equipment.
 *
 * @package understrap
 */

get_header();

$container   = get_theme_mod( 'understrap_container_type' );

?>

<!-- page content -->
<div id="mobilityaidpage" class="content-area">
		<h1 id='aidh' class='entry-title'> Mobility Aids </h1>
		<main id="aidm" class="site-folio">
			<?php
			//sets up the parameters for the query that calls upon the CPT
				$args = array(
					'post_type' => 'mobilityaid',
					'orderby' => 'menu_order',
					'order' => 'ASC'
				);
				// creates the query and saves the content as $mobilityaid
				$mobilityaid = new WP_Query($args);
			?>
			<?php
				//the loop that repeats it for each post and displays it on the page
				if ( $mobilityaid->have_posts() ):
					while( $mobilityaid->have_posts() ) : $mobilityaid->the_post(); ?>
						<article class="mobilityaidpost">
							<h2><?php the_title(); ?></h2>
							<?php the_field('first_purchase_type'); ?>
							<?php the_field('first_cost'); ?>
							<?php the_field('second_purchase_type'); ?>
							<?php the_field('second_cost'); ?>
							<?php the_content(); ?>
							<?php the_field('in_stock'); ?>
						</article>
					<?php endwhile; ?>
				<?php else: ?>
					<p> Sorry, we cant find any mobility equipment to list, please call us </p>
				<?php endif; ?>
		</main>

<?php
get_sidebar();
get_footer();
?>