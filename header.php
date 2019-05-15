<!doctype html>
<html <?php language_attributes(); ?>>
	<head>
		<meta charset="<?php bloginfo('charset'); ?>">
		<title><?php wp_title(''); ?><?php if(wp_title('', false)) { echo ' :'; } ?> <?php bloginfo('name'); ?></title>

		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta name="description" content="<?php bloginfo('description'); ?>">
        <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/style.css" type="text/css"/>

		<?php wp_head(); ?>

	</head>

    <body>

        <header>

            <div class="logo">
                <a href="<?php echo home_url(); ?>">
                <h1>∞<h1>
                </a>
            </div>

            <nav class="nav" role="navigation">
                <?php wp_nav_menu(); ?>

            </nav>

        </header>

