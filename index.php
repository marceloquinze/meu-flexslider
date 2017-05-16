<section class="slide">
	<div class="flexslider">
		<ul class="slides">

			<?php
      
      $args = array(
        posts_per_page => 9,
        ignore_sticky_posts => true
      );

			$query = new WP_Query( $args );

			if( $query->have_posts() ) :
				
				// Getting the fisrt random image from Unplashtit
				$cont = 942; 

				while( $query->have_posts() ) : $query->the_post();

			?>

				<li>

					<div class="slider-container">
				  		<?php 
				  			// If we have a thumbnail, show it
				  			// If not, we show a placeholder image
				  			if( has_post_thumbnail() ): 									
						?>
						
							<figure>
								<?php the_post_thumbnail('large'); ?>
							</figure>

					<?php else: ?>
							<img class="img-responsive" src="https://unsplash.it/1920/650/?image=<?php echo $cont ?>" title="<?php echo esc_attr_x( 'Placeholder Image', 'title', 'parea' ); ?>">
					<?php endif; ?>

							<div class="container">
								<div class="slider-details-container">

										<div class="slider-title">
											<h3><a href="<?php the_permalink(); ?>" class="slider-title"><?php the_title();?></a></h3>
										</div>

										<div class="slider-description">
											<?php the_excerpt(); ?>
										</div>

										<div class="slider-readmore-button">
											<a href="<?php the_permalink(); ?>" class="btn"><?php echo _e( 'Read More!', 'parea' ) ?></a>
										</div>

								</div>
							</div>

					</div>

				</li>

			<?php
				$cont++;
			    endwhile;					    
			    wp_reset_postdata();
				endif;
			?>

		</ul>
	</div>
</section>
