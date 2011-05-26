<?php
/* 
 * Inclus la vue Documents joints pour page lycee tpl
 * conditionné à la présence de champs CCK non vide
 */

?>
<?php  if (
$node->field_doc_joints[0]['view']
        OR $node->field_doc_joints[1]['view']
        OR $node->field_doc_joints[2]['view']
        OR $node->field_lien_page_lycee[0]['view']
        OR $node->field_lien_page_lycee[1]['view']
        OR $node->field_lien_page_lycee[2]['view']
): ?>
<div id="bloc_docs_utiles_plycee">
        <?php  print views_embed_view('Fichiers_doc_joints','page_1',$view_args);/*Liste des fichiers joints*/ ?>
</div>
<?php endif;?>