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
                    <li class="breadcrumb-item active" aria-current="page">Operation Filter</li>
					<li class="breadcrumb-item active" aria-current="page">Driver Not Update</li>
                </ol>
    </nav>
	<div class = "container">
	<div class="breadcrumb-line">
	    <div class="hk-pg-header">
            <h4><i data-feather="arrow-left-circle"></i></i> 
            <span class="text-semibold"></span>Driver Not Update</h4>
		</div>
	</div>
	<section class="hk-sec-wrapper">
	<h5 class="hk-sec-title">Driver Not Update</h5>Shipment which OFD and driver not back for RTO<br>
	<section class="hk-sec-wrapper">
	<div class="row">
	<div class="col-md-3">
        <input class="form-control" type="text" name="daterange" value="01/01/2018 - 01/15/2018" />
    </div>
	<div class="col-md-3">
        <input type="submit" name="bt_search" value="Generate Report" class="btn btn-primary" />
    </div>
	<div class="col-md-3">
        <span class="btn btn-primary"> Total Shipment</span>  
       	</div>
	
	<div class="col-md-3">
        <button type="button" name="bt_search" data-toggle="tooltip" data-placement="top" title="Download Excel Report"  onclick="create_zip()" class="btn btn-primary" ><i class="fa fa-file-excel-o fa-2x"  aria-hidden="true"></i></button>
    </div>
	</div>
	</section>
	
	<div class = "table-responsive">
	<table id="testTable_new" class="table table-striped table-bordered table-hover" align="center">
	        <thead>
                <tr>
                    
								<th>Sr.No.</th>
                                <th>Reference#</th>
								<th>AWB#</th>
                                <th>Call Attempts</th>
                                <th>Delivery Attempts</th>
								<th>Origin</th>
								<th>Destination</th>
                                <th>Reciever Name </th>
                                <th>Reciever Address </th>
                                <th>Reciever Phone</th>
                                <th>Mode</th>
								<th>Status</th>
                                <th>COD Amount</th>
								<th>Schedule Chanel</th>
								<th>On Hold </th>
                                <th>Detail</th>
                                <th>Driver Comment </th>
                                <th>Schedule Chanel </th>
                                <th>Shelve </th>
                                <th>Customer Account </th>
                                <th>Sender Name </th>
                                <th>Schedule Date </th>
                               
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
		</section>
   
   <?php include APPPATH.'views/includes/footer.php';?>