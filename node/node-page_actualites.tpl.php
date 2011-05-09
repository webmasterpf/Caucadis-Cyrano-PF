<!-- NODE.TPL PAGE ACTUALITES GENERALES POUR BLOCS -->
<?php
/*
 * Ce template permet de mettre en place les blocs pour l'inclusion des vues-blocs
 * pour chaque type d'évènement relaté.Penser à créer les régions dans template.php si besoin
 */?>
<div class="node <?php print $classes; ?>" id="node-<?php print $node->nid; ?>">
  <div class="node-inner">

        <?php if ($title): /*copier le titre dans la colonne desirée*/?>
            <h1 class="titre_page"><?php print $title; ?></h1>
            <?php endif; ?>

    <?php
/*
 * Inclusion de la vue pour les sorties
 */?>
    <?php if ($node->nom_du_champ[0]['view']): ?>
            <div id="nom-css">
                                 <?php  print $node->nom_du_champ[0]['view']  ?>
            </div>
                         <?php endif;?>


    <?php print $picture; ?>

    <?php if ($submitted): ?>
      <span class="submitted"><?php print $submitted; ?></span>
    <?php endif; ?>

    <div class="content">
      <?php print $content; ?>
    </div>

    <?php if ($terms): ?>
      <div class="taxonomy"><?php print $terms; ?></div>
    <?php endif;?>

    <?php if ($links): ?> 
      <div class="links"> <?php print $links; ?></div>
    <?php endif; ?>

  </div> <!-- /node-inner -->
</div> <!-- /node-->