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
			<li class="breadcrumb-item active" aria-current="page">Show Address</li>
        </ol>
    </nav>
	<div class = "container">
	<div class="breadcrumb-line">
	    <div class="hk-pg-header">
            <h4><i data-feather="arrow-left-circle"></i></i> 
            <span class="text-semibold"></span>Show Address</h4>
		</div>
	</div>
	<section class="hk-sec-wrapper">
		<div class="panel-heading">
				<h5 class="panel-title">Show Address</h5>
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
                    <label>Phone</label>
                    <input type="text" name="phone"  id="phone" placeholder="Enter Phone Number" class="form-control ng-pristine ng-untouched ng-valid ng-empty ng-valid-required" value="">
                    </div><br>
	                </div>
					</div>
					</div>
	<section class="hk-sec-wrapper">				
	    <div class="row">
            <div class="col-sm">
                <div class="row">
				<div class = "col-md-4">					
				<label><strong>Import File</strong></label><br>
				<span class="field">
					<input type="file" name="uploadedfile" value="" size="20" class="btn btn-info">
					<span id="weight" class="alert"></span>
				</span></div><br>
				<div class = "col-md-4">
				</div>
				<div class = "col-md-4">
					<a href="" class=""> <i class="fa fa-file-excel-o fa-2x"></i> <br>Import CSV Address Management</a>
				</div>
				<button type="button" class="btn btn-outline-light" ng-click="amsSearch()">Search</button>
					<a href="" class="submit btn btn-outline-light" name="submit" value="Submit">New</a>
					<button type="reset" class="btn btn-outline-light" ng-click="resetdata()">Reset</button>
				<button type="submit" class="btn btn-primary" name="submit" value="submit" onclick="">Import Address Management</button>
			
			<div class="heading-elements">
			
			</div>  
		
			</div>
        </div>
     </div>	<br>
	 
		<img src=""style="position: absolute;left: 330px;margin-top: 56px;" class="ng-hide"><span class="ng-binding">Your Search has returned  record(s)</span><table class="table table-bordered">
            <thead>
				<tr>
                    <th>S.no.</th>
                    <th>Name</th>
                    <th>Contact No.</th>
                    <th>Address</th>
                    <th>City</th>
                    <th>Zip Code</th>
                    <th>Street</th>
                    <th>Created Date</th>
                    <th>Source</th>
				</tr>								
            </thead>
            <tbody>
                                          
                <tr>
				    <td colspan="10" ng-show="destination1=='undefined' ||destination1=='null' || destination1.length==0" class="ng-hide">
												 
					<span class="search_no_results">
					No data found 
					</span>      
					</td>
												
				</tr>
            </tbody>
            </table>
                              
		
	</div>
    </section>	 
<?php include APPPATH.'views/includes/footer.php';?>