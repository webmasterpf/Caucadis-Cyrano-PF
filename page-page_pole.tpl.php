<?php
$theme_path = drupal_get_path('theme', 'cyrano_ca'); 
include ($theme_path.'/includes/inc_header.php');
?>
<!-- ______________________ PAGE POLE GLOBAL _______________________ -->
  <!-- ______________________ CONTENU _______________________ -->
  
    <div id="contentPage">


        <div id="content-inner-vdl-globale">

			<?php if ($breadcrumb || $title ||$content_top ): ?>
            <div id="content-top">
			 <?php print $breadcrumb; ?>
			 
              <?php print $content_top; ?>
            </div> <!-- /#content-top -->
            <?php endif; ?>

              <!-- ______________________ CONTENT TOP NODE_______________________ -->
               <?php if ($content_top_node): ?>
            <div id="content-top-node">
	              <?php print $content_top_node; ?>
            </div> <!-- /#content-top-node -->
            <?php endif; ?>
            
          <?php if ($mission || $messages || $help || $tabs): ?>
            <div id="content-header">

              <?php if ($mission): ?>
                <div id="mission"><?php print $mission; ?></div>
              <?php endif; ?>

              <?php print $messages; ?>

              <?php print $help; ?>

              <?php if ($tabs): ?>
                <div class="tabs"><?php print $tabs; ?></div>
              <?php endif; ?>

            </div> <!-- /#content-header -->
          <?php endif; ?>
		  <!-- ______________________ CONTENU CENTRAL _______________________ -->
                  <div id="middle-content-pole" class="middle-vdl-global">
            <?php print $content; ?>
              <?php print $feed_icons; ?>
          </div> <!-- /#content-area -->



          <?php if ($content_bottom): ?>
            <div id="content-bottom">
              <?php print $content_bottom; ?>
            </div><!-- /#content-bottom -->
          <?php endif; ?>

      </div> <!-- /content-inner /content -->

        <?php if (!empty($primary_links) or !empty($secondary_links)): ?>
          <div id="navigation" class="menu <?php if (!empty($primary_links)) { print "with-main-menu"; } if (!empty($secondary_links)) { print " with-sub-menu"; } ?>">
            <?php if (!empty($primary_links)){ print theme('links', $primary_links, array('id' => 'primary', 'class' => 'links main-menu')); } ?>
            <?php if (!empty($secondary_links)){ print theme('links', $secondary_links, array('id' => 'secondary', 'class' => 'links sub-menu')); } ?>
          </div> <!-- /navigation -->
        <?php endif; ?>





    	  <br clear="all" />
	 </div> <!-- /contentPage -->

	<?php
$theme_path = drupal_get_path('theme', 'cyrano_ca'); 
include ($theme_path.'/includes/inc_footer.php');
?> 