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
			<li class="breadcrumb-item active" aria-current="page">Show Customer</li>
        </ol>
    </nav>
	<div class = "container">
	<div class="breadcrumb-line">
	    <div class="hk-pg-header">
            <h4><i data-feather="arrow-left-circle"></i></i> 
            <span class="text-semibold"></span>Show Customer</h4>
		</div>
	</div>
	<section class="hk-sec-wrapper">
		<div class="panel-heading">
				<h5 class="panel-title">Show Customer</h5>
		</div><br>
		
		<section class="hk-sec-wrapper">
		<div class="table-responsive">
		 
            <table class="table table-hover mb-0">
				<thead>
					<tr>
					
					
						<th colspan="8">
							<input type="text" class="form-control" name="search_val" value="" placeholder="Enter a Unique id or enter name or enter email or enter mobile number" onfocus="this.value=''"></th>
						<th colspan="1">
						<input type="submit" name="Submit" class="btn btn-primary" value="Search" onclick="return Valid_search(document.search_form);"></th>
				
								
					</tr>
						
					<tr>
							<th>#  <input type="checkbox" onclick="togglecustomer(this)" name="selectAll[]" value=""><br>Select All</th>
							<th>UID Account Number</th>
							<th>Company name</th>
							<th>Name</th>
							<th>Company picture</th>
							<th>Phone</th>			
							<th>Phone 2</th>
							<th>Email</th>
							<th>Action</th>
					</tr>
				</thead>
			    <tbody>
				    <tr>
						<td>1<br>
						<input type="checkbox" name="delete_all[]" id="delete_all" value="65"></td>
						<td>7591624</td>
						<td><a href=""> gsrhospital</a></td>
						<td>deepak</td>
						<td><img src="<?php echo base_url()."assets/"; ?>dist/img/3videoicon.png" width="50px;" height="50px;"></td>
						<td>7014117671</td>
						<td></td> 
						<td>deepakkumar201185@gamail.com</td>
						<td>
							<div class="btn-group dropdown">
							<button type="button" class="btn btn-primary"><i class="icon-list"></i></button>
							<button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
							</button>
							<div class="dropdown-menu w-210p">
							<a class="dropdown-item" href="#"><i class="fa fa-check fa-fw"></i>&nbsp;Active</a>
							<a class="dropdown-item" href="<?php echo base_url('edit_customer'); ?>"><i class="fa fa-pencil-square-o fa-fw"></i>&nbsp;Edit</a>
							<a class="dropdown-item" href="#"><i class="fa fa-trash-o fa-fw"></i>&nbsp;Delete</a>
							<a class="dropdown-item" href="#"><i class="fa fa-money fa-fw"></i>&nbsp;account no</a>
							<a class="dropdown-item" href="<?php echo base_url('payment_information'); ?>"><i class="fa fa-money fa-fw"></i>&nbsp;Payment Detail</a>
							<a class="dropdown-item" href="<?php echo base_url('customer_booking_detail'); ?>"><i class="fa fa-exclamation fa-fw"></i>&nbsp;Booking Details</a>
							<a class="dropdown-item" href="#"><i class="fa fa-user"></i>&nbsp;B2C Client</a>
							<a class="dropdown-item" href="<?php echo base_url('add_zone'); ?>"><i class="fa fa-list"></i>&nbsp;Set Price for gsrhospital</a>
							<a class="dropdown-item" href="<?php echo base_url('weight_range'); ?>"><i class="fa fa-balance-scale"></i>&nbsp; Set Weight range for gsrhospital</a>
							<a class="dropdown-item" data-toggle="modal" data-target="#exampleModalForms"><i class="fa fa-credit-card"></i>&nbsp;Rate Template</a>
							
							</div>
						    </div>
						</td>
                    </tr>
					<tr>
						<td>2<br>
						<input type="checkbox" name="delete_all[]" id="delete_all" value="64"></td>
						<td>6258347</td>
						<td><a href=""> Fastcoo</a></td>
						<td>Nadeem</td>
						<td><img src="<?php echo base_url()."assets/"; ?>dist/img/3videoicon.png" width="50px;" height="50px;"></td>
						<td>8010001146</td>
						<td></td> 
						<td>nadeem@fastcoo.com</td>
						<td>
							<div class="btn-group dropdown">
							<button type="button" class="btn btn-primary"><i class="icon-list"></i></button>
							<button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
							</button>
							<div class="dropdown-menu w-210p">
							<a class="dropdown-item" href="#"><i class="fa fa-check fa-fw"></i>&nbsp;Active</a>
							<a class="dropdown-item" href="<?php echo base_url('edit_customer'); ?>"><i class="fa fa-pencil-square-o fa-fw"></i>&nbsp;Edit</a>
							<a class="dropdown-item" href="#"><i class="fa fa-trash-o fa-fw"></i>&nbsp;Delete</a>
							<a class="dropdown-item" href="#"><i class="fa fa-money fa-fw"></i>&nbsp;account no</a>
							<a class="dropdown-item" href="<?php echo base_url('payment_information'); ?>"><i class="fa fa-money fa-fw"></i>&nbsp;Payment Detail</a>
							<a class="dropdown-item" href="<?php echo base_url('customer_booking_detail'); ?>"><i class="fa fa-exclamation fa-fw"></i>&nbsp;Booking Details</a>
							<a class="dropdown-item" href="#"><i class="fa fa-user"></i>&nbsp;B2C Client</a>
							<a class="dropdown-item" href="<?php echo base_url('add_zone'); ?>"><i class="fa fa-list"></i>&nbsp;Set Price for gsrhospital</a>
							<a class="dropdown-item" href="<?php echo base_url('weight_range'); ?>""><i class="fa fa-balance-scale"></i>&nbsp; Set Weight range for gsrhospital</a>
							<a class="dropdown-item" data-toggle="modal" data-target="#exampleModalForms"><i class="fa fa-credit-card"></i>&nbsp;Rate Template</a>
							
							</div>
                            </div>
						</td>
                </tr>
				<tr>
					<td>3<br>
					<input type="checkbox" name="delete_all[]" id="delete_all" value="64"></td>
					<td>6258347</td>
					<td><a href=""> Fastcoo</a></td>
					<td>Nadeem</td>
					<td><img src="<?php echo base_url()."assets/"; ?>dist/img/3videoicon.png" width="50px;" height="50px;"></td>
					<td>8010001146</td>
					<td></td> 
					<td>nadeem@fastcoo.com</td>
					<td>
					    <div class="btn-group dropdown">
							<button type="button" class="btn btn-primary"><i class="icon-list"></i></button>
							<button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
							</button>
							<div class="dropdown-menu w-210p">
							<a class="dropdown-item" href="#"><i class="fa fa-check fa-fw"></i>&nbsp;Active</a>
							<a class="dropdown-item" href="<?php echo base_url('edit_customer'); ?>"><i class="fa fa-pencil-square-o fa-fw"></i>&nbsp;Edit</a>
							<a class="dropdown-item" href="#"><i class="fa fa-trash-o fa-fw"></i>&nbsp;Delete</a>
							<a class="dropdown-item" href="#"><i class="fa fa-money fa-fw"></i>&nbsp;account no</a>
							<a class="dropdown-item" href="<?php echo base_url('payment_information'); ?>"><i class="fa fa-money fa-fw"></i>&nbsp;Payment Detail</a>
							<a class="dropdown-item" href="<?php echo base_url('customer_booking_detail'); ?>"><i class="fa fa-exclamation fa-fw"></i>&nbsp;Booking Details</a>
							<a class="dropdown-item" href="#"><i class="fa fa-user"></i>&nbsp;B2C Client</a>
							<a class="dropdown-item" href="<?php echo base_url('add_zone'); ?>"><i class="fa fa-list"></i>&nbsp;Set Price for gsrhospital</a>
							<a class="dropdown-item" href="<?php echo base_url('weight_range'); ?>""><i class="fa fa-balance-scale"></i>&nbsp; Set Weight range for gsrhospital</a>
							<a class="dropdown-item" data-toggle="modal" data-target="#exampleModalForms"><i class="fa fa-credit-card"></i>&nbsp;Rate Template</a>
							</div>
                            </div>
					</td>
                </tr>
				<tr>
					<td>4<br>
					<input type="checkbox" name="delete_all[]" id="delete_all" value="64"></td>
					<td>6258347</td>
					<td><a href=""> Fastcoo</a></td>
					<td>Nadeem</td>
					<td><img src="<?php echo base_url()."assets/"; ?>dist/img/3videoicon.png" width="50px;" height="50px;"></td>
					<td>8010001146</td>
					<td></td> 
					<td>nadeem@fastcoo.com</td>
					<td>
					    <div class="btn-group dropdown">
							<button type="button" class="btn btn-primary"><i class="icon-list"></i></button>
							<button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
							</button>
							<div class="dropdown-menu w-210p">
							<a class="dropdown-item" href="#"><i class="fa fa-check fa-fw"></i>&nbsp;Active</a>
							<a class="dropdown-item" href="<?php echo base_url('edit_customer'); ?>"><i class="fa fa-pencil-square-o fa-fw"></i>&nbsp;Edit</a>
							<a class="dropdown-item" href="#"><i class="fa fa-trash-o fa-fw"></i>&nbsp;Delete</a>
							<a class="dropdown-item" href="#"><i class="fa fa-money fa-fw"></i>&nbsp;account no</a>
							<a class="dropdown-item" href="<?php echo base_url('payment_information'); ?>"><i class="fa fa-money fa-fw"></i>&nbsp;Payment Detail</a>
							<a class="dropdown-item" href="<?php echo base_url('customer_booking_detail'); ?>"><i class="fa fa-exclamation fa-fw"></i>&nbsp;Booking Details</a>
							<a class="dropdown-item" href="#"><i class="fa fa-user"></i>&nbsp;B2C Client</a>
							<a class="dropdown-item" href="<?php echo base_url('add_zone'); ?>"><i class="fa fa-list"></i>&nbsp;Set Price for gsrhospital</a>
							<a class="dropdown-item" href="<?php echo base_url('weight_range'); ?>"><i class="fa fa-balance-scale"></i>&nbsp; Set Weight range for gsrhospital</a>
							<a class="dropdown-item" data-toggle="modal" data-target="#exampleModalForms"><i class="fa fa-credit-card"></i>&nbsp;Rate Template</a>
							</div>
                            </div>
					</td>
                </tr>
				</tbody>
			</table>
		</div>
		</section>
    </section>	
   <!-- Modal Editor -->
            <div class="modal fade" id="exampleModalForms" tabindex="-1" role="dialog" aria-labelledby="exampleModalForms" aria-hidden="true">
            <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
            
            <div class="modal-header">
            
            <h5 class="modal-title">Update the Customer Template</h5> 
            <button type="button" class="close" data-dismiss="modal">×</button>			
            </div>
            
            <form name="search_form" method="post" action=""></form>
            
            <div class="modal-body">
            <div class="form-group">
            <label class="col-sm-2 control-label" for="inputEmail3">Template</label>
            <div class="col-sm-10">
            <select class="form-control" name="template_id" required="required">
            <option value="">Please Select the template</option>
            <option value="1">Template One</option>
            <option value="2">Template Two</option>
            <option value="3">Template Three</option>
            <option value="4">Template Four</option>
            <option value="0">Default</option>
            </select>
            <input type="hidden" class="form-control" name="cust_id" value="65">
            </div>
            </div> 
            </div><br>
            
            <div class="modal-footer">
            <button type="submit" name="submit_template" class="btn btn-primary">Submit</button>
            <button type="button" class="btn btn-primary" data-dismiss="modal">Close</button>
            </div>
            
            
            </div>
            </div>
            </div>

                                    <!-- Modal Carousel-->	
<?php include APPPATH.'views/includes/footer.php';?>