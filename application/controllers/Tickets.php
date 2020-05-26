<?php
defined('BASEPATH') OR exit('No direct script access allowed');
Class Tickets extends CI_Controller {
 function __construct() {
        parent::__construct();
       error_reporting(0);
    }
public function tickets()
{
$this->load->view('tickets/tickets');
}
}