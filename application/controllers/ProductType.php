<?php
defined('BASEPATH') OR exit('No direct script access allowed');
Class ProductType extends CI_Controller {
 function __construct() {
        parent::__construct();
       error_reporting(0);
    }
public function add_product_type()
{
$this->load->view('producttype/add_product_type');
}
public function show_product_type()
{
$this->load->view('producttype/show_product_type');
}
public function edit_product_type()
{
$this->load->view('producttype/edit_product_type');
}
}