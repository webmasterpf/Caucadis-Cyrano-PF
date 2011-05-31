<?php
/*
 * Template de vue pour les blocs
 * sur page actu globale.
 */
?>
<?php
// $Id: views-view-unformatted.tpl.php,v 1.6 2008/10/01 20:52:11 merlinofchaos Exp $
/**
 * @file views-view-unformatted.tpl.php
 * Default simple view template to display a list of rows.
 *
 * @ingroup views_templates
 */
?>
<?php if (!empty($title)): ?>
<h3 class="titre-actu-globale titre-projet"><?php print $title; ?></h3>
<?php endif; ?>
<?php foreach ($rows as $id => $row): ?>
  <div class="actu-globale <?php print $classes[$id]; ?>">
    <?php print $row; ?>
  </div>
<hr class="separation-actu-globale sep_rp"/>
<?php endforeach; ?>