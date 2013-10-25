<!--______________NODE TPL POUR TdC CONTENU DOC ADMIN CUSTOM________________ -->
<div class="node <?php print $classes; ?>" id="node-<?php print $node->nid; ?>">
  <div class="node-inner">

<!--______________COLONNE 1________________ -->
<div id="col_G2" class="admin_content_G1">
         <?php if ($title): /*insertion du titre de la page et style differencié*/?>
     <h1 class="titre_actualites_content"><?php print $title; ?></h1>
     <br clear="all"/>
    <?php endif; ?>
     
<?php print $picture; ?>
     <?php if ($submitted): ?>
      <span class="submitted"><?php print $submitted; ?></span>
    <?php endif; ?>

        <div class="content">
 <?php
     /*insertion du contenu du corps de la page*/
      print $node->content['body']['#value'];

      ?>
 
    </div>
        
     <!-- retour haut selon resolution de l'ecran 
          <a href="#general" id="retour_haut">Haut de page</a>-->
</div>
<!--______________COLONNE 2________________ -->
   
<div id="col_G3" class="admin_content_G2">
     
 <?php if ($node->field_admin_list_vf[0]['view']): ?>
        <div class="liste-doc-admin">
           <?php  print $node->field_admin_list_vf[0]['view'] /**/ ?>
        </div>
           <?php endif;?>


       <?php
              $theme_path = drupal_get_path('theme', 'cyrano_ca'); 
              include ($theme_path.'/includes/inc_region_col_G2.php');
              ?>

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