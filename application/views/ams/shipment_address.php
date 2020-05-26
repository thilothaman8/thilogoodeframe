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
            <li class="breadcrumb-item active" aria-current="page">Address Management</li>
			<li class="breadcrumb-item active" aria-current="page">Shipment Address</li>
        </ol>
    </nav>
	<div class = "container">
	<div class="breadcrumb-line">
	    <div class="hk-pg-header">
            <h4><i data-feather="arrow-left-circle"></i></i> 
            <span class="text-semibold"></span>Shipment Address</h4>
		</div>
	</div>
	<section class="hk-sec-wrapper">
		<div class="panel-heading">
				<h5 class="panel-title">Shipment Address</h5>
		</div><br>
		<section class="hk-sec-wrapper">
		<div class="panel-body ng-scope" ng-controller="SearchShipments">
			 <div class="row">

		<div class="col-md-5 form-group"> 
        <label>Source</label>
        <select name="sel_source" ng-model="sel_source" id="sel_country" class="form-control ng-pristine ng-untouched ng-valid ng-empty">
			<option value="" selected="selected">Please Select Source</option>
		
		
				<option value="drapp">Driver App</option>
			<option value="blSch">Blind Schedule</option>
			<option value="othr">CS</option>
			<option value="sms">SMS</option>
		
		</select>
        </div>
		</div>
					<div class="row">
					<div class="col-sm">
                    <div class="row">
					<div class="col-md-5 form-group" id="phone">
                    <label>shipment</label>
                    <input type="text" name="phone"  id="phone" placeholder="Enter Shipment" class="form-control ng-pristine ng-untouched ng-valid ng-empty ng-valid-required" value="">
                    </div><br>
					
					
					</div>
					</div>
					</div>
					
					<div class="row">
					<div class="col-md-8">
					<button type="button" class="btn btn-info">Search</button>
					<button type="reset" class="btn btn-info">Reset</button>
                    </div>
		            </div>

					<hr>
					
					<div class="row col-md-12 form-group">
					
				    <div class="panel-body">
                    </div>
                    </div>
				   
 <div class="col-md-12" style="overflow-x:auto;">
           
            <img src="" style="position: absolute;left: 330px;margin-top: 56px;" class="ng-hide"><span class="ng-binding">Your Search has returned  record(s)</span><table class="table table-bordered">
                <thead>
                <tr>
                    <th>S.no.</th>
                    <th>Name</th>
                    <th>Contact No.</th>
                    <th>Address</th>
                    <th>City</th>
                    <th>Zip Code</th>
                    <th>Created Date</th>
                    <th>Updated Date</th>
                    <th>Awb No</th>
	                <th>Action</th>
			    </tr>
                </thead>
                <tbody>
                                         
                </tbody>
            </table>
                             
		</div>
	
</section>
   	<?php include APPPATH.'views/includes/footer.php';?>