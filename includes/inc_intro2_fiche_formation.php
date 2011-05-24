<?php
/*
 * Inclusion de l'intro 2 fiche formation
 * dans le node pour utiliser le node.tpl
 */

?>
 <?php if ($node->field_pre_content_ficheform[0]['view']): ?>
                    <?php  print $node->field_pre_content_ficheform[0]['view'] /*Intro2*/ ?>

                <?php endif; ?>