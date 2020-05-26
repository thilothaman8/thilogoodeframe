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
			<li class="breadcrumb-item active" aria-current="page">Assigning Shipment</li>
        </ol>
    </nav>
	<div class = "container">
	<div class="breadcrumb-line">
	    <div class="hk-pg-header">
            <h4><i data-feather="arrow-left-circle"></i></i> 
            <span class="text-semibold"></span>  Home - Assigning Shipment</h4>
		</div>
	</div>
	<section class="hk-sec-wrapper">
<div class="panel panel-flat">
        <div class="panel-heading"> <h5 class="panel-title">Assigning Shipment</h5></div><br>

<div class="panel-body">
            <div class="col-md-12" id="message"> 
        </div>
            
  <form action="" method="post" name="traking">
            <div class="col-md-12">
            <div class="form-group">
            <textarea rows="8" id="show_awb_no" name="awb_no" required="" class="form-control"></textarea>
            </div>
            </div>
			
    <div class="row">
        <div class="col-sm">
            <div class="row">        
            <div class="col-md-4">
				<div class="form-group">
					<label>Assign To</label>
					<select name="csa_id" id="csa_id" class="form-control  input-lg">
				    <option value="" selected="selected">Please Select CSA</option><option value="59">Mohammed Ali Hefdhi</option><option value="72">MESHARI MUSTAFA MUZAFFAR</option><option value="84">Abdulkareem Abdulrhman Abdulqader</option><option value="85">Ali Ahmad Al Easi</option><option value="86">Ahmed Mohammed Youssef</option><option value="87">Ahmed abdullah allhyani</option><option value="88">Musleh Thaib Almotairi</option><option value="97">Muhannad Al Sofyani</option><option value="98">Abdulrazaq Hawsawi</option><option value="100">Talal Abu Ali</option><option value="101">Fahad Al Amri</option><option value="107">Zeeshan Haider Ali</option><option value="108">Asif Nawaz</option><option value="119">Tariq Bakhsh</option></select> 
				</div>
            </div>  
			 
            <div class="col-md-2">	
            <label>&nbsp;</label>	
            <button type="submit" class="btn btn-primary form-control">Submit</button>					
            </div>	
            </div>
        </div>
    </div>		
            </form>
</div>

</div><br>
</section>
<section class="hk-sec-wrapper">
	<div class="panel panel-flat">
			<div class="panel-heading">
				<h5 class="panel-title">Show Assigning Shipment</h5>
			</div>
			<div class="panel-body">
			<div style="float:right; margin-bottom: 10px;">
				<input type="submit" class="btn btn-primary" onclick="create_zip();" name="submit" value="Export To Excel">
			</div>
		<table class="table datatable-show-all table-bordered table-hover datatable-highlight">
				 <thead>
					<tr>
										<form name="search_form" method="post" action="https://tamco.fast-option.com/system145.php?c=shipment&amp;f=assigning_shipment"></form>
						<th colspan="3">
							<input type="date" name="bt_date1" class="form-control" id="search_date" value="">
						</th>
						<th colspan="4">
							<select name="csa_id" id="csa_id" class="form-control  input-lg">
				<option value="" selected="selected">Please Select CSA</option><option value="59">Mohammed Ali Hefdhi</option><option value="72">MESHARI MUSTAFA MUZAFFAR</option><option value="84">Abdulkareem Abdulrhman Abdulqader</option><option value="85">Ali Ahmad Al Easi</option><option value="86">Ahmed Mohammed Youssef</option><option value="87">Ahmed abdullah allhyani</option><option value="88">Musleh Thaib Almotairi</option><option value="97">Muhannad Al Sofyani</option><option value="98">Abdulrazaq Hawsawi</option><option value="100">Talal Abu Ali</option><option value="101">Fahad Al Amri</option><option value="107">Zeeshan Haider Ali</option><option value="108">Asif Nawaz</option><option value="119">Tariq Bakhsh</option></select> 
						</th>
						<th colspan="4">
							<input type="submit" name="Submit" class="btn btn-primary" value="Search" onclick="return Valid_search(document.search_form);">
						</th>
					
										
					</tr>
					
					<tr>
						<th>#</th>
						<th>AWB No.</th> 
						<th>Customer Service Assistant</th>
						<th>Assign Date</th>
						<th>Scheduled</th>
           				<th>Scheduled Channel</th>
           				<th>Reason</th>
           				<th>Comment</th>	  
					</tr>
				</thead>
				
				<tbody>
								</tbody>
				
	 
		</table>
		</div>
		</div>
	</section>
   <?php include APPPATH.'views/includes/footer.php';?>