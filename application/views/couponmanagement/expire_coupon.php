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
            <li class="breadcrumb-item active" aria-current="page">Coupon Management </li>
			<li class="breadcrumb-item active" aria-current="page">Show Expire Coupon</li>
        </ol>
    </nav>
	<div class = "container">
	<div class="breadcrumb-line">
	    <div class="hk-pg-header">
            <h4><i data-feather="arrow-left-circle"></i></i> 
            <span class="text-semibold"></span>Show Expire Coupon</h4>
		</div>
	</div>
	<section class="hk-sec-wrapper">
	<div class="panel-heading">
				<h5 class="panel-title">Show Expire Coupon</h5>
		</div><br>
		<table class="table table-striped table-bordered table-hover">
        <thead>
            <tr>
                <th>Sr.No.</th>
                <th>Code</th>
                <th>Price In %</th>
                <th>Start Date</th>
                <th>Entry Date</th>
                <th>Expire Date</th>
                <th>Action</th>
            </tr>
        </thead>
        
        <tbody>
            
            <tr>
            <td colspan="7">
            <div class="alert alert-danger">
                Record Not Found
            </div>
            </td>
            </tr>
                    
        </tbody>
        </table>
</section>			
<?php include APPPATH.'views/includes/footer.php';?>