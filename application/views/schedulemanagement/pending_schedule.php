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
			<li class="breadcrumb-item active" aria-current="page">Bulk Reschedule</li>
        </ol>
    </nav>
	<div class = "container">
	<div class="breadcrumb-line">
	    <div class="hk-pg-header">
            <h4><i data-feather="arrow-left-circle"></i></i> 
            <span class="text-semibold"></span>Bulk Reschedule</h4>
		</div>
	</div>
	<section class="hk-sec-wrapper">
		<div class="panel-heading">
				<h5 class="panel-title">Bulk Reschedule</h5>
		</div><br>
		<section class="hk-sec-wrapper">
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
     
         
        
    </form>
    </div>
</div>	
    </div>
</section>		
<?php include APPPATH.'views/includes/footer.php';?>