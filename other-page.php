<?php
/**
 * Template Name: other-page
 */ ?>

 <meta charset="utf-8">
 <title>Gelana</title>
 <meta name="viewport" content="width=device-width, initial-scale=1.0">
 <meta name="author" content="Имя автора">
 <meta content="Gelana" />
 <link href="/gelana/wp-content/themes/gelana/style3.css" rel="stylesheet">
<div class="contentWrapper">
	<div class="leftColumn"></div>
	<?php get_template_part( 'smallHeader' ); ?>
	<?php get_sidebar(); ?>
	<?php get_template_part( 'topNavBar' ); ?>
	<div class="pageTitle">
		<p><strong><?php the_title(); ?> ></strong></p>
	</div>
	<?php if ((is_page( array('УСЛУГИ', 'услуга 1', 'услуга 2')))) { ?>
	<div class="subMenu">
		<div>
			 <?php wp_nav_menu('menu=uslugi'); ?>
		</div>
	</div>
	<?php } ?>
	<?php if ((is_page( array('О КОМПАНИИ', 'НОВОСТИ', 'ПАРТНЕРЫ', 'РЕКОМЕНДАЦИИ', 'КОНТАКТЫ')))) { ?>
	<div class="clear"></div>
	<?php } ?>
	<div class="contentOtherPage">
		<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
		<?php the_content(); ?>
		<?php endwhile; ?>
		<?php endif; ?>
	</div>	
	<?php get_template_part( 'address' ); ?>
	<?php get_footer(); ?>
	<script type="text/javascript">
	onload = function () {
	for (var lnk = document.links, j = 0; j < lnk.length; j++)
	if (lnk [j].href == document.URL) lnk [j].style.color = '#fff';}
	</script>
</div>