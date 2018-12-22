<?php 

defined('BASEPATH') OR exit('No direct script access allowed');

require APPPATH . '/libraries/REST_Controller.php';
use Restserver\Libraries\REST_Controller;


/**
 * Api controller.
 * Return json with all values or filtering by parameters
 * URL: /api/db_field/value
 */
class Api extends REST_Controller {

    public function __construct() {
        parent::__construct();
		
        $this->load->model('getData');
        $this->load->helper('url');
    }

    public function index_get($filter = '', $filterValue = '') {
        
        $filterValue = urldecode($filterValue);

        if (empty($filter) && empty($filterValue)) {
            $this->response($this->getData->getAll());
        } else {
            $this->response($this->getData->filter($filter, $filterValue));
        }
    }
}