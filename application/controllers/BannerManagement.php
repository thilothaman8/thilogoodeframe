<?php
defined('BASEPATH') OR exit('No direct script access allowed');
Class BannerManagement extends CI_Controller {
 function __construct() {
        parent::__construct();
       error_reporting(0);
    }
public function add_banner()
{
$this->load->view('bannermanagement/add_banner');
}
public function show_banner()
{
$this->load->view('bannermanagement/show_banner');
}
}