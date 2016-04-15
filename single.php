<?php get_header(); ?>



	<?php if (have_posts()): while (have_posts()) : the_post(); ?>



			<div id="banner">

				<?php if ( has_post_thumbnail()) : // Check if Thumbnail exists ?>
						<?php the_post_thumbnail('large'); // Fullsize image for the single post ?>
				<?php endif; ?>

				<div class="noise"></div>

			</div>



			<div id="container">
            	<div id="wiki" class="col8">

                    <div class="bannerTitle bg5 col8">
            	        <h1><?php the_title(); ?></h1>
            	    </div>

					<div id="post">

					    <div class="intro">
					    	<?php if ( has_excerpt()) : // Check if Excerpt exists ?>
					    	    <?php the_excerpt(); ?>
					    	<?php endif; ?>
					    </div>

                        <div class="wideLine col1"></div>

						<?php the_content(); // Dynamic Content ?>

                        <div class="wideLine col1"></div>

						<div class="updated">
							<span>Last updated:</span>
							<span class="date"><?php the_modified_date(); ?></span>
                        </div>

                        <div class="dataBlock">
							<h2>Tags</h2>
							<div id="tagList">
								<?php the_tags( __( '', 'html5blank' ), '', '<br>'); ?>
							</div>

						</div><div class="dataBlock">
							<?php related_posts($post);  ?>
						</div>


						<?php list_references("ref");  ?>



                    </div><!-- /post -->




				</div><!-- /wiki -->
			</div><!-- /container -->


	<?php endwhile; ?>

	<?php else: ?>
           <div id="container">
            	<div id="wiki" class="col8">
			        <h2>Something went wrong, try again...</h2>
	            </div><!-- /wiki -->
		   </div><!-- /container -->
	<?php endif; ?>



	<?php get_template_part('faq'); ?>

<?php get_footer(); ?>
