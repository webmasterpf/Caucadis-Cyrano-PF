<!-- ______________________ FOOTER _______________________ -->
      <?php if(!empty($footer_message) || !empty($footer_block)): ?>
        <div id="footer">
          <?php print $footer_message; ?>
          <?php print $footer_block; ?>
        </div> <!-- /footer -->
      <?php endif; ?>

        <div id="bloc_stats">
          <?php
$theme_path = drupal_get_path('theme', 'cyrano_ca'); 
include ($theme_path.'/js/code_stats.php');
?>
     </div>
    </div> <!-- /general OR /page -->
	<?php print $closure ?>
  </body>
</html>