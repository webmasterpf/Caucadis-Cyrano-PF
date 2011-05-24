<!-- ______________________ NODE-PAGE_POLE.TPL _______________________ -->
<div class="node <?php print $classes; ?>" id="node-<?php print $node->nid; ?>">
  <div class="node-inner">

    <?php if (!$page): ?>
      <h2 class="title"><a href="<?php //print $node_url; ?>"><?php //print $title; ?></a></h2>
    <?php endif; ?>

    <?php print $picture; ?>

    <?php if ($submitted): ?>
      <span class="submitted"><?php print $submitted; ?></span>
    <?php endif; ?>
<!-- ______________________ PARTIE CUSTOMISEE _______________________ -->
                  <?php if ($title): ?>
                <h1 class="title-page-bloc"><?php print $title; ?></h1>
              <?php endif; ?>
<!-- ______________________ BLOC GAUCHE _______________________ -->
              <div id="bloc-gauche-pole">
                  <?php print $pole_bloc_G; ?>
              </div>
<!-- ______________________ BLOC CENTRE _______________________ -->
              <div id="bloc-centre-pole">
                  <?php print $pole_bloc_C; ?>
              </div>
<!-- ______________________ BLOC DROIT _______________________ -->
              <div id="bloc-droit-pole">
                  <?php print $pole_bloc_D; ?>
              </div>

    <?php if ($terms): ?>
      <div class="taxonomy"><?php //print $terms; ?></div>
    <?php endif;?>

    <?php if ($links): ?> 
      <div class="links"> <?php print $links; ?></div>
    <?php endif; ?>
 <!-- retour haut selon resolution de l'ecran -->
          <!--<a href="#general" id="retour_haut">Haut de page</a>-->
  </div> <!-- /node-inner -->
</div> <!-- /node-->