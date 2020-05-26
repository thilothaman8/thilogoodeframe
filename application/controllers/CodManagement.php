<?php
defined('BASEPATH') OR exit('No direct script access allowed');
Class CodManagement extends CI_Controller {
 function __construct() {
        parent::__construct();
       error_reporting(0);
    }
public function confirm_shipment()
{
$this->load->view('codmanagement/confirm_shipment');
}
public function pending_shipment()
{
$this->load->view('codmanagement/pending_shipment');
}
}