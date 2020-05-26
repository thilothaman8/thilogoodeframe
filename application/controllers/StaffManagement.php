<?php
defined('BASEPATH') OR exit('No direct script access allowed');
Class StaffManagement extends CI_Controller {
 function __construct() {
        parent::__construct();
       error_reporting(0);
    }
public function add_staff()
{
$this->load->view('staffmanagement/add_staff');
}
public function show_staff()
{
$this->load->view('staffmanagement/show_staff');
}
}