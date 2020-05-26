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
			<li class="breadcrumb-item active" aria-current="page">Show On Hold Report</li>
        </ol>
    </nav>
	<div class = "container">
	<div class="breadcrumb-line">
	    <div class="hk-pg-header">
            <h4><i data-feather="arrow-left-circle"></i></i> 
            <span class="text-semibold"></span>Show On Hold Report</h4>
		</div>
	</div>
	<section class="hk-sec-wrapper">
		<div class="panel-heading">
		<h5 class="panel-title">Show On Hold Report</h5>
		</div><br>
		<section class="hk-sec-wrapper">
		<table class="table table-hover mb-0">
        
        <thead>
        
        
        <tr>
        <td colspan="8">
        <div class="row">
        
        <div class="col-md-3">
        <input type="date" name="search_date" id="search_date" class="form-control" value="">
        </div>
      
        <div class="col-md-3">
        <select name="main_status" class="form-control">
        <option value=""> Status</option>
        <option value="OH"> On Hold</option>
        <option value="OHR"> Removed On HOld</option>
        <option value="RFDE">Ready for Delivery</option>
        </select>
        </div>
          
        <div class="col-md-3">
        <input type="submit" name="bt_search" value="Generate Report" class="btn btn-primary">
        </div>
         <div class="col-md-3">
        <input type="button" name="bt_search" value="Download Report" onclick="create_zip()" class="btn btn-warning">
        </div>
        
        </div>								
        </td>
        </tr>
        					
        
        </thead>
		
        </table>
		</section>
		<div class = "table-responsive">
		<table class="table table-hover mb-0">
            <thead>
							<tr>
								<th>Date</th>
                                <th>Update By</th>
								<th>Reference#</th>
								<th>AWB#</th>
                                <th>Delivery Attempts</th>
								<th>Origin</th>
								<th>Destination</th>
                                <th>Reciever Name </th>
                                <th>Reciever Address </th>
                                <th>Reciever Phone</th>
                                <th>Mode</th>
								<th>Status</th>
                                <th>COD Amount</th>
								<th>Sub Category</th>
                                <th>Detail</th>
                                <th>Driver Comment </th>
                                <th>Schedule Chanel </th>
                                <th>On Hold </th>
                                <th>Driver Name </th>
                                <th>Supplier Name </th>
                                <th>Shelve </th>
                                <th>Customer Account </th>
                                <th>Schedule Date </th>
                                <th>Schedule Chanel </th>
                                <th>Time Slot </th>
								<th>Area Street </th>
                                <th>Area</th>
                             <th>latitude,longitude</th>
                            </tr>
			</thead>
		
		<tbody>
		            <tr>
								<td>
                                	
                                    14- 11 -2019 12:21:49
                                                                 
                                </td>
                                <td>Fastcoo</td>
								<td>dwdwqe</td>
								<td>TAM4791663740</td>
                                <td>1</td>
								<td class="text_cap">
                                Rass
                                </td>
								<td class="text_cap"> Dammam</td>
                                <td class="text_cap">ewewqe</td>
                                <td class="text_cap">eweqweq</td>
                                <td class="text_cap">9876543210</td>
                             	<td class="text_cap">COD</td>
							    <td>
								<span class=" icon-blocked"></span> Not Delivered&nbsp;
                                </td>
							    <td> COD(10.00)   
                                </td>
                                <td>On hold</td>
                                <td>On Hold due to Customer Does Not Have Cash</td>
                                <td></td>
                       			<td><span class="btn btn-success btn-xs">Yes</span></td>
                                <td> YES </td>
                                <td></td>
                                <td> </td>
                                <td>R207-02-09-04</td>
                                <td>8752364</td>
                                <td> Thu, 14- Nov -2019</td>
                                <td><span class="label label-success">BLIND</span></td>
                                <td>10:00 AM - 4:00 PM</td>
                                <td></td>
                                <td></td>
                                <td>0,0</td>
						</tr>
						<tr>
								<td>
                                	
                                    14- 11 -2019 12:21:35
                                                                 
                                </td>
                                <td>Fastcoo</td>
								<td>dwdwqe</td>
								<td>TAM4791663740</td>
                                <td>1</td>
								<td class="text_cap">
                                Rass
                                </td>
								<td class="text_cap"> Dammam</td>
								
								<td class="text_cap">ewewqe</td>
                                <td class="text_cap">eweqweq</td>
					
                                <td class="text_cap">9876543210</td>
                             	<td class="text_cap">COD</td>
							    <td>
								<span class=" icon-blocked"></span> Not Delivered&nbsp;
                                </td>
							    <td> COD(10.00)   
                                </td>
							
                                <td>On hold</td>
                                <td>On Hold due to Customer Does Not Have Cash</td>
                                <td></td>
                       			<td><span class="btn btn-success btn-xs">Yes</span></td>
                                <td> YES </td>
                                <td></td>
                                <td> </td>
                                <td>R207-02-09-04</td>
                                <td>8752364</td>
                                <td> Thu, 14- Nov -2019</td>
                                <td><span class="label label-success">BLIND</span></td>

                                <td>10:00 AM - 4:00 PM</td>
                                <td></td>
                                <td></td>
                                <td>0,0</td>
						</tr>
		    </tbody>
		</table>
		</div>
		</section>
 <?php include APPPATH.'views/includes/footer.php';?>