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
			<li class="breadcrumb-item active" aria-current="page">Customer Booking Detail</li>
        </ol>
    </nav>
	<div class = "container">
	<div class="page-header-content">
        <div class="page-title">
            <h5><i class="icon-arrow-left52 position-left"></i>
            <span class="text-semibold">Customer Booking Details For ( gsrhospital )</span>
            <p class="pull-right"><span class="btn btn-success btn-xs ">Cash on Delivery</span><span class="btn btn-danger btn-xs">Proceed For Pickup</span></p>  
			 </h5>
        </div>
    </div><br>
	<section class="hk-sec-wrapper">
		<div class="panel-heading">
				<h5 class="panel-title">Customer Booking Details For ( gsrhospital )</h5>
		</div><br>
		<table class="table datatable-show-all table-bordered table-hover datatable-highlight">
    <thead>        <tr>
        <td colspan="9" align="center">
        <h4 style="color:red;">!No data found</h4></td></tr>
		    
</thead></table>
    </section>		
<?php include APPPATH.'views/includes/footer.php';?>