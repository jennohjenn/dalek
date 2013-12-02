<?php
/**
 * Holding a instance of CDalek to enable use of $this in subclasses and provide some helpers.
 *
 * @package DalekCore
 */
class CObject {

	/**
	 * Members
	 */
	public $config;
	public $request;
	public $data;
	public $db;
	public $views;
	public $session;


	/**
	 * Constructor
	 */
	protected function __construct() {
    $da = CDalek::Instance();
    $this->config   = &$da->config;
    $this->request  = &$da->request;
    $this->data     = &$da->data;
    $this->db       = &$da->db;
    $this->views    = &$da->views;
    $this->session  = &$da->session;
  }


	/**
	 * Redirect to another url and store the session
	 */
	protected function RedirectTo($url) {
    $da = CDalek::Instance();
    if(isset($da->config['debug']['db-num-queries']) && $da->config['debug']['db-num-queries'] && isset($da->db)) {
      $this->session->SetFlash('database_numQueries', $this->db->GetNumQueries());
    }    
    if(isset($da->config['debug']['db-queries']) && $da->config['debug']['db-queries'] && isset($da->db)) {
      $this->session->SetFlash('database_queries', $this->db->GetQueries());
    }    
    if(isset($da->config['debug']['timer']) && $da->config['debug']['timer']) {
	    $this->session->SetFlash('timer', $da->timer);
    }    
    $this->session->StoreInSession();
    header('Location: ' . $this->request->CreateUrl($url));
  }


}
  