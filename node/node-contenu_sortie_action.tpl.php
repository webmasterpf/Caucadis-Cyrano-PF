<!--______________NODE TPL POUR TdC SORTIE-ACTION CUSTOM________________ -->
<div class="node <?php print $classes; ?>" id="node-<?php print $node->nid; ?>">
  <div class="node-inner">
<!--______________COLONNE GAUCHE 1________________ -->
  <!-- <pre> <?php //print_r($node); ?> </pre>-->   <!-- listage des variables du $content -->
<div id="col_G1" class="colG1_contenu_sortie">
     <?php if ($title): /*insertion du titre de la page et style differencié*/?>
     <h1 class="titre_pl"><?php print $title; ?></h1>
     
    <?php endif; ?>
      <br clear="all"/>
      
        <?php //inclusion de la vue Docs joints
global $theme_path;
include ($theme_path.'/includes/inc_vdl_docs_joints.php');
?>

       <br clear="all"/>
 <?php //inclusion de la vue Autres evenements
global $theme_path;
include ($theme_path.'/includes/inc_vdl_autres_evenements.php');
?>


</div>
<!--______________COLONNE GAUCHE 2________________ -->
<div id="col_G2" class="colG2_contenu_sortie">
     <?php if ($submitted): ?>
      <span class="submitted"><?php print $submitted; ?></span>
    <?php endif; ?>

       <?php if ($node->field_choix_galerie_vdl[0]['view']): ?>
        <div id="bloc-galerie-vdl">
           <?php  print $node->field_choix_galerie_vdl[0]['view'] /**/ ?>
        </div>
           <?php endif;?>
 <br clear="all"/>
<?php
global $theme_path;
include ($theme_path.'/includes/inc_vdl_medias.php');
?>
 
     <!-- retour haut selon resolution de l'ecran -->
          <!--<a href="#general" id="retour_haut">Haut de page</a>-->
</div>
<!--______________COLONNE GAUCHE 3________________ -->
   
<div id="col_G3" class="colG3_contenu_sortie">
     <?php print $picture; ?>
    <div class="content">
   <?php
     /*insertion du contenu du corps de la page*/
      print $node->content['body']['#value']
      ?>
       
  
        
        <br clear="all"/>
         
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