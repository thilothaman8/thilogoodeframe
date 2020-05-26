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
			<li class="breadcrumb-item active" aria-current="page">Add Zone</li>
        </ol>
    </nav>
	<div class = "container">
	<div class="breadcrumb-line">
	    <div class="hk-pg-header">
            <h4><i data-feather="arrow-left-circle"></i></i> 
            <span class="text-semibold"></span>Add Zone</h4>
		</div>
	</div><br>
	<section class="hk-sec-wrapper">
		<div class="panel-heading">
				<h5 class="panel-title">Add Zone</h5>
		</div><br>
		<div class="row">
<div class="col-lg-12">
<div class="panel panel-default">
<div class="panel-body">
<div class="row">
<div class="col-lg-12">
        <form class="stdform" method="post" action="" name="edit_rate" id="edit_rate" enctype="multipart/form-data">
        <input type="hidden" name="customer_id" value=" 65 ">
        <input type="hidden" name="country_id" id="country_id" value="">
        <input type="hidden" name="cust_id" id="cust_id" value="65">
        <input type="hidden" name="agent_id" id="agent_id" value="">
        <input type="hidden" name="carrer_id" id="carrer_id" value="">
        <input type="hidden" name="product_type" id="product_type" value="">
        <input type="hidden" name="sel_service_id" id="sel_service_id" value=""> 
        <p>
        <label>Please Select From Zone</label>
        <span class="field" style="font-weight:bold;">
        <select name="zone_id" id="zone_id" class="form-control input-lg"><option value="1">JED</option><option value="2">RUH</option><option value="3">DMM</option><option value="5">UnCovered Zone NEW</option><option value="6">HAIL</option><option value="7">HAIL</option></select>
        <span id="alert_service_id"></span></span>
        </p><br>
        <p>
        <label>Please Select Service</label>
        <span class="field" style="font-weight:bold;">
        <select name="sel_service_id" id="sel_service_id_new" class="form-control input-lg"><option value="3">Express Service</option><option value="4">Advance Service</option></select>
        <span id="alert_service_id"></span></span>
        </p><br>
                        
        <p>
        <label>Please Select Product Type</label>
        <span class="field" style="font-weight:bold;">
        <select name="product_type" id="product_type" class="form-control input-lg"><option value="KVAIMI">Parcel</option></select>
        </span>
        </p><br>
        <p class="stdformbutton">
        <input name="edit_select_service_id" type="hidden" value="">
        <input name="edit_cust_id" type="hidden" value="">
        <button type="submit" class="btn btn-primary" name="submit" id="submit" value="Submit" onclick="return Valid_rates(document.edit_rate);">Get Rates</button>      
        </p><br>
                        
                     
        </form> 
</div>
         
        <div class="table-responsive">
        <table class="table table-hover mb-0">


			<thead>
			<tr>
			<th class="">WEIGHT RANGE</th>

			<th class="head1">To JED</th>
			<th class="head1">To RUH</th>
			<th class="head1">To DMM</th>
			<th class="head1">To UnCovered Zone NEW</th>
			<th class="head1">To HAIL</th>
			<th class="head1">To HAIL</th>
				 
			</tr>
			</thead>
			<tbody>


			</tbody>





			

			</table>                          


			</div>
					  
					</div>
					
					
	
    </div>
    </div>
    </div>
    </div>
    </div>
    </section>		
<?php include APPPATH.'views/includes/footer.php';?>