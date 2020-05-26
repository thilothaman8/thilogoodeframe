<?php
defined('BASEPATH') OR exit('No direct script access allowed');
Class EmailTemplates extends CI_Controller {
 function __construct() {
        parent::__construct();
       error_reporting(0);
    }
public function email_setting()
{
$this->load->view('emailtemplates/email_setting');
}
}