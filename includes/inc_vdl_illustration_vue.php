<?php
/* 
 * Inclus la vue Illustration VDL
 * Affichage selon argument : nid
 */

?>
<?php   if ($node->field_illustration_vdl[0]['view']): ?>
<div id="bloc_illustration_vdl">
       
    <?php

$viewname2 = 'Illustration_contenu';
$view = views_get_view ($viewname);
$view->dom_id = 'a';
$viewdisplay = $view->set_display('block_1');
$args = $view->set_arguments(array($node->nid));


//Exécution de le vue
$view->pre_execute();
$view->execute();

if ($view->result) {
  // S'il y a un resultat on récupère le titre (ajoute tag h3, et le contenu)
  $output = '<div id="ac"><h3>'.$view->get_title().'</h3>' . $view->preview($viewdisplay, $args).'</div>';
}

//Affiche la vue
print $output;

?>
</div>
<?php endif;?>

