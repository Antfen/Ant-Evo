<?php

/**
 * @file
 * Template overrides as well as (pre-)process and alter hooks for the
 * Ant Omega theme.
 */

function yourtheme_preprocess_page(&$vars) {
  if(drupal_is_front_page()) {
    drupal_add_js(drupal_get_path('theme', 'ant_omega') . '/js/jquery-2.1.3.min.js');
  }
}


