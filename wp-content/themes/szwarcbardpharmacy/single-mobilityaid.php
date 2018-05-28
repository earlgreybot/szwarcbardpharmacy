<?php
/**
 * The template for displaying a single mobility aid
 *
 * @package Szwarcbard_Pharmacy
 */

get_header();
?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main">
		
		<?php
		while ( have_posts() ) :
			the_post();
		?>

			<div class="container">
									<div class="row">	
									<article class="mobpost">
											<div class="col-lg-3">
												<?php the_post_thumbnail(); ?> 
											</div>
											<div class="col-lg-9">
												<h2 class="mobility"><?php the_title(); ?></h2>
												<p class='purchasetype'> 
													<span> <?php the_field('first_purchase_type');?> </span>
														<?php if (get_field ('first_cost') ) : ?>
													<span>$<?php echo the_field ('first_cost'); ?></span>
														<?php endif; ?>
												</p>
												<p class='purchasetype'> 
													<span> <?php the_field('second_purchase_type'); ?> </span>
														<?php if (get_field ('second_cost') ) : ?>
													<span>$<?php echo the_field ('second_cost'); ?></span>
														<?php endif; ?>
												</p>
												<div 
													class="mobilitycontent"><?php the_content(); ?> 
												</div>
												<p class='avaliable'> Is this item available? <?php the_field('in_stock'); ?> </p>
												<?php if (get_field ('deposit_required') ) : ?>
													<p class=mobilitydeposit>A deposit of $<?php echo the_field ('deposit'); ?> is required to rent this item</p>
												<p id=contactus> In order to rent or buy this item, <a href=https://szwarcbardpharmacy.com.au/contact-us/> visit us in store, email us or call us to discuss options </a></p>	
											
											</div>
									</article>
									</div>
						<?php endif; ?>
			
		<?php	
		endwhile; // End of the loop.
		?>
		</div>
		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_sidebar();
get_footer();
