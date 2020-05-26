<?php
defined('BASEPATH') OR exit('No direct script access allowed');
Class CustomerManagement extends CI_Controller {
 function __construct() {
        parent::__construct();
       error_reporting(0);
    }
public function add_customer()
{
$this->load->view('customermanagement/add_customer');
}
public function show_customer()
{
$this->load->view('customermanagement/show_customer');
}
public function import_rates()
{
$this->load->view('customermanagement/import_rates');
}
public function account_verification()
{
$this->load->view('customermanagement/account_verification');
}
public function edit_customer()
{
$this->load->view('customermanagement/edit_customer');
}
public function payment_information()
{
$this->load->view('customermanagement/payment_information');
}
public function customer_booking_detail()
{
$this->load->view('customermanagement/customer_booking_detail');
}
public function add_zone()
{
$this->load->view('customermanagement/add_zone');
}
public function weight_range()
{
$this->load->view('customermanagement/weight_range');
}
}