<?php
/*
 * Inclusion de la vue pour bloc actu global
 * dans le node pour utiliser le node.tpl
 * block 1 = sorties-actions
 * block 2 = projet
 * block 3 = innovations
 * block 4 = intervenants
 * block 5 = mini-stage
 */

?>
<?php  

$viewname_ag7 = 'Vue_actu_globale';
$view = views_get_view ($viewname_ag7);
$view->set_display('block_7');


//Exécution de le vue
$view->pre_execute();
$view->execute();

if ($view->result) {
  // S'il y a un resultat on récupère le titre (ajoute tag h3, et le contenu)
  $output = '<div id="actu_globale_annonce"><h3>'.$view->get_title().'</h3>' . $view->render().'</div>';
}

//Affiche la vue
print $output;

?>