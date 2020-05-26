<?php
defined('BASEPATH') OR exit('No direct script access allowed');
Class BranchManagement extends CI_Controller {
 function __construct() {
        parent::__construct();
       error_reporting(0);
    }
public function add_branch()
{
$this->load->view('branchmanagement/add_branch');
}
public function show_branch()
{
$this->load->view('branchmanagement/show_branch');
}
}