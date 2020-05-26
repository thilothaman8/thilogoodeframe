<?php
defined('BASEPATH') OR exit('No direct script access allowed');
Class GeneralSetting extends CI_Controller {
 function __construct() {
        parent::__construct();
       error_reporting(0);
    }
public function upload_app()
{
$this->load->view('generalsetting/upload_apps');
}

public function company_details()
{
$this->load->view('generalsetting/company_details');
}
public function social_details()
{
$this->load->view('generalsetting/social_details');
}
public function smtp_configuration()
{
$this->load->view('generalsetting/smtp_configuration');
}
public function payment_setting()
{
$this->load->view('generalsetting/payment_setting');
}
public function show_testimonial()
{
$this->load->view('generalsetting/show_testimonial');
}
public function show_about_us()
{
$this->load->view('generalsetting/show_about_us');
}
public function add_feedback()
{
$this->load->view('generalsetting/add_feedback');
}
}