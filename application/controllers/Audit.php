<?php
defined('BASEPATH') OR exit('No direct script access allowed');
Class Audit extends CI_Controller {
 function __construct() {
        parent::__construct();
       error_reporting(0);
    }
public function operation_audit()
{
$this->load->view('audit/operation_audit');
}

public function cs_audit()
{
$this->load->view('audit/cs_audit');
}
public function view_audit()
{
$this->load->view('audit/view_audit');
}
public function add_reason()
{
$this->load->view('audit/add_reason');
}
public function view_reason()
{
$this->load->view('audit/view_reason');
}
public function call_record()
{
$this->load->view('audit/call_record');
}
public function personal_call_record()
{
$this->load->view('audit/personal_call_record');
}
}