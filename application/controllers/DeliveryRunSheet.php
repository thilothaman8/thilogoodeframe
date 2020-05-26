<?php
defined('BASEPATH') OR exit('No direct script access allowed');
Class DeliveryRunSheet extends CI_Controller {
 function __construct() {
        parent::__construct();
       error_reporting(0);
    }
public function add_drs()
{
$this->load->view('deliveryrunsheet/add_drs');
}
public function new_drs()
{
$this->load->view('deliveryrunsheet/new_drs');
}
public function show_drs()
{
$this->load->view('deliveryrunsheet/show_drs');
}
}