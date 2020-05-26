<?php
defined('BASEPATH') OR exit('No direct script access allowed');
Class ContentServices extends CI_Controller {
 function __construct() {
        parent::__construct();
       error_reporting(0);
    }
public function content_services()
{
$this->load->view('contentservices/content_services');
}
}