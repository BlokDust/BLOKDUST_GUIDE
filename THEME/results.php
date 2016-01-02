

<div class="thickLine col8"></div>
<?php
    $count = 0;
    if (have_posts()): while (have_posts()) : the_post();
    $count++;

    if ($count===1) {
        $class = '';
    } else {
        $class=' searchDivide';
    }
?>
        <a class="searchLink col8" href="<?php the_permalink(); ?>">
        <div class="searchResult col1<?php echo($class) ?>">
            <div class="searchBG bg4"></div>

            <div class="searchResultTxt col8">
                <span class="searchTitle"><?php the_title(); ?></span><br/>
                <span>In: <?php get_category_plain(); ?></span>
            </div>

            <svg class="searchResultArrow col8" height="11" width="22">
                <line x1="0" y1="0" x2="50%" y2="100%" style="stroke:currentColor;stroke-width:2" />
                <line x1="50%" y1="100%" x2="100%" y2="0" style="stroke:currentColor;stroke-width:2" />
            </svg>

        </div>
        </a>

<?php endwhile; ?>

<?php else: ?>
    <h2>No results found...</h2>
<?php endif; ?>