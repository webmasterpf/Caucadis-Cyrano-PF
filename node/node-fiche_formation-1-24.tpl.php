<?php
/* Template pour node.tpl fiche formation selon tid - Enseignement Techno
 * PROD = VID 1 TID 17
 * devient 1-24 avec nouveaux tags
*/?>
<!--______________NODE TPL POUR FICHE-FORMATION.TPL CUSTOM________________ -->
<div class="node <?php print $classes; ?>" id="node-<?php print $node->nid; ?>">
    <div class="node-inner">
             <?php print $picture; ?>

            <?php if ($submitted): ?>
            <span class="submitted"><?php print $submitted; ?></span>
            <?php endif; ?>
<!-- ZONE EN TETE DE LA FICHE FORMATION -->
<div id="entete-fiche-formation" class="fiche-formation-techno">
    <div id="illustration-slider">
         <?php
 $theme_path = drupal_get_path('theme', 'cyrano_ca'); 
include ($theme_path.'/includes/inc_vue_slider_illustration_fiche_formation.php');

?>    </div><!-- /illustration-slider -->
<div id="intro-fiche-formation" class="fiche-formation-techno-bg">
     <?php if ($title): /*copier le titre dans la colonne desirée*/?>
            <h1 class="titre_fiche-formation titre-techno"><?php print $title; ?></h1>
            <?php endif; ?>
            <br/>
             <?php if ($node->field_intro_ficheform[0]['view']): ?>
                    <?php  print $node->field_intro_ficheform[0]['view'] /*intro fiche formation*/ ?>
             <?php endif; ?>

</div>


</div><!-- /entete-fiche-formation -->

<br clear="all">
<hr class="fin-entete-fiche fiche-formation-techno">
  

            
<br clear="all">
        <!--______________COLONNE 1________________ -->
        <div id="colonne-infos-vdl" class="fiche-formation-techno">
        <?php
 $theme_path = drupal_get_path('theme', 'cyrano_ca'); 
include ($theme_path.'/includes/inc_docs_utiles_fiche_formation.php');

?>
        </div><!-- fin colonne -->

        <!--______________COLONNE 2________________ -->
        <div id="colonne-intro-complement" class="fiche-formation-techno">
        <?php
 $theme_path = drupal_get_path('theme', 'cyrano_ca'); 
include ($theme_path.'/includes/inc_intro2_fiche_formation.php');

?>
        </div><!-- fin colonne -->

        <!--______________COLONNE 3________________ -->
        <div id="colonne-fiche-formation" class="fiche-formation-techno">
  <div class="content">
                <?php   print $node->content['body']['#value'];/*déplacer le contenu dans la colonne désirée*/ ?>
            </div>
        </div><!-- fin colonne -->

       
      

        <?php if ($terms): ?>
        <div class="taxonomy"><?php //print $terms; ?></div>
        <?php endif;?>

        <?php if ($links): ?>
        <div class="links"> <?php //print //$links; ?></div>
        <?php endif; ?>

    </div> <!-- /node-inner -->
</div> <!-- /node-->