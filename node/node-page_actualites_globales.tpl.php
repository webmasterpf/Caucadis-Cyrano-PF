<?php
/* Template pour node.tpl page actualités globales - 7 blocs
*/?>
<!--______________NODE TPL POUR PAGE-ACTU-GLOBALE.TPL CUSTOM________________ -->
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
            <!--______________BLOC REVUE DE PRESSE________________ -->
            <div class="bloc_actu_globale bloc_rp">
                                        <?php
                                        $theme_path = drupal_get_path('theme', 'cyrano_ca'); 
                                        include ($theme_path.'/includes/inc_vue_actu_globale_rp.php');
                                        include ($theme_path.'/includes/inc_vue_actu_globale_items_rp.php');

                                        ?>
            </div>

            <!--______________BLOC ANNONCE________________ -->
            <div class="bloc_actu_globale bloc_annonce">
                                        <?php
                                        $theme_path = drupal_get_path('theme', 'cyrano_ca'); 
                                        include ($theme_path.'/includes/inc_vue_actu_globale_annonce.php');
                                        include ($theme_path.'/includes/inc_vue_actu_globale_items_annonce.php');

                                        ?>
            </div>


            <!--______________BLOC SORTIE________________ -->
            <div class="bloc_actu_globale bloc_sortie_action">
                                        <?php
                                        $theme_path = drupal_get_path('theme', 'cyrano_ca'); 
                                        include ($theme_path.'/includes/inc_vue_actu_globale_sortie.php');
                                        include ($theme_path.'/includes/inc_vue_actu_globale_items_sortie.php');

                                        ?>

            </div>
            <!--______________BLOC PROJET________________ -->
            <div class="bloc_actu_globale bloc_projet">
                                        <?php
                                        $theme_path = drupal_get_path('theme', 'cyrano_ca'); 
                                        include ($theme_path.'/includes/inc_vue_actu_globale_projet.php');
                                        include ($theme_path.'/includes/inc_vue_actu_globale_items_projet.php');

                                        ?>
            </div>

            <!--______________BLOC INNOVATIONS________________ -->
            <div class="bloc_actu_globale bloc_innovation">
                                        <?php
                                        $theme_path = drupal_get_path('theme', 'cyrano_ca'); 
                                        include ($theme_path.'/includes/inc_vue_actu_globale_innovation.php');
                                        include ($theme_path.'/includes/inc_vue_actu_globale_items_innovation.php');

                                        ?>
            </div>

            <!--______________BLOC INTERVENANTS________________ -->
            <div class="bloc_actu_globale bloc_intervenant">
                                        <?php
                                        $theme_path = drupal_get_path('theme', 'cyrano_ca'); 
                                        include ($theme_path.'/includes/inc_vue_actu_globale_intervenant.php');
                                        include ($theme_path.'/includes/inc_vue_actu_globale_items_intervenant.php');

                                        ?>
            </div>

            <!--______________BLOC MINI-STAGE________________ -->
            <div class="bloc_actu_globale bloc_mini_stage">
                                        <?php
                                        $theme_path = drupal_get_path('theme', 'cyrano_ca'); 
                                        include ($theme_path.'/includes/inc_vue_actu_globale_mini_stage.php');
                                        include ($theme_path.'/includes/inc_vue_actu_globale_items_mini_stage.php');

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