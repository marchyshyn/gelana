 <!DOCTYPE html>
<html lang="ru">
 <head>
 <meta charset="utf-8">
 <title>Gelana</title>
 <meta name="viewport" content="width=device-width, initial-scale=1.0">
 <meta name="author" content="Имя автора">
 <meta content="Gelana" />
 <meta content="images.logo.gif" />
 <link href="/gelana/wp-content/themes/gelana/style3.css" rel="stylesheet">
<script type="text/javascript" src="/gelana/wp-content/themes/gelana/fancybox/jquery.easing.1.3.js"></script>
<script type="text/javascript" src="/gelana/wp-content/themes/gelana/fancybox/jquery-1.3.2.min.js"></script>
<script type="text/javascript" src="/gelana/wp-content/themes/gelana/fancybox/jquery.fancybox-1.2.1.pack.js"></script>
<link rel="stylesheet" type="text/css" href="/gelana/wp-content/themes/gelana/fancybox/jquery.fancybox.css" media="screen" />
</head>
<body>
	<script type="text/javascript">
	$(document).ready(function() {
	    $("a.gallery").fancybox();
	});
	</script>
	<div class="contentWrapper">
		<div class="leftColumn"></div>
		<?php get_template_part( 'smallHeader' ); ?>
		<?php get_sidebar(); ?>
		<?php get_template_part( 'topNavBar' ); ?>
		<style>
			#bt3 {
				background: url("/gelana/wp-content/themes/gelana/images/doma-i-kvartiry-2.jpg");
				}
		</style>
		<div class="pageTitle">
			<p><strong>ПОРТФОЛИО ></strong></p>
		</div>
		<div class="subMenu">
			<?php wp_nav_menu('menu=portfolio2'); ?>
		</div>
		<div class="content">
			<?php if(have_posts()) : ?>
			<?php while(have_posts()) : the_post(); ?>
			<div class="post-page">
				<?php the_content() ?>
			</div>
					<?php endwhile; ?>
			<?php endif; ?>
		</div>
		<?php get_template_part( 'address' ); ?>
		<?php get_footer(); ?>
		<script type="text/javascript">
			onload = function () {
			for (var lnk = 'http://www.gelana.ru/category/doma-i-kvartiry/page/2/' )
			if (lnk == document.URL) document.getElementByClassName('subMenu')[2].style.color = '#fff';}
		</script>
	</div>	
</body>
</html>