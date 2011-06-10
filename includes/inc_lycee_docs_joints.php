<?php
/* 
 * Inclus la vue Documents joints pour page lycee tpl
 * conditionné à la présence de champs CCK non vide
 * Affichage selon argument : nid
 */

?>
<?php  if (
$node->field_fichier_joint_lycee[0]['view']
        OR $node->field_fichier_joint_lycee[1]['view']
        OR $node->field_fichier_joint_lycee[2]['view']
        OR $node->field_lien_page_lycee[0]['view']
        OR $node->field_lien_page_lycee[1]['view']
        OR $node->field_lien_page_lycee[2]['view']
): ?>
<div id="bloc_docs_utiles_plycee">
      
    <?php

$viewname = 'Documents_utiles_lycee';
$view = views_get_view ($viewname);
$view->set_display('block_1');


//Exécution de le vue
$view->pre_execute();
$view->execute();

if ($view->result) {
  // S'il y a un resultat on récupère le titre (ajoute tag h3, et le contenu)
  $output = '<div id="ac"><h3>'.$view->get_title().'</h3>' . $view->render().'</div>';
}

//Affiche la vue
print $output;

?>
</div>
<?php endif;?>