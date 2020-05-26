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
                    <li class="breadcrumb-item active" aria-current="page">Pickup Management</li>
					<li class="breadcrumb-item active" aria-current="page">Add Pickup Sheet</li>
                </ol>
    </nav>
	<div class = "container">
	<div class="breadcrumb-line">
	    <div class="hk-pg-header">
            <h4><i data-feather="arrow-left-circle"></i></i> 
            <span class="text-semibold"></span>Add Pickup Sheet</h4>
		</div>
	</div>
	<section class="hk-sec-wrapper">
	<h5>Add Pickup Sheet</h5><br>
	<section class="hk-sec-wrapper">
	<div class="col-lg-12">
	<div class="row">                 
    <div class="col-lg-8">
	<div class="form-group">
                    <label>Select Country</label>
                    <select class="form-control custom-select  mt-8">
                        <option selected>--Select--</option>
                        <option value="1">One</option>
                        <option value="2">Two</option>
                        <option value="3">Three</option>
                    </select>
    </div>
	<div class="form-group">
                    <label>Select City</label>
                    <select class="form-control custom-select  mt-8">
                        <option selected>--Select--</option>
                        <option value="1">One</option>
                        <option value="2">Two</option>
                        <option value="3">Three</option>
                    </select>
    </div>
	<button type="submit" class="btn btn-primary" name="submit_city" value="Get Shipment" >Get Shipment</button><br><br>
	<div class="form-group">
                    <label>Route Code</label>&nbsp;&nbsp;
					<a href="" target="_new" class="fa fa-plus">Add New Route</a>
                    <select class="form-control custom-select  mt-8">
                        <option selected>--Select--</option>
                        <option value="1">One</option>
                        <option value="2">Two</option>
                        <option value="3">Three</option>
                    </select>
    </div>
	<div class="form-group">
                    <label>Select Courier</label>&nbsp;&nbsp;
					<a href="" target="_new" class="fa fa-plus">Add Courier</a>
                    <select class="form-control custom-select  mt-8">
                        <option selected>--Select--</option>
                        <option value="1">One</option>
                        <option value="2">Two</option>
                        <option value="3">Three</option>
                    </select>
    </div>
    </div>	
	</div>
    </section>
	<section class="hk-sec-wrapper">
		<table id="datable_1" class="table table-hover w-100 display pb-30">
										
                                            <thead>
                                                <tr>
                                                    <th class="head1">Select All&nbsp<input type="checkbox" onclick="toggle3(this)" name="selectAll[]"/></th>
                                                    <th>AWB No.</th>
                                                    <th>Sender</th>
                                                    <th>Receiver</th>
                                                    <th>Receiver Address</th>
                                                    <th>Date</th>
													<th>Status</th>
                                                </tr>
                                            </thead>
		</table>
		

</section>
        <button type="submit" class="btn btn-primary" name="submit" value="submit" onClick="">Create Pickup List</button><br/><br/>		
    </section>	
				<?php include APPPATH.'views/includes/footer.php';?>