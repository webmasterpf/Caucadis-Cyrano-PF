<!--______________NODE TPL POUR TdC PAGE VDL LISTE ARCHIVES CUSTOM________________ -->
<div class="node <?php print $classes; ?>" id="node-<?php print $node->nid; ?>">
  <div class="node-inner">
<!--______________COLONNE GAUCHE 1________________ -->
  <!-- <pre> <?php //print_r($node); ?> </pre>-->   <!-- listage des variables du $content -->
<div id="col_G1" class="vdl_archives_G1">
     <?php if ($title): /*insertion du titre de la page et style differencié*/?>
     <h1 class="titre_vdl"><?php print $title; ?></h1>
     <br clear="all"/>
    <?php endif; ?>
              <?php
              global $theme_path;
              include ($theme_path.'/includes/inc_region_col_G1.php');
              ?>
      
       <!-- Deco page-->
    <?php  print $node->field_image_deco_lycee[0]['view'] /*Image deco page lycee*/ ?>
</div>
<!--______________COLONNE GAUCHE 2________________ -->
<div id="col_G2" class="vdl_archives_G2">
     <?php if ($submitted): ?>
      <span class="submitted"><?php print $submitted; ?></span>
    <?php endif; ?>
    <?php
     /*insertion du contenu du corps de la page*/
      print $node->content['body']['#value'];
      print $node->field_vue_liste_vdl[0]['view'];/*Les vdl archives et en cours*/
     /*Pour les termes Sortie : 15 - Europe : 13 - Partenaires : 14 */
      ?>
     <!-- retour haut selon resolution de l'ecran 
          <a href="#general" id="retour_haut">Haut de page</a>-->
</div>
<!--______________COLONNE GAUCHE 3________________ -->
   
<div id="col_G3" class="vdl_archives_G3">
     <?php print $picture; ?>

   

    <div class="content">

       

           <?php
      global $theme_path;
      include ($theme_path.'/includes/inc_vue_caucadis_actu.php');
              ?>
    </div>

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