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
			<li class="breadcrumb-item active" aria-current="page">Show Shipment</li>
        </ol>
    </nav>
	<div class = "container">
	<div class="breadcrumb-line">
	    <div class="hk-pg-header">
            <h4><i data-feather="arrow-left-circle"></i></i> 
            <span class="text-semibold"></span>Show Shipment</h4>
		</div>
	</div>
	<section class="hk-sec-wrapper">
	<h5 class="hk-sec-title">All Shipment</h5><br>
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
                                                <option selected>Select Date</option>
                                                <option value="1">One</option>
                                                <option value="2">Two</option>
                                                <option value="3">Three</option>
                                            </select>
											</div>
											<div class="col-md-3">
											 <input class="form-control mt-15" type="text" name="birthday" value="10/24/1984" />
											 </div>
											 <div class="col-md-3">
											<input type="number" name="attempt_search" id="attempt_search" placeholder="Delivery Attempts " class="form-control mt-15 " onfocus="this.value=''" min="0" value="">
                                            
                                        </div>
                                        <div class="col-md-3">
										    <select class="form-control custom-select  mt-15">
                                                <option selected>AWB No.</option>
                                                <option value="1">One</option>
                                                <option value="2">Two</option>
                                                <option value="3">Three</option>
                                            </select>
											</div>
											<div class="col-md-3">
											<input type="text" class="form-control mt-15" placeholder="Enter AWB No.">
											</div>
											<div class="col-md-3">
											<input type="text" class="form-control mt-15" placeholder="Shelve No.">
                                        </div>
                                        <div class="col-md-3">
										    <select class="form-control custom-select  mt-15">
                                                <option selected>Select Staff</option>
                                                <option value="1">One</option>
                                                <option value="2">Two</option>
                                                <option value="3">Three</option>
                                            </select>
											</div>
											<div class="col-md-3">
											<select class="form-control custom-select  mt-15">
                                                <option selected>General Customer</option>
                                                <option value="1">One</option>
                                                <option value="2">Two</option>
                                                <option value="3">Three</option>
                                            </select>
											</div>
											<div class="col-md-3">
											<select class="form-control custom-select  mt-15">
                                                <option selected>On Hold Status</option>
                                                <option value="1">One</option>
                                                <option value="2">Two</option>
                                                <option value="3">Three</option>
                                            </select>
                                        </div>
										<div class="col-md-3">
										    
                                            <select class="form-control custom-select  mt-15">
                                                <option selected>Select Status</option>
                                                <option value="1">One</option>
                                                <option value="2">Two</option>
                                                <option value="3">Three</option>
											</select>
											</div>
	                                        <div class="col-md-3">
											<select class="form-control custom-select  mt-15">
                                                <option selected>General Status</option>
                                                <option value="1">One</option>
                                                <option value="2">Two</option>
                                                <option value="3">Three</option>
                                            </select>
											</div>
											<div class="col-md-3">
                                            <select class="form-control custom-select  mt-15">
                                                <option selected>Open</option>
                                                <option value="1">One</option>
                                                <option value="2">Two</option>
                                                <option value="3">Three</option>
                                            </select>
                                        </div>
                                    
                               
                                        <div class="col-md-3">
                                            
                                            <select class="form-control custom-select  mt-15">
                                                <option selected>Schedule Status</option>
                                                <option value="1">One</option>
                                                <option value="2">Two</option>
                                                <option value="3">Three</option>
                                            </select>
											</div>
											<div class="col-md-3">
											 <input class="form-control mt-15" type="text" name="birthday" value="10/24/1984" />
											 </div>
											 <div class="col-md-3">
											  <input class="form-control mt-15" type="text" name="birthday" value="10/24/1984" />
											  </div>
											  <div class="col-md-3">
											 <select class="form-control custom-select  mt-15">
                                                <option selected>Forward Through</option>
                                                <option value="1">One</option>
                                                <option value="2">Two</option>
                                                <option value="3">Three</option>
                                            </select>
											
                                            
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
											<select class="form-control custom-select  mt-15">
                                                <option selected>Destination Hub</option>
                                                <option value="1">One</option>
                                                <option value="2">Two</option>
                                                <option value="3">Three</option>
                                            </select>
                                        </div>
										<div class="col-md-3">
										 <input type="submit" name="bt_search" value="Search" class="btn btn-primary mt-15">
										  </div>
										  <div class="col-md-2">
					 <span class="btn btn-primary mt-15"> Total Shipment</span> 
					 </div>
					 <div class="col-md-1">
					 <input type="submit" name="delete_cust" class="btn btn-danger mt-15" value="Delete" onclick="return confirm('Do You  want to delete ?');">
					 </div>
					 <div class="col-md-2">
					 <input type="submit" name="bulk_print" class="btn btn-info mt-15" value="AWB Label A4">
					 </div>
					 <div class="col-md-2">
					 <input type="submit" name="bulklable_print " class="btn btn-success mt-15" value="AWB Label 4*6">
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
                    <th><input type="checkbox" onclick="toggle(this)" name="selectAll[]" value=""/>
                                <br/>
                                Select All</th>
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
					<th>Forward Through</th>
					<th>Airway Bill No.</th>
                    <th>Status</th>
					<th>Pay Status</th>
					<th>Payable Status</th>
                    <th>Recievable Status</th>
                    <th>Schedule</th>
                    <th>Schedule Channel</th>
                    <th>On Hold</th>
					<th>On Hold Reason</th>
					<th>On Hold Date</th>
					<th>On Hold Confirm</th>
                    <th>On Hold Days</th>
					<th>Driver Name</th>
					<th>Driver Comment</th>
                    <th>Details</th>
                    <th>Driver Supplier</th>
                    <th>Warehouse</th>
                    <th>Shelve</th>
					<th>Schedule Date</th>
					<th>Weight</th>
					<th>Action</th>
                </tr>
            </thead>
			<tbody>
			    <tr>
				    <td>1<br/><input type="checkbox" onclick="toggle(this)" name="selectAll[]" value=""/>
                                
                                </td>
					<td>Tuesday, November 5, 2019 09:51:04 AM</td>
					<td>fgrdsff</td>
					<td>-</td>
					<td><a href="" target="_blank">TAM2177897344</a><br></td>
					<td>0</td>
					<td>3</td>
					<td>Rass</td>
					<td>Dammam</td>
					<td>10</td>
					<td>Shopify</td>
					<td><a href="" target="_blank">dasdas</a><br></td>
					<td>N/A</td>
					<td></td>
					<td style="background-color:#AEFFAE;">
				    <span></span><i class="fa fa-briefcase"></i> Booked-Pickup Scheduled&nbsp;
					(10.00)
			        </td>
					<td><span class="btn btn-danger btn-wth-icon icon-wthot-bg btn-sm btn-rounded btn-xs">Pending</span></td>
					<td></td>
					<td></td>
					<td><span class="btn btn-danger btn-wth-icon icon-wthot-bg btn-sm btn-rounded btn-xs">No</span></td>
					<td><span class="btn btn-danger btn-wth-icon icon-wthot-bg btn-sm btn-rounded btn-xs">N/A</span></td>
					<td><span class="btn btn-danger btn-wth-icon icon-wthot-bg btn-sm btn-rounded btn-xs">No</span></td>
					<td><span class="btn btn-danger btn-wth-icon icon-wthot-bg btn-sm btn-rounded btn-xs">N/A</span></td>
					<td><span class="btn btn-danger btn-wth-icon icon-wthot-bg btn-sm btn-rounded btn-xs">N/A</span></td>
					<td><span class="btn btn-danger btn-wth-icon icon-wthot-bg btn-sm btn-rounded btn-xs">No</span></td>
					<td>0</td>
					<td>AMANAT ALI</td>
					<td>dasdasd</td>
					<td>Customer Not Aware For Any Delivery</td>
					<td></td>
					<td></td>
					<td></td>
					<td>N/A</td>
					<td>52</td>
					<td>
					<div class="btn-group dropdown">
					    <button type="button" class="btn btn-primary"><i class="icon-list"></i></button>
                        <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        </button>
                        <div class="dropdown-menu w-210p">
                        <a class="dropdown-item" href="<?php echo base_url('tracking_parcel'); ?>">Edit</a>
						<a class="dropdown-item" href="#">Delete</a>
						<a class="dropdown-item" href="#">LabelA4</a>
						<a class="dropdown-item" href="#">Label4*6</a>
						<a class="dropdown-item" href="#">Update</a>
						<a class="dropdown-item" href="#">SMS</a>
						<a class="dropdown-item" href="#">Attach File</a>
						<a class="dropdown-item" href="#">On Hold</a>
						<a class="dropdown-item" href="#">Transfer Shipment</a>
                        </div>
                    </div>
					</td>
				</tr>
				 <tr>
				    <td>2<br/><input type="checkbox" onclick="toggle(this)" name="selectAll[]" value=""/>
                                
                                </td>
					<td>Monday, November 4, 2019 09:09:12 AM</td>
					<td>adasda</td>
					<td>-</td>
					<td><a href="" target="_blank">TAM7618957057</a><br></td>
					<td>0</td>
					<td>2</td>
					<td>Rass</td>
					<td>Afif</td>
					<td>10</td>
					<td>Shopify</td>
					<td><a href="" target="_blank">asd</a><br></td></td>
					<td>N/A</td>
					<td></td>
					<td style="background-color:#AEFFAE;">
				    <span></span><i class="fa fa-cab"></i>  Pickup Collected&nbsp;
					(10.00)
			        </td>
					<td><span class="btn btn-danger btn-wth-icon icon-wthot-bg btn-sm btn-rounded btn-xs">Pending</span></td>
					<td></td>
					<td></td>
					<td><span class="btn btn-success btn-rounded btn-xs">YES</span></td>
					<td><span class="btn btn-success btn-rounded btn-xs">CSA</span></td>
					<td><span class="btn btn-success btn-rounded btn-xs">YES</span></td>
					<td><span class="btn btn-danger btn-wth-icon icon-wthot-bg btn-sm btn-rounded btn-xs">N/A</span></td>
					<td><span class="btn btn-danger btn-wth-icon icon-wthot-bg btn-sm btn-rounded btn-xs">N/A</span></td>
					<td><span class="btn btn-danger btn-wth-icon icon-wthot-bg btn-sm btn-rounded btn-xs">No</span></td>
					<td>0</td>
					<td>AMANAT ALI</td>
					<td>dasdasd</td>
					<td>Customer Not Aware For Any Delivery</td>
					<td></td>
					<td></td>
					<td></td>
					<td>N/A</td>
					<td>52</td>
					<td>
					<div class="btn-group dropdown">
					                    <button type="button" class="btn btn-primary"><i class="icon-list"></i></button>
                                        <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        </button>
                                        <div class="dropdown-menu w-210p">
                                            
                                            <a class="dropdown-item" href="#">Edit</a>
						<a class="dropdown-item" href="#">Delete</a>
						<a class="dropdown-item" href="#">LabelA4</a>
						<a class="dropdown-item" href="#">Label4*6</a>
						<a class="dropdown-item" href="#">Update</a>
						<a class="dropdown-item" href="#">SMS</a>
						<a class="dropdown-item" href="#">Attach File</a>
						<a class="dropdown-item" href="#">On Hold</a>
						<a class="dropdown-item" href="#">Transfer Shipment</a>
                                        </div>
                                    </div>
					</td>
				</tr>
				 <tr>
				    <td>2<br/><input type="checkbox" onclick="toggle(this)" name="selectAll[]" value=""/>
                                
                                </td>
					<td>Monday, November 4, 2019 09:09:12 AM</td>
					<td>adasda</td>
					<td>-</td>
					<td><a href="" target="_blank">TAM7618957057</a><br></td>
					<td>0</td>
					<td>2</td>
					<td>Rass</td>
					<td>Afif</td>
					<td>10</td>
					<td>Shopify</td>
					<td><a href="" target="_blank">asd</a><br></td></td>
					<td>N/A</td>
					<td></td>
					<td style="background-color:#AEFFAE;">
				    <span></span><i class="ion ion-md-alert"></i>  Not Delivered &nbsp;(15000.00) (Customer Not Aware For Any Delivery )
			        </td>
					<td><span class="btn btn-danger btn-wth-icon icon-wthot-bg btn-sm btn-rounded btn-xs">Pending</span></td>
					<td></td>
					<td></td>
					<td><span class="btn btn-success btn-rounded btn-xs">YES</span></td>
					<td><span class="btn btn-success btn-rounded btn-xs">CSA</span></td>
					<td><span class="btn btn-success btn-rounded btn-xs">YES</span></td>
					<td><span class="btn btn-danger btn-wth-icon icon-wthot-bg btn-sm btn-rounded btn-xs">N/A</span></td>
					<td><span class="btn btn-danger btn-wth-icon icon-wthot-bg btn-sm btn-rounded btn-xs">N/A</span></td>
					<td><span class="btn btn-danger btn-wth-icon icon-wthot-bg btn-sm btn-rounded btn-xs">No</span></td>
					<td>0</td>
					<td>AMANAT ALI</td>
					<td>dasdasd</td>
					<td>Customer Not Aware For Any Delivery</td>
					<td></td>
					<td></td>
					<td></td>
					<td>N/A</td>
					<td>52</td>
					<td>
					<div class="btn-group dropdown">
					                    <button type="button" class="btn btn-primary"><i class="icon-list"></i></button>
                                        <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        </button>
                                        <div class="dropdown-menu w-210p">
                                            
                                            <a class="dropdown-item" href="#">Edit</a>
						<a class="dropdown-item" href="#">Delete</a>
						<a class="dropdown-item" href="#">LabelA4</a>
						<a class="dropdown-item" href="#">Label4*6</a>
						<a class="dropdown-item" href="#">Update</a>
						<a class="dropdown-item" href="#">SMS</a>
						<a class="dropdown-item" href="#">Attach File</a>
						<a class="dropdown-item" href="#">On Hold</a>
						<a class="dropdown-item" href="#">Transfer Shipment</a>
                                        </div>
                                    </div>
					</td>
				</tr>
			</tbody>
			
	    </table>
		</div>
	</section>
	</section>
	
	
   
<?php include APPPATH.'views/includes/footer.php';?>