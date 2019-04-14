

<!DOCTYPE HTML>
<!--
	Ion by TEMPLATED
	templated.co @templatedco
	Released for free under the Creative Commons Attribution 3.0 license (templated.co/license)
-->
<html>
	<head>
		<title><?php bloginfo( 'name' ); ?></title>
		<meta http-equiv="content-type" content="text/html; charset=utf-8" />
		<meta name="<?php bloginfo( 'description' ); ?>" content="" />
		<meta name="keywords" content="" />
		<!--[if lte IE 8]><script src="js/html5shiv.js"></script><![endif]-->
<?php wp_head(); ?>
	</head>
	<body id="top">

    <!-- Header -->
      <header id="header" class="skel-layers-fixed">
        <h1><a href="#">Ion</a></h1>
        <nav id="nav">
          <?php
            $menu = array(
              'theme_location'	=> 'primary',
              'menu_id'		=> 'nav',
            );
            wp_nav_menu($menu);
           ?>
        </nav>
      </header>
