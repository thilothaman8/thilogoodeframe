<?php
defined('BASEPATH') OR exit('No direct script access allowed');
Class OutsourceManagement extends CI_Controller {
 function __construct() {
        parent::__construct();
       error_reporting(0);
    }
public function show_supplier()
{
$this->load->view('outsourcemanagement/show_supplier');
}
public function generate_voice()
{
$this->load->view('outsourcemanagement/generate_voice');
}
public function add_supplier()
{
$this->load->view('outsourcemanagement/add_supplier');
}
}