<?php
/*
 * Inclusion de la vue pour slider illus fiche formation
 * dans le node pour utiliser le node.tpl
 */

?>
<?php  

$viewname = 'Diapo_slider_fiche_formation';
$view = views_get_view ($viewname);
$view->set_display('block_1');


//Exécution de le vue
$view->pre_execute();
$view->execute();

if ($view->result) {
  // S'il y a un resultat on récupère le titre (ajoute tag h3, et le contenu)
  $output = '<div id="slider-fiche"><h3>'.$view->get_title().'</h3>' . $view->render().'</div>';
}

//Affiche la vue
print $output;

?>