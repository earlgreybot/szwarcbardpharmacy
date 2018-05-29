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
					'orderby' => 'title',
					'order' => 'ASC',
					'posts_per_page'=>'-1'
				);
				// creates the query and saves the content as $mobilityaid
				$mobilityaid = new WP_Query($args);
			?>
			
					<aside class="mobility" id="mobilityaside">
								<h3>List of all mobility aids</h3>
								<div class="mobilityaside">
									<?php get_search_form(); ?>
									<ul>
										<?php while( $mobilityaid->have_posts() ) : $mobilityaid->the_post(); ?>
											<li class="mobilitylist"><a href='<?php the_permalink(); ?>'><?php the_title(); ?></a></li>
										<?php endwhile; ?>
									</ul>
								</div>
							</aside>
							<div class="container">
					<?php
						//the loop that repeats it for each post and displays it on the page
						if ( $mobilityaid->have_posts() ):
							while( $mobilityaid->have_posts() ) : $mobilityaid->the_post(); ?>
									<div class="row mobpost">
									<article class="mob">
											<div class="col-sm-12 col-lg-3">
												<?php the_post_thumbnail(); ?> 
											</div>
											<div class="col-sm-12 col-lg-9">
												<h2 class="mobility"><a href='<?php the_permalink(); ?>'><?php the_title(); ?></a></h2>
												<p class='purchasetype'> 
													<span> 
														<?php the_field('first_purchase_type');?> 
													</span> 	
													<span>
														<?php if (get_field ('first_cost') ) : ?>
															$<?php echo the_field ('first_cost'); ?>
														<?php endif; ?>
													</span>		
												</p>
												<p class='purchasetype'> 
													<span> 
														<?php the_field('second_purchase_type'); ?> 
													</span>											
													<span>
														<?php if (get_field ('second_cost') ) : ?>
															$<?php echo the_field ('second_cost'); ?>
														<?php endif; ?>
													</span>		
												</p>
												<div class="mobilitycontent"><?php the_content(); ?> </div>
												<p class='avaliable'> Is this item available? <?php the_field('in_stock'); ?> </p>
												<p class=mobilitydeposit> 
													<?php if (get_field ('deposit_required') ) : ?> 
													A deposit of $<?php echo the_field ('deposit'); ?> is required to rent this item 
													<?php endif; ?>
												</p>
											</div>
									</article>
									</div>
						
								<?php endwhile; ?>
						<?php else: ?>
								<p> Sorry, we cant find any mobility equipment to list, please <a href='https://szwarcbardpharmacy.com.au/contact-us/'>contact us</a> </p>
						<?php endif; ?>
				</div>			
		</main>
	</div>

<?php
get_sidebar();
get_footer();
?>