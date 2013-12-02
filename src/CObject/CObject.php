<?php
/**
* Holding a instance of CDalek to enable use of $this in subclasses.
*
* @package DalekCore
*/
class CObject {

        public $config;
        public $request;
        public $data;

        /**
         * Constructor
         */
        protected function __construct() {
    $da = CDalek::Instance();
    $this->config = &$da->config;
    $this->request = &$da->request;
    $this->data = &$da->data;
  }

}
