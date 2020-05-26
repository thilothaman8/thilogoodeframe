<?php
defined('BASEPATH') OR exit('No direct script access allowed');
Class Reports extends CI_Controller {
 function __construct() {
        parent::__construct();
       error_reporting(0);
    }
public function supplier_report()
{
$this->load->view('reports/supplier_report');
}
public function shipment_report()
{
$this->load->view('reports/shipment_report');
}
public function transaction_report()
{
$this->load->view('reports/transaction_report');
}
public function payment_report()
{
$this->load->view('reports/payment_report');
}
public function client_report()
{
$this->load->view('reports/client_report');
}
public function hold_report()
{
$this->load->view('reports/hold_report');
}
}