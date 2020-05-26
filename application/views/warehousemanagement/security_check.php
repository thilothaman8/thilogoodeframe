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
			<li class="breadcrumb-item active" aria-current="page">Security Check</li>
        </ol>
    </nav>
	<div class = "container">
	<div class="breadcrumb-line">
	    <div class="hk-pg-header">
            <h4><i data-feather="arrow-left-circle"></i></i> 
            <span class="text-semibold"></span>Security Check</h4>
		</div>
	</div>
	<section class="hk-sec-wrapper">
		<div class="panel-heading">
				<h5 class="panel-title">Security Check</h5>
		</div><br>
	
        <div class="row">
            <div class="col-sm">
                <div class="row">  
                    <div class="col-md-4">
                        <input type="text" id="" ng-model="drs_id" class="form-control ng-pristine ng-untouched ng-valid ng-empty" placeholder="DRS Id">
                    </div>
                    <div class="col-md-4">
                        <input type="text" id="scan_awb" my-enter="doSomething()" ng-model="slip_no" class="form-control ng-pristine ng-untouched ng-valid ng-empty" placeholder="Scan shipments">
                    </div>
					<div class="col-md-2">
					</div>
                    <div class="col-md-2">
                        <input type="button" ng-click="create_menifest();" value="Verify" class="btn btn-primary">
                    </div> 
					<div class="col-md-2"><br>
                        <input class="btn btn-info" type="button" onclick="create_zip();" value="Export Completed">
					</div>
					<div class="col-md-2"><br>
                        <input class="btn btn-info" type="button" onclick="create_zip1();" value="Export ALL"></div>
					</div>
                </div>
			</div><br>
			
	    <div class="row">
            <div class="col-sm">
                <div class="row"> 		
        			
					<div class="col-md-6">
					    <section class="hk-sec-wrapper">
							<div class="panel panel-default">
								<div class="panel-body">Sort</div>
							</div>
						</section>	
							<table class="table table-hover mb-0">
								<thead>
									<tr>
										<th class="head1">Sr.No</th>
										<th class="head0">Awb No.</th>
										<th class="head0">Scaned/Total</th>
										<th class="head0">Orgin</th>
										<th class="head1">Destination</th>
										<th class="head1">Remove</th>
									</tr>
								</thead>
								<tbody>
								    <td></td>
								    <td></td>
							        <td></td>
								    <td></td>
									<td></td>
								</tbody>
							</table>
					</div>
					
					<div class="col-md-6">
					
					<section class="hk-sec-wrapper">
						<div class="panel panel-default">
							<div class="panel-body">Completed</div>
						</div>
					</section><br>
						
							<table class="table table-hover mb-0">
								<thead>
									<tr>
										<th class="head1">Sr.No</th>
										<th class="head0">Awb No.</th>
										<th class="head0">Scanned/Total</th>
										<th class="head0">Orgin</th>
										<th class="head1">Destination</th>
									</tr>
								</thead>
								<tbody>
								    <td></td>
							        <td></td>
								    <td></td>
								    <td></td>
								    <td></td>
								</tbody>
							</table>
						
					</div>
				</div>
            </div>
        </div>			
   
    </section>		
<?php include APPPATH.'views/includes/footer.php';?>