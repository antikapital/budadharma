<?php
/*
 *  Preprocess page.tpl.php to inject the $search_box variable back into D7.
 */
function budadharma_preprocess_page(&$variables){
  $search_box = drupal_render(drupal_get_form('search_form'));
  $variables['search_box'] = $search_box;
}

function budadharma_form_alter(&$form, &$form_state, $form_id) {
  if ($form_id == 'search_form') {
    $form['#attributes']['class'][] = 'navbar-form';
    $form['#attributes']['role'][] = 'search';
  }
}

