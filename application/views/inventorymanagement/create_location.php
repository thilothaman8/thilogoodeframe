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
                    <li class="breadcrumb-item active" aria-current="page">Inventory Management</li>
					<li class="breadcrumb-item active" aria-current="page">Create Shelve Location</li>
                </ol>
    </nav>
	<div class = "container">
	<div class="breadcrumb-line">
	    <div class="hk-pg-header">
            <h4><i data-feather="arrow-left-circle"></i></i> 
            <span class="text-semibold"></span>Create Shelve Location</h4>
		</div>
	</div>
	<section class="hk-sec-wrapper">
	<h5>Create Shelve Location</h5><br>
	<section class="hk-sec-wrapper">
	<div class="row">
        <div class="col-sm">
            <div class="row">
                <div class="col-md-8">
				<label>Select Country</label>
				<select class="form-control custom-select mt-8">
				        <option selected>--Select--</option>
                        <option value="1">One</option>
                        <option value="2">Two</option>
                        <option value="3">Three</option>
                </select>
				</div>
				<div class="col-md-8"><br>
				<label>Select City</label>
				<select class="form-control custom-select mt-8">
				        <option selected>--Select--</option>
                        <option value="1">One</option>
                        <option value="2">Two</option>
                        <option value="3">Three</option>
                </select>
				</div>
				<div class="col-md-8"><br>
				<label>Shelve Location</label>
                    <input type="text" class="form-control mt-8">
                    
                </div>
			</div>
     	</div>
	</div>	<br>
	<button type="submit" class="btn btn-primary mr-10">Add Shelve Location</button>
    </section>
    </section>		
   <?php include APPPATH.'views/includes/footer.php';?>