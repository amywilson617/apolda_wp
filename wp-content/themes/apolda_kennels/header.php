<!doctype html>
<html <?php language_attributes(); ?> class="no-js">
	<head>
		<meta charset="<?php bloginfo('charset'); ?>">
		<title><?php wp_title(''); ?><?php if(wp_title('', false)) { echo ' : '; } ?><?php bloginfo('name'); ?></title>

		<link href="//www.google-analytics.com" rel="dns-prefetch">
        <link href="<?php echo get_template_directory_uri(); ?>/img/icons/favicon.ico" rel="shortcut icon">

		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">

		<link href="https://fonts.googleapis.com/css?family=Raleway:400,500" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">

		<!-- STYLES ARE ENQUED THROUGH FUNCTIONS.PHP -->

		<?php wp_head(); ?>

	</head>
	<body <?php body_class(); ?>>


		<nav class="full-nav">

		          <img class="logo" src="<?php bloginfo('template_url'); ?> assets/src/img/apolda-logo.png" alt="Logo" title="Logo" />

		           <ul class="nav">
		              <li> <a href="index.html"> home </a> </li>
		              <li> <a href="about.html"> about us </a> </li>
		              <li> <a href="services.html"> services </a> </li>
		              <li> <a href="blog.html"> blog </a> </li>
		              <li> <a href="contact.html"> contact </a> </li>
		          </ul>

		      </nav>
