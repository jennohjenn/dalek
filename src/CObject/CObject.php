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
        protected $da;
        protected $config;
        protected $request;
        protected $data;
        protected $db;
        protected $views;
        protected $session;
        protected $user;


        /**
         * Constructor, can be instantiated by sending in the $da reference.
         */
        protected function __construct($da=null) {
         if(!$da) {
         $da = CDalek::Instance();
         }
         $this->ly = &$da;
    $this->config = &$da->config;
    $this->request = &$da->request;
    $this->data = &$da->data;
    $this->db = &$da->db;
    $this->views = &$da->views;
    $this->session = &$da->session;
    $this->user = &$da->user;
        }


        /**
         * Wrapper for same method in CDalek. See there for documentation.
         */
        protected function RedirectTo($urlOrController=null, $method=null, $arguments=null) {
    $this->ly->RedirectTo($urlOrController, $method, $arguments);
  }


        /**
         * Wrapper for same method in CDalek. See there for documentation.
         */
        protected function RedirectToController($method=null, $arguments=null) {
    $this->ly->RedirectToController($method, $arguments);
  }


        /**
         * Wrapper for same method in CDalek. See there for documentation.
         */
        protected function RedirectToControllerMethod($controller=null, $method=null, $arguments=null) {
    $this->ly->RedirectToControllerMethod($controller, $method, $arguments);
  }


        /**
         * Wrapper for same method in CDalek. See there for documentation.
         */
  protected function AddMessage($type, $message, $alternative=null) {
    return $this->ly->AddMessage($type, $message, $alternative);
  }


        /**
         * Wrapper for same method in CDalek. See there for documentation.
         */
        protected function CreateUrl($urlOrController=null, $method=null, $arguments=null) {
    return $this->ly->CreateUrl($urlOrController, $method, $arguments);
  }


}