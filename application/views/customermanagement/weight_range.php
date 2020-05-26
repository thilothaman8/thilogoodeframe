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
            <li class="breadcrumb-item active" aria-current="page">Customer Management</li>
			<li class="breadcrumb-item active" aria-current="page">Weight Range Setup</li>
        </ol>
    </nav>
	<div class = "container">
	<div class="breadcrumb-line">
	    <div class="hk-pg-header">
            <h4><i data-feather="arrow-left-circle"></i></i> 
            <span class="text-semibold"></span>Home -Add New Weight Range</h4>
		</div>
	</div><br>
	<section class="hk-sec-wrapper">
		<div class="panel-heading">
				<h5 class="panel-title">Weight Range Setup</h5>
		</div><br>
		<form class="stdform " method="post" action="" name="add_product_type" enctype="multipart/form-data">
           
      						 
             
                            <input type="hidden" value="1" id="count" name="count_value">
                            <div id="add_range_style">
                            <div class="form-group">
                            <label>&nbsp;</label>
                            <table class="table table-striped table-bordered table-hover">
                            <thead>
                                <tr>
                                <th>Sr.No.</th>
                                <th>Start Range In Kg</th>
                                <th> End Range In Kg</th>
                                <th></th>
                                </tr>
                            </thead>
                            
                            <tbody>
                            <tr>
                            <td> <strong>#1</strong></td>
                            <td><input type="text" class="form-control" name="start_range_1" id="start_range_1" value="0"></td>
                            <td><input type="text" class="form-control" name="end_range_1" id="end_range_1" value=""></td>
                            
                            <td><a class="btn btn-info"  onclick="add_price_range(document.add_product_type)">Add</a></td>
                            </tr>
                            
                            <tr>
                            <td></td>
                            <td><span id="alert_start_range_1_info" class="alert"></span></td>
                            <td><span id="alert_end_range_1_info" class="alert"></span></td>
                            <td></td>
                            </tr>
                            </tbody>
                            </table>        
           					</div>
         					</div>                 
           		
           					  
                               
                            <p align="center">
                            <input name="id" type="hidden" value="">
                            <input name="cust_id" type="hidden" value="63">
                                                        <input name="submit" type="submit" class="btn btn-primary" value="Submit" onclick="return validproducttype(document.add_product_type);">
                            </p>
                            
        					</form>
    </section>		
<?php include APPPATH.'views/includes/footer.php';?>