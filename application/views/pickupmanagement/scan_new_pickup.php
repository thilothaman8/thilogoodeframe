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
                    <li class="breadcrumb-item active" aria-current="page">Pickup Management</li>
					<li class="breadcrumb-item active" aria-current="page">Scan New Pickup</li>
                </ol>
    </nav>
	<div class = "container">
	<div class="breadcrumb-line">
	    <div class="hk-pg-header">
            <h4><i data-feather="arrow-left-circle"></i></i> 
            <span class="text-semibold"></span>Scan New Pickup</h4>
		</div>
	</div>
	<section class="hk-sec-wrapper">
	<h5>Scan New Pickup</h5><br>
	<div class="row">
                                <div class="col-sm">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <label>--Select Country--</label>
                                            <select class="form-control custom-select  mt-8">
                                                <option selected>Select</option>
                                                <option value="1">One</option>
                                                <option value="2">Two</option>
                                                <option value="3">Three</option>
                                            </select><br><br>
                                             <label>Route Code</label>&nbsp;&nbsp;
					                         <a href="" target="_new" class="fa fa-plus">Add New Route</a>
                                             <select class="form-control custom-select  mt-8">
                                                <option selected>--Select--</option>
                                                <option value="1">One</option>
                                                <option value="2">Two</option>
                                                <option value="3">Three</option>
                                            </select>
                                        </div>
                                        <div class="col-md-6">
                                            <label>Select City</label>
                                            <select class="form-control custom-select mt-8">
                                                <option selected>--Select City--</option>
                                                <option value="1" disabled>One</option>
                                                <option value="2" disabled>Two</option>
                                                <option value="3" disabled>Three</option>
                                            </select><br><br>
                                            <label>Select Courier</label>&nbsp;&nbsp;
					                        <a href="" target="_new" class="fa fa-plus">Add Courier</a>
                                            <select class="form-control custom-select  mt-8">
                                                <option selected>--Select--</option>
                                                <option value="1">One</option>
                                                <option value="2">Two</option>
                                                <option value="3">Three</option>
                                            </select><br><br>
											<label>Scan Barcode</label>
                                            <input class="form-control mt-8" type="text" placeholder="">
                                    </div>
                                </div>
								<div class="col-md-3">
								<button type="submit" name="submit" class="btn btn-primary form-control">Make Pickup Sheet</button>
								</div>
    </div>
	
	</section>
	<section class="hk-sec-wrapper">
		<table id="datable_1" class="table table-hover w-100 display pb-30">
										
                                            <thead>
                                                <tr>
                                                    <th>Sr.No.</th>
                                                    <th>AWB No.</th>
                                                    <th>Shipper</th>
                                                    <th>Pieces</th>
                                                    <th>Weight</th>
                                                    <th>Origin</th>
													<th>Destination</th>
                                                </tr>
                                            </thead>
		</table>
		

</section>
   			
   <?php include APPPATH.'views/includes/footer.php';?>