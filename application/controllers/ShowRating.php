<?php
defined('BASEPATH') OR exit('No direct script access allowed');
Class ShowRating extends CI_Controller {
 function __construct() {
        parent::__construct();
       error_reporting(0);
    }
public function showrating()
{
$this->load->view('showrating/showrating');
}
}