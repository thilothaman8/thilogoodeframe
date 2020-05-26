<?php
defined('BASEPATH') OR exit('No direct script access allowed');
Class Notification extends CI_Controller {
 function __construct() {
        parent::__construct();
       error_reporting(0);
    }
public function add_notification()
{
$this->load->view('notification/add_notification');
}
public function show_notification()
{
$this->load->view('notification/show_notification');
}
}