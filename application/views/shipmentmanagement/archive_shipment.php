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
            <li class="breadcrumb-item active" aria-current="page">Shipment Management</li>
			<li class="breadcrumb-item active" aria-current="page">Archive Shipment</li>
        </ol>
    </nav>
	<div class = "container">
	<div class="breadcrumb-line">
	    <div class="hk-pg-header">
            <h4><i data-feather="arrow-left-circle"></i></i> 
            <span class="text-semibold"></span>Archive Shipment</h4>
		</div>
	</div>
	<section class="hk-sec-wrapper">
	<h5 class="hk-sec-title">Archive Shipment</h5><br>
	<form name="search_form" method="post" action="" enctype="multipart/form-data">
		<select class="" name="exprort_limit">
			<option value="5000">0-5000</option><option value="10000">5000-10000</option><option value="15000">10000-15000</option><option value="20000">15000-20000</option><option value="25000">20000-25000</option><option value="30000">25000-30000</option><option value="35000">30000-35000</option><option value="40000">35000-40000</option><option value="45000">40000-45000</option><option value="50000">45000-50000</option><option value="55000">50000-55000</option><option value="60000">55000-60000</option><option value="65000">60000-65000</option><option value="70000">65000-70000</option><option value="75000">70000-75000</option><option value="80000">75000-80000</option><option value="85000">80000-85000</option><option value="90000">85000-90000</option><option value="95000">90000-95000</option><option value="100000">95000-100000</option><option value="105000">100000-105000</option><option value="110000">105000-110000</option><option value="115000">110000-115000</option><option value="120000">115000-120000</option>
		</select>
    <input class="btn-primary" type="submit" value="Export to Excel ZIP" name="exportData">
    </form>
	<section class="hk-sec-wrapper">
	<div class="row">
                                <div class="col-sm">
                                    <div class="row">
                                        <div class="col-md-3">
                                            
                                            <select class="form-control custom-select  mt-15">
                                                <option selected>Please Select</option>
                                                <option value="1">One</option>
                                                <option value="2">Two</option>
                                                <option value="3">Three</option>
                                            </select>
											</div>
											<div class="col-md-3">
										    <select class="form-control custom-select  mt-15">
                                                <option selected>Select Customer</option>
                                                <option value="1">One</option>
                                                <option value="2">Two</option>
                                                <option value="3">Three</option>
                                            </select>
											</div>
											<div class="col-md-3">
											<input type="text" class="form-control mt-15" placeholder="Enter AWB No.">
											</div>
											<div class="col-md-3">
										    <select class="form-control custom-select  mt-15">
                                                <option selected>Select Origin</option>
                                                <option value="1">One</option>
                                                <option value="2">Two</option>
                                                <option value="3">Three</option>
                                            </select>
											</div>
											<div class="col-md-3">
										    <select class="form-control custom-select  mt-15">
                                                <option selected>Select Destination</option>
                                                <option value="1">One</option>
                                                <option value="2">Two</option>
                                                <option value="3">Three</option>
                                            </select>
											</div>
											 <div class="col-md-3">
											
											<input class="form-control mt-15" type="text" name="daterange" value="01/01/2018 - 01/15/2018" />
                                             </div>
											 <div class="col-md-3">
											 <input class="form-control mt-15" type="text" name="birthday" value="10/24/1984" />
											 </div>
											
											<div class="col-md-3">
                                        
											</div>
											
											
                                       
										  <div class="col-md-2">
										  <input type="submit" name="bt_search" value="Search" class="btn btn-primary mt-15">
										  </div>
										  <div class="col-md-2">
					                      <span class="btn btn-primary mt-15"> Total Shipment</span> 
					                      </div>
					 
                                       
					</div>
                </div>
            </div><br>
						
	</section>
	<section class="hk-sec-wrapper">
	<div class = "table-responsive">
	<table id="testTable_new" class="table table-striped table-bordered table-hover" align="center">
	        <thead>
                <tr>
                    <th>#</th>
                    <th>Date</th>
                    <th>Reference#</th>
                    <th>Shipper Reference#</th>
                    <th>AWB#</th>
					<th>Delivery Attempts</th>
					<th>Call Attempts</th>
                    <th>Origin</th>
                    <th>Destination</th>
                    <th>Pieces</th>
                    <th>Sender</th>
					<th>Reciever</th>
					<th>Weight</th>
					
                </tr>
            </thead>
			<tbody>
			    <tr>
				    <td>1</td>
					<td>Tuesday, November 5, 2019 09:51:04 AM</td>
					<td>fgrdsff</td>
					<td></td>
					<td>TAM2177897344</td>
					<td>0</td>
					<td>3</td>
					<td>Rass</td>
					<td>Dammam</td>
					<td>10</td>
					<td>Shopify</td>
					<td>dasdas</td>
					<td>0</td>
					
				</tr>
			</tbody>
			
	    </table>
		</div>
	</section>
	</section>
	<?php include APPPATH.'views/includes/footer.php';?>