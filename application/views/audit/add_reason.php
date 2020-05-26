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
                    <li class="breadcrumb-item active" aria-current="page">Audit</li>
					<li class="breadcrumb-item active" aria-current="page">Add Reason</li>
                </ol>
    </nav>
	<div class = "container">
	<div class="breadcrumb-line">
	    <div class="hk-pg-header">
            <h4><i data-feather="arrow-left-circle"></i></i> 
            <span class="text-semibold"></span>Add Reason</h4>
		</div>
	</div>	
 					<section class="hk-sec-wrapper">
                        <h5>Add Reason</h5><br>
                    					
                    <section class="hk-sec-wrapper">						
                        <div class="row">
                            <div class="col-sm">
								<div class="col-sm-8">
                                    <form name="uplaod_file" method="post" action="" enctype="multipart/form-data">
                                        
                                            
                                        
										<div class="form-group">
            
                                         <label>Select Reason</label>
                                         <select class="form-control custom-select">
                                                <option selected>--Select Type--</option>
                                                <option value="1">One</option>
                                                <option value="2">Two</option>
                                                <option value="3">Three</option>
                                            </select>
			
                                        </div>
										<div class="form-group">
            
                                        <label>Audit Reason</label>
                                        <textarea name="description" class="form-control" value="" /></textarea>
                                        </div>
			
		                            <div class="form-group">
                                     <label>Audit Status</label>
                                    <select class="form-control custom-select">
                                                <option selected>--Select Type--</option>
                                                <option value="1">One</option>
                                                <option value="2">Two</option>
                                                <option value="3">Three</option>
                                            </select>
			                        </div><br>
                                     <button type="submit" class="btn btn-primary mr-10">Submit</button>
                                    </form>
                                </div>
                            </div>
						</div>
					</section>
                    </section>	
				<?php include APPPATH.'views/includes/footer.php';?>