<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="<?php print $language->language ?>" lang="<?php print $language->language ?>" dir="<?php print $language->dir ?>">

  <head>
    <title><?php print $head_title; ?></title>
    <!-- stats-SEO -->
    <meta name="google-site-verification" content="VTSWGgDZbybpI1Xv_VLK1DJPfol9QgkQo-lZpE_TVuU" />
    <META name="y_key" content="e39bf075f1be3621" />
    <meta name="msvalidate.01" content="E2114447554473259DE0996EF11B87E0" />
    <?php print $head; ?>
    <?php print $styles; ?>

    <?php print $scripts; ?>
    <?php
$theme_path = drupal_get_path('theme', 'cyrano_ca'); 
include ($theme_path.'/js/google_font.php');
?>
    <!--<script src="<?php print $base_path . path_to_theme() ?>/js/grayscale_hover.js" type="text/javascript" charset="utf-8"></script>-->
       <!--[if IE]>
      <link rel="stylesheet" type="text/css" href="<?php print $base_path . path_to_theme() ?>/css/for_ie.css" />
      <![endif]-->

  </head>

 <body class="<?php print $body_classes; ?>">

	<div id="general">

    <!-- ______________________ HEADER _______________________ -->
	 <div id="header">

		<div id="header-inner">

        <div id="headHaut">

          <div id="logoHead">
	           <?php if (!empty($logo)): ?>
		           <a href="<?php print $front_page; ?>" title="<?php print t('Home'); ?>" rel="home" id="logo"><img src="<?php print $logo; ?>" alt="<?php print t('Home'); ?>"/></a>
	          <?php endif; ?>
	       </div>

         <div id="menuImg">
              <?php if (!empty($navStatic)): ?>
		           <?php print $navStatic; ?>
	          <?php endif; ?>
          </div>

          </div><!-- /headHaut -->
		 <div id="headBas">

	<?php if (!empty($site_slogan)): ?>
            <div id="site-slogan">
	<?php print $site_slogan; ?>
            </div><!-- /site-slogan -->
            <?php endif; ?>


            <div id="headSearch">
		  <?php if (!empty($search_box)): ?>
		  <?php print $search_box ?>
		  <?php endif; ?>
		  </div><!-- /recherche -->


          <div id="menuHead">
	        <?php if (!empty($menuDyn)): ?>
			   <?php print $menuDyn; ?>
            <?php endif; ?>

          </div><!-- /menuHead -->


		</div><!-- /headBas -->


	  </div> <!-- /header-inner -->
   </div> <!-- /header -->
