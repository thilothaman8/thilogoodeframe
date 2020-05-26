<?php
defined('BASEPATH') OR exit('No direct script access allowed');
Class InventoryManagement extends CI_Controller {
 function __construct() {
        parent::__construct();
       error_reporting(0);
    }
public function create_location()
{
$this->load->view('inventorymanagement/create_location');
}
public function manage_location()
{
$this->load->view('inventorymanagement/manage_location');
}
public function print_barcode()
{
$this->load->view('inventorymanagement/print_barcode');
}
public function add_shelve()
{
$this->load->view('inventorymanagement/add_shelve');
}
public function show_shelve()
{
$this->load->view('inventorymanagement/show_shelve');
}
public function inventory()
{
$this->load->view('inventorymanagement/inventory');
}
}