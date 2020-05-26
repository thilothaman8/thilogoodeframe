<?php
defined('BASEPATH') OR exit('No direct script access allowed');
Class UserManagement extends CI_Controller {
 function __construct() {
        parent::__construct();
       error_reporting(0);
    }
public function show_user()
{
$this->load->view('usermanagement/show_user');
}
public function edit_agent()
{
$this->load->view('usermanagement/edit_agent');
}
}