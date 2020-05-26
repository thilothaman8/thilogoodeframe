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
			<li class="breadcrumb-item active" aria-current="page">Add Coupon</li>
        </ol>
    </nav>
	<div class = "container">
	<div class="breadcrumb-line">
	    <div class="hk-pg-header">
            <h4><i data-feather="arrow-left-circle"></i></i> 
            <span class="text-semibold"></span>Add Coupon</h4>
		</div>
	</div>
	<section class="hk-sec-wrapper">
		<div class="panel-heading">
				<h5 class="panel-title">Add Coupon</h5>
		</div><br>
		<section class="hk-sec-wrapper">
		<div class="panel-body">       
	    <div class="row">
		<div class="col-lg-12">
			<div class="panel panel-default">
				<div class="panel-body">
        			<form role="form" id="form" name="add_coupne" action="" enctype="multipart/form-data" method="post">
 
        					<input type="hidden" name="coupne_id" value="">
                            <input type="hidden" name="start_date" value="">
                            <input type="hidden" name="entry_date" value="">
                            <input type="hidden" name="expire_date" value="">
     
                            <div class="form-group" id="alert_price">
                            <label>Coupon Price In %</label>
                            <input type="text" name="price" size="30" value="" class="form-control">
                                        
                            </div>
        
                            <div class="form-group" id="alert_validty">
                                  <label>Start Date</label>
                                  <input type="date" name="start_date" size="30" value="" class="form-control">  
                            </div>
                            
        					<button type="submit" name="submit" class="btn btn-primary" onclick="return Valid_add_coupne(document.add_coupne);">Submit</button>
         					 
                            <button type="reset" class="btn btn-primary">Reset </button>
     						</form>
                </div>
            </div> 
        </div>
    </div>
</div>
</section>
</section>		
<?php include APPPATH.'views/includes/footer.php';?>