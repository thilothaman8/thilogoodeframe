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
            <li class="breadcrumb-item active" aria-current="page">Customer Management</li>
			<li class="breadcrumb-item active" aria-current="page"> Import Rates in Shipments</li>
        </ol>
    </nav>
	<div class = "container">
	<div class="breadcrumb-line">
	    <div class="hk-pg-header">
            <h4><i data-feather="arrow-left-circle"></i></i> 
            <span class="text-semibold"></span> Import Rates in Shipments</h4>
		</div>
	</div>
	<section class="hk-sec-wrapper">
		<div class="panel-heading">
				<h5 class="panel-title"> Import Rates in Shipments</h5>
		</div><br>
	<div id="contentwrapper" class="contentwrapper">
    			<div class="alert alert-info">
    				<div class="row">
        				<div class="col-md-8">Note: To import bulk shipments use this import feature. Below are the columns you must have according to serial number in the excel csv file. 2. You must have to insert paymode as : CASH or COD  </div>
        				<div class="col-md-4" align="center">
      					<a href="" class=""> <i class="fa fa-file-excel-o fa-2x"></i> <br> Import Rate Data</a>
           				</div>
  					</div>
				</div>
            <section class="hk-sec-wrapper">
                <div class="panel panel-default">
					<div class="panel-body">
						<div class="table-responsive">
							<table class="table table-striped table-bordered table-hover">
								<tbody>
									<tr>
										<td>(1) AWB No(Existing)</td>
										<td>(2) Service Charge</td>
										<td>(3) Cod Fees</td>
										<td>(4) Return Fees</td>
										<td>(4) POD Fees</td>
									</tr>  
								</tbody>
							</table>
							   
						<span class="alert" style="color:#F00;"> </span>
							  
						<form class="" method="post" enctype="multipart/form-data" name="add_ship" action="">
							<label><strong>Import File</strong></label><br>
							<span class="field">
							<input type="file" name="ratefile" value="" size="20" class="btn btn">
							<span id="weight" class="alert"></span></span><br><br>
							<button type="submit" class="btn btn-primary" name="submit" value="submit" onclick="return Valid_ship(document.add_ship); ">Add Shipment</button>
						</form>
				 
						</div>
					</div>
                </div>
            </section>    
	</div>
    </section>		
<?php include APPPATH.'views/includes/footer.php';?>