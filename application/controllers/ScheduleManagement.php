<?php
defined('BASEPATH') OR exit('No direct script access allowed');
Class ScheduleManagement extends CI_Controller {
 function __construct() {
        parent::__construct();
       error_reporting(0);
    }
public function cs_schedule()
{
$this->load->view('schedulemanagement/cs_schedule');
}
public function blind_schedule()
{
$this->load->view('schedulemanagement/blind_schedule');
}
public function bulk_reschedule()
{
$this->load->view('schedulemanagement/bulk_reschedule');
}
public function schedule_remove()
{
$this->load->view('schedulemanagement/schedule_remove');
}
public function date_update()
{
$this->load->view('schedulemanagement/date_update');
}
public function pending_schedule()
{
$this->load->view('schedulemanagement/pending_schedule');
}
}