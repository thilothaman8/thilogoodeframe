<?php
defined('BASEPATH') OR exit('No direct script access allowed');
Class PickupManagement extends CI_Controller {
 function __construct() {
        parent::__construct();
       error_reporting(0);
    }
public function generate_pickup()
{
$this->load->view('pickupmanagement/generate_pickup');
}

public function scan_new_pickup()
{
$this->load->view('pickupmanagement/scan_new_pickup');
}
public function bulk_pickup_update()
{
$this->load->view('pickupmanagement/bulk_pickup_update');
}
public function pickup_list()
{
$this->load->view('pickupmanagement/pickup_list');
}

}