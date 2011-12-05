<?php
/*
 * Inclusion de la vue pour bloc vdl global
 * dans le node pour utiliser le node.tpl
 * block 1 = projets
 * block 2 = sorties
 * block 3 = innovation
 * block 4 = intervenant
 * block 5 = mini-stage
 */

?>
<?php  

$viewname_vdlg4 = 'vdl_global';
$view = views_get_view ($viewname_vdlg4);
$view->set_display('block_4');


//Exécution de le vue
$view->pre_execute();
$view->execute();

if ($view->result) {
  // S'il y a un resultat on récupère le titre (ajoute tag h3, et le contenu)
  $output = '<div id="bloc_vdl" class="vdl_intervenant"><h3>'.$view->get_title().'</h3>' . $view->render().'</div>';
}

//Affiche la vue
print $output;

?>