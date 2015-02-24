<?php
/* 
 * Permet d'avoir un template spécial pour le webform
 * WEBFORM-FORM.TPL GENERIK si besoin possible faire theme pour webform selon webform-form-NID.tpl.php
 * ATTENTION au node-webform.tpl qui parasite l'affichage d'un webform bloc
 * si celui-ci doit présenter tout le webform node..il faut alors choisir d'afficher seulement le formulaire
 */
?>
<!-- NODE-WEBFORM.TPL FORMULAIRE PREPAS -->
<div class="node<?php if ($sticky) { print " sticky"; } ?><?php if (!$status) { print " node-unpublished"; } ?>">
   
     <!--______________COLONNE GAUCHE 1________________ -->
  
<div id="" class="dossier-prepas">
     <?php if ($title): /*insertion du titre de la page et style differencié*/?>
     <h1 class="titre_pl"><?php print $title; ?></h1>
     <br clear="all"/>
    <?php endif; ?>
      
     
    <table>
    <tr>
    <td><?php print $node->content['body']['#value']; ?></td>
    </tr>
    <tr>
    <td><?php
  // If editing or viewing submissions, display the navigation at the top.
  if (isset($form['submission_info']) || isset($form['navigation'])) {
    print drupal_render($form['navigation']);
    print drupal_render($form['submission_info']);
  }

  // Print out the main part of the form.
  // Feel free to break this up and move the pieces within the array.
  print drupal_render($form['submitted']);

  // Always print out the entire $form. This renders the remaining pieces of the
  // form that haven't yet been rendered above.
  print drupal_render($form);

  // Print out the navigation again at the bottom.
  if (isset($form['submission_info']) || isset($form['navigation'])) {
    unset($form['navigation']['#printed']);
    print drupal_render($form['navigation']);
  } ?></td>
    </tr>
    </table>


</div>

</div><!-- /node -->