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
            <li class="breadcrumb-item active" aria-current="page">DRS Management</li>
			<li class="breadcrumb-item active" aria-current="page">Scan New Drs</li>
        </ol>
    </nav>
	<div class = "container">
	<div class="breadcrumb-line">
	    <div class="hk-pg-header">
            <h4><i data-feather="arrow-left-circle"></i></i> 
            <span class="text-semibold"></span>Scan New Drs</h4>
		</div>
	</div>
	<section class="hk-sec-wrapper">
		<div class="panel-heading">
				<h5 class="panel-title">Scan New Drs</h5>
		</div><br>
	<div class="panel-body">
            
	<form role="form" id="add_menifest" method="post" action="" name="add_menifest" enctype="multipart/form-data">
		 <div class="row">
            <div class="col-sm">
                <div class="row">
		
					<div class="col-md-6">
					
					<label>Select Country</label>
					<span id="alert_name" class="error_alert"></span>
					<select name="sel_country" class="form-control" id="sel_country" onchange="createCityDropdownById_pick_scan(this.value);">
					<option value="" selected="selected">Please Select</option><option value="1">Saudi Arabia</option></select>
					     
					</div>  
					  
					<div class="col-md-6">  
					  
					<label>Select City</label><span class="alert"></span>
					<span id="city_dropdown_show">
					<select name="city_id" id="city_info" class="form-control">
					<option value="">please select</option>
					</select>
					 </span>
					
					</div>
									   
					<div class="col-md-6"> <br>
					  
					<label>Route code</label>&nbsp;&nbsp;
					<a href="" target="_new" class="fa fa-plus">Add New Route</a>
					<span id="routecode" class="alert"></span>
					<select name="routecode" id="show_route_dropdown" class="form-control" onchange="getMessanger(this.value)">
					<option value="" selected="selected">Please select</option>
				    </select>
					
					</div>
					
					<div class="col-md-6">  <br> 
					
					<label>Select Messanger</label>&nbsp;&nbsp;
					<a href="" target="_new" class="fa fa-plus">Add Messenger</a>
					<span id="messanger_id" class="alert"></span>
					<select name="messanger_id" id="show_messanger_dropdown" class="form-control">
					<option value="">Please select</option>
							   
					<option value="1">Ameen-Test</option>
							   
					<option value="4">Basim Sameer</option>
							   
					<option value="5">Rashid Nazir</option>
							   
					<option value="6">Marwan</option>
							   
					<option value="7">Abdul Rehman Ahmed</option>
							   
					<option value="8">Abdullah Yaqoub</option>
							   
					<option value="9">Abdul Majeed Saleh</option>
							   
					<option value="10">Nasser Ali</option>
							   
					<option value="11">Naser Az Alden</option>
							   
					<option value="12">Ali Aedh Abdullah</option>
							   
					<option value="13">Abdulaziz</option>
							   
					<option value="14">Ali Raza</option>
							   
					<option value="15">Fadhal Ahmed</option>
							   
					<option value="876">Faisal Alamgir Muhammad Almagir </option>
							   
					<option value="877">Benjamin Benjamin Makur </option>
					</select>
					
					</div>
								
					<div class="col-md-2">
                    <input type="hidden" id="all_data" value="" name="awb_no">
					<label>&nbsp;</label>				
					<button type="submit" name="submit" class="bt btn-primary form-control">Make Drs</button>					
					</div>
					
					
				</div>
            </div>
        </div>			
	</form>
                
    <div class="col-md-6"><br>
			<div class="form-group">
				<label>Scan barcode</label>
				<input type="text" id="scan_awb" class="form-control">
			</div>
    </div>
                	
    <div class="col-md-12" id="message">
         
    </div>
				
    <div class="col-md-12 table-responsive" id="show_shipment_by_ajax">
		<table class="table table-bordered table-striped table-hover table-condensed">
			<tbody><tr>
					<th>Awb No.</th>
					<th>Receiver</th>
					<th>Pieces</th>
					<th>Weight</th>
					<th>Address</th>
									 
				</tr>
				<tr>
					<td></td>
					<td></td>
					<td></td>
					<td></td>
					<td></td>
				</tr>
			</tbody>
		</table>
	</div>
</div>
    </section>		
    <?php include APPPATH.'views/includes/footer.php';?>