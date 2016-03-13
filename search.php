<?php get_header(); ?>

	<div id="container">
    	<div id="searchResults" class="col8">

			<h2><?php echo sprintf( __( '%s Search Results for ', 'html5blank' ), $wp_query->found_posts ); echo get_search_query(); ?></h2>

			<?php get_template_part('results'); ?>

		</div><!-- /wiki -->
	</div><!-- /container -->

	<?php get_template_part('faq'); ?>

<?php get_footer(); ?>
