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
            <li class="breadcrumb-item active" aria-current="page">Manifest Management</li>
			<li class="breadcrumb-item active" aria-current="page">Verification Date Update</li>
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
            <h5 class="panel-title">Verification Date Update</h5>
    </div><br>
	<div class="row">
        <div class="col-sm">
            <div class="row">
			    <div class="col-md-12">
				<textarea class="form-control mt-15" rows="6" placeholder="Please Enter your AWB No."></textarea>
				</div>
				<div class="col-md-2"><br>
				    <label>&nbsp;&nbsp;</label>
                    <button type="submit" name="submit" class="btn btn-success form-control">Update</button>
                </div>
			</div>
		</div>
    </div>		
   </section>		
	<?php include APPPATH.'views/includes/footer.php';?>