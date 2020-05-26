<?php
defined('BASEPATH') OR exit('No direct script access allowed');
Class ShipmentManagement extends CI_Controller {
 function __construct() {
        parent::__construct();
       error_reporting(0);
    }
public function all_shipment()
{
$this->load->view('shipmentmanagement/all_shipment');
}

public function archive_shipment()
{
$this->load->view('shipmentmanagement/archive_shipment');
}
public function add_new_shipment()
{
$this->load->view('shipmentmanagement/add_new_shipment');
}
public function return_orders()
{
$this->load->view('shipmentmanagement/return_orders');
}
public function delivered_shipment()
{
$this->load->view('shipmentmanagement/delivered_shipment');
}
public function deleted_shipment()
{
$this->load->view('shipmentmanagement/deleted_shipment');
}
public function scanned_not_listed()
{
$this->load->view('shipmentmanagement/scanned_not_listed');
}
public function schedule_shipment1()
{
$this->load->view('shipmentmanagement/schedule_shipment1');
}
public function import_new_shipment()
{
$this->load->view('shipmentmanagement/import_new_shipment');
}
public function import_return_shipment()
{
$this->load->view('shipmentmanagement/import_return_shipment');
}
public function bulk_update()
{
$this->load->view('shipmentmanagement/bulk_update');
}
public function assigning_shipments()
{
$this->load->view('shipmentmanagement/assigning_shipments');
}
public function bulk_print()
{
$this->load->view('shipmentmanagement/bulk_print');
}
public function ready_delivery()
{
$this->load->view('shipmentmanagement/ready_delivery');
}
public function tracking_parcel()
{
$this->load->view('shipmentmanagement/tracking_parcel');
}
public function detail()
{
$this->load->view('shipmentmanagement/detail');
}
}