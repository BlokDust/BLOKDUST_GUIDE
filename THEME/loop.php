
<div id="grid"><!--
<?php
    $wp_query->set('orderby', 'menu_order');
	$wp_query->set('order', 'ASC');
	$wp_query->set('cat', 11);
	$wp_query->get_posts();

    $count = 2;
    if (have_posts()): while (have_posts()) : the_post();
    $count++;
?>
--><a class="searchLink" href="<?php the_permalink(); ?>"><div class="gridBlock col<?php echo($count) ?>">
    <div id="thumb"><?php the_post_thumbnail('medium');?></div>
        <div class="noise"></div>
	<svg height="98" width="98" viewBox="0 0 100 100" preserveAspectRatio="none" >
		<polygon points="0,100 100,0 0,0" style="fill:currentColor;" />
	</svg>
	<div class="gridTitle bg2 col8">
	    <div class="searchBG bg5"></div>
		<div class="gridTitleTxt"><?php the_title(); ?></div>
	</div>
</div></a><!--

<?php endwhile; ?>

<?php else: ?>

	-->
	<h2>Something went wrong, try again...</h2>
	<!--

<?php endif; ?>
--></div>