<!DOCTYPE html>
<html lang="ru">
 <head>
 <meta charset="utf-8">
 <title>Gelana</title>
 <meta name="viewport" content="width=device-width, initial-scale=1.0">
 <meta name="author" content="Имя автора">
 <meta content="Gelana" />
 <meta content="website" />
 <link href="/gelana/wp-content/themes/gelana/style3.css" rel="stylesheet">
<div class="contentWrapper">
		<div class="leftColumn"></div>
		<?php get_template_part( 'smallHeader' ); ?>
		<?php get_sidebar(); ?>
		<?php get_template_part( 'topNavBar' ); ?>
	<div class="pageTitle">
		<p><strong>ПОРТФОЛИО ></strong></p>
	</div>
	<div class="subMenu">
		<?php wp_nav_menu('menu=portfolio2'); ?>
	</div>
	<div class="content">
		<p>
			<?php echo get_post_field('post_content', '45'); ?>
		</p>
	</div> 
	<?php get_template_part( 'address' ); ?>
	<?php get_footer(); ?>
	<script type="text/javascript">
		onload = function () {
			for (var lnk = document.links, j = 0; j < lnk.length; j++)
			if (lnk [j].href == document.URL) lnk [j].style.color = '#fff';
		}
	</script>
</div>	