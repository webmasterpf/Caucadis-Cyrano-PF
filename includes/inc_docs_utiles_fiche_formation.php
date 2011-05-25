<?php
/* 
 * Documents utiles joints à la fiche formation
 * + les derniers evenements liés
 */

?>
<?php if ($node->field_fiche_programme[0]['view']
        OR $node->field_lien_utile_ficheform[0]['view']
        OR $node->field_lien_utile_ficheform[1]['view']
        OR $node->field_lien_utile_ficheform[2]['view']
        OR $node->field_lien_utile_ficheform[3]['view']
        ) {

//Affichage de la vue pour les docs utiles
$viewname = 'Documents_utiles_fiche_formation';
$view = views_get_view ($viewname);
$view->set_display('block_1');


//Exécution de le vue
$view->pre_execute();
$view->execute();

if ($view->result) {
  // S'il y a un resultat on récupère le titre (ajoute tag h3, et le contenu)
  $output = '<div id="docs-utiles-fiche-formation"><h3>'.$view->get_title().'</h3>' . $view->render().'</div>';
}

//Affiche la vue
print $output;
}


