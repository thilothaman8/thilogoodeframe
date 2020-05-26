<?php
defined('BASEPATH') OR exit('No direct script access allowed');
Class BulkInvoiceManagement extends CI_Controller {
 function __construct() {
        parent::__construct();
       error_reporting(0);
    }
public function add_bulk_scan()
{
$this->load->view('bulkinvoicemanagement/add_bulk_scan');
}

public function cod_invoices()
{
$this->load->view('bulkinvoicemanagement/cod_invoices');
}
public function payable_invoices()
{
$this->load->view('bulkinvoicemanagement/payable_invoices');
}
public function payable_invoice_cod()
{
$this->load->view('bulkinvoicemanagement/payable_invoice_cod');
}

}