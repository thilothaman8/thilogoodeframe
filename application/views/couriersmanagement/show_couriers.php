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
            <li class="breadcrumb-item active" aria-current="page">Couriers Management</li>
			<li class="breadcrumb-item active" aria-current="page">Show Couriers</li>
        </ol>
    </nav>
	<div class = "container">
	<div class="breadcrumb-line">
	    <div class="hk-pg-header">
            <h4><i data-feather="arrow-left-circle"></i></i> 
            <span class="text-semibold"></span>Show Couriers</h4>
		</div>
	</div>
	<section class="hk-sec-wrapper">
		<div class="panel-heading">
				<h5 class="panel-title">Show Couriers</h5>
		</div><br>
		<div class="panel-body">
        
        <div class = "row">
		<div class = "col-md-3">
        <label><strong>Import File</strong></label><br>
        <span class="field">
        <input type="file" name="uploadedfile" value="" size='20' class="btn btn-info">
        <span id="weight" class="alert"></span></span></br>
        <button type="submit" class="btn btn-primary" name="submit" value="submit" onClick="">Update Couriers</button>                                           
        </div>
         <div class = "col-md-6">
		 </div>
        <div class="heading-elements">
        <a href="" class="" > <i class="fa fa-file-excel-o fa-2x"></i> <br />Import CSV Shelve</a>
        </div>  
        
        </div>
		</div><br>
		<div class="table-responsive">
        <table class="table table-hover mb-0">
			<thead>
				<tr> 
				<form name="" method="post" action=""></form>
				<th colspan="7">
				<input type="text" class="form-control" name="search_val" value="" placeholder="Enter Messanger Name ,Code,Branch,Mobile,Email,Vehicle number, City" onfocus="this.value=''">
				</th>
				
				<th colspan="1">                
				<input type="submit" name="Submit" class="btn btn-primary" value="Search" onclick="return Valid_search(document.search_form);">
				</th>
				
				<th colspan="2">
				<input class="btn-primary" type="button" onclick="create_zip();" value="Export to Zip" style="float:right;">
				</th>
				
				</tr>
			
				<tr>
					<th>#</th>
					<th>Name</th>
					<th>Supplier</th>
					<th>code</th>
					<th>City</th>
					<th>Mobile</th>
					<th>Email</th>
					<th>Vehicle Number</th>
					<th>Image</th>
					<th>Action</th>
				</tr>
			</thead>
			<tbody>
			    <tr>
					<td>1</td>
					<td class="text_cap">Benjamin Benjamin Makur </td>
					 <td class="text_cap">TAM EXPRESS</td>
					<td><span class="label label-warning">RUH-272</span></td>
					<td class="text_cap">Riyadh</td>
					<td>0500588519</td>
					<td>RUH-272@tamco.sa</td>
					<td>ABC</td>
					<td><img src="<?php echo base_url()."assets/"; ?>dist/img/4image.png" width="50px;" height="50px;"></td>
				  
					<td>
						<div class="btn-group dropdown">
									<button type="button" class="btn btn-primary"><i class="icon-list"></i></button>
									<button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
									</button>
									<div class="dropdown-menu w-210p">
									<a class="dropdown-item" href="#"><i class="fa fa-check fa-fw"></i>Active</a>
									<a class="dropdown-item" href="#"><i class="fa fa-pencil-square-o fa-fw"></i>Edit</a>
									<a class="dropdown-item" href="#"><i class="fa fa-trash-o fa-fw"></i>Delete</a>
									<a class="dropdown-item" href="#"><i class="fa fa-info"></i>View detail</a>
									<a class="dropdown-item" href="#"><i class="fa fa-tachometer"></i>Odo Meter Detail</a>
									<a class="dropdown-item" href="#"><i class="fa fa-file-o fa-fw"></i>Assign Route</a>
									
									</div>
								</div>
					</td>
					</tr>
					<tr>
							<td>2</td>
							<td class="text_cap">Faisal Alamgir Muhammad Almagir </td>
							<td class="text_cap">TAM EXPRESS</td>
							<td><span class="label label-warning">RUH-271</span></td>
							<td class="text_cap">Riyadh</td>
							<td>500663736</td>
							<td>RUH-271@tamco.sa</td>
							<td>ABC</td>
							<td><img src="<?php echo base_url()."assets/"; ?>dist/img/4image.png" width="50px;" height="50px;"></td>
							<td>
							<div class="btn-group dropdown">
									<button type="button" class="btn btn-primary"><i class="icon-list"></i></button>
									<button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
									</button>
									<div class="dropdown-menu w-210p">
									<a class="dropdown-item" href="#"><i class="fa fa-check fa-fw"></i>Active</a>
									<a class="dropdown-item" href="#"><i class="fa fa-pencil-square-o fa-fw"></i>Edit</a>
									<a class="dropdown-item" href="#"><i class="fa fa-trash-o fa-fw"></i>Delete</a>
									<a class="dropdown-item" href="#"><i class="fa fa-info"></i>View detail</a>
									<a class="dropdown-item" href="#"><i class="fa fa-tachometer"></i>Odo Meter Detail</a>
									<a class="dropdown-item" href="#"><i class="fa fa-file-o fa-fw"></i>Assign Route</a>
									
									</div>
								</div>
							</td>
					</tr>
					<tr>
							<td>3</td>
							<td class="text_cap">Irfan khan sher afzal </td>
							<td class="text_cap">TAM EXPRESS</td>
							<td><span class="label label-warning">RUH-270</span></td>
							<td class="text_cap">Riyadh</td>
							<td>500667176</td>
							<td>RUH-270@tamco.sa</td>
							<td>ABC</td>
							<td><img src="<?php echo base_url()."assets/"; ?>dist/img/4image.png" width="50px;" height="50px;"></td>
							<td>
							<div class="btn-group dropdown">
									<button type="button" class="btn btn-primary"><i class="icon-list"></i></button>
									<button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
									</button>
									<div class="dropdown-menu w-210p">
									<a class="dropdown-item" href="#"><i class="fa fa-check fa-fw"></i>Active</a>
									<a class="dropdown-item" href="#"><i class="fa fa-pencil-square-o fa-fw"></i>Edit</a>
									<a class="dropdown-item" href="#"><i class="fa fa-trash-o fa-fw"></i>Delete</a>
									<a class="dropdown-item" href="#"><i class="fa fa-info"></i>View detail</a>
									<a class="dropdown-item" href="#"><i class="fa fa-tachometer"></i>Odo Meter Detail</a>
									<a class="dropdown-item" href="#"><i class="fa fa-file-o fa-fw"></i>Assign Route</a>
									
									</div>
								</div>
							</td>
                    </tr>
					<tr>
						<td>4</td>
						<td class="text_cap">Khalid Abdullah</td>
						 <td class="text_cap">TAM EXPRESS</td>
						<td><span class="label label-warning">RUH-269</span></td>
						<td class="text_cap">Riyadh</td>
						<td>0504448783</td>
						<td>ruh269@tamco.sa</td>
						<td>Abc 123</td>
						<td><img src="<?php echo base_url()."assets/"; ?>dist/img/4image.png" width="50px;" height="50px;"></td>
                        <td>
						<div class="btn-group dropdown">
									<button type="button" class="btn btn-primary"><i class="icon-list"></i></button>
									<button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
									</button>
									<div class="dropdown-menu w-210p">
									<a class="dropdown-item" href="#"><i class="fa fa-check fa-fw"></i>Active</a>
									<a class="dropdown-item" href="#"><i class="fa fa-pencil-square-o fa-fw"></i>Edit</a>
									<a class="dropdown-item" href="#"><i class="fa fa-trash-o fa-fw"></i>Delete</a>
									<a class="dropdown-item" href="#"><i class="fa fa-info"></i>View detail</a>
									<a class="dropdown-item" href="#"><i class="fa fa-tachometer"></i>Odo Meter Detail</a>
									<a class="dropdown-item" href="#"><i class="fa fa-file-o fa-fw"></i>Assign Route</a>
									
									</div>
								</div>
						</td>
                    </tr>
					<tr>
						<td colspan="10">
							<form name="frm_pagi" action="" method="post">
								<input type="hidden" name="pageval" id="pagevalid" value="0">
								<div class="input-group pagination"><div class="input-group-btn"> 
								<input type="submit" class="btn btn-default" value="‹ Prev">
								<input type="submit" class="btn btn-primary " value="1 " onclick="return callpage(1);">
								<input type="submit" class="btn btn-default center" value="2" onclick="return callpage(2);">
								<input type="submit" class="btn btn-default center" value="3" onclick="return callpage(3);">
								<input type="submit" class="btn btn-default center" value="4" onclick="return callpage(4);">
								<input type="submit" class="btn btn-default center" value="5" onclick="return callpage(5);">
								<input type="submit" class="btn btn-default center" value="Next ›" onclick="return callpage(2);">
								</div></div>
							</form>
						</td>
        </tr>
			</tbody>
		</table>
		</div>	
</section>		
<?php include APPPATH.'views/includes/footer.php';?>