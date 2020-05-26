<?php
defined('BASEPATH') OR exit('No direct script access allowed');
Class WarehouseManagement extends CI_Controller {
 function __construct() {
        parent::__construct();
       error_reporting(0);
    }
public function scan_shipment()
{
$this->load->view('warehousemanagement/scan_shipment');
}
public function hold_shipment()
{
$this->load->view('warehousemanagement/hold_shipment');
}
public function schedule_shipment()
{
$this->load->view('warehousemanagement/schedule_shipment');
}
public function bound_shipment()
{
$this->load->view('warehousemanagement/bound_shipment');
}
public function inventory_report()
{
$this->load->view('warehousemanagement/inventory_report');
}
public function security_check()
{
$this->load->view('warehousemanagement/security_check');
}
}