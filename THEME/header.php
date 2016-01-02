<!doctype html>
<html <?php language_attributes(); ?> class="no-js">


	<head>
		<meta charset="<?php bloginfo('charset'); ?>">
		<title><?php wp_title(''); ?><?php if(wp_title('', false)) { echo ' :'; } ?> <?php bloginfo('name'); ?></title>

		<link href="//www.google-analytics.com" rel="dns-prefetch">
        <link href="<?php echo get_template_directory_uri(); ?>/img/icons/favicon.ico" rel="shortcut icon">
        <link href="<?php echo get_template_directory_uri(); ?>/img/icons/touch.png" rel="apple-touch-icon-precomposed">

        <script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/lib/PixelPalette.js"></script>
        <script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/lib/tween.min.js"></script>
        <script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/_MAIN.js"></script>

		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta name="description" content="<?php bloginfo('description'); ?>">

		<?php wp_head(); ?>
		<script>
        // conditionizr.com
        // configure environment tests
        conditionizr.config({
            assets: '<?php echo get_template_directory_uri(); ?>',
            tests: {}
        });
        </script>

	</head>
	<body bgcolor="#000" class="bg0 stickyPage" onload="init()" onresize="metrics()">


			<!-- header -->
			<div id="headBG" class="bg2"></div>

			<div id="head" class="col8">
					<a href="<?php echo home_url(); ?>"><h1>BlokDust Guide</h1></a>
			</div>

			<div id="menu"  class="col8">
			 <svg height="48" width="45">
				 <line x1="0" y1="50%" x2="33%" y2="19%" style="stroke:currentColor;stroke-width:2" />
				 <line x1="33%" y1="19%" x2="66%" y2="50%" style="stroke:currentColor;stroke-width:2" />
				 <line x1="66%" y1="50%" x2="99%" y2="19%" style="stroke:currentColor;stroke-width:2" />

				 <line x1="0" y1="81%" x2="33%" y2="50%" style="stroke:currentColor;stroke-width:2" />
				 <line x1="33%" y1="50%" x2="66%" y2="81%" style="stroke:currentColor;stroke-width:2" />
				 <line x1="66%" y1="81%" x2="99%" y2="50%" style="stroke:currentColor;stroke-width:2" />
			 </svg>
			</div>

			<div id="search"  class="col8">
			 <form id="tfnewsearch" method="get" action="<?php echo home_url(); ?>" role="search">
				 <input type="search" id="sbx"  name="s" size="21" maxlength="120" value="Search">
				 <label>
					 <input type="submit">
					 <div id="submitBox">
						 <svg class="searchSubmit" height="11" width="22">
							 <line x1="0" y1="0" x2="50%" y2="100%" style="stroke:currentColor;stroke-width:2" />
							 <line x1="50%" y1="100%" x2="100%" y2="0" style="stroke:currentColor;stroke-width:2" />
						 </svg>
					 </div>
				 </label>
			 </form>
			</div>

			<!-- /header -->

			<!-- menu -->

			<div id="menuPanel" class="bg2 col8">
			    <div id="menuClose">
			    	<svg height="25" width="25">
						<line x1="0" y1="0" x2="100%" y2="100%" style="stroke:currentColor;stroke-width:2" />
						<line x1="0" y1="100%" x2="100%" y2="0" style="stroke:currentColor;stroke-width:2" />
					</svg>
			    </div>

			    <div class="menuTxt">
			        <div class="wideLine2 col1"></div>
					<h2>Wiki</h2>
					<?php posts_in_category(19); ?>
					<div class="wideLine2 col1"></div>
					<h2>Features</h2>
                    <?php posts_in_category(3); ?>

				</div>
			</div>

			<!-- /menu -->
