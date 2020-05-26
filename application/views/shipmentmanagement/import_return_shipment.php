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
			<li class="breadcrumb-item active" aria-current="page">Import Return Shipment</li>
        </ol>
    </nav>
	<div class = "container">
	<div class="breadcrumb-line">
	    <div class="hk-pg-header">
            <h4><i data-feather="arrow-left-circle"></i></i> 
            <span class="text-semibold"></span>Import Return Shipment</h4>
		</div>
	</div>
	<section class="hk-sec-wrapper">
	<div class="panel panel-flat">
        <div class="panel-heading"><h5 class="panel-title">Return CSV Shipment</h5></div><br>
    	<div class="panel-body">         
  			<div id="contentwrapper" class="contentwrapper">
    			<div class="alert alert-info">
    				<div class="row">
    				<div class="col-md-8">
					<p>Note: To import bulk shipments use this import feature. Below are the columns you must have according to serial number in the excel csv file. 2. You must have to insert paymode as : CASH or COD<p>  
					</div>
    				<div class="col-md-4 " align="center">
    				<a href="" class=""><i class="fa fa-file-excel-o fa-2x"></i> <br>Return CVS Shipment</a></div>
    				</div>
    			</div>      
                <section class="hk-sec-wrapper">
                <div class="panel panel-default">
                    <div class="panel-body">
                        <div class="table-responsive">
                        <table class="table table-striped table-bordered table-hover">
                            <tbody><tr>
                                <td>(1) Old AWB No.</td>
                                <td>(2) Weight(GM) </td>
                                <td>(3) Pieces</td>
                            </tr>         
                        </tbody></table>
                       
                        <span class="alert" style="color:#F00;"> </span>	
                        <form class="stdform" method="post" name="add_ship" enctype="multipart/form-data" action="">
                        
                        <label><strong>Import File</strong></label><br>
                        <span class="field">
                        <input type="file" name="uploadedfile" value="" size="20" class="">
                        <span id="weight" class="alert"></span></span><br><br>
                        <button type="submit" class="btn btn-primary" name="submit" value="submit" onclick="return Valid_ship(document.add_ship); ">Add Return Shipment</button>
                        </form>
                        </div>
                    </div>
                </div>
				</section>
    		</div>            
		</div>
    </div>
	</section>
   <?php include APPPATH.'views/includes/footer.php';?>