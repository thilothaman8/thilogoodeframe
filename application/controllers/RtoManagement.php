<?php
defined('BASEPATH') OR exit('No direct script access allowed');
Class RtoManagement extends CI_Controller {
 function __construct() {
        parent::__construct();
       error_reporting(0);
    }
public function rto_list()
{
$this->load->view('rtomanagement/rto_list');
}
public function pending_list()
{
$this->load->view('rtomanagement/pending_list');
}
}