<?php
/*
 * Inclusion de la vue pour bloc vdl global
 * dans le node pour utiliser le node.tpl
 * block 2 = sorties-actions
 * block 1 = projet
 * block 3 = innovations
 * block 4 = intervenants
 * block 5 = mini-stage
 */

?>
<?php  

$viewname = 'vdl_global';
$view = views_get_view ($viewname);
$view->set_display('block_5');


//Exécution de le vue
$view->pre_execute();
$view->execute();

if ($view->result) {
  // S'il y a un resultat on récupère le titre (ajoute tag h3, et le contenu)
  $output = '<div id="bloc_vdl_sortie"><h3>'.$view->get_title().'</h3>' . $view->render().'</div>';
}

//Affiche la vue
print $output;

?>