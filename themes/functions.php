<?php
/**
 * Helpers for theming, available for all themes in their template files and functions.php.
 * This file is included right before the themes own functions.php
 */
 

/**
 * Print debuginformation from the framework.
 */
function get_debug() {
  $da = CDalek::Instance();  
  $html = null;
  if(isset($da->config['debug']['db-num-queries']) && $da->config['debug']['db-num-queries'] && isset($da->db)) {
    $html .= "<p>Database made " . $da->db->GetNumQueries() . " queries.</p>";
  }    
  if(isset($da->config['debug']['db-queries']) && $da->config['debug']['db-queries'] && isset($da->db)) {
    $html .= "<p>Database made the following queries.</p><pre>" . implode('<br/><br/>', $da->db->GetQueries()) . "</pre>";
  }    
  if(isset($da->config['debug']['dalek']) && $da->config['debug']['dalek']) {
    $html .= "<hr><h3>Debuginformation</h3><p>The content of CDalek:</p><pre>" . htmlent(print_r($da, true)) . "</pre>";
  }    
  return $html;
}


/**
 * Prepend the base_url.
 */
function base_url($url) {
  return CDalek::Instance()->request->base_url . trim($url, '/');
}


/**
 * Prepend the theme_url, which is the url to the current theme directory.
 */
function theme_url($url) {
  $da = CDalek::Instance();
  return "{$da->request->base_url}themes/{$da->config['theme']['name']}/{$url}";
}


/**
 * Return the current url.
 */
function current_url() {
  return CDalek::Instance()->request->current_url;
}
