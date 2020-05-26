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
			<li class="breadcrumb-item active" aria-current="page">Show In transit / Scanned not listed</li>
        </ol>
    </nav>
	<div class = "container">
	<div class="breadcrumb-line">
	    <div class="hk-pg-header">
            <h4><i data-feather="arrow-left-circle"></i></i> 
            <span class="text-semibold"></span> Show In transit / Scanned not listed Shipment</h4>
		</div>
	</div>
	<section class="hk-sec-wrapper">
	<div class="panel panel-flat"><!---->
    <div class="panel-heading"><!---->
		<h5 class="panel-title">In transit / Scanned not listed Shipment  <input class="btn-primary" type="button" onclick="create_zip();" value="Export to Zip"></h5>
	</div>
    <section class="hk-sec-wrapper">                     
	<table class="table table-hover mb-0">
        <thead>
         <form action="" method="POST" id="bar_code_Frm" name="bar_code_Frm"></form>
         <tr>
         <th class="head1" colspan="2">
           
            <input type="text" name="hub_name" id="hub_name" value="" placeholder="Enter Hub Name." class="form-control">	
            
            </th>
            <th class="head1" colspan="2">
           
            <input type="text" name="staff_name" id="staff_name" value="" placeholder="Enter Staff Name." class="form-control">	
            
            </th>
            <th class="head1" colspan="2">
           
            <input type="date" name="from" id="from" value="" placeholder="Enter From Date" class="form-control">	
            
            </th>
             <th class="head1">
           
            <input type="date" name="to" id="to" value="" placeholder="Enter To Date" class="form-control">	
            
            </th>
                       
            <th colspan="2"><br>
            <input type="submit" name="submit_btn" value="Search" class="btn btn-primary" onclick="return Valid_search(document.search_form);">
            <label>
			<div id="search_val" style="display:inline;"></div>
			</label>
            </th>
            </tr>
            
                <form name="search_form" method="post" action=""></form>
                    <input type="HIDDEN" name="show_type" value="">
					<tr>
						<th>Date</th>
						<th>  
						<a href=""> AWB#<img src=""> </a>  </th>
						<th>Hub Name</th>
                        <th>Origin </th>
                        <th>Destination </th>
                        <th>Staff Name </th>
                        <th>Details</th>
						<th>Status</th>
                    </tr>
		</thead>
			<tbody>
                                                           
                     <tr>
					        <td colspan="18" align="center">
						    <form action="" method="post">
                            <input type="hidden" name="all" value="1">
							<input type="hidden" name="pageval" id="pagevalid" value="0">
							</form>
							</td>
                    </tr>
			</tbody>  
	</table>
	</section>
    </div>
	
	</section>
   <?php include APPPATH.'views/includes/footer.php';?>