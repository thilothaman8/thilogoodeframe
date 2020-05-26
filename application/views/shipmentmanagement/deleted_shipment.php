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
										</div>
										<div class="col-md-3">
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
	<table class="table mb-0">
	<thead>
        <tr>
        <th> Select All</th>
        <th>Date</th>
        <th>Reference#</th>
         <th>Shipper Reference#</th>
        <th>  
        <a href=""> AWB#<img src=""> </a>  </th>
        <th>Delivery Attempts</th>
        <th>Call Attempts</th>
        <th>Origin</th>
        <th>Destination</th>
        <th>Pieces</th>
        <th>  
        <a href=""> Sender <img src="" style="float:right;"></a> </th>
        <th>Reciever</th>
		<th>Forward Through</th>
		<th>Airway Bill No.</th>
        <th>Status</th>
        <th>Pay Status</th>
        <th>Payable Status</th>
        <th>Receivable Status</th>
        <th>Schedule </th>
        <th>Schedule Channel </th>
        <th>On Hold </th>
        <th>On Hold Reason</th>
        <th>On Hold Date</th>
        <th>On Hold Confirm</th>
        <th>On Hold Days</th>
        <th>Driver Name </th>
        <th>Driver Comment </th>
        <th>Details </th>
        <th>Driver Supplier</th>
        <th>Warehouse </th>
        <th>Shelve </th>
        <th>Schedule Date</th>
        <th>Weight</th>
		<th>Action</th>
        </tr>
        </thead>
		<tbody>
		    <tr>
				<td>1 </td>
				<td>Wednesday, August  7, 2019  03:20:34 PM</td>
				<td>TAM2758141824</td>
                <td>-</td>
                <td><a href="" target="_blank">TAM9139246479</a><br></td>
				<td>1</td>
                <td>1</td>
				<td> Riyadh</td>
				<td>
					Jeddah
				</td>
                <td>1 </td>
				<td>مرام القعدي</td>
				<td><a href="">Kaaf Meem</a></td>
	            <td>
				   N/A
			    </td>
				<td></td>
				<td>
				<span class=" icon-home"></span> Delivered&nbsp;
												</td>
	            <td><span class="label label-danger">Pending</span> </td>
				<td> </td>
                <td> </td>
				<td><span class="label label-danger">No</span></td>
                <td><span class="label label-danger">N/A</span></td>
                <td><span class="label label-danger">No</span></td>
			    <td><span class="label label-danger">N/A</span></td>
                <td><span class="label label-danger">N/A</span></td>
                <td><span class="label label-danger">No</span></td>
                <td>0</td>
				<td>Khalil Raheem Ali</td>
                <td></td>
                <td>shipmet delivered to kaaf meen  and receiver mobile no.is   966596167640</td>
                <td></td>
                <td>Logistics_JED</td>
				<td>J103-01-03-04</td>
				<td>N/A</td>	
			    <td>0.5</td>
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
				<td>2 </td>
				<td>Wednesday, August  7, 2019  03:20:34 PM</td>
	            <td>TAM9261992867</td>
                <td>-</td>
                <td><a href="" target="_blank">TAM3632879540</a><br></td>
				<td>1</td>
                <td>1</td>
				<td> Riyadh</td>
				<td>
					Jeddah
				</td>
                <td>1 </td>
				<td>Munirah Alsaleh</td>
				<td><a href="">Kaaf Meem</a></td>
                <td>
				  N/A
				</td>
                <td></td>
				<td>
				<span class="icon-bus"></span> Out for delivery&nbsp;
				</td>
                <td><span class="label label-danger">Pending</span> </td>
				<td> </td>
                <td> </td>
				<td><span class="label label-success">Yes</span></td>
                <td><a href="h" target="_blank"><span class="label label-success">BLI</span></a></td>
                <td><span class="label label-danger">No</span></td>
			    <td><span class="label label-danger">N/A</span></td>
                <td><span class="label label-danger">N/A</span></td>
                <td><span class="label label-danger">No</span></td>
                <td>0</td>
				<td>Zameem Al Attass</td>
                <td></td>
                <td>Out for delivery, Driver Name : Zameem Al Attass</td>
                <td></td>
                <td>Logistics_JED</td>
				<td>J103-01-03-03</td>
				<td>2019-08-17</td>	
			    <td>0.5</td>
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
				<td>3 </td>
				<td>Wednesday, August  7, 2019  03:20:34 PM</td>
				<td>TAM3055262401</td>
	            <td>-</td>
                <td><a href="https://tamco.fast-option.com/system145.php?c=shipment&amp;f=status_update&amp;statu_id=216630&amp;detail" target="_blank">TAM7431918836</a><br></td>
				<td>1</td>
                <td>1</td>
				<td> Al Hassa </td>
				<td>
					Jeddah
				</td>
                <td>1 </td>
				<td>Arfat Alalwan</td>
				<td><a href="">Kaaf Meem</a></td>
                <td>
				N/A
				</td>
                <td></td>
				<td>
				<span class="icon-bus"></span> Out for delivery&nbsp;
				</td>
                <td><span class="label label-danger">Pending</span> </td>
				<td> </td>
                <td> </td>
				<td><span class="label label-success">Yes</span></td>
                <td><a href="" target="_blank"><span class="label label-success">BLI</span></a></td>
                <td><span class="label label-danger">No</span></td>
			    <td><span class="label label-danger">N/A</span></td>
                <td><span class="label label-danger">N/A</span></td>
                <td><span class="label label-danger">No</span></td>
                <td>0</td>
				<td>Zameem Al Attass</td>
                <td></td>
                <td>Out for delivery, Driver Name : Zameem Al Attass</td>
                <td></td>
                <td>Logistics_JED</td>
				<td>J102-01-02-03</td>
				<td>2019-08-17</td>	
			    <td>0.5</td>
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
				<td colspan="18" align="center">
                <input type="hidden" name="pageval" id="pagevalid" value="0">
				<div class="input-group pagination"><div class="input-group-btn"> 
                <input type="submit" class="btn btn-default" value="‹ Prev">
                <input type="submit" class="btn btn-primary " value="1 " onclick="return callpage(1);">
                <input type="submit" class="btn btn-default center" value="2" onclick="return callpage(2);">
                <input type="submit" class="btn btn-default center" value="3" onclick="return callpage(3);">
                <input type="submit" class="btn btn-default center" value="4" onclick="return callpage(4);">
                <input type="submit" class="btn btn-default center" value="5" onclick="return callpage(5);">
                ...
                <input type="submit" class="btn btn-default center" value="1196" onclick="return callpage(1196);">
                <input type="submit" class="btn btn-default center" value="Next ›" onclick="return callpage(2);">
                </div></div>
				</td>
				</tr>
		</tbody>
		</table>
	</div>
	</section>
	</section>			
   <?php include APPPATH.'views/includes/footer.php';?>