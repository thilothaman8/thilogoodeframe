<?php
defined('BASEPATH') OR exit('No direct script access allowed');
Class CmsPages extends CI_Controller {
 function __construct() {
        parent::__construct();
       error_reporting(0);
    }
public function cms_pages()
{
$this->load->view('cmspages/cms_pages');
}
}