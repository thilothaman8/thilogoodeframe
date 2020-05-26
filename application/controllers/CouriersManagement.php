<?php
defined('BASEPATH') OR exit('No direct script access allowed');
Class CouriersManagement extends CI_Controller {
 function __construct() {
        parent::__construct();
       error_reporting(0);
    }
public function add_couriers()
{
$this->load->view('couriersmanagement/add_couriers');
}
public function show_couriers()
{
$this->load->view('couriersmanagement/show_couriers');
}
public function odometer_details()
{
$this->load->view('couriersmanagement/odometer_details');
}
}