<?php
defined('BASEPATH') OR exit('No direct script access allowed');
Class RoutsManagement extends CI_Controller {
 function __construct() {
        parent::__construct();
       error_reporting(0);
    }
public function add_route()
{
$this->load->view('routsmanagement/add_route');
}
public function show_route()
{
$this->load->view('routsmanagement/show_route');
}
}