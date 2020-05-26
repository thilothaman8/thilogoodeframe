<?php
defined('BASEPATH') OR exit('No direct script access allowed');
Class NewFeedback extends CI_Controller {
 function __construct() {
        parent::__construct();
       error_reporting(0);
    }
public function newfeedback()
{
$this->load->view('newfeedback/newfeedback');
}
}