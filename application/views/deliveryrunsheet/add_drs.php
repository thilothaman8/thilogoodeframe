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
			<li class="breadcrumb-item active" aria-current="page">Add Delivery Run Sheet</li>
        </ol>
    </nav>
	<div class = "container">
	<div class="breadcrumb-line">
	    <div class="hk-pg-header">
            <h4><i data-feather="arrow-left-circle"></i></i> 
            <span class="text-semibold"></span>Home - Verification Date Update</h4>
		</div>
	</div>
	<section class="hk-sec-wrapper">
		<div class="panel-heading">
				<h5 class="panel-title">Add Delivery Run Sheet</h5>
		</div><br>
		<section class="hk-sec-wrapper">
	    <div class="panel panel-default">
			<div class="panel-body">
                <form name="" role="form" action="" method="post">
                    <div class="form-group">
						<label>Select Country</label>
						<span id="alert_name" class="error_alert"></span>
						<select name="sel_country" class="form-control" id="sel_country" onchange="createCityDropdownById_pick_scan(this.value);">
						<option value="" selected="selected">Please Select</option><option value="1">Saudi Arabia</option></select>
					</div>      
                        
                   <div class="form-group">  
						<label>Select City</label><span class="alert"></span>
						<span id="city_dropdown_show">
						<select name="city_id" id="city_info" class="form-control">
						<option value="">please select</option>
						</select>
						</span>
					</div>
                
                <input name="id" type="hidden" value="">
               
                
                <button type="submit" class="btn btn-primary" name="submit_city" value="Get Shipment">Get Shipment</button><br><br>

                <div class="form-group">  
					<label>Route code</label>&nbsp;&nbsp;
					<a href="" target="_new" class="fa fa-plus">Add New Route</a>
					<span id="routecode" class="alert"></span>
					<select name="routecode" id="show_route_dropdown" class="form-control" onchange="getMessanger(this.value)">
					<option value="" selected="selected">Please select</option>
					</select>
				</div>
                          
                <div class="form-group">  
					<label>Select Courier</label>&nbsp;&nbsp;
					<a href="" target="_new" class="fa fa-plus">Add Courier</a>
					<span id="messanger_id" class="alert"></span>
					<select name="messanger_id" id="show_messanger_dropdown" class="form-control">
					<option value="" selected="selected">Please select</option>
							   
					<option value="1">Ameen-Test</option>
							   
					<option value="4">Basim Sameer</option>
							   
					<option value="5">Rashid Nazir</option>
							   
					<option value="6">Marwan</option>
							   
					<option value="7">Abdul Rehman Ahmed</option>
							   
					<option value="8">Abdullah Yaqoub</option>
							   
					<option value="9">Abdul Majeed Saleh</option>
							   
					<option value="10">Nasser Ali</option>
							   
				   
					</select>
				</div>
                        
                
                <div id="show_shipment_by_ajax">
                
					<table class="table table-striped table-bordered table-hover stdtable stdtablecb overviewtable2" cellpadding="0" cellspacing="0" border="0">
				   
					<thead>
						<tr>
							<th class="head1">Select All  <input type="checkbox" onclick="toggle4(this)" name="selectAll[]"></th>
							<th class="head0">AWB No.</th>
							<th class="head1">Sender</th>
							<th class="head0">Receiver</th>
							<th class="head0">Receiver Address</th>
							<th class="head1">Status</th>
							<th class="head0">Date</th>
						</tr>
					</thead>
					
						<tbody> 
						
						</tbody> 
					
					</table>
                
          		</div><br>
                <input type="hidden" name="city_id_added" value="">
          		<button type="submit" class="btn btn-primary" name="submit" value="submit" onclick="return Valid_drs(document.edit_drs);">Add DRS</button>
                     
                </form>
                
             </div>     
        </div>
		<section>
    </section>	
   <?php include APPPATH.'views/includes/footer.php';?>