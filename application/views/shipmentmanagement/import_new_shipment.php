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
			<li class="breadcrumb-item active" aria-current="page"> Import New Shipment</li>
        </ol>
    </nav>
	<div class = "container">
	<div class="breadcrumb-line">
	    <div class="hk-pg-header">
            <h4><i data-feather="arrow-left-circle"></i></i> 
            <span class="text-semibold"></span> Import New Shipment</h4>
		</div>
	</div>
	<section class="hk-sec-wrapper">
	<div class="panel panel-flat">
        <div class="panel-heading"><h5 class="panel-title">Import New Shipment</h5></div><br>
    	<div class="panel-body">
    		<div id="contentwrapper" class="contentwrapper">
    			<div class="alert alert-info">
    				<div class="row">
        				<div class="col-md-8">
						<P>Note: To import bulk shipments use this import feature. Below are the columns you must have according to serial number in the excel csv file. 2. You must have to insert paymode as : CASH or COD </p>
						</div>
        				<div class="col-md-4" align="center">
      					<a href="" class=""><i class="fa fa-file-excel-o fa-2x"></i><br>Import Shipment</a>
           				</div>
  					</div>
				</div>
    
                <div class="panel panel-default">
                <div class="panel-body">
				<section class="hk-sec-wrapper">
                <div class="table-responsive">
                <table class="table table-striped table-bordered table-hover">
                    <tbody><tr>
                        <td>(1) Reference</td>
                        <td>(2)Shipper Reference </td>
                        <td>(3) Weight(GM) </td>
                        <td>(4) Booking Mode</td>
                     
                    </tr>
                    
                    <tr>
                        <td>(5) Product/type</td>
                        <td>(6) Pickup Location</td>
                        <td>(7) Destination</td>
                        <td>(8) Consignor Name</td>
                        
                    </tr>
                    
                    <tr>
                        <td>(9) Consignor Address</td>
                        <td>(10) Consignor Mobile</td>
                        <td>(11) Consignor E-mail</td>
                        <td>(12) Description</td>
                        
                    </tr>
                    
                    <tr>
                        <td>(13) COD Amount</td>
                        <td>(14) Service</td>
                        <td>(15) Shipment Value</td>
                        <td>(16) POD(Y/N)</td>
                        
                    </tr>
                     <tr>
                        <td>(17) UID Account Number</td>
                        <td>(18) Shipping Zone</td>
                       
                    </tr>	
                    
				</tbody></table>
                       
        		<span class="alert" style="color:#F00;"> </span>
                      
        		<form class="stdform" method="post" name="add_ship" enctype="multipart/form-data" action="" accept-charset="utf-8">
                                   
        		<label><strong>Import File</strong></label><br>
        		<span class="field">
        		<input type="file" name="uploadedfile" value="" size="10" class="">
        		<span id="weight" class="alert"></span></span><br><br>
        
         		<button type="submit" class="btn btn-primary" name="submit" value="submit" onclick="return Valid_ship(document.add_ship); ">Add Shipment</button>
         </form>
         
                </div>
                </div>
                </div>
                
			</div>
        </div>
	</div>
	</section>
	</section>
   <?php include APPPATH.'views/includes/footer.php';?>