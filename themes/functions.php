<?php
/**
 * Helpers for theming, available for all themes in their template files and functions.php.
 * This file is included right before the themes own functions.php
 */
 

/**
 * Print debuginformation from the framework.
 */
function get_debug() {
  // Only if debug is wanted.
  $da = CDalek::Instance();  
  if(empty($da->config['debug'])) {
    return;
  }
  
  // Get the debug output
  $html = null;
  if(isset($da->config['debug']['db-num-queries']) && $da->config['debug']['db-num-queries'] && isset($da->db)) {
    $flash = $da->session->GetFlash('database_numQueries');
    $flash = $flash ? "$flash + " : null;
    $html .= "<p>Database made $flash" . $da->db->GetNumQueries() . " queries.</p>";
  }    
  if(isset($da->config['debug']['db-queries']) && $da->config['debug']['db-queries'] && isset($da->db)) {
    $flash = $da->session->GetFlash('database_queries');
    $queries = $da->db->GetQueries();
    if($flash) {
      $queries = array_merge($flash, $queries);
    }
    $html .= "<p>Database made the following queries.</p><pre>" . implode('<br/><br/>', $queries) . "</pre>";
  }    
  if(isset($da->config['debug']['timer']) && $da->config['debug']['timer']) {
    $html .= "<p>Page was loaded in " . round(microtime(true) - $da->timer['first'], 5)*1000 . " msecs.</p>";
  }    
  if(isset($da->config['debug']['dalek']) && $da->config['debug']['dalek']) {
    $html .= "<hr><h3>Debuginformation</h3><p>The content of CDalek:</p><pre>" . htmlent(print_r($da, true)) . "</pre>";
  }    
  if(isset($da->config['debug']['session']) && $da->config['debug']['session']) {
    $html .= "<hr><h3>SESSION</h3><p>The content of CDalek->session:</p><pre>" . htmlent(print_r($da->session, true)) . "</pre>";
    $html .= "<p>The content of \$_SESSION:</p><pre>" . htmlent(print_r($_SESSION, true)) . "</pre>";
  }    
  return $html;
}


/**
 * Get messages stored in flash-session.
 */
function get_messages_from_session() {
  $messages = CDalek::Instance()->session->GetMessages();
  $html = null;
  if(!empty($messages)) {
    foreach($messages as $val) {
      $valid = array('info', 'notice', 'success', 'warning', 'error', 'alert');
      $class = (in_array($val['type'], $valid)) ? $val['type'] : 'info';
      $html .= "<div class='$class'>{$val['message']}</div>\n";
    }
  }
  return $html;
}


/**
 * Prepend the base_url.
 */
function base_url($url=null) {
  return CDalek::Instance()->request->base_url . trim($url, '/');
}


/**
 * Create a url to an internal resource.
 */
function create_url($url=null) {
  return CDalek::Instance()->request->CreateUrl($url);
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


/**
 * Render all views.
 */
function render_views() {
  return CDalek::Instance()->views->Render();
}
