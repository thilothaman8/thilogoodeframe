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
			<li class="breadcrumb-item active" aria-current="page">Bulk Schedule Remove</li>
        </ol>
    </nav>
	<div class = "container">
	<div class="breadcrumb-line">
	    <div class="hk-pg-header">
            <h4><i data-feather="arrow-left-circle"></i></i> 
            <span class="text-semibold"></span>Bulk Schedule Remove</h4>
		</div>
	</div>
	<section class="hk-sec-wrapper">
		<div class="panel-heading">
				<h5 class="panel-title">Bulk Schedule Remove</h5>
		</div><br>
		<section class="hk-sec-wrapper">
		<div class="panel panel-flat">
     
        <div class="panel-body">
        <div class="col-md-12" id="message">           
        </div>
                <form action="" method="post" name="schedule">
        <div id="schedule_yes" style="display:block">
        <div class="col-md-12">
          <div class="form-group" id="not_schedule_box">
            <textarea rows="8" id="show_awb_no" name="awb_no" placeholder="Please Enter Your AWB Number" required="" class="form-control"></textarea>
          </div>
        </div>
        
        <div class="row">
        <div class="col-sm">
        <div class="row">
        <div class="col-md-4">
        <label>Comment</label>
        <input class="form-control" name="comment" value="" placeholder="CSA Comment">
        </div>

        <div class="col-md-4">
            <label>&nbsp;</label>
            <button type="submit" name="Schedule_submitbtn" class="btn btn-primary form-control">Schedule Remove</button>
        </div>
      </div>
	  </div>
    </div></form>
  </div>
</div>
</section>
    </section>			
<?php include APPPATH.'views/includes/footer.php';?>