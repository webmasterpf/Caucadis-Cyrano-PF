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

$viewname_vdlg3 = 'vdl_global';
$view = views_get_view ($viewname_vdlg3);
$view->set_display('block_3');
$emptyText = $view->display_handler->set_option('empty','<div class="vdl_innovation"><p>Pas de contenu à afficher en ce moment.</p></div>');

//Exécution de le vue
$view->pre_execute();
$view->execute();

if ($view->result) {
  // S'il y a un resultat on récupère le titre (ajoute tag h3, et le contenu)
  $output = '<div id="bloc_vdl" class="vdl_innovation"><h3>'.$view->get_title().'</h3>' . $view->render().'</div>';
//Affiche la vue
print $output;
}
//sinon affiche texte vide
elseif (empty($view->result)) {
    //Formatage du texte vide,ajout du titre de la vue
     $outputEmpty = '<div  id="bloc_vdl" class="vdl_innovation"><h3 class="titre-h3">'.$view->get_title().'</h3>'.$emptyText.'</div>';
     //drupal_set_message('$EmptyTextVue : '.$emptyTextVue,'status');
     //Affichage du texte vide
  print $outputEmpty;
}
?>