<?php
/* 
 * Inclus la vue Documents joints pour page lycee tpl
 * conditionné à la présence de champs CCK non vide
 * Affichage selon argument : nid
 */

?>
<?php  if (
$node->field_liste_autre_vdl[0]['view']
): ?>
<div id="bloc_vdl_autres_evenements">
       
    <?php

$viewname = 'liste_autres_vdl';
$view = views_get_view ($viewname);
$view->set_display('block_1');
$view->args = array($node-> tid);



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