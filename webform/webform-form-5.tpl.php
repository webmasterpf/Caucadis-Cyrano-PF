<?php
/* 
 * Permet d'avoir un template spécial pour le webform
 * WEBFORM-FORM.TPL GENERIK si besoin possible faire theme pour webform selon webform-form-NID.tpl.php
 * Theming de wenform afficher comme un node avec un page.tpl appliqué
 */

?>

  <!-- ££££££££££££££££££££££££££££££££££££££££££££££££££££££££££££££££££££££££££ -->         
            <!-- WEBFORM-FORM.TPL Formulaire général -->
<div>
   
     <!--______________COLONNE GAUCHE 1________________ -->
  
<div id="col_G1" class="colG1_webform">
    
    <h1 class="titre_pl"><?php print $form['#node']->title ?></h1>
      
      <br clear="all"/>
   
     
</div>
<!--______________COLONNE GAUCHE 2________________ -->
<div id="col_G2" class="colG2_webform">
     <?php if ($submitted) { ?>
    <span class="submitted"><?php print $submitted?></span>
  <?php }; ?>

 

  <div class="content">
    <table>
    <tr>
        <td><?php print $form['#node']->body;
//print $node->content['body']['#value']; ?></td>
    </tr>
    <tr>
        <td>
            <?php
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
  } ?>
            
        </td>
    </tr>
    </table>
  </div>
   
    <?php if ($links): ?>
    <div class="links"> <?php print $links; ?></div>
  <?php endif; ?>

     <?php if ($terms) { ?>
    <span class="taxonomy"><?php print $terms?></span>
  <?php }; ?>

</div>
<!--______________COLONNE GAUCHE 3________________ -->

<div id="col_G3" class="colG3_webform">
     <?php print $picture; ?>



    <div class="content">

        
           
    </div>

    <?php if ($terms): ?>
      <div class="taxonomy"><?php //print $terms; ?></div>
    <?php endif;?>

   

</div><!-- FIN WEBFORM-FORM.TPL -->
<!-- ££££££££££££££££££££££££££££££££££££££££££££££££££££££££££££££££££££££££££ -->         
<?php print dpm($form);?>