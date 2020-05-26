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
                    <li class="breadcrumb-item active" aria-current="page">Audit</li>
					<li class="breadcrumb-item active" aria-current="page">Operation Audit</li>
                </ol>
    </nav>
	<div class = "container">
	<div class="breadcrumb-line">
	    <div class="hk-pg-header">
            <h4><i data-feather="arrow-left-circle"></i></i> 
            <span class="text-semibold"></span>Operation Audit</h4>
		</div>
	</div>
	<section class="hk-sec-wrapper">
	<h5 class="panel-title">Operation Audit &nbsp;<i class="fa fa-check-circle" style="font-size:15px;color:green">&nbsp;Complete Orders :</b></i>&nbsp;&nbsp;<i class="fa fa-warning" style="font-size:15px;color:red">&nbsp;Pending Orders :</b></i></h5><br>
	
	

				   
        <form name="" method="post" action="">
		<table class="table datatable-show-all table-bordered table-hover datatable-highlight panel panel-flat" style="height:200px !important;">
        
        <thead>
     
        
        <tr style="height:125px;">
        <td colspan="8">
        <div class="row">
		
        
          <div class="col-md-2" style="margin-top:20px;">
		      <input type="text" name="slip_no" placeholder="Enter AWB No" value="" class="form-control">
        					
        </div>
		
        <div class="col-md-2" style="margin-top:20px;">
		<select name="hub" id="hub" class="form-control" >
        <option  value="">Select Destination</option> 
        <option  selected="selected" value="Riyadh">Riyadh</option>
        <option  selected="selected"   value="Jeddah">Jeddah</option>
         <option selected="selected"   value="Dammam">Dammam</option>
        </select>
        					
        </div>
        <div class="col-md-2" style="margin-top:20px;">
		
        <select name="hub" id="hub" class="form-control" >
        <option  value="">Destnation Hub</option> 
        <option  selected="selected" value="Riyadh">Riyadh</option>
        <option  selected="selected"   value="Jeddah">Jeddah</option>
         <option selected="selected"   value="Dammam">Dammam</option>
        </select>  </div>
		<div class="col-md-4">
		<b>From&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp&nbsp;&nbsp; -To</b>
        <input class="form-control" type="text" name="daterange" value="01/01/2018 - 01/15/2018" />
        </div>
           
	
        <div class="col-md-2">
        <input type="submit" name="bt_search" value="Search" class="btn btn-primary" onClick="return Valid_search(document.search_form);" style="margin-top:20px;">
        </div>
        
         
        
        </div>								
        </td>
        </tr>
        					
        
        </thead>
		
        </table>
	<div class = "table-responsive">
	<table id="testTable_new" class="table table-striped table-bordered table-hover" align="center">
	        <thead>
			<tr><th colspan="18">
            <input class="btn-primary" type="button" value="Export to Zip" style="float:right;" onclick="create_zip();" >
            </th></tr>
                <tr>
                    <th>S.NO</th>
								<th>Sr.No.</th>
                                <th>AWB Number</th>
								<th>Schedule channel</th>
								<th>Driver name</th>
                                <th>Shipment status</th>
                                <th>Delivery Attempts</th>
								<th>Call attempt</th>
								<th>Call Recording</th>
                                <th>Origin</th>
                                <th>Destination</th>
                                <th>Sender name</th>
                                <th>Customer name</th>
								<th>Mobile number</th>
                                <th>Address awb</th>
								<th>CS address</th>
                                <th>Entry Date</th>
								<th>Action</th>
                                
                </tr>
            </thead>
			<tbody>
			    <tr>
				    <td></td>
					<td></td>
					<td></td>
					<td></td>
					<td></td>
					<td></td>
					<td></td>
					<td></td>
					<td></td>
					<td></td>
					<td></td>
					<td></td>
					<td></td>
					<td></td>
					<td></td>
					<td></td>
					<td></td>

				</tr>
			</tbody>
			
	    </table>
		</div>
	</section>
   
	<?php include APPPATH.'views/includes/footer.php';?>