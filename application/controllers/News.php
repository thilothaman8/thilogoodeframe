<?php
defined('BASEPATH') OR exit('No direct script access allowed');
Class News extends CI_Controller {
 function __construct() {
        parent::__construct();
       error_reporting(0);
    }
public function add_news()
{
$this->load->view('news/add_news');
}
public function show_news()
{
$this->load->view('news/show_news');
}
}