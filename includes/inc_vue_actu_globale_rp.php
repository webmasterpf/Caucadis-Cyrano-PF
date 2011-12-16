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

$viewname_ag6 = 'Vue_actu_globale';
$view = views_get_view ($viewname_ag6);
$viewdisplay_ag6 = $view->set_display('block_6');

//$emptyTextVue = $view->display('block_3')->display_options['empty'];
$emptyText = $view->display_handler->set_option('empty','<div class="table-pole-formations"><p>Pas de contenu à afficher pour le moment.</p></div>');

//Exécution de le vue
$view->pre_execute();
$view->execute();

if (!empty($view->result)) {
  // S'il y a un resultat on récupère le titre (ajoute tag h3, et le contenu)
  $output = '<div id="actu_globale_rp"><h3 class="titre-pole-formation">'.$view->get_title().'</h3>' .$view->preview($viewdisplay_ag6).'</div>';

  //Affiche la vue si contenu
print $output;
}
//sinon affiche texte vide
elseif (empty($view->result)) {
    //Formatage du texte vide,ajout du titre de la vue
     $outputEmpty = '<div id="actu_globale_rp"><h3 class="titre-pole-formation">'.$view->get_title().'</h3>' .$emptyText.'</div>';
    // drupal_set_message('$EmptyTextVue : '.$emptyTextVue,'status');
     //Affichage du texte vide
  print $outputEmpty;
}

?>