<?php
/* Template pour node.tpl page VDL globale
*/?>
<!--______________NODE TPL POUR PAGE-VDL-GLOBALE.TPL CUSTOM________________ -->
<div class="node <?php print $classes; ?>" id="node-<?php print $node->nid; ?>">
    <div class="node-inner">
             <?php print $picture; ?>

            <?php if ($submitted): ?>
            <span class="submitted"><?php print $submitted; ?></span>
            <?php endif; ?>

   <?php if ($title): /*copier le titre dans la colonne desirée*/?>
            <h1 class="titre_page"><?php print $title; ?></h1>
            <?php endif; ?>

            <div class="content">
                <?php   print $node->content['body']['#value'];/*déplacer le contenu dans la colonne désirée*/ ?>
            </div>
            <br />
        <!--______________COLONNE 1________________ -->
        <div id="colonne-sortie-action">
        <?php
 $theme_path = drupal_get_path('theme', 'cyrano_ca'); 
include ($theme_path.'/includes/inc_vue_vdl_globale_sortie.php');

?>
        </div><!-- fin colonne -->

        <!--______________COLONNE 2________________ -->
        <div id="colonne-projet">
        <?php
 $theme_path = drupal_get_path('theme', 'cyrano_ca'); 
include ($theme_path.'/includes/inc_vue_vdl_globale_projet.php');

?>
        </div><!-- fin colonne -->

        <!--______________COLONNE 3________________ -->
        <div id="colonne-intervenants">
        <?php
 $theme_path = drupal_get_path('theme', 'cyrano_ca'); 
include ($theme_path.'/includes/inc_vue_vdl_globale_intervenants.php');

?>
        </div><!-- fin colonne -->

        <!--______________COLONNE 4________________ -->
        <div id="colonne-innovations">
        <?php
 $theme_path = drupal_get_path('theme', 'cyrano_ca'); 
include ($theme_path.'/includes/inc_vue_vdl_globale_innovations.php');

?>
        </div><!-- fin colonne -->

       <!--______________COLONNE 5________________ -->
        <div id="colonne-mini-stage">
        <?php
 $theme_path = drupal_get_path('theme', 'cyrano_ca'); 
include ($theme_path.'/includes/inc_vue_vdl_globale_mini-stage.php');

?>
        </div><!-- fin colonne -->

      

        <?php if ($terms): ?>
        <div class="taxonomy"><?php //print $terms; ?></div>
        <?php endif;?>

        <?php if ($links): ?>
        <div class="links"> <?php //print //$links; ?></div>
        <?php endif; ?>

    </div> <!-- /node-inner -->
</div> <!-- /node-->