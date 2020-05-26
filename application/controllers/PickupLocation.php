<?php
defined('BASEPATH') OR exit('No direct script access allowed');
Class PickupLocation extends CI_Controller {
 function __construct() {
        parent::__construct();
       error_reporting(0);
    }
public function show_location()
{
$this->load->view('pickuplocation/show_location');
}
}