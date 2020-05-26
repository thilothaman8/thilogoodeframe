<!DOCTYPE html>

<html lang="en">



<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
    <title>Fastcoo</title>
    <meta name="description" content="A responsive bootstrap 4 admin dashboard template by hencework" />

    <!-- Favicon -->
    <?php $this->load->view('includes/styles');?>
	

</head>

<body>
 
   <?php $this->load->view('includes/header');?>
     <!-- Toggles CSS -->
  
   <nav class="hk-breadcrumb" aria-label="breadcrumb">
                <ol class="breadcrumb breadcrumb-light bg-transparent">
                    <li class="breadcrumb-item"><a href="#"><i class="glyphicon glyphicon-home"></i>   Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page">General Setting</li>
					<li class="breadcrumb-item active" aria-current="page">Social Details</li>
                </ol>
            </nav>
            <!-- /Breadcrumb -->

    
        <div class="container">
                <!-- Title -->
            <div class="breadcrumb-line">
	            <div class="hk-pg-header">
			    <h4><i data-feather="arrow-left-circle"></i></i> 
                <span class="text-semibold"></span>Social Details</h4>
			    </div>
			</div>
	
	<div class="row">
    <div class="col-xl-12">
	<div class="panel-body">
	<form role="form"  method="post"  name="" enctype="multipart/form-data">
	<div class="panel panel-default">
	<section class="hk-sec-wrapper">
	    <h5 class="hk-sec-title">Social Setting</h5><br>
	        <section class="hk-sec-wrapper">
                            <h6 class="hk-sec-title"><i class="fa fa-facebook-square fa-1x default_color"></i>  Facebook Settings</h6><br>
                            <div class="row">
                                <div class="col-sm-8">
                                   
                                        <div class="form-group">
                                            <label for="inputText">Facebook Page Name</label>
                                            <input type="text" id="inputText" class="form-control" aria-describedby="textHelpBlock">
                                        </div>   
                                </div>
							</div>
							<fieldset class="form-group mb-15">
                                    <div class="row">
									    <div class="col-md-2 mt-15">
                                            <div class="custom-control custom-radio radio-teal">
                                                <input type="radio" id="facebook" name="facebook" class="custom-control-input">
                                                <label class="custom-control-label" for="facebook">On</label>
                                            </div>
											
                                        </div>
										<div class="col-md-2 mt-15">
                                            <div class="custom-control custom-radio radio-teal">
                                                <input type="radio"  id="facebook1" name="facebook" class="custom-control-input">
                                                <label class="custom-control-label" for="facebook1">Off</label>
                                            </div>
											
                                        </div>
                                    </div>
                            </fieldset>
            </section>
			<section class="hk-sec-wrapper">
                            <h6 class="hk-sec-title"><i class="fa fa-twitter-square fa-1x default_color"></i>  Twitter Settings</h6><br>
                            <div class="row">
                                <div class="col-sm-8">
                                   
                                        <div class="form-group">
                                            <label for="inputText">Twitter Page Name</label>
                                            <input type="text" id="inputText" class="form-control" aria-describedby="textHelpBlock">
                                        </div>   
                                </div>
							</div>
							<fieldset class="form-group mb-15">
                                    <div class="row">
									    <div class="col-md-2 mt-15">
                                            <div class="custom-control custom-radio radio-teal">
                                                <input type="radio" id="customRadio3" name="customRadio3" class="custom-control-input" >
                                                <label class="custom-control-label" for="customRadio3">On</label>
                                            </div>
											
                                        </div>
										<div class="col-md-2 mt-15">
                                            <div class="custom-control custom-radio radio-teal">
                                                <input type="radio" id="customRadio4" name="customRadio3" class="custom-control-input" >
                                                <label class="custom-control-label" for="customRadio4">Off</label>
                                            </div>
											
                                        </div>
                                    </div>
                            </fieldset>
			</section>
			<section class="hk-sec-wrapper">
                            <h6 class="hk-sec-title"><i class="fa fa-youtube-square fa-1x default_color"></i>  Youtube Settings</h6><br>
                            <div class="row">
                                <div class="col-sm-8">
                                   
                                        <div class="form-group">
                                            <label for="inputText">Youtube Page Name</label>
                                            <input type="text" id="inputText" class="form-control" aria-describedby="textHelpBlock">
                                        </div>   
                                </div>
							</div>
							<fieldset class="form-group mb-15">
                                    <div class="row">
									    <div class="col-md-2 mt-15">
                                            <div class="custom-control custom-radio radio-teal">
                                                <input type="radio" id="customRadio5" name="customRadio5" class="custom-control-input" >
                                                <label class="custom-control-label" for="customRadio5">On</label>
                                            </div>
											
                                        </div>
										<div class="col-md-2 mt-15">
                                            <div class="custom-control custom-radio radio-teal">
                                                <input type="radio" id="customRadio6" name="customRadio5" class="custom-control-input" >
                                                <label class="custom-control-label" for="customRadio6">Off</label>
                                            </div>
											
                                        </div>
                                    </div>
                            </fieldset>    
            </section>
			<section class="hk-sec-wrapper">
                            <h6 class="hk-sec-title"><i class="fa fa-instagram fa-1x default_color"></i>  Instagram Settings</h6><br>
                            <div class="row">
                                <div class="col-sm-8">
                                   
                                        <div class="form-group">
                                            <label for="inputText">Instagram Page Name</label>
                                            <input type="text" id="inputText" class="form-control" aria-describedby="textHelpBlock">
                                        </div>   
                                </div>
								
							</div>
							
							  
							<fieldset class="form-group mb-15">
                                    <div class="row">
									    <div class="col-md-2 mt-15">
                                            <div class="custom-control custom-radio radio-teal">
                                                <input type="radio" id="customRadio7" name="customRadio7" class="custom-control-input" >
                                                <label class="custom-control-label" for="customRadio7">On</label>
                                            </div>
											
                                        </div>
										<div class="col-md-2 mt-15">
                                            <div class="custom-control custom-radio radio-teal">
                                                <input type="radio" id="customRadio8" name="customRadio7" class="custom-control-input" >
                                                <label class="custom-control-label" for="customRadio8">Off</label>
                                            </div>
											
                                        </div>
                                    </div>
                            </fieldset>
            </section>
			
			<button type="submit" class="btn btn-primary mr-10">Update</button>
	</section>
	</div>
	</div>
	</form>	
	</div>
	</div>
	</div>
	
	
	

	
	 <?php $this->load->view('includes/footer');?>
	