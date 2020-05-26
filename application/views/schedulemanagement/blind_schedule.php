<!DOCTYPE html>

<html lang="en">



<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
    <title>Fastcoo</title>
    <meta name="description" content="A responsive bootstrap 4 admin dashboard template by hencework" />

    <!-- Favicon -->
    <?php include APPPATH.'views/includes/styles.php';?>
</head>

<body>
<?php include APPPATH.'views/includes/header.php';?>
   	<nav class="hk-breadcrumb" aria-label="breadcrumb">
        <ol class="breadcrumb breadcrumb-light bg-transparent">
            <li class="breadcrumb-item"><a href="#"><i class="glyphicon glyphicon-home"></i>   Home</a></li>
            <li class="breadcrumb-item active" aria-current="page">Schedule Management</li>
			<li class="breadcrumb-item active" aria-current="page">Blind Schedule</li>
        </ol>
    </nav>
	<div class = "container">
	<div class="breadcrumb-line">
	    <div class="hk-pg-header">
            <h4><i data-feather="arrow-left-circle"></i></i> 
            <span class="text-semibold"></span>Blind Schedule</h4>
		</div>
	</div>
	<section class="hk-sec-wrapper">
		<div class="panel-heading">
				<h5 class="panel-title">Blind Schedule</h5>
		</div><br>
		<div class="col-md-12"> 
          <div id="message">
          <div class="row">
                                                  
                                     </div>
           </div>
      
            <br>
                <form action="" method="post" name="schedule" class="ng-pristine ng-valid">
        <div class="col-md-12">
          <div class="form-group" id="not_schedule_box">
            <textarea rows="8" id="show_awb_no" name="awb_no" placeholder="Please Enter Your AWB Number" required="" class="form-control"></textarea>
          </div>
        </div>
        <div class="row">
        <div class="col-sm">
        <div class="row">
         <div class="col-md-4">
          
            <label>Time Slot</label>
            <select name="time" class="form-control" required="">
				 <option value="8:00 PM To 12:00 AM">8:00 PM To 12:00 AM</option>
              <option value="10:00 AM - 4:00 PM">10:00 AM-4:00 PM</option>
              <option value="4:00 PM - 8:00 PM">4:00 PM-8:00PM</option>
              <option value="Any Time">Any Time</option>
            </select>
          
        </div>
        <div class="col-md-4">
         
            <label>Schedule date</label>
        </div>
     
              
          <div class="col-md-4">
           
            <label>&nbsp;</label>
            <button type="submit" name="Schedule_submitbtn" class="btn btn-primary form-control">Get List</button>
          </div>
        
    </form>
    </div>
</div>	
    </div>
</section>		
<?php include APPPATH.'views/includes/footer.php';?>