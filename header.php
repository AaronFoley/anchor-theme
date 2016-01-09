<!doctype html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<title><?php echo page_title('Page can’t be found'); ?> - <?php echo site_name(); ?></title>

		<meta name="description" content="<?php echo site_description(); ?>">

		<link href='https://fonts.googleapis.com/css?family=Roboto+Slab:700' rel='stylesheet' type='text/css'>
        <link href='https://fonts.googleapis.com/css?family=PT+Sans:400,700,400italic' rel='stylesheet' type='text/css'>

		<link rel="stylesheet" href="<?php echo theme_url('/css/reset.css'); ?>">
		<link rel="stylesheet" href="<?php echo theme_url('/css/style.css'); ?>">

		<link rel="alternate" type="application/rss+xml" title="RSS" href="<?php echo rss_url(); ?>">
		<link rel="shortcut icon" href="<?php echo theme_url('img/favicon.png'); ?>">

		<!--[if lt IE 9]>
			<script src="//html5shiv.googlecode.com/svn/trunk/html5.js"></script>
		<![endif]-->

		<script>var base = '<?php echo theme_url(); ?>';</script>

	    <meta name="viewport" content="width=device-width">
	    <meta name="generator" content="Anchor CMS">

	    <meta property="og:title" content="<?php echo site_name(); ?>">
	    <meta property="og:type" content="website">
	    <meta property="og:url" content="<?php echo e(current_url()); ?>">
	    <meta property="og:image" content="<?php echo theme_url('img/og_image.gif'); ?>">
	    <meta property="og:site_name" content="<?php echo site_name(); ?>">
	    <meta property="og:description" content="<?php echo site_description(); ?>">

		<?php if(customised()): ?>
		    <!-- Custom CSS -->
    		<style><?php echo article_css(); ?></style>

    		<!--  Custom Javascript -->
    		<script><?php echo article_js(); ?></script>
		<?php endif; ?>
	</head>
	<body class="<?php echo body_class(); ?>">

		<div id="sidebar">
			<a id="logo" href="<?php echo base_url(); ?>">
                <img id="avatar" src="https://avatars3.githubusercontent.com/u/3353608?v=3&s=100" /><span><?php echo site_name(); ?></span>
            </a>

            <p id="about"><?php echo site_description(); ?></p>

            <nav id="menu" role="navigation">
            	<ul>
            		<?php if(has_menu_items()):
						  while(menu_items()): ?>
					<li <?php echo (menu_active() ? 'class="active"' : ''); ?>>
                        <a href="<?php echo menu_url(); ?>" title="<?php echo menu_title(); ?>"  <?php echo (substr(menu_url(),0,5) == '/ext-' ? 'target="_blank"' : ''); ?> >
							<?php echo menu_name(); ?>
						</a>
                    </li>
                	<?php endwhile;
						  endif; ?>
                    <li>
                        <a href="<?php echo rss_url(); ?>" title="RSS">
                            RSS
                        </a>
                    </li>
            	</ul>
            </nav>

            <form id="search" action="<?php echo search_url(); ?>" method="post">
                <input type="search" id="term" name="term" placeholder="Search this website&hellip;" value="<?php echo search_term(); ?>">
            </form>

            <div id="categories">
            	<ul>
            		<?php while(categories()):
					      if (category_count() > 0) { ?>
					<li>
                        <a href="<?php echo category_url(); ?>" title="<?php echo category_description(); ?>">
							<?php echo category_title(); ?> <span><?php echo category_count(); ?></span>
						</a>
                    </li>
					<?php } endwhile; ?>
            	</ul>
            </div>

            <p class="copyright">&copy; <?php echo date('Y'); ?> <?php echo site_name(); ?>. All rights reserved.</p>
        </div>

   		<div id="content" class="content">
