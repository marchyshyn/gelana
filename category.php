<!DOCTYPE html>
<html lang="ru">
 <head>
 <meta charset="utf-8">
 <title>Gelana</title>
 <meta name="viewport" content="width=device-width, initial-scale=1.0">
 <meta name="author" content="Имя автора">
 
 <meta content="Gelana" />
 <meta content="website" />
 <meta content="images.logo.gif" />
 
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
		<?php if(have_posts()) : ?>
		<?php while(have_posts()) : the_post(); ?>
		<div class="post-main">
			<?php the_post_thumbnail() ?>
			<div class="description">
				<a href=" <?php the_permalink() ?> "><strong><?php the_title() ?></strong></a>
				<?php the_excerpt() ?>
			</div>
		</div>
		<?php endwhile; ?>
		<div class="page">
			<?php wp_pagenavi(); ?>
		</div>
		<?php endif; ?>
	</div> 
	<?php get_template_part( 'address' ); ?>
	<?php get_footer(); ?>
	<script type="text/javascript">
	onload = function () {
		for (var lnk = document.links, j = 0; j < lnk.length; j++)
			if (lnk [j].href == document.URL) lnk [j].style.color = '#fff';

			if (document.location.href == 'http://localhost/gelana/category/ofisy-i-banki/') document.getElementById('bt1').style.background = "url('/gelana/wp-content/themes/gelana/images/ofisy-i-banki-2.jpg')";

			if (document.location.href == 'http://localhost/gelana/category/torgovye-i-obshhestvennye-zony/') document.getElementById('bt2').style.background = "url('/gelana/wp-content/themes/gelana/images/torgovye-i-obshhestvennye-zony-2.jpg')";

			if (document.location.href == 'http://localhost/gelana/category/doma-i-kvartiry/') document.getElementById('bt3').style.background = "url('/gelana/wp-content/themes/gelana/images/doma-i-kvartiry-2.jpg')";

			if (document.location.href == 'http://localhost/gelana/category/kafe-i-restorany/') document.getElementById('bt4').style.background = "url('/gelana/wp-content/themes/gelana/images/kafe-i-restorany-2.jpg')";

			if (document.location.href == 'http://localhost/gelana/category/gostinicy/') document.getElementById('bt5').style.background = "url('/gelana/wp-content/themes/gelana/images/gostinicy-2.jpg')";

			if (document.location.href == 'http://localhost/gelana/category/gosudarstvennye-uchrezhdenija/') document.getElementById('bt6').style.background = "url('/gelana/wp-content/themes/gelana/images/gosudarstvennye-uchrezhdenija-2.jpg')";
		}
	</script>
</div>	