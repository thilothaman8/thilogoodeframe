<?php
defined('BASEPATH') OR exit('No direct script access allowed');
Class Seo extends CI_Controller {
 function __construct() {
        parent::__construct();
       error_reporting(0);
    }
public function seo()
{
$this->load->view('seo/seo');
}
public function edit_seo()
{
$this->load->view('seo/edit_seo');
}
}