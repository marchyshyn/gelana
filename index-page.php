<?php
/**
 * Template Name: index-page
 */ ?>

 <meta charset="utf-8">
 <title>Gelana</title>
 <meta name="viewport" content="width=device-width, initial-scale=1.0">
 <meta name="author" content="Имя автора">
 <meta content="Gelana" />
 <link href="/gelana/wp-content/themes/gelana/style.css" rel="stylesheet">
 
<div class="contentWrapper">
	<div class="leftColumn"></div>
	<?php define('WP_USE_THEMES', false); get_header(); ?>
	<?php get_template_part( 'topNavBar' ); ?>
	<?php get_sidebar(); ?>
	<?php get_template_part( 'content' ); ?>
	<?php get_template_part( 'address' ); ?>
	<?php get_footer(); ?>
</div>	
