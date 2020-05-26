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
            <li class="breadcrumb-item active" aria-current="page">Product Type</li>
			<li class="breadcrumb-item active" aria-current="page">Add New Product</li>
        </ol>
    </nav>
	<div class = "container">
	<div class="breadcrumb-line">
	    <div class="hk-pg-header">
            <h4><i data-feather="arrow-left-circle"></i></i> 
            <span class="text-semibold"></span>Add New Product/Type</h4>
		</div>
	</div>
	<section class="hk-sec-wrapper">
	<h5 class="hk-sec-title">Add New Product/Type</h5><br>
	<div class="form-group">
                <label>Product Type Name</label>
                <span id="alert_package_title_info" class="alert"></span>
                <input type="text" class="form-control" name="package_title" id="package_title" value="">
                </div>
				<div class="contenttitle2">
                <h5>Weight Range Setup</h5>
                </div>
				<div id="add_range_style">
                <div class="form-group">
                <label>&nbsp;</label>
                <table class="table table-striped table-bordered table-hover">
                             
                <thead>
                    <tr> 
                        <th width="10%">Sr.No.</th>
                        <th>Start Range In Kg</th>
                        <th> End Range In Kg</th>
                        <th></th>
                        <!--<th style="border:solid 1px #000;" >End Range</th>-->
                    </tr>
                </thead>
                
                <tbody>
                <tr>
                    <td> <strong>1</strong></td>
                    <td><input type="text" class="form-control" name="start_range_1" id="start_range_1" value="0"></td>
                    <td><input type="text" class="form-control" name="end_range_1" id="end_range_1" value=""></td>
                    <td><a class="btn btn-info" style="cursor:pointer; background-color:" onclick="add_price_range(document.add_product_type)">Add</a></td>
                    <!--<td><input type="text" class="text" name="range_price_1" id="range_price_1" value=""/></td>-->
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
				<div class="contenttitle2">
                <h5>Weight Info</h5>
                </div>
				<div class="form-group">
                <label>Maximum Weight (kg)</label>
                <input type="text" name="weight" class="form-control" placeholder="Maximum Weight In kg" id="alert_end_range_info" value="">
                </div>
				<div class="contenttitle2">    
                <h5>Diamention Setup&nbsp;&nbsp;</h5>
                </div>
				<div class="form-group">
                <label>Do You want to Set Diamention</label>
                Yes <input type="radio" name="dia_check" value="Y" id="dia_check" checked="checked" onclick="show_dia();">
                No <input type="radio" name="dia_check" value="N" id="dia_check" onclick="show_dia();">
                </div>
				<div class="form-group">
                <label>Maximum Heigh}</label>
                <span id="alert_end_range_info" class="alert"></span>
                <input type="text" name="height" class="form-control" placeholder="Maximum Height in Cm" value="">
                </div>
				<div class="form-group">
                <label>Maximum Width</label>
                <span id="alert_end_range_info" class="alert"></span>
                <input type="text" name="width" class="form-control" placeholder="Maximum Width in Cm" value="">
                </div>
				<div class="form-group">
                <label>Maximum Length</label>
                <span id="alert_end_range_info" class="alert"></span>
                <input type="text" name="girth" class="form-control" placeholder="Maximum Length in Cm" value="">
                </div>
				<div class="contenttitle2">
                <h5>Service Type Info</h5>
                </div><br>
				<div class="form-group">
                <label>Select Type</label>
                <span id="alert_end_range_info" class="alert"></span>
                <input type="checkbox" name="DO" value="DO" checked="checked" onclick="showCollectionsAreMadeInputBoxForDeliveryService(this.value);">&nbsp;Local Drop Off
                
                &nbsp;<input type="checkbox" name="CS" id="collection_service" value="CS" onclick="select_pickupcharge();">&nbsp;Collection Service
                
                 
                 
                </div>
				<div class="form-group">
                <label>Pickup Charge</label>
                <span id="alert_end_range_info" class="alert"></span>
                <input type="text" name="pickupcharge" class="form-control" value="">
                </div>
				<div class="form-group">
                <label>Time</label><br>
                <strong>From</strong> 
                <input type="time" class="form-control" name="from_time" value=" 09:01 ">
                	
                <strong>To</strong>
                <input type="time" class="form-control" name="to_time" value="">		
                </div>
				<div class="contenttitle2">
                <h5>Info</h5>
                </div>
				<div class="form-group">
                <label></label>
                <span id="alert_end_range_info" class="alert"></span>
                <input type="radio" name="printer_required" value="Y" checked="checked">&nbsp;&nbsp;Yes&nbsp;
                   &nbsp; <input type="radio" name="printer_required" value="N">&nbsp;&nbsp;No
                </div>
				<div class="contenttitle2">
                <h5>More Info</h5>
                </div>
				<div class="form-group">
                <label>Compensation</label>
                <span id="alert_end_range_info" class="alert"></span>
                <textarea name="compensation_details" class="form-control"> </textarea>
                </div>
				<div class="form-group">
                <label>Description</label>
                <span id="alert_end_range_info" class="alert"></span>
                <textarea id="editor1" name="description" class="form-control"></textarea>
                <script> CKEDITOR.replace( 'editor1' );</script>
                </div>
				<p align="center">
                <input name="id" type="hidden" value="">
                                <input name="submit" type="submit" class="btn btn-primary" value="Submit" onclick="return validproducttype(document.add_product_type);">
                </p>
	</section>
  
<?php include APPPATH.'views/includes/footer.php';?>  
      
