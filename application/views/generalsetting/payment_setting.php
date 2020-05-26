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
                    <li class="breadcrumb-item active" aria-current="page">General Setting</li>
					<li class="breadcrumb-item active" aria-current="page">Payment Setting</li>
                </ol>
    </nav>
	<div class="container">
                <!-- Title -->
            <div class="breadcrumb-line">
	            <div class="hk-pg-header">
			    <h4><i data-feather="arrow-left-circle"></i></i> 
                <span class="text-semibold"></span>Payment Setting</h4>
			    </div>
			</div>
	<div class="row">
    <div class="col-xl-12">
        <div class="panel-body">
	        <form role="form"  method="post"  name="" enctype="multipart/form-data">
			<section class="hk-sec-wrapper">
			<h5 class="hk-sec-title">Payment Setting</h5><br>
			<section class="hk-sec-wrapper">
			<div class="panel-heading">
                <i class="fa fa-paypal fa-1x default_color"></i>&nbsp; Paypal
            </div><hr>
			        
			        <div class="col-sm-8">
								<label>Paypal</label>&nbsp;&nbsp;
								 <input type="radio" value="Y" name="paypal"  checked="checked"/>&nbsp;&nbsp;
                                 <strong>On</strong>&nbsp;&nbsp;
                                 <input type="radio" value="N" name="paypal" checked="checked"/>&nbsp;&nbsp;
                                 <strong>Off</strong>
                                
					</div>
					<div class="row">
                        <div class="col-sm-8">
                                   
                            <div class="form-group">
                                <label for="inputText">Email</label>
                                     <input type="email" id="inputText" class="form-control" aria-describedby="textHelpBlock">
                                </div>   
                        </div>
					</div>
								
			</section>
			<section class="hk-sec-wrapper">
			<div class="panel-heading">
                <i class="fa fa-money fa-1x default_color"></i>&nbsp; Wire Transfer
            </div><hr>
			        
			        <div class="col-sm-8">
								<label>Wire Transfer</label>&nbsp;&nbsp;
								 <input type="radio" value="Y" name="wire"  checked="checked"/>&nbsp;&nbsp;
                                 <strong>On</strong>&nbsp;&nbsp;
                                 <input type="radio" value="N" name="wire" checked="checked"/>&nbsp;&nbsp;
                                 <strong>Off</strong>
                                
					</div>
					<div class="row">
                        <div class="col-sm-8">
                                   
                            <div class="form-group">
                                <label for="inputText">Wire Detail</label>
                                     <input type="email" id="inputText" class="form-control" aria-describedby="textHelpBlock">
                                </div>   
                        </div>
					</div>
								
			</section>
			<button type="submit" class="btn btn-primary mr-10">Update</button>
			</section>
			</form>
		</div>	
	</div>		
	</div>			<?php include APPPATH.'views/includes/footer.php';?>