<?php
/* Template pour node.tpl page actualités globales - 7 blocs
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
        <div id="bloc-actu-sortie-action">
        <?php
 global $theme_path;
include ($theme_path.'/includes/inc_vue_actu_globale_sortie.php');
include ($theme_path.'/includes/inc_vue_actu_globale_items_sortie.php');

?>
      
        </div>
      

        <?php if ($terms): ?>
        <div class="taxonomy"><?php //print $terms; ?></div>
        <?php endif;?>

        <?php if ($links): ?>
        <div class="links"> <?php //print //$links; ?></div>
        <?php endif; ?>

    </div> <!-- /node-inner -->
</div> <!-- /node-->