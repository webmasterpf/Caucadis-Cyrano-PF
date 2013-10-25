<!--______________NODE TPL POUR TdC PAGE ESPACE TPL CUSTOM________________ -->
<div class="node <?php print $classes; ?>" id="node-<?php print $node->nid; ?>">
  <div class="node-inner">
<!--______________COLONNE  1________________ -->
  <!-- <pre> <?php //print_r($node); ?> </pre>-->   <!-- listage des variables du $content -->
<div id="" class="col1_tpl">
     <?php if ($title): /*insertion du titre de la page et style differencié*/?>
     <h1 class="titre_pl"><?php print $title; ?></h1>
     
    <?php endif; ?>
      <br clear="all"/>
            <?php if ($node->field_choix_galerie_vdl[0]['view']): ?>
        <div id="bloc-galerie-vdl">
           <?php  print $node->field_choix_galerie_vdl[0]['view'] /*Galerie*/ ?>
        </div>
           <?php endif;?>
      <br clear="all"/>
    <?php if ($node->field_video_vdl[0]['view']): ?>
        <div class="video-espace">
           <?php  print $node->field_video_vdl[0]['view'] /*Video*/ ?>
        </div>
           <?php endif;?>
</div>
<!--______________COLONNE 2________________ -->
<div id="" class="col2_tpl">
     <?php if ($submitted): ?>
      <span class="submitted"><?php print $submitted; ?></span>
    <?php endif; ?>
    <?php
     /*insertion du contenu du corps de la page*/
      print $node->content['body']['#value']
      ?>
      
        <?php if ($node->field_liste_espace[0]['view']): ?>
        <div class="liste-formation">
           <?php  print $node->field_liste_espace[0]['view']?>
        </div>
           <?php endif;?>
      
      <!-- regions custom -->
           <?php
              $theme_path = drupal_get_path('theme', 'cyrano_ca'); 
              include ($theme_path.'/includes/inc_region_col_G1.php');
              ?>
           <?php
              $theme_path = drupal_get_path('theme', 'cyrano_ca'); 
              include ($theme_path.'/includes/inc_region_col_G2.php');
              ?>
      
     <!-- retour haut selon resolution de l'ecran -->
          <!--<a href="#general" id="retour_haut">Haut de page</a>-->
          <?php if ($terms): ?>
      <div class="taxonomy"><?php //print $terms; ?></div>
    <?php endif;?>

    <?php if ($links): ?>
      <div class="links"> <?php //print $links; ?></div>
    <?php endif; ?>
</div>
  

  </div> <!-- /node-inner -->
</div> <!-- /node-->
<!--______________FIN NODE TPL CUSTOM________________ -->