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
					<li class="breadcrumb-item active" aria-current="page">SMTP Setting</li>
                </ol>
            </nav>
            <!-- /Breadcrumb -->

    
        <div class="container">
                <!-- Title -->
            <div class="breadcrumb-line">
	            <div class="hk-pg-header">
			    <h4><i data-feather="arrow-left-circle"></i></i> 
                <span class="text-semibold"></span>SMTP Configuration</h4>
			    </div>
			</div>
<div class="row">
    <div class="col-xl-12">
        <div class="panel-body">
	        <form role="form"  method="post"  name="" enctype="multipart/form-data">
	            <div class="panel panel-default">
	            
				    <section class="hk-sec-wrapper">
                    <h5 class="hk-sec-title">Social Setting</h5><br>
					    <div class="row">
						        <div class="col-sm-8">
								<label>Mail On/Off</label>&nbsp;&nbsp;
								 <input type="radio" value="Y" name="smtp_onoff"  checked="checked"/>&nbsp;&nbsp;
                                 <strong>On</strong>&nbsp;&nbsp;
                                 <input type="radio" value="N" name="smtp_onoff" checked="checked"/>&nbsp;&nbsp;
                                 <strong>Off</strong>
                                
								</div>
                                <div class="col-sm-8">
                                   
                                        <div class="form-group">
                                            <label for="inputText">Port</label>
                                            <input type="text" id="inputText" class="form-control" aria-describedby="textHelpBlock">
                                        </div>   
                                </div>
							</div>
							<div class="row">
                                <div class="col-sm-8">
                                   
                                        <div class="form-group">
                                            <label for="inputText">Secure</label>
                                            <input type="text" id="inputText" class="form-control" aria-describedby="textHelpBlock">
                                        </div>   
                                </div>
							</div>
							<div class="row">
                                <div class="col-sm-8">
                                   
                                        <div class="form-group">
                                            <label for="inputText">Host</label>
                                            <input type="text" id="inputText" class="form-control" aria-describedby="textHelpBlock">
                                        </div>   
                                </div>
							</div>
							<div class="row">
                                <div class="col-sm-8">
                                   
                                        <div class="form-group">
                                            <label for="inputText">Username</label>
                                            <input type="text" id="inputText" class="form-control" aria-describedby="textHelpBlock">
                                        </div>   
                                </div>
							</div>
							<div class="row">
                                <div class="col-sm-8">
                                   
                                        <div class="form-group">
                                            <label for="inputText">Password</label>
                                            <input type="password" id="inputPassword" class="form-control" aria-describedby="passwordHelpBlock">
                                        </div>   
                                </div>
							</div>
							
							<button type="submit" class="btn btn-primary mr-10">Update</button>
						</div>
                    </section>
	
	            </div>
			</form>
	    </div>
	</div>
</div>
	
	
				<?php include APPPATH.'views/includes/footer.php';?>