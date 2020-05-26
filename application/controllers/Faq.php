<?php
defined('BASEPATH') OR exit('No direct script access allowed');
Class Faq extends CI_Controller {
 function __construct() {
        parent::__construct();
       error_reporting(0);
    }
public function add_faq()
{
$this->load->view('faq/add_faq');
}
public function show_faq()
{
$this->load->view('faq/show_faq');
}
}