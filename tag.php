<?php get_header(); ?>

    <div id="container">
    	<div id="searchResults" class="col8">

			<h2><?php echo sprintf( __( '%s Tag Results for: ', 'html5blank' ), $wp_query->found_posts ); echo single_tag_title('', false); ?></h2>

			<?php get_template_part('results'); ?>

            <div id="tagCloud">
			<?php get_all_tags(); ?>
			</div>

		</div><!-- /wiki -->
	</div><!-- /container -->

	<?php get_template_part('faq'); ?>

<?php get_footer(); ?>
