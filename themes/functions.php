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
  if(isset($da->config['debug']['display-dalek'])) {
    $html = "<hr><h3>Debuginformation</h3><p>The content of CDalek:</p><pre>" . htmlent(print_r($da, true)) . "</pre>";
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
* Return the current url.
*/
function current_url() {
  return CDalek::Instance()->request->current_url;
}


