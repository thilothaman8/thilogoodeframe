<?php
defined('BASEPATH') OR exit('No direct script access allowed');
Class ManifestManagement extends CI_Controller {
 function __construct() {
        parent::__construct();
       error_reporting(0);
    }
public function add_manifest()
{
$this->load->view('manifestmanagement/add_manifest');
}
public function show_manifest()
{
$this->load->view('manifestmanagement/show_manifest');
}
public function return_manifest()
{
$this->load->view('manifestmanagement/return_manifest');
}
public function bulk_manifest()
{
$this->load->view('manifestmanagement/bulk_manifest');
}
public function date_update1()
{
$this->load->view('manifestmanagement/date_update1');
}
public function line_haul()
{
$this->load->view('manifestmanagement/line_haul');
}
}