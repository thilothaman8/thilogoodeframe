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
            <li class="breadcrumb-item active" aria-current="page">Warehouse Management</li>
			<li class="breadcrumb-item active" aria-current="page"> Inventory Report</li>
        </ol>
    </nav>
	<div class = "container">
	<div class="breadcrumb-line">
	    <div class="hk-pg-header">
            <h4><i data-feather="arrow-left-circle"></i></i> 
            <span class="text-semibold"></span> Inventory Report</h4>
		</div>
	</div>
	<section class="hk-sec-wrapper">
		<div class="panel-heading">
				<h5 class="panel-title"> Inventory Report</h5>
		</div><br>
		<div class="table-responsive">
			<table id="testTable" class="table table-striped table-bordered table-hover">
                 
                <thead>
					<tr>
						<th colspan="15">
						<button type="button" data-toggle="tooltip" data-placement="top" title="Download Excel Report" onclick="create_zip()" class="btn btn-info"><i class="fa fa-file-excel-o fa-2x" aria-hidden="true"></i></button>
						</th>
					</tr>      
					
					<tr>
						<th>Sr.No.</th>
						<th>Awb No</th>
						<th>Origin</th>
						<th>Destination</th>
						<th>Schedule Status</th>
						<th>Schedule Type</th>
						<th>Schedule Date</th>
						<th>On Hold</th>
						<th>Driver Code</th>
						<th>Last Ofd</th>
						<th>Report Type</th>
						<th>Date</th>
						<th>User</th>
					</tr>
				</thead> 
                 
                <tbody>
                    <tr>
						<td>1</td>
						<td>TAM1983997504</td>
						<td>Madina</td>
						<td>Riyadh</td>
						<td>Y</td>
						<td></td>
						<td></td>
						<td>NO</td>
						<td></td>
						<td></td>
						<td></td>
						<td></td>
						<td> </td>
					</tr>            

								
					<tr>
						<td>2</td>
						<td>TAM1983997504</td>
						<td>Madina</td>
						<td>Riyadh</td>
						<td>Y</td>
						<td></td>
						<td></td>
						<td>NO</td>
						<td></td>
						<td></td>
						<td></td>
						<td></td>
						<td> </td>
					</tr>            

								
					<tr>
						<td>3</td>
						<td>TAM9437477440</td>
						<td>Madina</td>
						<td>Riyadh</td>
						<td>Y</td>
						<td></td>
						<td></td>
						<td>NO</td>
						<td></td>
						<td></td>
						<td></td>
						<td></td>
						<td> </td>
					</tr>            

								
					<tr>
						<td>4</td>
						<td>TAM9437477440</td>
						<td>Madina</td>
						<td>Riyadh</td>
						<td>Y</td>
						<td></td>
						<td></td>
						<td>NO</td>
						<td></td>
						<td></td>
						<td></td>
						<td></td>
						<td> </td>
					</tr>            

								
					<tr>
						<td>5</td>
						<td>TAM1983997504</td>
						<td>Madina</td>
						<td>Riyadh</td>
						<td>Y</td>
						<td></td>
						<td></td>
						<td>NO</td>
						<td></td>
						<td></td>
						<td></td>
						<td></td>
						<td></td>
					</tr>            

								
					<tr>
						<td>6</td>
						<td>TAM1459227212</td>
						<td>Jeddah</td>
						<td>Riyadh</td>
						<td>Y</td>
						<td></td>
						<td></td>
						<td>NO</td>
						<td></td>
						<td></td>
						<td></td>
						<td></td>
						<td> </td>
					</tr>            

								
					<tr>
						<td>7</td>
						<td>TAM7347787239</td>
						<td>Jeddah</td>
						<td>Riyadh</td>
						<td>N</td>
						<td></td>
						<td></td>
						<td>YES</td>
						<td></td>
						<td></td>
						<td></td>
						<td></td>
						<td> </td>
					</tr>            

								
					<tr>
						<td>8</td>
						<td>TAM1308649833</td>
						<td>Jeddah</td>
						<td>Jeddah</td>
						<td>N</td>
						<td></td>
						<td></td>
						<td>YES</td>
						<td></td>
						<td></td>
						<td></td>
						<td></td>
						<td> </td>
					</tr>            

								
					<tr>
						<td colspan="10" align="center">
						<form name="frm_pagi" action="" method="post">
						<input type="hidden" name="pageval" id="pagevalid" value="0">
                        </form>
						</td>
                		
                    </tr>
				</tbody>  
                 			
			</table>
        </div>
    </section>		
<?php include APPPATH.'views/includes/footer.php';?>