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
            <li class="breadcrumb-item active" aria-current="page">Report</li>
			<li class="breadcrumb-item active" aria-current="page">Payment Detail By Date</li>
        </ol>
    </nav>
	<div class = "container">
	<div class="breadcrumb-line">
	    <div class="hk-pg-header">
            <h4><i data-feather="arrow-left-circle"></i></i> 
            <span class="text-semibold"></span>Payment Detail By Date</h4>
		</div>
	</div>
	<section class="hk-sec-wrapper">
		<div class="panel-heading">
				<h5 class="panel-title">Payment Detail By Date</h5>
		</div><br>
		<section class="hk-sec-wrapper">
		<div class="panel-body">
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-body">
      						<form class="stdform" method="post" action="" name="add_ship" enctype="multipart/form-data">
                            <div class="form-group">
                            <label>From Date</label>
                            <input id="datepicker" name="from_date" type="date" class="form-control" value="2019-11-14 12:42:49" required="">
                            </div>
                            
                            <div class="form-group">
                            <label>To Date</label>
                            <input type="date" name="to_date" id="datepicker1" class="form-control" value="2019-11-14 12:42:49" required="">
                            </div>
      
          					<button type="submit" class="btn btn-primary" name="payment_excel" value="Submit">Download Excel</button>
      
      						</form>
       					</div>
                    </div>
                </div>
            </div> 
 		 </div>
		</section>
	</section>	
<?php include APPPATH.'views/includes/footer.php';?>