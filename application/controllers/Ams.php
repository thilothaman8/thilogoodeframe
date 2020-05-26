<?php
defined('BASEPATH') OR exit('No direct script access allowed');
Class Ams extends CI_Controller {
 function __construct() {
        parent::__construct();
       error_reporting(0);
    }
public function show_address()
{
$this->load->view('ams/show_address');
}
public function shipment_address()
{
$this->load->view('ams/shipment_address');
}
public function new_address()
{
$this->load->view('ams/new_address');
}
}