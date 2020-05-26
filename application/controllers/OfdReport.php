<?php
defined('BASEPATH') OR exit('No direct script access allowed');
Class OfdReport extends CI_Controller {
 function __construct() {
        parent::__construct();
       error_reporting(0);
    }
public function ofd_report()
{
$this->load->view('ofdreport/ofd_report');
}
}