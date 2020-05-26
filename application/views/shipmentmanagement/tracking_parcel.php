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
			<li class="breadcrumb-item active" aria-current="page">Tracking Parcel List</li>
        </ol>
    </nav>
	<div class = "container">
	<div class="breadcrumb-line">
	    <div class="hk-pg-header">
            <h4><i data-feather="arrow-left-circle"></i></i> 
            <span class="text-semibold"></span>Tracking Parcel List</h4>
		</div>
	</div>
	<section class="hk-sec-wrapper">
		<div class="panel-heading">
				<h5 class="panel-title">Tracking Parcel List</h5>
		</div><br>
		<div class="white">
						<div class="tab_container_set"> 
     <h5> <input class="btn-primary" type="button" onclick="create_zip();" value="Export to Excel ZIP"></h5>
     <br>
        				 

          				 
          				
                   
      					  
     					<b> Tracking Result for AWB# TAM9262498472</b>
        				<table class="table table-striped">
                        <tbody><tr>
                            <td><b class="size-2">Date</b></td>
                            <td><b class="size-2">Origin</b></td>
                            <td><b class="size-2">Destination</b></td>
                            <td><b class="size-2">Pieces</b></td>
                            <td><b class="size-2">On hold</b></td>
                             <td><b class="size-2">Schedule</b></td>
                             <td><b class="size-2">Channel</b></td>
                            <td><b class="size-2">Weight</b></td>
                            <td><b class="size-2">Status</b></td>
                        </tr>
        
          				<tr class="light">
                            <td>11/16/2019</td>
                            <td>Jeddah</td>
                            <td>Riyadh</td>
                            <td>0</td>
                              <td><button class="btn btn-info">NO</button></td>
                             <td><button class="btn btn-success">Yes</button></td>
                              <td><button class="btn btn-success">SMS</button></td>
                            <td>0Kg</td>
                            <td style="background-color:#AEFFAE; ">
                                    <span class="icon-car"></span> Booked-reverse pick</td>
                        </tr>
                        
       
                        <tr>
                        <td colspan="6">
                        <a href="<?php echo base_url('detail'); ?>" class="button-4 right btn btn-primary" target="_blank"><span>View Details</span></a></td>
                        </tr>
          				        				</tbody></table>
                                 				        				
                                                
        				</div>
    				</div>
    </section>		
<?php include APPPATH.'views/includes/footer.php';?>