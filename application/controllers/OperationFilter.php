<?php
defined('BASEPATH') OR exit('No direct script access allowed');
Class OperationFilter extends CI_Controller {
 function __construct() {
        parent::__construct();
       error_reporting(0);
    }
public function ofd_issue()
{
$this->load->view('operationfilter/ofd_issue');
}

public function order_not_picked()
{
$this->load->view('operationfilter/order_not_picked');
}
public function shipments_hold()
{
$this->load->view('operationfilter/shipments_hold');
}
public function csa_schedule_issue()
{
$this->load->view('operationfilter/csa_schedule_issue');
}
public function csa_location_issue()
{
$this->load->view('operationfilter/csa_location_issue');
}
public function driver_update()
{
$this->load->view('operationfilter/driver_update');
}
public function future_update()
{
$this->load->view('operationfilter/future_update');
}
public function not_dispatch()
{
$this->load->view('operationfilter/not_dispatch');
}
}