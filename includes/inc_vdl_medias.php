<?php
/* 
 * Inclus la vue Documents joints pour page lycee tpl
 * conditionné à la présence de champs CCK non vide
 * Affichage selon argument : nid
 */

?>

 <?php if ($node->field_video_vdl[0]['view']): ?>
        <div id="bloc-medias-vdl">
           <?php  print $node->field_video_vdl[0]['view'] ?>
        </div>
           <?php endif;?>