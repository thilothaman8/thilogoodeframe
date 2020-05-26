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
			<li class="breadcrumb-item active" aria-current="page">Scan Shipment</li>
        </ol>
    </nav>
	<div class = "container">
	<div class="breadcrumb-line">
	    <div class="hk-pg-header">
            <h4><i data-feather="arrow-left-circle"></i></i> 
            <span class="text-semibold"></span>Warehouse Management</h4>
		</div>
	</div>
	<section class="hk-sec-wrapper">
		<div class="panel-heading">
				<h5 class="panel-title">Warehouse Scan</h5>
		</div><br>
        <div class="panel-body">
             
                 <div class="form-group">
					<param name="SRC" value="y">
					<div style="display:none">
				    <audio id="audio" controls="">
					<source src="" type="audio/ogg">
					</audio></div>
                </div>
              
                <div class="col-md-3">
                  <div class="form-group">
                    <label>Scan Shelve/Shipments </label>
                    <input type="text" id="scan_awb" my-enter="doSomething()" ng-model="slip_no" class="form-control ng-pristine ng-untouched ng-valid ng-empty">
                  </div>
                </div>
                
        </div>
            <div class="row">
                <div class="col-lg-6">
                </div>
                <div class="col-lg-6"><input class="btn-primary" type="button" onclick="create_zip();" value="Export to Zip" style="float:right;"></div>
              </div>
            <div class = "table-responsive">
			 <table class="table table-hover table-bordered mb-0">
			    <thead>
                  <tr>
                    <th class="head1">Sr.No</th>
                    <th class="head0">Awb No.</th>
                    <th class="head0">Shelve No</th>
                    <th class="head0">Orgin</th>
                    <th class="head1">Destination</th>
                    <th class="head1">Schedule </th>
                    <th class="head0">Channel </th>
                    <th class="head1">Schedule Date </th>
                    <th class="head1">On Hold </th>
                    <th class="head1">Onhold Confirm </th>
                    <th class="head0">Driver Code </th>
                    <th class="head0">Last OFD</th>
					
                  </tr>
                </thead>
			</table>	
			</div>
    </section>		
<?php include APPPATH.'views/includes/footer.php';?>