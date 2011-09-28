<!--______________NODE TPL POUR TdC CONTENU ENTREPRISE LISTE CUSTOM________________ -->
<div class="node <?php print $classes; ?>" id="node-<?php print $node->nid; ?>">
  <div class="node-inner">
<!--______________COLONNE GAUCHE 1________________ -->
  <!-- <pre> <?php //print_r($node); ?> </pre>-->   <!-- listage des variables du $content -->
<div id="col_G1" class="entreprise_content_G1">

         <?php if ($node->field_fichier_joint_entreprise[0]['view']): ?>
        <div id="bloc-actu-lycee">
                   <?php  print $node->field_fichier_joint_entreprise[0]['view']  ?>
        </div>
           <?php endif;?>

      
      
</div>
<br/>
<!--______________COLONNE GAUCHE 2________________ -->
<div id="col_G2" class="entreprise_content_G2">
         <?php if ($title): /*insertion du titre de la page et style differencié*/?>
     <h1 class="titre_vdl"><?php print $title; ?></h1>
     <br clear="all"/>
    <?php endif; ?>
     

     <?php if ($submitted): ?>
      <span class="submitted"><?php print $submitted; ?></span>
    <?php endif; ?>

       <?php
              global $theme_path;
              include ($theme_path.'/includes/inc_region_col_G2.php');
              ?>
     <!-- retour haut selon resolution de l'ecran 
          <a href="#general" id="retour_haut">Haut de page</a>-->
</div>
<!--______________COLONNE GAUCHE 3________________ -->
   
<div id="col_G3" class="entreprise_content_G3">
     <?php print $picture; ?>

   

    <div class="content">
 <?php
     /*insertion du contenu du corps de la page*/
      print $node->content['body']['#value'];

      ?>
       

           <?php if ($node->field_video_entreprise[0]['view']): ?>
        <div id="bloc-actu-lycee">
                   <?php  print $node->field_video_entreprise[0]['view'] /*Vue actus du lycée*/ ?>
        </div>
           <?php endif;?>

          <?php if ($node->field_choix_galerie_vdl[0]['view']): ?>
        <div id="bloc-galerie-vdl">
           <?php  print $node->field_choix_galerie_vdl[0]['view'] /*Vue actus du lycée*/ ?>
        </div>
           <?php endif;?>


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