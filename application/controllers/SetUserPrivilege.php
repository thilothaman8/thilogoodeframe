<?php
defined('BASEPATH') OR exit('No direct script access allowed');
Class SetUserPrivilege extends CI_Controller {
 function __construct() {
        parent::__construct();
       error_reporting(0);
    }
public function user_privilege()
{
$this->load->view('setuserprivilege/user_privilege');
}
}