<?php
  $post = $wp_query->post;
 
  if (in_category('ofisy-i-banki')) {
      include(TEMPLATEPATH.'/single-ofisy-i-banki.php');
  } 		
 		
	if (in_category('torgovye-i-obshhestvennye-zony')) {
      include(TEMPLATEPATH.'/single-torgovye-i-obshhestvennye-zony.php');
  }
 
  if (in_category('doma-i-kvartiry')) {
      include(TEMPLATEPATH.'/single-doma-i-kvartiry.php');
  }

  if (in_category('kafe-i-restorany')) {
      include(TEMPLATEPATH.'/single-kafe-i-restorany.php');
  }

  if (in_category('gostinicy')) {
      include(TEMPLATEPATH.'/single-gostinicy.php');
  }

  if (in_category('gosudarstvennye-uchrezhdenija')) {
      include(TEMPLATEPATH.'/single-gosudarstvennye-uchrezhdenija.php');
  }
?>